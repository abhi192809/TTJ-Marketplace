
<style>

  #closeBtn {
      position: absolute;
      top: 10px;
      right: 20px;
      cursor: pointer;
    }


    #allSellerData {
    opacity: 0;
    transition: opacity 0.5s ease-in-out;
    max-height: 600px; /* Set a fixed height for the content */
    /* overflow-y: auto; */ /* Remove this line to disable scrollbar */
  }
  .active-status {
    background-color: #28a745; /* Green color for Active */
    color: #fff; /* White text for better contrast */
  }


  .inactive-status {
    background-color: #dc3545; /* Red color for Inactive */
    color: #fff; /* White text for better contrast */
  }


  .margtoppp-data-form{
    margin-top: 11px;
   }


   .form-data-heading{
    line-height: 53px;
   }

     
#animationSection {
position: fixed;
top: 0;
right: -100% ;
height: 600px;
margin: 71px 0px;
width: 25%;

background-color: rgba(255, 255, 255, 0.9);
overflow-y: auto;
z-index: 1000;
transition: right 0.5s ease-in-out;
padding: 20px;
border: 1px solid black;
}
/* Adjusting carousel height */
#imageContainer {
  height: 300px; /* Adjust this as needed */
}


/* Style for the overlay buttons */
.overlay-button {
  position: absolute;
  top: 13px;
  right: 26px;
  background-color: #100f0f52;
  color: white;
  padding: 3px 24px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s;
  font-size: 13px;
  border: 1px solid #efefef;
  line-height: 29px;
}


.overlay-button:hover {
  background-color: rgba(0, 0, 0, 0.8);
}


.carousel-control-next, .carousel-control-prev {
  position: absolute;
  top: 0;
  bottom: 117px !important;
  z-index: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 3%;
  padding: 0;
  color: #fff;
  text-align: center;
  background: 0 0;
  border: 0;
  opacity: .5;
  transition: opacity .15s ease;
}


.book-buyer-logo {
  border: 1px solid #b8b8b8;
  overflow: none;
  text-align: center;
  padding: 10px;
}


.book-buyer-logo img {
  width: 100%;
  height: 150px;
}


.content h6 {
  font-size: 18px;
  border-top: 1px solid #ddd;
  font-weight: 600;
  padding: 5px;
  text-align: center;
}


.content p {
  font-size: 14px;
  text-align: center;
  border-top: 1px solid #ddd;
  border-bottom: 1px solid #ddd;
  padding: 10px;
}


.book-buyer-logo i {
  font-size: 16px;
  color: #ed1e26;
}

.btn-secondary11{
    color: #fff;
    height: 31px;
    font-size: 14px;
    line-height: 18px; 
    background-color:#c8181c;
}

.btn-danger22{
    color: #fff;
    height: 31px;
    font-size: 14px;
    line-height: 18px;
    background-color:#2d2a2a;
}

/* Popup Styles */
.popup {
  display: none;
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  z-index: 9999;
}


.popup-content {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: white;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}


/* Custom tooltip style */
.modal .tooltip-inner {
  background-color: white;
  color: black;
  border: 1px solid black; /* Change the color of the border */
}
 .view-details-btnn a{
      text-decoration: none;
    }
    .old-eventbtnnn i{
        color: #fff;
    }
    .lead-form-om{
       margin: 3px;
       padding: 0px;
       /*color: transparent;*/
       /*text-shadow: 0 0 5px rgba(0,0,0,0.5); */
    }
    .lead-form-om li{
        list-style: none;
        padding-top: 6px;
        font-size:15px;
    }
   .om-lead-formselect {
    padding: 5px;
    background-color: #040404;
    height: 42px;
    color: #fff;
}
</style>


<div class="container-fluid"  style="height: 630px;
            overflow: auto;">
  <div class="h4"> Buyer List of {Event Name} Event</div>
     <div class="row">
          <div class="col-md-3 position-relative">
            <div class="book-buyer-logo my-2">
              <img src="https://picsum.photos/150/150?random" alt="Random Logo">
              <div class="content">
                <p><i class="fas fa-building"></i> : XYZ Corporation</p>
                <button type="button" class="btn btn-secondary11 know-more-btn mb-3" onclick="showAllSellerData()">Update Slot</button>
                 <button type="button" class="btn btn-danger22 know-more-btn mb-3" onclick="showAllSellerData()">View</button>
                <p > Time slot  1:00 pm to 10:00pm</p>
                <button class="btn know-more-btn"> Start </button>
              </div>
            </div>

          </div>
          <div class="col-md-3 position-relative">
            <div class="book-buyer-logo">
              <img src="https://picsum.photos/150/150?random" alt="Random Logo">
              <div class="content">
                <p><i class="fas fa-building"></i> : XYZ Corporation</p>
                 <button type="button" class="btn btn-secondary11 know-more-btn mb-3" onclick="showAllSellerData()">Update Slot</button>
                 <button type="button" class="btn btn-danger22 know-more-btn mb-3" onclick="showAllSellerData()">View</button>
              </div>
            </div>

          </div>
          <div class="col-md-3 position-relative">
            <div class="book-buyer-logo">
              <img src="https://picsum.photos/150/150?random" alt="Random Logo">
              <div class="content">
                <p><i class="fas fa-building"></i> : XYZ Corporation</p>
                 <button type="button" class="btn btn-secondary11 know-more-btn mb-3" onclick="showAllSellerData()">Update Slot</button>
                 <button type="button" class="btn btn-danger22 know-more-btn mb-3" onclick="showAllSellerData()">View</button>
              </div>
            </div>

          </div>
          <div class="col-md-3 position-relative">
            <div class="book-buyer-logo">
              <img src="https://picsum.photos/150/150?random" alt="Random Logo">
              <div class="content">
                <p><i class="fas fa-building"></i> : XYZ Corporation</p>
                 <button type="button" class="btn btn-secondary11 know-more-btn mb-3" onclick="showAllSellerData()">Update Slot</button>
                 <button type="button" class="btn btn-danger22 know-more-btn mb-3" onclick="showAllSellerData()">View</button>
              </div>
            </div>

          </div>
      
          <div class="col-md-3 position-relative">
            <div class="book-buyer-logo">
              <img src="https://picsum.photos/150/150?random" alt="Random Logo">
              <div class="content">
                <p><i class="fas fa-building"></i> : XYZ Corporation</p>
                <button type="button" class="btn btn-secondary11 know-more-btn mb-3" onclick="showAllSellerData()">Update Slot</button>
                 <button type="button" class="btn btn-danger22 know-more-btn mb-3" onclick="showAllSellerData()">View</button>
              </div>
            </div>

          </div>
      
          <div class="col-md-3 position-relative">
            <div class="book-buyer-logo">
              <img src="https://picsum.photos/150/150?random" alt="Random Logo">
              <div class="content">
                <p><i class="fas fa-building"></i> : XYZ Corporation</p>
                 <button type="button" class="btn btn-secondary11 know-more-btn mb-3" onclick="showAllSellerData()">Update Slot</button>
                 <button type="button" class="btn btn-danger22 know-more-btn mb-3" onclick="showAllSellerData()">View</button>
              </div>
            </div>

          </div>
      
          <div class="col-md-3 position-relative">
            <div class="book-buyer-logo">
              <img src="https://picsum.photos/150/150?random" alt="Random Logo">
              <div class="content">
                <p><i class="fas fa-building"></i> : XYZ Corporation</p>
                 <button type="button" class="btn btn-secondary11 know-more-btn mb-3" onclick="showAllSellerData()">Update Slot</button>
                 <button type="button" class="btn btn-danger22 know-more-btn mb-3" onclick="showAllSellerData()">View</button>
              </div>
            </div>

          </div>
      
          <div class="col-md-3 position-relative">
            <div class="book-buyer-logo">
              <img src="https://picsum.photos/150/150?random" alt="Random Logo">
              <div class="content">
                <p><i class="fas fa-building"></i> : XYZ Corporation</p>
                 <button type="button" class="btn btn-secondary11 know-more-btn mb-3" onclick="showAllSellerData()">Update Slot</button>
                 <button type="button" class="btn btn-danger22 know-more-btn mb-3" onclick="showAllSellerData()">View</button>
              </div>
            </div>

          </div>
      

          <div class="col-md-3 position-relative">
            <div class="book-buyer-logo">
              <img src="https://picsum.photos/150/150?random" alt="Random Logo">
              <div class="content">
                <p><i class="fas fa-building"></i> : XYZ Corporation</p>
                <button type="button" class="btn btn-secondary11 know-more-btn mb-3" onclick="showAllSellerData()">Update Slot</button>
                 <button type="button" class="btn btn-danger22 know-more-btn mb-3" onclick="showAllSellerData()">View</button>
              </div>
            </div>

          </div>
      
          <div class="col-md-3 position-relative">
            <div class="book-buyer-logo">
              <img src="https://picsum.photos/150/150?random" alt="Random Logo">
              <div class="content">
                <p><i class="fas fa-building"></i> : XYZ Corporation</p>
                 <button type="button" class="btn btn-secondary11 know-more-btn mb-3" onclick="showAllSellerData()">Update Slot</button>
                 <button type="button" class="btn btn-danger22 know-more-btn mb-3" onclick="showAllSellerData()">View</button>
              </div>
            </div>

          </div>
      
          <div class="col-md-3 position-relative">
            <div class="book-buyer-logo">
              <img src="https://picsum.photos/150/150?random" alt="Random Logo">
              <div class="content">
                <p><i class="fas fa-building"></i> : XYZ Corporation</p>
                 <button type="button" class="btn btn-secondary11 know-more-btn mb-3" onclick="showAllSellerData()">Update Slot</button>
                 <button type="button" class="btn btn-danger22 know-more-btn mb-3" onclick="showAllSellerData()">View</button>
              </div>
            </div>

          </div>
      
          <div class="col-md-3 position-relative">
            <div class="book-buyer-logo">
              <img src="https://picsum.photos/150/150?random" alt="Random Logo">
              <div class="content">
                <p><i class="fas fa-building"></i> : XYZ Corporation</p>
                <button type="button" class="btn btn-secondary11 know-more-btn mb-3" onclick="showAllSellerData()">Update Slot</button>
                 <button type="button" class="btn btn-danger22 know-more-btn mb-3" onclick="showAllSellerData()">View</button>
              </div>
            </div>

          </div>
      
          <div class="col-md-3 position-relative">
            <div class="book-buyer-logo">
              <img src="https://picsum.photos/150/150?random" alt="Random Logo">
              <div class="content">
                <p><i class="fas fa-building"></i> : XYZ Corporation</p>
                <button type="button" class="btn btn-secondary11 know-more-btn mb-3" onclick="showAllSellerData()">Update Slot</button>
                 <button type="button" class="btn btn-danger22 know-more-btn mb-3" onclick="showAllSellerData()">View</button>
              </div>
            </div>

          </div>
      
          <div class="col-md-3 position-relative">
            <div class="book-buyer-logo">
              <img src="https://picsum.photos/150/150?random" alt="Random Logo">
              <div class="content">
                <p><i class="fas fa-building"></i> : XYZ Corporation</p>
                <button type="button" class="btn btn-secondary11 know-more-btn mb-3" onclick="showAllSellerData()">Update Slot</button>
                 <button type="button" class="btn btn-danger22 know-more-btn mb-3" onclick="showAllSellerData()">View</button>
              </div>
            </div>

          </div>
      
  <!---------------new-----om---sidebar--popup---------->
  <!-- Sidebar popup -->
    <div id="animationSection">
  <span id="closeBtn" class="action-icons" style="font-size: 30px;" onclick="closeAnimation()">×</span>
  <h4>Buyer Data</h4>
  
   <div class="row">
      <div class="col-lg-10 col-md-10 col-sm-12">
               <div>
               <select name="Permition"  class="form-control  mt-2">
                <option value="">Select lead status</option>
                <option value="Approved">Approved</option>
                <option value="Non Approved">Non Approved</option>
                <option value="Pending">Pending </option>
                </select>
               </div>
             
             </div>
             
              <div class="col-lg-2 col-md-2 col-sm-12 mt-2">
               <a href="#" class="btn btn-danger" onclick="openPopup()">
                    <i class="fas fa-check"></i>
                  </a>
             </div>      
     </div>
     <hr>
     <!----------1st----row---end---------->
     <div class="row" style="align-items:center">
          <div class='col-md-6'>
           <label for="full_name">Logo -</label>
          </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-12">
         <div class="event-detailss">
         <img src="https://tiimg.tistatic.com/fp/1/003/757/babylon-capital-commercial-offices-701.jpg" width="65%"> 
         </div>
         </div>
      </div>
<!-- Existing code ... -->

<div class="row">
    <div class="col-lg-7 col-md-7 col-sm-7 col-12">

        <ul class="lead-form-om">
         
            <li>
                <label for="name">Name:</label>
            </li>
            <li>
                <label for="designation">Designation:</label>
            </li>
            <li>
                <label for="company_name">Your Company Name:</label>
            </li>
            <li>
                <label for="nature_of_business">Nature of Business:</label>
            </li>
            <li>
                <label for="business_category">Business Category:</label>
            </li>
            <li>
                <label for="company_address">Company Address:</label>
            </li>
            <li>
                <label for="annual_turnover">Annual Turnover:</label>
            </li>
            <li>
                <label for="year_of_commencement">Y.C.B:</label>
            </li>
            <li>
                <label for="destinations">Destinations:</label>
            </li>
            <li>
                <label for="trade_associations">Trade Associations:</label>
            </li>
            <li>
                <label for="city">City:</label>
            </li>
            <li>
                <label for="pin_code">Pin Code:</label>
            </li>
            <li>
                <label for="email">Email:</label>
            </li>
            <li>
                <label for="mobile_number">Mobile Number:</label>
            </li>
        </ul>
    </div>

    <div class="col-lg-5 col-md-5 col-sm-12 col-12">
        <ul class="lead-form-om">
            <!-- Replace with the corresponding input values -->
            
            <li>
                <label for="company_name_value">xyz</label>
            </li>
            <li>
                <label for="contact_value">9838575128</label>
            </li>
            <li>
                <label for="email_value">omp@gmail.com</label>
            </li>
            <li>
                <label for="city_value">Noida</label>
            </li>
            <li>
                <label for="pin_code_value">201301</label>
            </li>
            <li>
                <label for="website_value">Goa</label>
            </li>
            <li>
                <label for="address_value">Goa</label>
            </li>
             <li>
                <label for="address_value">Demo</label>
            </li>
            <li>
                <label for="address_value">Demo</label>
            </li>
            <li>
                <label for="address_value">Demo</label>
            </li>
             <li>
                <label for="address_value">Demo</label>
            </li>
             <li>
                <label for="address_value">Demo</label>
            </li>
             <li>
                <label for="address_value">Demo</label>
            </li>
             <li>
                <label for="address_value">Demo</label>
            </li>
        </ul>
    </div>
</div>

<!-- Existing code ... -->

   
    <hr>
  <!--------------new---row---add---------->
  
   <!--------------new---row---add---------->
 
    <div class="row text-center">
              <div class="col-lg-12 col-md-12 col-sm-12 mt-2">
                <a href="https://www.ttjtravmart.com/Meeting/Admin/View_profile/View_profile_seller" class="btn btn-secondary mb-1">
                 Buyer View 
                  </a>
             </div>      
     </div>
     
       <!--------------new---row---add---------->
 
 
  </div>
  
  
  </div>


<!-- The Modal -->
<div class="modal fade bookingModal" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="bookingModalLabel">Select a Meeting Slot</h5>
        <button type="button" class="btn-close" style="background: white;border: 0;" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="time-slots">
           
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Bootstrap JS and jQuery -->

 <script>
  // JavaScript for toggling sidebar popup
  function showAllSellerData() {
    console.log("Show all seller data called"); // Debugging statement
    document.getElementById("animationSection").classList.add("sidebar-open");
  }

  function closeAnimation() {
    console.log("Close animation called"); // Debugging statement
    document.getElementById("animationSection").classList.remove("sidebar-open");
  }
</script>



<script>
  function showAllSellerData() {
    // Replace the placeholder with your actual demo data
    const demoData = [
      { userId: 1, },
      { userId: 2,}
      // Add more demo entries as needed
    ];


    // Populate the animation section with demo data
    populateAnimationSection(demoData);


    // Show the animation section
    $('#animationSection').css('right', '0');


    // Delayed opacity transition for the fadeIn effect
    setTimeout(function() {
      $('#allSellerData').css('opacity', '1 ');
    }, 100);
  }


  function populateAnimationSection(data) {
    // Clear existing rows
    $('#allSellerData').empty();


    // Populate the table with demo data
    data.forEach(entry => {
      const row = $('<tr>');
      row.append($('<td>').text(entry.userId));
      row.append($('<td>').text(entry.name));
      $('#allSellerData').append(row);
    });
  }


  function closeAnimation() {
    // Hide the animation section and reset opacity
    $('#animationSection').css('right', '-100%');
    $('#allSellerData').css('opacity', '0');
  }
</script>


 <!-----------------om----sidebar---pop-----end-------->

    </div>
   </div>
 


    



