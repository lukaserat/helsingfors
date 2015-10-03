var elixir = require('laravel-elixir');

elixir(function(mix) {
  mix
    // Copy webfont files from /vendor directories to /public directory.
    .copy('resources/static/bower_components/font-awesome-sass/assets/fonts/font-awesome', 'public/build/fonts/font-awesome')
    .copy('resources/static/bower_components/bootstrap-sass/assets/fonts/bootstrap', 'public/build/fonts/bootstrap')
    .copy('resources/static/bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js', 'public/js/vendor')
    .copy('resources/static/bower_components/jquery/dist/jquery.min.js', 'public/js/vendor')
    .copy('resources/static/bower_components/darmody-simple-ajax-uploader/SimpleAjaxUploader.js', 'public/js/vendor')
    .copy('resources/static/bower_components/moment/min', 'public/js/vendor/moment')

    .sass([ // Process front-end stylesheets
      'frontend/main.scss'
    ], 'resources/assets/css/frontend/main.css')
    .styles([  // Combine pre-processed CSS files
      'frontend/main.css'
    ], 'public/css/frontend.css')
    .scripts([ // Combine front-end scripts
      'plugins.js',
      'frontend/main.js'
    ], 'public/js/frontend.js')

    .sass([ // Process back-end stylesheets
      'backend/main.scss',
    ], 'resources/assets/css/backend/main.css')
    .styles([ // Combine pre-processed CSS files
      'backend/main.css'
    ], 'public/css/backend.css')
    .coffee([
      'backend/main.coffee',
    ], 'resources/assets/js/backend/main.js')
    .scripts([ // Combine back-end scripts
      'backend/main.js',
    ], 'public/js/backend.js')

    // Apply version control
    .version([
      "public/css/frontend.css", "public/js/frontend.js",
       "public/css/backend.css", "public/js/backend.js"
    ]);
});
