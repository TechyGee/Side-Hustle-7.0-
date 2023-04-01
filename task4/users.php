<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users</title>
    </head>
<body>
    <?php
    require "db_conn.php";

    $users = mysqli_query($db_connect, "SELECT * FROM users");
    
    ?>

    <h1>List of My Registered Users</h1>

    <table>
        <thead>
            <tr>
                <th>S/N</th>
                <th>firstName</th>
                <th>lastName</th>
                <th>surname</th>
                <th>email</th>
                <th>gender</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['firstName'] ?></td>
                    <td><?= $user['lastName'] ?></td>
                    <td><?= $user['username'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['gender'] ?></td>
                </tr>

            <?php endforeach; ?>

        </tbody>
    </table>
    </body>
</html>