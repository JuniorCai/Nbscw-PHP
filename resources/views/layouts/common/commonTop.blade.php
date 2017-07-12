<!--顶部TOP-->
<div class="headerTop w100">
    <div class="topContainer containerCenter">
        @if($user==null)
            <div class="top-left">
                <span>欢迎来到<a href="Index.html" target="_self" >&nbsp;宁波石材网&nbsp;</a></span>
                <a href="/login" >登录</a>
                |
                <a href="/register" >注册</a>
            </div>
            <div class="top-right">
                <a href="" target="_blank">会员中心</a>&nbsp;|&nbsp;
                <a href="" target="_blank">帮助中心</a>&nbsp;|&nbsp;
                <span>客服热线:0574-87654321</span>
            </div>
        @else
            <div class="top-left">
                <span>欢迎来到<a href="Index.html" target="_self" >&nbsp;宁波石材网&nbsp;</a></span>
                <span>{{$user->userName}}</span>
                &nbsp;|&nbsp;
                <a href="/logout">退出</a>
            </div>
            <div class="top-right">
                <a href="" target="_blank">站内信(<strong>0</strong>)</a>&nbsp;|&nbsp;
                <a href="" target="_blank">会员中心</a>&nbsp;|&nbsp;
                <a href="" target="_blank">帮助中心</a>&nbsp;|&nbsp;
                <span>客服热线:0574-87654321</span>
            </div>
        @endif
    </div>
</div>
