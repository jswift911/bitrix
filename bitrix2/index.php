<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-магазин PAKHI");
?>

        <div class="banner">
            <div class="signing text-right">
                <div class="container">
                    <div class="sign-in">
                        <a href="\auth">Sign In</a>
                    </div>
                    <div class="sign-up1">
                        <a href="\auth">Sign Up</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="banner-info text-center">
                <i class="shipping"></i>
                <h3>Shopping Place For Girls</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enimcidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim</p>
                <a href="/catalog/platya/">All Products</a>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="features-section">
            <div class="features-section-head text-center">
                <h3><span>F</span>eatured Items</h3>
                <p>“this weeks featured products”</p>
            </div>
            <div class="features-section-grids">
                <div class="features-section-grid">
                    <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/girl.png" alt="" />
                    <div class="girl-info">
                        <div class="lonovo">
                            <div class="dress">
                                <h4>Lolona Dress</h4>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut</p>
                            </div>
                            <div class="priceindollers">
                                <h3>$ <span>689</span></h3>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="products-section">
                <div class="products-section-head text-center">
                    <h3><span>P</span>roducts</h3>
                    <p>“check out our products”</p>
                </div>
                <div class="products-section-grids">
                    <ul id="filters" class="clearfix">
                        <li><span class="filter active" data-filter="app card icon web"><label class="active"></label>All</span></li>
                        <li><span class="filter" data-filter="app"><label></label>Kameez</span></li>
                        <li><span class="filter" data-filter="card"><label></label>T-Shirt</span></li>
                        <li><span class="filter" data-filter="icon"><label></label>Pant</span></li>
                    </ul>
                    <div id="portfoliolist">
                        <div class="portfolio card mix_all  data-cat="card" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper">
                            <a href="single.html" class="b-link-stripe b-animate-go  thickbox">
                                <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/pic1.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><div class="atc"><p>Add To Cart</p></div><div class="clearfix"></div><h2 class="b-animate b-from-left    b-delay03 "><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/icon-eye.png" class="img-responsive go" alt=""/></h2>
                                </div></a>
                            <div class="title">
                                <div class="colors">
                                    <h4>Lolona Jeans</h4>
                                    <p> Colors:
                                    <ul>
                                        <a href="#"><li class="color1"></li></a>
                                        <a href="#"><li class="color2"></li></a>
                                        <a href="#"><li class="color3"></li></a>
                                        <a href="#"><li class="color4"></li></a>
                                    </ul>
                                    </p>
                                </div>
                                <div class="main-price">
                                    <h3><span>$</span>30</h3>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio app mix_all  data-cat="app" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper">
                        <a href="single.html" class="b-link-stripe b-animate-go  thickbox">
                            <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/pic2.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><div class="atc"><p>Add To Cart</p></div><div class="clearfix"></div><h2 class="b-animate b-from-left    b-delay03 "><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/icon-eye.png" class="img-responsive go" alt=""/></h2>
                            </div></a>
                        <div class="title">
                            <div class="colors">
                                <h4>Lolona Jeans</h4>
                                <p> Colors:
                                <ul>
                                    <a href="#"><li class="color1"></li></a>
                                    <a href="#"><li class="color2"></li></a>
                                    <a href="#"><li class="color3"></li></a>
                                    <a href="#"><li class="color4"></li></a>
                                </ul>
                                </p>
                            </div>
                            <div class="main-price">
                                <h3><span>$</span>30</h3>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="portfolio web mix_all  data-cat="web" style="display: inline-block; opacity: 1;">
                <div class="portfolio-wrapper">
                    <a href="single.html" class="b-link-stripe b-animate-go  thickbox">
                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/pic3.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><div class="atc"><p>Add To Cart</p></div><div class="clearfix"></div><h2 class="b-animate b-from-left    b-delay03 "><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/icon-eye.png" class="img-responsive go" alt=""/></h2>
                        </div></a>
                    <div class="title">
                        <div class="colors">
                            <h4>Lolona Jeans</h4>
                            <p> Colors:
                            <ul>
                                <a href="#"><li class="color1"></li></a>
                                <a href="#"><li class="color2"></li></a>
                                <a href="#"><li class="color3"></li></a>
                                <a href="#"><li class="color4"></li></a>
                            </ul>
                            </p>
                        </div>
                        <div class="main-price">
                            <h3><span>$</span>30</h3>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="portfolio icon mix_all  data-cat="icon" style="display: inline-block; opacity: 1;">
            <div class="portfolio-wrapper">
                <a href="single.html" class="b-link-stripe b-animate-go  thickbox">
                    <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/pic4.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><div class="atc"><p>Add To Cart</p></div><div class="clearfix"></div><h2 class="b-animate b-from-left    b-delay03 "><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/icon-eye.png" class="img-responsive go" alt=""/></h2>
                    </div></a>
                <div class="title">
                    <div class="colors">
                        <h4>Lolona Jeans</h4>
                        <p> Colors:
                        <ul>
                            <a href="#"><li class="color1"></li></a>
                            <a href="#"><li class="color2"></li></a>
                            <a href="#"><li class="color3"></li></a>
                            <a href="#"><li class="color4"></li></a>
                        </ul>
                        </p>
                    </div>
                    <div class="main-price">
                        <h3><span>$</span>30</h3>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="portfolio icon mix_all  data-cat="icon" style="display: inline-block; opacity: 1;">
        <div class="portfolio-wrapper">
            <a href="single.html" class="b-link-stripe b-animate-go  thickbox">
                <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/pic5.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><div class="atc"><p>Add To Cart</p></div><div class="clearfix"></div><h2 class="b-animate b-from-left    b-delay03 "><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/icon-eye.png" class="img-responsive go" alt=""/></h2>
                    <p class="b-animate b-from-right    b-delay03 "></p></div></a>
            <div class="title">
                <div class="colors">
                    <h4>Lolona Jeans</h4>
                    <p> Colors:
                    <ul>
                        <a href="#"><li class="color1"></li></a>
                        <a href="#"><li class="color2"></li></a>
                        <a href="#"><li class="color3"></li></a>
                        <a href="#"><li class="color4"></li></a>
                    </ul>
                    </p>
                </div>
                <div class="main-price">
                    <h3><span>$</span>30</h3>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="portfolio app mix_all  data-cat="app" style="display: inline-block; opacity: 1;">
    <div class="portfolio-wrapper">
        <a href="single.html" class="b-link-stripe b-animate-go  thickbox">
            <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/pic6.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><div class="atc"><p>Add To Cart</p></div><div class="clearfix"></div><h2 class="b-animate b-from-left    b-delay03 "><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/icon-eye.png" class="img-responsive go" alt=""/></h2>
            </div></a>
        <div class="title">
            <div class="colors">
                <h4>Lolona Jeans</h4>
                <p> Colors:
                <ul>
                    <a href="#"><li class="color1"></li></a>
                    <a href="#"><li class="color2"></li></a>
                    <a href="#"><li class="color3"></li></a>
                    <a href="#"><li class="color4"></li></a>
                </ul>
                </p>
            </div>
            <div class="main-price">
                <h3><span>$</span>30</h3>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    </div>
    <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
    <div class="more">
        <div class="seemore">
            <a href="products.html">See More</a>
        </div>
        <div class="allproducts">
            <a href="products.html">All Products</a>
        </div>
        <div class="clearfix"></div>
    </div>
    </div>

    <!-- script-for-portfolio -->
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
            });
        });
    </script>

    <script type="text/javascript" src="<?=DEFAULT_TEMPLATE_PATH?>/js/jquery.mixitup.min.js"></script>
    <script type="text/javascript">
        $(function () {

            var filterList = {

                init: function () {

                    // MixItUp plugin
                    // http://mixitup.io
                    $('#portfoliolist').mixitup({
                        targetSelector: '.portfolio',
                        filterSelector: '.filter',
                        effects: ['fade'],
                        easing: 'snap',
                        // call the hover effect
                        onMixEnd: filterList.hoverEffect()
                    });

                },

                hoverEffect: function () {

                    // Simple parallax effect
                    $('#portfoliolist .portfolio').hover(
                        function () {
                            $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
                            $(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
                        },
                        function () {
                            $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
                            $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
                        }
                    );

                }

            };

            // Run the show!
            filterList.init();


        });
    </script>


    </div>
    </div>
    <div class="container">
        <div class="subscribe-section">
            <div class="subscribe text-center">
                <h4>Subscribe To Our Newsletter</h4>
                <input type="text" class="text" value="Your email..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your email...';}">
                <input type="submit" value="Subscribe">
            </div>
            <div class="social-icons text-center">
                <a href="#"><i class="facebook"></i></a>
                <a href="#"><i class="twitter"></i></a>
                <a href="#"><i class="linkedin"></i></a>
                <a href="#"><i class="pinterest"></i></a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="recommand-section">
            <div class="recommand-section-head text-center">
                <h3><span>R</span>ecommended</h3>
                <p>“check out some recommended products also”</p>
            </div>
            <div class="recommand-section-grids">

                <div class="standards">
                    <ul class="selectors_wrapper">
                        <div class="tags">
                            <h3>Tags  <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/tag.png" alt="" /></h3>
                        </div>
                        <li class="selector active" data-selector="1">Popular</li>
                        <li class="selector" data-selector="2">Sales</li>
                        <li class="selector" data-selector="3">Seller</li>
                        <li class="selector" data-selector="4">Rate</li>
                    </ul>

                    <div class="standard_content">
                        <div class="standard active" data-selector="1">
                            <div class="tag-grid">
                                <div class="portfolio app mix_all  data-cat="app" style="display: inline-block; opacity: 1;">
                                <div class="portfolio-wrapper">
                                    <a href="single.html" class="b-link-stripe b-animate-go  thickbox">
                                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/pic7.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><div class="atc"><p>Add To Cart</p></div><div class="clearfix"></div><h2 class="b-animate b-from-left    b-delay03 "><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/icon-eye.png" class="img-responsive go" alt=""/></h2>
                                        </div></a>
                                    <div class="r-title">
                                        <h3>Lolona Bag</h3>
                                        <h4>$30</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tag-grid">
                            <div class="portfolio app mix_all  data-cat="app" style="display: inline-block; opacity: 1;">
                            <div class="portfolio-wrapper">
                                <a href="single.html" class="b-link-stripe b-animate-go  thickbox">
                                    <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/pic8.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><div class="atc"><p>Add To Cart</p></div><div class="clearfix"></div><h2 class="b-animate b-from-left    b-delay03 "><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/icon-eye.png" class="img-responsive go" alt=""/></h2>
                                    </div></a>
                                <div class="r-title">
                                    <h3>Jism Watch</h3>
                                    <h4>$30</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tag-grid">
                        <div class="portfolio app mix_all  data-cat="app" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper">
                            <a href="single.html" class="b-link-stripe b-animate-go  thickbox">
                                <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/pic9.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><div class="atc"><p>Add To Cart</p></div><div class="clearfix"></div><h2 class="b-animate b-from-left    b-delay03 "><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/icon-eye.png" class="img-responsive go" alt=""/></h2>
                                </div></a>
                            <div class="r-title">
                                <h3>Sunny Dress</h3>
                                <h4>$30</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="standard" data-selector="2">
                <div class="tag-grid">
                    <div class="portfolio app mix_all  data-cat="app" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper">
                        <a href="single.html" class="b-link-stripe b-animate-go  thickbox">
                            <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/pic7.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><div class="atc"><p>Add To Cart</p></div><div class="clearfix"></div><h2 class="b-animate b-from-left    b-delay03 "><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/icon-eye.png" class="img-responsive go" alt=""/></h2>
                            </div></a>
                        <div class="r-title">
                            <h3>Lolona Bag</h3>
                            <h4>$30</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tag-grid">
                <div class="portfolio app mix_all  data-cat="app" style="display: inline-block; opacity: 1;">
                <div class="portfolio-wrapper">
                    <a href="single.html" class="b-link-stripe b-animate-go  thickbox">
                        <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/pic9.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><div class="atc"><p>Add To Cart</p></div><div class="clearfix"></div><h2 class="b-animate b-from-left    b-delay03 "><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/icon-eye.png" class="img-responsive go" alt=""/></h2>
                        </div></a>
                    <div class="r-title">
                        <h3>Sunny Dress</h3>
                        <h4>$30</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="tag-grid">
            <div class="portfolio app mix_all  data-cat="app" style="display: inline-block; opacity: 1;">
            <div class="portfolio-wrapper">
                <a href="single.html" class="b-link-stripe b-animate-go  thickbox">
                    <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/pic8.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><div class="atc"><p>Add To Cart</p></div><div class="clearfix"></div><h2 class="b-animate b-from-left    b-delay03 "><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/icon-eye.png" class="img-responsive go" alt=""/></h2>
                    </div></a>
                <div class="r-title">
                    <h3>Jism Watch</h3>
                    <h4>$30</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    </div>
    <div class="standard" data-selector="3">
        <div class="tag-grid">
            <div class="portfolio app mix_all  data-cat="app" style="display: inline-block; opacity: 1;">
            <div class="portfolio-wrapper">
                <a href="single.html" class="b-link-stripe b-animate-go  thickbox">
                    <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/pic9.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><div class="atc"><p>Add To Cart</p></div><div class="clearfix"></div><h2 class="b-animate b-from-left    b-delay03 "><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/icon-eye.png" class="img-responsive go" alt=""/></h2>
                    </div></a>
                <div class="r-title">
                    <h3>Sunny Dress</h3>
                    <h4>$30</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="tag-grid">
        <div class="portfolio app mix_all  data-cat="app" style="display: inline-block; opacity: 1;">
        <div class="portfolio-wrapper">
            <a href="single.html" class="b-link-stripe b-animate-go  thickbox">
                <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/pic7.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><div class="atc"><p>Add To Cart</p></div><div class="clearfix"></div><h2 class="b-animate b-from-left    b-delay03 "><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/icon-eye.png" class="img-responsive go" alt=""/></h2>
                </div></a>
            <div class="r-title">
                <h3>Lolona Bag</h3>
                <h4>$30</h4>
            </div>
        </div>
    </div>
    </div>
    <div class="tag-grid">
        <div class="portfolio app mix_all  data-cat="app" style="display: inline-block; opacity: 1;">
        <div class="portfolio-wrapper">
            <a href="single.html" class="b-link-stripe b-animate-go  thickbox">
                <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/pic8.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><div class="atc"><p>Add To Cart</p></div><div class="clearfix"></div><h2 class="b-animate b-from-left    b-delay03 "><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/icon-eye.png" class="img-responsive go" alt=""/></h2>
                </div></a>
            <div class="r-title">
                <h3>Jism Watch</h3>
                <h4>$30</h4>
            </div>
        </div>
    </div>
    </div>
    <div class="clearfix"></div>
    </div>
    <div class="standard" data-selector="4">
        <div class="tag-grid">
            <div class="portfolio app mix_all  data-cat="app" style="display: inline-block; opacity: 1;">
            <div class="portfolio-wrapper">
                <a href="single.html" class="b-link-stripe b-animate-go  thickbox">
                    <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/pic7.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><div class="atc"><p>Add To Cart</p></div><div class="clearfix"></div><h2 class="b-animate b-from-left    b-delay03 "><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/icon-eye.png" class="img-responsive go" alt=""/></h2>
                    </div></a>
                <div class="r-title">
                    <h3>Jism Watch</h3>
                    <h4>$30</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="tag-grid">
        <div class="portfolio app mix_all  data-cat="app" style="display: inline-block; opacity: 1;">
        <div class="portfolio-wrapper">
            <a href="single.html" class="b-link-stripe b-animate-go  thickbox">
                <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/pic9.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><div class="atc"><p>Add To Cart</p></div><div class="clearfix"></div><h2 class="b-animate b-from-left    b-delay03 "><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/icon-eye.png" class="img-responsive go" alt=""/></h2>
                </div></a>
            <div class="r-title">
                <h3>Lolona Bag</h3>
                <h4>$30</h4>
            </div>
        </div>
    </div>
    </div>
    <div class="tag-grid">
        <div class="portfolio app mix_all  data-cat="app" style="display: inline-block; opacity: 1;">
        <div class="portfolio-wrapper">
            <a href="single.html" class="b-link-stripe b-animate-go  thickbox">
                <img src="<?=DEFAULT_TEMPLATE_PATH?>/images/pic8.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><div class="atc"><p>Add To Cart</p></div><div class="clearfix"></div><h2 class="b-animate b-from-left    b-delay03 "><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/icon-eye.png" class="img-responsive go" alt=""/></h2>
                </div></a>
            <div class="r-title">
                <h3>Sunny Dress</h3>
                <h4>$30</h4>
            </div>
        </div>
    </div>
    </div>
    <div class="clearfix"></div>
    </div>
    </div>
    <div class="clearfix"></div>
    </div>
    </div>
    </div>
    </div>
    <div class="contact-section">
        <div class="contact-section-head text-center">
            <h3><span>C</span>ontact Us</h3>
            <p>“let us know your feedbacks and questions”</p>
        </div>
        <div class="contact-form-main">
            <form>
                <label class="span1"></label>
                <input type="text" class="text" value="Name..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name...';}">
                <label class="span2"></label>
                <label class="span3"></label>
                <input type="text" class="text" value="Email..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email...';}">
                <label class="span4"></label>
                <label class="span5"></label>
                <input type="text" class="text" value="Phone..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone...';}">
                <label class="span6"></label>
                <label class="span7"></label>
                <textarea onfocus="if(this.value == 'Message...') this.value='';" onblur="if(this.value == '') this.value='Your Message';" >Message...</textarea>
                <label class="span8"></label>
                <input type="submit" value="">
            </form>
        </div>

    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>