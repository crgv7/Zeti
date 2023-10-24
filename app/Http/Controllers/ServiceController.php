<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class ServiceController extends Controller
{
    public function index()
    {
        $services=service::all();
        //echo $contratoss;
        return Inertia::render('Services/Index',['serv'=>service::all()->map(function($serv){
            return[
                'id'=>$serv->id,
                'nombre'=>$serv->nombre,
                'descripcion'=>$serv->descripcion,
                'foto'=>asset('storage/'.$serv->foto)
            ];
            })
        ]);
      //  return inertia('Services/Index',compact('services'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if ($request->hasFile('foto')) {
            $image=$request->file('foto')->store('images','public');
            $services=new service($request->input());
            $services->foto=$image;
            $services->save();
        }
       // dd($request->hasFile('foto'));



       /*   echo 'entre al if';
          $file=$request->file('foto');
          $path_destino='images/servicios/';
          $filename=time().'-'.$file->getClientOriginalName();
          $uploadSuccess=$request->file('foto')->move($path_destino, $filename);
          $services->photo=$path_destino.$filename;


       }
*/



        return redirect('services');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $services=service::find($id);
       return inertia('Services/ShowService',[ 'services'=>$services,
                                              'foto'=>asset('storage/'.$services->foto),
                                              'nombre'=>$services->nombre,
                                              'descripcion'=>$services->descripcion]);


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(service $services)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $serv=service::find($id);
        $image=$serv->foto;
        $nombre=$serv->nombre;
        $descripcion=$serv->descripcion;



       // $serv->foto=$image;
        //$serv->fill($request->input())->saveOrFail();

        if( !empty($request->input('nombre'))) {
            $nombre=$request->input('nombre');
        }

        if( !empty($request->input('descripcion'))){
            $descripcion=$request->input('descripcion');
        }

        if($request->hasFile('foto')){
                Storage::delete('public/'.$serv->foto);
                $image=$request->file('foto')->store('images','public');
            }

            $serv->update([
                'nombre'=>$nombre,
                'foto'=>$image,
                'descripcion'=>$descripcion
               ]);


        return redirect('services');
        }










    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $services=service::find($id);
        Storage::delete('public/'.$services->foto);
        $services->delete();
        return redirect('services');
        //return redirect()->route('orders.index');
    }
}
