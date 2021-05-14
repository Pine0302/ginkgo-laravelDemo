<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use EasyWeChat\Factory;
use Illuminate\Support\Facades\Redis;



class CollectController extends Controller
{

    /**
     * user仓储的实现
     *
     * @var UserRepository
     */
    protected $users;

    private $wechatUser;


    public function __construct()
    {
        parent::__construct();
    }


    /**
     * 收集信息
     * @param Request $request
     * @return mixed
     */
    public function collectChat(Request $request)
    {
        //$openid = $request->session()->get('openid');
        $openid = "123";
        $message = $request->post('message');
        DB::table('message')->insert(
            [
                'content' => $message,
                'openid' => $openid,
                'create_at'=>date("Y-m-d H:i:s"),
                'show'=>1
            ]
        );
        return response()->json([
            'status' => 1,
            'msg' => 'success'
        ]);
    }


    /**
     * 展示个人信息
     * @param Request $request
     * @return mixed
     */
    public function showSelfMessage(Request $request)
    {
        $openid = $request->session()->get('openid');
        $openid = "123";
        $ret = DB::table('message')->where('openid', $openid)->orderBy('id','desc')->offset(0)->limit(1)->get();

        return response()->json([
            'status' => 1,
            'msg' => 'success',
            'message'=>$ret
        ]);
    }

    /**
     * 展示个人信息
     * @param Request $request
     * @return mixed
     */
    public function showAllMessages(Request $request)
    {
        $ret = DB::table('message')->orderBy('id','desc')->offset(0)->limit(100000)->get();
        return response()->json([
            'status' => 1,
            'msg' => 'success',
            'list'=>$ret
        ]);
    }

}
