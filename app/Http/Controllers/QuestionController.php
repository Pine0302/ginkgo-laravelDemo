<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use EasyWeChat\Factory;


class QuestionController extends Controller
{



    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function collectAnswer(Request $request)
    {
        DB::table('questions')->insert(
            [
                'name' => $request->input('name'),
                'sex' => $request->input('sex'),
                'age' => $request->input('age'),
                'mobile' => $request->input('mobile'),
                'area' => $request->input('area'),
                'isold' => $request->input('isold'),
                'trade' => $request->input('trade'),
                'percentage' => $request->input('percentage'),
                'with_who' => $request->input('with_who'),
                'info_method' => $request->input('info_method'),
                'concern_factor' => $request->input('concern_factor'),
                'product_type' => $request->input('product_type'),
                'area_size' => $request->input('area_size'),
                'house_type' => $request->input('house_type'),
                'house_face' => $request->input('house_face'),
                'total_price' => $request->input('total_price'),
                'public_space' => $request->input('public_space'),
                'renovation' => $request->input('renovation'),
                'renovation_style' => $request->input('renovation_style'),
                'service_type' => $request->input('service_type'),
                'profit_type' => $request->input('profit_type'),
                'morgage_5010' => $request->input('morgage_5010'),
                'recomend' => $request->input('recomend'),
                'create_at'=>date("Y-m-d H:i:s"),
            ]
        );
        return response()->json([
            'status' => 1,
            'msg' => 'success'
        ]);
    }



}
