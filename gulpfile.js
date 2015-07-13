var elixir = require('laravel-elixir');
var gulp = require("gulp");
var wiredep = require("laravel-elixir-wiredep");//I'm working on this
require('laravel-elixir-livereload');
elixir(function (mix) {
    mix.sass('app.scss', 'public/css/app.css')
        .styles([
            "resources/assets/css/main.css"
        ], 'public/css/app.css')
        .version("./css/app.css");
    mix.wiredep();
});

gulp.task("live", function() {
    elixir(function (mix) {
        mix.sass('app.scss', 'public/css/app.css')
            .styles([
                "resources/assets/css/main.css"
            ], 'public/css/app.css')
            .version("./css/app.css");
        mix.wiredep();
        mix.livereload();
        gulp.start('watch');
    });
});