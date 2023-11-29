<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arsip extends Model
{
    use HasFactory;
    protected $table = 'arsip';
    protected $primaryKey = 'id';
    protected $fillable = ['no_surat','kategori', 'judul', 'file_surat',];

}
