@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4 text-primary">Acitivy Logs</h1>
    <div class=" col-xs-8 col-lg-8 text-left">

    </div>
    <ol class="breadcrumb mb-2">
     <li class="breadcrumb-item active h5"></li>
    </ol>

         <!-- Modify Start -->

    <div class="card mb-4">
        <div class="card-body">
            <table id="datatablesSimple" >
            <thead class="bg-custom text-white">
                    <tr>
                        <th class="col-1">id</th>
                        <th class="col-1">Log</th>
                        <th class="col-8">Change</th>
                        <th class="col-1">User Id</th>

                        <th  class="col-1" >Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th class="col-1">id</th>
                        <th class="col-1">Log</th>
                        <th class="col-8">Change</th>
                        <th class="col-1">User Id</th>

                        <th  class="col-1" >Action</th>

                    </tr>
                </tfoot>

                <tbody>
                    @foreach ($activitylogs as $activitylog )
                    <tr>
                            <td>{{$activitylog->id}}</td>
                            <td>{{$activitylog->log_name}}</td>
                            <td>{{ $activitylog->subject_type}}</td>
                            <td>{{$activitylog->subject_id}}</td>
                            <td></td>
                    </tr>
                    @endforeach

                    </tbody>
            </table>
        </div>
       <!-- Modify End -->
    </div>
</div>
@endsection
