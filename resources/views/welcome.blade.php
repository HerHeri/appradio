<!DOCTYPE html>
<!--
Template Name: Tunein
Version: 1.0.0
Author:Webstrot
{{ asset('assets_admin') }}/
-->
<!--[if !IE]><!-->
<html lang="zxx">
<!--[endif]-->

<head>
    <meta charset="utf-8" />
    <title>Tunein Responsive HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Tunein,music,song" />
    <meta name="keywords" content="Tunein,music,song" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--Template style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/nice-select.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/swiper.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/style.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/responsive.css" />
    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets') }}/images/favicon.png" />

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js">
    </script>

    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            background: #7F7FD5;
            background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
            background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
        }

        .chat {
            margin-top: auto;
            margin-bottom: auto;
        }

        .card {
            height: 720px;
            border-radius: 15px !important;
            background-color: rgba(0, 0, 0, 0.4) !important;
        }

        .contacts_body {
            padding: 0.75rem 0 !important;
            overflow-y: auto;
            white-space: nowrap;
        }

        .msg_card_body {
            overflow-y: auto;
        }

        .card-header {
            border-radius: 15px 15px 0 0 !important;
            border-bottom: 0 !important;
        }

        .card-footer {
            border-radius: 0 0 15px 15px !important;
            border-top: 0 !important;
        }

        .container {
            align-content: center;
        }

        .search {
            border-radius: 15px 0 0 15px !important;
            background-color: rgba(0, 0, 0, 0.3) !important;
            border: 0 !important;
            color: white !important;
        }

        .search:focus {
            box-shadow: none !important;
            outline: 0px !important;
        }

        .type_msg {
            background-color: rgba(0, 0, 0, 0.3) !important;
            border: 0 !important;
            color: white !important;
            height: 60px !important;
            overflow-y: auto;
        }

        .type_msg:focus {
            box-shadow: none !important;
            outline: 0px !important;
        }

        .attach_btn {
            border-radius: 15px 0 0 15px !important;
            background-color: rgba(0, 0, 0, 0.3) !important;
            border: 0 !important;
            color: white !important;
            cursor: pointer;
        }

        .send_btn {
            border-radius: 0 15px 15px 0 !important;
            background-color: rgba(0, 0, 0, 0.3) !important;
            border: 0 !important;
            color: white !important;
            cursor: pointer;
        }

        .search_btn {
            border-radius: 0 15px 15px 0 !important;
            background-color: rgba(0, 0, 0, 0.3) !important;
            border: 0 !important;
            color: white !important;
            cursor: pointer;
        }

        .contacts {
            list-style: none;
            padding: 0;
        }

        .contacts li {
            width: 100% !important;
            padding: 5px 10px;
            margin-bottom: 15px !important;
        }

        .active {
            background-color: rgba(0, 0, 0, 0.3);
        }

        .user_img {
            height: 70px;
            width: 70px;
            border: 1.5px solid #f5f6fa;

        }

        .user_img_msg {
            height: 40px;
            width: 40px;
            border: 1.5px solid #f5f6fa;

        }

        .img_cont {
            position: relative;
            height: 70px;
            width: 70px;
        }

        .img_cont_msg {
            height: 40px;
            width: 40px;
        }

        .online_icon {
            position: absolute;
            height: 15px;
            width: 15px;
            background-color: #4cd137;
            border-radius: 50%;
            bottom: 0.2em;
            right: 0.4em;
            border: 1.5px solid white;
        }

        .offline {
            background-color: #c23616 !important;
        }

        .user_info {
            margin-top: auto;
            margin-bottom: auto;
            margin-left: 15px;
        }

        .user_info span {
            font-size: 20px;
            color: white;
        }

        .user_info p {
            font-size: 10px;
            color: rgba(255, 255, 255, 0.6);
        }

        .video_cam {
            margin-left: 50px;
            margin-top: 5px;
        }

        .video_cam span {
            color: white;
            font-size: 20px;
            cursor: pointer;
            margin-right: 20px;
        }

        .msg_cotainer {
            margin-top: auto;
            margin-bottom: auto;
            margin-left: 10px;
            border-radius: 25px;
            background-color: #82ccdd;
            padding: 10px;
            position: relative;
        }

        .msg_cotainer_send {
            margin-top: auto;
            margin-bottom: auto;
            margin-right: 10px;
            border-radius: 25px;
            background-color: #78e08f;
            padding: 10px;
            position: relative;
        }

        .msg_time {
            position: absolute;
            left: 0;
            bottom: -15px;
            color: rgba(255, 255, 255, 0.5);
            font-size: 10px;
        }

        .msg_time_send {
            position: absolute;
            right: 0;
            bottom: -15px;
            color: rgba(255, 255, 255, 0.5);
            font-size: 10px;
        }

        .msg_head {
            position: relative;
        }

        #action_menu_btn {
            position: absolute;
            right: 10px;
            top: 10px;
            color: white;
            cursor: pointer;
            font-size: 20px;
        }

        .action_menu {
            z-index: 1;
            position: absolute;
            padding: 15px 0;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border-radius: 15px;
            top: 30px;
            right: 15px;
            display: none;
        }

        .action_menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .action_menu ul li {
            width: 100%;
            padding: 10px 15px;
            margin-bottom: 5px;
        }

        .action_menu ul li i {
            padding-right: 10px;

        }

        .action_menu ul li:hover {
            cursor: pointer;
            background-color: rgba(0, 0, 0, 0.2);
        }

        @media(max-width: 576px) {
            .contacts_card {
                margin-bottom: 15px !important;
            }
        }
    </style>
</head>

<body class="index4_body_wrapper">
    <!-- preloader Start -->
    <div id="preloader">
        <div id="status">
            <img src="{{ asset('assets') }}/images/loader.gif" id="preloader_image" alt="loader">
        </div>
    </div>
    <div class="cursor"></div>
    <!-- top navi wrapper Start -->
    <div class="m24_main_wrapper">
        <div id="sidebar" class="index4_sidebar index3_sidebar">
            <div class="l-sidebar l2_sidebar">
                <div
                    class="c-header-icon js-hamburger crm_responsive_toggle d-block d-sm-block d-md-block d-lg-block d-xl-none">
                    <div class="hamburger-toggle">
                        <div class="toogle_clse">×</div>
                    </div>
                </div>
                <div id='cssmenu'>
                    <a href="index.html"><img src="{{ asset('assets') }}/images/logo3.png" alt="logo"></a>
                    <ul class="sidebb">
                        <li class='has-sub'><a href='#'><i class="flaticon-home"></i>Beranda</a></li>
                        <li><a href='#'><i class="flaticon-internet"></i>CS</a></li>
                        <li><a href='#'><i class="flaticon-trash"></i>Laporan error</a></li>
                    </ul>
                    <img src="https://picsum.photos/seed/picsum/200/500" alt="" srcset="">
                </div>
            </div>
        </div>
        <!-- top navi wrapper end -->
        <!-- Main section Start -->
        <div class="body_main_header">
            <div class="m24_navi_main_wrapper index4_main_header ms_cover mb-2">

                <div class="m24_logo_wrapper">

                    <div class="c-header-icon js-hamburger">
                        <div class="hamburger-toggle"><i class="flaticon-menu-1"></i>
                        </div>
                    </div>
                </div>
                <div class="m24_header_right_Wrapper d-none d-sm-none d-md-none d-lg-none d-xl-block">
                    <div class="m24_signin_wrapper" style="width: 25%;">
                        @if (Auth::check())
                        <a href="javascript:void(0)" data-toggle="modal" data-target="#login_modal"><img
                                src="{{ Auth::user()->avatar }}" alt="img">
                            <div class="login_top_wrapper" style="width: 75%;">
                                <p>{{ Auth::user()->name }}</p>
                            </div>
                        </a>
                        @else
                        <a href="{{ url('auth/google') }}" class="btn btn-primary">Login with Google</a>
                        @endif
                    </div>
                    <div class="crm_message_dropbox_wrapper">
                        <div class="nice-select budge_noti_wrapper" tabindex="0"> <span class="current budge_noti"><i
                                    class="flaticon-bell"></i></span>

                            <ul class="list pullDown">
                                <li><a href="#">3 New notifications</a>
                                </li>
                                <li>
                                    <div class="crm_mess_main_box_wrapper">
                                        <div class="crm_mess_img_wrapper">
                                            <img src="{{ asset('assets') }}/images/nt1.jpg" alt="img">
                                        </div>
                                        <div class="crm_mess_img_cont_wrapper">
                                            <h4>Walking Promises <span>01:30PM</span></h4>
                                            <p>Ava Cornish</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="crm_mess_main_box_wrapper">
                                        <div class="crm_mess_img_wrapper">
                                            <img src="{{ asset('assets') }}/images/nt2.jpg" alt="img">
                                        </div>
                                        <div class="crm_mess_img_cont_wrapper">
                                            <h4>Until I Met You <span>01:30PM</span></h4>
                                            <p>diu pokal</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="crm_mess_main_box_wrapper">
                                        <div class="crm_mess_img_wrapper">
                                            <img src="{{ asset('assets') }}/images/nt3.jpg" alt="img">
                                        </div>
                                        <div class="crm_mess_img_cont_wrapper">
                                            <h4>merry with you<span>01:30PM</span></h4>
                                            <p>love song</p>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="crm_mess_all_main_box_wrapper">
                                        <p><a href="#">See All</a>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="m24_navi_langauage_box d-none d-sm-none d-md-none d-lg-none d-xl-block">
                        <div class="lang_list_wrapper">
                            <a href="#" data-toggle="modal" data-target="#myModal">languages <i
                                    class="fas fa-language"></i></a>
                        </div>
                        <div class="theme-switch-wrapper d-none d-sm-none d-md-none d-lg-none d-xl-none">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox" />
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="m24_navigation_wrapper">


                    <div class="d-block d-sm-block d-md-block d-lg-block d-xl-none">
                        <div class="search_bar index3_search_bar index4_search_bar">
                            <div class="res_search_bar" id="search_button"> <i class="fa fa-ellipsis-v"></i>
                            </div>
                            <div id="search_open" class="res_search_box">

                                <div class="lang_list_wrapper responsive_search_toggle">
                                    <a href="#" data-toggle="modal" data-target="#myModal">languages <i
                                            class="fas fa-language"></i></a>
                                </div>

                                <div class="m24_signin_wrapper responsive_search_toggle">

                                    <a href="#" data-toggle="modal" data-target="#login_modal"><img
                                            src="{{ asset('assets') }}/images/pf.png" alt="img">
                                        <div class="login_top_wrapper">
                                            <p>login/register</p>

                                        </div>
                                    </a>
                                </div>
                                <div class="crm_message_dropbox_wrapper responsive_search_toggle">
                                    <div class="nice-select budge_noti_wrapper" tabindex="0"> <span
                                            class="current budge_noti"><i class="flaticon-bell"></i></span>
                                        <p class="notify_para">notifications</p>

                                        <ul class="list">
                                            <li><a href="#">3 New notifications </a>
                                            </li>
                                            <li>
                                                <div class="crm_mess_main_box_wrapper">
                                                    <div class="crm_mess_img_wrapper">
                                                        <img src="{{ asset('assets') }}/images/nt1.jpg" alt="img">
                                                    </div>
                                                    <div class="crm_mess_img_cont_wrapper">
                                                        <h4>Walking Promises <span>01:30PM</span></h4>
                                                        <p>Ava Cornish</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="crm_mess_main_box_wrapper">
                                                    <div class="crm_mess_img_wrapper">
                                                        <img src="{{ asset('assets') }}/images/nt2.jpg" alt="img">
                                                    </div>
                                                    <div class="crm_mess_img_cont_wrapper">
                                                        <h4>Until I Met You <span>01:30PM</span></h4>
                                                        <p>diu pokal</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="crm_mess_main_box_wrapper">
                                                    <div class="crm_mess_img_wrapper">
                                                        <img src="{{ asset('assets') }}/images/nt3.jpg" alt="img">
                                                    </div>
                                                    <div class="crm_mess_img_cont_wrapper">
                                                        <h4>merry with you<span>01:30PM</span></h4>
                                                        <p>love song</p>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="crm_mess_all_main_box_wrapper">
                                                    <p><a href="#">See All</a>
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--navi wrapper End-->


            <!-- quick link wrapper start-->
            <div class="quick_link_wrapper index3_quick_wrapper index4_quick_wrapper ms_cover">

                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div id="accordion" role="tablist">
                            <div class="card">
                                <!-- Card Content -->
                                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne"
                                    data-parent="#accordion" style="">
                                    <div class="">
                                        <div class="row">
                                            <div class="col-md-12 col-xl-12 chat">
                                                <div class="card" style="height: 720px;">
                                                    <div class="card-header msg_head">
                                                        <div class="d-flex bd-highlight">
                                                            <!-- <div class="img_cont">
                                                                <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img">
                                                                <span class="online_icon"></span>
                                                            </div> -->
                                                            <div class="user_info">
                                                                <span style="font-size:170%;">Chat Room |
                                                                </span><span>Gunakan bahasa yang baik</span>
                                                                <!-- <p>1767 Messages</p> -->
                                                            </div>
                                                            <!-- <div class="video_cam">
                                                                <span><i class="fas fa-video"></i></span>
                                                                <span><i class="fas fa-phone"></i></span>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                    <div class="card-body msg_card_body" id="chat-box">
                                                        {{-- <div class="d-flex justify-content-end mb-4" id="my-user-msg">

                                                        </div> --}}
                                                    </div>
                                                    <div class="card-footer">
                                                        {{-- @if (Auth::check()) --}}
                                                        <div class="input-group">
                                                            <div class="input-group-append"><span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span></div>
                                                            <input type="hidden" class="form-control" id="user_id" name="user_id" value="1">
                                                            <textarea name="message" id="message" class="form-control type_msg" placeholder="Type your message..."></textarea>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text send_btn">
                                                                    <button class="btn btn-primary" id="btn-send-comment"><i class="fas fa-location-arrow"></i></button>
                                                                </span>
                                                            </div>
                                                            <br>
                                                        </div>
                                                        {{-- @endif --}}
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- quick link wrapper end-->
            <!-- footer Wrapper start -->
        </div>
        <!--footer wrapper end-->
        <!-- language modal section -->
    </div>
    <div class="modal fade lang_ms_banner" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                        <div class="m24_language_box ms_cover">
                            <h1>Language Selection</h1>
                            <p>Please select the language(s) of the music you listen to.</p>
                        </div>
                        <div class="lang_list_checkbox">
                            <ul>
                                <li>
                                    <p class="music_field_box">
                                        <input type="checkbox" id="c1" name="cb">
                                        <label for="c1">हिंदी <span>Hindi</span>
                                        </label>
                                    </p>
                                </li>
                                <li>
                                    <p class="music_field_box">
                                        <input type="checkbox" id="c2" name="cb">
                                        <label for="c2">English <span>English</span>
                                        </label>
                                    </p>
                                </li>
                                <li>
                                    <p class="music_field_box">
                                        <input type="checkbox" id="c3" name="cb">
                                        <label for="c3">पंजाबी <span>Punjabi</span>
                                        </label>
                                    </p>
                                </li>
                                <li>
                                    <p class="music_field_box">
                                        <input type="checkbox" id="c4" name="cb">
                                        <label for="c4">தமிழ் <span>tamil</span>
                                        </label>
                                    </p>
                                </li>
                                <li>
                                    <p class="music_field_box">
                                        <input type="checkbox" id="c5" name="cb">
                                        <label for="c5">राजस्थानी <span>Rajasthani</span>
                                        </label>
                                    </p>
                                </li>
                                <li>
                                    <p class="music_field_box">
                                        <input type="checkbox" id="c6" name="cb">
                                        <label for="c6">हरयाणवी <span>Haryanvi</span>
                                        </label>
                                    </p>
                                </li>
                                <li>
                                    <p class="music_field_box">
                                        <input type="checkbox" id="c7" name="cb">
                                        <label for="c7">ગુજરાતી <span>Gujarati</span>
                                        </label>
                                    </p>
                                </li>
                                <li>
                                    <p class="music_field_box">
                                        <input type="checkbox" id="c8" name="cb">
                                        <label for="c8">भोजपुरी <span>Bhojpuri</span>
                                        </label>
                                    </p>
                                </li>
                                <li>
                                    <p class="music_field_box">
                                        <input type="checkbox" id="c9" name="cb">
                                        <label for="c9">മലയാളം <span>Malayalam</span>
                                        </label>
                                    </p>
                                </li>
                                <li>
                                    <p class="music_field_box">
                                        <input type="checkbox" id="c10" name="cb">
                                        <label for="c10">मराठी <span>marathi</span>
                                        </label>
                                    </p>
                                </li>
                            </ul>
                        </div>

                        <div class="lang_apply_btn_wrapper ms_cover">
                            <div class="lang_apply_btn">

                                <a href="#">apply</a>

                            </div>
                            <div class="cancel_wrapper">
                                <a href="#" class="" data-dismiss="modal">cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login register  modal section -->
    <div class="modal fade lang_ms_banner" id="login_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                        <div class="m24_language_box ms_cover">
                            <h1>Login / Sign In</h1>
                            <p>for unlimited music streaming & a personalised experience</p>
                        </div>
                        <div class="login_form_wrapper">

                            <div class="icon_form comments_form">

                                <input type="text" class="form-control" name="full_name"
                                    placeholder="Enter Email Address*">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="icon_form comments_form">

                                <input type="password" class="form-control" placeholder="Enter Password *">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="login_remember_box">
                                <label class="control control--checkbox">keep me signed in
                                    <input type="checkbox">
                                    <span class="control__indicator"></span>
                                </label>
                                <a href="#" class="forget_password">
                                    Forgot Password ?
                                </a>
                            </div>

                        </div>
                        <div class="lang_apply_btn_wrapper ms_cover">
                            <div class="lang_apply_btn">

                                <a href="#">login now</a>

                            </div>
                            <div class="cancel_wrapper">
                                <a href="#" class="" data-dismiss="modal">cancel</a>
                            </div>
                            <div class="dont_have_account ms_cover">
                                <p>Don’t have an acount ? <a href="#register_modal" data-toggle="modal">register
                                        here</a></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade lang_ms_banner" id="register_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                        <div class="m24_language_box ms_cover">
                            <h1>Register / Sign Up</h1>
                            <p>for unlimited music streaming & a personalised experience</p>
                        </div>
                        <div class="login_form_wrapper">
                            <div class="icon_form comments_form">

                                <input type="text" class="form-control" name="first_name" placeholder="Enter your name">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="icon_form comments_form">

                                <input type="text" class="form-control" name="full_name"
                                    placeholder="Enter Email Address*">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="icon_form comments_form">

                                <input type="password" class="form-control" placeholder="Enter Password *">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="icon_form comments_form">

                                <input type="password" class="form-control" placeholder="confirm password*">
                                <i class="fas fa-lock"></i>
                            </div>

                        </div>
                        <div class="lang_apply_btn_wrapper ms_cover">
                            <div class="lang_apply_btn">

                                <a href="#">register</a>

                            </div>
                            <div class="cancel_wrapper">
                                <a href="#" class="" data-dismiss="modal">cancel</a>
                            </div>
                            <div class="dont_have_account ms_cover">
                                <p>Don’t have an acount ? <a href="#login_modal" data-toggle="modal">login here</a></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login register  modal end -->
    <!-- playllist wrapper start -->
    <div class="adonis-player-wrap index3_adoins_wrapper index4_playlist_wrap">
        <div id="adonis_jp_container" class="master-container-holder" role="application" aria-label="media player">
            <div id="adonis_jplayer_main" class="jp-jplayer"></div>
            <div class="adonis-player-horizontal">
                <div class="master-container-fluid">
                    <div class="row adonis-player">
                        <div class="col-sm-4 col-lg-4 col-xl-3 col-4">
                            <div class="media current-item">
                                <div class="song-poster">
                                    <img class="box-rounded-sm" src="{{ url('/') }}/assets/js/mp3/browse/browse-overview-4.jpg" alt="">
                                </div>
                                <div class="des">
                                    <div class="jp-title" aria-label="title">&nbsp;</div>
                                    <div class="artist-name"><a href="#">Kak Hafiz</a></div>
                                </div>

                            </div>
                            <div class="jp-details">
                                <div class="jp-title" aria-label="title">&nbsp;</div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-4 col-xl-6 col-4 resp">
                            <div class="player-controls">

                                <a class="jp-shuffle jp_shuffle_responsive" role="button" tabindex="0"><span
                                        class="adonis-icon icon-2x"><svg version="1.1"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 32">
                                            <path
                                                d="M28.070 17.363c-0.284-0.188-0.634-0.3-1.009-0.3-0.305 0-0.593 0.074-0.846 0.205l0.010-0.005c-0.576 0.304-0.962 0.899-0.962 1.584 0 0 0 0 0 0v0 4.251h-3.609c-1.161-0.002-2.258-0.276-3.23-0.761l0.042 0.019c-0.233-0.117-0.507-0.186-0.797-0.186-0.699 0-1.304 0.397-1.604 0.977l-0.005 0.010c-0.118 0.23-0.187 0.503-0.187 0.791 0 0.7 0.408 1.305 0.999 1.59l0.011 0.005c1.392 0.704 3.033 1.118 4.77 1.123h3.611v3.549c-0 0.005-0 0.011-0 0.017 0 0.675 0.388 1.259 0.953 1.542l0.010 0.005c0.243 0.135 0.533 0.216 0.841 0.221l0.001 0c0.003 0 0.007 0 0.011 0 0.37 0 0.713-0.112 0.998-0.305l-0.006 0.004 8.722-5.634c0.481-0.32 0.794-0.86 0.794-1.474s-0.313-1.153-0.788-1.47l-0.006-0.004zM28.872 26.887v-4.732l3.609 2.366zM1.804 8.882h1.804c1.163 0.010 2.259 0.29 3.23 0.781l-0.042-0.019c0.237 0.125 0.519 0.198 0.818 0.198 0.986 0 1.784-0.799 1.784-1.784 0-0.699-0.402-1.304-0.988-1.597l-0.010-0.005c-1.398-0.702-3.046-1.116-4.79-1.123h-1.807c-0.057-0.006-0.122-0.010-0.189-0.010-0.986 0-1.784 0.799-1.784 1.784s0.799 1.784 1.784 1.784c0.067 0 0.132-0.004 0.197-0.011l-0.008 0.001zM21.694 8.882h3.609v4.271c-0 0.005-0 0.011-0 0.017 0 0.675 0.388 1.259 0.953 1.542l0.010 0.005c0.243 0.135 0.533 0.216 0.841 0.221l0.001 0c0.36-0.006 0.692-0.118 0.969-0.305l-0.006 0.004 8.682-5.694c0.486-0.32 0.802-0.862 0.802-1.479 0-0.002 0-0.003 0-0.005v0c-0.006-0.617-0.32-1.158-0.796-1.48l-0.006-0.004-8.682-5.674c-0.265-0.155-0.583-0.247-0.922-0.247s-0.658 0.092-0.931 0.252l0.009-0.005c-0.576 0.304-0.962 0.899-0.962 1.584 0 0 0 0 0 0v0 3.449h-3.609c-0.012-0-0.026-0-0.040-0-5.925 0-10.733 4.786-10.767 10.704v0.003c-0.068 3.912-3.255 7.058-7.177 7.058-0.022 0-0.043-0-0.064-0l0.003 0h-1.804c-0.986 0-1.784 0.799-1.784 1.784s0.799 1.784 1.784 1.784h1.804c0.024 0 0.053 0 0.081 0 5.897 0 10.687-4.741 10.766-10.619l0-0.007c0.011-3.956 3.221-7.158 7.178-7.158 0.021 0 0.042 0 0.063 0l-0.003-0zM28.912 5.093l3.609 2.366-3.609 2.366z">
                                            </path>
                                        </svg></span></a>
                                <div class="control-primary">
                                    <!-- <a class="jp-previous" role="button" tabindex="0"><span class="adonis-icon icon-4x"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 58 32"><path d="M55.064 0.272l-25.2 14.192c-0.555 0.299-0.925 0.876-0.925 1.54s0.371 1.241 0.916 1.535l0.009 0.005c1.336 0.784 23.64 13.344 25.256 14.216 0.265 0.162 0.585 0.258 0.928 0.258 0.986 0 1.787-0.793 1.8-1.777v-28.433c0-0.004 0-0.009 0-0.014 0-0.999-0.809-1.808-1.808-1.808-0.362 0-0.7 0.107-0.983 0.29l0.007-0.004zM26.12 0.272c-1.112 0.624-23.304 13.12-25.192 14.192-0.555 0.299-0.925 0.876-0.925 1.54s0.371 1.241 0.916 1.535l0.009 0.005c1.36 0.8 23.64 13.344 25.248 14.216 0.265 0.161 0.586 0.257 0.928 0.257 0.987 0 1.79-0.792 1.808-1.775l0-0.002v-28.432c0-0.001 0-0.003 0-0.005 0-1.003-0.813-1.816-1.816-1.816-0.362 0-0.7 0.106-0.983 0.289l0.007-0.004z"></path></svg></span></a> -->
                                    <a class="jp-play" role="button" tabindex="0">
                                        <span class="adonis-icon icon-play icon-3x"><svg version="1.1"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 32">
                                                <path
                                                    d="M27.703 14.461l-24.945-14.187c-0.272-0.174-0.604-0.278-0.96-0.278-0.993 0-1.798 0.805-1.798 1.798 0 0.001 0 0.002 0 0.004v-0 28.434c0.004 0.982 0.801 1.776 1.783 1.776 0.338 0 0.653-0.094 0.922-0.257l-0.008 0.004c1.524-0.869 23.65-13.44 25.006-14.217 0.549-0.303 0.914-0.878 0.914-1.539s-0.366-1.236-0.905-1.534l-0.009-0.005z">
                                                </path>
                                            </svg></span>
                                        <span class="adonis-icon icon-pause icon-3x"><svg version="1.1"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 32">
                                                <path
                                                    d="M19.2 0h8c0.884 0 1.6 0.716 1.6 1.6v28.8c0 0.884-0.716 1.6-1.6 1.6h-8c-0.884 0-1.6-0.716-1.6-1.6v-28.8c0-0.884 0.716-1.6 1.6-1.6z">
                                                </path>
                                                <path
                                                    d="M1.6 0h8c0.884 0 1.6 0.716 1.6 1.6v28.8c0 0.884-0.716 1.6-1.6 1.6h-8c-0.884 0-1.6-0.716-1.6-1.6v-28.8c0-0.884 0.716-1.6 1.6-1.6z">
                                                </path>
                                            </svg></span></a>
                                    <!-- <a class="jp-next" role="button" tabindex="0"><span class="adonis-icon icon-4x"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 58 32"><path d="M28 14.464l-25.216-14.192c-0.276-0.179-0.614-0.286-0.976-0.286-0.999 0-1.808 0.809-1.808 1.808 0 0.005 0 0.010 0 0.015v-0.001 28.432c0.013 0.985 0.814 1.778 1.8 1.778 0.343 0 0.663-0.096 0.936-0.262l-0.008 0.005c1.6-0.872 23.896-13.432 25.256-14.216 0.559-0.298 0.934-0.877 0.934-1.544 0-0.66-0.367-1.235-0.908-1.531l-0.009-0.005zM56.944 14.464l-25.216-14.192c-0.276-0.179-0.614-0.286-0.976-0.286-0.999 0-1.808 0.809-1.808 1.808 0 0.005 0 0.010 0 0.015v-0.001 28.432c0.013 0.985 0.814 1.778 1.8 1.778 0.343 0 0.663-0.096 0.936-0.262l-0.008 0.005c1.6-0.872 23.888-13.432 25.256-14.216 0.55-0.303 0.917-0.879 0.917-1.54s-0.367-1.237-0.908-1.535l-0.009-0.005z"></path></svg></span></a> -->
                                </div>
                                <a class="jp-repeat jp_repeat_responsive" role="button" tabindex="0"><span
                                        class="adonis-icon icon-3x"><svg version="1.1"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 32">
                                            <path
                                                d="M32.122 4.45c-0.055-0.001-0.119-0.001-0.184-0.001-6.422 0-11.64 5.155-11.742 11.553l-0 0.010c-0.068 4.436-3.68 8.006-8.126 8.006-0.050 0-0.101-0-0.151-0.001l0.008 0c-0.037 0.001-0.080 0.001-0.123 0.001-4.446 0-8.058-3.57-8.126-8l-0-0.006c0.024-3.503 2.299-6.467 5.45-7.521l0.056-0.016v2.194c0.022 0.665 0.408 1.235 0.965 1.519l0.010 0.005c0.26 0.136 0.567 0.218 0.892 0.223l0.002 0c0.014 0 0.031 0.001 0.047 0.001 0.325 0 0.631-0.083 0.897-0.229l-0.010 0.005 7.335-4.45c0.526-0.308 0.874-0.87 0.874-1.514s-0.348-1.206-0.866-1.509l-0.008-0.004-7.335-4.45c-0.273-0.16-0.601-0.254-0.952-0.254-0.32 0-0.622 0.079-0.887 0.218l0.010-0.005c-0.56 0.299-0.935 0.879-0.935 1.547 0 0.006 0 0.012 0 0.019v-0.001 2.987c-5.27 1.124-9.173 5.717-9.224 11.23l-0 0.006c0.114 6.409 5.336 11.562 11.762 11.562 0.058 0 0.115-0 0.173-0.001l-0.009 0c0.049 0.001 0.107 0.001 0.164 0.001 6.426 0 11.649-5.152 11.762-11.551l0-0.011c0.224-4.387 3.836-7.859 8.259-7.859s8.035 3.472 8.258 7.839l0.001 0.020c-0.026 3.497-2.302 6.455-5.45 7.501l-0.056 0.016v-2.194c-0.001-0.667-0.375-1.246-0.925-1.54l-0.009-0.005c-0.268-0.157-0.59-0.25-0.935-0.25s-0.666 0.093-0.943 0.255l0.009-0.005-7.335 4.592c-0.528 0.302-0.877 0.862-0.877 1.503s0.35 1.201 0.869 1.499l0.008 0.004 7.335 4.45c0.272 0.166 0.601 0.264 0.953 0.264 0.008 0 0.016-0 0.024-0h-0.001c0.006 0 0.013 0 0.021 0 0.984 0 1.785-0.787 1.808-1.766l0-0.002v-3.088c5.257-1.133 9.145-5.725 9.183-11.231l0-0.004c-0.114-6.409-5.336-11.562-11.762-11.562-0.058 0-0.115 0-0.173 0.001l0.009-0zM12.841 4.978l2.032 1.239-2.032 1.239zM31.126 27.022l-2.032-1.239 2.032-1.239z">
                                            </path>
                                        </svg></span></a>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-4 col-xl-3 col-4">
                            <div class="jp_controls_wrapper">
                                <div class="jp-volume-controls">
                                    <a class="adonis-mute-control" role="button" tabindex="0">
                                        <span class="adonis-icon icon-volume icon-3x"><svg version="1.1"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 32">
                                                <path
                                                    d="M31.76 9.056l-1.36 2.592c1.265 1.020 2.071 2.567 2.080 4.302v0.002c0 1.896-0.456 3.616-1.952 4.648l1.28 2.184c1.962-1.642 3.202-4.092 3.202-6.831 0-2.776-1.272-5.254-3.266-6.884l-0.016-0.013zM36.664 4.424l-1.664 2.288c2.479 2.331 4.027 5.627 4.040 9.286v0.002c-0.027 3.717-1.634 7.053-4.182 9.375l-0.010 0.009 1.728 2.2c3.058-2.92 4.96-7.028 4.96-11.581 0-0.001 0-0.002 0-0.003v0c-0.017-4.532-1.877-8.626-4.87-11.574l-0.002-0.002zM41.6 0l-1.848 2.168c3.497 3.563 5.665 8.442 5.696 13.826l0 0.006c-0.043 5.368-2.202 10.223-5.683 13.779l0.003-0.003 1.832 2.168c3.946-4.151 6.373-9.778 6.373-15.972s-2.427-11.821-6.383-15.982l0.009 0.010zM0 10.888v10.4c0 1.328 1.2 3.016 2.688 3.016h8.080v-16.616h-8.080c-1.488 0-2.688 1.912-2.688 3.2zM23.272 0.136l-11.272 7.4v16.984l11.272 7.48c1.48 0 3.608-1.072 3.608-2.4v-27.072c0-1.32-2.128-2.392-3.608-2.392z">
                                                </path>
                                            </svg></span>
                                        <span class="adonis-icon icon-mute icon-3x"><svg version="1.1"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.75 11.95">
                                                <g data-name="Layer 2">
                                                    <g id="Group_4" data-name="Group 4">
                                                        <path
                                                            d="M18.75,8.12V9.61H17.26L15.38,7.73,13.49,9.61H12V8.12l1.88-1.89L12,4.35V2.86h1.49l1.89,1.88,1.88-1.88h1.49V4.35L16.87,6.23Z" />
                                                        <g id="sound_2" data-name="sound 2">
                                                            <path class="cls-1"
                                                                d="M0,4V7.92A1.16,1.16,0,0,0,1,9.05H4V2.83H1C.45,2.83,0,3.54,0,4ZM8.73,0,4.51,2.78V9.14L8.73,12c.55,0,1.35-.4,1.35-.9V.9C10.08.4,9.28,0,8.73,0Z" />
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg></span>
                                    </a>
                                    <div class="jp-volume-bar d-flex align-items-center">
                                        <div class="jp-volume-bar-value"></div>
                                    </div>
                                </div>
                                <div class="jp_adoins_wrapper"><a class="toggle-off-canvas"
                                        data-target="#adonis-playlist" role="button" tabindex="0"><span
                                            class="adonis-icon icon-4x"><svg version="1.1"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 59 32">
                                                <path
                                                    d="M16 4.571h41.143c1.262 0 2.286-1.023 2.286-2.286s-1.023-2.286-2.286-2.286v0h-41.143c-1.262 0-2.286 1.023-2.286 2.286s1.023 2.286 2.286 2.286v0zM2.286 0c-1.262 0-2.286 1.023-2.286 2.286s1.023 2.286 2.286 2.286c1.262 0 2.286-1.023 2.286-2.286v0c0-1.262-1.023-2.286-2.286-2.286v0zM57.143 13.714h-41.143c-1.262 0-2.286 1.023-2.286 2.286s1.023 2.286 2.286 2.286v0h41.143c1.262 0 2.286-1.023 2.286-2.286s-1.023-2.286-2.286-2.286v0zM2.286 13.714c-1.262 0-2.286 1.023-2.286 2.286s1.023 2.286 2.286 2.286c1.262 0 2.286-1.023 2.286-2.286v0c0-1.262-1.023-2.286-2.286-2.286v0zM57.143 27.429h-41.143c-1.262 0-2.286 1.023-2.286 2.286s1.023 2.286 2.286 2.286v0h41.143c1.262 0 2.286-1.023 2.286-2.286s-1.023-2.286-2.286-2.286v0zM2.286 27.429c-1.262 0-2.286 1.023-2.286 2.286s1.023 2.286 2.286 2.286c1.262 0 2.286-1.023 2.286-2.286v0c0-1.262-1.023-2.286-2.286-2.286v0z">
                                                </path>
                                            </svg></span></a></div>

                                <div class="jp_current_time_wrapepr d-none d-lg-block">
                                    <div class="jp-current-time" role="timer" aria-label="time"></div>
                                    <div class="jp-duration" role="timer" aria-label="duration"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--./ container-fluid-->
                <div class="jp-progress d-flex align-items-center jp-progress-pos-top">
                    <div class="jp-seek-bar">
                        <div class="jp-play-bar"></div>
                    </div>
                </div>
            </div>

            <div id="adonis-playlist" class="adonis-playlist off-canvas off-canvas-right">
                <div class="adonis-playlist-player adonis-player player-bg-yellow">
                    <a class="close-offcanvas" data-target="#adonis-playlist" href="#"><span
                            class="adonis-icon icon-3x"><svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M13.4 12l5.3-5.3c0.4-0.4 0.4-1 0-1.4s-1-0.4-1.4 0l-5.3 5.3-5.3-5.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4l5.3 5.3-5.3 5.3c-0.4 0.4-0.4 1 0 1.4 0.2 0.2 0.4 0.3 0.7 0.3s0.5-0.1 0.7-0.3l5.3-5.3 5.3 5.3c0.2 0.2 0.5 0.3 0.7 0.3s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4l-5.3-5.3z">
                                </path>
                            </svg></span>
                    </a>
                    <div class="blurred-bg-wrap">
                        <div class="blurred-bg"></div>
                    </div>
                    <div class="media current-item">
                        <div class="song-poster">
                            <img class="box-rounded-sm" src="{{ url('/') }}/assets/js/mp3/browse/playlist-2.jpg" alt="">
                        </div>
                        <div class="player-details col-8">
                            <h3 class="jp-title">What Makes You Country</h3>
                            <p class="artist-name">Adonis Music R&amp;B</p>
                            <div class="controls">
                                <div class="side_bar_shuffle">
                                    <a class="jp-shuffle inactive-color" role="button" tabindex="0">
                                        <span class="adonis-icon icon-2x"><svg version="1.1"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 32">
                                                <path
                                                    d="M28.070 17.363c-0.284-0.188-0.634-0.3-1.009-0.3-0.305 0-0.593 0.074-0.846 0.205l0.010-0.005c-0.576 0.304-0.962 0.899-0.962 1.584 0 0 0 0 0 0v0 4.251h-3.609c-1.161-0.002-2.258-0.276-3.23-0.761l0.042 0.019c-0.233-0.117-0.507-0.186-0.797-0.186-0.699 0-1.304 0.397-1.604 0.977l-0.005 0.010c-0.118 0.23-0.187 0.503-0.187 0.791 0 0.7 0.408 1.305 0.999 1.59l0.011 0.005c1.392 0.704 3.033 1.118 4.77 1.123h3.611v3.549c-0 0.005-0 0.011-0 0.017 0 0.675 0.388 1.259 0.953 1.542l0.010 0.005c0.243 0.135 0.533 0.216 0.841 0.221l0.001 0c0.003 0 0.007 0 0.011 0 0.37 0 0.713-0.112 0.998-0.305l-0.006 0.004 8.722-5.634c0.481-0.32 0.794-0.86 0.794-1.474s-0.313-1.153-0.788-1.47l-0.006-0.004zM28.872 26.887v-4.732l3.609 2.366zM1.804 8.882h1.804c1.163 0.010 2.259 0.29 3.23 0.781l-0.042-0.019c0.237 0.125 0.519 0.198 0.818 0.198 0.986 0 1.784-0.799 1.784-1.784 0-0.699-0.402-1.304-0.988-1.597l-0.010-0.005c-1.398-0.702-3.046-1.116-4.79-1.123h-1.807c-0.057-0.006-0.122-0.010-0.189-0.010-0.986 0-1.784 0.799-1.784 1.784s0.799 1.784 1.784 1.784c0.067 0 0.132-0.004 0.197-0.011l-0.008 0.001zM21.694 8.882h3.609v4.271c-0 0.005-0 0.011-0 0.017 0 0.675 0.388 1.259 0.953 1.542l0.010 0.005c0.243 0.135 0.533 0.216 0.841 0.221l0.001 0c0.36-0.006 0.692-0.118 0.969-0.305l-0.006 0.004 8.682-5.694c0.486-0.32 0.802-0.862 0.802-1.479 0-0.002 0-0.003 0-0.005v0c-0.006-0.617-0.32-1.158-0.796-1.48l-0.006-0.004-8.682-5.674c-0.265-0.155-0.583-0.247-0.922-0.247s-0.658 0.092-0.931 0.252l0.009-0.005c-0.576 0.304-0.962 0.899-0.962 1.584 0 0 0 0 0 0v0 3.449h-3.609c-0.012-0-0.026-0-0.040-0-5.925 0-10.733 4.786-10.767 10.704v0.003c-0.068 3.912-3.255 7.058-7.177 7.058-0.022 0-0.043-0-0.064-0l0.003 0h-1.804c-0.986 0-1.784 0.799-1.784 1.784s0.799 1.784 1.784 1.784h1.804c0.024 0 0.053 0 0.081 0 5.897 0 10.687-4.741 10.766-10.619l0-0.007c0.011-3.956 3.221-7.158 7.178-7.158 0.021 0 0.042 0 0.063 0l-0.003-0zM28.912 5.093l3.609 2.366-3.609 2.366z">
                                                </path>
                                            </svg></span>
                                    </a>
                                    <a class="jp-repeat inactive-color" role="button" tabindex="0"><span
                                            class="adonis-icon icon-3x"><svg version="1.1"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 32">
                                                <path
                                                    d="M32.122 4.45c-0.055-0.001-0.119-0.001-0.184-0.001-6.422 0-11.64 5.155-11.742 11.553l-0 0.010c-0.068 4.436-3.68 8.006-8.126 8.006-0.050 0-0.101-0-0.151-0.001l0.008 0c-0.037 0.001-0.080 0.001-0.123 0.001-4.446 0-8.058-3.57-8.126-8l-0-0.006c0.024-3.503 2.299-6.467 5.45-7.521l0.056-0.016v2.194c0.022 0.665 0.408 1.235 0.965 1.519l0.010 0.005c0.26 0.136 0.567 0.218 0.892 0.223l0.002 0c0.014 0 0.031 0.001 0.047 0.001 0.325 0 0.631-0.083 0.897-0.229l-0.010 0.005 7.335-4.45c0.526-0.308 0.874-0.87 0.874-1.514s-0.348-1.206-0.866-1.509l-0.008-0.004-7.335-4.45c-0.273-0.16-0.601-0.254-0.952-0.254-0.32 0-0.622 0.079-0.887 0.218l0.010-0.005c-0.56 0.299-0.935 0.879-0.935 1.547 0 0.006 0 0.012 0 0.019v-0.001 2.987c-5.27 1.124-9.173 5.717-9.224 11.23l-0 0.006c0.114 6.409 5.336 11.562 11.762 11.562 0.058 0 0.115-0 0.173-0.001l-0.009 0c0.049 0.001 0.107 0.001 0.164 0.001 6.426 0 11.649-5.152 11.762-11.551l0-0.011c0.224-4.387 3.836-7.859 8.259-7.859s8.035 3.472 8.258 7.839l0.001 0.020c-0.026 3.497-2.302 6.455-5.45 7.501l-0.056 0.016v-2.194c-0.001-0.667-0.375-1.246-0.925-1.54l-0.009-0.005c-0.268-0.157-0.59-0.25-0.935-0.25s-0.666 0.093-0.943 0.255l0.009-0.005-7.335 4.592c-0.528 0.302-0.877 0.862-0.877 1.503s0.35 1.201 0.869 1.499l0.008 0.004 7.335 4.45c0.272 0.166 0.601 0.264 0.953 0.264 0.008 0 0.016-0 0.024-0h-0.001c0.006 0 0.013 0 0.021 0 0.984 0 1.785-0.787 1.808-1.766l0-0.002v-3.088c5.257-1.133 9.145-5.725 9.183-11.231l0-0.004c-0.114-6.409-5.336-11.562-11.762-11.562-0.058 0-0.115 0-0.173 0.001l0.009-0zM12.841 4.978l2.032 1.239-2.032 1.239zM31.126 27.022l-2.032-1.239 2.032-1.239z">
                                                </path>
                                            </svg></span></a>
                                </div>
                                <div class="sidebar_treanding_icon">
                                    <div class="ms_tranding_more_icon">
                                        <i class="fas fa-ellipsis-h"></i>
                                    </div>
                                    <ul class="tranding_more_option">
                                        <li><a href="#"><span class="opt_icon"><i
                                                        class="flaticon-playlist"></i></span>Add To playlist</a></li>
                                        <li><a href="#"><span class="opt_icon"><i
                                                        class="flaticon-star"></i></span>favourite</a></li>
                                        <li><a href="#"><span class="opt_icon"><i
                                                        class="flaticon-share"></i></span>share</a></li>

                                        <li><a href="#"><span class="opt_icon"><i
                                                        class="flaticon-trash"></i></span>delete</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="media controls jp_media_playlist">
                        <div class="playlist-player-control align-items-center col-12">
                            <a class="jp-previous" role="button" tabindex="0"><span class="adonis-icon icon-5x"><svg
                                        version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 58 32">
                                        <path
                                            d="M55.064 0.272l-25.2 14.192c-0.555 0.299-0.925 0.876-0.925 1.54s0.371 1.241 0.916 1.535l0.009 0.005c1.336 0.784 23.64 13.344 25.256 14.216 0.265 0.162 0.585 0.258 0.928 0.258 0.986 0 1.787-0.793 1.8-1.777v-28.433c0-0.004 0-0.009 0-0.014 0-0.999-0.809-1.808-1.808-1.808-0.362 0-0.7 0.107-0.983 0.29l0.007-0.004zM26.12 0.272c-1.112 0.624-23.304 13.12-25.192 14.192-0.555 0.299-0.925 0.876-0.925 1.54s0.371 1.241 0.916 1.535l0.009 0.005c1.36 0.8 23.64 13.344 25.248 14.216 0.265 0.161 0.586 0.257 0.928 0.257 0.987 0 1.79-0.792 1.808-1.775l0-0.002v-28.432c0-0.001 0-0.003 0-0.005 0-1.003-0.813-1.816-1.816-1.816-0.362 0-0.7 0.106-0.983 0.289l0.007-0.004z">
                                        </path>
                                    </svg></span>
                            </a>
                            <a class="jp-play fs-4" role="button" tabindex="0">
                                <span class="adonis-icon icon-play icon-2x"><svg version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 32">
                                        <path
                                            d="M27.703 14.461l-24.945-14.187c-0.272-0.174-0.604-0.278-0.96-0.278-0.993 0-1.798 0.805-1.798 1.798 0 0.001 0 0.002 0 0.004v-0 28.434c0.004 0.982 0.801 1.776 1.783 1.776 0.338 0 0.653-0.094 0.922-0.257l-0.008 0.004c1.524-0.869 23.65-13.44 25.006-14.217 0.549-0.303 0.914-0.878 0.914-1.539s-0.366-1.236-0.905-1.534l-0.009-0.005z">
                                        </path>
                                    </svg></span>
                                <span class="adonis-icon icon-pause icon-2x"><svg version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 32">
                                        <path
                                            d="M19.2 0h8c0.884 0 1.6 0.716 1.6 1.6v28.8c0 0.884-0.716 1.6-1.6 1.6h-8c-0.884 0-1.6-0.716-1.6-1.6v-28.8c0-0.884 0.716-1.6 1.6-1.6z">
                                        </path>
                                        <path
                                            d="M1.6 0h8c0.884 0 1.6 0.716 1.6 1.6v28.8c0 0.884-0.716 1.6-1.6 1.6h-8c-0.884 0-1.6-0.716-1.6-1.6v-28.8c0-0.884 0.716-1.6 1.6-1.6z">
                                        </path>
                                    </svg></span>
                            </a>
                            <a class="jp-next" role="button" tabindex="0"><span class="adonis-icon icon-5x"><svg
                                        version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 58 32">
                                        <path
                                            d="M28 14.464l-25.216-14.192c-0.276-0.179-0.614-0.286-0.976-0.286-0.999 0-1.808 0.809-1.808 1.808 0 0.005 0 0.010 0 0.015v-0.001 28.432c0.013 0.985 0.814 1.778 1.8 1.778 0.343 0 0.663-0.096 0.936-0.262l-0.008 0.005c1.6-0.872 23.896-13.432 25.256-14.216 0.559-0.298 0.934-0.877 0.934-1.544 0-0.66-0.367-1.235-0.908-1.531l-0.009-0.005zM56.944 14.464l-25.216-14.192c-0.276-0.179-0.614-0.286-0.976-0.286-0.999 0-1.808 0.809-1.808 1.808 0 0.005 0 0.010 0 0.015v-0.001 28.432c0.013 0.985 0.814 1.778 1.8 1.778 0.343 0 0.663-0.096 0.936-0.262l-0.008 0.005c1.6-0.872 23.888-13.432 25.256-14.216 0.55-0.303 0.917-0.879 0.917-1.54s-0.367-1.237-0.908-1.535l-0.009-0.005z">
                                        </path>
                                    </svg></span></a>
                        </div>
                        <div class="col-8 index4_play_list_bar">
                            <div class="jp-current-time jp-time" role="timer" aria-label="time"></div>
                            <div class="jp-progress jp_progress2">
                                <div class="jp-seek-bar">
                                    <div class="jp-play-bar"></div>
                                </div>
                            </div>
                            <div class="jp-duration" role="timer" aria-label="duration"></div>
                        </div>
                    </div>
                </div>
                <div class="jp-playlist scroll-y">
                    {{-- <ul>
                        <li>&nbsp;</li>
                    </ul> --}}
                    <img src="https://picsum.photos/seed/picsum/280/550" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>
    <!-- playlist wrapper end -->
    <!--custom js files-->
    <script src="{{ asset('assets') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/js/modernizr.js"></script>
    <script src="{{ asset('assets') }}/js/plugin.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.inview.min.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.magnific-popup.js"></script>
    <script src="{{ asset('assets') }}/js/swiper.min.js"></script>
    <script src="{{ asset('assets') }}/js/comboTreePlugin.js"></script>
    <script src="{{ asset('assets') }}/js/mp3/jquery.jplayer.min.js"></script>
    <script src="{{ asset('assets') }}/js/mp3/jplayer.playlist.js"></script>
    <script src="{{ asset('assets') }}/js/owl.carousel.js"></script>
    <script src="{{ asset('assets') }}/js/mp3/player.js"></script>
    <script src="{{ asset('assets') }}/js/custom.js"></script>
    <!-- custom js-->
    <script>
        $(document).ready(function () {
            $('#action_menu_btn').click(function () {
                $('.action_menu').toggle();
            });
            setInterval(loadMessage, 1000);
        });

        $('#btn-send-comment').on('click', function(){
            let user_id = document.getElementById('user_id').value
            let message = document.getElementById('message').value
            console.log('index', user_id, message);
            $.ajax({
                url: location.href + 'store-message',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    user_id: user_id,
                    message: message,
                },
                success: function (data) {
                    document.getElementById('message').value = ''
                    loadMessage()
                }
            })
        })

        function loadMessage(){
            $.ajax({
                url: location.href + 'get-message',
                type: 'GET',
                success: function (data) {
                    let chatBox = document.getElementById('chat-box')
                    chatBox.innerHTML = ''
                    // console.log(data.length);
                    if (data.length !== 0) {
                        data.forEach(msg => {
                            let msgDiv = '';
                            if (msg.user_id == document.getElementById('user_id').value) {
                                msgDiv = document.createElement('div')
                                msgDiv.classList.add('d-flex', 'justify-content-end', 'mb-4')
                                msgDiv.innerHTML = `
                                &nbsp; &nbsp;
                                <div class="img_cont_msg">
                                    <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg"
                                        class="rounded-circle user_img_msg">
                                </div>
                                <div class="msg_cotainer mr-2">
                                    ${msg.chat}
                                    <span class="msg_time">${formatDateTime(msg.created_at)}</span>
                                </div>`
                                chatBox.appendChild(msgDiv)
                            }else{
                                const msgDiv = document.createElement('div')
                                msgDiv.classList.add('d-flex', 'justify-content-start', 'mb-4')
                                msgDiv.innerHTML = `
                                <div class="msg_cotainer_send ml-2">
                                    ${msg.chat}
                                    <span class="msg_time_send">${formatDateTime(msg.created_at)}</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg"
                                        class="rounded-circle user_img_msg">
                                </div>
                                &nbsp; &nbsp;`
                                chatBox.appendChild(msgDiv)
                            }

                        })
                    }
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            })
        }

        setInterval(loadMessage, 1000);

        function formatDateTime(dateTimeString) {
            const date = new Date(dateTimeString);
            const now = new Date();

            // Format time
            let hours = date.getHours();
            const minutes = date.getMinutes();
            const ampm = hours >= 12 ? 'PM' : 'AM';
            hours = hours % 12;
            hours = hours ? hours : 12; // the hour '0' should be '12'
            const formattedMinutes = minutes < 10 ? '0' + minutes : minutes;
            const timeString = hours + ':' + formattedMinutes + ' ' + ampm;

            // Check if the date is today
            const isToday = date.toDateString() === now.toDateString();
            const dayString = isToday ? 'Today' : date.toLocaleDateString();

            return timeString + ', ' + dayString;
        }
    </script>

</body>

</html>
