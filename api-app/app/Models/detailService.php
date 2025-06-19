<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailService extends Model
{
    use HasFactory;

    protected $table = 'detail_service';
    protected $primaryKey = 'id_detail_service';
    public $timestamps = true;

    protected $fillable = [
        'id_service',
        'sparepart',
        'harga',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'id_service');
    }
}
