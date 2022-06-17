<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oilBuy extends Model
{
    use HasFactory;
    protected $primaryKey='id';
    protected $fillable=['oilName','dateChangeOil','serviceMan','customer_id'];
    protected $table='oilBuy';

}
