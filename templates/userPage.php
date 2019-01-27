<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editing Users</title>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <!--    <script src="../public/js/main.js"></script>-->
    <script src="../lib/delete.js"></script>
    <style>
        table, th, td {
            border: 1px solid black;
            border-radius: 5px;
            padding: 10px;
        }
        input{
            width: 180px;
            height: 25px;
            padding: 5px;
            border-radius: 5px;
        }
        input[name=id] {
            pointer-events: none;
        }

    </style>
</head>
<body>

<h1>Edit User</h1>


<form action="/updateUser/<?php echo $data['id'] ?>" method="post" enctype="multipart/form-data" >
    <label  for="username" >User name</label><br/>
    <input type="text" value="<?php echo $data['user_name']  ?>"  id="username" name="userName">
    <br/> <br/>

    <img width="200px" height="200px" src="/uploads/uploads/<?php if (isset($data['image'])) echo $data['image']; else echo "default-avatar.jpg"?> " >
    <label for="avatar">Choose</label>
    <input type="file" id="avatar" name="avatar">

    <label  for="id">ID</label><br/>
    <input type="text" id="id"  value="<?php echo $data['id'] ?>" name="id">
    <br/> <br/>

    <label for="password">Password</label><br/>
    <input type="password" id="password" name="password">
    <br/> <br/>

    <label for="firstName">FirstName</label><br/>
    <input type="text" value="<?php echo $data['first_name'] ?>" id="firstName" name="firstName">
    <br/> <br/>

    <label for="LastName">LastName</label><br/>
    <input type="text" value="<?php echo $data['last_name'] ?>" id="LastName" name="lastName">
    <br/> <br/>

    <label for="Age">Age</label><br/>
    <input type="number" value="<?php echo $data['age'] ?>" id="Age" name="age">
    <br/> <br/>

    <label for="Gender">Gender</label><br/>
    <input type="text" value="<?php echo $data['gender'] ?>" id="Gender" name="gender">
    <br/> <br/>

    <input type="submit" value="Save Changes">
</form>

<br/>
<!--<a href="/deleteUser/--><?php //echo $data['id'] ?><!--">Add new user</a>-->
<a href="#" onclick="deleteUser("<?php echo $data['id'] ?> ")">Delete User</a>

</body>
</html>