<!-- edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel 5.6 CRUD Tutorial With Example </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <h2>Edit A Form</h2><br  />
    <form method="post" action="{{action('ApplicationController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="OperatorID">OperatorID:</label>
                <input type="integer" class="form-control" name="OperatorID" value="{{$application->OperatorID}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="AircraftID">AircraftID</label>
                <input type="integer" class="form-control" name="AircraftID" value="{{$application->AircraftID}}">
            </div>
        </div>
                <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="RegistrationNumber">RegistrationNumber:</label>
                <input type="string" class="form-control" name="RegistrationNumber" value="{{$application->RegistrationNumber}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="CallSign">CallSign:</label>
                <input type="string" class="form-control" name="CallSign" value="{{$application->CallSign}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Route">Route:</label>
                <input type="string" class="form-control" name="Route" value="{{$application->Route}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="FromDate">FromDate:</label>
                <input type="date" class="form-control" name="FromDate" value="{{$application->FromDate}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="ToDate">ToDate:</label>
                <input type="date" class="form-control" name="ToDate" value="{{$application->ToDate}}">
            </div>
        </div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4" style="margin-top:60px">
                <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
