(function () {
    'use strict';

    angular
        .module('UnknownServices')
        .service('Utils', function () {

            function _openModal (modalName) {
                return $('#'+modalName).openModal(); //jquery pa more!
            }

            return {
                openModal:  _openModal
            };

        });

})();