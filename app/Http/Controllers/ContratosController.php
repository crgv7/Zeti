<?php

namespace App\Http\Controllers;

use App\Models\Contratos;
use Illuminate\Http\Request;

class ContratosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contratoss=Contratos::all();
        echo $contratoss;
        return inertia('Contratos/Index',compact('contratoss'));

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


        $request->validate([

            'codigo de UEB' => 'required',
            'Year' => 'required',
            'No. contrato' => 'required',
            'Tipo de contrato' => 'required',
            'Actividad' => 'required',
            'Centro de Negocio' => 'required',
            'Oferente' => 'required',
            'Monto de Contrato en CUP' => 'required',
            'Fecha de Inicio' => 'required',
            'Fecha Fin' => 'required',
            'Fecha Real de Inicio' => 'required',
            'Vigencia' => 'required',
            'Organismo' => 'required',
            'Valor Ejecutado' => 'required',
            'Monto disponible' => 'required',
        ]);
        $contratoss=new Contratos($request->input());
        $contratoss->save();
        //echo "Hola mundo";
        return redirect('contratoss');

    }

    /**
     * Display the specified resource.
     */
    public function show(Contratos $contratos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contratos $contratos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $contratoss=Contratos::find($id);
        $contratoss->fill($request->input())->saveOrFail();
        return redirect('contratoss');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $contratoss=Contratos::find($id);
        $contratoss->delete();
        return redirect('contratoss');
        //return redirect()->route('orders.index');
    }
}
