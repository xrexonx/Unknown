(function () {
    'use strict';

    angular
        .module('UnknownServices')
        .service('Project', function (Ajax) {

            return {
                get:  function () {
                    return Ajax.send('project/show', 'GET', '', '');
                },
                create: function (oProjects) {
                    return Ajax.send('project/create', 'POST', oProjects, '');
                },
                getUsers: function (oProjects) {
                    return Ajax.send('project/getUsers', 'POST', oProjects, '');
                },
                getProjectUsers: function (oProjects) {
                    return Ajax.send('project/getProjectUsers', 'POST', oProjects, '');
                },
                addUser: function (oProjects) {
                    return Ajax.send('project/addUser', 'POST', oProjects, '');
                }
            };

        });

})();