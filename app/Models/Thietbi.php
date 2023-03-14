<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thietbi extends Model
{
    use HasFactory;
    protected $table = 'thietbi';
    protected $primaryKey = 'id';
    protected $fillable = ['mathietbi', 'mathietbi', 'diachiip', 'statushd','statuskn','dichvuketnoi'];
}
