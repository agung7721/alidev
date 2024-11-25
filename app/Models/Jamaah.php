<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Jamaah extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_porsi', 'nama', 'ktp', 'no_passport', 'telpon', 'hotel', 'travel_muthowif', 'tanggal_kepulangan', 'alamat_ktp', 'alamat_tujuan'
    ];

    protected $dates = ['tanggal_kepulangan']; // Pastikan kolom tanggal_kepulangan didefinisikan sebagai date

    // Aksesors untuk tanggal_kepulangan
    public function getTanggalKepulanganAttribute($value)
    {
        return Carbon::parse($value);
    }

    public function barangs()
    {
        return $this->hasMany(Barang::class);
    }
}
