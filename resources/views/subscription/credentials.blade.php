@extends('layouts.app')

@section('content')


<div class="container-fluid px-4">
    <h1 class="mt-4 text-primary">Credentials  </h1>
    <div class=" col-xs-8 col-lg-8 text-left">

    </div>
    <ol class="breadcrumb mb-2">
     <li class="breadcrumb-item active h5"></li>
    </ol>
    <div class="row">


        <div class="col-md-6 mb-3">
            <div class="row border  mb-3"  >
          <table class="table table-borderless ">
                                                           <tr  class="bg-custom_side text-white">
                                                              <th style="width:190px;">  Credentials </th>
                                                              <th></th>
                                                          </tr>
                                                          <tr>
                                                              <td>Network Provider :</td>
                                                              <td>
                                                                  <select class="form-select w-50" onchange="val()" id="select_id" aria-label="Default select example">
                                                                  <option selected value="0">---select provider---</option>
                                                                      <option  value="1">M360</option>
                                                                      <option value="2">Smart</option>

                                                                  </select>
                                                              </td>
                                                          </tr>

                                                              <tr id ="m360_provider1"  style="display: none;">
                                                                  <td>Access Token :</td>
                                                                  <td>  <input class="form-control" id="inputToken" type="text" placeholder="" value="Hyusx099" /> </td>
                                                              </tr>
                                                              <tr id ="m360_provider2"  style="display: none;">
                                                                  <td>Passphrase :</td>
                                                                  <td>  <input class="form-control" id="inputPassphrase" type="text" placeholder="" value="usjg2t1q3a" /></td>
                                                              </tr>


                                                          <tr id ="smart_provider1"  style="display: none;">
                                                              <td>Smart Username :</td>
                                                              <td><input class="form-control" id="inputUsername" type="text" placeholder="" value="" /></td>
                                                          </tr>
                                                          <tr id ="smart_provider2"  style="display: none;">
                                                              <td>Smart Password :</td>
                                                              <td> <input class="form-control" id="inputPassword" type="text" placeholder="" value="" /></td>
                                                          </tr>

                                                          <tr id ="smart_provider3"  style="display: none;">
                                                              <td>Smart Source No. :</td>
                                                              <td><input class="form-control " id="inputSourceNo" type="text" placeholder="" value="" /></td>
                                                          </tr>

                                                          <tr>
                                                              <td></td>
                                                              <td></td>
                                                          </tr>

                                                          <tr>
                                                              <td>Subscription Type :</td>
                                                              <td>
                                                                    @if ($subscription->subscription_type==1)
                                                                 <label>Postpaid</label>
                                                                   @elseif ($subscription->subscription_type==2)
                                                                   <label>Prepaid</label>
                                                                    @else

                                                                    @endif

                                                              </td>
                                                          </tr>
                                                          <tr>
                                                              <td>Local Text Rate :</td>
                                                              <td>
                                                                  <input class="form-control w-50 text-end" id="inputLocalRate" type="number" placeholder=""  min="0" max="10" step="0.25" value="0.00" />
                                                              </td>
                                                          </tr>

                                                          <tr>
                                                              <td>International Text Rate :</td>
                                                              <td>
                                                                  <input class="form-control w-50 text-end" id="inputInterRate" type="number" placeholder="" value="" />
                                                              </td>
                                                          </tr>
                                                          <tr>
                                                              <td></td>
                                                              <td></td>
                                                          </tr>

                                                          </table>

                                                          <div class="row mb-3">
                                                                  <div class="col-6 col-sm-6 col-md-6 col-lg-6 text-end">

                                                                  <a class="btn btn-danger text-white w-50" href="/subscription">Cancel </a>
                                                                  </div>
                                                                  <div class="col-6 col-sm-6 col-md-6 col-lg-6 text-start">
                                                                  <a class="btn btn-primary text-white w-50" href="#">Save </a>
                                                                  </div>

                                                          </div>

                                  </div>

          </div>

          <div class="col-md-6 mb-3" >
                                                      <table class="table table-bordered border-primary">
                                                           <tr  class="bg-custom_side text-white">
                                                              <th style="width:150px;">Information</th>
                                                              <th>Details</th>
                                                          </tr>

                                                          <tr>
                                                              <td>Fullname</td>
                                                              <td>{{$subscription->firstname .' '. $subscription->lastname}}</td>
                                                          </tr>
                                                          <tr>
                                                              <td>Company</td>
                                                              <td> {{$subscription->company}} </td>
                                                          </tr>
                                                          <tr>
                                                              <td>Country</td>
                                                              <td>{{$subscription->country}}</td>
                                                          </tr>
                                                          <tr>
                                                              <td>Address</td>
                                                              <td> {{$subscription->street_address}}</td>
                                                          </tr>
                                                          <tr>
                                                              <td>City</td>
                                                              <td>{{$subscription->city}}</td>
                                                          </tr>
                                                          <tr>
                                                              <td>Zip Code</td>
                                                              <td>{{$subscription->zipcode}}</td>
                                                          </tr>

                                                          <tr>
                                                              <td>Contact No.</td>
                                                              <td>{{$subscription->contact_no}}</td>
                                                          </tr>

                                                          <tr>
                                                              <td>Email</td>
                                                              <td>{{$subscription->email}}</td>
                                                          </tr>

                                                          <tr>
                                                              <td>Username</td>
                                                              <td>{{$subscription->username}}</td>
                                                          </tr>

                                                          <tr>
                                                              <td>Status</td>
                                                              <td> @if($subscription->status==0)
                                                                <span class="badge badge-sm bg-success">Active</span>
                                                                @else
                                                                <span class="badge badge-sm bg-danger">Inactive</span>
                                                              @endif
                                                            </td>
                                                          </tr>
                                                          <tr>
                                                              <td>Created</td>
                                                              <td>{{$subscription->created_at}} </td>
                                                          </tr>
                                                          <tr>
                                                              <td>Updated</td>
                                                              <td>{{$subscription->updated_at   }} </td>
                                                          </tr>
                                                      </table>


          </div>


    </div>
</div>

<script>
    function val() {
    var value_selected = document.getElementById("select_id").value;
    // alert(d);

    switch(value_selected) {
    case '1':
        document.getElementById("m360_provider1").style.display = "";
        document.getElementById("m360_provider2").style.display = "";

        document.getElementById("smart_provider1").style.display = "none";
        document.getElementById("smart_provider2").style.display = "none";
        document.getElementById("smart_provider3").style.display = "none";
        break;
    case '2':
        document.getElementById("m360_provider1").style.display = "none";
        document.getElementById("m360_provider2").style.display = "none";

        document.getElementById("smart_provider1").style.display = "";
        document.getElementById("smart_provider2").style.display = "";
        document.getElementById("smart_provider3").style.display = "";
        break;
    default:
        document.getElementById("m360_provider1").style.display = "none";
        document.getElementById("m360_provider2").style.display = "none";
        document.getElementById("smart_provider1").style.display = "none";
        document.getElementById("smart_provider2").style.display = "none";
        document.getElementById("smart_provider3").style.display = "none";
    break;
        }
    }
</script>
{{--
    // $('select').on('change', function (e) {
    //     var optionSelected = $("option:selected", this);
    //     var valueSelected = this.value;

    //     switch(valueSelected) {
    //   case '1':
    //     // code block
    //     document.getElementById("m360_provider1").style.display = "";
    //     document.getElementById("m360_provider2").style.display = "";

    //     document.getElementById("smart_provider1").style.display = "none";
    //     document.getElementById("smart_provider2").style.display = "none";
    //     document.getElementById("smart_provider3").style.display = "none";


    //     break;
    //   case '2':
    //     // code block
    //     $( "#m360_provider" ).css( "display", "none" );
    //     $( "#smart_provider" ).css( "display", "" );

    //     $( "#m360_provider1" ).css( "display", "none" );
    //     $( "#m360_provider2" ).css( "display", "none" );
    //     $( "#smart_provider1" ).css( "display", "" );
    //     $( "#smart_provider2" ).css( "display", "" );
    //     $( "#smart_provider3" ).css( "display", "" );
    //     break;
    //   default:
    //     // code block
    //     $( "#m360_provider1" ).css( "display", "none" );
    //     $( "#m360_provider2" ).css( "display", "none" );
    //     $( "#smart_provider1" ).css( "display", "none" );
    //     $( "#smart_provider2" ).css( "display", "none" );
    //     $( "#smart_provider3" ).css( "display", "none" );
    // }

    // }); --}}


@endsection


