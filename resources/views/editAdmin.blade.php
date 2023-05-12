<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    @push('title')
        <title>Update Pofile</title>
    @endpush
</head>
<body>
    <div class="container bg-light">
        <div class="col-md-10 text-center">
        <form action="/show" method="post">
            <h4>Edit {{$registrations->name}}</h4>
            @csrf
            <div class="row justify-content-center">
                <div class="col-auto">
            <table class="table table-responsive">
                <div class="form-group">
                <tr>
                    <th>Name</th>
                    <td><input type="text" name="name" value="{{$registrations->name}}"></td>
                    <td>
                    <span class="text-danger">
                        @error('name')
                           {{$message}}
                       @enderror
                 </span>
                </td>
                </tr>
                </div>
                <div class="form-group">
                <tr>
                    <th>Email</th>
                    <td><input type="email" name="email" value="{{$registrations->email}}"></td>
                    <td>
                    <span class="text-danger">
                        @error('email')
                           {{$message}}
                       @enderror
                 </span>
                </td>
                </tr>
                <input type="hidden" class="form-control" value="{{$registrations->register_id}}">
                </div>
                <div class="form-group">
                <tr>
                    <th>Phone</th>
                    <td><input type="number" name="phone" value="{{$registrations->phone}}"></td>
                    <span class="text-danger">
                        @error('phone')
                           {{$message}}
                       @enderror
                 </span>
                </tr>
                </div>
                <div class="form-group">
                <tr>
                    <th>Password</th>
                    <td><input type="password" name="password" value="{{$registrations->password}}"></td>
                    <span class="text-danger">
                        @error('password')
                           {{$message}}
                       @enderror
                 </span>
                </tr>
                </div>
            </table>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" value="update">
                    <a href={{route('show')}}>Update</a>
                    {{-- update --}}
                </button>
            </div>
        </form>
        </div>
    </div>
</body>
</html>