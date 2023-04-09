<?php

namespace App\Http\Controllers;

use App\Model\Supermarket;
use Illuminate\Http\Request;

class SupermarketController extends Controller
{
    public function index()
    {
        $supermarketsAll = Supermarket::all();
        return view('home', compact('supermarketsAll'));
    }


    public function create()
    {
        return view('supermarket-CRUD/create');
    }


    public function store(Request $request)
    {
        $dataSupermarket = $request->all();

        $supermarket = new Supermarket();
        $supermarket->fill($dataSupermarket);
        $supermarket->save();

        return redirect()->route('supermarket.show', $supermarket->id);
    }


    public function show(Supermarket $supermarket)
    {
        return view('supermarket-CRUD/show', compact('supermarket'));
    }


    public function edit(Supermarket $supermarket)
    {
        return view('supermarket-CRUD/edit', compact('supermarket'));
    }


    public function update(Request $request, Supermarket $supermarket)
    {
        $dataSupermarket = $request->all();
        $supermarket->update($dataSupermarket);

        return redirect()->route('supermarket.show', $supermarket->id);
    }

    public function destroy(Supermarket $supermarket)
    {
        $supermarket->delete();
        return redirect()->route('supermarket.index');
    }
}
