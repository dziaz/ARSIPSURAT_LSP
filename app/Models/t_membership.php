<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_membership extends Model
{
    use HasFactory;
    protected $table = 't_membership';
    protected $primaryKey = 'id_member';
    protected $fillable = ['id_member', 'kode_member', 'nama_depan', 'nama_belakang', 'nickname', 'kelamin','tempat_lahir','tanggal_lahir',
    'email','no_hp','id_discord'];


    protected static function boot()
    {
        parent::boot();

        // Menambahkan event "creating" yang akan dijalankan saat menyimpan data baru
        static::creating(function ($member) {
            // Ambil ID terakhir dari tabel dan tambahkan 1 untuk menghasilkan angka unik berikutnya
            $lastId = static::max('id_member') ?? 0;
            $nextId = $lastId + 1;

            // Format kode member sesuai dengan SONIC_001_NICKNAME
            $memberCode = 'SONIC_' . str_pad($nextId, 3, '00', STR_PAD_LEFT) . '_' . $member->nickname;

            // Tetapkan nilai kode member yang telah digenerate ke kolom "member_code"
            $member->kode_member = $memberCode;
        });
}
}
