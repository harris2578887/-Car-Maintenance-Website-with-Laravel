<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarHistory extends Model
{
    use HasFactory;

    protected $table = "carhistory";

    protected $fillable  = ['Car_Name', 'Car_Model', 'Car_Number', 'Car_Description', 'customer_id'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function maintenances()
    {
        return $this->hasMany(Maintence::class, 'Car_id');
    }
}
