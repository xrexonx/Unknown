var elixir = require('laravel-elixir'),
    bowerComponentsDir = 'vendor/bower_components/',
    materialDir = bowerComponentsDir + 'materialize/dist/',

    assets = {
        css : {
            files:['materialize.css'],
            dir: 'public/css',
            dest:'public/build/css/styles.min.css'
        },
        js : {
            vendor: {
                files:[
                    'jquery.js',
                    'materialize.js',
                    'angular.js',
                    'angular-ui-router.js'
                ],
                dir: 'public/js/vendor',
                dest:'public/build/js/vendor.min.js'
            },
            scripts:{
                files:[
                    'app.js',
                    'routes.js',
                    'materialInit.js'
                ],
                dir: 'public/js',
                dest:'public/build/js/scripts.min.js'
            },
            services: {
                files:[
                    'AjaxService.js',
                    'AuthService.js'
                ],
                dir: 'public/js/services',
                dest:'public/build/js/services.min.js'
            },
            controllers: {
                files:[
                    'AuthController.js'
                ],
                dir: 'public/js/controllers',
                dest:'public/build/js/controllers.min.js'
            },
            all: {
                files:[
                    'vendor.min.js',
                    'scripts.min.js',
                    'services.min.js',
                    'controllers.min.js'
                ],
                dir: 'public/build/js',
                dest:'public/build/js/all.min.js'
            }

        }
    }

//xrexonx
elixir(function (rex) {
    rex.sass('app.scss')
        /*Copy dependencies to laravel public*/
     .copy(bowerComponentsDir + 'jquery/dist/jquery.min.js', 'public/js/vendor/jquery.js')
     .copy(bowerComponentsDir + 'angular/angular.min.js', 'public/js/vendor/angular.js')
     .copy(bowerComponentsDir + 'angular-ui-router/release/angular-ui-router.min.js', 'public/js/vendor/angular-ui-router.js')
     .copy(materialDir + 'js/materialize.min.js', 'public/js/vendor/materialize.js')
     .copy(materialDir + 'css/materialize.min.css','public/css/materialize.css')
     /*Merge css and js*/
     .styles(assets.css.files, assets.css.dest, assets.css.dir)

     .scripts(assets.js.vendor.files, assets.js.vendor.dest, assets.js.vendor.dir)
     .scripts(assets.js.scripts.files, assets.js.scripts.dest, assets.js.scripts.dir)
     .scripts(assets.js.services.files, assets.js.services.dest, assets.js.services.dir)
     .scripts(assets.js.controllers.files, assets.js.controllers.dest, assets.js.controllers.dir)
     .scripts(assets.js.all.files, assets.js.all.dest, assets.js.all.dir);
});
