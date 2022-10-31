@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
      
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>FirstName</label></br>
        <input type="text" name="firstname" id="firstname" class="form-control"></br>

        <label>LastName</label></br>
        <input type="text" name="lastname" id="lasttname" class="form-control"></br>

        <label>Email</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>

        <label>Phone/Mobile</label></br>
        <input type="text" name="phone" id="phone" class="form-control"></br>

        <label>Nationality</label></br>
        <input type="text" name="nationality" id="nationality" class="form-control"></br>

        <label>Date Of Birth</label></br>
        <input type="text" name="dob" id="dob" class="form-control"></br>

        <label>City</label></br>
        <input type="text" name="city" id="city" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop