<!-- index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <br />
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
    @endif
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Date</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>application Office</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($applications as $application)
            @php
                $date=date('Y-m-d', $application['date']);
            @endphp
            <tr>
                <td>{{$application['OperatorID']}}</td>
                <td>{{$application['AircraftID']}}</td>
                <td>{{$application['RegistrationNumber']}}</td>
                <td>{{$application['CallSign']}}</td>
                <td>{{$application['Route']}}</td>
                <td>{{$application['FromDate']}}</td>
                <td>{{$application['ToDate']}}</td>

                <td><a href="{{action('ApplicationController@edit', $application['id'])}}" class="btn btn-warning">Edit</a></td>
                <td>
                    <form action="{{action('ApplicationController@destroy', $application['id'])}}" method="post">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
