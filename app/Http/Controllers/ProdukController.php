<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Produk;
use App\Models\Satuan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProdukController extends Controller
{

    public function index()
    {
        $title = 'Produk';
        $produks = Produk::latest()
            ->paginate(10);
        return view('dashboard.produk.index', compact('produks', 'title'));
    }


    public function create()
    {
        $dataSatuans = Satuan::all();
        $dataKategoris = Kategori::all();
        return view('dashboard.produk.create', compact('dataSatuans', 'dataKategoris'));
    }


    public function store(Request $request)
    {
        $tipekode = '';
        $sekarang = date("Y-m-d");
        $thn = (date('Y', strtotime($sekarang)));
        $bln = (date('m', strtotime($sekarang)));
        $tgl = (date('d', strtotime($sekarang)));

        if (is_null($request->kode)) {
            $data = Produk::where('tipe_kode', 'sistem')
                ->whereDate('created_at', $sekarang)
                ->orderBy('created_at', 'desc')
                ->first();

            if (!$data) {
                $kodeBaru = $thn . $bln . $tgl . '00';
            } else {
                $kodeBaru = substr($data->kode, -2) + 1;
                $kodeBaru = $thn . $bln . $tgl . substr('00', 0, 2 - Str::length($kodeBaru)) . $kodeBaru;
            }
            $request->merge(['kode' => $kodeBaru]);
            $tipekode = 'sistem';
        } else {
            $tipekode = 'user';
        }


        $validated = $request->validate([
            'kode' => 'required|unique:produks|max:100|min:5',
            'namabrg' => 'required|max:200',
            'satuan' => 'required',
            'kategori' => 'required',
            'hbeli' => 'integer|gte:0',
            'hjual' => 'integer|gte:0',
            'qawal' => 'integer|gte:0',
            // 'qbeli' => 'integer|gte:0',
            // 'qjual' => 'integer|gte:0',
            // 'qakhir' => 'integer|gte:0',
            'restock' => 'integer|gte:0',
        ]);

        $validated['tipe_kode'] =  $tipekode;

        Produk::create($validated);

        Satuan::updateOrInsert([
            'satuan' => trim(strtoupper($validated['satuan'])),
        ]);

        Kategori::updateOrInsert([
            'kategori' => trim(strtoupper($validated['kategori'])),
        ]);


        return redirect('/dashboard/produk/tambah')->with('sukses', 'Data produk ' . $request->namabrg . ' berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit(string $kode)
    {
        $dataSatuans = Satuan::all();
        $dataKategoris = Kategori::all();
        $produk = Produk::where('kode', $kode)->first();
        return view('dashboard.produk.edit', compact('produk', 'dataSatuans', 'dataKategoris'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->option_satuan != 0) {
            $request->merge(['satuan' => $request->option_satuan]);
        }
        if ($request->option_kategori != 0) {
            $request->merge(['kategori' => $request->option_kategori]);
        }

        $validated = $request->validate([
            'namabrg' => 'required|max:200',
            'satuan' => 'required',
            'kategori' => 'required',
            'hbeli' => 'integer|gte:0',
            'hjual' => 'integer|gte:0',
            'qawal' => 'integer|gte:0',
            // 'qbeli' => 'integer|gte:0',
            // 'qjual' => 'integer|gte:0',
            // 'qakhir' => 'integer|gte:0',
            'restock' => 'integer|gte:0',
        ]);

        $validated['namabrg'] = strtoupper($validated['namabrg']);

        Produk::where('id', $id)->update($validated);
        return redirect('/dashboard/produk')->with('sukses', 'Data produk ' . $request->kode . 'berhasil diperbaharui !');
    }

    public function destroy(string $id)
    {
        $produk = Produk::find($id);
        $namaProduk = $produk->namabrg;
        // Produk::destroy($id);
        $produk->delete();
        return redirect('/dashboard/produk')->with('sukses', 'Produk ' . $namaProduk . ' berhasil dihapus !');
    }
}
