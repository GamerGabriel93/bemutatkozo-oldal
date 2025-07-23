<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kezdőlap</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <?php include_once "menu.php" ?>
    <div class="container">
        <div class="row align-items-center mx-auto my-4">
            <div class="col">
            <h1 class="my-4"><?php echo "Cégnév" ?></h1>
            <p><?php echo "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus debitis dolor amet unde ea nesciunt maxime eveniet autem, magnam ducimus adipisci ratione eius fuga, sit saepe doloribus, quibusdam laborum cum!" ?></p>
            </div> 
            <div class="col">
                <img src="image/tanacsadas.jpg" class="img-fluid rounded" alt="">
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col">
                <p class="my-4">Új sor</p>
            </div>
        </div>
    </div>
    <footer class="container-flex bg-light py-5">
        <div class="row text-center">
            <div class="col">
                <p>Footer</p>
            </div>
        </div>
    </footer>
</body>
</html>