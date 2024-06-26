<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductTag extends Model
{
    use SoftDeletes;

    protected $table = 'product_tags';
    protected $fillable = [
        'product_id',
        'tag_id',
    ];
}
