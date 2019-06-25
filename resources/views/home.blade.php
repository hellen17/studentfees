<html>
<head>
    <!-- <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/jquery-ui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
    <script type="text/javascript" src="{{ url('js/jquery-1.12.4.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/jquery-ui.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/bootstrap.js') }}"></script> -->
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

    <script type="text/javascript" src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
     <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


<style type="text/css">
  .m-b-md {
                margin-bottom: 30px;
                text-align: center;
            }

               html, body {
                margin: 0;
                padding: 0;
                /*text-align: center;*/
              background: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)),url(fees.jpg);
              /*  background-image: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)),url(wood.jpg);*/
                background-size: cover;
                background-position: center;
                font-family: sans-serif;

            }
            img{
                  border-style: none;
                  height: 700px;
                  width: 1500px;
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
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">Register Student</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('fees') }}">Fees Payment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('viewfees') }}">View Fees</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('search') }}">Search</a>
      </li>
    </ul>
  </div>
    </div>
</nav>


 <div class="content">
                <!-- <div class="title m-b-md">
                    Laravel
                </div> -->
<img src="{{ asset('images/fees.jpg') }}">

              </div>



</body>
</html>