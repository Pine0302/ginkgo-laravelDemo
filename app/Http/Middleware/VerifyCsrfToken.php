<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
        "http://ginkgo.pinecc.cn/user",
        "http://ginkgo.pinecc.cn/user_visit",
        "http://ginkgo.pinecc.cn/jssdk",
    ];
}
