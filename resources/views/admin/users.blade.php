@extends('layouts.adminfrontend')

@section('content')
<div>

    <h3>Users Details</h3>

    <table class="table  text-center" border="2" style="width: 80%">
        <tr>
            <th>User_ID</th>
            <th>Profile Picture</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <tr>
            <td>01</td>
            <td><img src="{{ asset('images/person_3.jpg') }}" alt="Profile Picture"  class="profileimg"></td>
            <td>Dinithi</td>
            <td>dini@gmail.com</td>
        </tr>
     
    </table>
</div>

@endsection

@section('styles')
<link href="{{ asset('css/user.css') }}" rel="stylesheet">
@endsection