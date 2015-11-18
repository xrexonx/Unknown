(function() {
    'use strict';

    angular
        .module('UnknownControllers')
        .controller('DashController', function ($scope, $stateParams, Project) {

            var vm = $scope;

            vm.project = {};
            vm.projectList = {};
            vm.view = $stateParams.view;

            vm.actions = {
                show: function () {

                    Project
                        .get()
                        .success(function (response) {
                            //console.log(response);
                            if (response) {
                                vm.projectList = response;
                                //vm.projectList.push(response);
                            }
                        });
                },
                openModal: function () {
                    $('#modal1').openModal();
                },
                create: function () {
                    Project.create(vm.project).then(function (response) {
                        console.log(response);
                        Materialize.toast('Yeah', 4000)
                    });

                }
            }
        });

})();