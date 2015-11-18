(function() {
    'use strict';

    angular
        .module('UnknownControllers')
        .controller('ProjectUsersController', function ($scope, $stateParams, Project, Utils) {

            var vm = $scope;
            vm.view = $stateParams.view;

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
                    Project.addUser(vm.project).then(function (response) {
                        console.log(response);
                        Materialize.toast('Yeah', 4000)
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