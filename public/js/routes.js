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
                        var ctrlName = $stateParams.view;
                        var name = ctrlName.charAt(0).toUpperCase() + ctrlName.slice(1);
                        return name + 'Controller';
                    }
                });

            $urlRouterProvider.otherwise('/');
        });

})();