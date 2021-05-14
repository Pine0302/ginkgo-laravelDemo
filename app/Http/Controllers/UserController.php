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



class UserController extends Controller
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
     * 微信授权
     */
    public function wechatAuth(Request $request){

        $config = [
            // ...
            'app_id' =>  env('WECHAT_APPID'),
            'secret' =>  env('WECHAT_APP_SECRET'),
            'oauth' => [
                'scopes'   => ['snsapi_base'],
                'callback' => 'auth',
            ],
            // ..
        ];

        $app = Factory::officialAccount($config);
        $oauth = $app->oauth;
        // 未登录
        if (empty($request->session()->get('openid'))) {
            return $oauth->redirect();
        }else{
            $this->wechatUser = $request->session()->get('openid');
            return redirect("/home");
        }
        // 已经登录过

    }

    public function auth(Request $request)
    {
        $config = [
            'app_id' =>  env('WECHAT_APPID'),
            'secret' =>  env('WECHAT_APP_SECRET'),
            'oauth' => [
                'scopes'   => ['snsapi_base'],
                'callback' => 'auth',
            ],
        ];
        $app = Factory::officialAccount($config);
        $oauth = $app->oauth;
        // 获取 OAuth 授权结果用户信息
        $this->wechatUser = $oauth->user();
        //Redis::set('pppp','1234');
        $wecahtInfo = $this->wechatUser->toArray();
        $request->session()->put('openid',$wecahtInfo['id']);

        return redirect("/home");

    }



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
        print_r($request->session()->get('openid'));

        $data = [
            'appId'=>$jssdkInfo['appId'],
            'timestamp'=>$jssdkInfo['timestamp'],
            'nonceStr'=>$jssdkInfo['nonceStr'],
            'signature'=>$jssdkInfo['signature'],
            //'url'=>$request->url(),
            'url'=>"https://dajia.pinecc.cn",
        ];

        return view('welcome',$data);
    }



    public function test(Request $request){


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



    public function jssdk(Request $request)
    {
        $APIs = [
            'updateAppMessageShareData',
            'updateTimelineShareData'
        ];
        $jssdkInfo = $this->wechat_app->jssdk->buildConfig( $APIs, false, false, false);


        $data = [
            'appId'=>$jssdkInfo['appId'],
            'timestamp'=>$jssdkInfo['timestamp'],
            'nonceStr'=>$jssdkInfo['nonceStr'],
            'signature'=>$jssdkInfo['signature'],
        ];
        return response()->json([
            'status' => 1,
            'msg' => 'success',
            'data'=>$jssdkInfo,
        ]);
    }

    public function collectChat(Request $request)
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

}
