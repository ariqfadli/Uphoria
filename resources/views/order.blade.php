<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Uphoria - Order</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="\uphoria\public\css\styles.css" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <!-- Navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <img class="me-3 profile-img" src="assets/uphoria.png" alt="..." width=30 height=60;/>
                    <a class="navbar-brand" href="/dashboard"><span class="fw-bolder text-gradient">Uphoria</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="/ticket">Ticket</a></li>
                            <li class="nav-item"><a class="nav-link" href="/myorder">My Order</a></li>
                            <li class="nav-item"><a class="nav-link" href="/notification">Notification</a></li>
                            <li class="nav-item"><a class="nav-link" href="/profile">Profile</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
    <div class="mb-5 container p-0 mt-5">
        <!-- form pay -->
        <form method="" action="/myorder">
            <div class="card px-4">
                <label class="h8 text-gradient py-3">Payment Details</label>
                <div class="row gx-3">
                    <div class="col-12">
                        <div class="d-flex flex-column">
                            <label class="text mb-1">Person Name</label>
                            <input class="form-control mb-3" type="text" required placeholder="Name" value="">
                            <!-- <x-input-error :messages="$errors->get('name')" class="mt-2" /> -->
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex flex-column">
                            <label class="text mb-1">Card Number</label>
                            <input class="form-control mb-3" type="text" required placeholder="1234 5678 435678">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex flex-column">
                            <label class="text mb-1">Username</label>
                            <input class="form-control mb-3" type="text" required placeholder="Username">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex flex-column">
                            <label class="text mb-1">Password</label>
                            <input class="form-control mb-3 pt-2 " type="password" required placeholder="***">
                        </div>
                    </div>
                    <div class="col-12">
                        <!-- <div class="btn btn-primary mb-3">
                        <span class="text-center">Pay</span>
                        <a class="nav-link" href="/myorder">Pay</a>
                            <span class="fas fa-arrow-right"></span>
                        </div> -->
                        <button type="submit" class="btn btn-primary mb-3" href="/myorder">Pay</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- end form pay -->
    </div>

    