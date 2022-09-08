@extends('layouts.app')
@section('content')

<div class="container-fluid px-4">
    <h1 class="text-primary">Billing</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active  text-dark h4"> Statement</li>
    </ol>                
    <div class="row " >
        <!-- Modify Start -->            
        <div class="col-xl-3 col-md-3">
            <div class="card bg-custom_side text-white mb-4">                            
                <div class="card-body ">                                           
                        <div class="text-center h2 ">5,600.00</div>
                                                                        
                </div> 
                <div class="card-footer bg-dark text-center " >
                    <h5 style="color:lightgreen">Account Balance</h5>
                </div>                                       
            </div>
        </div>
        <div class="col-xl-1 col-1 col-sm-1 col-md-1 d-none d-sm-block">
            <h1 class="text-center text-primary" style="font-size:90px;">-</h1>
        </div>
        <div class="col-xl-3 col-md-3">
            <div class="card bg-custom text-white mb-4">
                <div class="card-body ">
                    <div class="text-center h2 ">600.00</div>
                                                    
                </div> 
                <div class="card-footer bg-dark text-center " >
                    <h5 style="color:orangered">Total Charge</h5>
                </div>                               
            </div>
        </div>
        <div class="col-xl-1 col-1 col-sm-1 col-md-1 d-none d-sm-block">
            <h1 class="text-center  text-primary" style="font-size:90px;">=</h1>
        </div>
        <div class="col-xl-4 col-md-4">
            <div class="card bg-custom_side text-white mb-4">
                <div class="card-body">                                
                    <div class="text-center h2 ">5,000.00</div>
    
                </div>                           
                <div class="card-footer bg-dark text-center " >
                    <h5 style="color:lightgreen">Remaining Balance</h5>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="card mb-4">
                <div class="card-header bg-custom text-white">                 
                    Account Ledger
                </div>

                <div class="card-body">
                <table id="datatablesSimple1" >
                    <thead class="bg-custom text-white">
                        <tr>
                            <th>Description</th>
                            <th>Date</th>
                            <th class="text-end">Amount</th>
                            <th>Balance</th>
                            <th></th>
                            <th style="width: 10%;"></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Balance</th>
                            <th></th>
                            <th style="width: 10%;"></th>
                        </tr>
                    </tfoot>
                <tbody>

                <tr> <td>Master Card</td><td>2022-08-22</td><td class="text-end" ><span class="text-danger"><b> -300</b></span></td><td class="text-end">300</td><td>Complete</td><td></td> </tr>
                <tr> <td>Invoice #00992121</td><td>2022-8-29</td><td class="text-end"> <span class="text-success "><b>5600</b></span></td ><td class="text-end">5300</td><td></td><td></td> </tr>
                <tr> <td>Master Card</td><td>2022-8-30</td><td class="text-end"><span class="text-danger "><b>-300</b></span></td><td class="text-end">5000</td><td>Complete</td><td></td> </tr>   
            </tbody>
            </table>        
                </div>

            </div>
        </div>
                <!-- Chart  -->

                                <!-- <div class="col-xl-12">
                                                    <div class="card mb-4">
                                                            <div class="card-header bg-custom text-white"> 
                                                                <div class="row"  >    
                                                                    <div class="col-md-6 col-lg-6" >            
                                                                Graph Status 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                            <canvas id="myBarChart" width="100%" height="40">
                                                            </div>
                                                    </div>
                                </div> -->

                <div class="col-xl-12">
        
                    <div class="card mb-4">
                            <div class="card-header bg-custom_side text-white">                 
                                    Branch Details
                            </div>
                            <div class="card-body">
                                    <div>

                                    <table id="datatablesSimple" >
                    <thead class="bg-custom text-white">
                        <tr>
                            <th>Reference</th>
                            <th>Date</th>
                            <th>Local Texts</th>
                            <th>Int`Texts</th>
                            <th>Total Texts</th>
                            <th>Total Bill</th>
                            <th style="width: 10%;"></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                        <th>Reference</th>
                            <th>Date</th>
                            <th>Local Texts</th>
                            <th>Int`Texts</th>
                            <th>Total Texts</th>
                            <th>Total Bill</th>
                            <th style="width: 10%;"></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr><td>2022023202-18-297</td><td>May 6,2022</td><td>7732</td><td>0</td><td>7732</td><td>3,866.00</td><td><a href='#' class="btn btn-primary  text-white  btn-sm m-b-10 m-l-5 w-100 "><i class="fa fa-eye"></i>&nbsp; Print View</a></td></tr>
                        <tr><td>2022023202-18-312</td><td>June 6,2022</td><td>1287</td><td>0</td><td>1287</td><td>3,000.00</td><td><a href='#' class="btn btn-primary  text-white  btn-sm m-b-10 m-l-5 w-100 "><i class="fa fa-eye"></i>&nbsp; Print View</a></td></tr>
                    
                        <tr><td>2022023202-18-328</td><td>July 6,2022</td><td>11999</td><td>0</td><td>11999</td><td>5,599.00</td><td><a href='#' class="btn btn-primary  text-white  btn-sm m-b-10 m-l-5 w-100 "><i class="fa fa-eye"></i>&nbsp; Print View</a></td></tr>
                    
                        <tr><td>2022023202-18-344</td><td>August 6,2022</td><td>1564</td><td>0</td><td>1564</td><td>3,000.00</td><td><a href='#' class="btn btn-primary  text-white  btn-sm m-b-10 m-l-5 w-100 "><i class="fa fa-eye"></i>&nbsp; Print View</a></td></tr>
                    
                    </tbody>
            </table>
                        </div>
                    </div>
                </div>
            </div>
            
        <!-- Modify End -->
    </div>

</div>

@endsection;