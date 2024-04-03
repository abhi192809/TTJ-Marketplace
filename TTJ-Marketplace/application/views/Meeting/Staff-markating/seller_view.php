<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

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
 <a class="text-danger" href="<?php echo  base_url() ?>/Meeting/Staffmarkating/seller/seller_data_view"><span class="share-btnnn"><i class="fa fa-share rotate-190" id="backButton"></i></span></a>
  Seller Registration</h4>
  <!--<h4 class="form-data-heading mb-0"><span><i class="fas fa-arrow-left" id="backButton"></i></span> Seller Registration</h4>-->
  
  <form id="sellerForm" enctype="multipart/form-data">

<div class="form-row">
     <!-- Reference ID -->


<!-- Seller's Name -->
<div class="col-md-3 mb-3 d-flex align-items-center">
  <label for="sellerName">
    <i class="fas fa-user"></i>
  </label>
  
  <input type="hidden" name="ReferrerPerson" value="<?=  $this->session->userdata('user_id');?>">
  <input type="text" class="form-control" id="sellerName" placeholder="Seller's Name" name="sellerName" required>
</div>

<!-- Seller's Company Name -->
<div class="col-md-3 mb-3 d-flex align-items-center">
  <label for="companyName">
    <i class="fas fa-building"></i>
  </label>
  <input type="text" class="form-control" id="companyName" name="companyName" placeholder="Seller's Company Name" required>
</div>


<!-- Contact Information -->
<div class="col-md-3 mb-3 d-flex align-items-center">
  <label for="phoneNumber">
    <i class="fas fa-phone"></i> 
  </label>
  <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Contact Information" required>
</div>

<!-- Email -->
<div class="col-md-3 mb-3 d-flex align-items-center">
  <label for="sellerEmail">
    <i class="fas fa-envelope"></i>
  </label>
  <input type="email" class="form-control" id="sellerEmail" name="sellerEmail" placeholder="Email" required>
</div>

<!-- Physical Address -->
<div class="col-md-6 mb-3 d-flex align-items-center">
  <label for="physicalAddress">
    <i class="fas fa-map-marker-alt"></i> 
  </label>
  <textarea class="form-control" id="physicalAddress" name="physicalAddress" placeholder="Physical Address" required></textarea>
</div>

<!-- City -->
<div class="col-md-3 mb-3 d-flex align-items-center">
  <label for="city">
    <i class="fas fa-city"></i> 
  </label>
  <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
</div>

<!-- County-->
<div class="col-md-3 mb-3 d-flex align-items-center">
  <label for="city">
    <i class="fas fa-city"></i> 
  </label>
  <input type="text" class="form-control" id="country" name="country" placeholder="Country" required>
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
  <input type="text" class="form-control" id="panNumber" placeholder="PAN Number" name="panNumber"  title="Enter valid PAN number" required>
</div>

<!-- GST Number -->
<div class="col-md-3 mb-3 d-flex align-items-center">
  <label for="gstNumber">
    <i class="fas fa-id-badge"></i> 
  </label>
  <input type="text" class="form-control" id="gstNumber" name="gstNumber" placeholder="GST Number:"  title="Enter valid GST number" required>
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
  <option value="">Select Event Category</option>
  <option value="DMC">DMC</option>
  <option value="Outbound">Outbound</option>
  <option value="inbound">Inbound</option>
  <!-- Add more options as needed -->
</select>
</div>
  <!--------------new--------om----tab---start----end------>      
 <div class="col-md-12 d-flex align-items-center">
                <button  class="om-submit-btn btn btn-danger mt-3">GO</button>
              </div>

<!-- Modal -->
        </div>
      </form>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  $(document).ready(function () {
    // Function to handle form submission
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

      // Call the submitForm function with formData
      submitForm(formData);
    });

    function submitForm(formData) {
      $.ajax({
        type: "POST",
        url: "<?= base_url()?>Meeting/Staffmarkating/Seller/insertSeller",
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
          if (response == 1) {
            Swal.fire({
              title: 'Success',
              text: 'Seller Account Created Successfully. Please await verification.',
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
  });
</script>
