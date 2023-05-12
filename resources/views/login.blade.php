<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    @push('title')
        <title>Login</title>
    @endpush
</head>
<body>
    @extends('layouts.main')
    @section('main-section')
    <div class="container bg-light">
        <h1>Login-Admin</h1>
        <div class="col-md-10 text-center">
            <form action="{{route('login-user')}}" method="post">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-auto">
                <table class="table table-responsive">
                    {{-- <tr>
                        <th>Email:</th>
                        <td><input type="email" name="email" value="{{old('email')}}"></td>
                        <td><span class="text-denger">
                            @error('email')
                                {{$message}}
                            @enderror
                          </span></td>
                    </tr> --}}
                    <tr>
                        <th>ID:</th>
                        <td><input type="number" name="register_id"></td>
                        <td><span class="text-denger">
                            @error('register_id')
                                {{$message}}
                            @enderror
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <th>Password:</th>
                        <td><input type="password" name="password" id=""></td>
                        <td><span class="text-denger">
                            @error('password')
                                {{$message}}
                            @enderror
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td></td>
                    </tr>
                </table>
                    </div>
                </div>
                    <input type="submit" value="Login"><br>
                <a href="registration">Don't have an account?</a>
            </form>
        </div>
    </div>
    @endsection 
</body>
</html>