<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MP3 em PHP</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        
         <?php
          
            include_once "helpers.php";
            if(isset($_GET['page'])){
                if(file_exists("pages/{$_GET['page']}.php")){
                    include_once "pages/{$_GET['page']}.php";
                }else{
                    
                    include_once 'pages/404.php';
                }
                
            }else{
                include_once 'pages/albuns.php';
            }
        ?> 
    </div>
</body>
</html>