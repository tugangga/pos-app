<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $sekarang = date("Y-m-d");
        $produks = Produk::all();
        $keranjangs = Keranjang::whereDate('created_at', $sekarang)->latest()->get();
        $totalHarga = Keranjang::sum(DB::raw('qty * hjual'));
        $totalItems = Keranjang::sum(DB::raw('qty'));

        // $keranjangs = Keranjang::where('');

        return view(
            'kasir.jualan.create',
            compact('produks', 'keranjangs', 'totalHarga', 'totalItems')

        );
    }


    public function addkeranjang(Request $request)
    {
        //
        // dd($request);
        $validated = $request->validate([
            'kode' => 'required|max:100|min:5|exists:produks',
            'qty' => 'required|gte:1',
        ], [
            'kode.exists' => 'kode is not found'
        ]);


        $kode = $validated['kode'];
        $produk = Produk::where('kode', $kode)->first();

        $cekKeranjang = Keranjang::where('kode', $validated['kode'])->get();
        // dd($cekKeranjang);


        $validated['namabrg'] = $produk->namabrg;
        $validated['hjual'] = $produk->hjual;
        $validated['hbeli'] = $produk->hbeli;


        if ($cekKeranjang->isEmpty()) {
            $validated['total'] = $produk->hjual * $validated['qty'];
            Keranjang::create($validated);
        } else {
            $validated['qty'] += $cekKeranjang[0]->qty;
            $validated['total'] = $cekKeranjang[0]->hjual * $validated['qty'];
            Keranjang::where('kode', $validated['kode'])->update($validated);
        }

        return redirect('/kasir/jualan/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request);
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
        $keranjang = Keranjang::find($id);
        $keranjang->delete();
        return redirect('/kasir/jualan/create')->with('sukses', 'Produk ' . $keranjang->namabrg . ' berhasil dihapus !');
    }
}
