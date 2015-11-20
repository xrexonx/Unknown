(function() {
    'use strict';

    angular
        .module('UnknownControllers')
        .controller('ProjectUsersController', function ($scope, $stateParams, Project, Utils) {

            var vm = $scope;
            vm.view = $stateParams.view;
            vm.pId = $stateParams.id;
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

                    var oProject = {
                        iProjectId:vm.pId,
                        aUsersId:JSON.stringify(vm.projectUsers.users)
                    }
                    Project
                        .addUser(oProject)
                        .then(function (response) {
                            if (response.statusText === "OK" && response.data) {
                                vm.projectUsers = response.data.oProjectUser;
                                Materialize.toast(response.data.message, 5000, 'teal lighten-2')
                            }
                        });
                },
                getUsers: function () {
                    Project
                        .getUsers()
                        .success(function (response) {
                            if (response) {
                                vm.users = response;
                            }
                        });
                },
                getProjectUsers: function () {
                    console.log('get project users');
                    Project
                        .getProjectUsers({id:vm.pId})
                        .success(function (response) {
                            console.log(response);
                            if (response) {
                                vm.projectUsers = response;
                            }
                        });
                }
            }

        });

})();