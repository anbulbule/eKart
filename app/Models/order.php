<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    public $timestamp=false;
    protected $fillable = ['product_id','user_id','status','payment_method','payment_status','address'];
}
