<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mekanik extends Model
{
    use HasFactory;

    protected $table = 'mekanik';
    protected $primaryKey = 'id_mekanik';
    public $timestamps = false;

    protected $fillable = [
        'nm_mekanik',
        'tgl_lahir',
        'alamat',
        'nik',
        'no_hp',
    ];

    public function services()
    {
        return $this->hasMany(Service::class, 'id_mekanik');
    }
}
