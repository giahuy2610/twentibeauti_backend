<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;
    protected $table = 'Collection';
    protected $primaryKey = 'IDCollection';
    protected $guarded = [];
    public $timestamps = false;
}
