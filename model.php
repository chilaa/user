<?php
global $con;
$con = mysqli_connect('localhost', 'root', 'Root123!', 'task_manager');
require_once "lib/DBConnection.php";

function getUsers()
{
    global $con;
    $string = "select * from user";
    $query = mysqli_query($con, $string);
    $result = mysqli_fetch_all($query, 1);

    return $result;
}

function getUser($username)
{
    global $con;
    $string = "select * from user where user_name='$username'";
    $query = mysqli_query($con, $string);
    $result = mysqli_fetch_all($query, 1);

    return $result;
}

function addUser()
{

}

function modelGetAllUsers()
{
    $query = "select * from user";
    return get($query);
}
function modelAddUser(){


}