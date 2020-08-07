<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\NewModel;

class NewController extends Controller
{
    /**
     * 添加新闻视图
     */
    public function create()
    {
        return view('new.create');
    }

    public function createDo(Request $request)
    {
        $title = $request->input('new_title');
        $content = $request->input('new_content');
        $uid = $this->userId();
        // echo $uid;die;
        $post = [
            'new_title' => $title,
            'new_content'   => $content,
            'new_time'  => time(),
            'uid'       => $uid
        ];
        $id = NewModel::insertGetId($post);
        if($id>0){
            echo "<script>alert('添加成功',location='/index');</script>";
        }else{
            echo "<script>alert('添加失败',location='/create');</script>";
        }
    }

    public function index()
    {
        $data = NewModel::join('p_users','p_users.uid','=','p_new.uid')->orderBy('new_time','desc')->get()->toArray();
        foreach($data as $v){
            $new_tel = substr($v['tel'], 0, 3).'****'.substr($v['tel'], 7);
        }
        echo $new_tel;
        // echo '<pre>';print_r($data->toArray());echo '</pre>';die;
        return view('new.index',['data'=>$data]);
    }
}
