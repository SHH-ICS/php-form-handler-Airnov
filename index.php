<!DOCTYPE html>
<html lang="en">
<head>   <link rel="apple-touch-icon" sizes="180x180" href="monkeyfavcin/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="monkeyfavcin/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="monkeyfavcin/favicon-16x16.png">
<link rel="manifest" href="monkeyfavcin/site.webmanifest">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <form method="post">
        <input type="text" name="username">
        <input type="submit" value="submit">
    </form>
    <?php 
    if (isset($_POST["username"]))
    {
    echo "welcome ".$_POST ["username"]; 

    }
    

    ?>
</body>
</html>
