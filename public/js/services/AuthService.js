(function () {
    'use strict';

    angular
        .module('UnknownServices')
        .service('Auth', function (Ajax) {

            return {
                signUp:  function ($oUsers) {
                    return Ajax.send('auth/register', 'POST', $oUsers, '');
                },
                login: function ($oUsers) {
                    return Ajax.send('auth/login', 'POST', $oUsers, '');
                }
            };

        });

})();