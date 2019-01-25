<?php

require_once "lib/DBConnection.php";


function modelGetAllUsers()
{
    $query = "select * from user";
    return get($query);
}

function modelAddUser($data)
{

    $query = "insert into user";
    $cols = '';
    $vals = '';

    $size = sizeof($data);
    $separator = ',';
    $iteration = 0;
    print_r($size);
    foreach ($data as $key => $value) {
        $iteration++;
        if ($iteration == $size) {
            $separator = '';
        }
        $cols .= "$key $separator";
        $vals .= "'$value' $separator";
    }
//    print_r("\n".$cols ."  \n ".$vals);
    $query .= " ($cols) values ($vals);";
    print_r($query);
    return insert($query);


}

function modelGetUser($id)
{
    $query = "select * from user where id = $id;";
    return get($query);

}

function modelUpdateUser($data, $id)
{
    $query = "update user set ";
//    print_r($data);


    $size = sizeof($data);
    $separator = ',';
    $iteration = 0;
//    $id=$data['id'];
//    print_r($data);
//    print_r($size);
    foreach ($data as $key => $value) {
        $iteration++;
        if ($iteration == $size) {
            $separator = '';
        }
        $query .= " $key = '$value' $separator ";

    }
    $query .= " where id = $id";
    return update($query);
}

function modelDeleteUser($id)
{
    $query="delete from user where id = $id";
    return delete($query);
}