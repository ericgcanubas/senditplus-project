


@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4 text-primary">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active h4">Home</li>
    </ol>
       <!-- Modify Start -->

       <div class="row">
       <div class="col-lg-12">
            <div class="card mb-4 bg-custom">
                <div class="card-header ">

                 <div class="text-end">
                    <span class="text-white"> Transaction Date : </span>
<a name=""  class="btn btn-primary btn-circle btn-sm" id="" href="#"><i class="fa fa-arrow-left"></i></a>

<input type="date" class="date" id="datePicker" name="date">
            <script>
document.getElementById('datePicker').valueAsDate = new Date();
            </script>
<a name="" class="btn btn-primary info btn-circle  btn-sm" id="" href="#" role="button"><i class="fa fa-arrow-right"></i></a>
                </div>
                         <!-- Add Button -->
</div>
            </div>
        </div>




        <div class="col-xl-3 col-md-6">
            <div class="card bg-custom text-white mb-4">

                <div class="card-body one-haft first trans">


                <div class="text-end h3">7,225</div>
                <div class="text-end h6">Total Transaction</div>

            </div>
                <div class="card-footer d-flex align-items-center justify-content-between bg-custom_side">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fa fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-custom text-white mb-4">
                <div class="card-body one-haft first ack">
                <div class="text-end h3">7,225</div>
                <div class="text-end h6">Total Acknowledge</div>

                    </div>
                <div class="card-footer d-flex align-items-center justify-content-between bg-custom_side ">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white "><i class="fa fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-custom text-white mb-4">
                <div class="card-body one-haft first reject">

                    <div class="text-end h3">0</div>
                <div class="text-end h6">Totel Rejected</div>
            </div>
                <div class="card-footer d-flex align-items-center justify-content-between bg-custom_side">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fa fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-custom text-white mb-4">
                <div class="card-body one-haft first mo">

                    <div class="text-end h3">0</div>
                <div class="text-end h6">Totel MO</div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between bg-custom_side">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fa fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <!-- load -->

        <div class="col-xl-3 col-md-6">
            <div class="card bg-custom text-white mb-4">
                <div class="card-body one-haft first mobile">

                    <div class="text-end h3">2,225</div>
                <div class="text-end h6">Totel Globe</div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between bg-custom_side">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fa fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-custom text-white mb-4">
                <div class="card-body one-haft first mobile">

                    <div class="text-end h3">4,225</div>
                <div class="text-end h6">Totel Smart</div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between bg-custom_side">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fa fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-custom text-white mb-4">
                <div class="card-body one-haft first mobile">

                    <div class="text-end h3">172</div>
                <div class="text-end h6">Totel Sun</div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between bg-custom_side">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fa fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-custom text-white mb-4">
                <div class="card-body one-haft first mobile">

                    <div class="text-end h3">0</div>
                <div class="text-end h6">Totel DITO</div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between bg-custom_side">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fa fa-angle-right"></i></div>
                </div>
            </div>
        </div>



        <div class="col-xl-6 ">
            <div class="card mb-4">
                <div class="card-header bg-custom text-white">
                    <i class="fa fa-paper-plane me-1"></i>
                  Postpaid & SMS Summary
                </div>
                <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 text-first" ><h5 class="text-primary text-shadow"><b>POSTPAID</b></h5></div>
                            <div class="col-md-6 text-end" ><h6 class="text-danger"> TOTAL CHARGE: 4,202.00</h6></div>
                        </div>

            <table id="datatablesSimple" >
                <thead class="bg-custom text-white">
                    <tr>
                        <th>Branch</th>
                        <th>Total SMS</th>
                        <th>Charge</th>

                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Branch</th>
                        <th>Total SMS</th>
                        <th>Charge</th>
                    </tr>
                </tfoot>
                <tbody>
                <tr>
                    <td>ADTEMPCO BAGUIO BRANCH</td>
                    <td>230.00</td>
                    <td>115.00</td>
                </tr>


                <tr>
                    <td>ADTEMPCO BANGGUED BRANCH</td>
                    <td>6,305.00</td>
                    <td>3,689.00</td>
                </tr>
                <tr>
                    <td>ADTEMPCO CABANATUAN BRANCH</td>
                    <td>18.00</td>
                    <td>9.00</td>
                </tr>
                <tr>
                    <td>ADTEMPCO LANGANGILANG BRANCH</td>
                    <td>2.00</td>
                    <td>1.00</td>
                </tr>

                <tr>
                    <td>ADTEMPCO LATRINIDAD BRANCH</td>
                    <td>129.00</td>
                    <td>64.50</td>
                </tr>

                <tr>
                    <td>ADTEMPCO MANABO BRANCH</td>
                    <td>24.00</td>
                    <td>12.00</td>
                </tr>

                <tr>
                    <td>ADTEMPCO PENARUBIA BRANCH</td>
                    <td>78.00</td>
                    <td>39.00</td>
                </tr>
                <tr>
                    <td>ADTEMPCO SAN CARLOS BRANCH</td>
                    <td>154.00</td>
                    <td>77.00</td>
                </tr>
                <tr>
                    <td>ADTEMPCO SAN FERNANDO BRANCH</td>
                    <td>89.00</td>
                    <td>44.50</td>
                </tr>

                </tbody>
            </table>
            </div>

            </div>
        </div>

        <div class="col-xl-6 ">
            <div class="card mb-4">
                <div class="card-header bg-custom text-white">
                    <i class="fa fa-paper-plane me-1"></i>
                 Email Sent Summary
                </div>
                <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 text-first" ><h5 class="text-primary text-shadow"><b>EMAIL</b></h5></div>
                             <div class="col-md-6 text-end" ><h6 class="text-success"> TOTAL SENT: 1,202</h6></div>
                        </div>

            <table id="datatablesSimple1" >
                <thead class="bg-custom text-white">
                    <tr>
                        <th>Branch</th>
                        <th>Total Sent.</th>
                        <!-- <th>Charge</th> -->

                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Branch</th>
                        <th>Total Sent.</th>
                        <!-- <th>Charge</th> -->
                    </tr>
                </tfoot>
                <tbody>
                <tr>
                    <td>ADTEMPCO BAGUIO BRANCH</td>
                    <td>432</td>

                </tr>


                <tr>
                    <td>ADTEMPCO BANGGUED BRANCH</td>
                    <td>312</td>

                </tr>
                <tr>
                    <td>ADTEMPCO CABANATUAN BRANCH</td>
                    <td>232</td>

                </tr>
                <tr>
                    <td>ADTEMPCO LANGANGILANG BRANCH</td>
                    <td>32</td>

                </tr>

                <tr>
                    <td>ADTEMPCO LATRINIDAD BRANCH</td>
                    <td>120</td>

                </tr>

                <tr>
                    <td>ADTEMPCO MANABO BRANCH</td>
                    <td>24</td>

                </tr>

                <tr>
                    <td>ADTEMPCO PENARUBIA BRANCH</td>
                    <td>78</td>

                </tr>
                <tr>
                    <td>ADTEMPCO SAN CARLOS BRANCH</td>
                    <td>154</td>

                </tr>
                <tr>
                    <td>ADTEMPCO SAN FERNANDO BRANCH</td>
                    <td>89</td>

                </tr>

                </tbody>
            </table>
            </div>

            </div>
        </div>
        <div class="col-xl-12">
        <div class="card mb-4">
                <div class="card-header bg-custom text-white">
                    <i class="fa fa-area-chart me-1"></i>
                   Status
                </div>
                <div class="card-body">
                <ul class="nav nav-pills mb-3 nav-fill" id="pills-tab" role="tablist">
                    <li class="nav-item " role="presentation" >
                        <button class="nav-link active " id="pills-daily-tab" data-bs-toggle="pill" data-bs-target="#pills-daily" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Daily</button>
                    </li>
                    <li class="nav-item " role="presentation">
                        <button class="nav-link " id="pills-weekly-tab" data-bs-toggle="pill" data-bs-target="#pills-weekly" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Weekly</button>
                    </li>
                    <li class="nav-item " role="presentation">
                        <button class="nav-link " id="pills-monthly-tab" data-bs-toggle="pill" data-bs-target="#pills-monthly" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Monthly</button>
                    </li>
                </ul>
<div class="tab-content" id="pills-tabContent">
<div class="tab-pane fade show active" id="pills-daily" role="tabpanel" aria-labelledby="pills-daily-tab">
<div class="row text-start">
<canvas id="myAreaChart" width="100%" height="40"></canvas>
</div>
</div>
<div class="tab-pane fade" id="pills-weekly" role="tabpanel" aria-labelledby="pills-weekly-tab">
<div class="row text-start">
<canvas id="thsWeekly" width="100%" height="40"></canvas>
</div>
</div>
<div class="tab-pane fade" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab">
<div class="row text-start">
<canvas id="myBarChart" width="100%" height="40">
</div>
</div>
</div>


</div>
            </div>




    </div>

       <!-- Modify End -->
</div>

@endsection
