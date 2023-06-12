<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin - Ticket</title>
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
                    <a class="navbar-brand" href="/home"><span class="fw-bolder text-gradient">Uphoria</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            {{-- <li class="nav-item"><a class="nav-link" href="/admin/customer">Customer</a></li> --}}
                            <li class="nav-item"><a class="nav-link" href="/admin/transaction">Transaction</a></li>
                            <li class="nav-item"><a class="nav-link" href="/admin/ticket">Ticket</a></li>
                            <li class="nav-item"><a class="nav-link" href="/admin/event">Event/Concert</a></li>
                            {{-- <li class="nav-item"><a class="nav-link" href="/notification">Notification</a></li>
                            <li class="nav-item"><a class="nav-link" href="/profile">Profile</a></li> --}}
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

                            @if (session('message'))
                                <div class="alert alert-success">{{ session('message') }}</div>
                            @endif

                            <div class="card">
                                <div class="card-header">
                                    <h4>
                                        Ticket Detail
                                        <a href="{{ url('admin/ticket/create') }}" class="btn btn-primary float-end">Add Ticket</a>
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>ID_Ticket</th>
                                                    <th>Concert_Name</th>
                                                    <th>CAT</th>
                                                    <th>Seat</th>
                                                    {{-- <th>Poster</th> --}}
                                                    <!-- <th>Section</th>
                                                    <th>Ticket Price</th>
                                                    <th>Row</th> -->
                                                    <th>Action</th>
                                                    {{-- <th>Concert_Location</th> --}}
                                                
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($ticket as $item)
                                                <tr>
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->event->concert_name }}</td>
                                                    <td>{{ $item->cat }}</td>
                                                    <td>{{ $item->seat }}</td>
                                                    {{-- <td>
                                                        @if (!empty($item->image))
                                                            <img class="img-thumbnail" src="{{ asset('assets/img/uploads/' . $item->image) }}" alt="Image">
                                                        @endif
                                                    </td> --}}
                                                    {{-- <!-- <td>{{ $item->section }}</td>
                                                    <td>{{ $item->ticket_price }}</td> -->
                                                    <!-- <td>{{ $item->row }}</td> --> --}}
                                                    <td>
                                                        <a href="{{ url('admin/ticket/'.$item->id.'/edit') }}" class="btn btn-success">Edit</a>
                                                        <form action="{{ route('admin.ticket.destroy', ['id' => $item->id]) }}" method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>

                                        </table>
                                    </div>
                                    <br>
                                        {{-- <div class="mb-3">
                                            <button type="submit" class="btn btn-primary">Edit</button>
                                        </div> --}}
                                    
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
