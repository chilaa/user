<?php

global $act;
require_once 'lib/router.php';
require_once 'view.php';
require_once 'model.php';
require_once 'lib/templating.php';

//
//$data = getRoute();
//$act = 'html' . $act;
////echo $act;
//
//$view = $act($data);


function getUsersAction()
{
    $users = getUsers();

    renderTemplate('templates/all_users.php', $users);

}

function getUserAction($username)
{
    $user=getUser($username);
    renderTemplate('templates/user.php', $user);
}
function addUserAction(){

}

//getUsersAction();
getUserAction('frank');