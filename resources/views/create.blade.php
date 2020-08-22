@extends('layouts.main')
@section('content')
<h1>Create Student Page:</h1>
<div class="container">

    @if($errors->any())
    @foreach($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
        {{ $error }}
    </div>
    @endforeach
    @endif

    <!-- Default form register -->
    <form class="text-center border border-light p-5" action="{{ route('store') }}" method="POST">
        {{ csrf_field() }}
        <p class="h4 mb-4">Add Student</p>

        <div class="form-row mb-4">
            <div class="col">
                <!-- First name -->
                <input type="text" id="defaultRegisterFormFirstName" class="form-control" name="firstname" placeholder="First name">
            </div>
            <div class="col">
                <!-- Last name -->
                <input type="text" id="defaultRegisterFormLastName" class="form-control" name="lastname" placeholder="Last name">
            </div>
        </div>

        <!-- E-mail -->
        <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" name="email" placeholder="E-mail">

        <!--         if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)){
        // Return Error - Invalid Email
        }else{
        // Return Success - Valid Email
        } -->

        <!-- Phone number -->
        <input type="text" id="defaultRegisterPhonePassword" class="form-control" name="phone" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">
        <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">

        </small>


        <!-- Sign up button -->
        <button class="btn btn-info my-4 btn-block" type="submit">Submit</button>


    </form>
    <!-- Default form register -->
</div>

@endsection