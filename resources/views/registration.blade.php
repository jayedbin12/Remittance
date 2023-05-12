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
        <title>Registration</title>
    @endpush
</head>
<body>
    @extends('layouts.main')
    @section('main-section')
    <form action="{{route('registration')}}" method="post">
        @csrf
    <div class="container">
        <h2>Registration</h2>
        <div class="text-center">
        <table>
            <tr>
                <th>Name:</th>
                <td><input type="text" name="name"><span class="text-denger"></td>
                <td><span class="text-denger">
                @error('name')
                    {{$message}}
                @enderror
                </span></td>    
                </tr>
                <tr>
                <th>Email:</th>
                <td><input type="email" name="email" id=""></td>
                <td><span class="text-denger">
                    @error('email')
                        {{$message}}
                    @enderror
                  </span></td>
            </tr>
            <tr>
                <th>Phone</th>
                <td><input type="number" name="phone" id=""></td>
                <td><span class="text-denger">
                    @error('phone')
                        {{$message}}
                    @enderror
                </span>
            </td>
            </tr>
            <tr>
                <th>Date Of Birth:</th>
                <td><input type="date" name="dob" id=""></td>
                <td><span class="text-denger">
                    @error('dob')
                        {{$message}}
                    @enderror
                    </span>
                </td>
            </tr>
            <tr>
                <th>NID:</th>
                <td><input type="number" name="nid" id=""></td>
                <td><span class="text-denger">
                    @error('nid')
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
                <th>Confirm password:</th><br>
                <td><input type="password" name="confirm_password" id=""></td>
                <td><span class="text-denger">
                    @error('confirm_password')
                        {{$message}}
                    @enderror
                    </span>
                </td>
            </tr>
            <tr>
                <th><input type="submit" value="SUBMIT"></th>
            </tr>
        </table>
        <a href="login">Already have an account!!</a>
        </div>
    </div>
</form>
    @endsection
</body>
</html> 