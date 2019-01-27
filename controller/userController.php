<?php
require_once 'model.php';
require_once 'templates/template_engine.php';

function getAllUsers()
{
    $users = modelGetAllUsers();
//    print_r($users);
    render("all_users.php", $users);


}

function addUser()
{
    render('add_user.php');
}

function getUserData()
{
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    $avatar = '';

    $check = getimagesize($_FILES['avatar']['tmp_name']);

    if ($check) {

        $fileTmpPath = $_FILES['avatar']['tmp_name'];
        $fileName = $_FILES['avatar']['name'];
        $fileNameCmps = explode('.', $fileName);
        $fileExtension = strtolower(end($fileNameCmps));
        $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
        $uploadFileDir = __ROOT__ . '/uploads/uploads/';
        $dest_path = $uploadFileDir . $newFileName;



        if (move_uploaded_file($fileTmpPath, $dest_path))
            $avatar = $newFileName;

    }

    $response = [
        'user_name' => $userName,
        'password' => $password,
        'first_name' => $firstName,
        'last_name' => $lastName,
        'age' => $age,
        'gender' => $gender,
        'image' => $avatar
    ];
    return $response;
}

function addUserToDB()
{
    if (isset($_POST)) {
        $response = modelAddUser(getUserData());
        $status = $response ? 'success' : 'error';
        header("Location: /users/all?status=$status");
    } else {
        echo 'invalid data';
    }

}

function editUser($id)
{
    $user = modelGetUser($id);
//    print_r($user);

    render('userPage.php', $user[0]);
}


function updateUser($id)
{

//    $id = $_POST['id'];

    $response = modelUpdateUser(getUserData(), $id);
    $status = $response ? 'success' : 'error';
    header("Location: /users/all?status=$status");

}

function deleteUser($id)
{
    $response = modelDeleteUser($id);
    $status = $response ? 'success' : 'error';
    header("Location: /users/all?status=$status");

}