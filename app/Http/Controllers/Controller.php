<?php

namespace App\Http\Controllers;

use EasyWeChat\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public $wechat_app;

     public function __construct()
    {
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
        $wechat_app = Factory::officialAccount($config);
        $this->wechat_app = $wechat_app;
    }

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


}
