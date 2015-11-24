(function() {
    'use strict';

    angular
        .module('UnknownControllers')
        .controller('ProjectController', function ($scope, $stateParams, oProject) {

            console.log('sdfsdfdsfsdfdss');

            var vm = $scope;

            vm.project = {};
            vm.view = $stateParams.view;

            vm.actions = {
                show: function () {
                    vm.projectList = oProject;
                }
            }
        });

})();