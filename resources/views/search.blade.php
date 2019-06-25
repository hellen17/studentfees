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
    <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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
        <a class="nav-link" href="{{ url('/') }}">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">Student Registration</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('fees') }}">Fees Payment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('viewfees') }}">View Fees</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="">Search<span class="sr-only">(current)</span></a>
      </li>
    </ul>
    </div>
  </div>
    </nav>
<script>console.log(@json($records));</script>
<div class="container">
<form> 
<div class="form-group">
<legend><center>Search<i class="fa fa-search"></i></center></legend>
  <label class="col-form-label" for="inputDefault">Enter Student Number</label>
  <input type="text" name="student_id" class="form-control" placeholder="Search Student Number">
  
</div>
<!-- <input type='text' name='student_id' placeholder='Search Student Id'/> -->
<button type='submit' class="btn btn-success">Search</button>
</form>
<table class="table" align="center">
  <thead class="thead-dark">
<tr>
<th scope="col">Student Number</th>
<th scope="col">Student Name</th>
<th scope="col">Amount Paid</th>

</tr>
</thead>
<tbody>
@foreach($records as $record)
<tr>
    <td>{{ $record->student_id }}</td>
    <td> {{ $student->full_name }}</td>
    <td> {{$record->amount}} </td>
</tr>
@endforeach
</tbody>
</table>
</div>
</body></html>