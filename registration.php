<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Registration</title>
</head>
<body>

    <div class="row">
        <?php include('navbar.php'); ?>
    </div>
    <div class="row">
        <section class="gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-info text-dark" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <div class="mb-md-5 mt-md-4 pb-5">

                            <h2 class="fw mb-2 text-uppercase">Registration</h2>
                            <p class="text-dark-50 mb-5">Please enter your informations</p>

                            <div class="form-outline form-white mb-4">
                                <input type="text" id="name" class="form-control form-control-lg" />
                                <label class="form-label" for="name">Name</label>
                            </div>
                            <div class="form-outline form-white mb-4">
                                <input type="text" id="surname" class="form-control form-control-lg" />
                                <label class="form-label" for="surname">Surname</label>
                            </div>

                            <div class="form-outline form-white mb-4">
                                <input type="email" id="typeEmailX" class="form-control form-control-lg" />
                                <label class="form-label" for="typeEmailX">Email</label>
                            </div>

                            <div class="form-outline form-white mb-4">
                                <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                                <label class="form-label" for="typePasswordX">Password</label>
                            </div>
                            <div class="form-outline form-white mb-4">
                                <input type="password" id="repeatPassword" class="form-control form-control-lg" />
                                <label class="form-label" for="repeatPassword">Repeat Password</label>
                            </div>

                            <button class="btn btn-outline-dark btn-lg px-5" type="submit">Submit</button>

                        </div>

                        <div>
                            <p class="mb-0">Already have an account? <a href="login.php" class="text-dark-50 fw-bold">Sign In</a></p>
                        </div>

                    </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
    </div>

    <div class="row">
        <?php include('footer.php'); ?>
    </div>

</body>
</html>