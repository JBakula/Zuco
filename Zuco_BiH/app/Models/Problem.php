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
        'file',
        'report_type_id',
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
}
