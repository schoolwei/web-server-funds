<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Thank you for subscribing</title>
</head>
<body>
    <?php 
    $data = $_SERVER['REQUEST_METHOD'] == 'GET'
                        ? $_GET : $_POST;
    $name = htmlspecialchars($data['name'] ?? 'unknown');
    $age = htmlspecialchars($data['age'] ?? 'undefined');
    $email = htmlspecialchars($data['email'] ?? 'anonymous');
    ?>
    <h1>Thank you for subscribing</h1>
    <h2>GET</h2>
    <pre><?= var_dump($_GET) ?></pre> 
    <h2>POST</h2>
    <pre><?= var_dump($_POST) ?></pre>
    <h2>User friendly</h2>
    <p>Your name is <?= $name ?></p>
    <p>Your age is <?= $age ?></p>
    <p>Your email is <?= $email ?></p>
</body>
</html>