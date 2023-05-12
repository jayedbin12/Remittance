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
        <title>Home</title>
    @endpush
</head>
<body>
    @if(Session::get('register_id'))
    <div class="container bg-light">
    <h2>Welcome Admin, {{$data->name}}</h2>
    <a class="btn btn-primary" href="{{"editAdmin/".$data->register_id}}">Edit-profile</a>
    <a class="btn btn-warning" href="{{route('showUsers')}}">User-profile</a>
    <a href="">Show clients payment history</a>
    <a class="btn btn-danger" href="{{route('logout')}}">Log out</a>   
    @endif
    </div> 
</body>
</html>