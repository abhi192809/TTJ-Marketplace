<style>
    .popupForm .form-group {
        position: relative;
    }

    .popupForm .form-group svg {
        position: absolute;
        right: 20px;
        width: 16px;
        height: 16px;
        top: 50%;
        transform: translateY(-50%);
        stroke: #b9b9b9;
        stroke-width: 1.5px;
    }

    .form-control {
        display: block;
        width: 100%;
        height: calc(1.3em + 0.65rem + 7px);
        padding: 0.375rem 0.75rem;
        font-size: 13px;
        font-weight: 400;
        line-height: 1.5;
        color: #6e707e;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #d1d3e2;
        border-radius: 0.25rem;
        -webkit-transition: border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
        transition: border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
    }

    svg:not(:root) {
        overflow: hidden;
    }

    .lead-form-style {
        padding: 10px 30px 20px 30px;
    }

    .form-group {
        margin-bottom: 19px;
    }

    label {
        display: inline-block;
        margin-bottom: 0.5rem;
        font-size: 15px;
    }

    @media only screen and (max-width: 600px) {
        .form-group {
            margin-bottom: 12px !important;
        }

        .lead-form-style {
            padding: 2px !important;
        }

        .popupForm .form-group svg {
            width: 16px;
            height: 15px;
        }

        .h4,
        h4 {
            font-size: 1.3rem;
        }
    }
    
    
   .rotate-190 {
    transform: rotate(190deg);
  }
  
  .share-btnnn {
    border-radius: 5px;
    box-shadow: 2px 2px 11px 0px #747474;
    padding: 7px 5px 5px 5px;
    font-size: 17px;
  }
  
</style>

<form class="lead-form-style">
<div class="constainer-fluid">
    <div class="row">
       <div class="col-lg-3 col-md-3 col-sm-3 col-12 ">
            <a class="text-danger" href="<?php echo  base_url() ?>/Meeting/Buyer/Lead/lead_buyer_data"><span class="share-btnnn"><i class="fa fa-share rotate-190" id="backButton"></i> Back</span></a>
       </div> 
       
        <div class="col-lg-9 col-md-9 col-sm-9 col-12 ">
        <div class="pt-10"> <h4>Book Your Next Holiday </h4>
          <small>You can give your Enquiry to a specific seller.</small>
    </div>
       </div> 
    </div>
     <hr>
     
     
    <div class="row" style="align-items: center;">
        <div class="col-md-6">
            <div class="popupForm px-4">
                    <div class="row">
         
                        <div class="col-md-6">
                            <label>Full Name <sup class="text-danger">*</sup></label>
                            <div class="form-group inputBox">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-user feather-icon">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                <input type="name" name="txtFullName" id="txtFullName" class="form-control"
                                    placeholder="Full Name" maxlength="40">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Email Address <sup class="text-danger">*</sup></label>
                            <div class="form-group inputBox">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-mail feather-icon">
                                    <path
                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                    </path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                                <input type="email" name="txtEmail" id="txtEmail" class="form-control"
                                    placeholder="Email Address" maxlength="40" value="<?php echo   $username = $this->session->userdata('username') ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Contact Number <sup class="text-danger">*</sup></label>
                            <div class="form-group inputBox position-relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-phone-call feather-icon">
                                    <path
                                        d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                    </path>
                                </svg>
                                <input type="mobile" name="txtPhone" id="txtPhone" class="form-control"
                                    onkeypress="return validateRefPhone2(event)" placeholder="Contact No"
                                    maxlength="13">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Trip Category</label>
                            <div class="form-group inputBox">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-user feather-icon">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                <select class="form-control" name="ddlBudget" id="ddlBudget">
                                    <option value="">Select Type</option>
                                    <option value="Budget">Budget</option>
                                    <option value="Standard">Standard</option>
                                    <option value="Luxury">Luxury</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="txtDepCountry">
                                Departure Country <sup class="text-danger">*</sup>
                            </label>
                            <div class="form-group inputBox">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-map-pin feather-icon">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                                <select name="txtDepCountry" id="txtDepCountry" class="form-control selectpicker">
                                    <?php
                                                     foreach($city as $row){
                                                        echo "<option value=".$row->cities.">".$row->cities."</option>";
                                                     }
                                                    ?>

                                </select>






                            </div>
                        </div>
                        <div class="col-md-6">

                            <label for="txtDepCity">Departure City </label>
                            <div class="form-group inputBox">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-map-pin feather-icon">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                                <input type="city" name="txtDepCity" id="txtDepCity" class="form-control"
                                    placeholder="Departure City" maxlength="30">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="txtArriveCountry">
                                Arrival Country <sup class="text-danger">*</sup>
                            </label>
                            <div class="form-group inputBox">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-map-pin feather-icon">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>


                                <select name="txtArriveCountry" id="txtArriveCountry" class="form-control selectpicker">
                                    <?php
                                                     foreach($city as $row){
                                                        echo "<option value=".$row->cities.">".$row->cities."</option>";
                                                     }
                                                    ?>
                                </select>


                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="txtArriveCity">Arrival City</label>
                            <div class="form-group inputBox">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-map-pin feather-icon">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                                <input type="city" name="txtArriveCity" id="txtArriveCity" class="form-control"
                                    placeholder="Arrival City" maxlength="30">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="txtDepDate">
                                Departure Date <sup class="text-danger">*</sup>
                            </label>
                            <div class="form-group inputBox">
                         
                                <input type="date" name="txtDepDate" id="txtDepDate" placeholder="MM/DD/YYYY"
                                    class="form-control ui-datepicker2" maxlength="30">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="txtNights">
                                No. of Nights <sup class="text-danger">*</sup>
                            </label>
                            <div class="form-group inputBox">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-moon feather-icon">
                                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                                </svg>
                                <input type="number" name="txtNights" id="txtNights"
                                    onkeypress="return validateRefPhone2(event)" class="form-control" min="1"
                                    placeholder="No. of Nights " maxlength="2">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="txtNoOfAdults">
                                No. of Adults <sup class="text-danger">*</sup>
                            </label>
                            <div class="form-group inputBox">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-users feather-icon">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <input type="number" name="txtNoOfAdults" id="txtNoOfAdults"
                                    onkeypress="return validateRefPhone2(event)" class="form-control"
                                    placeholder="Adults" min="1" maxlength="3">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="txtNoOfAdults">No. of Minors</label>
                            <div class="form-group inputBox">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-user feather-icon">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                <input type="number" name="txtNoOfMinor" id="txtNoOfMinor"
                                    onkeypress="return validateRefPhone2(event)" class="form-control"
                                    placeholder="Minors" min="0" maxlength="2">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                  
                        
                    </div>
            </div>
        </div>

        <!--Seller Name-->


        <div class="col-md-6 popupForm px-4">
            <label style="padding-top: 20px">Seller Name</label>
            <div class="form-group inputBox mb-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-user feather-icon">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
                <select class="form-control " name="seller_name" id="seller_name" style="height: 81px;">
                    <option  value="">Select Seller Name</option>
                    <option value="00">Enquiry</option>
                </select>
            </div>
            
                <input type="hidden" value="<?php echo $this->session->userdata('user_id');?>" name="buyer_name">
            <div class="col-md-12 pt-5 align-self-md-center text-center">
                            <div class="form-group">
                                <button type="button" class="btn btn-danger" id="btnSendQuery">
                                    Go For the
                                    Holidays
                                </button>
                            </div>
                        </div>
        </div>
    </div>
</div>
</form>
<!-- SweetAlert2 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

<!-- SweetAlert2 JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#btnSendQuery').click(function() {
            // Serialize form data
            var formData = $('.lead-form-style').serialize();

            // Send AJAX request
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url()?>/Meeting/Buyer/Lead/insert_lead_data',
                data: formData,
                dataType: 'json', // Expect JSON response from the server
                success: function(response) {
                    // Handle success response
                    if (response.status === 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: 'Data inserted successfully.',
                            confirmButtonText: 'OK'
                        });

                        $('.lead-form-style')[0].reset();
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: response.message || 'Error occurred while inserting data.',
                            confirmButtonText: 'OK'
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Error occurred while inserting data.',
                        confirmButtonText: 'OK'
                    });
                }
            });
        });
    });
</script>
