
<style id="aa-glossy-footer-cards">
#footer_bottom{
    background:linear-gradient(180deg,#111827 0%, #0f172a 100%) !important;
}
#footer_bottom .widgets.cols_4.clearfix{
    display:flex !important;
    flex-wrap:wrap !important;
    gap:24px !important;
    align-items:stretch !important;
}
#footer_bottom .widgets.cols_4.clearfix > aside{
    float:none !important;
    width:calc((100% - 48px) / 3) !important;
    margin:0 !important;
}
.aa-footer-card{
    height:100%;
    border-radius:24px;
    padding:24px 22px;
    background:linear-gradient(180deg, rgba(255,255,255,0.12) 0%, rgba(255,255,255,0.06) 100%);
    border:1px solid rgba(255,255,255,0.14);
    box-shadow:0 20px 40px rgba(0,0,0,.20);
    backdrop-filter:blur(12px);
    -webkit-backdrop-filter:blur(12px);
    position:relative;
    overflow:hidden;
}
.aa-footer-card:before{
    content:"";
    position:absolute;
    right:-45px;
    top:-45px;
    width:130px;
    height:130px;
    border-radius:50%;
    background:rgba(255,167,0,.14);
    pointer-events:none;
}
.aa-footer-card .widget_title{margin-bottom:18px !important;}
.aa-footer-card .widget_title h3{
    margin:0 !important;
    color:#ffffff !important;
    font-size:22px !important;
    line-height:1.2 !important;
}
.aa-footer-card, .aa-footer-card p, .aa-footer-card td, .aa-footer-card li, .aa-footer-card a{
    color:rgba(255,255,255,.92) !important;
}
.aa-footer-card a:hover{color:#ffd36a !important;}
.aa-footer-card .table_working_hours{width:100%; margin:0;}
.aa-footer-card .table_working_hours tr{border-bottom:1px solid rgba(255,255,255,.10);}
.aa-footer-card .table_working_hours tr:last-child{border-bottom:none;}
.aa-footer-card .table_working_hours td{padding:10px 0 !important; vertical-align:top;}
.aa-footer-card .table_working_hours .day_label{font-weight:700 !important;}
.aa-footer-card .table_working_hours .closed span{color:#ffd36a !important;}
.aa-footer-contact-list{display:flex; flex-direction:column; gap:14px;}
.aa-footer-contact-item{
    display:flex; align-items:flex-start; gap:12px;
    padding:12px 14px; border-radius:16px; background:rgba(255,255,255,.06);
}
.aa-footer-contact-item i{width:18px; margin-top:2px; color:#ffd36a;}
.aa-footer-card .socials_widget_wrapper .widget_socials{
    display:flex !important; flex-wrap:wrap !important; gap:12px !important; max-width:none !important;
}
.aa-footer-card .socials_widget_wrapper .widget_socials li{margin:0 !important;}
.aa-footer-card .socials_widget_wrapper .widget_socials li .front a,
.aa-footer-card .socials_widget_wrapper .widget_socials li .back a{
    width:48px !important; height:48px !important; border-radius:14px !important;
    background:rgba(255,255,255,.10) !important;
    display:flex !important; align-items:center !important; justify-content:center !important; box-shadow:none !important;
}
.aa-footer-card .socials_widget_wrapper .widget_socials li .front a i,
.aa-footer-card .socials_widget_wrapper .widget_socials li .back a i{
    color:#ffffff !important; font-size:18px !important;
}
.aa-footer-card .socials_widget_wrapper .widget_socials li:hover .front a,
.aa-footer-card .socials_widget_wrapper .widget_socials li:hover .back a{
    background:#ffa700 !important;
}
@media (max-width: 991px){
    #footer_bottom .widgets.cols_4.clearfix > aside{width:100% !important;}
    .aa-footer-card{padding:20px 18px; border-radius:20px;}
}

</style>


<style id="aa-footer-grid-fixes">
#aa-custom-footer .aa-footer-grid,
.footer_wrapper .aa-footer-grid{
    display:flex !important;
    flex-wrap:nowrap !important;
    gap:28px !important;
    align-items:stretch !important;
    justify-content:space-between !important;
}
#aa-custom-footer.widgets,
#aa-custom-footer .widgets,
.footer_wrapper .widgets.aa-footer-grid{
    width:100% !important;
}
#aa-custom-footer .aa-footer-grid > aside,
.footer_wrapper .aa-footer-grid > aside{
    flex:1 1 0 !important;
    width:auto !important;
    max-width:none !important;
    margin:0 !important;
    min-height:100% !important;
    float:none !important;
    display:block !important;
}
#aa-custom-footer .aa-footer-card,
.footer_wrapper .aa-footer-card{
    height:100% !important;
    box-sizing:border-box;
}
#aa-custom-footer .socials_widget_wrapper .widget_socials,
.footer_wrapper .socials_widget_wrapper .widget_socials{
    max-width:none !important;
    width:100% !important;
}
.footer_wrapper .aa-footer-grid > aside.widget{
    clear:none !important;
}
.footer_wrapper .widgets.cols_4 > aside{
    float:none !important;
}
.footer_wrapper .socials_widget_wrapper{
    max-width:none !important;
}
@media (max-width: 991px){
    #aa-custom-footer .aa-footer-grid,
    .footer_wrapper .aa-footer-grid{
        display:flex !important;
        flex-direction:column !important;
        gap:18px !important;
    }
}
/* ✅ ONLY MOBILE FIX */
@media (max-width: 768px){

    #footer_bottom .widgets.cols_4.clearfix,
    #aa-custom-footer .widgets.cols_4.clearfix,
    .footer_wrapper .widgets.cols_4.clearfix{
        display: flex !important;
        flex-direction: column !important;  /* niche niche */
        gap: 20px !important;
    }

    #footer_bottom .widgets.cols_4.clearfix > aside,
    #aa-custom-footer .widgets.cols_4.clearfix > aside,
    .footer_wrapper .widgets.cols_4.clearfix > aside{
        width: 100% !important;
        margin: 0 !important;
    }

    .aa-footer-card{
        width: 100% !important;
        padding: 18px !important;
        border-radius: 18px !important;
    }

}
</style>


<div class="container" id="aa-custom-footer">
    <div class="widgets cols_4 clearfix aa-footer-grid">
        <aside id="working_hours-4" class="widget widget_working_hours aa-footer-card" style="margin: 0px 0px 10px 10px !important;padding: 10px;">
            <div class="widget_title"><h3>Business Hours</h3></div>
            <table class="table_working_hours">
                <tbody>
                    <tr class="opened"><td class="day_label h6 normal_font">Monday</td><td class="day_value h6 normal_font">10 am - 6.00 pm</td></tr>
                    <tr class="opened"><td class="day_label h6 normal_font">Tuesday</td><td class="day_value h6 normal_font">10 am - 6.00 pm</td></tr>
                    <tr class="opened"><td class="day_label h6 normal_font">Wednesday</td><td class="day_value h6 normal_font">10 am - 6.00 pm</td></tr>
                    <tr class="opened"><td class="day_label h6 normal_font">Thursday</td><td class="day_value h6 normal_font">10 am - 6.00 pm</td></tr>
                    <tr class="opened"><td class="day_label h6 normal_font">Friday</td><td class="day_value h6 normal_font">10 am - 6.00 pm</td></tr>
                    <tr class="opened"><td class="day_label h6 normal_font">Saturday</td><td class="day_value h6 normal_font">10 am - 6.00 pm</td></tr>
                    <tr class="closed"><td class="day_label h6 normal_font">Sunday</td><td class="day_value closed h6 normal_font"><span>Closed</span></td></tr>
                </tbody>
            </table>
        </aside>
        <aside id="stm_text-3" class="widget stm_wp_widget_text aa-footer-card" style="padding:10px">
            <div class="widget_title"><h3>Contact Us</h3></div>
            <div class="textwidget">
                <div class="aa-footer-contact-list">
                    <div class="aa-footer-contact-item"><i class="fa fa-phone"></i><div>+880 1319904015</div></div>
                    <div class="aa-footer-contact-item"><i class="fa fa-envelope"></i><div>info@ayansacademy.com</div></div>
                </div>
            </div>
        </aside>
        <aside id="socials-2" class="widget widget_socials aa-footer-card" style="padding:10px">
            <div class="widget_title"><h3>Social Network</h3></div>
            <div class="socials_widget_wrapper"><ul class="widget_socials list-unstyled clearfix"><li class="simple_flip_container">
                <div class="simple_flipper"><div class="front"><a href="https://www.facebook.com/share/1c8YP6kvMn/" target="_blank" rel="noopener" class="facebook"><i class="fab fa-facebook"></i></a></div><div class="back"><a href="https://www.facebook.com/share/1c8YP6kvMn/" target="_blank" rel="noopener"><i class="fab fa-facebook"></i></a></div></div></li><li class="simple_flip_container">
                <div class="simple_flipper"><div class="front"><a href="https://x.com/ayansacademy" target="_blank" rel="noopener" class="twitter"><i class="fa-brands fa-x-twitter"></i></a></div><div class="back"><a href="https://x.com/ayansacademy" target="_blank" rel="noopener"><i class="fa-brands fa-x-twitter"></i></a></div></div></li><li class="simple_flip_container">
                <div class="simple_flipper"><div class="front"><a href="https://youtube.com/@ayansacademy?si=lAH25hFyQXTg2Hcf" target="_blank" rel="noopener" class="youtube"><i class="fab fa-youtube"></i></a></div><div class="back"><a href="https://youtube.com/@ayansacademy?si=lAH25hFyQXTg2Hcf" target="_blank" rel="noopener"><i class="fab fa-youtube"></i></a></div></div></li><li class="simple_flip_container">
                <div class="simple_flipper"><div class="front"><a href="https://www.instagram.com/ayans_academy?igsh=amdrYXJ5eG81cnZo" target="_blank" rel="noopener" class="instagram"><i class="fab fa-instagram"></i></a></div><div class="back"><a href="https://www.instagram.com/ayans_academy?igsh=amdrYXJ5eG81cnZo" target="_blank" rel="noopener"><i class="fab fa-instagram"></i></a></div></div></li><li class="simple_flip_container">
                <div class="simple_flipper"><div class="front"><a href="https://www.linkedin.com/company/ayan-s-academy/" target="_blank" rel="noopener" class="linkedin"><i class="fab fa-linkedin"></i></a></div><div class="back"><a href="https://www.linkedin.com/company/ayan-s-academy/" target="_blank" rel="noopener"><i class="fab fa-linkedin"></i></a></div></div></li></ul></div>
        </aside>
    </div>
</div>

<div id="footer_copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-8">
                    <div class="clearfix">
                                                    <div class="pull-left">
                                                                                                        <noscript></noscript>
                                                            </div>
                                                                            <div class="copyright_text">Copyright ©2026 Ayan's Academy All Rights Reserved</div>
                                            </div>
                </div>
                <div class="col-md-6 col-sm-4">
                    <div class="clearfix">
                        <div class="pull-right xs-pull-left">
                                                                                    <!-- Header top bar Socials -->
                                                            <div class="pull-right">
                                    <div class="copyright_socials">
                                        <ul class="clearfix">
                                            <li><a href="https://www.facebook.com/share/1c8YP6kvMn/" target="_blank" rel="noopener"><i class="fab fa-facebook"></i></a></li><li><a href="https://www.linkedin.com/company/ayan-s-academy/" target="_blank" rel="noopener"><i class="fab fa-linkedin"></i></a></li><li><a href="https://www.instagram.com/ayans_academy?igsh=amdrYXJ5eG81cnZo" target="_blank" rel="noopener"><i class="fab fa-instagram"></i></a></li><li><a href="https://x.com/ayansacademy" target="_blank" rel="noopener"><i class="fa-brands fa-x-twitter"></i></a></li><li><a href="https://youtube.com/@ayansacademy?si=lAH25hFyQXTg2Hcf" target="_blank" rel="noopener"><i class="fab fa-youtube"></i></a></li>                                        </ul>
                                    </div>
                                </div>
                                                    </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
            </div>
        </footer>


    <!-- Searchform -->
<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body heading_font">
                <div class="search-title">Search</div>

            </div>

        </div>
    </div>
</div>
    <script src="data:text/javascript;base64,CiAgICAgICAgdmFyIGNmN19jdXN0b21faW1hZ2UgPSAnaHR0cHM6Ly9wZWNwdGUuY29tL3dwLWNvbnRlbnQvdGhlbWVzL21hc3RlcnN0dWR5L2Fzc2V0cy9pbWcvJzsKICAgICAgICB2YXIgZGF5c1N0ciA9ICdEYXlzJzsKICAgICAgICB2YXIgaG91cnNTdHIgPSAnSG91cnMnOwogICAgICAgIHZhciBtaW51dGVzU3RyID0gJ01pbnV0ZXMnOwogICAgICAgIHZhciBzZWNvbmRzU3RyID0gJ1NlY29uZHMnOwogICAg" data-rocket-status="executed">
        var cf7_custom_image = 'https://pecpte.com/wp-content/themes/masterstudy/assets/img/';
        var daysStr = 'Days';
        var hoursStr = 'Hours';
        var minutesStr = 'Minutes';
        var secondsStr = 'Seconds';
    </script>


    <script type="text/javascript" src="data:text/javascript;base64,Ci8qIDwhW0NEQVRBWyAqLwp2YXIgRkNfVmFsaWRhdGlvbl8yID0geyJpc19pbnZhbGlkIjoiSW52YWxpZCIsIm1pbl9jaGFyIjoiTWluIFt4XSBjaGFyYWN0ZXJzIHJlcXVpcmVkIiwibWF4X2NoYXIiOiJNYXggW3hdIGNoYXJhY3RlcnMgYWxsb3dlZCIsIm1heF9maWxlcyI6InRlc3QiLCJtYXhfZmlsZV9zaXplIjoiRmlsZXMgYmlnZ2VyIHRoYW4gW3hdIE1CIG5vdCBhbGxvd2VkIiwiYWxsb3dfZW1haWwiOiJJbnZhbGlkIEVtYWlsIiwiYWxsb3dfdXJsIjoiSW52YWxpZCBVUkwiLCJhbGxvd19yZWdleHAiOiJJbnZhbGlkIEV4cHJlc3Npb24iLCJhbGxvd19hbHBoYWJldHMiOiJPbmx5IGFscGhhYmV0cyIsImFsbG93X251bWJlcnMiOiJPbmx5IG51bWJlcnMiLCJhbGxvd19hbHBoYW51bWVyaWMiOiJTaG91bGQgYmUgYWxwaGFudW1lcmljIiwiZmFpbGVkIjoiUGxlYXNlIGNvcnJlY3QgdGhlIGVycm9ycyBhbmQgdHJ5IGFnYWluIiwiaXNfcmVxdWlyZWQiOiJNaXNzaW5nICEifTsKLyogXV0+ICovCg==" data-rocket-status="executed">
/* <![CDATA[ */
var FC_Validation_2 = {"is_invalid":"Invalid","min_char":"Min [x] characters required","max_char":"Max [x] characters allowed","max_files":"test","max_file_size":"Files bigger than [x] MB not allowed","allow_email":"Invalid Email","allow_url":"Invalid URL","allow_regexp":"Invalid Expression","allow_alphabets":"Only alphabets","allow_numbers":"Only numbers","allow_alphanumeric":"Should be alphanumeric","failed":"Please correct the errors and try again","is_required":"Missing !"};
/* ]]> */
</script>

<div class="joinchat joinchat--right joinchat--show joinchat--tooltip" data-settings="{&quot;telephone&quot;:&quot;880 1319904015&quot;,&quot;mobile_only&quot;:false,&quot;button_delay&quot;:2,&quot;whatsapp_web&quot;:true,&quot;message_views&quot;:2,&quot;message_delay&quot;:3,&quot;message_badge&quot;:false,&quot;message_send&quot;:&quot;&quot;,&quot;message_hash&quot;:&quot;&quot;}">
    <div class="joinchat__button">
        <div class="joinchat__button__open"></div>
                                <div class="joinchat__button__sendtext">Open chat</div>
                                    </div>
        <svg height="0" width="0"><defs><clippath id="joinchat__message__peak"><path d="M17 25V0C17 12.877 6.082 14.9 1.031 15.91c-1.559.31-1.179 2.272.004 2.272C9.609 18.182 17 18.088 17 25z"></path></clippath></defs></svg>
</div>
<script type="text/html" id="wpb-modifications"></script>    <script type="text/javascript" src="data:text/javascript;base64,CgkJKGZ1bmN0aW9uICgpIHsKCQkJdmFyIGMgPSBkb2N1bWVudC5ib2R5LmNsYXNzTmFtZTsKCQkJYyA9IGMucmVwbGFjZSgvd29vY29tbWVyY2Utbm8tanMvLCAnd29vY29tbWVyY2UtanMnKTsKCQkJZG9jdW1lbnQuYm9keS5jbGFzc05hbWUgPSBjOwoJCX0pKCk7Cgk=" data-rocket-status="executed">
        (function () {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })();
    </script>
    <link data-minify="1" rel="stylesheet" id="stm-courses_grid-style_1-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/style_1.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="stm-lms-courses-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/courses.css" type="text/css" media="all">
<link rel="stylesheet" id="stm-lms-courses/style_1-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/style_1(1).css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="stm-lms-wishlist-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/wishlist.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="stm-featured_products-style_1-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/style_1(2).css" type="text/css" media="all">

<link data-minify="1" rel="stylesheet" id="stm-stats_counter-style_1-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/style_1(3).css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="stm-countdown-style_1-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/style_1(4).css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="fc-captcha-addon-css-main-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/captcha_form_main.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="stm-event_grid-style_1-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/style_1(5).css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="stm-color_separator-style_1-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/style_1(6).css" type="text/css" media="all">
<style id="stm-color_separator-style_1-inline-css" type="text/css">

    .module__cafc4ce9f11bc27b53b4b6553925c990 .triangled_colored_separator {
        background-color: #fdc735 !important;
    }
    .module__cafc4ce9f11bc27b53b4b6553925c990 .triangled_colored_separator .triangle {
        border-bottom-color: #fdc735 !important;
    }

</style>
<link rel="stylesheet" id="vc_animate-css-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/animate.min.css" type="text/css" media="all">
<link rel="stylesheet" id="vc_font_awesome_5_shims-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/v4-shims.min.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="vc_font_awesome_5-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/all.min.css" type="text/css" media="all">
<link rel="stylesheet" id="owl.carousel-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/owl.carousel.min.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="stm-testimonials-style_1-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/style_1(7).css" type="text/css" media="all">
<link rel="stylesheet" id="vc_carousel_css-css" href="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/vc_carousel.min.css" type="text/css" media="all">
<script type="text/javascript" id="masterstudy-bootstrap-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/bootstrap.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="masterstudy-bootstrap-custom-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/ms-bootstrap-custom.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="jetpack-photon-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/photon.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="stm_jquery.countdown-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/jquery.countdown.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="stm_zoom_main-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/main.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="lms_countdown.js-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/countdown.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="js-cookie-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/js.cookie.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" id="woocommerce-js-extra">
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type="text/javascript" data-minify="1" id="woocommerce-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/woocommerce.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" id="wc-cart-fragments-js-extra">
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_b3a341fc15efac276fc5ebbe2f55d921","fragment_name":"wc_fragments_b3a341fc15efac276fc5ebbe2f55d921","request_timeout":"5000"};
/* ]]> */
</script>
<script type="text/javascript" data-minify="1" id="wc-cart-fragments-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/cart-fragments.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" id="wc-cart-fragments-js-after" src="data:text/javascript;base64,d2luZG93LmFkZEV2ZW50TGlzdGVuZXIoJ0RPTUNvbnRlbnRMb2FkZWQnLCBmdW5jdGlvbigpIHsKLyogPCFbQ0RBVEFbICovCgkJalF1ZXJ5KCAnYm9keScgKS5iaW5kKCAnd2NfZnJhZ21lbnRzX3JlZnJlc2hlZCcsIGZ1bmN0aW9uKCkgewoJCQl2YXIgamV0cGFja0xhenlJbWFnZXNMb2FkRXZlbnQ7CgkJCXRyeSB7CgkJCQlqZXRwYWNrTGF6eUltYWdlc0xvYWRFdmVudCA9IG5ldyBFdmVudCggJ2pldHBhY2stbGF6eS1pbWFnZXMtbG9hZCcsIHsKCQkJCQlidWJibGVzOiB0cnVlLAoJCQkJCWNhbmNlbGFibGU6IHRydWUKCQkJCX0gKTsKCQkJfSBjYXRjaCAoIGUgKSB7CgkJCQlqZXRwYWNrTGF6eUltYWdlc0xvYWRFdmVudCA9IGRvY3VtZW50LmNyZWF0ZUV2ZW50KCAnRXZlbnQnICkKCQkJCWpldHBhY2tMYXp5SW1hZ2VzTG9hZEV2ZW50LmluaXRFdmVudCggJ2pldHBhY2stbGF6eS1pbWFnZXMtbG9hZCcsIHRydWUsIHRydWUgKTsKCQkJfQoJCQlqUXVlcnkoICdib2R5JyApLmdldCggMCApLmRpc3BhdGNoRXZlbnQoIGpldHBhY2tMYXp5SW1hZ2VzTG9hZEV2ZW50ICk7CgkJfSApOwoJCQovKiBdXT4gKi8KfSk7" data-rocket-status="executed">window.addEventListener('DOMContentLoaded', function() {
/* <![CDATA[ */
        jQuery( 'body' ).bind( 'wc_fragments_refreshed', function() {
            var jetpackLazyImagesLoadEvent;
            try {
                jetpackLazyImagesLoadEvent = new Event( 'jetpack-lazy-images-load', {
                    bubbles: true,
                    cancelable: true
                } );
            } catch ( e ) {
                jetpackLazyImagesLoadEvent = document.createEvent( 'Event' )
                jetpackLazyImagesLoadEvent.initEvent( 'jetpack-lazy-images-load', true, true );
            }
            jQuery( 'body' ).get( 0 ).dispatchEvent( jetpackLazyImagesLoadEvent );
        } );

/* ]]> */
});</script>
<script type="text/javascript" id="rocket-browser-checker-js-after" src="data:text/javascript;base64,Ci8qIDwhW0NEQVRBWyAqLwoidXNlIHN0cmljdCI7dmFyIF9jcmVhdGVDbGFzcz1mdW5jdGlvbigpe2Z1bmN0aW9uIGRlZmluZVByb3BlcnRpZXModGFyZ2V0LHByb3BzKXtmb3IodmFyIGk9MDtpPHByb3BzLmxlbmd0aDtpKyspe3ZhciBkZXNjcmlwdG9yPXByb3BzW2ldO2Rlc2NyaXB0b3IuZW51bWVyYWJsZT1kZXNjcmlwdG9yLmVudW1lcmFibGV8fCExLGRlc2NyaXB0b3IuY29uZmlndXJhYmxlPSEwLCJ2YWx1ZSJpbiBkZXNjcmlwdG9yJiYoZGVzY3JpcHRvci53cml0YWJsZT0hMCksT2JqZWN0LmRlZmluZVByb3BlcnR5KHRhcmdldCxkZXNjcmlwdG9yLmtleSxkZXNjcmlwdG9yKX19cmV0dXJuIGZ1bmN0aW9uKENvbnN0cnVjdG9yLHByb3RvUHJvcHMsc3RhdGljUHJvcHMpe3JldHVybiBwcm90b1Byb3BzJiZkZWZpbmVQcm9wZXJ0aWVzKENvbnN0cnVjdG9yLnByb3RvdHlwZSxwcm90b1Byb3BzKSxzdGF0aWNQcm9wcyYmZGVmaW5lUHJvcGVydGllcyhDb25zdHJ1Y3RvcixzdGF0aWNQcm9wcyksQ29uc3RydWN0b3J9fSgpO2Z1bmN0aW9uIF9jbGFzc0NhbGxDaGVjayhpbnN0YW5jZSxDb25zdHJ1Y3Rvcil7aWYoIShpbnN0YW5jZSBpbnN0YW5jZW9mIENvbnN0cnVjdG9yKSl0aHJvdyBuZXcgVHlwZUVycm9yKCJDYW5ub3QgY2FsbCBhIGNsYXNzIGFzIGEgZnVuY3Rpb24iKX12YXIgUm9ja2V0QnJvd3NlckNvbXBhdGliaWxpdHlDaGVja2VyPWZ1bmN0aW9uKCl7ZnVuY3Rpb24gUm9ja2V0QnJvd3NlckNvbXBhdGliaWxpdHlDaGVja2VyKG9wdGlvbnMpe19jbGFzc0NhbGxDaGVjayh0aGlzLFJvY2tldEJyb3dzZXJDb21wYXRpYmlsaXR5Q2hlY2tlciksdGhpcy5wYXNzaXZlU3VwcG9ydGVkPSExLHRoaXMuX2NoZWNrUGFzc2l2ZU9wdGlvbih0aGlzKSx0aGlzLm9wdGlvbnM9ISF0aGlzLnBhc3NpdmVTdXBwb3J0ZWQmJm9wdGlvbnN9cmV0dXJuIF9jcmVhdGVDbGFzcyhSb2NrZXRCcm93c2VyQ29tcGF0aWJpbGl0eUNoZWNrZXIsW3trZXk6Il9jaGVja1Bhc3NpdmVPcHRpb24iLHZhbHVlOmZ1bmN0aW9uKHNlbGYpe3RyeXt2YXIgb3B0aW9ucz17Z2V0IHBhc3NpdmUoKXtyZXR1cm4hKHNlbGYucGFzc2l2ZVN1cHBvcnRlZD0hMCl9fTt3aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcigidGVzdCIsbnVsbCxvcHRpb25zKSx3aW5kb3cucmVtb3ZlRXZlbnRMaXN0ZW5lcigidGVzdCIsbnVsbCxvcHRpb25zKX1jYXRjaChlcnIpe3NlbGYucGFzc2l2ZVN1cHBvcnRlZD0hMX19fSx7a2V5OiJpbml0UmVxdWVzdElkbGVDYWxsYmFjayIsdmFsdWU6ZnVuY3Rpb24oKXshMSBpbiB3aW5kb3cmJih3aW5kb3cucmVxdWVzdElkbGVDYWxsYmFjaz1mdW5jdGlvbihjYil7dmFyIHN0YXJ0PURhdGUubm93KCk7cmV0dXJuIHNldFRpbWVvdXQoZnVuY3Rpb24oKXtjYih7ZGlkVGltZW91dDohMSx0aW1lUmVtYWluaW5nOmZ1bmN0aW9uKCl7cmV0dXJuIE1hdGgubWF4KDAsNTAtKERhdGUubm93KCktc3RhcnQpKX19KX0sMSl9KSwhMSBpbiB3aW5kb3cmJih3aW5kb3cuY2FuY2VsSWRsZUNhbGxiYWNrPWZ1bmN0aW9uKGlkKXtyZXR1cm4gY2xlYXJUaW1lb3V0KGlkKX0pfX0se2tleToiaXNEYXRhU2F2ZXJNb2RlT24iLHZhbHVlOmZ1bmN0aW9uKCl7cmV0dXJuImNvbm5lY3Rpb24iaW4gbmF2aWdhdG9yJiYhMD09PW5hdmlnYXRvci5jb25uZWN0aW9uLnNhdmVEYXRhfX0se2tleToic3VwcG9ydHNMaW5rUHJlZmV0Y2giLHZhbHVlOmZ1bmN0aW9uKCl7dmFyIGVsZW09ZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgibGluayIpO3JldHVybiBlbGVtLnJlbExpc3QmJmVsZW0ucmVsTGlzdC5zdXBwb3J0cyYmZWxlbS5yZWxMaXN0LnN1cHBvcnRzKCJwcmVmZXRjaCIpJiZ3aW5kb3cuSW50ZXJzZWN0aW9uT2JzZXJ2ZXImJiJpc0ludGVyc2VjdGluZyJpbiBJbnRlcnNlY3Rpb25PYnNlcnZlckVudHJ5LnByb3RvdHlwZX19LHtrZXk6ImlzU2xvd0Nvbm5lY3Rpb24iLHZhbHVlOmZ1bmN0aW9uKCl7cmV0dXJuImNvbm5lY3Rpb24iaW4gbmF2aWdhdG9yJiYiZWZmZWN0aXZlVHlwZSJpbiBuYXZpZ2F0b3IuY29ubmVjdGlvbiYmKCIyZyI9PT1uYXZpZ2F0b3IuY29ubmVjdGlvbi5lZmZlY3RpdmVUeXBlfHwic2xvdy0yZyI9PT1uYXZpZ2F0b3IuY29ubmVjdGlvbi5lZmZlY3RpdmVUeXBlKX19XSksUm9ja2V0QnJvd3NlckNvbXBhdGliaWxpdHlDaGVja2VyfSgpOwovKiBdXT4gKi8K" data-rocket-status="executed">
/* <![CDATA[ */
"use strict";var _createClass=function(){function defineProperties(target,props){for(var i=0;i<props.length;i++){var descriptor=props[i];descriptor.enumerable=descriptor.enumerable||!1,descriptor.configurable=!0,"value"in descriptor&&(descriptor.writable=!0),Object.defineProperty(target,descriptor.key,descriptor)}}return function(Constructor,protoProps,staticProps){return protoProps&&defineProperties(Constructor.prototype,protoProps),staticProps&&defineProperties(Constructor,staticProps),Constructor}}();function _classCallCheck(instance,Constructor){if(!(instance instanceof Constructor))throw new TypeError("Cannot call a class as a function")}var RocketBrowserCompatibilityChecker=function(){function RocketBrowserCompatibilityChecker(options){_classCallCheck(this,RocketBrowserCompatibilityChecker),this.passiveSupported=!1,this._checkPassiveOption(this),this.options=!!this.passiveSupported&&options}return _createClass(RocketBrowserCompatibilityChecker,[{key:"_checkPassiveOption",value:function(self){try{var options={get passive(){return!(self.passiveSupported=!0)}};window.addEventListener("test",null,options),window.removeEventListener("test",null,options)}catch(err){self.passiveSupported=!1}}},{key:"initRequestIdleCallback",value:function(){!1 in window&&(window.requestIdleCallback=function(cb){var start=Date.now();return setTimeout(function(){cb({didTimeout:!1,timeRemaining:function(){return Math.max(0,50-(Date.now()-start))}})},1)}),!1 in window&&(window.cancelIdleCallback=function(id){return clearTimeout(id)})}},{key:"isDataSaverModeOn",value:function(){return"connection"in navigator&&!0===navigator.connection.saveData}},{key:"supportsLinkPrefetch",value:function(){var elem=document.createElement("link");return elem.relList&&elem.relList.supports&&elem.relList.supports("prefetch")&&window.IntersectionObserver&&"isIntersecting"in IntersectionObserverEntry.prototype}},{key:"isSlowConnection",value:function(){return"connection"in navigator&&"effectiveType"in navigator.connection&&("2g"===navigator.connection.effectiveType||"slow-2g"===navigator.connection.effectiveType)}}]),RocketBrowserCompatibilityChecker}();
/* ]]> */
</script>
<script type="text/javascript" id="rocket-preload-links-js-extra">
/* <![CDATA[ */
var RocketPreloadLinksConfig = {"excludeUris":"\/(?:.+\/)?feed(?:\/(?:.+\/?)?)?$|\/(?:.+\/)?embed\/|\/checkout\/??(.*)|\/cart\/?|\/wc-api\/v(.*)|\/(index.php\/)?(.*)wp-json(\/.*|$)|\/refer\/|\/go\/|\/recommend\/|\/recommends\/","usesTrailingSlash":"1","imageExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php","fileExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php|html|htm","siteUrl":"https:\/\/pecpte.com","onHoverDelay":"100","rateThrottle":"3"};
/* ]]> */
</script>
<script type="text/javascript" id="rocket-preload-links-js-after" src="data:text/javascript;base64,Ci8qIDwhW0NEQVRBWyAqLwooZnVuY3Rpb24oKSB7CiJ1c2Ugc3RyaWN0Ijt2YXIgcj0iZnVuY3Rpb24iPT10eXBlb2YgU3ltYm9sJiYic3ltYm9sIj09dHlwZW9mIFN5bWJvbC5pdGVyYXRvcj9mdW5jdGlvbihlKXtyZXR1cm4gdHlwZW9mIGV9OmZ1bmN0aW9uKGUpe3JldHVybiBlJiYiZnVuY3Rpb24iPT10eXBlb2YgU3ltYm9sJiZlLmNvbnN0cnVjdG9yPT09U3ltYm9sJiZlIT09U3ltYm9sLnByb3RvdHlwZT8ic3ltYm9sIjp0eXBlb2YgZX0sZT1mdW5jdGlvbigpe2Z1bmN0aW9uIGkoZSx0KXtmb3IodmFyIG49MDtuPHQubGVuZ3RoO24rKyl7dmFyIGk9dFtuXTtpLmVudW1lcmFibGU9aS5lbnVtZXJhYmxlfHwhMSxpLmNvbmZpZ3VyYWJsZT0hMCwidmFsdWUiaW4gaSYmKGkud3JpdGFibGU9ITApLE9iamVjdC5kZWZpbmVQcm9wZXJ0eShlLGkua2V5LGkpfX1yZXR1cm4gZnVuY3Rpb24oZSx0LG4pe3JldHVybiB0JiZpKGUucHJvdG90eXBlLHQpLG4mJmkoZSxuKSxlfX0oKTtmdW5jdGlvbiBpKGUsdCl7aWYoIShlIGluc3RhbmNlb2YgdCkpdGhyb3cgbmV3IFR5cGVFcnJvcigiQ2Fubm90IGNhbGwgYSBjbGFzcyBhcyBhIGZ1bmN0aW9uIil9dmFyIHQ9ZnVuY3Rpb24oKXtmdW5jdGlvbiBuKGUsdCl7aSh0aGlzLG4pLHRoaXMuYnJvd3Nlcj1lLHRoaXMuY29uZmlnPXQsdGhpcy5vcHRpb25zPXRoaXMuYnJvd3Nlci5vcHRpb25zLHRoaXMucHJlZmV0Y2hlZD1uZXcgU2V0LHRoaXMuZXZlbnRUaW1lPW51bGwsdGhpcy50aHJlc2hvbGQ9MTExMSx0aGlzLm51bU9uSG92ZXI9MH1yZXR1cm4gZShuLFt7a2V5OiJpbml0Iix2YWx1ZTpmdW5jdGlvbigpeyF0aGlzLmJyb3dzZXIuc3VwcG9ydHNMaW5rUHJlZmV0Y2goKXx8dGhpcy5icm93c2VyLmlzRGF0YVNhdmVyTW9kZU9uKCl8fHRoaXMuYnJvd3Nlci5pc1Nsb3dDb25uZWN0aW9uKCl8fCh0aGlzLnJlZ2V4PXtleGNsdWRlVXJpczpSZWdFeHAodGhpcy5jb25maWcuZXhjbHVkZVVyaXMsImkiKSxpbWFnZXM6UmVnRXhwKCIuKCIrdGhpcy5jb25maWcuaW1hZ2VFeHQrIikkIiwiaSIpLGZpbGVFeHQ6UmVnRXhwKCIuKCIrdGhpcy5jb25maWcuZmlsZUV4dCsiKSQiLCJpIil9LHRoaXMuX2luaXRMaXN0ZW5lcnModGhpcykpfX0se2tleToiX2luaXRMaXN0ZW5lcnMiLHZhbHVlOmZ1bmN0aW9uKGUpey0xPHRoaXMuY29uZmlnLm9uSG92ZXJEZWxheSYmZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcigibW91c2VvdmVyIixlLmxpc3RlbmVyLmJpbmQoZSksZS5saXN0ZW5lck9wdGlvbnMpLGRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoIm1vdXNlZG93biIsZS5saXN0ZW5lci5iaW5kKGUpLGUubGlzdGVuZXJPcHRpb25zKSxkb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKCJ0b3VjaHN0YXJ0IixlLmxpc3RlbmVyLmJpbmQoZSksZS5saXN0ZW5lck9wdGlvbnMpfX0se2tleToibGlzdGVuZXIiLHZhbHVlOmZ1bmN0aW9uKGUpe3ZhciB0PWUudGFyZ2V0LmNsb3Nlc3QoImEiKSxuPXRoaXMuX3ByZXBhcmVVcmwodCk7aWYobnVsbCE9PW4pc3dpdGNoKGUudHlwZSl7Y2FzZSJtb3VzZWRvd24iOmNhc2UidG91Y2hzdGFydCI6dGhpcy5fYWRkUHJlZmV0Y2hMaW5rKG4pO2JyZWFrO2Nhc2UibW91c2VvdmVyIjp0aGlzLl9lYXJseVByZWZldGNoKHQsbiwibW91c2VvdXQiKX19fSx7a2V5OiJfZWFybHlQcmVmZXRjaCIsdmFsdWU6ZnVuY3Rpb24odCxlLG4pe3ZhciBpPXRoaXMscj1zZXRUaW1lb3V0KGZ1bmN0aW9uKCl7aWYocj1udWxsLDA9PT1pLm51bU9uSG92ZXIpc2V0VGltZW91dChmdW5jdGlvbigpe3JldHVybiBpLm51bU9uSG92ZXI9MH0sMWUzKTtlbHNlIGlmKGkubnVtT25Ib3Zlcj5pLmNvbmZpZy5yYXRlVGhyb3R0bGUpcmV0dXJuO2kubnVtT25Ib3ZlcisrLGkuX2FkZFByZWZldGNoTGluayhlKX0sdGhpcy5jb25maWcub25Ib3ZlckRlbGF5KTt0LmFkZEV2ZW50TGlzdGVuZXIobixmdW5jdGlvbiBlKCl7dC5yZW1vdmVFdmVudExpc3RlbmVyKG4sZSx7cGFzc2l2ZTohMH0pLG51bGwhPT1yJiYoY2xlYXJUaW1lb3V0KHIpLHI9bnVsbCl9LHtwYXNzaXZlOiEwfSl9fSx7a2V5OiJfYWRkUHJlZmV0Y2hMaW5rIix2YWx1ZTpmdW5jdGlvbihpKXtyZXR1cm4gdGhpcy5wcmVmZXRjaGVkLmFkZChpLmhyZWYpLG5ldyBQcm9taXNlKGZ1bmN0aW9uKGUsdCl7dmFyIG49ZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgibGluayIpO24ucmVsPSJwcmVmZXRjaCIsbi5ocmVmPWkuaHJlZixuLm9ubG9hZD1lLG4ub25lcnJvcj10LGRvY3VtZW50LmhlYWQuYXBwZW5kQ2hpbGQobil9KS5jYXRjaChmdW5jdGlvbigpe30pfX0se2tleToiX3ByZXBhcmVVcmwiLHZhbHVlOmZ1bmN0aW9uKGUpe2lmKG51bGw9PT1lfHwib2JqZWN0IiE9PSh2b2lkIDA9PT1lPyJ1bmRlZmluZWQiOnIoZSkpfHwhMSBpbiBlfHwtMT09PVsiaHR0cDoiLCJodHRwczoiXS5pbmRleE9mKGUucHJvdG9jb2wpKXJldHVybiBudWxsO3ZhciB0PWUuaHJlZi5zdWJzdHJpbmcoMCx0aGlzLmNvbmZpZy5zaXRlVXJsLmxlbmd0aCksbj10aGlzLl9nZXRQYXRobmFtZShlLmhyZWYsdCksaT17b3JpZ2luYWw6ZS5ocmVmLHByb3RvY29sOmUucHJvdG9jb2wsb3JpZ2luOnQscGF0aG5hbWU6bixocmVmOnQrbn07cmV0dXJuIHRoaXMuX2lzTGlua09rKGkpP2k6bnVsbH19LHtrZXk6Il9nZXRQYXRobmFtZSIsdmFsdWU6ZnVuY3Rpb24oZSx0KXt2YXIgbj10P2Uuc3Vic3RyaW5nKHRoaXMuY29uZmlnLnNpdGVVcmwubGVuZ3RoKTplO3JldHVybiBuLnN0YXJ0c1dpdGgoIi8iKXx8KG49Ii8iK24pLHRoaXMuX3Nob3VsZEFkZFRyYWlsaW5nU2xhc2gobik/bisiLyI6bn19LHtrZXk6Il9zaG91bGRBZGRUcmFpbGluZ1NsYXNoIix2YWx1ZTpmdW5jdGlvbihlKXtyZXR1cm4gdGhpcy5jb25maWcudXNlc1RyYWlsaW5nU2xhc2gmJiFlLmVuZHNXaXRoKCIvIikmJiF0aGlzLnJlZ2V4LmZpbGVFeHQudGVzdChlKX19LHtrZXk6Il9pc0xpbmtPayIsdmFsdWU6ZnVuY3Rpb24oZSl7cmV0dXJuIG51bGwhPT1lJiYib2JqZWN0Ij09PSh2b2lkIDA9PT1lPyJ1bmRlZmluZWQiOnIoZSkpJiYoIXRoaXMucHJlZmV0Y2hlZC5oYXMoZS5ocmVmKSYmZS5vcmlnaW49PT10aGlzLmNvbmZpZy5zaXRlVXJsJiYtMT09PWUuaHJlZi5pbmRleE9mKCI/IikmJi0xPT09ZS5ocmVmLmluZGV4T2YoIiMiKSYmIXRoaXMucmVnZXguZXhjbHVkZVVyaXMudGVzdChlLmhyZWYpJiYhdGhpcy5yZWdleC5pbWFnZXMudGVzdChlLmhyZWYpKX19XSxbe2tleToicnVuIix2YWx1ZTpmdW5jdGlvbigpeyJ1bmRlZmluZWQiIT10eXBlb2YgUm9ja2V0UHJlbG9hZExpbmtzQ29uZmlnJiZuZXcgbihuZXcgUm9ja2V0QnJvd3NlckNvbXBhdGliaWxpdHlDaGVja2VyKHtjYXB0dXJlOiEwLHBhc3NpdmU6ITB9KSxSb2NrZXRQcmVsb2FkTGlua3NDb25maWcpLmluaXQoKX19XSksbn0oKTt0LnJ1bigpOwp9KCkpOwovKiBdXT4gKi8K" data-rocket-status="executed">
/* <![CDATA[ */
(function() {
"use strict";var r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e=function(){function i(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(e,t,n){return t&&i(e.prototype,t),n&&i(e,n),e}}();function i(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}var t=function(){function n(e,t){i(this,n),this.browser=e,this.config=t,this.options=this.browser.options,this.prefetched=new Set,this.eventTime=null,this.threshold=1111,this.numOnHover=0}return e(n,[{key:"init",value:function(){!this.browser.supportsLinkPrefetch()||this.browser.isDataSaverModeOn()||this.browser.isSlowConnection()||(this.regex={excludeUris:RegExp(this.config.excludeUris,"i"),images:RegExp(".("+this.config.imageExt+")$","i"),fileExt:RegExp(".("+this.config.fileExt+")$","i")},this._initListeners(this))}},{key:"_initListeners",value:function(e){-1<this.config.onHoverDelay&&document.addEventListener("mouseover",e.listener.bind(e),e.listenerOptions),document.addEventListener("mousedown",e.listener.bind(e),e.listenerOptions),document.addEventListener("touchstart",e.listener.bind(e),e.listenerOptions)}},{key:"listener",value:function(e){var t=e.target.closest("a"),n=this._prepareUrl(t);if(null!==n)switch(e.type){case"mousedown":case"touchstart":this._addPrefetchLink(n);break;case"mouseover":this._earlyPrefetch(t,n,"mouseout")}}},{key:"_earlyPrefetch",value:function(t,e,n){var i=this,r=setTimeout(function(){if(r=null,0===i.numOnHover)setTimeout(function(){return i.numOnHover=0},1e3);else if(i.numOnHover>i.config.rateThrottle)return;i.numOnHover++,i._addPrefetchLink(e)},this.config.onHoverDelay);t.addEventListener(n,function e(){t.removeEventListener(n,e,{passive:!0}),null!==r&&(clearTimeout(r),r=null)},{passive:!0})}},{key:"_addPrefetchLink",value:function(i){return this.prefetched.add(i.href),new Promise(function(e,t){var n=document.createElement("link");n.rel="prefetch",n.href=i.href,n.onload=e,n.onerror=t,document.head.appendChild(n)}).catch(function(){})}},{key:"_prepareUrl",value:function(e){if(null===e||"object"!==(void 0===e?"undefined":r(e))||!1 in e||-1===["http:","https:"].indexOf(e.protocol))return null;var t=e.href.substring(0,this.config.siteUrl.length),n=this._getPathname(e.href,t),i={original:e.href,protocol:e.protocol,origin:t,pathname:n,href:t+n};return this._isLinkOk(i)?i:null}},{key:"_getPathname",value:function(e,t){var n=t?e.substring(this.config.siteUrl.length):e;return n.startsWith("/")||(n="/"+n),this._shouldAddTrailingSlash(n)?n+"/":n}},{key:"_shouldAddTrailingSlash",value:function(e){return this.config.usesTrailingSlash&&!e.endsWith("/")&&!this.regex.fileExt.test(e)}},{key:"_isLinkOk",value:function(e){return null!==e&&"object"===(void 0===e?"undefined":r(e))&&(!this.prefetched.has(e.href)&&e.origin===this.config.siteUrl&&-1===e.href.indexOf("?")&&-1===e.href.indexOf("#")&&!this.regex.excludeUris.test(e.href)&&!this.regex.images.test(e.href))}}],[{key:"run",value:function(){"undefined"!=typeof RocketPreloadLinksConfig&&new n(new RocketBrowserCompatibilityChecker({capture:!0,passive:!0}),RocketPreloadLinksConfig).init()}}]),n}();t.run();
}());
/* ]]> */
</script>
<script type="text/javascript" id="fancybox-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/jquery.fancybox.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="select2-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/select2.full.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="stm_theme_scripts-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/custom.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="ajaxsubmit-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/ajax.submit.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" id="joinchat-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/joinchat.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" id="wpb_composer_front_js-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/js_composer_front.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="stm-courses_grid-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/style_1.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="stm-lms-wishlist-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/wishlist.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="jquery.cookie-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/jquery.cookie.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" id="stm-lms-courses-js-extra">
/* <![CDATA[ */
var courses_view = {"type":"grid"};
var courses_view = {"type":"grid"};
/* ]]> */
</script>
<script type="text/javascript" data-minify="1" id="stm-lms-courses-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/courses.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" id="vc_jquery_skrollr_js-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/skrollr.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" id="countUp.min.js-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/countUp.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="stm-stats_counter-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/style_1(1).js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="jquery.countdown-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/jquery.countdown(1).js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="fc-modal-js-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/fc_modal.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" id="fc-tooltip-js-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/tooltip.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" id="fc-autocomplete-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/awesomplete.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="jquery-ui-core-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/core.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="jquery-ui-mouse-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/mouse.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" id="fc-form-js-js-extra">
/* <![CDATA[ */
var FC = {"ajaxurl":"https:\/\/pecpte.com\/wp-admin\/admin-ajax.php","fct":{"keepdata":"Keep Data When Deleting Plugin","needAPIKey":"You need to enter the Google API Key when editing the field to make the autocomplete address field work","Form:":"Form:","Embed Type:":"Embed Type:","Add a FormCraft form":"Add a FormCraft form","Inline":"Inline","Popup":"Popup","Slide In":"Slide In","Button Text:":"Button Text:","Alignment:":"Alignment:","Left":"Left","Center":"Center","Right":"Right","Placement:":"Placement:","Bottom Right":"Bottom Right","Bind:":"Bind:","bind form popup action to a CSS selector":"bind form popup action to a CSS selector","Class:":"Class:","add a custom class to the popup button":"add a custom class to the popup button","Font Color:":"Font Color:","font color of the button":"font color of the button","Button Color:":"Button Color:","color of the button":"color of the button","Auto Popup:":"Auto Popup:","auto popup the form on page load after x seconds":"auto popup the form on page load after x seconds","loseChanges":"You will lose any un-saved changes.","Free AddOns":"Free AddOns","Purchased AddOns":"Purchased AddOns","Paid AddOns":"Paid AddOns","read more":"read more","Nothing Left To Install":"Nothing Left To Install","Please check your internet connection":"Please check your internet connection","back":"back","Help Topics":"Help Topics","Sorry, nothing here":"Sorry, nothing here","Contact Support":"Contact Support","Unknown Error.":"Unknown Error.","Failed Saving.":"Failed Saving.","Failed Saving. Please try disabing your firewall, or security plugin.":"Failed Saving. Please try disabing your firewall, or security plugin.","Debug Info":"Debug Info","Invalid":"Invalid","Min [x] characters required":"Min [x] characters required","Max [x] characters allowed":"Max [x] characters allowed","Max [x] file(s) allowed":"test","Files bigger than [x] MB not allowed":"Files bigger than [x] MB not allowed","Invalid Email":"Invalid Email","Invalid URL":"Invalid URL","Invalid Expression":"Invalid Expression","Only alphabets":"Only alphabets","Only numbers":"Only numbers","Should be alphanumeric":"Should be alphanumeric","Please correct the errors and try again":"Please correct the errors and try again","Message received":"Message received","<p>Hello [Name],<\/p><p><br><\/p><p>We have received your submission. Here are the details you have submitted to us:<\/p><p>[Form Content]<\/p><p><br><\/p><p>Regards,<\/p><p>Nishant<\/p>":"<p>Hello [Name],<\/p><p><br><\/p><p>We have received your submission. Here are the details you have submitted to us:<\/p><p>[Form Content]<\/p><p><br><\/p><p>Regards,<\/p><p>Nishant<\/p>","Thank you for your submission":"Thank you for your submission","<p>Hello,<\/p><p><br><\/p><p>You have received a new form submission for the form [Form Name]. Here are the details:<\/p><p>[Form Content]<\/p><p><br><\/p><p>Page: [URL]<br>Unique ID: #[Entry ID]<br>Date: [Date]<br>Time: [Time]<\/p>":"<p>Hello,<\/p><p><br><\/p><p>You have received a new form submission for the form [Form Name]. Here are the details:<\/p><p>[Form Content]<\/p><p><br><\/p><p>Page: [URL]<br>Unique ID: #[Entry ID]<br>Date: [Date]<br>Time: [Time]<\/p>","New Form Submission":"New Form Submission","Heading":"Heading","Some Title":"Some Title","Name":"Name","your full name":"your full name","Password":"Password","check your caps":"check your caps","Email":"Email","a valid email":"a valid email","Comments":"Comments","more details":"more details","Favorite Fruits":"Favorite Fruits","pick one!":"pick one!","Language":"Language","Date":"Date","of appointment":"of appointment","Add some text or <strong>HTML<\/strong> here":"Add some text or <strong>HTML<\/strong> here","Text Field":"Text Field","Submit Form":"Submit Form","File":"File","upload":"upload","Slider":"Slider","take your pick":"take your pick","Time":"Time","Address":"Address","your home \/ office":"your home \/ office","Rate":"Rate","our support":"our support","Liked the food?":"Liked the food?","let us know":"let us know","Survey":"Survey","How Was the Food?":"How Was the Food?","How Was the Service?":"How Was the Service?","Poor":"Poor","Average":"Average","Good":"Good","Bad":"Bad","Could be better":"Could be better","So so":"So so","Excellent":"Excellent","Blank":"Blank","Template":"Template","Duplicate":"Duplicate","Import":"Import","(blank form)":"(blank form)","80% Zoom":"80% Zoom","Select Form Template To View":"Select Form Template To View","Select Form":"Select Form","Create Form":"Create Form","No Forms Found":"No Forms Found","Forms":"Forms","New Form":"New Form","ID":"ID","Last Edit":"Last Edit","Sure? This action can't be reversed.":"Sure? This action can't be reversed.","Form Analytics":"Form Analytics","reset analytics data":"reset analytics data","Custom":"Custom","All Forms":"All Forms","form views":"form views","submissions":"submissions","conversion":"conversion","charges":"charges","No Entries Found":"No Entries Found","Select Form to Export":"Select Form to Export","Separator:":"Separator:","Comma (CSV format)":"Comma (CSV format)","Semicolon":"Semicolon","Export":"Export","Entries":"Entries","(All Forms)":"(All Forms)","Created":"Created","Hide Empty Fields":"Hide Empty Fields","Save Changes":"Save Changes","Edit Entry":"Edit Entry","Print":"Print","Referer":"Referer","Insights":"Insights","Get Insights":"Get Insights","Period":"Period","All":"All","From":"From","To":"To","Max Entries":"Max Entries","Entries Analyzed":"Entries Analyzed","No Insights Available":"No Insights Available","learn more":"learn more","License Key verified":"License Key verified","Verified":"Verified","Update Key Info":"Update Key Info","Verify Key":"Verify Key","Purchased On":"Purchased On","Last Check":"Last Check","Expires On":"Expires On","More Info":"More Info","days too late":"days too late","days left":"days left","Renew License Key":"Renew License Key","renewing the license key gives you access to auto plugin updates and free customer support":"renewing the license key gives you access to auto plugin updates and free customer support","No Files Found":"No Files Found","File Uploads":"File Uploads","Trash":"Trash","Type":"Type","Size":"Size","Disable Analytics":"Disable Analytics","Search":"Search","Loading":"Loading","Entry View":"Entry View","Your License Key":"Your License Key","Your Email":"Your Email"},"datepickerLang":"https:\/\/pecpte.com\/wp-content\/plugins\/formcraft3\/assets\/js\/datepicker-lang\/"};
/* ]]> */
</script>
<script type="text/javascript" id="fc-form-js-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/form.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="fc-captcha-addon-js-main-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/captcha_form_main.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" id="vc_waypoints-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/vc-waypoints.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="owl.carousel-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/owl.carousel.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" data-minify="1" id="stm-testimonials-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/style_1(2).js.download" data-rocket-status="executed"></script>
<script type="text/javascript" id="vc_transition_bootstrap_js-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/transition.min.js.download" data-rocket-status="executed"></script>
<script type="text/javascript" id="vc_carousel_js-js" data-rocket-defer="" defer="" fetchpriority="high" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/vc_carousel.min.js.download" data-rocket-status="executed"></script>
<script src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/e-202611.js.download" defer=""></script>
<script>
    _stq = window._stq || [];
    _stq.push([ 'view', {v:'ext',j:'1:11.3.4',blog:'203252251',post:'7',tz:'6',srv:'pecpte.com'} ]);
    _stq.push([ 'clickTrackerInit', '203252251', '7' ]);
</script>
    <script src="data:text/javascript;base64,d2luZG93LmFkZEV2ZW50TGlzdGVuZXIoJ0RPTUNvbnRlbnRMb2FkZWQnLCBmdW5jdGlvbigpIHsKICAgIGpRdWVyeShkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKSB7CiAgICAgIAogICAgfSk7CiAgICB9KTs=" data-rocket-status="executed">window.addEventListener('DOMContentLoaded', function() {
    jQuery(document).ready(function() {

    });
    });</script>
    <script>window.lazyLoadOptions=[{elements_selector:"img[data-lazy-src],.rocket-lazyload",data_src:"lazy-src",data_srcset:"lazy-srcset",data_sizes:"lazy-sizes",class_loading:"lazyloading",class_loaded:"lazyloaded",threshold:300,callback_loaded:function(element){if(element.tagName==="IFRAME"&&element.dataset.rocketLazyload=="fitvidscompatible"){if(element.classList.contains("lazyloaded")){if(typeof window.jQuery!="undefined"){if(jQuery.fn.fitVids){jQuery(element).parent().fitVids()}}}}}},{elements_selector:".rocket-lazyload",data_src:"lazy-src",data_srcset:"lazy-srcset",data_sizes:"lazy-sizes",class_loading:"lazyloading",class_loaded:"lazyloaded",threshold:300,}];window.addEventListener('LazyLoad::Initialized',function(e){var lazyLoadInstance=e.detail.instance;if(window.MutationObserver){var observer=new MutationObserver(function(mutations){var image_count=0;var iframe_count=0;var rocketlazy_count=0;mutations.forEach(function(mutation){for(var i=0;i<mutation.addedNodes.length;i++){if(typeof mutation.addedNodes[i].getElementsByTagName!=='function'){continue}
if(typeof mutation.addedNodes[i].getElementsByClassName!=='function'){continue}
images=mutation.addedNodes[i].getElementsByTagName('img');is_image=mutation.addedNodes[i].tagName=="IMG";iframes=mutation.addedNodes[i].getElementsByTagName('iframe');is_iframe=mutation.addedNodes[i].tagName=="IFRAME";rocket_lazy=mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');image_count+=images.length;iframe_count+=iframes.length;rocketlazy_count+=rocket_lazy.length;if(is_image){image_count+=1}
if(is_iframe){iframe_count+=1}}});if(image_count>0||iframe_count>0||rocketlazy_count>0){lazyLoadInstance.update()}});var b=document.getElementsByTagName("body")[0];var config={childList:!0,subtree:!0};observer.observe(b,config)}},!1)</script><script data-no-minify="1" async="" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/lazyload.min.js.download"></script><script type="text/javascript" src="data:text/javascript;base64,CmRvY3VtZW50LnRpZGlvQ2hhdENvZGUgPSAieDh4ZGh5YXprZGI1NzdhcmJqM3JyZ2FicGJjenc0ZDUiOwooZnVuY3Rpb24oKSB7CiAgZnVuY3Rpb24gYXN5bmNMb2FkKCkgewogICAgdmFyIHRpZGlvU2NyaXB0ID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgic2NyaXB0Iik7CiAgICB0aWRpb1NjcmlwdC50eXBlID0gInRleHQvamF2YXNjcmlwdCI7CiAgICB0aWRpb1NjcmlwdC5hc3luYyA9IHRydWU7CiAgICB0aWRpb1NjcmlwdC5zcmMgPSAiLy9jb2RlLnRpZGlvLmNvL3g4eGRoeWF6a2RiNTc3YXJiajNycmdhYnBiY3p3NGQ1LmpzIjsKICAgIGRvY3VtZW50LmJvZHkuYXBwZW5kQ2hpbGQodGlkaW9TY3JpcHQpOwogIH0KICBpZiAod2luZG93LmF0dGFjaEV2ZW50KSB7CiAgICB3aW5kb3cuYXR0YWNoRXZlbnQoIm9ubG9hZCIsIGFzeW5jTG9hZCk7CiAgfSBlbHNlIHsKICAgIHdpbmRvdy5hZGRFdmVudExpc3RlbmVyKCJsb2FkIiwgYXN5bmNMb2FkLCBmYWxzZSk7CiAgfQp9KSgpOwo=" data-rocket-status="executed">
document.tidioChatCode = "x8xdhyazkdb577arbj3rrgabpbczw4d5";
(function() {
  function asyncLoad() {
    var tidioScript = document.createElement("script");
    tidioScript.type = "text/javascript";
    tidioScript.async = true;
    tidioScript.src = "//code.tidio.co/x8xdhyazkdb577arbj3rrgabpbczw4d5.js";
    document.body.appendChild(tidioScript);
  }
  if (window.attachEvent) {
    window.attachEvent("onload", asyncLoad);
  } else {
    window.addEventListener("load", asyncLoad, false);
  }
})();
</script>    <script defer="" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/v8c78df7c7c0f484497ecbca7046644da1771523124516" integrity="sha512-8DS7rgIrAmghBFwoOTujcf6D9rXvH8xm8JQ1Ja01h9QX8EzXldiszufYa4IFfKdLUKTTrnSFXLDkUEOTrZQ8Qg==" data-cf-beacon="{&quot;version&quot;:&quot;2024.11.0&quot;,&quot;token&quot;:&quot;ed93474679284e09820733c88e189923&quot;,&quot;r&quot;:1,&quot;server_timing&quot;:{&quot;name&quot;:{&quot;cfCacheStatus&quot;:true,&quot;cfEdge&quot;:true,&quot;cfExtPri&quot;:true,&quot;cfL4&quot;:true,&quot;cfOrigin&quot;:true,&quot;cfSpeedBrain&quot;:true},&quot;location_startswith&quot;:null}}" crossorigin="anonymous"></script>

<style>
    /* ===== FINAL SAFE FOOTER FIX ===== */

/* Desktop ঠিক থাকবে */
#footer_bottom .widgets.cols_4.clearfix{
    display:flex;
    flex-wrap:wrap !important;
    gap:24px;
}

#footer_bottom .widgets.cols_4.clearfix > aside{
    width:calc((100% - 48px) / 3) !important;
}

/* ===== MOBILE FIX ===== */
@media (max-width:768px){

    #footer_bottom .widgets.cols_4.clearfix{
        display:block !important;
    }

    #footer_bottom .widgets.cols_4.clearfix > aside{
        width:100% !important;
        margin-bottom:20px !important;
        margin-left: 10px !important;
    }

    .aa-footer-card{
        width:100% !important;
        padding:18px !important;
        box-sizing:border-box;
    }

    /* title fix */
    .aa-footer-card .widget_title h3{
        font-size:18px !important;
        line-height:1.3 !important;
    }

    /* text overflow fix */
    .aa-footer-card{
        overflow:hidden !important;
    }

}/* ===== FINAL SAFE FOOTER FIX ===== */

/* Desktop ঠিক থাকবে */
#footer_bottom .widgets.cols_4.clearfix{
    display:flex;
    flex-wrap:wrap !important;
    gap:24px;
}

#footer_bottom .widgets.cols_4.clearfix > aside{
    width:calc((100% - 48px) / 3) !important;
}

/* ===== MOBILE FIX ===== */
@media (max-width:768px){

    #footer_bottom .widgets.cols_4.clearfix{
        display:block !important;
    }

    #footer_bottom .widgets.cols_4.clearfix > aside{
        width:100% !important;
        margin-bottom:20px !important;
    }

    .aa-footer-card{
        width:100% !important;
        padding:18px !important;
        box-sizing:border-box;
    }

    /* title fix */
    .aa-footer-card .widget_title h3{
        font-size:18px !important;
        line-height:1.3 !important;
    }

    /* text overflow fix */
    .aa-footer-card{
        overflow:hidden !important;
    }

}
/* Fix WhatsApp overlap */
.joinchat{
    bottom: 80px !important; /* upore tule dilam */
    z-index: 10 !important;
}

/* Footer socials ke safe rakhte */
#footer_copyright .copyright_socials{
    position: relative;
    z-index: 20;
}
</style>

<script type="text/javascript" async="" src="./PEC- Education - PTE Academic In Dhaka, Bangladesh_files/x8xdhyazkdb577arbj3rrgabpbczw4d5.js.download"></script></body></html>