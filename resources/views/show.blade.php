<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    @push('title')
        <title>Updated</title>
    @endpush
</head>
<body>
    <div class="row justify-content-center">
        <div class="col-auto">
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">ID:</th>
            <th scope="col">Name:</th>
            <th scope="col">Email:</th>
            <th scope="col">Phone:</th>
            <th scope="col">password:</th>
        </tr>
            <tr>
                <td>{{$registration->register_id}}</td>
                <td>{{$registration->name}}</td>
                <td>{{$registration->email}}</td>
                <td>{{$registration->phone}}</td>
                <td>{{$registration->password}}</td>
            </tr>
        </thead>
    </table>
        </div>
    </div>
</body>
</html>