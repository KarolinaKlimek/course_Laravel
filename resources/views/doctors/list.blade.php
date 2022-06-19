@extends('template')

@section('title')
@if (isset($title))
    {{ $title }}
@endif
@endsection

@section('content')
<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        <th scope="col">Status</th>
    </tr>
    </thead>
    <tbody>

    @foreach($doctorList as $doctor)

    @if($doctor['status'] == 'Dostepny')
        <tr>
            <th scope="row">{{ $doctor['id'] }}</th>
            <td>{{ $doctor['firstname'] }}</td>
            <td>{{ $doctor['lastname'] }}</td>
            <td>{{ $doctor['email'] }}</td>
            <td>{{ $doctor['phone'] }}</td>
            <td>{{ $doctor['address'] }}</td>
            <td><span style="color: limegreen"> {{ $doctor['status'] }} </span></td>
        </tr>
    @elseif($doctor['status'] == 'Niedostepny')
        <tr>
            <th scope="row">{{ $doctor['id'] }}</th>
            <td>{{ $doctor['firstname'] }}</td>
            <td>{{ $doctor['lastname'] }}</td>
            <td>{{ $doctor['email'] }}</td>
            <td>{{ $doctor['phone'] }}</td>
            <td>{{ $doctor['address'] }}</td>
            <td><span style="color: palevioletred"> {{ $doctor['status'] }} </span></td>
        </tr>
    @endif
    @endforeach
    </tbody>
</table>
@endsection('content')
