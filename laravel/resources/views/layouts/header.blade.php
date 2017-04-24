<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lvovych Design</title>

    </head>
    <body>
        <div class="site-header-wrapper no-scroll">
            <header id="masthead" class="site-header" role="banner" style="top: auto;">
                <div class="container">
                    <div class="site-branding">
                        <div class="site-brand-inner no-logo-img has-title no-desc">
                            <h1 class="site-title"><a class="site-text-logo" href="http://lvovych.com/" rel="home">Lvovych Design</a></h1>
                        </div>
                    </div>

                    <div class="header-right-wrapper">
                        <nav id="site-navigation" class="main-navigation" role="navigation">
                            <ul class="onepress-menu">
                                <li id="menu-item-82" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-39 current_page_item menu-item-82"><a href="http://lvovych.com/">Головна</a></li>
                                <li id="menu-item-83" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-83"><a href="http://lvovych.com/blog/">Блог</a></li>
                                <li id="menu-item-88" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-88"><a href="http://lvovych.com/projects/">Проекти</a></li>
                                <li id="menu-item-85" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-85"><a href="http://lvovych.com/work-types/">Послуги</a></li>
                                <li id="menu-item-84" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-84"><a href="http://lvovych.com/reviews/">Відгуки</a></li>
                                <li id="menu-item-87" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-87"><a href="http://lvovych.com/contacts/">Контакти</a></li>
                            </ul>
                        </nav>
                        <!-- #site-navigation -->
                    </div>
                </div>
            </header>
        </div>

       @yield('content')

        <footer id="colophon" class="site-footer" role="contentinfo">
            <div class="footer-connect">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2"></div>

                        <div class="col-sm-8">
                            <div class="footer-social">
                                <h5 class="follow-heading">follow us around</h5><div class="footer-social-icons"><a target="_blank" href="https://www.facebook.com/groups/183027072030418/" title="facebook"><i class="fa fa-fa fa-facebook-square fa-facebook"></i></a><a target="_blank" href="https://plus.google.com/102073477306897114451/posts" title="Google+"><i class="fa fa-fa fa-google-plus fa-google"></i></a></div>                                </div>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                </div>
            </div>

            <div class="site-info">
                <div class="container">
                    <div class="btt">
                        <a class="back-top-top" href="#page" title="Back To Top"><i class="fa fa-angle-double-up wow flash" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: flash;"></i></a>
                    </div>
                </div>
                <span class="sep">Copyright © 2017 Lvovych Web studio</span>
            </div>
            <!-- .site-info -->

        </footer>
    </body>
</html>
