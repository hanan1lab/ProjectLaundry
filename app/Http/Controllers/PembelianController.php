<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function index()
{
    // Ambil semua data dari tabel pembelians
    $pembelians = Pembelian::all();
    return view('pembelian.index', compact('pembelians'));
}

    public function create()
    {
        return view('pembelian.create'); // Tampilkan form tambah pembelian
    }

    public function store(Request $request)
{
    $request->validate([
        'item_name' => 'required|string|max:255',
        'amount' => 'required|numeric|min:0',
        'quantity' => 'required|integer|min:1',
        'purchase_date' => 'required|date',
    ]);

    // Hitung total harga jika tidak diterima dari input
    $total_price = $request->amount * $request->quantity;

    // Simpan data pembelian
    Pembelian::create([
        'item_name' => $request->item_name,
        'amount' => $request->amount,
        'quantity' => $request->quantity,
        'purchase_date' => $request->purchase_date,
        'total_price' => $total_price, // Simpan total harga
    ]);

    return redirect()->route('pembelian.index')->with('success', 'Pembelian berhasil ditambahkan!');
}

    public function edit($id)
    {
        $pembelian = Pembelian::findOrFail($id); // Cari data pembelian
        return view('pembelian.edit', compact('pembelian'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'item_name' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:1',
            'purchase_date' => 'required|date',
        ]);

        $pembelian = Pembelian::findOrFail($id);
        $pembelian->update($request->all());

        return redirect()->route('pembelian.index')->with('success', 'Pembelian berhasil diperbarui!');
    }

    public function show($id)
    {
        // Ambil data pembelian berdasarkan ID
        $pembelian = Pembelian::findOrFail($id);

        // Kirim data pembelian ke view
        return view('pembelian.show', compact('pembelian'));
    }

    public function destroy($id)
    {
        $pembelian = Pembelian::findOrFail($id);
        $pembelian->delete();

        return redirect()->route('pembelian.index')->with('success', 'Pembelian berhasil dihapus!');
    }
}