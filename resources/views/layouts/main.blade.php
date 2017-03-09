<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>
        @yield('title','Janani the boutique')
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{asset('dist/css/foundation.css')}}"/>
    <link rel="stylesheet" href="{{asset('dist/css/app.css')}}"/>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">


</head>
<body>
<div class="top-bar">
    <div style="color:white" class="top-bar-left">
        <h4 class="brand-title">
            <a href="{{route('home')}}"> 
                <i class="fa fa-home fa-lg" aria-hidden="true">
                </i>
                Janani the boutique
            </a>
        </h4>
    </div>
    <div class="top-bar-right">
        <ol class="menu">
            <li>
                <a href="{{route('apparels')}}">
                    APPARELS
                </a>
            </li>
            <li>
                <a href="{{route('contact')}}"">
                    CONTACT
                </a>
            </li>
            <li>
                <a href="{{route('create')}}"">
                    <i class="fa fa-magic fa-2x" aria-hidden="true"></i>
                    <b>CREATE</b>
                </a>
            </li>

            <li>
                <a href="{{route('cart.index')}}">
                    <i class="fa fa-shopping-cart fa-2x" aria-hidden="true">
                    </i>
                    CART
                    <span class="alert badge">
                               {{Cart::count()}}
                            </span>
                </a>
            </li>
        </ol>
    </div>
</div>

@yield('content')
<footer class="footer">
    <div class="row full-width">
        <div class="small-12 medium-4 large-4 columns">
            <i class="fi-laptop"></i>
            <p><b>Useful links</b></br>

             <a href="#">HOME</a> </BR>
             <a href="#">ABOUT US</a></BR>
             <a href="#">CONTACT ME</a></BR>
             <a href="#">BLOG</a>
            </p>
        </div>
        <div class="small-12 medium-4 large-4 columns">
            <i class="fi-html5"></i>
            <p>
                 <b> Support</b></br>
               <a href="#">PRODUCT SUPPORT</a> </BR>
             <a href="#">REPORT ABUSE</a></BR>
             <a href="#">COMMUNITY</a></BR>
             

            </p>
        </div>

        <div class="small-6 medium-4 large-4 columns">
            <h4>Follow Us</h4>
            <ul class="footer-links">
                <li><a href="#">GitHub</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Pinterest</a></li>
                 <li><a href="#">QUORA</a></li>  
            </ul>
        </div>
    </div>
</footer>

<script src="{{asset('dist/js/vendor/jquery.js')}}"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
    Stripe.setPublishableKey('pk_test_GryUHqXe48kgNc75J2BovmeN');
</script>
<script src="{{asset('dist/js/app.js')}}"></script>
</body>
</html>
