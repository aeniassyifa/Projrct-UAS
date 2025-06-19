<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jnsService extends Model
{
    use HasFactory;

    protected $table = 'jns_service'; 

    protected $fillable = [
        'id',
        'jns_service',
        'keterangan'
    ];

    public function service()
    {
        return $this->hasMany(Service::class, 'id_jns_service');
    }
}
