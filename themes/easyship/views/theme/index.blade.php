<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=0.4">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <title>Eagle Express</title>
    <meta name="description" content="Eagle Express is the first online courier marketplace in BD. Eagle Express provides a doorstep home delivery service at the lowest delivery charge with online tracking in BD" />
    <meta name="msnbot" content="index, follow" />
    <meta name="robots" content="INDEX, FOLLOW" />
    <link rel="shortcut icon" href="myimages/fav.ico" />
    <link rel="canonical" href="index.html" />


    <base >



    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" href="G:\Office AD\desktopsiteofad\deliveryTiger/dtstylesheet.css" />-->
    <script>

        let isMobile = window.matchMedia("only screen and (max-width: 768px)").matches;



        if (isMobile) {
            location.replace('m/index.html');
        }

    </script>

    <link rel="icon" type="image/x-icon" href="static.ajkerdeal.com/images/dt/newlogin/taka.png">


    <link rel="stylesheet" href="assets/dtstylesheet.css" />
    <!-- <link rel="stylesheet" href="https://deliverytiger.com.bd/assets/dtstylesheet.css" /> -->




    <link rel="preload" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </noscript>


    <!-- Font Awesome -->




</head>

<body>
    <!--header-->

    <nav class="row navbar navbar-default navigation" style="border-bottom-color: #e7e7e7;border-top-color: #ffffff;">
        <div class="container" style="padding: 13px 1px;">
            <!-- Brand and toggle get grouped for better mobile display -->
            <!-- /.navbar-collapse -->
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                <div class="logo-wrap" style="padding-bottom: 13px;text-align: left;">
                    <a href="{{ app()->getLocale() === 'bn' ? LaravelLocalization::getLocalizedURL('en') : LaravelLocalization::getLocalizedURL('bn') }}">
                        <img src="myimages/logo.png" style="width: 200px;" />
                    </a>
                </div>
            </div>



            <div id="loginBlock" class="col-lg-6 col-md-6 col-sm-6 visible-sm visible-xs visible-md visible-lg" style="margin-left: 13%;">
                <div id="loginForm" style="float: right;">



                    <div class="form-group-user col-lg-6 col-md-6 col-sm-6" role="group" style="width: auto;margin-bottom: 10px;margin-top: 4px;">
                        <a href="/admin/login" type="button" class="btn btn-success" style="background: #207238;width: 335px;">
                            {{ __('theme_easyship::homepage.login') }}
                        </a>


                    </div>
                    <div class="form-group-user col-lg-3 col-md-6 col-sm-6 " role="group" style="margin-bottom: 10px;margin-top: 4px;">
                        <a href="/admin/register" type="button" class="btn btn-secondary" style="background: #727272;color: #fff;width: 333px;">
                            {{ __('theme_easyship::homepage.register') }}
                        </a>
                    </div>



                </div>

            </div>
        </div>
    </nav>
    <!--header-->
    <!--body-->
    <!-- pops-up-start -->
    <!-- pops-up-end -->


    <div class="first-block container-fluid">



        <div class="row banner-block">
            <div class="login-container background" style="padding-bottom: 17px;">
                <div class="row center-block" style="max-width: 1200px;overflow: hidden;">
                    <!--<div class="row">-->
                    <div class="col-lg-2 visible-lg">
                        <img class="taka" src="static.ajkerdeal.com/images/dt/newlogin/24.png" style="width:200px; margin-left:150%;margin-top:15%;" />
                    </div>
                    <div class="col-lg-2 visible-lg">
                        <img class="taka" src="static.ajkerdeal.com/images/dt/newlogin/3.png" style="width: 200px; margin-left: 180%;margin-top:15%;" />
                    </div>

                    <!--</div>-->
                    <div class="col-lg-2 visible-lg bike">
                        <img src="myimages/dt/newlogin/bike.png" style="max-width: 200px;height: 80px;margin-top: 80%" />
                    </div>
                    <div class="col-lg-2 visible-lg bike">
                        <img src="myimages/dt/newlogin/van.png" style="max-width: 200px;height: 120px;margin-top: 70%; margin-left:-65%;" />
                    </div>
                    <div class="col-lg-4 track-parcel" style="margin: auto;">
                        <div class="order-track" style="background: #05854c;max-width: 390px;min-height:100px ;margin: auto;border-radius: 4px;">
                            <div class="card-container">
                                <h2 style="text-align: center;font-size:20px;color:#fff; font-family:'SolaimanLipi';font-weight:500;position: relative;top: 15px;">
                                    {{ __('theme_easyship::homepage.track_parcel') }}
                                </h2>
                            </div>
                            <div class="justify-content-center align-items-center" style="width:80%;margin:auto;margin-top: 25px;">
                                <div class="input-group mb-2">
                                    <input type="text" class="form-control" id="dtOrderId" placeholder="{{ __('theme_easyship::homepage.parcel_id') }}" />
                                    <div class="input-group-btn">
                                        <a href="shipments/tracking/view" class="btn btn-danger" id="track-btn" type="button" style="width:100px;">{{ __('theme_easyship::homepage.track') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="height: 80px;margin-top: 35px;margin-left: 25%;">
                            <a href="https://play.google.com" style="width: 244px;height: 41px;background: #F58228;margin: auto; color: #fff;padding: 12px 15px;border-radius: 5px;text-decoration: none;">
                                <img src="static.ajkerdeal.com/images/dt/newlogin/downloadicon.svg" style="max-width: 20px;height: 21px;" />&nbsp;&nbsp;{{ __('theme_easyship::homepage.download_app') }}&nbsp;&nbsp;<img src="static.ajkerdeal.com/images/dt/newlogin/appicon.svg"
                                                                                                                                                                                              style="max-width: 20px;height: 21px;" />
                            </a>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-1">

                </div> -->
            </div>
        </div>
        <div class="container">
            <div class="row" style="margin-top: 20px;margin-right: 0px;margin-left: 0px;">
                <div style="max-width: 1200px;margin: auto;text-align: center;">
                    <!-- <a class="col-lg-2" style="text-align: center;padding: 0px;">
                    </a> -->
                    <a href="sameday/index.html" class="col-lg-4" style="text-align: center;padding: 0px;">
                        <img src="static.ajkerdeal.com/images/dt/newlogin/postal.png" style="margin-bottom: 10px;">

                    </a>
                    <a href="nextday/index.html" class="col-lg-4" style="text-align: center;padding: 0px;">
                        <img src="static.ajkerdeal.com/images/dt/newlogin/next.png" style="height: 199px;margin-top: 2px;">

                    </a>
                    <a href="expressday/index.html" class="col-lg-4" style="text-align: center;padding: 0px;">
                        <img src="static.ajkerdeal.com/images/dt/newlogin/express.png" style="margin-bottom: 10px;">

                    </a>
                    <!-- <a class="col-lg-2" style="text-align: center;padding: 0px;">
                    </a> -->
                </div>
            </div>
        </div>
        <!-- ...................price list start............................. -->


        
        </div>
        <div id="second-block">
            <div class="container">



                <div class="container">
                    <div class="row visible-lg hidden-sm hidden-xs hidden-md " style="display: flex;margin-top: 20px;">
                        <div class="center-block col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12" style=" text-align:center;">
                            <img style="text-align: center;" src="myimages/dt/newlogin/number-pc.jpg">
                        </div>
                    </div>

                </div>


                <h3 class="visible-md visible-lg" style="text-align: center;color: #04834A;margin-top: 20px;">
                    {{ __('theme_easyship::homepage.merchants_using') }}
                    <span style="font-size: 30px;color: #E0061D;">{{ __('theme_easyship::homepage.merchants_count') }}</span> {{ __('theme_easyship::homepage.merchants_count_end') }}
                </h3>
                <h3 class="visible-sm visible-xs" style="text-align: center;color: #04834A;margin-top: 20px;">
                    {{ __('theme_easyship::homepage.merchants_using') }} <br>
                    <span style="font-size: 30px;color: #E0061D;">{{ __('theme_easyship::homepage.merchants_count') }}</span> {{ __('theme_easyship::homepage.merchants_count_end') }}
                </h3>

                <div class="row" style="margin-top: 30px;">
                    <div style="text-align: center;max-width: 1200px;margin: auto;font-size: 18px;">
                        <div class="col-lg-4">
                            <img class="bd-map" src="static.ajkerdeal.com/images/dt/newlogin/bd_map.svg" style="width: 80px; margin-top: 30px;" />
                            <p>
                                {{ __('theme_easyship::homepage.delivery_coverage') }}
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <img src="static.ajkerdeal.com/images/dt/newlogin/productcollect.svg" style="width: 80px;margin-top: 30px;" />
                            <p>
                                {{ __('theme_easyship::homepage.product_collection') }}
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <img src="static.ajkerdeal.com/images/dt/newlogin/onlinetraker.svg" style="width: 75px;margin-top: 30px;" />
                            <p>
                                {{ __('theme_easyship::homepage.online_tracking') }}
                            </p>
                        </div>
                    </div>
                    <!-- </div>
                    <div class="col-lg-2">

                    </div> -->
                </div>

                <div class="row" style="margin-top: 13px;">
                    <!-- <div class="col-lg-2">

                    </div>
                    <div class="col-lg-8"> -->


                    <div class="" style="text-align: center;max-width: 1200px;margin: auto;font-size: 18px">
                        <div class="col-lg-4">
                            <img src="static.ajkerdeal.com/images/dt/newlogin/return_charge.svg" style="width: 75px;margin-top: 20px;" />
                            <p>
                                {{ __('theme_easyship::homepage.no_return_charge') }}
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <img src="static.ajkerdeal.com/images/dt/newlogin/sales_rep_icon.svg" style="width: 75px;margin-top: 20px;" />
                            <p>
                                {{ __('theme_easyship::homepage.dedicated_sales_rep') }}
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <a href="how-to-active-instant-payment/index.html">
                                <img src="static.ajkerdeal.com/images/dt/newlogin/payment_new.svg" style="width: 80px;margin-top: 20px;" />
                            </a>
                            <a href="how-to-active-instant-payment/index.html">
                                <p>
                                    {{ __('theme_easyship::homepage.real_time_transfer') }}
                                </p>
                            </a>
                        </div>




                    </div>
                    <!-- </div>
                    <div class="col-lg-2">

                    </div> -->
                </div>



                <section class="vanilla-block text-center" style="margin-top: 20px;">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="block-heading">
                                    <h4 class="text-info c-heading" style="margin: 25px;">{{ __('theme_easyship::homepage.hub_addresses_title') }}</h4>
                                    <!-- Start: Product Grid -->
                                    <div class="col-md-12 col-xl-12" style="padding-right:0px">
                                        <div class="row" id="hubBlock">


                                            <!-- End: Product Card -->
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="padding-right:0px">
                                                <a class="row thumbnail collapsed" data-toggle="collapse" id="kawran_bajar" onclick="collaps(kb_expan)" role="button" aria-expanded="false" aria-controls="collapseExample" style="background-color: #05854c;">
                                                    <div class="col-xs-9 text-center" style="padding: 0;">
                                                        কাওরান বাজার হাব
                                                    </div>
                                                    <div class="col-xs-3" style="padding: 0;">
                                                        <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                    </div>
                                                </a>
                                                <!-- .......modal..... -->
                                                <div id="kb_expan" class="collapse">
                                                    <!-- <div class="modal-dialog"> -->
                                                    <!-- <div class="card-body"> -->
                                                    <div class="modal-body">
                                                        <div class="col-xs-9 text-center" style="padding: 0;margin: 0%;">
                                                            বিএসইসি ভবন,লেভেল ৯,১০২ কাজি নজরুল ইসলাম এভিনিউ, কাওরান বাজার <br>
                                                            <a href="tel: +8809648156713">+8809648156713</a>
                                                        </div>
                                                        <a href="https://maps.google.com?q=@23.751601826500373,%2090.3931737974252/" class="col-xs-3" style="padding: 0; color: #04834A;font-size: 14px;">
                                                            <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                        </a>
                                                    </div>
                                                    <!-- </div> -->
                                                    <!-- </div> -->
                                                </div>
                                                <!-- .......modal..... -->
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="padding-right:0px">
                                                <a class="row thumbnail collapsed" data-toggle="collapse" onclick="collaps(mirpur_expand)" role="button" aria-expanded="false" aria-controls="collapseExample" style="background-color: #05854c;">
                                                    <div class="col-xs-9 text-center" style="padding: 0;">
                                                        মিরপুর-১০ হাব
                                                    </div>
                                                    <div class="col-xs-3" style="padding: 0;">
                                                        <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                    </div>
                                                </a>
                                                <!-- .......modal..... -->
                                                <div id="mirpur_expand" class="collapse">
                                                    <!-- <div class="modal-dialog"> -->
                                                    <!-- <div class="card-body"> -->
                                                    <div class="modal-body">
                                                        <div class="col-xs-9 text-center" style="padding: 0;margin: 0%;">
                                                            হাউস-২৬,লেন-৫,ব্লক- এ,সেকশন-৬, মিরপুর-১০, ঢাকা-১২১৬ <br>
                                                            <a href="tel:01711304041">+8809648156713</a>
                                                        </div>
                                                        <a href="https://maps.google.com?q=@23.806737,90.3690042/" class="col-xs-3" style="padding: 0; color: #04834A;font-size: 14px;">
                                                            <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                        </a>
                                                    </div>
                                                    <!-- </div> -->
                                                    <!-- </div> -->
                                                </div>
                                                <!-- .......modal..... -->
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="padding-right:0px">
                                                <a class="row thumbnail collapsed" data-toggle="collapse" onclick="collaps(lalmatia_expand)" role="button" aria-expanded="false" aria-controls="collapseExample" style="background-color: #05854c;">
                                                    <div class="col-xs-9 text-center" style="padding: 0;">
                                                        লালমাটিয়া-হাব
                                                    </div>
                                                    <div class="col-xs-3" style="padding: 0;">
                                                        <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                    </div>
                                                </a>
                                                <!-- .......modal..... -->
                                                <div id="lalmatia_expand" class="collapse">
                                                    <!-- <div class="modal-dialog"> -->
                                                    <!-- <div class="card-body"> -->
                                                    <div class="modal-body">
                                                        <div class="col-xs-9 text-center" style="padding: 0;margin: 0%;">
                                                            হাউজঃ মুন্সি বাড়ি, নয়ার হাট  হাই স্কুল সংলগ্ন,বড় বাড়ি ,লালমনির হাট-5500 , বাংলাদেশ<br>
                                                            <a href="tel:01575012737">+8809648156713</a>

                                                        </div>
                                                        <a href="https://goo.gl/maps/RXsBR2Q8YfboiKsD6" class="col-xs-3" style="padding: 0; color: #04834A;font-size: 14px;">
                                                            <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                        </a>
                                                    </div>
                                                    <!-- </div> -->
                                                    <!-- </div> -->
                                                </div>
                                                <!-- .......modal..... -->
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="padding-right:0px">
                                                <a class="row thumbnail collapsed" data-toggle="collapse" onclick="collaps(khilgaon_expand)" role="button" aria-expanded="false" aria-controls="collapseExample" style="background-color: #05854c;">
                                                    <div class="col-xs-9 text-center" style="padding: 0;">
                                                        খিলগাও-হাব
                                                    </div>
                                                    <div class="col-xs-3" style="padding: 0;">
                                                        <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                    </div>
                                                </a>
                                                <!-- .......modal..... -->
                                                <div id="khilgaon_expand" class="collapse">
                                                    <!-- <div class="modal-dialog"> -->
                                                    <!-- <div class="card-body"> -->
                                                    <div class="modal-body">
                                                        <div class="col-xs-9 text-center" style="padding: 0;margin: 0%;">
                                                            ৪৮৭/সি,সাথী ইলমা আবাসিক এলাকা, রোড ৩, খিলগাও, ঢাকা-১২১৯  <br>
                                                            <a href="tel:01862391615">+8809648156713</a>

                                                        </div>
                                                        <a href="https://maps.google.com?q=@23.757520205463198,%2090.42108654193702/" class="col-xs-3" style="padding: 0; color: #04834A;font-size: 14px;">
                                                            <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                        </a>
                                                    </div>
                                                    <!-- </div> -->
                                                    <!-- </div> -->
                                                </div>
                                                <!-- .......modal..... -->
                                            </div>


                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="padding-right:0px">
                                                <a class="row thumbnail collapsed" data-toggle="collapse" onclick="collaps(bangla_bazar_expand)" role="button" aria-expanded="false" aria-controls="collapseExample" style="background-color: #05854c;">
                                                    <div class="col-xs-9 text-center" style="padding: 0;">
                                                        বাংলা বাজার-হাব
                                                    </div>
                                                    <div class="col-xs-3" style="padding: 0;">
                                                        <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                    </div>
                                                </a>
                                                <!-- .......modal..... -->
                                                <div id="bangla_bazar_expand" class="collapse">
                                                    <!-- <div class="modal-dialog"> -->
                                                    <!-- <div class="card-body"> -->
                                                    <div class="modal-body">
                                                        <div class="col-xs-9 text-center" style="padding: 0;margin: 0%;">
                                                            হোল্ডিং নংঃ ২৮,রোড - শিরিষ দাস লেন, ঢাকা-১১০০  <br>
                                                            <a href="tel:01726869472">+8809648156713</a>

                                                        </div>
                                                        <a href="https://maps.google.com/?q=23.72203762084318,%2090.38119578230513" class="col-xs-3" style="padding: 0; color: #04834A;font-size: 14px;">
                                                            <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                        </a>
                                                    </div>
                                                    <!-- </div> -->
                                                    <!-- </div> -->
                                                </div>
                                                <!-- .......modal..... -->
                                            </div>


                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="padding-right:0px">
                                                <a class="row thumbnail collapsed" data-toggle="collapse" onclick="collaps(khilkhet_expand)" role="button" aria-expanded="false" aria-controls="collapseExample" style="background-color: #05854c;">
                                                    <div class="col-xs-9 text-center" style="padding: 0;">
                                                        দক্ষিনখান-হাব
                                                    </div>
                                                    <div class="col-xs-3" style="padding: 0;">
                                                        <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                    </div>
                                                </a>
                                                <!-- .......modal..... -->
                                                <div id="khilkhet_expand" class="collapse">
                                                    <!-- <div class="modal-dialog"> -->
                                                    <!-- <div class="card-body"> -->
                                                    <div class="modal-body">
                                                        <div class="col-xs-9 text-center" style="padding: 0;margin: 0%;">
                                                            হাউজ ১৭৬৮,উত্তর মোল্লাপাড়া,রাজ্জাক টাওয়ার এর পাশে, দক্ষিনখান ,ঢাকা  <br>
                                                            <a href="tel:01748806258">+8809648156713</a>

                                                        </div>
                                                        <a href="https://maps.google.com?q=@23.867359668645573,%2090.42386106684515/" class="col-xs-3" style="padding: 0; color: #04834A;font-size: 14px;">
                                                            <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                        </a>
                                                    </div>
                                                    <!-- </div> -->
                                                    <!-- </div> -->
                                                </div>
                                                <!-- .......modal..... -->
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="padding-right:0px">
                                                <a class="row thumbnail collapsed" data-toggle="collapse" onclick="collaps(uttara_expand)" role="button" aria-expanded="false" aria-controls="collapseExample" style="background-color: #05854c;">
                                                    <div class="col-xs-9 text-center" style="padding: 0;">
                                                        উত্তরা হাব
                                                    </div>
                                                    <div class="col-xs-3" style="padding: 0;">
                                                        <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                    </div>
                                                </a>
                                                <!-- .......modal..... -->
                                                <div id="uttara_expand" class="collapse">
                                                    <!-- <div class="modal-dialog"> -->
                                                    <!-- <div class="card-body"> -->
                                                    <div class="modal-body">
                                                        <div class="col-xs-9 text-center" style="padding: 0;margin: 0%;">
                                                            ৭১ সারোয়ার এভিনিউ, রোড-২১/এ, সেকশন-১৪, উত্তরা, ঢাকা <br>
                                                            <a href="tel:01829789121">+8809648156713</a>
                                                        </div>
                                                        <a href="https://maps.google.com?q=@23.800288413166918,%2090.37842948392988/" class="col-xs-3" style="padding: 0; color: #04834A;font-size: 14px;">
                                                            <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                        </a>
                                                    </div>
                                                    <!-- </div> -->
                                                    <!-- </div> -->
                                                </div>
                                                <!-- .......modal..... -->
                                            </div>
                                            <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="padding-right:0px">
                                                <a class="row thumbnail collapsed" data-toggle="collapse" onclick="collaps(rampura_expand)" role="button" aria-expanded="false" aria-controls="collapseExample" style="background-color: #05854c;">
                                                    <div class="col-xs-9 text-center" style="padding: 0;">
                                                        রামপুরা হাব
                                                    </div>
                                                    <div class="col-xs-3" style="padding: 0;">
                                                        <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                    </div>
                                                </a>
                                             
                                                <div id="rampura_expand" class="collapse">
                                                    
                                                    <div class="modal-body">
                                                        <div class="col-xs-9 text-center" style="padding: 0;margin: 0%;">
                                                            মোল্লা টাওয়ার শপিং কমপ্লেক্স, ১৩৬, পশ্চিম রামপুরা, ঢাকা, বাংলাদেশ <br>
                                                            <a href="tel:01814150288">০১৮১৪১৫০২৮৮</a>
                                                        </div>
                                                        <a href="https://maps.google.com?q=@23.7662383,90.4214863" class="col-xs-3" style="padding: 0; color: #04834A;font-size: 14px;">
                                                            <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                        </a>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div> -->
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="padding-right:0px">
                                                <a class="row thumbnail collapsed" data-toggle="collapse" onclick="collaps(chawkbazar_expand)" role="button" aria-expanded="false" aria-controls="collapseExample" style="background-color: #05854c;">
                                                    <div class="col-xs-9 text-center" style="padding: 0;">
                                                        ইসলামপুর হাব
                                                    </div>
                                                    <div class="col-xs-3" style="padding: 0;">
                                                        <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                    </div>
                                                </a>
                                                <!-- .......modal..... -->
                                                <div id="chawkbazar_expand" class="collapse">
                                                    <!-- <div class="modal-dialog"> -->
                                                    <!-- <div class="card-body"> -->
                                                    <div class="modal-body">
                                                        <div class="col-xs-9 text-center" style="padding: 0;margin: 0%;">
                                                            ইসলামপুর-আদিল সিকিউরিটিস লি. শাহজাদা মিয়া লেন (জনতা ব্যাঙ্কের কাছে) <br>
                                                            <a href="tel:+8809648156713">+8809648156713</a>
                                                        </div>
                                                        <a href="https://maps.google.com?q=@23.7102796,90.4037035/" class="col-xs-3" style="padding: 0; color: #04834A;font-size: 14px;">
                                                            <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                        </a>
                                                    </div>
                                                    <!-- </div> -->
                                                    <!-- </div> -->
                                                </div>
                                                <!-- .......modal..... -->
                                            </div>


                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="padding-right:0px">
                                                <a class="row thumbnail collapsed" data-toggle="collapse" onclick="collaps(zatrabari_expand)" role="button" aria-expanded="false" aria-controls="collapseExample" style="background-color: #05854c;">
                                                    <div class="col-xs-9 text-center" style="padding: 0;">
                                                        যাত্রাবাড়ী হাব
                                                    </div>
                                                    <div class="col-xs-3" style="padding: 0;">
                                                        <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                    </div>
                                                </a>
                                                <!-- .......modal..... -->
                                                <div id="zatrabari_expand" class="collapse">
                                                    <!-- <div class="modal-dialog"> -->
                                                    <!-- <div class="card-body"> -->
                                                    <div class="modal-body">
                                                        <div class="col-xs-9 text-center" style="padding: 0;margin: 0%;">
                                                            ২৫০/৩ আব্বাস উদ্দিন রোড, যাত্রাবাড়ি, ঢাকা ১২০৪ <br>
                                                            <a href="tel:01961833944">+8809648156713</a>
                                                        </div>
                                                        <a href="https://www.google.com/maps/place/Abbas+Uddin+Rd,+Dhaka/@23.7044801,90.432168,17z/data=!3m1!4b1!4m5!3m4!1s0x3755b9c8a2e5e6fd:0xb8c4a8c9b701650c!8m2!3d23.7044752!4d90.4343567" class="col-xs-3" style="padding: 0; color: #04834A;font-size: 14px;">
                                                            <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                        </a>
                                                    </div>
                                                    <!-- </div> -->
                                                    <!-- </div> -->
                                                </div>
                                                <!-- .......modal..... -->
                                            </div>


                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="padding-right:0px">
                                                <a class="row thumbnail collapsed" data-toggle="collapse" onclick="collaps(newMrkt_expand)" role="button" aria-expanded="false" aria-controls="collapseExample" style="background-color: #05854c;">
                                                    <div class="col-xs-9 text-center" style="padding: 0;">
                                                        নিউ মার্কেট হাব
                                                    </div>
                                                    <div class="col-xs-3" style="padding: 0;">
                                                        <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                    </div>
                                                </a>
                                                <!-- .......modal..... -->
                                                <div id="newMrkt_expand" class="collapse">
                                                    <!-- <div class="modal-dialog"> -->
                                                    <!-- <div class="card-body"> -->
                                                    <div class="modal-body">
                                                        <div class="col-xs-9 text-center" style="padding: 0;margin: 0%;">
                                                            নিউ সিটি কমপ্লেক্স.লেভেল-৩, নিউ মার্কেট, ঢাকা-১২০৫ <br>
                                                            <a href="tel:01836800444">+8809648156713</a>
                                                        </div>
                                                        <a href="https://maps.google.com?q=@23.7336862,90.3795507/" class="col-xs-3" style="padding: 0; color: #04834A;font-size: 14px;">
                                                            <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                        </a>
                                                    </div>
                                                    <!-- </div> -->
                                                    <!-- </div> -->
                                                </div>
                                                <!-- .......modal..... -->
                                            </div>





                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="padding-right:0px">
                                                <a class="row thumbnail collapsed" data-toggle="collapse" onclick="collaps(kakrail_expand)" role="button" aria-expanded="false" aria-controls="collapseExample" style="background-color: #05854c;">
                                                    <div class="col-xs-9 text-center" style="padding: 0;">
                                                        কাকরাইল হাব
                                                    </div>
                                                    <div class="col-xs-3" style="padding: 0;">
                                                        <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                    </div>
                                                </a>
                                                <!-- .......modal..... -->
                                                <div id="kakrail_expand" class="collapse">
                                                    <!-- <div class="modal-dialog"> -->
                                                    <!-- <div class="card-body"> -->
                                                    <div class="modal-body">
                                                        <div class="col-xs-9 text-center" style="padding: 0;margin: 0%;">
                                                            ৩৬/২ কাকরাইল, ঢাকা ১০০০<br>
                                                            <a href="tel:+8809648156713">+8809648156713</a>
                                                        </div>
                                                        <a href="https://maps.google.com?q=@23.7404869551853,%2090.41111201221024/" class="col-xs-3" style="padding: 0; color: #04834A;font-size: 14px;">
                                                            <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                        </a>
                                                    </div>
                                                    <!-- </div> -->
                                                    <!-- </div> -->
                                                </div>
                                                <!-- .......modal..... -->
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="padding-right:0px">
                                                <a class="row thumbnail collapsed" data-toggle="collapse" onclick="collaps(mirpur1_expand)" role="button" aria-expanded="false" aria-controls="collapseExample" style="background-color: #05854c;">
                                                    <div class="col-xs-9 text-center" style="padding: 0;">
                                                        মিরপুর-১ হাব
                                                    </div>
                                                    <div class="col-xs-3" style="padding: 0;">
                                                        <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                    </div>
                                                </a>
                                                <!-- .......modal..... -->
                                                <div id="mirpur1_expand" class="collapse">
                                                    <!-- <div class="modal-dialog"> -->
                                                    <!-- <div class="card-body"> -->
                                                    <div class="modal-body">
                                                        <div class="col-xs-9 text-center" style="padding: 0;margin: 0%;">
                                                            মুক্ত বাংলা শপিং কমপ্লেক্স, মিরপুর-১, লেভেল-৫, দোকান নাম্বার-৫৩ এবং ৫৪ <br>
                                                            <a href="tel:01648236165">+8809648156713</a>
                                                        </div>
                                                        <a href="https://maps.google.com?q=@23.7991084,90.3528902/" class="col-xs-3" style="padding: 0; color: #04834A;font-size: 14px;">
                                                            <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                        </a>
                                                    </div>
                                                    <!-- </div> -->
                                                    <!-- </div> -->
                                                </div>
                                                <!-- .......modal..... -->
                                            </div>


                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="padding-right:0px">
                                                <a class="row thumbnail collapsed" data-toggle="collapse" onclick="collaps(gulshan_expand)" role="button" aria-expanded="false" aria-controls="collapseExample" style="background-color: #05854c;">
                                                    <div class="col-xs-9 text-center" style="padding: 0;">
                                                        বাড্ডা/গুলশান হাব
                                                    </div>
                                                    <div class="col-xs-3" style="padding: 0;">
                                                        <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                    </div>
                                                </a>
                                                <!-- .......modal..... -->
                                                <div id="gulshan_expand" class="collapse">
                                                    <!-- <div class="modal-dialog"> -->
                                                    <!-- <div class="card-body"> -->
                                                    <div class="modal-body">
                                                        <div class="col-xs-9 text-center" style="padding: 0;margin: 0%;">
                                                            চ-৪৪০, গুপিপাড়া,  উত্তর বাড্ডা, ঢাকা-১২১২<br>
                                                            <a href="01818309920.html">+8809648156713</a>
                                                        </div>
                                                        <a href="https://maps.google.com?q=@23.79219227927205,%2090.4249100746908/" class="col-xs-3" style="padding: 0; color: #04834A;font-size: 14px;">
                                                            <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                        </a>
                                                    </div>
                                                    <!-- </div> -->
                                                    <!-- </div> -->
                                                </div>
                                                <!-- .......modal..... -->
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="padding-right:0px">
                                                <a class="row thumbnail collapsed" data-toggle="collapse" onclick="collaps(mohakhali_expand)" role="button" aria-expanded="false" aria-controls="collapseExample" style="background-color: #05854c;">
                                                    <div class="col-xs-9 text-center" style="padding: 0;">
                                                        মহাখালী হাব
                                                    </div>
                                                    <div class="col-xs-3" style="padding: 0;">
                                                        <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                    </div>
                                                </a>
                                                <!-- .......modal..... -->
                                                <div id="mohakhali_expand" class="collapse">
                                                    <!-- <div class="modal-dialog"> -->
                                                    <!-- <div class="card-body"> -->
                                                    <div class="modal-body">
                                                        <div class="col-xs-9 text-center" style="padding: 0;margin: 0%;">
                                                            হোল্ডিং# Je/P/J-25, গাউসুল আজম রোড, মহাখালী <br>
                                                            <a href="01979328193.html">+8809648156713</a>
                                                        </div>
                                                        <a href="https://www.google.com/maps/search/গাউসুল+আজম+রোড,+মহাখালী+/@23.7821827,90.4085126,14.95z" class="col-xs-3" style="padding: 0; color: #04834A;font-size: 14px;">
                                                            <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                        </a>
                                                    </div>
                                                    <!-- </div> -->
                                                    <!-- </div> -->
                                                </div>
                                                <!-- .......modal..... -->
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="padding-right:0px">
                                                <a class="row thumbnail collapsed" data-toggle="collapse" onclick="collaps(keranigonj_expand)" role="button" aria-expanded="false" aria-controls="collapseExample" style="background-color: #05854c;">
                                                    <div class="col-xs-9 text-center" style="padding: 0;">
                                                        কেরানীগঞ্জ হাব
                                                    </div>
                                                    <div class="col-xs-3" style="padding: 0;">
                                                        <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                    </div>
                                                </a>
                                                <!-- .......modal..... -->
                                                <div id="keranigonj_expand" class="collapse">
                                                    <!-- <div class="modal-dialog"> -->
                                                    <!-- <div class="card-body"> -->
                                                    <div class="modal-body">
                                                        <div class="col-xs-9 text-center" style="padding: 0;margin: 0%;">
                                                            খন্দকার সাহেবের বাসা, অধ্যাপক হামিদুর রহমান কমিউনিটি সেন্টার,<BR> চাটগাঁও, জিঞ্জিরা, কেরানীগঞ্জ, ঢাকা 
                                                            <a href="01832550044.html">+8809648156713</a>
                                                        </div>
                                                        <a href="#" class="col-xs-3" style="padding: 0; color: #04834A;font-size: 14px;">
                                                            <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                        </a>
                                                    </div>
                                                    <!-- </div> -->
                                                    <!-- </div> -->
                                                </div>
                                                <!-- .......modal..... -->
                                            </div>




                                        </div>
                                    </div>
                                    <!-- End: Product Grid -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="vanilla-block text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="block-heading">
                                    <h4 class="text-info c-heading" style="margin: 25px;">ঢাকার বাইরে আমাদের সকল হাবের ঠিকানা</h4>
                                    <!-- Start: Product Grid -->
                                    <div class="col-md-12 col-xl-12" style="padding-right:0px">
                                        <div class="row" id="hubBlock">


                                            <!-- End: Product Card -->






                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="padding-right:0px">
                                                <a class="row thumbnail collapsed" data-toggle="collapse" onclick="collaps(ctg_expand)" role="button" aria-expanded="false" aria-controls="collapseExample" style="background-color: #05854c;">
                                                    <div class="col-xs-9 text-center" style="padding: 0;">
                                                        চট্টগ্রাম হাব
                                                    </div>
                                                    <div class="col-xs-3" style="padding: 0;">
                                                        <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                    </div>
                                                </a>
                                                <!-- .......modal..... -->
                                                <div id="ctg_expand" class="collapse">
                                                    <!-- <div class="modal-dialog"> -->
                                                    <!-- <div class="card-body"> -->
                                                    <div class="modal-body">
                                                        <div class="col-xs-9 text-center" style="padding: 0;margin: 0%;">
                                                            এ কে আর্কেড, লেভেল-২, ৭৭১ শেখ মুজিব রোড, চৌমহনি (বিডিজবস এর অফিস) <br>
                                                            <a href="tel:01813932456">+8809648156713</a>
                                                        </div>
                                                        <a href="https://maps.google.com?q=@22.3327427,91.8127681/" class="col-xs-3" style="padding: 0; color: #04834A;font-size: 14px;">
                                                            <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                        </a>
                                                    </div>
                                                    <!-- </div> -->
                                                    <!-- </div> -->
                                                </div>
                                                <!-- .......modal..... -->
                                            </div>



                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="padding-right:0px">
                                                <a class="row thumbnail collapsed" data-toggle="collapse" onclick="collaps(gazipur_expand)" role="button" aria-expanded="false" aria-controls="collapseExample" style="background-color: #05854c;">
                                                    <div class="col-xs-9 text-center" style="padding: 0;">
                                                        গাজীপুর হাব
                                                    </div>
                                                    <div class="col-xs-3" style="padding: 0;">
                                                        <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                    </div>
                                                </a>
                                                <!-- .......modal..... -->
                                                <div id="gazipur_expand" class="collapse">
                                                    <!-- <div class="modal-dialog"> -->
                                                    <!-- <div class="card-body"> -->
                                                    <div class="modal-body">
                                                        <div class="col-xs-9 text-center" style="padding: 0;margin: 0%;">
                                                            হাউজ-১৮৭,বনরুপা রোড গলি,গাজীপুর চৌরাস্তা,জয়দেবপুর রোড,সিয়াম সিএনজি পাম্প এর বিপরীতে <br>
                                                            <a href="tel:01685748679">+8809648156713</a>
                                                        </div>
                                                        <a href="https://maps.google.com?q=@23.98803,90.3836164/" class="col-xs-3" style="padding: 0; color: #04834A;font-size: 14px;">
                                                            <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                        </a>
                                                    </div>
                                                    <!-- </div> -->
                                                    <!-- </div> -->
                                                </div>
                                                <!-- .......modal..... -->
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="padding-right:0px">
                                                <a class="row thumbnail collapsed" data-toggle="collapse" onclick="collaps(tongi_expand)" role="button" aria-expanded="false" aria-controls="collapseExample" style="background-color: #05854c;">
                                                    <div class="col-xs-9 text-center" style="padding: 0;">
                                                        টঙ্গি হাব
                                                    </div>
                                                    <div class="col-xs-3" style="padding: 0;">
                                                        <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                    </div>
                                                </a>
                                                <!-- .......modal..... -->
                                                <div id="tongi_expand" class="collapse">
                                                    <!-- <div class="modal-dialog"> -->
                                                    <!-- <div class="card-body"> -->
                                                    <div class="modal-body">
                                                        <div class="col-xs-9 text-center" style="padding: 0;margin: 0%;">
                                                            3/A ওসমানগনি রোড,দত্তপাড়া,হাউস বিল্ডিং, চেরাগ আলি,টঙ্গি <br>
                                                            <a href="tel:01611121232">০১৬১১১-২১২৩২</a>
                                                        </div>
                                                        <a href="https://maps.google.com?q=@23.914763641855238,%2090.41017417346318/" class="col-xs-3" style="padding: 0; color: #04834A;font-size: 14px;">
                                                            <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                        </a>
                                                    </div>
                                                    <!-- </div> -->
                                                    <!-- </div> -->
                                                </div>
                                                <!-- .......modal..... -->
                                            </div>



                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="padding-right:0px">
                                                <a class="row thumbnail collapsed" data-toggle="collapse" onclick="collaps(demra_expand)" role="button" aria-expanded="false" aria-controls="collapseExample" style="background-color: #05854c;">
                                                    <div class="col-xs-9 text-center" style="padding: 0;">
                                                        ডেমরা হাব
                                                    </div>
                                                    <div class="col-xs-3" style="padding: 0;">
                                                        <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                    </div>
                                                </a>
                                                <!-- .......modal..... -->
                                                <div id="demra_expand" class="collapse">
                                                    <!-- <div class="modal-dialog"> -->
                                                    <!-- <div class="card-body"> -->
                                                    <div class="modal-body">
                                                        <div class="col-xs-9 text-center" style="padding: 0;margin: 0%;">
                                                            হাউজ-৬৯,হোল্ডিং নংঃ ১১/২৬,ডোগাই, পশ্চিম পাড়া,আইডিয়াল রোড, ডেমরা <br>
                                                            <a href="tel:01601611228">+8809648156713</a>
                                                        </div>
                                                        <a href="https://maps.google.com?q=@23.709949403139902,%2090.47363171036373/" class="col-xs-3" style="padding: 0; color: #04834A;font-size: 14px;">
                                                            <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                        </a>
                                                    </div>
                                                    <!-- </div> -->
                                                    <!-- </div> -->
                                                </div>
                                                <!-- .......modal..... -->
                                            </div>


                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="padding-right:0px">
                                                <a class="row thumbnail collapsed" data-toggle="collapse" onclick="collaps(sylhet_expand)" role="button" aria-expanded="false" aria-controls="collapseExample" style="background-color: #05854c;">
                                                    <div class="col-xs-9 text-center" style="padding: 0;">
                                                        সিলেট হাব
                                                    </div>
                                                    <div class="col-xs-3" style="padding: 0;">
                                                        <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                    </div>
                                                </a>
                                                <!-- .......modal..... -->
                                                <div id="sylhet_expand" class="collapse">
                                                    <!-- <div class="modal-dialog"> -->
                                                    <!-- <div class="card-body"> -->
                                                    <div class="modal-body">
                                                        <div class="col-xs-9 text-center" style="padding: 0;margin: 0%;">
                                                            আর.বি.  সিলেট মিউনিসিপালিটি জে এল# ৯১, সিলেট সদর, সিলেট-৩১০০ <br>
                                                            <a href="tel:01968878179">+8809648156713</a>
                                                        </div>
                                                        <a href="https://maps.google.com?q=@24.8949,91.8687/" class="col-xs-3" style="padding: 0; color: #04834A;font-size: 14px;">
                                                            <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                        </a>
                                                    </div>
                                                    <!-- </div> -->
                                                    <!-- </div> -->
                                                </div>
                                                <!-- .......modal..... -->
                                            </div>
                                            <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="padding-right:0px" style="display: none;">
                                                <a class="row thumbnail collapsed" data-toggle="collapse" onclick="collaps(savar_expand)" role="button" aria-expanded="false" aria-controls="collapseExample" style="background-color: #05854c;">
                                                    <div class="col-xs-9 text-center" style="padding: 0;">
                                                        সাভার-হাব
                                                    </div>
                                                    <div class="col-xs-3" style="padding: 0;">
                                                        <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                    </div>
                                                </a>
                                                
                                                <div id="savar_expand" class="collapse">
                                                   
                                                    <div class="modal-body">
                                                        <div class="col-xs-9 text-center" style="padding: 0;margin: 0%;">
                                                            বি-১১০, ২য় তলা, Singer/LG শো রুমের সামনে, নামা বাজার রোড, সাভার, ঢাকা <br>
                                                            <a href="tel:01709309069">০১৭০৯-৩০৯০৬৯</a>
                                                        </div>
                                                        <a href="https://maps.google.com?q=@23.8479,90.2576" class="col-xs-3" style="padding: 0; color: #04834A;font-size: 14px;">
                                                            <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                        </a>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div> -->
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="padding-right:0px">
                                                <a class="row thumbnail collapsed" data-toggle="collapse" onclick="collaps(khulna_expand)" role="button" aria-expanded="false" aria-controls="collapseExample" style="background-color: #05854c;">
                                                    <div class="col-xs-9 text-center" style="padding: 0;">
                                                        খুলনা হাব
                                                    </div>
                                                    <div class="col-xs-3" style="padding: 0;">
                                                        <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                    </div>
                                                </a>
                                                <!-- .......modal..... -->
                                                <div id="khulna_expand" class="collapse">
                                                    <!-- <div class="modal-dialog"> -->
                                                    <!-- <div class="card-body"> -->
                                                    <div class="modal-body">
                                                        <div class="col-xs-9 text-center" style="padding: 0;margin: 0%;">
                                                            ২ কেবিএ এভিনিউ,শিব বাড়ি(টাইগার গার্ডেনের পাশে)  <br>
                                                            <a href="tel:01952437097">+8809648156713</a>
                                                        </div>
                                                        <a href="https://maps.google.com?q=@22.8456,89.5403/" class="col-xs-3" style="padding: 0; color: #04834A;font-size: 14px;">
                                                            <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                        </a>
                                                    </div>
                                                    <!-- </div> -->
                                                    <!-- </div> -->
                                                </div>
                                                <!-- .......modal..... -->
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="padding-right:0px">
                                                <a class="row thumbnail collapsed" data-toggle="collapse" onclick="collaps(cox_expand)" role="button" aria-expanded="false" aria-controls="collapseExample" style="background-color: #05854c;">
                                                    <div class="col-xs-9 text-center" style="padding: 0;">
                                                        কক্সবাজার-হাব
                                                    </div>
                                                    <div class="col-xs-3" style="padding: 0;">
                                                        <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                    </div>
                                                </a>
                                                <!-- .......modal..... -->
                                                <div id="cox_expand" class="collapse">
                                                    <!-- <div class="modal-dialog"> -->
                                                    <!-- <div class="card-body"> -->
                                                    <div class="modal-body">
                                                        <div class="col-xs-9 text-center" style="padding: 0;margin: 0%;">
                                                            হোটেল সি কুইন(নিচ তলা),ঝাউ তলা,কক্সবাজার  <br>
                                                            <a href="tel:01885286275">+8809648156713</a>

                                                        </div>
                                                        <a href="https://maps.google.com?q=@21.443455366062032,91.97141129128495/" class="col-xs-3" style="padding: 0; color: #04834A;font-size: 14px;">
                                                            <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                        </a>
                                                    </div>
                                                    <!-- </div> -->
                                                    <!-- </div> -->
                                                </div>
                                                <!-- .......modal..... -->
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="padding-right:0px">
                                                <a class="row thumbnail collapsed" data-toggle="collapse" onclick="collaps(narayanganj_expand)" role="button" aria-expanded="false" aria-controls="collapseExample" style="background-color: #05854c;">
                                                    <div class="col-xs-9 text-center" style="padding: 0;">
                                                        নারায়ণগঞ্জ হাব
                                                    </div>
                                                    <div class="col-xs-3" style="padding: 0;">
                                                        <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                    </div>
                                                </a>
                                                <!-- .......modal..... -->
                                                <div id="narayanganj_expand" class="collapse">
                                                    <!-- <div class="modal-dialog"> -->
                                                    <!-- <div class="card-body"> -->
                                                    <div class="modal-body">
                                                        <div class="col-xs-9 text-center" style="padding: 0;margin: 0%;">
                                                            ৭০/৩, নিউ চাষারা, জামতলা, নারায়ণগঞ্জ ১৪০০ ফিলিং স্টেশন, নারায়ণগঞ্জ <br>
                                                            <a href="tel:01675823737">+8809648156713</a>
                                                        </div>
                                                        <a href="https://maps.google.com?q=@23.6226461,90.4953936/" class="col-xs-3" style="padding: 0; color: #04834A;font-size: 14px;">
                                                            <img src="static.ajkerdeal.com/images/dt/newlogin/dt-locate.png">
                                                        </a>
                                                    </div>
                                                    <!-- </div> -->
                                                    <!-- </div> -->
                                                </div>
                                                <!-- .......modal..... -->
                                            </div>


                                        </div>
                                    </div>
                                    <!-- End: Product Grid -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="visible-sm visible-xs appBtn">
                    <a href="#">
                        <img src="static.ajkerdeal.com/images/dt/newlogin/appinstallicon.png" width="75px" />
                    </a>
                </div>
            </div>
            <!--body-->
            <!--footer-->
            <div class="container">
                <section class="vanilla-block new" style="margin-top: 40px;margin-left: 26px;background: border-box;">
                    <div class="container" style="margin-top: -10px;padding: 2% 0;margin-left: -23px; box-sizing: border-box;">
                        <div>
                            <div class="col">
                                <div class="block-heading">

                                    <div class="col-md-12 col-xl-12" style="border-style: groove;">


                                        <!-- <div class="col-lg-1">

                                        </div> -->
                                        <div class="row col-lg-12">
                                            <div>
                                                <h1 style="margin-top: -1px; text-align: center; padding-bottom: 11px; background-color: #cde6db; padding-top: 11px; margin-left: -16px;margin-right: -45px;">{{ __('theme_easyship::homepage.faq_title') }}</h1>
                                            </div>

                                            <div>

                                                <div class="custom" style="margin-left:3%;font-size:17px;margin-top: 30px;">
                                                    <p><b>{{ __('theme_easyship::homepage.faq_1_q') }}</b></p>
                                                    {{ __('theme_easyship::homepage.faq_1_a') }}
                                                    <br><br>
                                                    <p><b>{{ __('theme_easyship::homepage.faq_2_q') }}</b></p>
                                                    {{ __('theme_easyship::homepage.faq_2_a') }}
                                                    <br><br>

                                                    <p><b>{{ __('theme_easyship::homepage.faq_3_q') }}</b></p>
                                                    {{ __('theme_easyship::homepage.faq_3_a') }}
                                                    <br><br>

                                                </div>



                                                <div class="row visible-lg visible-md visible-xs visible-sm " style="display: flex;margin-top: 20px;">




                                                    <a href="faq-web/index.html">
                                                        <div style="text-align: right;">
                                                            <h4 style="color: #0e495d;">{{ __('theme_easyship::homepage.more_questions') }}</h4>
                                                        </div>

                                                    </a>


                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                </section>

            </div>



            <section class="vanilla-block footer new" style="margin-top: 40px;">
                <div class="container" style="margin-top: 60px;padding: 2% 0;padding-bottom: 120px;">
                    <div class="row">
                        <div class="col">
                            <div class="block-heading">

                                <div class="col-md-12 col-xl-12">

                                    <div class="col-lg-10 col-md-10 col-sm-6 col-xs-6" style="margin-top: 30px;padding: 0%;">
                                        <!-- <div class="col-lg-1">

                                        </div> -->
                                        <div class="col-lg-4">

                                            <div class="about_content">
                                                <a href="/about-us/index.html">{{ __('theme_easyship::homepage.about_us') }}</a>
                                            </div>
                                            <div class="about_content">
                                                <a href="/why-choose-us/index.html">{{ __('theme_easyship::homepage.why_choose_us') }}</a>
                                            </div>
                                            <div class="about_content">
                                                <a href="/package-tracking/index.html">{{ __('theme_easyship::homepage.package_tracking') }}</a>
                                            </div>
                                            <div class="about_content">
                                                <a href="/logistics-services/index.html">{{ __('theme_easyship::homepage.logistics_services') }}</a>
                                            </div>
                                            <div class="about_content">
                                                <a href="/service-areas/index.html">{{ __('theme_easyship::homepage.service_areas') }}</a>
                                            </div>
                                            <div class="about_content">
                                                <a href="/service-and-express/index.html">{{ __('theme_easyship::homepage.services_and_express') }}</a>
                                            </div>
                                            <div class="about_content">
                                                <a href="/terms-and-conditions/index.html">{{ __('theme_easyship::homepage.terms_and_conditions') }}</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="about_content">
                                                <a href="/cash-on-delivery-service/index.html">{{ __('theme_easyship::homepage.cash_on_delivery') }}</a>
                                            </div>
                                            <div class="about_content">
                                                <a href="/home-delivery-service/index.html">{{ __('theme_easyship::homepage.home_delivery') }}</a>
                                            </div>
                                            <div class="about_content">
                                                <a href="/local-courier-service/index.html">{{ __('theme_easyship::homepage.local_delivery') }}</a>
                                            </div>
                                            <div class="about_content">
                                                <a href="/online-parcel-delivery-service/index.html">
                                                    {{ __('theme_easyship::homepage.online_parcel_delivery') }}
                                                </a>
                                            </div>
                                            <div class="about_content">
                                                <a href="/ecommerce-courier-service/index.html">{{ __('theme_easyship::homepage.ecommerce_courier') }}</a>
                                            </div>
                                        </div>
                                        <hr class="visible-xs visible-sm" style="border: none;">
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                            <p>{{ __('theme_easyship::homepage.contact') }}</p>
                                            <hr class="style1" style="margin-bottom: 5px;margin-top: 5px;">
                                            <div class="col">
                                                <div style="font-weight: 500;">
                                                    হাউজঃ মুন্সি বাড়ি, নয়ার হাট হাই স্কুল সংলগ্ন, বড়বাড়ি, লালমনির হাট  <span><a href="#"><img style="width: 15px;" src="static.ajkerdeal.com/images/dt/newlogin/dt-mobile-track-img.svg"></a></span>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-12 col-md-12 contact">
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 phn">
                                                            <div class="phn-box">
                                                                <i class="fa fa-phone" style="color: darkgreen;"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 phn" style="padding: 0% 10px;margin-top: 5px;font-size: 24px;">
                                                            +8809648156713
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6" style="padding: 0%;">

                                        <div class="col-lg-12" style="text-align: center;margin-top: 25px;padding: 0%;">
                                            <!-- <a href="https://deliverytiger.com.bd/privacypolicy.html" class="foot-title" target="_blank">পেমেন্ট ও প্রাইভেসি পলিসি </a> -->
                                            <div class="logo-wrap" style="padding: 10px;">
                                                <span style="padding: 10px;font-weight: 500;">{{ __('theme_easyship::homepage.footer_download_app') }}</span><br />
                                            
                                            </div>

                                            <div class="social-btns">
                                                <a href="#">
                                                    <img style="width:46px" src="static.ajkerdeal.com/images/dt/newlogin/facebook-icon.svg">
                                                </a>
                                                <a href="#">
                                                      <img style="width:50px;margin-left: 4%;margin-right: 4%;" src="static.ajkerdeal.com/images/dt/newlogin/instagram-icon.svg">
                                                </a>
                                                <a href="#">
                                                    <img style="width:50px;" src="static.ajkerdeal.com/images/dt/newlogin/youtube-icon.svg">
                                                </a>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div style="text-align: center;"><b><span style="color: white;">{{ __('theme_easyship::homepage.technical_support') }} </span><a href="https://tic.com.bd" target="_blank"><span style="color: white;">{{ __('theme_easyship::homepage.elite_design') }}&nbsp;</span></a></b></div>
				</section>

        </div>
       <!--footer-->
        <!-- Load Facebook SDK for JavaScript -->
        <div class="fb-customerchat" attribution=setup_tool page_id="100532481317952" logged_in_greeting="If you are a seller from inside Dhaka, Please give us your number.." logged_out_greeting="If you are a seller from inside Dhaka, Please give us your number..">
        </div>
    </div>
    <!-- <div id="fb-root"></div> -->
    <script type="text/javascript" src="assets/jquery.js"></script>
    <script type="text/javascript" src="assets/dtjavascript.js"></script>
    <!-- <script type="text/javascript" src="https://deliverytiger.com.bd/assets/dtjavascript.js"></script> -->
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
    <noscript>
        <img height="1" width="1" style="display:none"
             src="https://www.facebook.com/tr?id=2815821435365075&amp;ev=PageView&amp;noscript=1" />
    </noscript>

    <script>

        $(document).ready(function () {
            $("#myModal").modal('show');
        })

        var input = document.getElementById("dtOrderId");
        input.addEventListener("keyup", function (event) {
            if (event.keyCode === 13) {
                event.preventDefault();
                document.getElementById("track-btn").click();
            }
        });
    </script>

</body>
</html>