<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo isset($titulo_pagina) ? $titulo_pagina : "Prueba  Programador ";  ?> - V1.0</title>
    <!-- Bootstrap CSS -->
    <!-- <link href="/shop/libs/css/bootstrap.css" rel="stylesheet" media="screen">
     -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <?php include 'nav.php'; ?>

    <!-- container -->
    <div class="container">

        <div class="page-header">
            <h1><?php echo $titulo_pagina; ?></h1>
        </div>