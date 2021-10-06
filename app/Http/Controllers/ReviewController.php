<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Review;
class ReviewController extends Controller{

    public function getAllReviews(){
        $AllReviews = Review::all();
        return view('admin.reviews.all', compact('AllReviews'));
    }
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
    public function getEditReviews($id){
        $Review = Review::findOrFail($id);
        if (!$Review) {
            abort('404');
        }
        return view('admin.reviews.edit', compact('Review'));
    }
    public function postEditReviews(Request $r){
        $TheReview = Review::find($r->review_id);
        if($TheReview){
            $TheReview->update([
                'active' => $r->active
            ]);
            $Status = '';
            if($r->active == 0){
                $Status = 'Review Has been hidden';
            }else{
                $Status = 'Review Has been published';
            }
            return response($Status);
        }else{
            return response('Review not found' , 422);
        }

    }
    public function getDeleteReview($id){
        Review::findOrFail($id)->delete();
        return back()->withSuccess('Review Deleted');
    }

}
