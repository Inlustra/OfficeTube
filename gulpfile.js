var elixir = require('laravel-elixir');
var gulp = require("gulp");
var wiredep = require("laravel-elixir-wiredep");//I'm working on this
require('laravel-elixir-livereload');
elixir(function (mix) {
    mix.sass('app.scss')
        .styles([
            "resources/assets/css/main.css",
            "public/css/app.css"
        ], 'public/css/all.css', './')
        .version("./css/all.css");
    mix.wiredep();
});

gulp.task("live", function () {
    elixir(function (mix) {
        mix.sass('app.scss')
            .styles([
                "resources/assets/css/main.css",
                "public/css/app.css"
            ], 'public/css/all.css', './')
            .version("./css/all.css");
        mix.wiredep();
        mix.livereload();
        gulp.start('watch');
    });
});