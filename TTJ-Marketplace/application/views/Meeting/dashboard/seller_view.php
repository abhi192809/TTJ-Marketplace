
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<style type="text/css">
  label {
    display: inline-block;
    margin-bottom: 0.5rem;
    font-size: 14px;
    padding: 10px 0px 5px 0px;
    color: #383838;
}
.form-control {
    display: block;
    width: 100%;
    height: 36px;
    padding: 0.375rem 0.75rem;
    font-size: 13px;
    font-weight: 400;
    line-height: 1.5;
    color: #e50404;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #d1d3e2;
    border-radius: 0.25rem;
    -webkit-transition: border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    margin-left: 10px;
}

.om-submit-btn{
  padding: 5px 10px 5px 10px !important;
  background-color: #ec1e24;
  width: 120px;
  margin-bottom: 25px;
}

.body-bg-color .mb-3 {
    padding: 0px 15px 6px 10px;
}

  .rotate-190 {
    transform: rotate(190deg);
  }
  
  .share-btnnn {
    border-radius: 5px;
    box-shadow: 2px 2px 11px 0px #747474;
    padding: 3px;
    font-size: 17px;
  }
  th {
    background-color: #ca2327;
    color: #fff;
}
</style>
 

 <section class="body-bg-color">
  <div class="container-fluid">
  <h4 class="mb-3">
 <a class="text-danger" href="<?php echo  base_url() ?>/Meeting/Admin/seller/seller_data_view"><span class="share-btnnn"><i class="fa fa-share rotate-190" id="backButton"></i></span></a>
  Seller Registration</h4><br>
  <!--<h4 class="form-data-heading mb-0"><span><i class="fas fa-arrow-left" id="backButton"></i></span> Seller Registration</h4>-->
  
  <form id="sellerForm" enctype="multipart/form-data">

<div class="form-row">
     <!-- Reference ID -->

<div class="col-md-3 mb-3 d-flex align-items-center">
  <label for="companyName">
    <i class="fas fa-hashtag"></i>
  </label>
  
  <select class="form-control" name="ReferrerPerson" style="color:black">
  <option value="" selected>Select Your Referrer Person</option>
  <?php foreach($Seller_staff as $row):?>
    <option value="<?= $row->id?>"><?= $row->fullName ?></option>
  <?php endforeach;?>
  <!-- Add more options as needed -->
</select>
</div>

<!-- Seller's Name -->
<div class="col-md-3 mb-3 d-flex align-items-center">
  <label for="sellerName">
    <i class="fas fa-user"></i>
  </label>
  <input type="Name" class="form-control" id="sellerName" placeholder="Seller's Name" name="sellerName" maxlength="30"  required>
</div>

<!-- Seller's Company Name -->
<div class="col-md-3 mb-3 d-flex align-items-center">
  <label for="companyName">
    <i class="fas fa-building"></i>
  </label>
  <input type="company" class="form-control" id="companyName" name="companyName" placeholder="Seller's Company Name" maxlength="30" required>
</div>


<!-- Contact Information -->
<div class="col-md-3 mb-3 d-flex align-items-center">
  <label for="phoneNumber">
    <i class="fas fa-phone"></i> 
  </label>
  <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Contact Information" maxlength="13" required>
</div>

<!-- Email -->
<div class="col-md-3 mb-3 d-flex align-items-center">
  <label for="sellerEmail">
    <i class="fas fa-envelope"></i>
  </label>
  <input type="email" class="form-control" id="sellerEmail" name="sellerEmail" placeholder="Email" maxlength="30" required>
</div>

<!-- Physical Address -->
<div class="col-md-6 mb-3 d-flex align-items-center">
  <label for="physicalAddress">
    <i class="fas fa-map-marker-alt"></i> 
  </label>
  <textarea class="form-control" id="physicalAddress" name="physicalAddress" placeholder="Physical Address" maxlength="100" required></textarea>
</div>

<!-- City -->
<div class="col-md-3 mb-3 d-flex align-items-center">
  <label for="city">
    <i class="fas fa-city"></i> 
  </label>
  <input type="city" class="form-control" id="city" name="city" placeholder="City" maxlength="30" required>
</div>

<!-- County-->
<div class="col-md-3 mb-3 d-flex align-items-center">
  <label for="city">
    <i class="fas fa-city"></i> 
  </label>
  <input type="city" class="form-control" id="country" name="country" placeholder="Country" maxlength="30" required>
</div>

<!-- Pin Code -->
<div class="col-md-3 mb-3 d-flex align-items-center">
  <label for="pinCode">
    <i class="fas fa-thumbtack"></i> 
  </label>
  <input type="text" class="form-control" id="pinCode" name="pinCode" placeholder="Pin Code" required>
</div>

<!-- Website -->
<div class="col-md-3 mb-3 d-flex align-items-center">
  <label for="website">
    <i class="fas fa-globe"></i> 
  </label>
  <input type="url" class="form-control" id="website" name="website" placeholder="Website">
</div>

<!-- PAN Number -->
<div class="col-md-3 mb-3 d-flex align-items-center">
  <label for="panNumber">
    <i class="fas fa-id-card"></i> 
  </label>
  <input type="text" class="form-control" id="panNumber" placeholder="PAN Number" name="panNumber" ng-model="abc" ng-pattern="panCardRegex"  title="Enter valid PAN number" required>
</div>

<!-- GST Number -->
<div class="col-md-3 mb-3 d-flex align-items-center">
  <label for="gstNumber">
    <i class="fas fa-id-badge"></i> 
  </label>
  <input type="text" class="form-control" id="gstNumber" name="gstNumber" placeholder="GST Number:" required pattern="[0-9]{15}"  title="Enter valid GST number" required>
</div>

<div class="col-md-3 mb-3 d-flex align-items-center">
    <label for="referenceId"><b>Logo</b></label>
    <input type="file" name="Logo" id="Logo" class="form-control" accept=".png" style="color:black">
</div>


<!-- License and Certifications -->
<div class="col-md-3 mb-3 d-flex align-items-center">
  <label for="certifications">
    <i class="fas fa-certificate"></i> 
  </label>
   <input type="text" class="form-control" id="certifications" name="certifications" placeholder="License and Certifications" required>
</div>

<!-- Experience -->
<div class="col-md-3 mb-3 d-flex align-items-center">
  <label for="yearsInOperation">
    <i class="fas fa-calendar-alt"></i>
  </label>
  <input type="number" class="form-control" id="yearsInOperation" name="yearsInOperation" placeholder="Years in Operation" required>
</div>

<!-- Industry Experience -->
<div class="col-md-3 mb-3 d-flex align-items-center">
  <label for="industryExperience">
    <i class="fas fa-industry"></i> 
  </label>
  <input type="text" class="form-control" id="industryExperience" name="industryExperience" placeholder="Industry Experience" required>
</div>

<!-- Annual Turnover -->
<div class="col-md-3 mb-3 d-flex align-items-center">
  <label for="annualTurnover">
    <i class="fas fa-money-bill-alt"></i> 
  </label>
  <input type="number" class="form-control" id="annualTurnover" placeholder="Annual Turnover (INR)" name="annualTurnover" required>
</div>
<!-- Services Offered -->

<!-- Contact Information -->
<div class="col-md-3 mb-3 d-flex align-items-center">
  <label for="phoneNumber">
    <i class="fas fa-phone"></i> 
  </label>
  <input type="tel" class="form-control" id="emergencyContacts" name="emergencyContacts" placeholder="Emergency Contacts" required>
</div>

<div class="col-md-3 mb-3 d-flex align-items-center">
  <label for="phoneNumber">
    <i class="fas fa-building"></i> 
  </label>
  
  <select class="form-control" name="Category" style="color:black">
  <option value="" >Select Event Category</option>
  <option value="DMC">DMC</option>
  <option value="Outbound">Outbound</option>
  <option value="inbound">Inbound</option>
  <!-- Add more options as needed -->
</select>
</div>

 <!-- Username -->


<!-- Password -->
    
</div>
<div class="row">
    <div class="col-md-4 ">
  <p>User Name:-</p>
  <input id="username" class="form-control" name="Username" type="text"  placeholder="Username" readonly>
</div>
<div class="col-md-4">
  <p>Password:-</p>
  <input id="password" class="form-control" name="Password" type="password"  placeholder="Password" readonly>
</div>
<div class="col-md-2 text-center">
      <p style="color:white">..</p>
     
  <input type="checkbox" id="showPassword"> Show Password
</div>
   
   <div class="col-md-2 text-center">
       <p style="color:white">..</p>
       <p class="copy btn btn-danger">copy</p>
   </div>    
</div>
</div>

<!--New ID Password-->
<!--------------new--------om----tab---start------->

<hr>

  <style>
    #Event {
      display: block; /* Initially hide the Event div */
      animation: slideFromRight 1s forwards; /* Define animation */
    }
     #Place {
      display: none; /* Initially hide the Event and Place divs */
      animation: slideFromRight 1s forwards; /* Define animation */
    }
    
    .custom-control-input:checked~.custom-control-label::before {
    color: #fff;
    border-color: #b50e12;
    background-color: #ca2327;
   }
   
   .table td, .table th {
    padding: 0.4rem;
    vertical-align: middle;
    border-top: 1px solid #e3e6f0;
   }

   table td {
    text-align: center;
    }
    
    table th {
    text-align: center;
    }
    
    .card .table td, .card .table th {
    padding-right: 1.5rem;
    padding-left: 1.5rem;
    font-size: 13px;
    border: 1px solid #cacaca;
  }
  
   .border-stylee-place-search {
    margin: 15px 0px 0px 0px;
    padding: 1px 32px 6px 23px !important;
    /* border: 1px solid #9d9d9d; */
    box-shadow: 0px 1px 4px 0px #9d9797;
    border-radius: 5px;
  }
   
    .border-stylee-place-search label{
      font-size: 18px !important;
    padding: 6px 0px 11px 0px !important;
    /* color: #383838; */
    /* font-weight: 600; */
    border-bottom: 1px solid red;
   }



    @keyframes slideFromRight {
      from {
        transform: translateX(100%);
      }
      to {
        transform: translateX(0);
      }
    }
  </style>

                <div class="col-md-12 mb-1">
                  <span class="h6 mx-2 " style="border:1px solid #ddd; padding: 6px 15px 6px 15px; background-color: #040404; color: #fff;" onclick="showEvent()"> Event</span>
                  <!--<span class="h6 mx-2" style="border:1px solid #ddd; padding: 6px; background-color: #de1e23; color: #fff;" onclick="showPlace()"> Seller  Place </span>  -->
                </div>
                <div class="col-md-12 mt-4" id="Event">
                  <div class="margtoppp-data-form card">
                    <div class="table-responsive card-body">
                      <table class="table" id="dataTable">
                      <thead>
                      <tr>
                        <th>No</th>
                        <th>Image</th>
                        <th>Event Name </th>
                        <th>Location</th>
                        <th>Date</th>
                         <th>Status</th>
                      </tr>
                      </thead>
                      <tbody>
                      <!-- Display first 5 entries with images -->
                    <?php 
                        $i = 1;
                        $currentDate = date("Y-m-d"); // Get the current date
                        
                        foreach ($View_Event as $row) {
                            // Check if the event start date has not passed
                            if ($row->EventStartDate > $currentDate) {
                        ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td><img src="<?= base_url() ?>assets/Meeting/Event_image/<?= $row->EventImage ?>" width="100px"></td>
                                <td><?= $row->EventName ?></td>
                                <td><?= $row->Location ?></td>
                                <td><?= $row->EventStartDate ?></td>
                                <td>
                                    <div class="btn-icon-split22">
                                        <a href="#" class="event-details-button btn-icon-split22" onclick="showAllSellerDataseller(<?= $i ?>)" style="cursor: pointer;">
                                            <span class="acrive-btnn icon" title="Active / Inactive">
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input eventCheckbox" id="customSwitch<?= $i ?>" data-value="<?= $row->EventID ?>" data-name="<?= $row->EventName ?>" onchange="toggleActiveInactive(<?= $i ?>, this)">
                                                    <label class="custom-control-label" for="customSwitch<?= $i ?>"></label>
                                                </div>
                                            </span>
                                        </a>
                                    </div> 
                                </td>
                            </tr>   
                        <?php
                                $i++;
                            }
                        }
                        ?>


                      <!-- Add more rows as needed -->
                      </tbody>
                    </table>
              
            <!------------pagination----start------->
    <!------------pagination----start---end--->
              
              
                  </div>
                </div>
                </div>
                
                 <div class="col-md-12" id="Place">
                <!--  <div class="border-stylee-place-search">-->
                <!-- <div class="row" style="align-items: center;">-->
                <!--    <div class="col-md-9">-->
                <!--      <label for="searchPlace">Search your Place for Mart</label>-->
                <!--    </div>-->
                <!--    <div class="col-md-3">-->
                <!--      <input class="form-control" type="search" id="anotherSearch" name="anotherSearch" placeholder="Search Place">-->
   
                <!--    </div>-->
                <!--  </div>-->
                <!--    <div class="row" id="search_Filter">-->
                <!--      <div class="col-md-3">-->
                <!--          <input type="checkbox" id="agraCheckbox" name="placeCheckbox" data-filter="agra"> Agra-->
                <!--      </div>-->
                <!--      <div class="col-md-3">-->
                <!--          <input type="checkbox" id="puneCheckbox" name="placeCheckbox" data-filter="pune"> Pune-->
                <!--      </div>-->
                <!--      <div class="col-md-3">-->
                <!--          <input type="checkbox" id="raipurCheckbox" name="placeCheckbox" data-filter="raipur"> Raipur-->
                <!--      </div>-->
                <!--  </div>-->
                <!--</div>-->
                </div>
              <!-- Submit Button -->
              <div class="col-md-12 d-flex align-items-center">
                <button  class="om-submit-btn btn btn-danger mt-3">GO</button>
              </div>
          </div>
          </form>
      </div>
      </section>

      <script>
        function showEvent() {
          var eventDiv = document.getElementById("Event");
          var placeDiv = document.getElementById("Place");
      
          eventDiv.style.display = "block";
          placeDiv.style.display = "none";
        }
      
        function showPlace() {
          var placeDiv = document.getElementById("Place");
          var eventDiv = document.getElementById("Event");
      
          placeDiv.style.display = "block";
          eventDiv.style.display = "none";
        }
</script>
      
      
  <!--------------new--------om----tab---start----end------>      


<!-- Modal -->
        </div>
      </form>
    </div>
  </div>
</div>

<!-- The Modal -->
<!-- Modal for entering amount and payment method -->
 <div class="modal fade" style="background: #00000069;" id="amountPaymentModal" tabindex="-1" role="dialog" aria-labelledby="amountPaymentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document" >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="amountPaymentModalLabel">Enter Amount and Payment Method</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Input fields for amount and payment method -->
                <div class="form-group">
                    <label for="amount">Amount:</label>
                    <input type="number" class="form-control" id="amount">
                </div>
                <div class="form-group">
                    <label for="text">Payment ID:</label>
                    <input type="text" class="form-control" id="PaymentID">
                </div>
                <div class="form-group">
                    <label for="paymentMethod">Payment Method:</label>
                    <select id="paymentMethod" class="form-control">
                        <option name="Card">Card</option>
                        <option name="Net Banking">Net Banking</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="submitAmountPayment">Submit</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $("#sellerForm").submit(function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            var logoFile = $("#Logo")[0].files[0];

            if (logoFile) {
                formData.append('Logo', logoFile);
            } else {
                console.error("No logo file selected");
                return;
            }

            var selectedCheckboxValues = [];
            var amounts = [];
            var modalsSubmitted = 0; // Count of modals submitted

            // Loop through each checked checkbox
            var checkedCheckboxes = $(".eventCheckbox:checked");

            // Initialize variables
            var modalsSubmitted = 0;

            // Function to handle modal submission
            function handleModalSubmission(formData, checkedCheckboxes) {
                if (modalsSubmitted < checkedCheckboxes.length) {
                    var checkbox = $(checkedCheckboxes[modalsSubmitted]);
                    var Eventname = checkbox.data('name');
                    var value = checkbox.data('value');
                    $("#amount").val(''); // Clear the amount input field
                    $("#paymentMethod").val('');
                    $("#PaymentID").val('');

                    if (value && Eventname) { // Check if value and Eventname are not null or empty
                        // Open modal for current event by adding CSS class
                        $('#amountPaymentModal').addClass('d-block show');

                        // Set modal title
                        $('#amountPaymentModalLabel').text('Enter Amount and Payment Method for ' + Eventname);

                        // Set data attributes for modal
                        $('#submitAmountPayment').data('value', value).data('eventname', Eventname);

                        // Handle submit button click for current event
                        $('#submitAmountPayment').off('click').on('click', function () {
                            var amount = $('#amount').val();
                            var paymentMethod = $('#paymentMethod').val();
                             var payment = $('#PaymentID').val();
                            
                            selectedCheckboxValues.push(value);
                            amounts.push(amount);

                            formData.append('checkboxValues[]', value);
                            formData.append('amounts[]', amount);
                            formData.append('PaymentMethod[]', paymentMethod);
                             formData.append('Payment[]', payment);

                            // Hide modal by removing CSS class
                            $('#amountPaymentModal').removeClass('d-none show');
                            modalsSubmitted++;

                            // Call the function recursively to handle the next modal
                            handleModalSubmission(formData, checkedCheckboxes);
                        });
                    } else {
                        // If value or Eventname is null or empty, skip to the next modal
                        modalsSubmitted++;
                        handleModalSubmission(formData, checkedCheckboxes);
                    }
                } else {
                    // All modals are submitted, proceed to submit the form
                    submitForm(formData);
                }
            }

            // Call the function to start handling modal submissions
            handleModalSubmission(formData, checkedCheckboxes);
        });

        // Function to submit form data
        function submitForm(formData) {
            $.ajax({
                type: "POST",
                url: "<?= base_url()?>Meeting/Admin/Seller/insertSeller",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    if (response == 1) {
                        Swal.fire({
                            title: 'Success',
                            text: 'Seller Created and Ready For One Event',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then(function () {
                            location.reload();
                        });
                    }
                },
                error: function (error) {
                    console.error("Error submitting form: " + JSON.stringify(error));
                }
            });
        }
    // Function to update username and generate auto password
    function updateUsernameAndAutoPassword() {
        var email = $("#sellerEmail").val();
        $("#username").val(email);

        var autoPassword = generateAutoPassword();
        $("#password").val(autoPassword);
    }

    // Function to generate auto password
    function generateAutoPassword() {
        var chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        var autoPassword = "";
        for (var i = 0; i < 8; i++) {
            autoPassword += chars.charAt(Math.floor(Math.random() * chars.length));
        }
        return autoPassword;
    }

    // Attach the updateUsernameAndAutoPassword function to the email input change event
    $("#sellerEmail").on("input", function () {
        updateUsernameAndAutoPassword();
    });

    // Toggle password visibility
    $("#showPassword").on("change", function () {
        var passwordField = $("#password");
        passwordField.attr("type", this.checked ? "text" : "password");
    });

    // Trigger the function on page load to handle initial email value
    updateUsernameAndAutoPassword();

    // Function to copy username and password to clipboard
    $(".copy").click(function () {
        var username = $("#username").val();
        var password = $("#password").val();

        var textArea = document.createElement("textarea");
        textArea.value = "Username: " + username + "\nPassword: " + password;

        document.body.appendChild(textArea);
        textArea.select();
        document.execCommand("copy");
        document.body.removeChild(textArea);

        Swal.fire({
            title: 'Copied!',
            text: 'Username and Password copied to clipboard',
            icon: 'success',
            confirmButtonText: 'OK'
        });
    });

</script>




<script>
    jQuery(document).ready(function ($) {
   $('#dataTable').DataTable();
});
</script>