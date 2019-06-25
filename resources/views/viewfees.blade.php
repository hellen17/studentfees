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
        <a class="nav-link" href="{{ route('register') }}"> Register Student</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('fees') }}">Fees Payment</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('viewfees') }}">View Student Fees <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('search') }}">Search</a>
      </li>
    </ul>
    </div>
  </div>

    </nav>

<div class="container">
<legend><center>View Fees</center></legend>
<table class="table">
<thead class="thead-dark">
<tr class="table-light">
<th scope="col">Student Number</th>
<th scope="col">Student Name</th>
<th scope="col">Total Fees</th>


</tr>
</thead>
<tbody>
@foreach($records as $record)
<tr class="table-light">
  <!--  <th scope="row">1</th> -->
    <td>{{$record->id }}</td>
    <td> {{$record->full_name }} </td>
    <td> {{$record->fees_total}} </td>
  
</tr>
@endforeach
</tbody>
</table>
</div>
</body></html>
