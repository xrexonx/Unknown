(function () {
    'use strict';

    angular
        .module('UnknownServices')
        .service('Utils', function () {

            function _openModal (modalName) {
                $('select').material_select();
                return $('#'+modalName).openModal(); //jquery pa more!
            }

            return {
                openModal:  _openModal
            };

        });

})();