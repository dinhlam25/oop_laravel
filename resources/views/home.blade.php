@extends('main')

@section('content')



<div class="container">
    <div class="row">

        <h1 class="hidden">Tech_Shop blogger theme</h1>
                <section class='awe-section-1'>
                    <div class='section' id='top-sliders' maxwidgets='1' name='Slide ảnh' showaddelement='yes'>
                        <div class='widget' id='HTML1' locked='false' title='' type='HTML'>
                            <div class='widget-settings'>
                                <div class='widget-setting' name='content'>
                                    <div class='margin-top-15 top-sliders col-md-12'>
                                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                            <div class="slideshow-container">

                                                @foreach($sliders as $slider)
                                                    <div class="mySlides fadee">

                                                        <img src="{{ $slider->avatar }}" style="width:100%">

                                                    </div>
                                                @endforeach

                                            </div>
                                            <br>

                                            <div style="text-align:center">
                                                <span class="dot"></span>
                                                <span class="dot"></span>
                                                <span class="dot"></span>
                                            </div>

                                    </div>
                                    </div>
                                </div>
                                <div class='includable' id='main'>
                                    <!-- only display title if it's non-empty -->
                                    <div if cond='data:title != "'>
                                        <h2 class='title'><data:title/></h2>
                                    </div>
                                    <div class='widget-content'>
                                        <data:content/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




        </section>
        <div class="clearfix"></div>
        <section class="awe-section-2">
            <div class="section_banner clearfix">
                <div class="section" id="section_banner" name="Banner 3 ảnh">
                    <div class="widget HTML" data-version="1" id="HTML2">
                        <div class="widget-content">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="single-banner">
                                    <a class="box-img" href="./categorys" title="Mùa Tết">
                                        <img
                                            alt="Mùa Tết"
                                            class="img-responsive center-block"
                                            src="{{URL::asset('template/images/index_1.jpg')}}"
                                        />
                                        <div class="banner-content">
                                            <div class="fix-banner-content" style="color: darkorange">
                                                <div class="banner-title">Mùa Tết</div>
                                                <div class="banner-subtitle">Giảm giá</div>
                                                <div class="percent-sale">
                                                    đến 50
                                                    <span class="percent"> % </span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="single-banner">
                                    <a
                                        class="box-img"
                                        href="./categorys"
                                        title="Đón tết"
                                    >
                                        <img
                                            alt="Đón tết"
                                            class="img-responsive center-block"
                                            src={{URL::asset('template/images/index_2.jpg')}}
                                        />
                                        <div class="banner-content">
                                            <div class="fix-banner-content custom-position" style="color: darkorange">
                                                <div class="banner-title">Đón tết</div>
                                                <div class="banner-subtitle">Tân trang nhà cửa</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="single-banner">
                                    <a
                                        class="box-img"
                                        href="./categorys"
                                        title="Flash Sale"
                                    >
                                        <img
                                            alt="Flash Sale"
                                            class="img-responsive center-block"
                                            src={{URL::asset('template/images/index_3.jpg')}}
                                        />
                                        <div class="banner-content">
                                            <div class="fix-banner-content custom-position2" style="color: darkorange">
                                                <div class="banner-title">Flash Sale</div>
                                                <div class="percent-sale">
                                                    50
                                                    <span class="percent"> % </span>
                                                </div>
                                                <div class="banner-subtitle">Cửa hàng</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
            <section class='awe-section-3'>
                <div class='section_flash_sale clearfix'>
                    <div class='col-md-12'>
                        <div class='section' id='products' name='Sản phẩm Slide' showaddelement='yes'>
                            <div class='widget' id='HTML3' locked='false' title='' type='HTML'>
                                <div class='widget-settings'>

                                    <div class='widget-setting' name='content'>
                                        <div class='flash-sale-title margin-bottom-30'>
                                            <a href='san-pham-moi' title='Sản phẩm mới'>
                                                Sản phẩm mới
                                            </a>

                                        </div>
                                    </div>

                                    <ul id="hot">
                                        <li>
                                            <div class="row">
                                                {{-- {{
                                                    $products = DB::table('products')
                                                                        ->take(4)
                                                                        ;

                                                }} --}}
                                                @foreach($products as $product)   

                                                <div class="owl-item col-md-3">
                                                    <div class = "simpleCart_shelfItem">
                                                        <div class="ant-single-product">
                                                            <div class="ant-single-product-image zoom_pic">
                                                                <a href="/san-pham/{{ $product->id }}-{{ Str::slug($product->name, '-') }}.html">
                                                                    <img src="{{ $product->avatar }}" alt="{{ $product->name }}'" class="img-responsive center-block item_thumb" /></a>
                                                                @if(now()->diffInDays($product->updated_at) < 3)
                                                                <span class="discount-label discount-label--green">New</span>
                                                                @endif
                                                                <form action="" class="hover-icons hidden-sm hidden-xs variants form-nut-grid form-ajaxtocart">
                                                                    <a class="button ajax_addtocart add_to_cart item_add " onclick="" href="/san-pham/{{ $product->id }}-{{ Str::slug($product->name, '-') }}.html" title="Mua ngay"
                                                                       ></a>

                                                                    <a class="add-to-cart quick-view quickview" href="/san-pham/{{ $product->id }}-{{ Str::slug($product->name, '-') }}.html" title="Xem nhanh"></a>
                                                                </form>
                                                            </div>
                                                            <div class="ant-product-border">
                                                                <h3 class="product-title">
                                                                <a href="/san-pham/{{ $product->id }}-{{ Str::slug($product->name, '-') }}.html"> {{$product->name}}</a>
                                                                    <p style = "display:none;" class = "item_name">  </p>
                                                                </h3>
                                                                <div class="product-price">
                                                                    @if($product->price_sale != 0 )
                                                                        <span class="price item_price">{{ number_format($product->price_sale, 0, '', '.') }}  VNĐ</span>
                                                                        <span class="price-before-discount">  {{ number_format($product->price, 0, '', '.') }}  VNĐ</span>
                                                                    @else
                                                                        <span class="price item_price"> {{ number_format($product->price, 0, '', '.') }} VNĐ</span>
                                                                    @endif

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                @endforeach
                                                
                                            </div>
                                            
                                        </li>
                                        
                                        
                                        
                                    </ul>
                                    
                                    {{-- {!! $products->links() !!} --}}
                                </div>
                            </div>

                        </div>
            </section>
        <div class="clearfix"></div>
        <section class="awe-section-4">
            <div class="section_about_us clearfix">
                <div class="rows">
                    <div class="section" id="about_us" name="Giới thiệu">
                        <div class="widget HTML" data-version="1" id="HTML4">
                            <div class="widget-content">
                                <div class="col-md-5 no-padding col-trai" style="height: 276.02px">
                                    <div class="abount-content">
                                        <h3>Top thiết bị</h3>
                                        <h4>được ưa chuộng!</h4>
                                        <p>
                                            Hãy cùng Tech Shop xây dựng môi trường hiện đại, thoải mái
                                            tiện ích với ít chi phí nhất
                                        </p>
                                        <a href="./categorys" title="Khám phá ngay">
                                            Khám phá ngay
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7 no-padding col-phai">
                                    <div class="about-image">
                                        <a href="#" title="Tech_Shop">
                                            <img
                                                alt="Tech_Shop"
                                                class="img-responsive center-block"
                                                src={{URL::asset('template/images/index_4.jpg')}}
                                            />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <section class="awe-section-5">
            <div class="section_product section_product-1 clearfix">
                <div class="col-md-12">
                    <div class="section" id="section_product-1" name="Sản phẩm All">
                        <div class="widget HTML" data-version="1" id="HTML5">
                            <div class="widget-content">
                                <div class="section-head clearfix">
                                    <h2 class="title_blog">
                                        <a href="san-pham-moi" title="Khuyến Mãi">
                                            Khuyến Mãi
                                        </a>
                                    </h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-3 col-xs-12 fix-40">
                                        <a class="box-img" href="#" title="Tech_Shop">
                                            <picture>
                                                <img
                                                    alt="Tech_Shop"
                                                    src={{URL::asset('template/images/medium_1.jpg')}}
                                                />
                                            </picture>
                                        </a>
                                    </div>
                                    
                                    <div class="col-md-4 col-sm-3 col-xs-12 fix-40">
                                        <a class="box-img" href="#" title="Tech_Shop">
                                            <picture>
                                                <img
                                                    alt="Tech_Shop"
                                                    src={{URL::asset('template/images/medium_2.jpg')}}
                                                />
                                            </picture>
                                        </a>
                                    </div>
                                    

                                    <script src="/feeds/posts/default/-/san-pham?max-results=8&amp;orderby=published&amp;alt=json-in-script&amp;callback=labelproductall"></script>

                                    {{-- @foreach($productsID as $product)
                                    <div class="col-md-15 col-sm-3 col-xs-6">
                                        <div class="ant-single-product simpleCart_shelfItem">
                                            <div class="ant-single-product-image zoom_pic">
                                            <a href="/san-pham/{{ $product->id }}-{{ Str::slug($product->name, '-') }}.html">
                                                <img
                                                src="{{ $product->avatar }}"
                                                alt="{{ $product->name }}"
                                                        class="img-responsive center-block item_thumb"
                                                    /></a>
                                                @if(now()->diffInDays($product->updated_at) < 2)
                                                <span class="discount-label discount-label--green">new</span>
                                                @endif
                                                <form
                                                    class="hover-icons hidden-sm hidden-xs variants form-nut-grid form-ajaxtocart"
                                                >
                                                    <a
                                                        class="button ajax_addtocart add_to_cart item_add"
                                                        title="Mua ngay"
                                                        id="s11"
                                                    ></a>
                                                    <a
                                                        class="add-to-cart quick-view quickview"
                                                        href="/san-pham/{{ $product->id }}-{{ Str::slug($product->name, '-') }}.html"
                                                        title="Xem nhanh"
                                                    ></a>
                                                </form>
                                            </div>
                                            <div class="ant-product-border">
                                                <h3 class="product-title">
                                                    <a
                                                        href="/san-pham/{{ $product->id }}-{{ Str::slug($product->name, '-') }}.html"
                                                        title="Thiết bị điện tử"
                                                    >{{$product->name}}</a
                                                    >

                                                </h3>
                                                <div class="product-price">
                                                    @if($product->price_sale != 0 )
                                                        <span class="price item_price">{{number_format( $product->price_sale, 0, '', ',')}} VNĐ</span>
                                                        <span class="price-before-discount">{{number_format($product->price, 0, '', ',')}} VNĐ</span>
                                                    @else
                                                        <span class="price item_price">{{number_format($product->price, 0, '', ',')}} VNĐ</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach --}}
                            </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <section class="awe-section-9">
            <div class="section_policy clearfix">
                <div class="col-md-12">
                    <div class="section" id="section_policy" name="Chính sách">
                        <div class="widget HTML" data-version="1" id="HTML6">
                            <div class="widget-content">
                                <div
                                    class="owl-policy-mobile owl-carousel not-dqowl owl-loaded owl-drag"
                                >
                                    <div class="owl-stage-outer">
                                        <div
                                            class="owl-stage"

                                        >
                                            <div class="owl-item " style="width: 237.5px">
                                                <div class="item section_policy_content">
                                                    <a href="#" title="Miễn phí vận chuyển">
                                                        <img
                                                            alt="Miễn phí vận chuyển"
                                                            src={{URL::asset('template/images/ic1.png')}}
                                                        />
                                                        <div class="section-policy-padding">
                                                            <h3>Miễn phí vận chuyển</h3>
                                                            <div class="section_policy_title">
                                                                Cho các đơn hàng > 500K
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="owl-item " style="width: 237.5px">
                                                <div class="item section_policy_content">
                                                    <a href="#" title="Hỗ trợ 24/7">
                                                        <img
                                                            alt="Hỗ trợ 24/7"
                                                            src={{URL::asset('template/images/ic2.png')}}
                                                        />
                                                        <div class="section-policy-padding">
                                                            <h3>Hỗ trợ 24/7</h3>
                                                            <div class="section_policy_title">
                                                                Liên hệ hỗ trợ 24h/ngày
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="owl-item " style="width: 237.5px">
                                                <div class="item section_policy_content">
                                                    <a href="#" title="Hoàn tiền 100%">
                                                        <img
                                                            alt="Hoàn tiền 100%"
                                                            src={{URL::asset('template/images/ic3.png')}}
                                                        />
                                                        <div class="section-policy-padding">
                                                            <h3>Hoàn tiền 100%</h3>
                                                            <div class="section_policy_title">
                                                                Nếu sản phẩm bị lỗi, hư hỏng
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="owl-item " style="width: 237.5px">
                                                <div class="item section_policy_content">
                                                    <a href="#" title="Thanh toán">
                                                        <img
                                                            alt="Thanh toán"
                                                            src={{URL::asset('template/images/ic4.png')}}
                                                        />
                                                        <div class="section-policy-padding">
                                                            <h3>Thanh toán</h3>
                                                            <div class="section_policy_title">
                                                                Được bảo mật 100%
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-nav disabled">
                                        <div class="owl-prev">prev</div>
                                        <div class="owl-next">next</div>
                                    </div>
                                    <div class="owl-dots disabled"></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <section class="awe-section-10">
            <div class="section_category clearfix">
                <div class="col-md-12">
                    <div class="section" id="section_category" name="Danh mục Image">
                        <div class="widget HTML" data-version="1" id="HTML7">
                            <div class="widget-content">
                                <div class="flash-sale-title">Danh mục nổi bật</div>
                                <div class="products products-view-grid">
                                    <div class="item col-md-3 col-sm-3 col-xs-6">
                                        <a
                                            href="#"
                                            title="Laptop"
                                        >
                                            <img
                                                alt="Laptop"
                                                class="img-responsive center-block"
                                                src="https://product.hstatic.net/200000420363/product/m.as.h610m-k.prime.d4_b733de5cd1964477ae327c68a2d246ea_large.png"
                                            />
                                            <div class="category-content">
                                                <h5>Laptop</h5>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="item col-md-3 col-sm-3 col-xs-6">
                                        <a
                                            href="#"
                                            title="Linh kiện điện tử"
                                        >
                                            <img
                                                alt="Linh kiện điện tử"
                                                class="img-responsive center-block"
                                                src="https://product.hstatic.net/200000420363/product/i3.12100f.b.ch_0b06d0f9fcfe40f7969e604eb8ddddae_large.png"
                                            />
                                            <div class="category-content">
                                                <h5>Linh kiện điện tử</h5>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="item col-md-3 col-sm-3 col-xs-6">
                                        <a
                                            href="#"
                                            title="Máy tính bảng"
                                        >
                                            <img
                                                alt="Máy tính bảng"
                                                class="img-responsive center-block"
                                                src="https://product.hstatic.net/200000420363/product/l.24.gg.g24f-ek_e3374080942849f1a934f0bfcc25a67f_large.png"
                                            />
                                            <div class="category-content">
                                                <h5>Máy tính bảng</h5>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="item col-md-3 col-sm-3 col-xs-6">
                                        <a
                                            href="#"
                                            title="Điện thoại di động"
                                        >
                                            <img
                                                alt="Điện thoại di động"
                                                class="img-responsive center-block"
                                                src="https://product.hstatic.net/200000420363/product/r4.8g3600.cs.lpx_062727dc02c643e0a26ad5d59d93ee06_large.png"
                                            />
                                            <div class="category-content">
                                                <h5>Điện thoại di động</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
    </div>
</div>
@endsection
