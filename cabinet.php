<?php
    //var_dump($_COOKIE);
    if ( !isset($_COOKIE['email']) OR trim($_COOKIE['email']) ==''){
        header("Location: index.html");
        exit; 
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>User Page</h1>
    <button id="logout">LogOUT</button><br>
    <br>

    <form method="POST">
        <div>name: <input type="text" name="name" id="signup-name"></div>
        <div>password: <input type="text" name="pass" id="signup-pass"></div>
        <div>birthday: <input type="text" name="birthday" id="signup-birthday"></div>
        <div>sex:
            <div> <input type="radio" value="male" name="sex" checked class="sex">male</div>
            <div><input type="radio" value="female" name="sex" class="sex">female</div>
            <div><input type="radio" value="other" name="sex" class="sex">other</div>
        </div>
        <input type="submit" value="upload" id="signUp-submit">
    </form>

    <script src="script/logout.js"></script>
    <script src="script/ajax.js"></script>
    <script src="script/get_user_data.js"></script>
</body>

</html>