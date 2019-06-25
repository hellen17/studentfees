<!DOCTYPE HTML>
<html>

    <head>
        <!--  <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/jquery-ui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
    <script type="text/javascript" src="{{ url('js/jquery-1.12.4.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/jquery-ui.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/bootstrap.js') }}"></script> -->
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

     <script type="text/javascript" src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    
    </head>
        <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
    <a class="navbar-brand" href="#">
         STUDENT PAYMENT
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">Register Student</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('fees') }}">Fees Payment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('viewfees') }}">View Fees<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('search') }}">Search</a>
      </li>
    </ul>
    </div>
     </div>
    </nav>

<div class="card bg-light text-dark">
  <div class="card-header">
          <div class="container">
        <form method='post'>
        @csrf
  <fieldset>
    <legend><center>Fees Payment</center></legend>
    <div class="card-body">
    <div class="form-group">
      <label for="number">Student Number</label>
      <input type="number" name='sno' class="form-control" id="number" placeholder="Enter Student Number" />
    </div>

    <div class="form-group">
      <label for="number">Amount To Be Paid</label>
      <input type="number" name='amount' class="form-control" id="amount" placeholder="Enter Amount To Be Paid" />
    </div>

    <div class="form-group">
      <label for="date">Date of Payment</label>
      <input type="date" name='paymentdate' class="form-control" id="dateofpayment" placeholder="Enter payment date" />
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
  </fieldset>
</div>
</form>
</div>
</div>
        </body>
</html>