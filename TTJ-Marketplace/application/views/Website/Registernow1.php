<style type="text/css">
  .body-bg-color .mb-3 {
    padding: 0px 15px 6px 10px;
}
.form-control {
    display: block;
    width: 100%;
    height: 35px;
    padding: 0.275rem 0.45rem;
    font-size: 13px;
    font-weight: 400;
    line-height: 1.5;
    color: #6f6767;
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

.border {
    border: 1px solid #dee2e6 !important;
    padding: 10px 30px 10px 10px;
}
.p-2 {
    padding: 0.5rem!important;
}
label{
  font-size: 16px !important;
}
.buyer-submit-btn{
  background-color: #ff1400;
  color: #fff;
  padding: 5px;
}
.term-condition-content h5 {
    padding-top: 20px;
    font-weight: 700;
    font-size: 22px;
    letter-spacing: 1px;
}
.term-condition-content li{
  line-height: 39px;
}
.rotate-190 {
    transform: rotate(190deg);
  }
  
  .share-btnnn {
    border-radius: 5px;
    box-shadow: 2px 2px 11px 0px #747474;
    padding: 5px;
    font-size: 15px;
    margin: 8px;
}
  
</style>
<br>
<br>

<?php if($Event):?>
<form id="buyerForm"   enctype="multipart/form-data">
<section class="body-bg-color">
<div class="container">
    <div class="row p-2">
        <div class="col-md-6 col-sm-12 col-12" style="  box-shadow: -11px 0px 0px 11px #dcd6d6;
    padding: 24px;
    border-radius: 10px 56px 10px 10px;">
          <img src="<?= base_url()?>/assets/Meeting/Event_image/<?= $Event->EventImage ?>" width="100%" height="400px">
            <p class="mt-2" style="font-size: large;"><b>Venue</b>:- <?= $Event->Location ?></p>
            <p class="mt-2" style="font-size: small;"><b>Number</b>:- <?= $Event->Phone_Number?></p>
            <p class="mt-2" style="font-size: small;"><b>Email ID</b>:- info@sampanmedia.com | info@ttjtravmart.com</p>
            
          </div>
        <div class="col-md-6 col-sm-12 col-12 border" style="      box-shadow: 14px 0px 0px 12px #dcd6d6;
    padding: 24px;
    border-radius: 44px 7px 10px 10px">
            <div class="row">
                <div class="col-md-6 p-2">
                    <label for="name">Logo: <span>*</span></label>
                    <input type="file" name="Logo" id="Logo" class="form-control" required="" accept=".png, .jpg">

                </div>
                <div class="col-md-6 p-2">
                    <label for="name">Name: <span>*</span></label>
                    <input type="text" name="Name" id="name" class="form-control" required="">
                </div>
                <div class="col-md-6 p-2">
                    <label for="designation">Designation: <span>*</span></label>
                     <input type="text" name="Designation" id="designation" class="form-control" required="">
                </div>
                <div class="col-md-6 p-2">
                    <label for="company_name">Your Company Name: <span>*</span></label>
                    <input type="text" name="Your_Company_Name" id="company_name" class="form-control" required="">
                </div>
                <div class="col-md-6 p-2">
                    <label for="nature_of_business">Nature of Business: <span>*</span></label>
                        <select name="Nature_of_Business" id="nature_of_business" class="form-control" required="">
                        <option value="">Select Your Nature of Business</option>
                        <?php foreach($Nature_of_Business as $row):?>
                        <option value="<?= $row->Nature_of_Business ?>"><?= $row->Nature_of_Business ?></option>
                        <?php endforeach;?>
                        <option value="Other">Other</option>
                    </select>        
                </div>
                <div class="col-md-6 p-2">
                    <label for="business_category">Business Category: <span>*</span></label>
                        <select name="Business_Category" id="business_category" class="form-control" required="">
                            <option value="">Select Your Business Category</option>
                            <?php foreach($Business_Category_Master as $row):?>
                            <option value="<?= $row->Business_Category ?>"><?= $row->Business_Category ?></option>
                            <?php endforeach;?>
                        </select>        
                </div>
                <div class="col-md-6 p-2">
                    <label for="company_address">Company Address: <span>*</span></label>
                    <input type="text" name="Company_Address" id="company_address" class="form-control" required="">        
                </div>
                <div class="col-md-6 p-2">
                    <label for="annual_turnover">Annual Turnover: <span>*</span></label>
                    <input type="text" name="Annual_Turnover" id="annual_turnover" class="form-control" required="">
                </div>
                <div class="col-md-6 p-2">
                    <label for="year_commencement">Year of Commencement of Business: <span>*</span></label>
                    <input type="text" name="Year_Commencement" id="year_commencement" class="form-control" required="">
                </div>
                <div class="col-md-6 p-2">
                    <label for="destinations">Destinations: <span>*</span></label>
                    <input type="text" name="Destinations" id="destinations" class="form-control" required="">
                </div>
                <div class="col-md-6 p-2">
                    <label for="trade_associations">Trade Associations: <span>*</span></label>
                    <input type="text" name="Trade_Associations" id="trade_associations" class="form-control" required="">
                                
                </div>
                <div class="col-md-3 p-2">
                    <label for="Country">Country <span>*</span></label>
                    <input type="text" name="Country" id="Country" class="form-control" required="">
                </div>
                <div class="col-md-3 p-2">
                    <label for="city">City <span>*</span></label>
                    <input type="text" name="City" id="city" class="form-control" required="">
                </div>
                <div class="col-md-3 p-2">
                    <label for="pin_code">Pin Code: <span>*</span></label>
                    <input type="text" name="Pin_Code" id="pin_code" class="form-control" required="">
                </div>
                <div class="col-md-4 p-2">
                    <label for="email">Email: <span>*</span></label>
                    <input type="email" name="Email" id="email" class="form-control" required="">
                </div>
                <div class="col-md-4 p-2">
                    <label for="mobile_number">Mobile Number: <span>*</span></label>
                    <input type="tel" name="Mobile_Number" id="mobile_number" class="form-control" required="">
                </div>
                <div class="col-md-12 mb-2">
                    <input type="hidden" name="EventID" value="<?= $Event->EventID ?>"> <input type="submit" class="buyer-submit-btn form-control btn btn-success mt-5" value="Submit">
                </div>
            </div>
        </div>
      </div>


     <div class="row">
        <div class="col-md-12">
            <div class="term-condition-content">
               <?= $Event->Description ?>
            </div>
        </div>
      </div>


    </div>

</section>
</form>
<?php endif;?>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        $("#buyerForm").submit(function(e) {
            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                url: '<?= base_url() ?>Eventregisternow/Submit_the_buyer_form',
                type: 'post',
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Form Submitted Successfully!',
                            text: response.message,
                        });
                         $("#buyerForm")[0].reset();
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops... Something went wrong!',
                            text: response.message,
                        });
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });
    });
</script>
