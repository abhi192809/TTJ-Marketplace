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
</style>
 

 <section class="body-bg-color">
  <div class="container-fluid">
  <h4 class="mb-3">Seller Form</h4>
  <form id="sellerForm">

    <div class="form-row">
     <!-- Reference ID -->
     
<div class="col-md-3 mb-3 d-flex align-items-center">
  <label for="companyName">
    <i class="fas fa-hashtag"></i>
  </label>
  
  <select class="form-control" style="color:black">
  <option value="A" selected>Select Your Referrer Person</option>
  <option value="B">B</option>
  <option value="C">C</option>
  <option value="D">D</option>
  <!-- Add more options as needed -->
</select>
</div>

<div class="col-md-3 mb-3 d-flex align-items-center">
  <label for="referenceId"><b>Logo</b>
  </label>
   <input type="file" class="form-control" placeholder="Logo"  style="color:black" >
</div>


<!-- Seller's Company Name -->
<div class="col-md-3 mb-3 d-flex align-items-center">
  <label for="companyName">
    <i class="fas fa-building"></i>
  </label>
  <input type="text" class="form-control" id="companyName" name="companyName" placeholder="Seller's Company Name" required>
</div>

<!-- Seller's Name -->
<div class="col-md-3 mb-3 d-flex align-items-center">
  <label for="sellerName">
    <i class="fas fa-user"></i>
  </label>
  <input type="text" class="form-control" id="sellerName" placeholder="Seller's Name" name="sellerName" required>
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

<!-- City -->
<div class="col-md-3 mb-3 d-flex align-items-center">
  <label for="city">
    <i class="fas fa-city"></i> 
  </label>
  <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
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

<!-- Physical Address -->
<div class="col-md-3 mb-3 d-flex align-items-center">
  <label for="physicalAddress">
    <i class="fas fa-map-marker-alt"></i> 
  </label>
  <textarea class="form-control" id="physicalAddress" name="physicalAddress" placeholder="Physical Address" required></textarea>
</div>

<!-- License and Certifications -->
<div class="col-md-3 mb-3 d-flex align-items-center">
  <label for="certifications">
    <i class="fas fa-certificate"></i> 
  </label>
  <textarea class="form-control" id="certifications" placeholder="License and Certifications" name="certifications"></textarea>
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
  <textarea class="form-control" id="industryExperience" placeholder="Industry Experience" name="industryExperience" placeholder="Industry Experience"></textarea>
</div>

<!-- Annual Turnover -->
<div class="col-md-3 mb-3 d-flex align-items-center">
  <label for="annualTurnover">
    <i class="fas fa-money-bill-alt"></i> 
  </label>
  <input type="number" class="form-control" id="annualTurnover" placeholder="Annual Turnover (INR)" name="annualTurnover" required>
</div>

<!-- Services Offered -->
<div class="col-md-3 mb-3 d-flex align-items-center">
  <label for="servicesOffered">
    <i class="fas fa-cogs"></i> 
  </label>
  <textarea class="form-control" id="servicesOffered" placeholder="Services Offered" name="servicesOffered"></textarea>
</div>

<!-- Customer Reviews -->
<div class="col-md-3 mb-3 d-flex align-items-center">
  <label for="customerReviews">
    <i class="fas fa-star"></i> 
  </label>
  <textarea class="form-control" id="customerReviews" placeholder="Customer Reviews" name="customerReviews"></textarea>
</div>

<!-- Trade Associations -->
<div class="col-md-3 mb-3 d-flex align-items-center">
  <label for="tradeAssociations">
    <i class="fas fa-users"></i> 
  </label>
  <textarea class="form-control" id="tradeAssociations" placeholder="Trade Associations" name="tradeAssociations"></textarea>
</div>

<!-- Insurance Coverage -->
<div class="col-md-3 mb-3 d-flex align-items-center">
  <label for="insuranceOptions">
    <i class="fas fa-shield-alt"></i> 
  </label>
  <textarea class="form-control" id="insuranceOptions" placeholder="Insurance Coverage" name="insuranceOptions"></textarea>
</div>

<!-- Emergency Contacts -->
<div class="col-md-3 mb-3 d-flex align-items-center">
  <label for="emergencyContacts">
    <i class="fas fa-phone"></i> 
  </label>
  <textarea class="form-control" id="emergencyContacts" placeholder="Emergency Contacts" name="emergencyContacts"></textarea>
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

<!-- Submit Button -->
<div class="col-md-3 d-flex align-items-center">
  <button type="submit" class="om-submit-btn btn btn-danger mt-3">GO</button> 
</div>
  </div>
    </form>
  </div>
</section>


<!-- Modal -->
<div class="modal fade" id="overviewModal" tabindex="-1" role="dialog" aria-labelledby="overviewModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="overviewModalLabel">Seller Information Overview</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="submitOverview">
        <div class="modal-body" id="overviewContent">
          <!-- Overview content will be inserted here -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" id="submitOverview">Submit</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
$(document).ready(function() {
  $('#sellerForm').submit(function(event) {
    event.preventDefault(); // Prevent default form submission behavior

    // Collect form data
    var formData = {};
    $('#sellerForm :input').each(function() {
      formData[this.name] = $(this).val();
    });

    // Create an overview
    var overview = "<ul>";
    for (var key in formData) {
      overview += "<li><strong>" + key + ":</strong> " + formData[key] + "</li>";
    }
    overview += "</ul>";

    // Display the overview in the modal
    $('#overviewContent').html(overview);
    $('#overviewModal').modal('show');

    // Handle click on the submit button inside the modal
    $('#submitOverview').click(function() {
      // Log the form data to the console (you can replace this with your AJAX request)
      console.log(formData);


      // Add your AJAX request here
      // Example: 
      // $.ajax({
      //   url: 'your-api-endpoint',
      //   type: 'POST',
      //   data: formData,
      //   success: function(response) {
      //     console.log(response);
      //   },
      //   error: function(error) {
      //     console.error(error);
      //   }
      // });

      // Close the modal
      $('#overviewModal').modal('hide');
    });
  });
});
</script>
<script>
  function displayFileName(input) {
    // Get the selected file name
    const fileName = input.files[0] ? input.files[0].name : 'Upload logo';

    // Set the placeholder to the selected file name
    input.setAttribute('placeholder', fileName);
  }
</script>