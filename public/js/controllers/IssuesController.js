(function() {
    'use strict';

    angular
        .module('UnknownControllers')
        .controller('IssuesController', function ($scope, $stateParams, Project, Utils, oProject) {

            var vm = $scope;
            vm.view = $stateParams.view;
            vm.projectList = oProject;

            vm.actions = {
                openModal: function () {
                    Utils.openModal('addIssueModal');
                },
                //create: function () {
                //    Project.create(vm.project).then(function (response) {
                //        console.log(response);
                //        Materialize.toast('Yeah', 4000)
                //    });
                //
                //}
            }

        });

})();