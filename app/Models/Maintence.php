<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintence extends Model
{
    use HasFactory;

    protected $table = "maintence";

    protected $fillable = [
        'Car_id', 'Car_Number', 'Maintence_Name', 'Maintence_Worth', 'Maintence_Description'
    ];

    public function carHistory()
    {
        return $this->belongsTo(CarHistory::class, 'Car_id');
    }
}