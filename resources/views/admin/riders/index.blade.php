@extends('layouts.adminfrontend')

@section('content')
    <div class="rightnav-header">
        <span class="ms-1 font-weight-bold light">rider Details</span>
        <div style="margin-left: 80%"> <a href="{{ route('admin.login') }}"><img src="{{ asset('images/adminuser.png') }}"
                    class="signinicon" alt="main_logo"> <span>Sign In</a></span></div>

    </div>
    <hr style="color: #fff" />
    <div class="rider">


        <a href="{{ route('admin.riders.create') }}" class="addbtn">Add</a>
        <table class="table  text-center" border="2" style="width: 100%">


            <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Empoyee ID
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mobile</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Image</th>


                    </th>
                    <th class="text-secondary opacity-7"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($riders as $rider)
                    <tr>
                        <td>
                            {{ $rider->id }}
                        </td>
                        <td>
                            {{ $rider->emp_id }}
                        </td>
                        <td>
                            {{ $rider->name }}
                        </td>
                        <td>
                            {{ $rider->mobile }}
                        </td>
                        <td>
                            <img src="{{ asset($rider->imgurl) }}" alt="rider Image" class="riderimg">
                        </td>


                        <td>

                            <a href="{{ route('admin.riders.edit', ['rider' => $rider]) }}"> <button
                                    class="edit">Edit</button></a>

                        <td>
                            <form action="{{ route('admin.riders.delete', $rider) }}" style="display: none;" method="POST"
                                id="deleteForm">
                                @csrf
                                @method('DELETE')

                            </form>

                            <button class="delete" style="display: inline-block;" onclick="deleteprod();"
                                id="deleteButton">Delete</button>

                        </td>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="container">

            @if ($riders->isNotEmpty())
                {!! $riders->appends(request()->query())->links('pagination::bootstrap-5') !!}
            @endif

        </div>

    </div>
@endsection

@section('styles')
    <link href="{{ asset('css/riders.css') }}" rel="stylesheet">
@endsection
@section('scripts')
    <script>
        function deleteprod() {
            console.log("pressed");
            var shouldDelete = confirm('Are you sure you want to delete?');

            if (!shouldDelete) {
                event.preventDefault(); // Prevent the form submission
            } else {
                $("#deleteForm").submit();
            }

        }
    </script>
@endsection
