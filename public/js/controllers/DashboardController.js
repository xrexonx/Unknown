(function() {
    'use strict';

    angular
        .module('UnknownControllers')
        .controller('DashController', function ($scope, $stateParams, Project, Utils, oProject) {

            var vm = $scope;

            vm.project = {};
            vm.view = $stateParams.view;

            vm.actions = {
                show: function () {
                    vm.projectList = oProject;
                },
                openModal: function () {
                    Utils.openModal('addProject');
                },
                create: function () {
                    Project
                        .create(vm.project)
                        .then(function (response) {
                        if (response.statusText === 'OK' && response.data) {
                            vm.projectList = response.data.oProject;
                            Materialize.toast(response.data.message, 4000, 'blue-grey lighten-1')
                        }

                    });

                }
            }
        });

})();