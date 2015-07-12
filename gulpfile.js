var elixir = require('laravel-elixir');
var gulp = require("gulp");
var wiredep = require("laravel-elixir-wiredep");//I'm working on this

var paths = [
    './public/bower_components/materialize/sass/'
];

elixir(function(mix) {
    mix.sass('app.scss', 'public/css/', {includePaths: paths})
        .wiredep();
});