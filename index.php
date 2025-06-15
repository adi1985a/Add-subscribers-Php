<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Add User</title>
</head>

<body>

    <h1>Example: Trigger Before Adding User</h1>
    <h2>Add User</h2>

    <form action="add_user.php" method="post">
        <p>First Name:</p>
        <input type="text" name="fname" placeholder="First Name" required>
        
        <p>Email:</p>
        <input type="email" name="email" placeholder="Email" required>
        
        <button type="submit" name="submit">Register Subscriber</button>
    </form>

    <p>After clicking "Register Subscriber", a trigger will be executed before adding the user to the "subscribers" table.</p>

</body>
</html>
