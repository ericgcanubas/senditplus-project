@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4 text-primary">Activity Logs</h1>
    <div class=" col-xs-8 col-lg-8 text-left">

    </div>
    <ol class="breadcrumb mb-2">
     <li class="breadcrumb-item active h5"></li>
    </ol>

    <div class="card mb-4">
    <div class="card-header bg-primary text-white">{{$users->firstname. ' '. $users->lastname}} Logs</div>
    <div class="card-body">
        <table id="datatablesSimple" >
        <thead class="bg-custom text-white">
                <tr>
                    <th class="col-3">ID</th>
                    <th class="col-3">Description</th>
                    <th class="col-3">Properties</th>
                    <th class="col-2">DateTime Log</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th class="col-3">ID</th>
                    <th class="col-3">Description</th>
                    <th class="col-3">Properties</th>
                    <th class="col-2">DateTime Log</th>

                </tr>
            </tfoot>

            <tbody>
                @foreach ($activitylogs as $activitylog )
                <tr>
                        <td>{{$activitylog->id}}</td>
                        <td>{{$activitylog->description}}</td>
                        <td>
                            <?php
                            $variable = $activitylog->description;
                            $properties = $activitylog->properties;
    switch ($variable) {
    case 'created':
        # code...
        foreach($properties['attributes'] as $attribute => $old)
        {
        ?>  <span class="text-primary"><?php echo $attribute.':=> '.$properties['attributes'][$attribute].' ';?></span><?php
        }
        break;
    case 'deleted':
        # code...
        foreach($properties['attributes'] as $attribute => $old)
        {
        ?>  <span class="text-primary"><?php echo $attribute.':=> '.$properties['attributes'][$attribute].' ';?></span><?php
        }
        break;
    default:
        # code...

        foreach($properties['old'] as $attribute => $old)
        {
            if ($old == $properties['attributes'][$attribute])
            {
        ?>  <span class="text-primary"><?php echo $attribute.': '.$old.' => '.$properties['attributes'][$attribute].' ';?></span><?php
            }
        else {
                # code...
                ?>  <span class="text-danger"><?php echo $attribute.': '.$old.' => '.$properties['attributes'][$attribute].' ';?></span><?php
            }
        }
        break;
}



                                ?>
                          </td>
                        <td>{{$activitylog->created_at}}</td>

                </tr>
                @endforeach
                </tbody>
        </table>
    </div>
   <!-- Modify End -->
</div>
</div>
@endsection
