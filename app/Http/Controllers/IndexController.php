<?php

namespace App\Http\Controllers;
use App\Model\Index;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /*
     * @content 前台首页
     * @params
     *
     * */
    public function Index()
    {
        $data=Index::get();

        return view('Index',['data'=>$data]);
    }

    /*
     * @content 全部商品
     * @params
     * */
    public function Allshops()
    {
        $data=Index::get();
        return view('Allshops',['data'=>$data]);
    }



    /*
     * @content 我的潮购
     * @params
     * */
    public function Userpage()
    {
        return view('Userpage');
    }

    /*
     * @content 晒单
     * @params
     * */
    public function Willshare()
    {
        return view('Willshare');
    }


    /**商品详情页 */
    public function shopcontent($id){
        // $goods_id=$Request->goods_id;
        //  dd($goods_id);exit;
        // //查询
        $data=Index::where('goods_id','=',$id)->first();
        //  dd($data);exit;
        return view('shopcontent',['data'=>$data]);
    }

    


}
