<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;
use Inertia\Inertia;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        echo "ejeucta funcion";
        $orders=Orders::all();


        return Inertia::render('Orders/Index',['orders' => $orders]);


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
            'producto' => 'required',
            'nombre' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',

        ]);
        $orders=new Orders($request->input());
        $orders->save();
        return redirect('orders');
    }

    /**
     * Display the specified resource.
     */
    public function show(Orders $orders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Orders $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $orders=Orders::find($id);
        $orders->fill($request->input())->saveOrFail();
        return redirect('orders');
    }

    /**
     * Remove the specified resource from storage.
     *   @param \App\Model\Orders
        @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $orders=Orders::find($id);
        $orders->delete();
        return redirect('orders');
        //return redirect()->route('orders.index');
    }
}