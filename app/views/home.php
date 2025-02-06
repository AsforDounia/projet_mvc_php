<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>
    <h1>Welcome to the Home Page!</h1>
    <p>This is the users in your database.</p>

    <?php
    if(isset($users)){
        foreach($users as $user){
            echo "<pre>";
            echo "username: ".$user['username']." user role: ".$user['role'];
        }
    }
    ?>
</body>
</html>