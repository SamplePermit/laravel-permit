<!-- create.blade.php -->

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
    <h2>Application Appointment System</h2><br/>
    <form method="post" action="{{url('applications')}}">
        @csrf
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="OperatorID">Operator ID:</label>
                <input type="integer" class="form-control" name="OperatorID">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="AircraftID">AirCraftID:</label>
                <input type="integer" class="form-control" name="AircraftID">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="RegistrationNumber">Registration Number:</label>
                <input type="integer" class="form-control" name="RegistrationNumber">
            </div>
        </div>
<div class="row">
    <div class="col-md-4"></div>
    <div class="form-group col-md-4">
        <label for="CallSign">Call Sign:</label>
        <input type="string" class="form-control" name="CallSign">
    </div>
</div>
<div class="row">
    <div class="col-md-4"></div>
    <div class="form-group col-md-4">
        <label for="Route">Route:</label>
        <input type="string" class="form-control" name="Route">
    </div>
</div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <strong>FromDate : </strong>
                <input class="date form-control datepicker"  type="text" name="FromDate">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <strong>ToDate : </strong>
                <input class="date form-control datepicker"  type="text" name="ToDate">
            </div>
        </div>
                <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4" style="margin-top:60px">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">
    $('.datepicker').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd'
    });
</script>
</body>
</html>
