<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    //protected $fillable = ['name', 'age','email'];
    /**
 * The attributes that aren't mass assignable.
 *
 * @var array
 */
protected $guarded = [];
}
