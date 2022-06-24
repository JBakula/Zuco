<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
        'category_name',
    ];
    public function sub_categories(){
        return $this->hasMay(Sub_category::class);
    }
    public function problems(){
        return $this->hasMay(Problem::class);
    }
}
