<div class="container-fluid" id="footer">
    <div class="row text-center">
        <div class="col-md-2 offset-md-1">
            <h6>关于我们</h6>
            <a href="/"><p>公司介绍</p></a>
            <a href="/"><p>银行账号</p></a>
        </div>
        <div class="col-md-2">
            <h6>学习规划</h6>
            <a href="/"><p>雅思学习</p></a>
            <a href="/"><p>学科补习</p></a>
        </div>
        <div class="col-md-2">
            <h6>相关平台</h6>
            <a href="/"><p>微信公众号</p></a>
            <a href="/"><p>领英招聘</p></a>
        </div>
        <div class="col-md-2">
            <h6>服务热线:</h6>
            <a href="tel:6049575877"><p class="footer-hightlight">Tel: 604-957-5877</p></a>
            <p class="footer-hightlight">Fax: 604-303-5879</p>
            <h6>邮箱:</h6>
            <a href="mailto:jessica@pici.ca"><p class="footer-hightlight">jessica@pici.ca</p></a>
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

{{--This is the script for home menu hover effect--}}
<script>
    $('.menu-about-us').hover(
        function () {
            $('#hover-about-us').prop('hidden', false)
        },
        function () {
            $('#hover-about-us').prop('hidden', true)
        }
    )
    $('.menu-application').hover(
        function () {
            $('#hover-application').prop('hidden', false)
        },
        function () {
            $('#hover-application').prop('hidden', true)
        }
    )
    $('.menu-planning').hover(
        function () {
            $('#hover-planning').prop('hidden', false)
        },
        function () {
            $('#hover-planning').prop('hidden', true)
        }
    )
    $('.menu-visa').hover(
        function () {
            $('#hover-visa').prop('hidden', false)
        },
        function () {
            $('#hover-visa').prop('hidden', true)
        }
    )
    $('.menu-overseas').hover(
        function () {
            $('#hover-overseas').prop('hidden', false)
        },
        function () {
            $('#hover-overseas').prop('hidden', true)
        }
    )
    $('.menu-job').hover(
        function () {
            $('#hover-job').prop('hidden', false)
        },
        function () {
            $('#hover-job').prop('hidden', true)
        }
    )
    $('.menu-summer').hover(
        function () {
            $('#hover-summer').prop('hidden', false)
        },
        function () {
            $('#hover-summer').prop('hidden', true)
        }
    )
</script>

{{--This is the script for home menu wechat scrolldown--}}
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