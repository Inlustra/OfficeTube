<html>
    <head>
        <title>VotePlay - @yield('title')</title>
        <!-- bower:css -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="/bower_components/materialize/bin/materialize.css"/>
        <!-- endbower -->
        <style>
            body {
                margin: 0;
                padding: 0;
            }

            main, header, footer {
                padding-left: 240px;
            }

            @media only screen and (max-width: 992px) {
                main, header, footer {
                    padding-left: 0;
                }
            }

            .logo {
                height: 100px;
                border-bottom: solid #F0F0F0 thin;
            }

            ul.side-nav.fixed {
                overflow: hidden; }
            ul.side-nav.fixed li {
                line-height: 44px; }
            ul.side-nav.fixed li:hover, ul.side-nav.fixed li.active {
                background-color: rgba(0, 0, 0, 0.05); }
            ul.side-nav.fixed li a {
                font-size: 13px;
                line-height: 44px;
                height: 44px; }
            ul.side-nav.fixed ul.collapsible-accordion {
                background-color: #FFF; }
            ul.side-nav.fixed:hover {
                overflow-y: auto; }
        </style>
    </head>
    <body>
        <ul id="slide-out" class="side-nav fixed">
            <li class="logo">
                <div class="valign-wrapper">
                    <h3 class="valign center-block">
                        Vote<strong class="light-blue-text">Play</strong>
                    </h3>
                </div>
            </li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header waves-effect waves-red">Rooms</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="color.html"><i class="mdi-toggle-star"></i> Top Rooms</a></li>
                                <li><a href="color.html"><i class="mdi-action-search"></i> Find Room</a></li>
                                <li><a href="color.html"><i class="mdi-content-add"></i> New Room</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <li><a href="#!">People</a></li>
            <li><a href="#!">Top Votes</a></li>
            <li><a href="#!">New Room</a></li>
        </ul>
        <a href="#" data-activates="slide-out" class="hide-on-large-only button-collapse"><i
                    class="mdi-navigation-menu"></i></a>
        <header style="height:100px;" class="light-blue accent-1">
            @yield('header')
        </header>
        <main>
            @yield('main')
        </main>
        <footer>
            @yield('footer')
        </footer>
        <!-- bower:js -->
        <script src="/bower_components/jquery/dist/jquery.js"></script>
        <script src="/bower_components/materialize/bin/materialize.js"></script>
        <!-- endbower -->
        <script>
            $(".button-collapse").sideNav();
        </script>
    </body>
</html>