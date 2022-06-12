<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">

    <title>Locations</title>
</head>
<body>

    <div class="row">
        <?php include('navbar.php'); ?>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 offset-md-3 text-center mt-2">
        <h1>Where to find us:</h1>
        <p>
            <div class="map-responsive">
                <iframe src="https://maps.google.com/maps?q=kralja%20petra%20sva%C4%8Di%C4%87a%201c,%20osijek&t=&z=15&ie=UTF8&iwloc=&output=embed" class="p-3" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </p>
    </div>          

    <div class="row">
        <?php include('footer.php'); ?>
    </div>
</body>
</html>