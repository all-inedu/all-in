<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategorys extends Model
{
    use HasFactory;

    protected $table = "tb_blog_category";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'group',
        'category_name',
        'lang',
        'created_at',
        'updated_at'
    ];
}