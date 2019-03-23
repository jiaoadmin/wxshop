<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>购物车</title>
    <h1>1111111</h1>
    <meta content="app-id=518966501" name="apple-itunes-app" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no, maximum-scale=1.0" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <link href="{{url('css/comm.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('css/cartlist.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{url('layui/layui.js')}}"></script>
    <script src="{{url('layui/css/layui.css')}}"></script>

</head>
<body id="loadingPicBlock" class="g-acc-bg">
    <input name="hidUserID" type="hidden" id="hidUserID" value="-1" />
    <div>
        <!--首页头部-->
        <div class="m-block-header">
            <a href="/" class="m-public-icon m-1yyg-icon"></a>
            <a href="/" class="m-index-icon">编辑</a>
        </div>
        <!--首页头部 end-->
        <div class="g-Cart-list">
            <ul id="cartBody">
                @foreach($goodsInfo as $k=>$v)
                    <li goods_id="{{$v->goods_id}}" goods_num="{{$v->goods_pnum}}">
                        <s class="xuan current"></s>
                        <a class="fl u-Cart-img" href="{{url('index/shopcontent/'.$v->goods_id)}}">
                            <img src="../uploads/{{$v->goods_img}}" border="0" alt="">
                        </a>
                        <div class="u-Cart-r">
                            <a href="/v44/product/12501977.do" class="gray6">{{$v->goods_name}}</a>
                            <span class="gray9">
                                <em>剩余124人次</em>
                            </span>
                            <div class="num-opt">
                                <em class="num-mius dis min" id="less"><i></i></em>
                                <input class="text_box" name="num" maxlength="6" type="text" value="{{$v->buy_number}}" codeid="12501977">
                                <em class="num-add add" id="move"><i></i></em>
                            </div>
                            <a href="javascript:;" name="delLink" id="dellink" goods_id="{{$v->goods_id}}" cid="12501977" isover="0" class="z-del"><s></s></a>
                        </div>    
                    </li>
                @endforeach
            </ul>
            <div id="divNone" class="empty "  style="display: none">
                <s></s><p>您的购物车还是空的哦~</p>
                <a href="https://m.1yyg.com" class="orangeBtn">立即潮购</a>
            </div>
        </div>
        <div id="mycartpay" class="g-Total-bt g-car-new" style="">
            <dl>
                <dt class="gray6">
                    <s id="xuan" class="quanxuan current"></s>全选
                    <p class="money-total">合计<em class="orange total"><span>￥</span>17.00</em></p>
                    
                </dt>
                <dd>
                    <a href="javascript:;" id="a_payment" class="orangeBtn w_account remove">删除</a>
                    <a href="javascript:;" id="a_payment" class="orangeBtn w_account">去结算</a>
                </dd>
            </dl>
        </div>
        <div class="hot-recom">
            <div class="title thin-bor-top gray6">
                <span><b class="z-set"></b>人气推荐</span>
                <em></em>
            </div>
            <div class="goods-wrap thin-bor-top">
                <ul class="goods-list clearfix">
                    <li>
                        <a href="https://m.1yyg.com/v44/products/23458.do" class="g-pic">
                            <img src="https://img.1yyg.net/goodspic/pic-200-200/20160908092215288.jpg" width="136" height="136">
                        </a>
                        <p class="g-name">
                            <a href="https://m.1yyg.com/v44/products/23458.do">(第<i>368671</i>潮)苹果（Apple）iPhone 7 Plus 128G版 4G手机</a>
                        </p>
                        <ins class="gray9">价值:￥7130</ins>
                        <div class="btn-wrap">
                            <div class="Progress-bar">
                                <p class="u-progress">
                                    <span class="pgbar" style="width:1%;">
                                        <span class="pging"></span>
                                    </span>
                                </p>
                            </div>
                            <div class="gRate" data-productid="23458">
                                <a href="javascript:;"><s></s></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="" class="g-pic">
                            <img src="https://img.1yyg.net/goodspic/pic-200-200/20160908092215288.jpg" width="136" height="136">
                        </a>
                        <p class="g-name">
                            <a href="https://m.1yyg.com/v44/products/23458.do">(第368671潮)苹果（Apple）iPhone 7 Plus 128G版 4G手机</a>
                        </p>
                        <ins class="gray9">价值:￥7130</ins>
                        <div class="btn-wrap">
                            <div class="Progress-bar">
                                <p class="u-progress">
                                    <span class="pgbar" style="width:45%;">
                                        <span class="pging"></span>
                                    </span>
                                </p>
                            </div>
                            <div class="gRate" data-productid="23458">
                                <a href="javascript:;"><s></s></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="https://m.1yyg.com/v44/products/23458.do" class="g-pic">
                            <img src="https://img.1yyg.net/goodspic/pic-200-200/20160908092215288.jpg" width="136" height="136">
                        </a>
                        <p class="g-name">
                            <a href="https://m.1yyg.com/v44/products/23458.do">(第<i>368671</i>潮)苹果（Apple）iPhone 7 Plus 128G版 4G手机</a>
                        </p>
                        <ins class="gray9">价值:￥7130</ins>
                        <div class="btn-wrap">
                            <div class="Progress-bar">
                                <p class="u-progress">
                                    <span class="pgbar" style="width:1%;">
                                        <span class="pging"></span>
                                    </span>
                                </p>
                            </div>
                            <div class="gRate" data-productid="23458">
                                <a href="javascript:;"><s></s></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="https://m.1yyg.com/v44/products/23458.do" class="g-pic">
                            <img src="https://img.1yyg.net/goodspic/pic-200-200/20160908092215288.jpg" width="136" height="136">
                        </a>
                        <p class="g-name">
                            <a href="https://m.1yyg.com/v44/products/23458.do">(第368671潮)苹果（Apple）iPhone 7 Plus 128G版 4G手机</a>
                        </p>
                        <ins class="gray9">价值:￥7130</ins>
                        <div class="btn-wrap">
                            <div class="Progress-bar">
                                <p class="u-progress">
                                    <span class="pgbar" style="width:1%;">
                                        <span class="pging"></span>
                                    </span>
                                </p>
                            </div>
                            <div class="gRate" data-productid="23458">
                                <a href="javascript:;"><s></s></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

<div class="footer clearfix">
    <ul>
        <li class="f_home"><a href="{{url('/')}}" ><i></i>潮购</a></li>
        <li class="f_single"><a href="/v41/post/index.do" ><i></i>晒单</a></li>
        <li class="f_car"><a id="btnCart" href="/v41/mycart/index.do" class="hover"><i></i>购物车</a></li>
        <li class="f_personal"><a href="{{url('index/Userpage')}}" ><i></i>我的潮购</a></li>
    </ul>
</div>

<script src="{{url('js/jquery-1.11.2.min.js')}}"></script>
<!---商品加减算总数---->
<script type="text/javascript">
    $(function () {
        ///点击加号
        $(".add").click(function () {
            var t = $(this).prev();
            t.val(parseInt(t.val()) + 1);
            GetCount();
        })
        //点击减号
        $(".min").click(function () {
            //获取input框
            var t = $(this).next();
            // console.log(t);
            if(t.val()>1){
                t.val(parseInt(t.val()) - 1);
                GetCount();
            }
        })
    })
</script>

<script>
    // 全选        
    $(".quanxuan").click(function () {
        if($(this).hasClass('current')){
            $(this).removeClass('current');

            $(".g-Cart-list .xuan").each(function () {
                if ($(this).hasClass("current")) {
                    $(this).removeClass("current"); 
                } else {
                    $(this).addClass("current");
                } 
            });
            GetCount();
        }else{
            $(this).addClass('current');

            $(".g-Cart-list .xuan").each(function () {
                $(this).addClass("current");
                // $(this).next().css({ "background-color": "#3366cc", "color": "#ffffff" });
            });
            GetCount();
        }
        
        
    });
    // 单选
    $(".g-Cart-list .xuan").click(function () {
        if($(this).hasClass('current')){
            

            $(this).removeClass('current');

        }else{
            $(this).addClass('current');
        }
        if($('.g-Cart-list .xuan.current').length==$('#cartBody li').length){
                $('.quanxuan').addClass('current');

            }else{
                $('.quanxuan').removeClass('current');
            }
        // $("#total2").html() = GetCount($(this));
        GetCount();
        //alert(conts);
    });
    // 已选中的总额
    function GetCount() {
        var conts = 0;
        var aa = 0; 
        $(".g-Cart-list .xuan").each(function () {
            if ($(this).hasClass("current")) {
                for (var i = 0; i < $(this).length; i++) {
                    conts += parseInt($(this).parents('li').find('input.text_box').val());
                    // aa += 1;
                }
            }
        });
        
        $(".total").html('<span>￥</span>'+(conts).toFixed(2));
    }
    GetCount();
</script>
</body>
</html>
<script>
    $(function(){
        layui.use(['layer'],function(){
            //点击删除
            $(document).on('click','#dellink',function(){
                var goods_id = $(this).attr('goods_id');
                // console.log(goods_id);
                // var p = $(this).parents('li');
                // console.log(p);
                $.ajax({
                    type:"post",
                    url:"{{url('cart/del')}}",
                    data:{goods_id:goods_id,_token:'{{csrf_token()}}'},
                    success:function(res){
                        // console.log(res);
                        if(res==1){
                            layer.msg('删除成功');
                            // $('this').parents('li').remove();
                            history.go(0);
                        }else if(res==2){
                            layer.msg('删除失败');
                        }
                    }
                })
            })

            //点击减号
            $(document).on('click','#less',function(){
                var buy_number = $(this).next().val();
                var goods_id = $(this).parents('li').attr('goods_id');
                // console.log(goods_id);
                // console.log(buy_number);
                if(buy_number<=1){
                    layer.msg('至少添加一件商品');
                }
                //向控制器传值
                $.ajax({
                    type:"post",
                    url:"{{url('cart/checknum')}}",
                    data:{goods_id:goods_id,buy_number:buy_number,_token:'{{csrf_token()}}'},
                    success:function(res){
                        console.log(res);
                    }
                })

            })

            //点击加号
            $(document).on('click','#move',function(){
                var buy_number = $(this).prev().val();
                var goods_id = $(this).parents('li').attr('goods_id');
                var goods_num = $(this).parents('li').attr('goods_num');
                console.log(goods_num);
                if(buy_number>goods_num){
                    layer.msg('库存紧张');
                    $(this).prop('disabled',true);
                    $(this).siblings('.car_btn_1').prop('disabled',false);
                }
                //向控制器传值
                $.ajax({
                    type:"post",
                    url:"{{url('cart/checknum')}}",
                    data:{goods_id:goods_id,goods_num:goods_num,buy_number:buy_number,_token:'{{csrf_token()}}'},
                    success:function(res){
                        console.log(res);
                    }
                })
            })

            //失去焦点时间 加减号
            $(document).on('blur','.text_box',function(){
                var num = $(this).val();
                //获取购买数量
                var buy_number = parseInt(num);
                //获取商品id
                var goods_id = $(this).parents('li').attr('goods_id');
                // console.log(goods_id);
                //获取库存
                var goods_num = $(this).parents('li').attr('goods_num');
                // console.log(goods_num);
                //写正则判断
                var reg = /^[1-9]\d*$/;
                if(!reg.test(buy_number)){
                    $(this).val(1);
                }else if(buy_number>=goods_num){
                    $(this).val(goods_num);
                }else if(buy_number<1){
                    $(this).val(1);
                }

                //向控制器传值
                $.ajax({
                    type:"post",
                    url:"{{url('catr/checknum')}}",
                    data:{buy_number:buy_number,goods_id:goods_id,goods_num:goods_num,_token:'{{csrf_token()}}'},
                    success:function(res){
                        console.log(res);
                    }
                })
            })

            //全删
            $(document).on('click','.remove',function(){
                var _this = $(this);
                
            })
            
            //全选
            $(document).on('click','#xuan',function(){
                
            })

            //单选

            //小计



        })
    })
</script>
