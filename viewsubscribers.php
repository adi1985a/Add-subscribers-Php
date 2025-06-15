<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User List</title>
</head>
<body>

    <h1>View Users</h1>
    <p>Delete - deletes the user and triggers the after delete event.</p>
    <p>Edit - after editing the user, a trigger will be executed.</p>

    <?php
    
    $host = 'localhost';
    $dbname = 'test';
    $username = 'root';
    $password = '';

    try 
    {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->query("SELECT * FROM subscribers");
        
        echo "<table border='1'>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>";

        $idCounter = 1; 

        while ($row = $stmt->fetch()) 
        {
            echo "<tr>
                    <td>{$idCounter}</td>
                    <td>{$row['fname']}</td>
                    <td>{$row['email']}</td>
                    <td>
                        <a href='subscriber_edit.php?id={$row['id']}'>Edit</a> | 
                        <a href='subscriber_del.php?id={$row['id']}'>Delete</a>
                    </td>
                </tr>";
            $idCounter++; 
        }

        echo "</table>";

    } 
    catch (PDOException $e) 
    {
        echo "Error: " . $e->getMessage();
    }
    ?>

</body>
</html>
