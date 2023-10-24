<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients=Client::all();
        return inertia('Clients/Index',compact('clients'));

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

        $clients=new Client($request->input());
        $clients->save();

        return redirect('clients');

    }

    /**
     * Display the specified resource.
     */
    public function show(client $clients)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(client $clients)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $clients=Client::find($id);
        $clients->fill($request->input())->saveOrFail();
        return redirect('clients');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $clients=Client::find($id);
        $clients->delete();
        return redirect('clients');
        //return redirect()->route('orders.index');
    }
}
