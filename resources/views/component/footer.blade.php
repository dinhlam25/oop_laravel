<footer class='footer-container'>
    <div class='footer-top'>
        <div class=''>
            <div class='row'>
                <div class='col-md-4 col-sm-4 col-xs-12'>
                    <b:section id='gt' maxwidgets='1' name='Giới thiệu' showaddelement='yes'>
                        <b:widget id='HTML13' locked='false' title='' type='HTML'>
                            <b:widget-settings>
                                <b:widget-setting name='content'><div class='footer-title'>
                                        <h3 class='footer-logo'><a class="logo-wrapper" href="" title="Tech_Shop">
                                            <img 
                                                alt="logo Tech_Shop"
    
                                                src={{URL::asset('template/images/logo.png')}}
                                            />
                                        </a></h3>
                                                {{-- {{ public_path('template/images/logo.png')}} --}}
                                          
                                    </div>  
                                    <div class='footer-content'>
                                        <div class='footer-info'>
                                            <p><strong>Địa chỉ: </strong>Tầng 5, Số 117-119-121 Nguyễn Du, Phường Bến Thành, Quận 1, Thành Phố Hồ Chí Minh</p>
                                            <p><strong>Điện thoại: </strong><a href='tel:0123456789' title='0123456789'>0123 456 789</a></p>
                                            <p><strong>Email: </strong><a href='mailto:dinhlam2501@gmail.com' title='dinhlam2501@gmail.com'>dinhlam2501@gmail.com</a></p>

                                        </div>
                                        <ul class='social'>
                                            <li><a href='#LINK' target='_blank' title='Facebook'><span class='fa fa-facebook'></span></a></li>
                                            <li><a href='#LINK' target='_blank' title='Twitter'><span class='fa fa-twitter'></span></a></li>
                                            <li><a href='#LINK' target='_blank' title='Google Plus'><span class='fa fa-google-plus'></span></a></li>
                                            <li><a href='#LINK' target='_blank' title='Pinterest'><span class='fa fa-pinterest-p'></span></a></li>
                                        </ul>
                                    </div></b:widget-setting>
                            </b:widget-settings>
                            <b:includable id='main'>
                                <!-- only display title if it's non-empty -->
                                <b:if cond='data:title != &quot;&quot;'>
                                    <h2 class='title'><data:title/></h2>
                                </b:if>
                                <div class='widget-content'>
                                    <data:content/>
                                </div>

                                <b:include name='quickedit'/>
                            </b:includable>
                        </b:widget>
                    </b:section>
                </div>
                <div class='col-md-8 col-sm-8 col-xs-12'>
                    <div class='row'>
                        <div class='col-md-4 col-sm-4 col-xs-12 footer-click'>
                            <b:section id='ft2' maxwidgets='1' name='Footer 1' showaddelement='yes'>
                                <b:widget id='HTML14' locked='false' title='' type='HTML'>
                                    <b:widget-settings>
                                        <b:widget-setting name='content'><div class='footer-title'>
                                                <h3>Về chúng tôi</h3>
                                            </div>
                                            <div class='footer-content'>
                                                <ul class='menu'>
                                                    <li><a href='/' title='Trang chủ'>Trang chủ</a></li>
                                                    <li><a href='#LINK' title='Giới thiệu'>Giới thiệu</a></li>
                                                    <li><a href='/search/label/san-pham' title='Sản phẩm'>Sản phẩm</a></li>
                                                    <li><a href='/search/label/tin-tuc' title='Tin tức'>Tin tức</a></li>
                                                    <li><a href='/p/lien-he.html' title='Liên hệ'>Liên hệ</a></li>
                                                </ul>
                                            </div></b:widget-setting>
                                    </b:widget-settings>
                                    <b:includable id='main'>
                                        <!-- only display title if it's non-empty -->
                                        <b:if cond='data:title != &quot;&quot;'>
                                            <h2 class='title'><data:title/></h2>
                                        </b:if>
                                        <div class='widget-content'>
                                            <data:content/>
                                        </div>

                                        <b:include name='quickedit'/>
                                    </b:includable>
                                </b:widget>
                            </b:section>
                        </div>
                        <div class='col-md-4 col-sm-4 col-xs-12 footer-click'>
                            <b:section id='ft3' maxwidgets='1' name='Footer 2' showaddelement='yes'>
                                <b:widget id='HTML15' locked='false' title='' type='HTML'>
                                    <b:widget-settings>
                                        <b:widget-setting name='content'><div class='footer-title'>
                                                <h3>Chính sách</h3>
                                            </div>
                                            <div class='footer-content'>
                                                <ul class='menu'>
                                                    <li><a href='/' title='Trang chủ'>Trang chủ</a></li>
                                                    <li><a href='#LINK' title='Giới thiệu'>Giới thiệu</a></li>
                                                    <li><a href='/search/label/san-pham' title='Sản phẩm'>Sản phẩm</a></li>
                                                    <li><a href='/search/label/tin-tuc' title='Tin tức'>Tin tức</a></li>
                                                    <li><a href='/p/lien-he.html' title='Liên hệ'>Liên hệ</a></li>
                                                </ul>
                                            </div></b:widget-setting>
                                    </b:widget-settings>
                                    <b:includable id='main'>
                                        <!-- only display title if it's non-empty -->
                                        <b:if cond='data:title != &quot;&quot;'>
                                            <h2 class='title'><data:title/></h2>
                                        </b:if>
                                        <div class='widget-content'>
                                            <data:content/>
                                        </div>

                                        <b:include name='quickedit'/>
                                    </b:includable>
                                </b:widget>
                            </b:section>
                        </div>
                        <div class='col-md-4 col-sm-4 col-xs-12 footer-click'>
                            <b:section id='ft4' maxwidgets='1' name='Footer 3' showaddelement='yes'>
                                <b:widget id='HTML16' locked='false' title='' type='HTML'>
                                    <b:widget-settings>
                                        <b:widget-setting name='content'><div class='footer-title'>
                                                <h3>Hỗ trợ</h3>
                                            </div>
                                            <div class='footer-content'>
                                                <ul class='menu'>
                                                    <li><a href='/' title='Trang chủ'>Trang chủ</a></li>
                                                    <li><a href='#LINK' title='Giới thiệu'>Giới thiệu</a></li>
                                                    <li><a href='/search/label/san-pham' title='Sản phẩm'>Sản phẩm</a></li>
                                                    <li><a href='/search/label/tin-tuc' title='Tin tức'>Tin tức</a></li>
                                                    <li><a href='/p/lien-he.html' title='Liên hệ'>Liên hệ</a></li>
                                                </ul>
                                            </div>
</footer>
