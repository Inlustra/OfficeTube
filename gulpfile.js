process.env.DISABLE_NOTIFIER = true;
process.env.DISABLE_NOTIFIER = true;
var elixir = require('laravel-elixir');
var gulp = require("gulp");
var wiredep = require("laravel-elixir-wiredep");
var useref = require('laravel-elixir-useref');
var livereload = require('laravel-elixir-livereload');

elixir(function (mix) {
    mix.sass('app.scss')
        .wiredep({
            baseDir: 'public/',    //the folder for your views
            src: false, //if you just want to inject dependencies on one file just specify it's source, relative to baseDir
            searchLevel: '**/*.php' //How many search levels you want
        }).useref();
});

gulp.task("live", function () {
    elixir(function (mix) {
        mix.sass('app.scss')
            .wiredep({
                baseDir: 'public/',    //the folder for your views
                src: false, //if you just want to inject dependencies on one file just specify it's source, relative to baseDir
                searchLevel: '**/*.php' //How many search levels you want
            }).useref();
        mix.livereload();
        gulp.start('watch');
    });
});