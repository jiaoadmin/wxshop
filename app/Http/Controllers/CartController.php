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
        //两表联查
        $data=Cart::join('goods','cart.goods_id','=','goods.goods_id')
            ->where('user_id','=',$user_id)
            ->where('is_show',1)
            ->get();
        return $data;

    }

    /**删除 */
    public function del(Request $Request){
        $goods_id = $Request->goods_id;
        // var_dump($goods_id);
        $user_id=session('user_id');
        // var_dump($user_id);exit;
        $data=[
            'is_show'=>2,
        ];
        $where=[
            'goods_id'=>$goods_id,
            'user_id'=>$user_id
        ];
        // var_dump($where);exit;
        $res=Cart::where($where)->update($data);
        if($res){
            echo 1;
        }else{
            echo 2;
        }
    }

    /**购买数量 */
    public function checknum(Request $Request){
        $buy_number=$Request->post('buy_number');
        $goods_id=$Request->post('goods_id');
        $user_id=session('user_id');
        
        $where=[
            'goods_id'=>$goods_id,
            'user_id'=>$user_id
        ];
        $data=[
            'buy_number'=>$buy_number
        ];
        $res=Cart::where($where)->update($data);
        if($res){
            echo 1;
        }else{
            echo 2;
        }
    }


}


