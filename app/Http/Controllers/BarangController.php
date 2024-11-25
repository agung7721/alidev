<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Jamaah;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Menggunakan paginate() untuk pagination
        $barangs = Barang::paginate(10);
        $jamaahs = Jamaah::all();
        $barangs = Barang::paginate(10);
        return view('barangs.index', compact('barangs', 'jamaahs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $jamaah_id = $request->query('jamaah_id');
        return view('barangs.create', compact('jamaah_id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $barang = new Barang();
        $barang->kode_barang = $request->kode_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->kg = $request->kg;
        $barang->harga = $request->harga;
        $barang->jamaah_id = $request->jamaah_id; // Isi field jamaah_id
        $barang->save();

        // Kembalikan respons JSON
        return response()->json(['success' => true, 'order_number' => $barang->jamaah->order_number]);
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
    public function edit(Barang $barang)
    {
        return view('barangs.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        $validated = $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'kg' => 'required|numeric',
            'harga' => 'required|numeric'
        ]);

        $barang->update($validated);

        return redirect()->route('admin.jamaahs.show', $barang->jamaah_id)
            ->with('success', 'Data barang berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();

        return redirect()->route('admin.orders.show', $barang->jamaah->order_number)->with('success', 'Data Barang berhasil dihapus.');
    }
}
