<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'pengirim_rekening_id',
        'penerima_rekening_id',
        'transaksi_date',
        'jenis_transaksi',
        'nominal',
    ];

    public function pengirim_rekening()
    {
        return $this->belongsTo(Rekening::class, 'pengirim_rekening_id');
    }

    public function penerima_rekening()
    {
        return $this->belongsTo(Rekening::class, 'penerima_rekening_id');
    }


}
