@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4 text-primary">User Profile</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"></li>
    </ol>


    <div class="row">
        <!-- Modify Start -->

<div class="col-md-8 mb-3" >
            <div class="card">
                    <div class="card-header bg-custom_side text-white">
                    <h6 class="text-uppercase text-sm">User Information</h6>
                    </div>
    <div class="card-body">

        <div class="row ">

                    <div class="col-md-6 mb-3 d-flex justify-content-center">

                        <div class="col-lg-4 col-md-4 mb-3 pull-center">
                            <div class="profile-pic-wrapper"  >
                                <div class="pic-holder ">
                                    <img src="/uploads/avatars/{{auth::user()->avatar;}}" style="width:150px; height:150px; border-radius:50%; margin-right:25px;" >


                                    <form  enctype="multipart/form-data" action="/profile/avatar" method="POST">
                                        <label  >Update Profile Image</label>
                                            <input class="mb-3" type="file" name="image">
                                            @csrf
                                            <br/>
                                            <input type="submit" name="upload" value="Upload" class="pull-center btn btm-sm btn-info w-100">
                                    </form>

                                </div>
                            </div>


                        </div>


                    </div>
                    <div class="col-md-6 mb-3 pull-left" >
                        <table class="table table-bordered border-primary">
                            <tr  class="bg-custom_side text-white">
                                <th style="width:150px;">Information</th>
                                <th>Details</th>
                            </tr>

                            <tr>
                                <td>Fullname</td>
                                <td>{{auth::user()->firstname .' '. auth::user()->lastname}}</td>
                            </tr>
                            <tr>
                                <td>Company</td>
                                <td> {{auth::user()->company}} </td>
                            </tr>
                            <tr>
                                <td>Country</td>
                                <td>{{auth::user()->country}}</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td> {{auth::user()->street_address}}</td>
                            </tr>
                            <tr>
                                <td>City</td>
                                <td>{{auth::user()->city}}</td>
                            </tr>
                            <tr>
                                <td>Zip Code</td>
                                <td>{{auth::user()->zipcode}}</td>
                            </tr>

                            <tr>
                                <td>Contact No.</td>
                                <td>{{auth::user()->contact_no}}</td>
                            </tr>

                            <tr>
                                <td>Email</td>
                                <td>{{auth::user()->email}}</td>
                            </tr>

                            <tr>
                                <td>Username</td>
                                <td>{{auth::user()->username}}</td>
                            </tr>



                        </table>
                        <div class="col-md-12 form-group mb-3">
                            <div class="row">
                                <div class=" text-first col-md-6 mb-3">
                                <a class="btn  btn-success text-white w-100" data-bs-toggle="modal" data-bs-target="#exampleModal" href="profile/change-password">Change Password</a>
                                </div>
                                <div class="text-end col-md-6 mb-3">
                                <a class="btn btn-primary text-white w-100" href="profile/edit">Update Profile</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

    </div>
</div>


</div>



        <!-- Modify End -->
    </div>
@include('profile.change-password')
</div>

@endsection
