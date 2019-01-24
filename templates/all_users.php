<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Users</title>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="../public/js/main.js"></script>

    <style>
        table, th, td {
            border: 1px solid black;
            border-radius: 5px;
            padding: 10px;
        }
    </style>
</head>
<body>

<h1>All users</h1>


<table>
    <thead>
    <tr>
        <td>ID</td>
        <td>User Name</td>
        <td>Password</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Age</td>
        <td>Gender</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $user): ?>
    <tr>
        <td><?php echo $user['id']?></td>
        <td><a href="/user/<?php echo $user['id']?>">
                <?php echo $user['user_name'] ?></a></td>
        <td><?php echo $user['password']?></td>
        <td><?php echo $user['first_name'] ?></td>
        <td><?php echo $user['last_name'] ?></td>
        <td><?php echo $user['age'] ?> </td>
        <td><?php echo $user['gender'] ?> </td>
        <td><a href="/editUser/<?php echo $user['id'] ?> ">Edit</a> /
            <a href="/deleteUser/<?php echo $user['id'] ?> "> Delete</a>
        </td>
    </tr>

    <?php endforeach;?>
    </tbody>
</table>
<br/>
<a href="/addUser">Add new user</a>
</body>
</html>