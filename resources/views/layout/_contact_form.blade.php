<div class="contact-form container-fluid">
    <div class="row">
        <div class="col-10 offset-1 col-md-6 offset-md-3 col-lg-4 offset-lg-4 text-center pt-4 pb-5">
            <h1>在线预约</h1>
            <h3 class="mb-4">免费获得个性升学规划方案</h3>



{{-- 
            <form method="post" action="{{url('donate')}}">
                {{csrf_field()}}
                    <div class="form-bg"></div>
                    <div class="form-volunteer">
                        <div class="row">
                            <div class="title col-md-12">Join Us To Help The Community !</div>
                            <div class="col-md-6">First Name</div>
                            <div class="col-md-6">Last Name</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6"><input name="firstName" type="text"></div>
                            <div class="col-md-6"><input name="lastName" type="text"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">Your Email</div><br>
                            <div class="col-md-12"><input name="email" id="email-input" type="email"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">Your Message</div><br>
                            <div class="col-md-12"><input name="message" id="msg-input" type="text"></div>
                        </div>
                        <div class="row">
                            <input type="submit" class="col-md-4 offset-md-4" value="Join">
                        </div>
                        @include('layout._message')
                    </div>
                </form>
 --}}


            <form method="post" action="{{url('sendMessage')}}">
                {{csrf_field()}}
                <input class="form-control" name="name" type="text" placeholder="您的姓名*" required>
                <input class="form-control" name="email" type="email" placeholder="邮箱*" required>
                <input class="form-control" name="phone" type="tel" placeholder="您的电话*" pattern="[0-9]{10}" required>
                <input class="form-control" name="wechat" type="text" placeholder="您的微信">
                <input class="form-control" name="area" type="text" placeholder="所在地区">
                <select class="form-control" name="topic">
                    <option value="留学申请">留学申请</option>
                    <option value="升学规划">升学规划</option>
                    <option value="签证服务">签证服务</option>
                    <option value="境外服务">境外服务</option>
                    <option value="职业培训">职业培训</option>
                    <option value="特色夏令营">特色夏令营</option>
                </select>
                <textarea class="form-control" name="message" placeholder="您的留言"></textarea>
                <button class="mt-4 p-1">OK! 提交</button>

                @include('layout._message')
            </form>
        </div>
    </div>
</div>