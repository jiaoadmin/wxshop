<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class weCharController extends Controller
{
//    defind=['WEIXINTOKEN','jqq0930'];
    public function valid()
    {
        $echostr=_GET["echostr"];
        if($this->checkSignature()){
            echo $echostr;exit;
        }
    }
    //微信
    public function checkSignature()
    {
        $signature=_GET["signature"];
        $timestamp=_GET["timestamp"];
        $nonce=_GET["nonce"];

        $token="jqq0930";

        //将三个参数放入数组
        $arr=array($token,$timestamp,$nonce);
        //字典排序
        sort($arr,SORT_STRING);
        //拼接参数
        $str=implode($arr);
        //sha1加密
        $sign=cha1($str);
        if($sign==$signature){
            return true;
        }else{
            return false;
        }




    }
}
