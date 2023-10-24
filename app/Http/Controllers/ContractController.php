<?php

namespace App\Http\Controllers;

use App\Models\contract;
use App\Models\client;
use App\Models\service;
use Illuminate\Database\Query\Builder;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class ContractController extends Controller
{




    public function index(Request $request)
    {
        $contracts=DB::table('contracts')->when(Request::input('search'),function (Builder $query,$search) {
            $query->where('Year','LIKE',"%{$search}%")
                  ->orWhere('Tipo_de_contrato', 'LIKE', "%{$search}%")
                  ->orWhere('Organismo', 'LIKE', "%{$search}%");;



        })->get();
       /* $contracts=contract::all()->when($request->input('search'),function($query,$search){
            $query->
            });
            */
        $clients=Client::all();
        $services=Service::all();
        //echo $contratoss;
        return inertia('Contratos/Index',compact('contracts', 'clients', 'services'));

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
    public function store()
    {

        $contracts=new Contract(Request::input());
        $contracts->save();

        return redirect('contracts');

    }

    /**
     * Display the specified resource.
     */
    public function show(contract $contratos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contract $contratos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        //
        $contracts=Contract::find($id);
        $contracts->fill(Request::input())->saveOrFail();
        return redirect('contracts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $contracts=Contract::find($id);
        $contracts->delete();
        return redirect('contracts');
        //return redirect()->route('orders.index');
    }


}
