<html>
    <head>
        <title>VotePlay - @yield('title')</title>
        <!-- bower:css -->
        <link rel="stylesheet" href="/bower_components/angular-material/angular-material.css" />
        <!-- endbower -->
        <link rel="stylesheet" href="{{ elixir("css/all.css") }}"/>

        <link href="http://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body class="text-foreground text-darken-4">
        <ul id="slide-out" class="side-nav fixed">
            <li class="logo background darken-4 center-align valign">
                <div class="fill valign-wrapper">
                    <img class="center-block valign" src="{{asset('img/logo.png')}}"/>
                </div>
            </li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header waves-effect waves-teal">Rooms</a>

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
        <a href="#" data-activates="slide-out" class="hide-on-large-only button-collapse">
            <i class="mdi-navigation-menu"></i>
        </a>
        <header>
            @yield('header')
        </header>
        <main>
            @yield('main')
        </main>
        <footer class="purple lighten-1">
            @section('footer')
                <div class="container">
                    <div class="row">
                        <div class="col l6 s12">
                            <h5 class="white-text">Footer Content</h5>

                            <p class="grey-text text-lighten-4">You can use rows and columns here to organize your
                                footer
                                content.</p>
                        </div>
                        <div class="col l4 offset-l2 s12">
                            <h5 class="white-text">Links</h5>

                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="container">
                        © 2014 Copyright Text
                        <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
                    </div>
                </div>
            @stop
        </footer>
        <!-- bower:js -->
        <script src="/bower_components/angular/angular.js"></script>
        <script src="/bower_components/angular-animate/angular-animate.js"></script>
        <script src="/bower_components/angular-aria/angular-aria.js"></script>
        <script src="/bower_components/angular-material/angular-material.js"></script>
        <!-- endbower -->
        <script>
            $(".button-collapse").sideNav();
        </script>
        @yield('script')
        @if ( Config::get('app.debug') )
            <script type="text/javascript">
                document.write('<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"><\/script>')

            </script>
        @endif
    </body>
</html>