(function() {
    'use strict';

    angular
        .module('UnknownControllers')
        .controller('ProjectUsersController', function ($scope, $stateParams, Project, Utils, oProject) {

            var vm = $scope;
            vm.projectList = oProject;
            vm.view = $stateParams.view;
            vm.pId = $stateParams.id;
            vm.projectUsers = {};

            vm.actions = {
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
                    Project
                        .getProjectUsers({id:vm.pId})
                        .success(function (response) {
                            if (response) {
                                vm.projectUsers = response;
                            }
                        });
                }
            }

        });

})();