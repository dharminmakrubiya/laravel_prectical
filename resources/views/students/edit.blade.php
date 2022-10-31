@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>FirstName</label></br>
        <input type="text" name="firstname" id="firstname" value="{{$students->firstname}}" class="form-control"></br>

        <label>LastName</label></br>
        <input type="text" name="lastname" id="lastname" value="{{$students->lastname}}" class="form-control"></br>

        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$students->email}}" class="form-control"></br>

        <label>Phone/Mobile</label></br>
        <input type="text" name="phone" id="phone" value="{{$students->phone}}" class="form-control"></br>

        <label>Nationality</label></br>
        <input type="text" name="nationality" id="nationality" value="{{$students->nationality}}" class="form-control"></br>

        <label>Date Of Birth</label></br>
        <input type="text" name="dob" id="dob" value="{{$students->dob}}" class="form-control"></br>

        <label>City</label></br>
        <input type="text" name="city" id="city" value="{{$students->city}}" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop