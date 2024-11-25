<?php

namespace App\Http\Controllers;

use App\Models\Jamaah;
use Illuminate\Http\Request;

class JamaahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 10); // Default 10 entri per halaman
        $jamaahs = Jamaah::paginate($perPage);
        $jamaahCount = Jamaah::count();
        return view('jamaahs.index', compact('jamaahs', 'perPage', 'jamaahCount'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Jika ada data yang perlu dikirim ke form saat membuat baru, tambahkan di sini
        return view('jamaahs.create'); // Ubah dari 'jamaahs.form' ke 'jamaahs.create'
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'no_porsi' => 'required',
            'ktp' => 'required',
            'no_passport' => 'required',
            'telpon' => 'required',
            'hotel' => 'required',
            'travel_muthowif' => 'required',
            'tanggal_kepulangan' => 'required|date',
            'alamat_ktp' => 'required',
            'alamat_tujuan' => 'required',
        ]);

        try {
            $orderNumber = 'ORD' . date('Ymd') . str_pad(Jamaah::count() + 1, 4, '0', STR_PAD_LEFT);

            $jamaah = new Jamaah($validatedData);
            $jamaah->order_number = $orderNumber;
            $jamaah->no_porsi = $request->input('no_porsi');

            $jamaah->save();

            return redirect()->route('jamaahs.index')->with('success', 'Data Jamaah berhasil disimpan.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $jamaah = Jamaah::with('barangs')->findOrFail($id);
        return view('jamaahs.show', compact('jamaah'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jamaah = Jamaah::findOrFail($id);
        return view('jamaahs.edit', compact('jamaah')); // Pastikan view 'edit' ada
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'no_porsi' => 'required',
            'nama' => 'required',
            'ktp' => 'required',
            'no_passport' => 'required',
            'telpon' => 'required',
            'hotel' => 'required',
            'travel_muthowif' => 'required',
            'tanggal_kepulangan' => 'required|date',
            'alamat_ktp' => 'required',
            'alamat_tujuan' => 'required',
        ]);

        $jamaah = Jamaah::findOrFail($id);
        $jamaah->update($validatedData);

        return redirect()->route('jamaahs.index')->with('success', 'Data Jamaah berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jamaah = Jamaah::findOrFail($id);
        $jamaah->delete();

        return redirect()->route('jamaahs.index')->with('success', 'Data Jamaah berhasil dihapus.');
    }

    public function showOrder($order_number)
    {
        $jamaah = Jamaah::where('order_number', $order_number)->with('barangs')->firstOrFail();
        return view('jamaahs.show', compact('jamaah'));
    }

    
}
