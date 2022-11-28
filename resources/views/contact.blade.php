@extends('main')
@section('content')
    <div class="container">
        <div class="row">
            <div class='post-body entry-content' id='post-body-5706642544990127077' itemprop='articleBody'>

            <script type="text/javascript">
                var submitted = false;
            
                function lienhe() {
                    submitted = true;
                    $('#contact').toggle();
                    $('.hidden-message').show();
                }
            </script>
            <style>
                .success {
                    padding: 14px 23px;
                    margin-bottom: 10px;
                    background: #301ab3;
                    border: 1px solid #222222;
                    font-size: 16px;
                    font-family: Arial, Helvetica, Sans Serif;
                    text-align: center;
                    color: white;
                }
            </style>
            <div class="contact margin-bottom-20 page-contact">
                        <div class="col-md-4">
                            <div class="widget-item info-contact in-fo-page-content">
                                <h1 class="title-head">Thông tin liên hệ</h1>
                                <!-- End .widget-title -->
                                <ul class="widget-menu contact-info-page">
                                    <li>
                                        Tech Shop xin hân hạnh phục vụ quý khách với các sản phẩm công nghệ được rất nhiều khách hàng tại Việt Nam ưa thích và chọn lựa.
                                    </li>
            
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> Tầng 5, Số 117-119-121 Nguyễn Du, Phường Bến Thành, Quận 1, Thành Phố Hồ Chí Minh</li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:0123456789" title="0123456789">0123 456 789</a></li>
                                    <li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:dinhlam2501@gmail.com" title="dinhlam2501@gmail.com">dinhlam2501@gmail.com</a></li>
            
                                </ul>
                                <!-- End .widget-menu -->
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="page-login">
                                <h3 class="title-head">Gửi thông tin</h3>
                                <span class="text-contact margin-bottom-10 block">Bạn hãy điền nội dung tin nhắn vào form dưới đây và gửi cho chúng tôi. Chúng tôi sẽ trả lời bạn sau khi nhận được.</span>
                                <form accept-charset="UTF-8" action="https://docs.google.com/forms/d/e/1FAIpQLSeRbEA0DYZAwjNzBXa350VYQ0Vke6eSGcjuNsUgVfbjShHT0Q/formResponse?embedded=true" id="contact" method="post" class="has-validation-callback" onsubmit="return lienhe()" target="hidden_iframe">
                                    <div class="form-signup clearfix">
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-12">
                                                <fieldset class="form-group">
                                                    <label>Họ tên<span class="required">*</span></label>
                                                    <input type="text" name="contact[name]" id="name" class="form-control  form-control-lg" data-validation-error-msg="Không được để trống" data-validation="required" required="">
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                <fieldset class="form-group">
                                                    <label>Email<span class="required">*</span></label>
                                                    <input type="email" name="contact[email]" data-validation="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" data-validation-error-msg="Email sai định dạng" id="email" class="form-control form-control-lg" required="">
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-12 col-xs-12">
                                                <fieldset class="form-group">
                                                    <label>Điện thoại<span class="required">*</span></label>
                                                    <input type="tel" name="contact[phone]" data-validation="tel" data-validation-error-msg="Không được để trống" id="tel" class="number-sidebar form-control form-control-lg" required="">
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-12 col-xs-12">
                                                <fieldset class="form-group">
                                                    <label>Nội dung<span class="required">*</span></label>
                                                    <textarea name="contact[body]" id="comment" class="form-control form-control-lg" rows="5" data-validation-error-msg="Không được để trống" data-validation="required" required=""></textarea>
                                                </fieldset>
                                                <div class="pull-xs-left" style="margin-top:20px;">
                                                    <button type="submit" class="btn btn-blues btn-style btn-style-active">Gửi tin nhắn</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
            <div class="hidden-message alert-box success" style="display: none;">
                Thông tin đã được gửi đi</div>
            <iframe id="hidden_iframe" name="hidden_iframe" onload="if(submitted){}" style="display: none;"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="contact-map">
                                <div class="page-login text-center">
                                    <h3 class="title-head">Bản đồ cửa hàng</h3>
                                </div>
                                <div class="box-maps margin-top-10 margin-bottom-10">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3660844155734!2d106.65262831405934!3d10.78324826201816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ec84dbc2ab5%3A0xe952d650e50b188f!2zMTc1IEzDvSBUaMaw4budbmcgS2nhu4d0LCBwaMaw4budbmcgNiwgVMOibiBCw6xuaCwgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1500909626466" width="100" height="300" style="border:0" allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
            </div>
            <div style='clear: both;'></div>
            </div>
    </div>
</div>
@endsection