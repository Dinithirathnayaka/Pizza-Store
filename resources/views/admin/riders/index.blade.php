@extends('layouts.admin')

@section('content')
    <div class="rightnav-header">
        <span class="ms-1 font-weight-bold light">Rider Details</span>
    </div>
    <hr style="color: #fff" />
    <div class="rider">


        <a href="{{ route('admin.riders.create') }}" class="addbtn">Add</a>
        <table class="table  text-center mt-5" border="2" style="width: 100%">


            <thead class="table-dark">
                <tr>
                    <th class="text-uppercase text-warning text-xxs  opacity-7">ID</th>
                    <th class="text-center text-uppercase text-warning text-xxs  opacity-7">Empoyee ID
                    </th>
                    <th class="text-center text-uppercase text-warning text-xxs  opacity-7">Name</th>
                    <th class="text-center text-uppercase text-warning text-xxs  opacity-7">Mobile</th>
                    <th class="text-uppercase text-warning text-xxs  opacity-7 ps-2">Image</th>
                    <th class="text-warning opacity-7"></th>
                </tr>
            </thead>
            <tbody class="table-dark">
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
                            <img src="{{ asset('rider_images/' . $rider->imgurl) }}" alt="rider Image"
                                class="rider rounded-circle" style="width: 120px; height: 120px;">
                        </td>


                        <td>

                            <a href="{{ route('admin.riders.edit', ['rider' => $rider]) }}"> <button
                                    class="edit">Edit</button></a>


                            <form action="{{ route('admin.riders.delete', $rider) }}" style="display: none;" method="POST"
                                id="deleteForm">
                                @csrf
                                @method('DELETE')

                            </form>

                            <button class="delete" style="display: inline-block;" onclick="deleteprod();"
                                id="deleteButton">Delete</button>


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
