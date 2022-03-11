<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $primaryKey='id';
    protected $fillable=['name','family','phoneNumber','meliCode','carTag','dateChangeOil','expirationDay','smsSent'];
    protected $table='customer';
}
