<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Banner</title>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wrapper">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner">
        <?php echo file_get_contents('http://revslider.artsan.org/api.php?id=7'); ?>
    </div>
    <button class="btn-open menu" type="button">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <svg class="btn-open reviews" height="16px" version="1.1" viewBox="0 0 16 16" width="16px" xmlns="http://www.w3.org/2000/svg" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g fill="none" fill-rule="evenodd" id="Icons with numbers" stroke="none" stroke-width="1"><g fill="#000000" id="Group" transform="translate(-672.000000, -192.000000)"><path d="M678.5,206 C677.731809,206 676.994742,205.897492 676.310656,205.709288 C675.487837,206.33258 674.185332,207.131104 672.912598,207.131104 C673.551757,206.526132 673.772464,205.403044 673.839123,204.485072 C672.700924,203.584516 672,202.355223 672,201 C672,198.238576 674.910149,196 678.5,196 C682.089851,196 685,198.238576 685,201 C685,203.761424 682.089851,206 678.5,206 Z M677.345304,195.154564 C678.471782,194.43361 679.920062,194 681.5,194 C685.089851,194 688,196.238576 688,199 C688,199.906069 687.686692,200.755847 687.138867,201.488728 C687.115869,202.365606 687.179165,204.271446 688.087402,205.131104 C686.813468,205.131104 685.509707,204.331074 684.687018,203.707526 C685.513346,202.804647 686,201.696977 686,200.5 C686,197.462434 682.865993,195 679,195 C678.429953,195 677.875821,195.053538 677.345304,195.154564 Z M677.345304,195.154564" id="Oval 247 copy"/></g></g>
    </svg>
    <div class="modal-form" id="main-menu">
            <div class="header_block">
                <span class="title">Navigation</span>
                <svg class="close" enable-background="new 0 0 100 100" id="Layer_1" version="1.1" viewBox="0 0 100 100" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <polygon fill="#222" points="77.6,21.1 49.6,49.2 21.5,21.1 19.6,23 47.6,51.1 19.6,79.2 21.5,81.1 49.6,53 77.6,81.1 79.6,79.2   51.5,51.1 79.6,23 "/>
                </svg>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li class="about"><a href="#">About us</a></li>
                <li class="desc"><a href="#">Description</a></li>
                <li class="products"><a href="#">Products</a></li>
            </ul>
        </div><!-- /#main-menu -->
    <div class="modal-form" id="reviews">
        <div class="header_block">
            <span class="title">Reviews</span>
            <span class="general_raiting">
                <i class="glyphicon glyphicon-star"></i>
                <i class="glyphicon glyphicon-star"></i>
                <i class="glyphicon glyphicon-star"></i>
                <i class="glyphicon glyphicon-star-empty"></i>
                <i class="glyphicon glyphicon-star-empty"></i>
            </span>
            <svg class="close" enable-background="new 0 0 100 100" id="Layer_1" version="1.1" viewBox="0 0 100 100" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <polygon fill="#222" points="77.6,21.1 49.6,49.2 21.5,21.1 19.6,23 47.6,51.1 19.6,79.2 21.5,81.1 49.6,53 77.6,81.1 79.6,79.2   51.5,51.1 79.6,23 "/>
            </svg>
        </div>
        <div class="content-reviews">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 review">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 avatar">
                    <img src="images/avatar.png" alt="Gregory House">
                    <span>Gregory House</span>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 description_review">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 date">
                        <span class="date">15.01.2016</span>
                        <span class="raiting">
                            <i class="glyphicon glyphicon-star"></i>
                            <i class="glyphicon glyphicon-star"></i>
                            <i class="glyphicon glyphicon-star"></i>
                            <i class="glyphicon glyphicon-star-empty"></i>
                            <i class="glyphicon glyphicon-star-empty"></i>
                        </span>
                    </div>
                    <p class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 review">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 avatar">
                    <img src="images/avatar.png" alt="Gregory House">
                    <span>Gregory House</span>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 description_review">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 date">
                        <span class="date">15.01.2016</span>
                        <span class="raiting">
                            <i class="glyphicon glyphicon-star"></i>
                            <i class="glyphicon glyphicon-star"></i>
                            <i class="glyphicon glyphicon-star-empty"></i>
                            <i class="glyphicon glyphicon-star-empty"></i>
                            <i class="glyphicon glyphicon-star-empty"></i>
                        </span>
                    </div>
                    <p class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 review">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 avatar">
                    <img src="images/avatar.png" alt="Gregory House">
                    <span>Gregory House</span>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 description_review">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 date">
                        <span class="date">15.01.2016</span>
                        <span class="raiting">
                            <i class="glyphicon glyphicon-star"></i>
                            <i class="glyphicon glyphicon-star"></i>
                            <i class="glyphicon glyphicon-star"></i>
                            <i class="glyphicon glyphicon-star-empty"></i>
                            <i class="glyphicon glyphicon-star-empty"></i>
                        </span>
                    </div>
                    <p class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 review">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 avatar">
                    <img src="images/avatar.png" alt="Gregory House">
                    <span>Gregory House</span>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 description_review">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 date">
                        <span class="date">15.01.2016</span>
                        <span class="raiting">
                            <i class="glyphicon glyphicon-star"></i>
                            <i class="glyphicon glyphicon-star"></i>
                            <i class="glyphicon glyphicon-star"></i>
                            <i class="glyphicon glyphicon-star-empty"></i>
                            <i class="glyphicon glyphicon-star-empty"></i>
                        </span>
                    </div>
                    <p class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 review">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 avatar">
                    <img src="images/avatar.png" alt="Gregory House">
                    <span>Gregory House</span>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 description_review">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 date">
                        <span class="date">15.01.2016</span>
                        <span class="raiting">
                            <i class="glyphicon glyphicon-star"></i>
                            <i class="glyphicon glyphicon-star"></i>
                            <i class="glyphicon glyphicon-star"></i>
                            <i class="glyphicon glyphicon-star-empty"></i>
                            <i class="glyphicon glyphicon-star-empty"></i>
                        </span>
                    </div>
                    <p class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 review">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 avatar">
                    <img src="images/avatar.png" alt="Gregory House">
                    <span>Gregory House</span>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 description_review">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 date">
                        <span class="date">15.01.2016</span>
                        <span class="raiting">
                            <i class="glyphicon glyphicon-star"></i>
                            <i class="glyphicon glyphicon-star"></i>
                            <i class="glyphicon glyphicon-star"></i>
                            <i class="glyphicon glyphicon-star-empty"></i>
                            <i class="glyphicon glyphicon-star-empty"></i>
                        </span>
                    </div>
                    <p class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>
    </div><!-- /#reviews -->
    <div class="modal-form single middle" id="description">
        <div class="header_block">
            <span class="title">Description</span>
            <svg class="close" enable-background="new 0 0 100 100" id="Layer_1" version="1.1" viewBox="0 0 100 100" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <polygon fill="#222" points="77.6,21.1 49.6,49.2 21.5,21.1 19.6,23 47.6,51.1 19.6,79.2 21.5,81.1 49.6,53 77.6,81.1 79.6,79.2   51.5,51.1 79.6,23 "/>
            </svg>
        </div>
        <div class="content-form">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
    </div><!-- /#description -->
    <div class="modal-form single great" id="about_us">
        <div class="header_block">
            <span class="title">About us</span>
            <svg class="close" enable-background="new 0 0 100 100" id="Layer_1" version="1.1" viewBox="0 0 100 100" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <polygon fill="#222" points="77.6,21.1 49.6,49.2 21.5,21.1 19.6,23 47.6,51.1 19.6,79.2 21.5,81.1 49.6,53 77.6,81.1 79.6,79.2   51.5,51.1 79.6,23 "/>
            </svg>
        </div>
        <div class="content-form">
            <img src="images/slide1.jpg" alt="Img">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
    </div><!-- /#about_us -->
    <div class="modal-form single full" id="products">
        <div class="header_block">
            <span class="title">Products</span>
            <svg class="close" enable-background="new 0 0 100 100" version="1.1" viewBox="0 0 100 100" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <polygon fill="#222" points="77.6,21.1 49.6,49.2 21.5,21.1 19.6,23 47.6,51.1 19.6,79.2 21.5,81.1 49.6,53 77.6,81.1 79.6,79.2   51.5,51.1 79.6,23 "/>
        </svg>
        </div>
        <div class="content-form">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 sidebar">
                <aside class="col-lg-12 col-md-12 col-sm-12 col-xs-12 search">
                    <input type="search" placeholder="Search products...">
                </aside>
                <aside class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categories">
                    <ul>
                        <li class="active"><a href="#">Auto & moto<span>12</span></a></li>
                        <li><a href="#">Computers <span>45</span></a></li>
                        <li><a href="#">Phones <span>8</span></a></li>
                        <li><a href="#">Tablets <span>21</span></a></li>
                        <li><a href="#">Electronics <span>82</span></a></li>
                    </ul>
                </aside>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 content products_block">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 container_product">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 product">
                        <img src="images/slide1.jpg" alt="Product">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 short_desc">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen</p>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 price_block">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 price">1000 $ <small>1500$</small></div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 add"><button class="btn add-to-cart">Add to cart</button></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 container_product">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 product">
                        <img src="images/slide1.jpg" alt="Product">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 short_desc">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen</p>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 price_block">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 price">1000 $ <small>1500$</small></div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 add"><button class="btn add-to-cart">Add to cart</button></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 container_product">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 product">
                        <img src="images/slide1.jpg" alt="Product">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 short_desc">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen</p>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 price_block">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 price">1000 $ <small>1500$</small></div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 add"><button class="btn add-to-cart">Add to cart</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /#products -->


</div>

<script>
    if (!window.jQuery) {
        var jq = document.createElement('script'); jq.type = 'text/javascript';
        jq.src = 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js';
        document.getElementsByTagName('head')[0].appendChild(jq);
    }
</script>
<script src="js/bootstrap.min.js"></script>
<!-- SmoothScroll -->
<script src="js/smoothscroll.js"></script>
<!-- Styling Scrollbar -->
<!--<link rel="stylesheet" href="js/jScrollPane/jquery.jscrollpane.css">
<script src="js/jScrollPane/jquery.jscrollpane.min.js"></script>
<script src="js/jScrollPane/jquery.mousewheel.js"></script>
<script src="js/jScrollPane/mwheelIntent.js"></script>-->

<script>
    jQuery(document).ready(function(){
        jQuery('.close').click(function(){
            jQuery(this).closest('.modal-form').animate({opacity:"hide"}, 400);
            jQuery('.btn-open').show();
            jQuery('body').removeClass('bg_shadow');
        });
        jQuery('.btn-open').click(function(){
            jQuery(this).hide()
            jQuery('body').addClass('bg_shadow');
        });
        jQuery('.btn-open.menu').click(function(){
            jQuery(this).closest('.wrapper').find('#main-menu').animate({left:0, opacity:"show"}, 700);
        });
        jQuery('.btn-open.reviews').click(function(){
            jQuery(this).closest('.wrapper').find('#reviews').animate({right:0, opacity:"show"}, 700);
        });
        jQuery('.desc').click(function(){
            jQuery(this).closest('.wrapper').find('#description').animate({right:0, opacity:"show"}, 700);
            jQuery(this).closest('.modal-form').animate({opacity:"hide"}, 400);
        });
        jQuery('.about').click(function(){
            jQuery(this).closest('.wrapper').find('#about_us').animate({right:0, opacity:"show"}, 700);
            jQuery(this).closest('.modal-form').animate({opacity:"hide"}, 400);
        });
        jQuery('.products').click(function(){
            jQuery(this).closest('.wrapper').find('#products').animate({right:0, opacity:"show"}, 700);
            jQuery(this).closest('.modal-form').animate({opacity:"hide"}, 400);
        });

        /*jQuery('.content-form').jScrollPane();*/
    });
</script>
</body>
</html>