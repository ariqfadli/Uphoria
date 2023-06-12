<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Uphoria - My Order</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100 bg-light">
        <main class="flex-shrink-0">
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
                            <nav id="navbar" class="navbar">
                                <ul>
                                  <li><form method="POST" action="{{ route('logout') }}">
                                    @csrf
                        
                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form></li>
                                </ul>
                              </nav><!-- .navbar -->
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page Content-->
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">My Order</span></h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-11 col-xl-9 col-xxl-8">
                        <!-- Experience Section-->
                        <section>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h2 class="text-primary fw-bolder mb-0">Here's your order</h2>
                                <!-- Download resume button-->
                                <!-- Note: Set the link href target to a PDF file within your project-->
                                <a class="btn btn-primary px-4 py-3" href="/ticket">
                                    {{-- <div class="d-inline-block bi bi-download me-2"></div> --}}
                                    Find Another Ticket
                                </a>
                            </div>
                             <!-- Project Card 1-->
                             @foreach ($transaction as $item)
                             <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="text-gradient d-inline">{{ $item->concert_name }}</h2>
                                            <br>
                                            <br>
                                            <h4 class="fw-bolder">Payment Method : </h4>
                                            <p>{{ $item->payment_method }}</p>
                                            <h5 class="fw-bolder">Transaction Date : </h5>
                                            <p>{{ $item->transaction_date }}</p>
                                            <h5 class="fw-bolder">Total Price :</h5>
                                            <h5 style="position: absolute;"><span class="text-gradient d-inline"> {{ 'Rp. '.number_format($item->total_price, 0, ',', '.'); }}</h5>
                                        </div>
                                        {{-- <img class="profile-img ms-auto me-5" src="assets/sza.jpg" alt="..." width="150px" height="150px";/> --}}
                                    </div>
                                </div>
                            </div>
                            @endforeach
        <!-- Footer-->
        <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0">Copyright &copy; Your Website 2023</div></div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>