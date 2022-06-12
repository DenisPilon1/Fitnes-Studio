<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">

    <title>Pilates Studio</title>
</head>
<body>

    <div class="row">
        <?php include('navbar.php'); ?>
    </div>

    <!-- Carousel -->
    <div class="row mt-4">
        <div class="col-md-8 col-sm-12 offset-md-2">
            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img id="carousel_img" src="/img/carousel/working_time.jpg" alt="Working Time" class="d-block">
                        <div class="carousel-caption">
                            <h3 class="mt-5">News</h3>
                            <p>We have new working time</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img id="carousel_img" src="/img/carousel/new_equipment.jpg" alt="new_equipment.jpg" class="d-block">
                        <div class="carousel-caption">
                            <h3>News</h3>
                            <p>New equipment just arrived</p>
                        </div> 
                    </div>
                    <div class="carousel-item">
                        <img id="carousel_img" src="/img/carousel/membership1.png" alt="Student Memberships" class="d-block">
                        <div class="carousel-caption">
                            <p>Student Membership</p>
                        </div>  
                    </div>
                </div>

                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </div>

    <div class="row">
        <h5 class="offset-1 mt-5">Training Halls</h5>
    </div>
    <div class="row">
        <div class="col-md-5 col-sm-12 offset-md-1">
            <img style="height: 100%;; width:100%;" src="img/training_halls/hall1.jpg" alt="">
        </div>
        <div class="col-sm-offset-1 col-md-5  col-sm-12">
            <img style="height: 100%;; width:100%;" src="img/training_halls/hall2.jpg" alt="">
        </div>
    </div>
    <div class="row">
        <a href="#"><h5 class="text-center mt-3">More Images</h5></a>
    </div>

    <div class="row">
        <h5 class="offset-1 mt-5">Meet your Trainers</h5>
    </div>
    <div class="row">
        <div class="col-md-5 col-sm-12 offset-md-1">
            <img style="height: 75%;; width:100%;" src="img/trainers/trainer1.jpg" alt="">
            <div class="text-center">Ivan, mag. cin.</div>
            <div class="text-center">-> Advanced Fitness Trainer</div>
            <div class="text-center">-> Personal Trainer</div>
        </div>
        <div class="col-sm-offset-1 col-md-5  col-sm-12">
            <img style="height: 75%;; width:100%;" src="img/trainers/trainer2.jpg" alt="">
            <div class="text-center">Petar, mag. cin.</div>
            <div class="text-center">-> Advanced Fitness Trainer</div>
            <div class="text-center">-> Group Trainer</div>
        </div>
    </div>

    <div class="row">
        <h5 class="offset-1 mt-5">Group training schedule</h5>
    </div>
    <div class="col-md-6  col-sm-12 offset-md-3">
            <img style="height: 75%;; width:100%;" src="img/schedule.jpg" alt="">
    </div>
    
    <div class="row">
        <?php include('footer.php'); ?>
    </div>

</body>
</html>