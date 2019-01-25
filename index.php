<?php

require_once 'lib/router.php';

router('GET', '/users/all', 'userController@getAllUsers');
router('GET', '/user/{id}', 'userController@getUser');
router('GET', '/addUser', 'userController@addUser');
router('POST', '/addUserToDB', 'userController@addUserToDB');
router('POST', "/editUser/{id}", 'userController@editUser');
router('POST', '/updateUser/{id}', 'userController@updateUser');
router('DELETE', "/deleteUser/{id}", "userController@deleteUser");