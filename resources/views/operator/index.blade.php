@extends('layouts.app')

@section('content')
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
            <th>Phone Number</th>
            <th>Operator Office</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($operators as $operator)
            {{--@php--}}
                {{--$date=date('Y-m-d', $operator['date']);--}}
            {{--@endphp--}}
            <tr>
                <td>{{$operator['id']}}</td>
                <td>{{$operator['name']}}</td>
                <td>{{$operator['phone']}}</td>
                <td>{{$operator['address']}}</td>

                <td><a href="{{action('OperatorController@edit', $operator['id'])}}" class="btn btn-warning">Edit</a></td>
                <td>
                    <form action="{{action('OperatorController@destroy', $operator['id'])}}" method="post">
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
@endsection