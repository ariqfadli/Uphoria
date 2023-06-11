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
                    {{-- <img class="me-3 profile-img" src="assets/uphoria.png" alt="..." width=30 height=60;/> --}}
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
            <form action="{{ url('/order') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label>User</label>
                    <select name="user_id" class="form-control">
                        @foreach ($user as $item)
                            <option value="{{$item->id}} | {{ $item->name }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label>Select Ticket</label>
                    <select name="ticket_id" class="form-control">
                        @foreach ($ticket as $item)
                            <option value="{{$item->id}} | {{ $item->concert_name }}">{{ $item->concert_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label>Payment Method</label>
                    <select name="payment_method" class="form-control">
                        <option> Gopay </option>
                        <option> Transfer Bank </option>
                    </select>
                </div>
                <div class="mb-3">
                    <label>Total Price</label>
                    <input type="number" name="total_price"class="form-control">
                </div>
                <div class="mb-3">
                    <label>Transaction Date</label>
                    <input type="date" name="transaction_date"class="form-control">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>

        <!-- end form pay -->
    </div>

    