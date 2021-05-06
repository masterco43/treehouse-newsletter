@extends('layouts.basicLayout')
@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/treehouse.css') }}" >
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h1 class="" style="font-weight: bold; margin-bottom: 0;">Sign Up!</h1>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card ">
                    <div class="card-body">
                        <div class="row" style="padding-left: 3%;">
                            <span>Sign up for our newsletter!</span>
                            <img src="{{ URL::asset('/images/help-icon.png') }}" class="justify-content-right greyout" 
                                style="margin-right:3%; margin-left: auto; cursor: help;" alt="help-icon" height="20px" width="20px"
                                id="helpIcon"
                                >
                        </div>
                        <br>
                        <form action="{{route('signup')}}" method="POST" name="feedback_form" id="feedback_form">
                            @csrf
                            <div class="form-group">
                                <label for="nameInput" style="font-weight: bold;">Name <span class="required" style="">*</span></label>
                                <input required type="text" class="form-control" id="nameInput" name="name" value="{{old('name')}}" minlength="2" maxlength="50">
                            </div>
                            <div class="form-group">
                                <label for="emailInput" style="font-weight: bold;">E-mail Address <span class="required" style="">*</span></label>
                                <input required type="email" class="form-control" id="emailInput" name="email" value="{{old('email')}}">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="validation" value="true" id="flexCheckDefault" checked>
                                <label for="emailInput" style="font-weight: bold;">Enable Validation</label>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6 text-center" style="padding-bottom: 10px;">
                                    <button type="submit" class="btn btn-secondary btn-lg borderless" style="background-color: #ea5d24 !important;">Submit</button>
                                </div>
                                <div class="col-md-6 text-center">
                                    <button id="resetbutton" type="button" class="btn btn-outline-secondary btn-lg borderless"><u>Reset</u></button>
                                </div>
                            </div>
                        </form>
                        <br>
                    </div>
                </div>  
            </div>
        </div>
    </div>

    
    <script src="{{ URL::asset('/js/signup.js') }}"></script>
@endsection