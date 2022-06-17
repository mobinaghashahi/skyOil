<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reward extends Model
{
    use HasFactory;
    protected $primaryKey='id';
    protected $fillable=['rewardTitle','scorePay','customer_id','datePayReward'];
    protected $table='reward';

}
