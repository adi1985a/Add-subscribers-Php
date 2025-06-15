<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
</head>

<body>

    <h1>Edit User</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) 
    {
        $user_id = $_GET['id'];

        $host = 'localhost';
        $dbname = 'test';
        $username = 'root';
        $password = '';

        try 
        {
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $pdo->prepare("SELECT * FROM subscribers WHERE id = :id");
            $stmt->bindParam(':id', $user_id);
            $stmt->execute();
            $user = $stmt->fetch();

            if ($user) 
            {
                echo "<form method='post' action='update_user.php'>
                        <input type='hidden' name='id' value='{$user['id']}'>
                        <label>First Name:</label>
                        <input type='text' name='fname' value='{$user['fname']}' required>
                        <label>Email:</label>
                        <input type='email' name='email' value='{$user['email']}' required>
                        <button type='submit' name='submit'>Save Changes</button>
                    </form>";
            }
            else 
            {
                echo "No user found with the given ID.";
            }

        } 
        catch (PDOException $e) 
        {
            echo "Error: " . $e->getMessage();
        }
    } 
    else 
    {
        echo "No user ID data provided for editing.";
    }
    ?>

</body>
</html>
