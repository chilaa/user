<?php
require_once 'model.php';
require_once 'templates/template_engine.php';

function getAllUsers()
{
    $users=modelGetAllUsers();
//    print_r($users);
     render("all_users.php", $users);


}
function addUser(){
    render('add_user.php');
}