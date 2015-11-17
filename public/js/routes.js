(function () {
    'use strict';

    angular
        .module('UnknownRoutes')
        .config(function($stateProvider, $urlRouterProvider) {

            function _getView (viewName) {
                return 'views/'+viewName+'.html';
            }

            $stateProvider
                .state('/', {
                    url: '/',
                    templateUrl: _getView('dashboard'),
                    controller: 'DashController'
                });

            $urlRouterProvider.otherwise('/');
        });

})();