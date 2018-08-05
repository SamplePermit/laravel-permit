<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel 5.6 CRUD Tutorial With Example  </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
</head>
<body>
<div class="container">
    <h2>Aircraft Registration System</h2><br/>
    <form method="post" action="{{url('aircraft')}}">
        @csrf
        <div class="row">

            <div class="form-group col-md-4">
                <label for="Manufacturer">Manufacturer:</label>
                <input type="text" class="form-control" name="manufacturer">
            </div>
        </div>
        <div class="row">

            <div class="form-group col-md-4">
                <label for="Type">Type:</label>
                <input type="text" class="form-control" name="type">
            </div>
        </div>
        <div class="row">

            <div class="form-group col-md-4">
                <label for="Weight">Weight:</label>
                <input type="text" class="form-control" name="weight">
            </div>
        </div>




        <div class="row">
            <div class="col-md-1"></div>
            <div class="form-group col-md-4" style="margin-top:60px">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>
</div>

</body>
</html>