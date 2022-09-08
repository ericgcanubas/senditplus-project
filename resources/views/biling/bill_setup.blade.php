@extends('layouts.app')
@section('content')

<div class="container-fluid px-4">
                        <h1 class="text-primary">Billing</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active  text-dark h4">Make Invoice</li>
                        </ol>
                   
                     
                        <div class="row">
                            <!-- Modify Start -->

                        <div class="col-md-4 col-lg-4">
                        <div class="card mb-4">
                                            <div class="card-header bg-custom text-white">                 
                                               Bill Setup
                                            </div>

                                            <div class="card-body">
                                                    <!--  -->
                    <div class="col-md-12 form-group mb-3">
                        <div class="form-floating">                     
                            <select class="form-select" aria-label="Default select example">
                            <option selected></option>
                            <option value="1">sadasdasdsada</option>
                            <option value="2">sadsadasdasda</option>
                            <option value="3">sadsadasdasdsa</option>
                            </select>
                            <label for="example-text-input" class="form-control-label ">Subscriber fullname</label>  
                        </div>
                    </div>
                    <div class="col-md-12 form-group mb-3">
                        <div class="form-floating">                       
                            <input readonly class="form-control" type="text" id="inputInvoiceNo" placeholder="Invoice" >
                            <label for="inputInvoiceNo" class="form-control-label">Invoice No.</label>
                        </div>
                    </div>

                    <div class="col-md-12 form-group mb-3">
                        <div class="form-floating">
                            <input class="form-control" type="number" id="inputAmount" placeholder="Amount" >
                            <label for="inputAmount" class="form-control-label">Amount</label>
                        </div>
                    </div>     
                    <div class="col-md-6 form-group mb-3">
                    <div class="form-floating">
                    
                        <input class="form-control" type="date" id="inputDateStarted" value="mm/dd/yyyy">
                        <label for="inputDateStarted" class="form-control-label">Date Started</label>
                    </div>
                </div>
                    <!-- <div class="col-md-12 form-group mb-3">
                        <div class="form-floating">
                            <input class="form-control" type="text" id="inputPaymentType" placeholder="Payment Type" >
                            <label for="inputPaymentType" class="form-control-label">Payment Type</label>
                        </div>
                    </div>     -->
                    <div class="col-md-12 form-group mb-3">
                        <div class="form-floating">
                            <input class="form-control" type="text" id="inputRemarks" placeholder="Remarks" >
                            <label for="inputRemarks" class="form-control-label">Remarks</label>
                        </div>
                    </div>     
                    <div class="col-md-12 form-floating mb-3 ">
                        <div class="row"> 
                            <div class="col-md-6 text-start">  <a class="btn btn-md bg-secondary text-white text-start" href="#">Cancel</a></div>                
                            <div class="col-md-6 text-end">  <a class="btn btn-md bg-primary text-white text-end" href="#">Save</a> </div>
                        </div>
                    </div>
                                                    <!--  -->
                                            </div>
                                 </div>
                        </div>
                            

                        
                        <div class="col-md-8 col-lg-8">
                      
                                     <div class="card mb-4">
                                            <div class="card-header bg-custom text-white">                 
                                               Bill History
                                            </div>

                                            <div class="card-body">
                                            <table id="datatablesSimple1" >
                                                                    <thead class="bg-custom text-white">
                                                                        <tr>
                                                                            <th>Date Started</th>
                                                                            <th>Invoice No.</th>
                                                                            <th class="text-end">Amount</th>
                                                                            <th>Receipt No.</th>
                                                                            <th>Status</th>
                                                                            <th style="width: 10%;">Action</th>
                                                                        </tr>
                                                                    </thead>
                                                            <tfoot>
                                                                <tr>
                                                                            <th>Date Started</th>
                                                                            <th>Invoice No.</th>
                                                                            <th class="text-end">Amount</th>
                                                                            <th>Receipt No.</th>
                                                                            <th>Status</th>
                                                                            <th style="width: 10%;">Action</th>
                                                                </tr>
                                                            </tfoot>
                                                            <tbody>

                                                            <tr> <td>2022-08-01</td><td >  <span class="badge badge-sm bg-danger">Unavailable</span> </td><td class="text-end"><b> 5000</b></td><td><span class="badge badge-sm bg-warning">Unavailable</span></td><td><span class="badge badge-sm bg-danger">Pending</span></td><td><span class="badge badge-sm bg-success">EDIT</span></td> </tr>

                                                            <tr> <td>2022-07-01</td><td>222001030008</td><td class="text-end"><b> 5000</b></td><td><span class="badge badge-sm bg-warning">Unavailable</span></td><td></td><td><span class="badge badge-sm bg-secondary">Proccess to receipt</span></td> </tr>
                                                            <tr> <td>2022-06-01</td><td>222001020008</td><td class="text-end"><b> 5000</b></td><td><span class="badge badge-sm bg-warning">Unavailable</span></td><td></td><td><span class="badge badge-sm bg-secondary">Proccess to receipt</span></td> </tr>
                                                            <tr> <td>2022-05-01</td><td>222001010008</td><td class="text-end"><b> 5000</b></td><td><span class="badge badge-sm bg-warning">Unavailable</span></td><td></td><td><span class="badge badge-sm bg-secondary">Proccess to receipt</span></td> </tr>
                                                            <tr> <td>2022-04-01</td><td>222000000008</td><td class="text-end"><b> 5000</b></td><td><span class="badge badge-sm bg-warning">Unavailable</span></td><td></td><td><span class="badge badge-sm bg-secondary">Proccess to receipt</span></td> </tr>
                                                            <tr> <td>2022-03-01</td><td>222000090008</td><td class="text-end"><b> 5000</b></td><td><span class="badge badge-sm bg-warning">Unavailable</span></td><td></td><td><span class="badge badge-sm bg-secondary">Proccess to receipt</span></td> </tr>
                                                            <tr> <td>2022-02-01</td><td>222000080008</td><td class="text-end"><b> 5000</b></td><td><span class="badge badge-sm bg-warning">Unavailable</span></td><td></td><td><span class="badge badge-sm bg-secondary">Proccess to receipt</span></td> </tr>
                                                            <tr> <td>2022-01-01</td><td>222000070008</td><td class="text-end"><b> 5000</b></td><td><span class="badge badge-sm bg-warning">Unavailable</span></td><td></td><td><span class="badge badge-sm bg-secondary">Proccess to receipt</span></td> </tr>
                                                            <tr> <td>2021-12-01</td><td>222000060008</td><td class="text-end"><b> 5000</b></td><td><span class="badge badge-sm bg-warning">Unavailable</span></td><td></td><td><span class="badge badge-sm bg-secondary">Proccess to receipt</span></td> </tr>
                                                            <tr> <td>2021-11-01</td><td>222000050008</td><td class="text-end"><b> 5000</b></td><td><span class="badge badge-sm bg-warning">Unavailable</span></td><td></td><td><span class="badge badge-sm bg-secondary">Proccess to receipt</span></td> </tr>
                                                            <tr> <td>2021-10-01</td><td>222000040008</td><td class="text-end"><b> 5000</b></td><td><span class="badge badge-sm bg-warning">Unavailable</span></td><td></td><td><span class="badge badge-sm bg-secondary">Proccess to receipt</span></td> </tr>
                                                        </tbody>
                                                        </table>        
                                            </div>
                    
                                      </div>
                               

                        </div>
                            <!-- Modify End -->
                        </div>
                     
                    </div>

@endsection;