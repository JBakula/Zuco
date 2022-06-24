<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report_type extends Model
{
    use HasFactory;
    protected $table = 'report_types';
    protected $fillable = [
        'report_type_name'
    ];
    public function problems(){
        return $this->hasMay(Problem::class); 
    }
}
