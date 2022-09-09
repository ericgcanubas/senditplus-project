@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4 text-primary">Activity Logs</h1>
    <div class=" col-xs-8 col-lg-8 text-left">

    </div>
    <ol class="breadcrumb mb-2">
     <li class="breadcrumb-item active h5"></li>
    </ol>

         <!-- Modify Start -->

    <div class="card mb-4">
        <div class="card-header">User List</div>
        <div class="card-body">
            <table id="datatablesSimple" >
            <thead class="bg-custom text-white">
                    <tr>
                        <th class="col-3">Username</th>
                        <th class="col-3">Fullname</th>
                        <th class="col-3">Latest Log</th>
                        <th class="col-2">Deescription</th>
                        <th  class="col-1">Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th class="col-3">Username</th>
                        <th class="col-3">Fullname</th>
                        <th class="col-3">Log</th>
                        <th class="col-2">Deescription</th>
                        <th  class="col-1" >Action</th>

                    </tr>
                </tfoot>

                <tbody>
                    @foreach ($activitylogs as $activitylog )
                    <tr>
                            <td>{{$activitylog->username}}</td>
                            <td>{{$activitylog->firstname .' '. $activitylog->lastname}}</td>
                            <td>{{$activitylog->latest_log}}</td>
                            <td>{{$activitylog->description_log}}</td>
                            <td><a href="activitylogs/user/{{$activitylog->id}}" class="btn btn-primary btn-sm w-100"> Details</a></td>
                    </tr>
                    @endforeach
                    </tbody>
            </table>
        </div>
       <!-- Modify End -->
    </div>
</div>
@endsection
