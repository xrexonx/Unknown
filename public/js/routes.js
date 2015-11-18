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
                })
                .state('project', {
                    url: '/:id/:view',
                    templateUrl: _getView('project'),
                    controllerProvider: function($stateParams) {
                        return $stateParams.view + 'Controller';
                    }
                });

            $urlRouterProvider.otherwise('/');
        });

})();