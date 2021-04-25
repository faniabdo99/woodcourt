<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Auth;
class AuthController extends Controller{
    public function getLogin(){
      return view('auth.login');
    }
    public function postLogin(Request $r){
      //Validate the request
      $Rules = [
        'email' => 'required|email',
        'password' => 'required'
      ];
      $Validator = Validator::make($r->all() , $Rules);
      if($Validator->fails()){
        return back()->withErrors($Validator->errors()->all());
      }else{
        //Attempt to login
        $SaveLogin = $r->save_login == 'yes' ? true : false;
        if(Auth::attempt(['email' => $r->email,'password' => $r->password] , $SaveLogin)){
          return redirect()->route('admin.home');
        }else{
          return redirect()->back()->withErrors("Your info doesn't match our records");
        }
      }
    }
    public function Logout(){
      auth()->logout();
      return redirect()->route('home');
    }
}
