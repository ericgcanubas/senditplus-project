@extends('layouts.app')
@section('content')
<div class="container-fluid px-4">
                        <h1 class=" text-primary">SMS - <span class="text-info">Send</span></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active  text-info "></li>
                        </ol>
                   
                     
                        <div class="row">
                            <!-- Modify Start -->              
                        
                                         
                        <div class="col-md-9 mb-3" >
                            <div class="card">
                                <div class="card-header bg-custom_side text-white">
                                <h6 class="text-uppercase text-lg"><i class="fa fa-envelope" aria-hidden="true"></i> Compose</h6>
                                </div>
                                <div class="card-body">

                                    <form role="form" class="form-horizontal">
                                        <div class="form-group">
                                        <label class="col-sm-2" for="inputTo"><span class="glyphicon glyphicon-user"></span></label>
                                        <div class="col-sm-12"><input type="email" class="form-control" id="inputTo" placeholder="comma separated list of recipients"></div>
                                        </div>
                                    
                                        <div class="form-group mb-3">
                                        <label class="col-sm-12" for="inputBody"><span class="glyphicon glyphicon-list"></span></label>
                                        <div class="col-sm-12"><textarea class="form-control" id="inputBody" rows="8"></textarea></div>
                                        </div>
                                        <div class="form-group  text-start">
                                            Variables   
                                            <a  href="#" class="btn btn-dark btn-md rounded-pill"> Name </a>
                                            <a  href="#" class="btn btn-dark btn-md rounded-pill"> Address </a>
                                            <a  href="#" class="btn btn-dark btn-md rounded-pill"> Email </a>
                                        </div>
                                        <div class="form-group  text-end">
                                            <input type="submit" class="btn btn-primary btn-lg rounded-pill" value="SEND NOW">
                                        </div>
                                    </form>
                                                                                                                
                                </div>
                            </div>
                                            
                            </div>
                            <div class="col-md-3 mb-3" >

                                <div class="row"> 
                                    <!--  -->
                                <div class="col-xl-12 col-md-12">
                                    <div class="card bg-custom text-white mb-4">
                                        <div class="card-body one-haft first paper">
                                        <div class="text-end h3">50/100</div>
                                        <div class="text-end h6">Sending SMS</div>
                                        
                                            </div>
                                        <div class="card-footer d-flex align-items-center justify-content-between bg-custom_side ">
                                            <!-- <a class="small text-white stretched-link" href="#">View Details</a> -->
                                            <!-- <div class="small text-white "><i class="fa fa-angle-right"></i></div> -->
                                        </div>


                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-12">
                                    <div class="card bg-custom text-white mb-4">
                                  
                                        <div class="card-body one-haft first refresh">
                                        <div class="text-end h3">Plan Usage</div>
                                  
                                        
                                            </div>


                                        <div class="card-body one-haft first ">
                                        <div class="text-end h4">500/1000</div>
                                        <div class="text-end h6"><i class="fa fa-arrow-up" aria-hidden="true"></i> <i class="fa fa-envelope" aria-hidden="true"></i> Outgoing SMS</div>
                                        </div>
                                        <div class="card-footer d-flex align-items-center justify-content-between bg-custom_side ">
                                            <!-- <a class="small text-white stretched-link" href="#">View Details</a>
                                            <div class="small text-white "><i class="fa fa-angle-right"></i></div> -->
                                        </div>
                                        <div class="card-body one-haft first ">
                                        <div class="text-end h4">4000/8000</div>
                                        <div class="text-end h6"><i class="fa fa-arrow-down" aria-hidden="true"></i> <i class="fa fa-envelope" aria-hidden="true"></i> Incoming SMS</div>
                                        </div>
                                     
                                    </div>
                                </div>
                                <!--  -->
                                </div>
                            </div>

                            
                            <!-- Modify End -->
                        </div>
                     
                    </div>
@endsection;