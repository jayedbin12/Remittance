<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>ClientsView</title>
</head>
<body>
    <h2 class="text-center">Member-List</h2>
    <div class="container">
        <form action="" method="GET">
            <div class="form-group">
              <input type="search" name="search" id="" class="form-control" placeholder="Search by ID or Email" value="{{$search}}">
            </div>
            <button class="btn btn-primary">Search</button>
            <a href="{{url('/clients')}}">
                <button class="btn btn-primary">Reset</button>
            </a>
        </form>
    <br><br>
    <div class="row justify-content-center">
        <div class="col-auto">
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">ID:</th>
            <th scope="col">Name:</th>
            <th scope="col">Email:</th>
            <th scope="col">Phone:</th>
            <th scope="col">Country:</th>
        </tr>
        @foreach ($clients as $client)
            <tr>
                <td>{{$client->id}}</td>
                <td>{{$client->name}}</td>
                <td>{{$client->email}}</td>
                <td>{{$client->phone}}</td>
                <td>{{$client->country}}</td>
                <td><a href={{"clients/".$client->id}}>Delete</a></td>
            </tr>
        @endforeach
        </thead>
    </table>
        </div>
    </div>
</div>
</body>
</html>