<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', 'Root123!');
define('DB', 'task_manager');

function connection()
{
    $con = mysqli_connect(HOST, USER, PASS, DB);
    if (!$con) {
        exit("Connection error " . mysqli_error($con));
    }
    return $con;
}

function get($query)
{

    $con = connection();
    $result = mysqli_query($con, $query);
    $data = mysqli_fetch_all($result, 1);
    mysqli_close($con);
    return $data;

}

function insert($query)
{
    $con = connection();
    $res = mysqli_query($con, $query);
    mysqli_close($con);
    if ($res) {
        return true;
    } else return false;
}

function update($query)
{
    $con = connection();
    $res = mysqli_query($con, $query);

    mysqli_close($con);
    if ($res) {
        return true;
    } else return false;
}

function delete($query)
{
    $con=connection();
    $res=mysqli_query($con, $query);
    mysqli_close($con);
    return $res ?  true :  false;
}