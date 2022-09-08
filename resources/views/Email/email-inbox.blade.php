@extends('layouts.app')
@section('content')
<div class="container-fluid px-4">
    <h1 class="text-primary">Email Inbox</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"></li> 
    </ol>

            <!-- Modify Start -->    
    <!--  -->
            <div class="card mb-4">
        <div class="card-header bg-custom_side text-white">
            <h6 class="text-uppercase text-sm text-start">Sent Inbox</h4>   
        </div>
        <div class="card-body">
        <a href="#" class="btn btn-sm btn-primary mb-3" > Events <i class="fa fa-caret-down" aria-hidden="true"></i> </a>
        <a href="#" class="btn btn-sm btn-primary mb-3" > Accepted <i class="fa fa-caret-down" aria-hidden="true"></i> </a>
        <a href="#" class="btn btn-sm btn-success mb-3" > Filter </a>

            <table id="datatablesSimple" >
                <thead class="bg-custom text-white">
                    <tr>
                        <th>Timestamp</th>
                        <th>Events</th>
                        <th>Sender</th>
                        <th>Email</th>
                            <th>Delivery Status</th>
                        <th style="width: 10%;">Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                            <th>Timestamp</th>
                        <th>Events</th>
                        <th>Sender</th>
                        <th>Email</th>
                            <th>Delivery Status</th>
                        <th style="width: 10%;">Action</th>
                    </tr>
                </tfoot>
                <tbody>
                <tr>
                    <td>08/11/22 02:10 AM</td>
                    <td>Delivered</td>
                    <td>Nabunturan Integrated Cooperative</td>
                    <td>nico@gmail.com</td>
                    <td><span class="badge badge-sm bg-success">OK</span>    </td>
                    <td><a href='#' class="btn btn-primary  text-white  btn-sm m-b-10 m-l-5 "><i class="fa fa-eye"></i>&nbsp; View</a></td>                                        
                </tr>

                <tr>
                    <td>08/11/22 02:10 AM</td>
                    <td>Delivered</td>
                    <td>Nabunturan Integrated Cooperative</td>
                    <td>nico@gmail.com</td>
                    <td><span class="badge badge-sm bg-success">OK</span>    </td>
                    <td><a href='#' class="btn btn-primary  text-white  btn-sm m-b-10 m-l-5 "><i class="fa fa-eye"></i>&nbsp; View</a></td>                                        
                </tr>
                <tr>
                    <td>08/11/22 02:10 AM</td>
                    <td>Delivered</td>
                    <td>Nabunturan Integrated Cooperative</td>
                    <td>nico@gmail.com</td>
                    <td><span class="badge badge-sm bg-success">OK</span>    </td>
                    <td><a href='#' class="btn btn-primary  text-white  btn-sm m-b-10 m-l-5 "><i class="fa fa-eye"></i>&nbsp; View</a></td>                                        
                </tr>
                <tr>
                    <td>08/11/22 02:10 AM</td>
                    <td>Delivered</td>
                    <td>Nabunturan Integrated Cooperative</td>
                    <td>nico@gmail.com</td>
                    <td>  </td>
                    <td><a href='#' class="btn btn-primary  text-white  btn-sm m-b-10 m-l-5 "><i class="fa fa-eye"></i>&nbsp; View</a></td>                                        
                </tr>
                <tr>
                    <td>08/11/22 02:10 AM</td>
                    <td>Delivered</td>
                    <td>Nabunturan Integrated Cooperative</td>
                    <td>nico@gmail.com</td>
                    <td><span class="badge badge-sm bg-success">OK</span>    </td>
                    <td><a href='#' class="btn btn-primary  text-white  btn-sm m-b-10 m-l-5 "><i class="fa fa-eye"></i>&nbsp; View</a></td>                                        
                </tr>
                <tr>
                    <td>08/11/22 02:10 AM</td>
                    <td>Delivered</td>
                    <td>Nabunturan Integrated Cooperative</td>
                    <td>nico@gmail.com</td>
                    <td><span class="badge badge-sm bg-success">OK</span>    </td>
                    <td><a href='#' class="btn btn-primary  text-white  btn-sm m-b-10 m-l-5 "><i class="fa fa-eye"></i>&nbsp; View</a></td>                                        
                </tr>
                <tr>
                    <td>08/11/22 02:10 AM</td>
                    <td>Delivered</td>
                    <td>Nabunturan Integrated Cooperative</td>
                    <td>nico@gmail.com</td>
                    <td>   </td>
                    <td><a href='#' class="btn btn-primary  text-white  btn-sm m-b-10 m-l-5 "><i class="fa fa-eye"></i>&nbsp; View</a></td>                                        
                </tr>
                <tr>
                    <td>08/11/22 02:10 AM</td>
                    <td>Delivered</td>
                    <td>Nabunturan Integrated Cooperative</td>
                    <td>nico@gmail.com</td>
                    <td><span class="badge badge-sm bg-success">OK</span>    </td>
                    <td><a href='#' class="btn btn-primary  text-white  btn-sm m-b-10 m-l-5 "><i class="fa fa-eye"></i>&nbsp; View</a></td>                                        
                </tr>
                <tr>
                    <td>08/11/22 02:10 AM</td>
                    <td>Delivered</td>
                    <td>Nabunturan Integrated Cooperative</td>
                    <td>nico@gmail.com</td>
                    <td><span class="badge badge-sm bg-success">OK</span>    </td>
                    <td><a href='#' class="btn btn-primary  text-white  btn-sm m-b-10 m-l-5 "><i class="fa fa-eye"></i>&nbsp; View</a></td>                                        
                </tr>
                </tbody>
            </table>
        </div>
        <!-- Modify End -->
    </div> 
</div>
@endsection;