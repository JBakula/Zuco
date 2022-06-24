<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_category extends Model
{
    use HasFactory;
    protected $table = 'sub_categories';
    protected $fillable = [
        'sub_category_name',
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function problems(){
        return $this->hasMany(Problem::class);
    }
}
