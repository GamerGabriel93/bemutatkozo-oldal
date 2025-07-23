<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kapcsolat</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <?php include_once "menu.php" ?>
    <div class="container">
        <div class="row my-4">
            <div class="col">
                <h1>Kapcsolat</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="fs-5">Telefon: <?php echo "+36/70-318-7133" ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="fs-5">Email: <?php echo "gabyka199311@gmail.com" ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="fs-5">Cím: <?php echo "Budapest Árpád Fejedelem útja 8." ?></p>
            </div>
        </div>
        <div class="row my-4">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Név</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Kiss Béla">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="valami@valami.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Üzenet</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Küldés</button>
            </div>
        </div> 
    </div>
</nav>
</body>
</html>