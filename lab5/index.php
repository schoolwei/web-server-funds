<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <h1>3.2.5 Your user agent is:</h1>
    <pre><?= $_SERVER['HTTP_USER_AGENT'] ?></pre>

    <h1>3.3 Subscribe Form</h1>
    <form action="subscribe.php" method="post">
        <input name="name" placeholder="Your name" required>
        <input name="age" type="number" placeholder="Your age" required>
        <input name="email" type="email" placeholder="Your email" required>
        <input type="submit">
    </form>
</body>
</html>