<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Cart;
use App\Model\Index;

class CartController extends Controller
{
    /*
    * @content 购物车展示
    * @params
    * */
    public function Shopcart()
    {
        //调用查询商品的方法
        $goodsInfo=$this->goodsInfo();
        // var_dump($goodsInfo);exit;
        return view('Shopcart')->with('goodsInfo',$goodsInfo);
    }

    /**
     * 加入购物车
     * 接受id
     */
    public function cart(Request $Request){
        $goods_id=$Request->post('goods_id');
        $user_id=session('user_id');
        $data=[
            'goods_id'=>$goods_id,
            'user_id'=>$user_id,
            'create_time'=>time()
        ];
        $re=Cart::where('goods_id','=',$goods_id)->where('user_id','=',$user_id)->first();
        if(empty($re)){
            $res=Cart::insert($data);
            if($res){
                echo 1;
            }else{
                echo 2;
            }
        }else{
            $data=[
                'create_time'=>time(),
                'buy_number'=>$re['buy_number']+1
            ];
            $res=Cart::where('g_id','=',$re['g_id'])->update($data);
            if($res){
                echo 1;
            }else{
                echo 2;
            }
        }

        
        
    }


    /**查询商品信息 */
    public function goodsInfo(){
        $user_id=session('user_id');
        $data=Cart::join('goods','cart.goods_id','=','goods.goods_id')->where('user_id','=',$user_id)->get();
        return $data;

    }





}



/**
 * 商品加入购物车  要有跳到购物车的路由，购物车商品显示要按时间显示
 * 商品加入购物车
 *  跳转的路由
 *  商品显示有按时间展示
 * 
 *  加入时：有添加时间  要购买的数量 是否登录 那个用户加入那个商品
 * 
 * 点击加入购物车将商品id传给控制器
 **/
