    @extends('layouts.app')
    @section('content')
    <div class="container-fluid px-4">
    <h1 class=" text-primary">SMS Inbox</h1>
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

    <div class="row"> 
    <h6>Filter</h6>
    <div class="col-md-5 col-lg-5 form-group mb-3">
    <div class = "row">
    <div class="col-md-6">
                    <div class="form-floating">                                               
                        <input class="form-control " type="date" id="inputDateExpired" value="mm/dd/yyyy">
                            <label for="inputDateExpired" class="form-control-label">Date From</label>
                        </div>  
                        
    </div>
    <div class="col-md-6">
                            <div class="form-floating">
                            
                            <input class="form-control" type="date" id="inputDateExpired" value="mm/dd/yyyy">
                            <label for="inputDateExpired" class="form-control-label">Date To</label>
                            
                        </div>           
    </div>
    </div>
                    
                        </div>

    <div class="col-md-5 col-lg-5 form-group mb-3">
        <div class="row">
                <div class=" col-md-6">
                <div class="form-floating">
                    <input class="form-control"  type="time" id="appt" name="appt">
                    <label for="inputDateExpired" class="form-control-label">Time From</label>
                </div>
                                                            
                </div>
                    <div class="col-md-6">
                    <div class="form-floating">


                        <input class="form-control" type="time" id="appt" name="appt">
                        
                        <label for="inputDateExpired" class="form-control-label">Time To</label>
                    </div>
                </div>
                </div>

                            
                        </div>          
                        <div class="col-md-1 form-group mb-3">
                            <div class="form-floating text-end">
                            
                                <a href="#" class="btn btn-primary btn-md" >Search</a>
                                
                            </div>
                        </div>
                        

    </div>

            <table id="datatablesSimple" >
                <thead class="bg-custom text-white">
                    <tr>
                        <th>Branch</th>
                        <th>Number</th>
                        <th>Message</th>
                        <th>Date Sent</th>
                    
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                    <th>Branch</th>
                        <th>Number</th>
                        <th>Message</th>
                        <th>Date Sent</th>
                    </tr>
                </tfoot>
                <tbody>
                <tr>
                    <td>2</td>
                    <td>09932222112</td>
                    <td>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). 
                    </td>
                    <td>2022-08-23 10:06:22</td>
                    
                </tr>


                <tr>
                    <td>2</td>
                    <td>09932222112</td>
                    <td>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). 
                    </td>
                    <td>2022-08-23 10:06:22</td>
                    
                </tr>

                <tr>
                    <td>2</td>
                    <td>09932222112</td>
                    <td>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). 
                    </td>
                    <td>2022-08-23 10:06:22</td>
                    
                </tr>

                <tr>
                    <td>2</td>
                    <td>09932222112</td>
                    <td>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). 
                    </td>
                    <td>2022-08-23 10:06:22</td>
                    
                </tr>

                <tr>
                    <td>2</td>
                    <td>09932222112</td>
                    <td>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). 
                    </td>
                    <td>2022-08-23 10:06:22</td>
                    
                </tr>

                <tr>
                    <td>2</td>
                    <td>09932222112</td>
                    <td>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). 
                    </td>
                    <td>2022-08-23 10:06:22</td>
                    
                </tr>

                <tr>
                    <td>2</td>
                    <td>09932222112</td>
                    <td>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). 
                    </td>
                    <td>2022-08-23 10:06:22</td>
                    
                </tr>

                <tr>
                    <td>2</td>
                    <td>09932222112</td>
                    <td>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). 
                    </td>
                    <td>2022-08-23 10:06:22</td>
                    
                </tr>
                <tr>
                    <td>2</td>
                    <td>09932222112</td>
                    <td>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). 
                    </td>
                    <td>2022-08-23 10:06:22</td>
                    
                </tr>
                <tr>
                    <td>2</td>
                    <td>09932222112</td>
                    <td>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). 
                    </td>
                    <td>2022-08-23 10:06:22</td>
                    
                </tr>

                <tr>
                    <td>2</td>
                    <td>09932222112</td>
                    <td>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). 
                    </td>
                    <td>2022-08-23 10:06:22</td>
                    
                </tr>
                <tr>
                    <td>2</td>
                    <td>09932222112</td>
                    <td>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). 
                    </td>
                    <td>2022-08-23 10:06:22</td>
                    
                </tr>
                <tr>
                    <td>2</td>
                    <td>09932222112</td>
                    <td>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). 
                    </td>
                    <td>2022-08-23 10:06:22</td>
                    
                </tr>
                
                </tbody>
            </table>
        </div>
        <!-- Modify End -->
    </div> 
    </div>
    @endsection;