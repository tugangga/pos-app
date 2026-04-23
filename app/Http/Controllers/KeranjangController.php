<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Produk;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{

    public function kasir() {}

    public function index()
    {
        //  do something
        return redirect('kasir/jualan/coba');
    }


    public function create()
    {
        $produks = Produk::all();
        $keranjangs = Keranjang::all();
        // $keranjangs = Keranjang::where('');

        return view(
            'kasir.jualan.create',
            compact('produks', 'keranjangs')

        );
    }


    public function addkeranjang(Request $request)
    {
        //
        $validated = $request->validate([
            'kode' => 'required|max:100|min:5',
        ]);

        dd($validated);

        Keranjang::create($validated);
        return redirect('/kasir/jualan/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
