<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add new user</title>
    <style>
        input{
            width: 180px;
            height: 25px;
            padding: 5px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<h1>Add new user</h1>

<form action="/addUserToDB" method="post" enctype="multipart/form-data" >
    <label for="username">User name</label><br/>
    <input type="text" id="username" name="userName">
    <br/> <br/>
    
    <label for="avatar">Choose an image</label>
    <input type="file" id="avatar" name="avatar">
    <br><br>

    <label for="password">Password</label><br/>
    <input type="password" id="password" name="password">
    <br/> <br/>

    <label for="firstName">FirstName</label><br/>
    <input type="text" id="firstName" name="firstName">
    <br/> <br/>

    <label for="LastName">LastName</label><br/>
    <input type="text" id="LastName" name="lastName">
    <br/> <br/>

    <label for="Age">Age</label><br/>
    <input type="number" id="Age" name="age">
    <br/> <br/>

    <label for="Gender">Gender</label><br/>
    <input type="text" id="Gender" name="gender">
    <br/> <br/>

    <input type="submit" value="Register">
</form>

</body>
</html>