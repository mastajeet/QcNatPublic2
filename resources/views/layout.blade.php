
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>Quebec Natation</title>
    <link rel="shortcut icon" type="image/x-icon" href="/css/images/favicon.ico?cb=2" />
    <link rel="stylesheet" href="/css/style.css" type="text/css" media="all" />
    <link rel="STYLESHEET" type="text/css" href="/css/fonts.css" media="all">
    <!--[if IE 6]>
    <link rel="stylesheet" href="/css/ie6.css" type="text/css" media="all" />
    <script src="/js/png-fix.js" type="text/javascript"></script>
    <![endif]-->

    <script src="/js/jquery-1.4.2.min.js" type="text/javascript"></script>
    <script src="/js/cufon-yui.js" type="text/javascript"></script>
    <script src="/js/Futura.font.js" type="text/javascript"></script>
    <script src="/js/jquery-fns.js" type="text/javascript"></script>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<!-- Page -->
<div id="page">
    <!-- Shell -->
    <div class="shell">
        <!-- Header -->
        <div id="header">
            <!-- Logo -->

            {!! $logo !!}

            <!-- END Logo -->

            <!-- Navigation -->
            <div id="navigation">
                <ul>

                    @foreach($menu as $k=>$v)
                        <li><a href=/{{$k}}><img src='/img/{{$v}}' border=0></a></li>
                    @endforeach

                </ul>
            </div>
            <!-- END Navigation -->
            <div class="cl">&nbsp;</div>
        </div>
        <!-- END Header -->

        <!-- Content -->
        <div id="content">
            <!-- Mainbox -->
            <div class="mainbox">
                <div class="mainbox-t notext">&nbsp;</div>
                <div class="mainbox-cnt">

                    @yield('Content')

                </div>
                <div class="mainbox-b notext">&nbsp;</div>
            </div>
            <!-- END Mainbox -->

            <!-- Bottom Content -->
            <div class="bottom-content">
                <div class="cl">&nbsp;</div>
                <!-- Short Box -->
                <div class="shortbox fl">
                    <div class="box-t notext"></div>
                    <div class="box-cnt">



                        <table width="100%" cellspacing=2 cellpadding=2 border=0 align="">
                            <tr height="" class="">
                                <td width="100%" colspan=2 valign=top class="">
                                    <span class=Titre><p><h4 class="futura">Truc de la semaine</h2><p></span>
                                </td>
                            </tr>
                            <tr height="" class="">
                                <td width="30%" colspan=1 valign=top class="">
                                    <img src="/img/{{ $truc->niveau }}.png" >
                                </td>
                                <td width="80%" colspan=1 valign=top class="">
                                    <span class=SousTitre>{{ $truc->probleme }}</span>
                                    <br />

                                    <br />

                                    <span class=Texte>{{ $truc->solution }}</span>
                                    <br />

                                    <span class=texte></span>
                                </td>
                            </tr>
                        </table>



                    </div>
                    <div class="box-b notext">&nbsp;</div>
                </div>
                <!-- END Short Box -->

                <!-- Sidebar -->
                <div class="sidebar fr">

                    <!-- Subscribe -->
                    <div class="facebook">
                        <div class="form">
                            <div class="fb-like-box" data-href="https://www.facebook.com/pages/Qu%C3%A9bec-Natation/350622478305873" data-width="292" data-colorscheme="light" data-show-faces="true" data-stream="false" data-header="true"></div>
                            <!-- END Subscribe -->
                        </div></div>

                </div>
                <!-- END Sidebar -->
                <div class="cl">&nbsp;</div>
            </div>
            <!-- END Bottom Content -->
        </div>
        <!-- END Content -->
        <!-- Footer Push -->
        <div class="footer-push notext">&nbsp;</div>
        <!-- END Footer Push -->
    </div>
    <!-- END Shell -->
</div>
<!-- END Page -->
<!-- Footer -->
<div id="footer">
    <p class="ac">QuebecNatation© 2010 </p>
</div>
<!-- END Footer -->
<script type="text/javascript">Cufon.now();</script>
</body>
</html>