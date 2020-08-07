<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Model\UserModel;

class Controller extends BaseController
{
    public function userId(){
        $user_name = session('user_name');
        $user_id = UserModel::where(['user_name'=>$user_name])->value('uid');
        return $user_id;
    }

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
