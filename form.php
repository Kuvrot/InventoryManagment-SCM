<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a new element</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet">

</head>
<body>
    
    <?php 
    include "connect.php";
    include "header.html";
    ?>

    <section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
            <div class="card rounded-3 text-black">
            <div class="row g-0">
                <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
                    <div class="text-center">
                        <img src="logo.jpeg"
                            style="width: 25%;" alt="logo">
                        <h4 class="mt-1 mb-5 pb-1">Tecnoldeliciosas</h4>
                        </div>

                        <?php 
                                $table = 0;
                                if (isset($_GET['t'])){
                                    $table = $_GET['t'];
                                }

                                switch ($table){
                                    case 0: 
                                        if (!isset($_GET['id']))
                                            echo "<p> Añadir producto </p>";
                                        include "forms/products.php";
                                        break;
                                    case 1:   
                                        if (!isset($_GET['id']))
                                        echo " <p> Añadir proveedor </p>";
                                        include "forms/suppliers.php";
                                        break;
                                    case 2:  
                                        if (!isset($_GET['id'])) 
                                        echo "<p> Añadir compra </p>";
                                        include "forms/purchases.php";
                                        break;
                                    case 3:  
                                        if (!isset($_GET['id'])) 
                                        echo "<p> Añadir venta </p>";
                                        include "forms/sales.php";
                                        break;
                                    case 4:   
                                        if (!isset($_GET['id']))
                                        echo "<p> Añadir cliente </p>";
                                        include "forms/clients.php";
                                        break;              
                                }

                            ?>

                </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center gradient-custom-1">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                    <h4 class="mb-4"></h4>
                    <p class="small mb-0"></p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>