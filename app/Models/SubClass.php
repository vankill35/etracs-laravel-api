<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubClass extends Model
{
    use HasFactory;

    protected $fillable = [
      'classification_id',
      'code',
      'name',
      'unit_value',
    ];
}