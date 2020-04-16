@extends('layouts.app')

@section('content')
<style>
    body {
      background-image: url("{{ asset('assets/img/white.jpg') }}");
      background-position: center;
      background-size: cover;
      height: 600px;
    }

    .form {
      margin: auto;
      margin: 0 480px;
    }

    .form .card{
      background-color: rgb(255, 255, 255, 0.9);
      margin-top: 130px;
    }

    label.for{
        color: black;
    }

    .container{
        border-radius: 20;
    }

    table {
      margin: 30px 0;
    }

    table tr td {
      padding: 2px 0;
    }
  </style>
<link rel="stylesheet" type="text/css" href="login.css">
<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
<img src="dokter.jpg" alt="">
<div class="container">
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body"> -->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <h2 class="text-center">Covid19 Test</h2>
                        <hr>
                        <div class="form-group">
                            <label for="name" >{{ __('Name') }}</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                                </div>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Masukan Nama Anda">
                            </div>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        <div class="form-group ">
                            <label for="email">{{ __('Email') }}</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                                </div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Masukan Email Anda">
                             </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                               <center> <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                                </center>
                                
                               
                            </div>
                            <br>
                        
                        </div>
                    </form>
                <!-- </div>
            </div>
        </div>
    </div> -->
</div>
<!-- <div class="container">
    <h2 class="text-center">Register</h2>
    <form>
        <div class="formgruop">
            <label>Name</label>
            <input type="text" name="" class="form-control" placeholder="Masukan Nama Anda">  
        </div>

        <div class="formgruop">
            <label>Email</label>
            <input type="text" name="" class="form-control" placeholder="Masukan Email Anda">  
        </div>
        <br>
        <button type="Submit" class="btn btn-primary">Next</button>
        <button type="reset" class="btn btn-danger">Reset</button>
    </form>
</div> -->
@endsection


