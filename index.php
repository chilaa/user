<?php

require_once 'lib/router.php';

router('GET', '/users/all', 'userController@getAllUsers');
router('GET', '/user/{id}', 'userController@getUser');
router('GET', '/addUser', 'userController@addUser');