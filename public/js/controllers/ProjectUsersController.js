(function() {
    'use strict';

    angular
        .module('UnknownControllers')
        .controller('ProjectUsersController', function ($scope, $stateParams, Project, Utils) {

            var vm = $scope;
            vm.view = $stateParams.view;
            vm.projectUsers = {};

            vm.actions = {
                show: function () {

                    Project
                        .get()
                        .success(function (response) {
                            if (response) {
                                vm.projectList = response;
                            }
                        });
                },
                openModal: function () {
                    Utils.openModal('addProjectUser');
                },
                addUser: function () {
                    console.log(vm.projectUsers.users); return false;
                    Project.addUser(vm.project.users).then(function (response) {
                        console.log(response);
                        Materialize.toast('Successfully failed.', 5000, 'teal lighten-2')
                    });
                },
                getUsers: function () {
                    Project
                        .getUsers({id:$stateParams.id})
                        .success(function (response) {
                            if (response) {
                                vm.projectUsers = response;
                            }
                        });
                }
            }

        });

})();