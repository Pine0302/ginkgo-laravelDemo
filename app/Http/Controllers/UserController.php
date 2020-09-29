<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use EasyWeChat\Factory;


class UserController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * user仓储的实现
     *
     * @var UserRepository
     */
    protected $users;

    /**
     * 创建一个新的控制器实例
     *
     * @param  UserRepository  $users
     * @return void
     */
   /* public function __construct(UserRepository $users)
    {
        $this->users = $users;
    }*/

    public function Home(Request $request){
        $APIs = [
            'updateAppMessageShareData',
            'updateTimelineShareData'
        ];
        $jssdkInfo = $this->wechat_app->jssdk->buildConfig( $APIs, false, false, false);


        $data = [
            'appid'=>$jssdkInfo['appId'],
            'timestamp'=>$jssdkInfo['timestamp'],
            'nonceStr'=>$jssdkInfo['nonceStr'],
            'signature'=>$jssdkInfo['signature'],
            'url'=>$request->url(),
        ];

        /*$user = $this->users->find($id);*/
        //return view('welcome',$jssdkInfo);
        return view('welcome',$data);
    }

    /**
     * 展示给定用户的信息
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
        $APIs = [
            'updateAppMessageShareData',
            'updateTimelineShareData'
        ];
        $jssdkInfo = $this->wechat_app->jssdk->buildConfig( $APIs, false, false, false);

        echo "<pre>";
        print_r($jssdkInfo);exit;

        /*$user = $this->users->find($id);*/
        return view('user');
    }

    public function collect(Request $request)
    {
        $name = $request->input('name');
        $mobile = $request->input('mobile');
        $dates = $request->input('dates');
        $num = $request->input('num');
        DB::table('appointment')->insert(
            [
                'name' => $name,
                'mobile' => $mobile,
                'dates' => $dates,
                'num' => $num,
                'create_at'=>time(),
            ]
        );
        return response()->json([
            'status' => 1,
            'msg' => 'success'
        ]);
    }

    public function collectVisit(Request $request)
    {
        $name = $request->input('name');
        $mobile = $request->input('mobile');
        $dates = $request->input('dates');
        $dates_visit = $request->input('dates_visit');
        $num = $request->input('num');
        DB::table('appointment_visit')->insert(
            [
                'name' => $name,
                'mobile' => $mobile,
                'dates' => $dates,
                'dates_visit' => $dates_visit,
                'num' => $num,
                'create_at'=>time(),
            ]
        );
        return response()->json([
            'status' => 1,
            'msg' => 'success'
        ]);
    }

    public function jssdk(Request $request)
    {
        $APIs = [
            'updateAppMessageShareData',
            'updateTimelineShareData'
        ];
        $jssdkInfo = $this->wechat_app->jssdk->buildConfig( $APIs, false, false, false);


        $data = [
            'appid'=>$jssdkInfo['appId'],
            'timestamp'=>$jssdkInfo['timestamp'],
            'nonceStr'=>$jssdkInfo['nonceStr'],
            'signature'=>$jssdkInfo['signature'],
        ];
        return response()->json([
            'status' => 1,
            'msg' => 'success',
            'data'=>$data,
        ]);
    }

}
