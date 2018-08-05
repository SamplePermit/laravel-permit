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
            <th>ApprovalID</th>
            <th>PermitNumber</th>
            <th>ApplicationID</th>
            <th>Charge</th>

            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($permits as $permit)
            @php
                $date=date('Y-m-d', $permit['date']);
            @endphp
            <tr>
                <td>{{$permit['ApprovalID']}}</td>
                <td>{{$permit['PermitNumber']}}</td>

                <td>{{$permit['ApplicationID']}}</td>
                <td>{{$permit['Charge']}}</td>

                <td><a href="{{action('PermitController@edit', $permit['id'])}}" class="btn btn-warning">Edit</a></td>
                <td>
                    <form action="{{action('PermitController@destroy', $permit['id'])}}" method="post">
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
