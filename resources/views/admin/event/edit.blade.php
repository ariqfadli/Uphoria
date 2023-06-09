<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin - Edit Event</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <img class="me-3 profile-img" src="../assets/uphoria.png" alt="..." width=30 height=60;/>
                    <a class="navbar-brand" href="/admin/dashboard"><span class="fw-bolder text-gradient">Uphoria</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            {{-- <li class="nav-item"><a class="nav-link" href="/admin/customer">Customer</a></li> --}}
                            <li class="nav-item"><a class="nav-link" href="/admin/transaction">Transaction</a></li>
                            <li class="nav-item"><a class="nav-link" href="/admin/ticket">Ticket</a></li>
                            <li class="nav-item"><a class="nav-link" href="/admin/event">Event/Concert</a></li>
                            <nav id="navbar" class="navbar">
                                <ul>
                                  <li><form method="POST" action="{{ route('admin.logout') }}">
                                    @csrf
                        
                                    <x-dropdown-link :href="route('admin.logout')"
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
            <!-- Header-->
            <header class="py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>
                                        Edit Event
                                        <a href="{{ url('admin/event')}}" class="btn btn-primary float-end">Back</a>
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('admin.event.update', ['id'=>$event->id]) }}" method="POST">

                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label>Concert Name</label>
                                            <input type="text" name="concert_name" value="{{ $event->concert_name }}" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label>Concert Date</label>
<<<<<<< HEAD
                                            <input type="date" name="consert_date" value="{{ $event->consert_date}}" class="form-control">
=======
                                            <input type="date" name="concert_date" value="{{ $event->concert_date}}" class="form-control">
>>>>>>> 08c747986c59c3643c461439df1eb7404da8673f
                                        </div>
                                        <div class="mb-3">
                                            <label>Rundown</label>
                                            <input type="text" name="rundown" value="{{ $event->rundown }}" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label>Concert Location</label>
                                            <input type="text" name="concert_location" value="{{ $event->concert_location }}" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label>Ticket Price</label>
                                            <input type="number" name="price" value="{{ $event->price }}" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-success">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- About Section-->
            <section class="bg-light py-5">
                <div class="container px-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-xxl-8">
                            <div class="text-center my-5">
                                <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Uphoria</span></h2>
                                <p class="text-muted">Uphoria is a web-based application that aims to make it easier for users to buy concert tickets online by using the services of other people or buying them individually. This application can also work with concert organizers to facilitate the process of selling tickets to fans.</p>
                                <div class="d-flex justify-content-center fs-2 gap-4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer-->
        <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0">Copyright &copy; Your Website 2023</div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>
