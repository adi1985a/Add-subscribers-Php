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
            $stmt = $pdo->prepare("DELETE FROM subscribers WHERE id = :id");
            $stmt->bindParam(':id', $user_id);
            $stmt->execute();

            $stmt = $pdo->prepare("INSERT INTO audit_subscribers (subscriber_name, action_performed) VALUES (:subscriber_name, 'Deleted a subscriber')");
            $stmt->bindParam(':subscriber_name', $user['fname']); 
            $stmt->execute();

            echo "The user has been successfully deleted.";
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
    echo "No user ID data provided for deletion.";
}

?>

