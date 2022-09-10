<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukResource extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Produk::all();

    }

    public function store()
    {
        if(request('nama') && request('harga') && request('deskripsi') && request('stock') ) {
            $produk = new Produk;
            $produk->nama = request('nama');
            $produk->harga = request('harga');
            $produk->deskripsi = request('deskripsi');
            $produk->stock = request('stock');
            $produk->save();

            return collect([
                'respond' => 250,
                'data' => $produk
            ]);

        } else {
            return collect([
                'respond' => 500,
                'message' => "Field ada yang kosong"
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::find($id);
        if($produk) {
            return collect([
                'status' => 250,
                'data' => $produk
            ]);
        }
        return collect([
            'respond' => 500,
            'message' => "Produk Tidak Ditemukan"
        ]);
    }

    public function update($id)
    {
        $produk = Produk::find($id);
        if($produk) {

            $produk->nama = request('nama') ?? $produk->nama;
            $produk->harga = request('harga') ?? $produk->harga;
            $produk->deskripsi = request('deskripsi') ?? $produk->deskripsi;
            $produk->stock = request('stock') ?? $produk->stock;
            $produk->save();

            return collect([
                'respond' => 250,
                'data' => $produk
            ]);
        }
