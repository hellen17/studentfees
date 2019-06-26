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

    <style>
              form_main {
    width: 100%;
}
.form_main h4 {
    font-family: roboto;
    font-size: 20px;
    font-weight: 300;
    margin-bottom: 15px;
    margin-top: 20px;
    text-transform: uppercase;
}
.heading {
    border-bottom: 1px solid #fcab0e;
    padding-bottom: 9px;
    position: relative;
}
.heading span {
    background: #9e6600 none repeat scroll 0 0;
    bottom: -2px;
    height: 3px;
    left: 0;
    position: absolute;
    width: 75px;
}   
.form {
    border-radius: 7px;
    padding: 6px;
}
.txt[type="text"] {
    border: 1px solid #ccc;
    margin: 10px 0;
    padding: 10px 0 10px 5px;
    width: 100%;
}
.txt[type="number"] {
    border: 1px solid #ccc;
    margin: 10px 0;
    padding: 10px 0 10px 5px;
    width: 100%;
}
.txt[type="date"] {
    border: 1px solid #ccc;
    margin: 10px 0;
    padding: 10px 0 10px 5px;
    width: 100%;
}
.txt_3[type="text"] {
    margin: 10px 0 0;
    padding: 10px 0 10px 5px;
    width: 100%;
}
.txt2[type="submit"] {
    background: #242424 none repeat scroll 0 0;
    border: 1px solid #4f5c04;
    border-radius: 25px;
    color: #fff;
    font-size: 16px;
    font-style: normal;
    line-height: 35px;
    margin: 10px 0;
    padding: 0;
    text-transform: uppercase;
    width: 30%;
}
.txt2:hover {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    color: #5793ef;
    transition: all 0.5s ease 0s;
}



    </style>
    
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




    <div class="container">
 @if(count($errors->all()))
            <ul>
              @foreach($errors->all() as $error)
              <li class="alert alert-danger">Error {{$error}}</li>
              @endforeach
            </ul>
            @endif

            @if(Session::has('sno'))
            <p class="alert alert-success">Payment successful</p>
            @elseif(empty(Session::has('sno')))
            <p class="alert alert-danger">Please enter the fields</p>
            @endif

  <div class="row">
    <div class="col-md-4">
    <div class="form_main">
                <h4 class="heading"><strong>FEE </strong> PAYMENT <span></span></h4>
                <div class="form">
                <form  method="post" id="contactFrm" name="contactFrm">
                   @csrf
                  
                  <div class="form-group">
                     <label for="number">Student Number</label>
                      <input type="number" name='sno' class="txt" id="number" placeholder="Enter Student Number" >
                    </div>
                    <div class="form-group">
                     <label for="address">Amount to be Paid</label>
                      <input type="number" name='amount' class="txt" id="number" placeholder="Enter Amount To Be Paid" >
                    </div>

                    <div class="form-group">

                           <label for="date">Date Of Payment</label>
                        <input type="date" name='paymentdate' class="txt" id="dateofpayment" placeholder="Enter payment date" >
                      </div>

                     <input type="submit" value="submit" name="submit" class="txt2">
                </form>
            </div>
            </div>
            </div>
 
</div>
</div>















<!-- <div class="card bg-light text-dark">
  <div class="card-header">
          <div class="container">
        <form method='post'>
        @csrf
  <fieldset>
    <legend><center>Fees Payment</center></legend>
    <div class="card-body  mx-auto" style="width: 670px;">
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
</div> -->
        </body>
</html>