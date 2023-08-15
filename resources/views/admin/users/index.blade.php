@extends('layouts.admin')

@section('content')
    <div class="rightnav-header">
        <span class="ms-1 font-weight-bold light">User Details</span>

    </div>
    <hr style="color: #fff" />


    <div class="user">



        <table class="table  text-center" border="2" style="width: 100%">


            <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Usere_ID</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Profile Picture
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Create At
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($genusers as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td><img src="{{ asset('images/account.png') }}" alt="Profile Picture" class="profileimg"></td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>


        </table>

    </div>
@endsection

@section('styles')
    <link href="{{ asset('css/user.css') }}" rel="stylesheet">
@endsection
