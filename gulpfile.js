process.env.DISABLE_NOTIFIER = true;
process.env.DISABLE_NOTIFIER = true;
var elixir = require('laravel-elixir');
var gulp = require("gulp");
var wiredep = require("laravel-elixir-wiredep");//I'm working on this
require('laravel-elixir-livereload');
elixir(function (mix) {
    mix.sass('app.scss')
        .styles([
            "resources/assets/css/main.css",
            "resources/assets/css/component.css",
            "resources/assets/css/normalize.css",
            "public/css/app.css"
        ], 'public/css/all.css', './')
        .version("./css/all.css");
    mix.copy('resources/assets/img', 'public/build/img');
    mix.copy('resources/assets/js', 'public/build/js');
    mix.wiredep();
});

gulp.task("live", function () {
    elixir(function (mix) {
        mix.sass('app.scss')
            .styles([
                "resources/assets/css/main.css",
                "resources/assets/css/component.css",
                "resources/assets/css/normalize.css",
                "public/css/app.css"
            ], 'public/css/all.css', './')
            .version("./css/all.css");
        mix.copy('resources/assets/img', 'public/build/img');
        mix.copy('resources/assets/js', 'public/build/js');
        mix.wiredep();
        mix.livereload();
        gulp.start('watch');
    });
});