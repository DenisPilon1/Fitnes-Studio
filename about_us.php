<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">

    <title>MoreInfo</title>
</head>
<body>
    
    <div class="row">
        <?php include('navbar.php'); ?>
    </div>

    <div class="row mt-5">
        <div class="col-md-3 offset-md-2">
            <h5>General information</h5>
            <p class="mt-5">
                Pilates Studio <br>
                <br>
                Address: <br>
                Zagrebačka 1, Osijek <br> 
                HR-31000 Croatia
            </p>
            <p class="mt-5"><a href="#">View More</a></p>
        </div>
        <div class="col-md-3">
            <h5>Company information</h5>
            <p class="mt-5">
                PIN 63896222880 <br>
                VAT ID HR63896222880 <br>
                <br>
                Reg. ID 030170826 <br>
                Registered capital 200,000.00 HRK <br>
                Reg. in commercial court in Osijek under NO. <br>
                Tt-16/1536-4
            </p>
            <p class="mt-5"><a href="#">View More</a></p>
        </div>
        <div class="col-md-3">
            <h5>Info continues</h5>
            <p class="mt-5">
            Primary bank account <br>
            Privredna Banka Zagreb d.d. <br>
            <br>
            IBAN HR31 2340 0091 1107 7683 8 <br>
            SWIFT code PBZGHR2X
            </p>
            <p class="mt-5"><a href="#">View More</a></p>
        </div>
    </div>

    <div class="row">
        <?php include('footer.php'); ?>
    </div>
</body>
</html>