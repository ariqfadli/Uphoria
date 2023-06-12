<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Uphoria - Notification</title>
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
<div class="row notification-container">
<h2 class="mt-5 mb-5 text-center fw-bolder text-gradient"><b>My Notifications</b></h2>\
@foreach ($transaction as $item)
  <div class="card notification-card notification-invitation">
    <div class="card-body">
      <table>
        <tr>
          <td style="width:70%"><div class="card-title">Your ticket payment of <b>{{ $item->concert_name }}</b> via <b>{{ $item->payment_method }}</b> with total transaction {{ 'Rp. '.number_format($item->total_price, 0, ',', '.'); }} is successful! <br> Verification date : {{ $item->transaction_date }} </div></td>
          <td style="width:30%">
   
          </td>
        </tr>
      </table>
    </div>
  </div>
@endforeach
<section class="py-5 bg-gradient-primary-to-secondary text-white">
  <div class="container px-5 my-5">
      <div class="text-center">
          <h2 class="display-4 fw-bolder mb-4">Let's build an euphoria in Uphoria</h2>
          <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="ticket">Buy another ticket</a>
      </div>
  </div>
</section>
<footer class="bg-white py-4 mt-auto">
  <div class="container px-5">
      <div class="row align-items-center justify-content-between flex-column flex-sm-row">
          <div class="col-auto"><div class="small m-0">Copyright &copy; Your Website 2023</div></div>
          <div class="col-auto">
              <a class="small" href="#!">Privacy</a>
              <span class="mx-1">&middot;</span>
              <a class="small" href="#!">Terms</a>
              <span class="mx-1">&middot;</span>
              <a class="small" href="#!">Contact</a>
          </div>
      </div>
  </div>
</footer>
  
  {{-- <div class="card notification-card notification-warning">
    <div class="card-body">
       <table>
        <tr>
          <td style="width:70%"><div class="card-title">Coming Soon <b>"Justin Bieber World Tour Concert in Indonesia"</div></td>
          <td style="width:30%">
          
          </td>
        </tr>
      </table>
    </div>
  </div>
  
  <div class="card notification-card notification-danger">
    <div class="card-body">
       <table>
        <tr>
          <td style="width:70%"><div class="card-title">Coming Soon <b>"Coldplay World Tour Indonesia 2023"</div></td>
          <td style="width:30%">
         
          </td>
        </tr>
      </table>
    </div>
  </div>
  
  <div class="card notification-card notification-reminder">
    <div class="card-body">
       <table>
        <tr>
          <td style="width:70%"><div class="card-title">You have <b>2</b> upcoming payment(s) this week</div></td>
          <td style="width:30%">
            
          </td>
        </tr>
      </table>
    </div>
  </div> --}}
  
  
  </div>