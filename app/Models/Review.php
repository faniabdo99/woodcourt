<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model{
    use HasFactory;
    protected $guarded = [];
    public function Product(){
        return $this->belongsTo(Product::class);
    }
    public function getRateTextAttribute(){
        $RatesArray = [
            1 => 'Bad',
            2 => 'Normal',
            3 => 'Medium',
            4 => 'Good',
            5 => 'Very Good '
        ];
        return $RatesArray[$this->rate];
    }
}
