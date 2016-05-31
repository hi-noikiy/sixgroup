<div class="hd-wrap-fluid ">
    <div class="m-hd">
        <div class="site-logo-cont" style="margin-top: 4px">
            <img src="../public/images/logo1.png" width="150px" height="50px"/>
        </div>
        <div class="nav-list">
            <ul>
                <li class="first"><a href="{{URL('index')}}" class="home-link " >首页</a></li>
                <li><a href="http://international.tujia.com/"  target="_blank">海外·港台</a></li>
                <li><a href="http://www.tujia.com/changzu/"  target="_blank">周租月租</a></li>
                <li><a href="http://www.tujia.com/Experience/"  target="_blank">体验房</a></li>
                <li><a href="http://www.tujia.com/photowall/" target="_blank" >特色房</a></li>

                <li><a href="http://travel.tujia.com" target="_blank">社区</a></li>
                <li><a href="http://www.tujia.com/EntrustTreasure/"  target="_blank">买楼收租</a></li>
                <li><a href="javascript:void(0)" onclick="sc()">我的收藏</a></li>
                <li><a href="javascript:void(0)" onclick="wn()">我的蜗牛</a></li>
            </ul>
        </div>
        <script>
            function wn()
            {
                $.ajax({
                    type:'get',
                    url:"{{URL('good/wn')}}",
                    success:function(msg){
                        if (msg==0) {
                            alert('请先登录');
                            location.href="{{URL('login')}}";
                        }else{
                            location.href="{{URL('order')}}";
                        }

                    }
                })
            }

            function sc()
            {
                $.ajax({
                    type:'get',
                    url:"{{URL('good/wn')}}",
                    success:function(msg){
                        if (msg==0) {
                            alert('请先登录');
                            location.href="{{URL('login')}}";
                        }else{
                            location.href="{{URL('good/cl')}}";
                        }

                    }
                })
            }
        </script>

        <div class="sub-link">
            @if($name=Session::get('u_name'))
                <a href="{{URL('center')}}">欢迎<font style="color: red">{{$name}}</font>来到蜗牛家!</a>
                <a href="{{URL('login/del')}}" rel="nofollow">退出</a>
            @endif
        </div>
    </div>
</div>