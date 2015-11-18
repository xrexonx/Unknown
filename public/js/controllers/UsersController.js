(function() {
    'use strict';

    angular
        .module('UnknownControllers')
        .controller('UsersController', function ($scope, $stateParams) {

            var vm = $scope;
            vm.view = $stateParams.view;

        });

})();