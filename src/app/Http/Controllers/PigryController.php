<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\WeightLogs;
use App\Models\WeightTarget;
use App\Http\Requests\UsersRequest;

class PigryController extends Controller
{
    public function register(){
        return view('register');
    }

    public function login(){
        return view('login');
    }
    
    public function confirm(){
        $logs=WeightLogs::orderBy('date','desc')->paginate(8);
        $latest=WeightLogs::orderBy('date','desc')->first();
        $target=WeightTarget::first();
        return view('confirm',compact('logs','target','latest'));
    }

    public function change(){
        $target=WeightTarget::select(['id','target_weight'])->first();
        return view('change',compact('target'));
    }

    public function update(UsersRequest $request){
        $change=$request->only(['target_weight']);
        WeightTarget::find($request->id)->update($change);
        return redirect('/weight_logs');
    }
}
