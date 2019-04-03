<?php

namespace App\Http\Controllers;
use App\Model\Index;
use App\Model\Category;
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
        return view('index',['data'=>$data]);
    }

    /*
    * @content 全部商品
    * @params
    * */
    public function Allshops()
    {
        $data=Index::get();
        $cate=Category::where('pid','0')->get();
        return view('allshops',['data'=>$data],['cate'=>$cate]);
    }

    /*
    * @content  顶级分类下面的分类
    * @params
    * */
    public function category(Request $request)
    {
        $id=$request->id;
        //dd($id);die;
        if(empty($id)){
            $cate_id=Category::pluck('cate_id');
        }else{
            $cate_id=Category::where('pid','=',$id)->pluck('cate_id');
        }
        $c_id=Category::whereIn('pid',$cate_id)->pluck('cate_id');
        $cateInfo=Category::where(['pid'=>0])->get();
        $goods=Index::whereIn('cate_id',$c_id)->get();
        //var_dump($goods);exit;
        return view('allshop',['goods'=>$goods,'cateInfo'=>$cateInfo]);
    }

    /*
     * @content 我的潮购
     * @params
     * */
    public function Userpage()
    {
        return view('userpage');
    }

    /*
     * @content 晒单
     * @params
     * */
    public function Willshare()
    {
        return view('willshare');
    }


    /**商品详情页 */
    public function shopcontent($id){
        //查询
        $data=Index::where('goods_id','=',$id)->first();
        // dd($data);exit;
        return view('shopcontent',['data'=>$data]);
    }

    


}
