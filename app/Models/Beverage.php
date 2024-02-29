<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
class Beverage extends Model
{
    // use HasFactory;
    // protected $table = 'beverages';
    use HasFactory;
    // , SoftDeletes;
    protected $fillable = [
    'Title',
    'Price',
    'Content',
    'image',
    'Published',
    'Special',
    'category_id',
    // 'category_name',

    ];
    public function categories(): BelongsTo{
        return $this->belongsTo(Category::class ,'category_id');
    }
}
