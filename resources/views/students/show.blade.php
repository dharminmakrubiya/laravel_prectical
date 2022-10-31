@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">FirstName : {{ $students->firstname }}</h5>
        <h5 class="card-title">LastName : {{ $students->lastname }}</h5>
        <p class="card-text">Email : {{ $students->email }}</p>
        <p class="card-text">Phone : {{ $students->phone }}</p>
        <p class="card-text">Nationality : {{ $students->nationality }}</p>
        <p class="card-text">Date Of Birth : {{ $students->dob }}</p>
        <p class="card-text">City : {{ $students->city }}</p>
  </div>
      
    </hr>
  
  </div>
</div>