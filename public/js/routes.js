(function () {
    'use strict';

    angular
        .module('UnknownRoutes')
        .config(function($stateProvider, $urlRouterProvider) {

            function _getView (viewName) {
                return 'views/'+viewName+'.html';
            }

            var oResolved = {
                oProject : function (Project) {
                    return Project.resolveProject();
                }
            }

            $stateProvider
                .state('/', {
                    url: '/',
                    templateUrl: _getView('dashboard'),
                    controller: 'DashController',
                    resolve: oResolved
                })
                .state('project', {
                    url: '/:id/:view',
                    templateUrl: _getView('project'),
                    controllerProvider: function($stateParams) {
                        return $stateParams.view + 'Controller';
                    },
                    resolve: oResolved
                });

            $urlRouterProvider.otherwise('/');
        });

})();