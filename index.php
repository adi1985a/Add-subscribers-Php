<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Dodaj Użytkownika</title>
</head>

<body>

    <h1>Przykład: Wyzwalacz przed dodaniem użytkownika</h1>
    <h2>Dodaj użytkownika</h2>

    <form action="add_user.php" method="post">
        <p>Imię:</p>
        <input type="text" name="fname" placeholder="First Name" required>
        
        <p>Email:</p>
        <input type="email" name="email" placeholder="Email" required>
        
        <button type="submit" name="submit">Register Subscriber</button>
    </form>

    <p>Po wciśnięciu "Register Subscriber" zostanie uruchomiony wyzwalacz przed dodaniem użytkownika do tabeli "subscribers".</p>

</body>
</html>
