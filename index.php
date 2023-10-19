<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DGS DEFENSE</title>
</head>
<body>
        <?php
            require "./vendor/autoload.php"; // importa todas as classes para o site
            $url = new Core\ConfigController();  //  
            $url->loadPage();


        ?>
</body>
</html>