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
                    resolve: oResolved,
                    url: '/',
                    templateUrl: _getView('dashboard'),
                    controller: 'DashController'
                })
                .state('project', {
                    resolve: oResolved,
                    url: '/:id/:view',
                    templateUrl: _getView('project'),
                    controllerProvider: function($stateParams) {
                        return $stateParams.view + 'Controller';
                    }

                });

            $urlRouterProvider.otherwise('/');
        });

})();