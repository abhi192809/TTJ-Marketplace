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
</style>

<?php if($Event):?>
<form id="buyerForm"   enctype="multipart/form-data">
<section class="body-bg-color">
<div class="container-fluid ">
    <div class="row p-2">
        <div class="mb-3 col-md-12 text-center"><h3 style="font-weight: bold;color: #343333;">
            <spam style="color:red">Buyer</spam> Register Now <?= $Event->EventPlace ?> <?= date('jS F Y', strtotime($Event->EventStartDate)) ?>
             
        </h3></div>
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
                    <input type="file" name="Logo" id="Logo" class="form-control" required="" accept=".png">
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
                        <option value="Outbound">Outbound</option>
                        <option value="Inbound">Inbound</option>
                        <option value="Domestic">Domestic</option>
                        <option value="Corporate">Corporate</option>
                        <option value="Event Planner">Event Planner</option>
                        <option value="Other">Other</option>
                    </select>        
                </div>
                <div class="col-md-6 p-2">
                    <label for="business_category">Business Category: <span>*</span></label>
                        <select name="Business_Category" id="business_category" class="form-control" required="">
                            <option value="">Select Your Business Category</option>
                            <option value="B2B">B2B</option>
                            <option value="B2C">B2C</option>
                            <option value="B2B &amp; B2C">B2B &amp; B2C</option>
                            <option value="Wedding Planner">Wedding Planner</option>
                            <option value="Event Planner">Event Planner</option>
                            <option value="Corporates">Corporates</option>
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
                <h5>TERMS &amp; CONDITIONS</h5>
                <ul class="mt-3">
                    <li> Pre-registration is mandatory.</li>
                    <li> Reimbursement up to ₹ 4,000/.</li>
                    <li> Refundable travel fare to be processed within 20 business days post-event, upon submission of original air/train/bus tickets</li>
                    <li> Airlines, Hotels, DMCs, and consolidators cannot register as buyers. They must register as exhibitors.</li>
                    <li> Information submitted in this form will go through a qualification process to ensure that they meet the criteria
                    of a registered/hosted buyer, after which a confirmation email will be sent to you. Only Outstation buyers can avail our Hosted buyer Programme by Paying a Token amount of Rs 1200/- *conditions apply*</li>
                    <li> Sampan Media reserves the right to cancel a Registred/hosted buyer registration if it becomes clear that the buyer is unable to fulfill their commitment to us or has provided false Information.</li>
                    <li> The first 20 outstation buyers will get the same venue hotel.</li>
                    <li> You can pool in the car (subject to mini. 3/4 buyers) from your city and fuel cost will be reimbursed @ rs 8 per km. </li>
                </ul>
        
                <h5>The hosted buyers program includes:</h5>
                     <ul class="m-0 px-5">
                        <li> Accommodation on twin sharing</li>
                        <li> Dinner on 16 March</li> 
                        <li> Breakfast on 17 March</li>
                    </ul>
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
                url: '<?= base_url() ?>Meeting/Users/Buyer/Submit_the_buyer_form',
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
