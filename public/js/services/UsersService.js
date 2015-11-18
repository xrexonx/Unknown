(function () {
    'use strict';

    angular
        .module('UnknownServices')
        .service('Users', function (Ajax) {

            return {
                get:  function () {
                    return Ajax.send('users/getUsers', 'GET', '', '');
                },
                create: function ($oProjects) {
                    return Ajax.send('project/create', 'POST', $oProjects, '');
                }
            };

        });

})();