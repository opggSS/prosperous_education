<div class="container-fluid" id="footer">
    <div class="row text-center">
        <div class="col-md-2 offset-md-1">
            <h6>关于我们</h6>
            <a><p>公司介绍</p></a>
            <a><p>银行账号</p></a>
        </div>
        <div class="col-md-2">
            <h6>学习规划</h6>
            <a><p>雅思学习</p></a>
            <a><p>学科补习</p></a>
        </div>
        <div class="col-md-2">
            <h6>相关平台</h6>
            <a><p>微信公众号</p></a>
            <a><p>领英招聘</p></a>
        </div>
        <div class="col-md-2">
            <h6>服务热线:</h6>
            <p>Tel: 604-957-5877</p>
            <p>Tel: 604-303-5879</p>
            <h6>邮箱:</h6>
            <p>jessica@pici.ca</p>
        </div>
        <div class="col-md-2">
            <img src="{{asset('images/qrcode.png')}}" width="100%">
            <p>微信公众号</p>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type="text/javascript" src="{{URL::asset('js/jquery.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/swiper.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/all.js')}}"></script>

<script>
    $('#subscribe-wechat').on('click', function () {
        $("html, body").animate({ scrollTop: $(document).height() }, 1500);
    })

    $('#contact-top-bar').on('click', function () {
        $("html, body").animate({ scrollTop: $(document).height() }, 1500);
    })
</script>

@yield('js')

</body>
</html>