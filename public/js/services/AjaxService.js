(function () {
    'use strict';

    angular
        .module('UnknownServices')
        .service('Ajax', function ($http, $httpParamSerializer) {

            function _ajaxSend (routeName, method, data, headers) {

                return $http({
                    url     : 'api/' + routeName,
                    method  : method || 'GET',
                    headers : headers || {'Content-Type': 'application/x-www-form-urlencoded' },
                    data    : $httpParamSerializer(data) || {},
                    cache   : true
                });
            }

            return {
                send:  _ajaxSend
            };

        });

})();