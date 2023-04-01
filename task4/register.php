<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Flow</title>
</head>
<body>
    
    <form action="process.php" method="post">
        <div>
            <label for="fname">First Name</label><br>
            <input type="text" name="fname" required>
        </div>
        <div>
            <label for="lname">Last Name</label><br>
            <input type="text" name="lname" required>
        </div>
        <div>
            <label for="username">Username</label><br>
            <input type="text" name="username" required>
        </div>
        <div>
            <label for="email">Email</label><br>
            <input type="email" name="email" required>
        </div>
        <div>
            <label for="gender">Gender</label>
            <select name="gender" id="">
                <option value="" selected>select option</option>
                <option value="M" >Male</option>
                <option value="F">Female</option>
            </select>
        </div>
        <div>
            <label for="pass">Password</label><br>
            <input type="password" name="pass" required>
        </div>
        <div>
            <label for="confirm_pass">Confirm Password</label><br>
            <input type="password" name="confirm_pass" required>
        </div>
        <input type="submit" value="submit" name="save_user">
    </form>
</body>
</html>