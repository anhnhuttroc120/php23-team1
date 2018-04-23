<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateRequest;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function getRegister(){
    	return view('default.pages.dangki');
    }
    public function postRegister(CreateRequest $request){
    				
    				$data=$request->all();
    				$data['status']=0;
    				User::create($data);
    			return view('default.notice.resgiter')->with('success','Bạn đã đăng kí thành công, Vui lòng vào email xác nhận tài khoản');			
    }
}
