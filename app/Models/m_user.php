<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;

class m_user extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'm_user';
    protected $primaryKey = 'id_user';
    protected $fillable = [
        'username',
        'password',
        'created_by',
        'updated_by',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];



    protected static function boot()
    {
        parent::boot();

        static::creating(function ($m_user) {
            // Mengisi kolom 'created_by' dengan ID pengguna saat model dibuat
            $m_user->created_by = auth()->id();
        });

        static::updating(function ($m_user) {
            // Mengisi kolom 'updated_by' dengan ID pengguna saat model diperbarui
            $m_user->updated_by = auth()->id();
        });
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
