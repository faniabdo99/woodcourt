<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Review;
class ReviewController extends Controller{
    public function postReview(Request $r){
        $Rules = [
            'name' => 'required|min:3',
            'rate' => 'required',
            'review' => 'required|min:4'
        ];
        $Validator = Validator::make($r->all(), $Rules);
        if($Validator->fails()){
            return back()->withErrors($Validator->errors()->all())->withInput();
        }else{
            //Create the review
            $ReviewData = $r->all();
            $ReviewData['active'] = 0;
            Review::create($ReviewData);
            return back()->withSuccess('Thank you for your review!');
        }
    }
}
