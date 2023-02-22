<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    use HasFactory;
    protected $table = 'problems';
    protected $fillable = [
        'category_id',
        'sub_category_id',
        'description',
        'city_id',
        'street',
        'file',
        'report_type_id',
        'admin_check'
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function sub_category(){
        return $this->belongsTo(Sub_category::class);
    }
    public function report_type(){
        return $this->belongsTo(Report_type::class);
    }
    public function city(){
        return $this->belongsTo(City::class);
    }
    
}
