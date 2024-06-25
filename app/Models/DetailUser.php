<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class DetailUser extends Model
{
    use HasFactory;

    protected $table = "detail_users";

    protected $fillable = [
        'id',
        'nim',
        'user_id',
        'jurusan',
        'prodi',
        'kip',
        'kelompok',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
