<style>
    body {
      margin: 0;
      padding: 0;
    }

    .container-fluid {
      padding: 0px 20px 20px 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    table, th, td {
      border: 1px solid #dee2e6;
    }

    th, td {
      padding: 10px;
      text-align: left;
    }

    th {
      background-color: #ca2327;
      color: #fff;
    }

    .actions {
      display: flex;
      justify-content: space-between;
    }
    table th, table td {
    text-align: center;
  }
    .action-icons {
      font-size: 11px;
      cursor: pointer;
      margin-right: 7px;
      color: #5d5a5a;
    }

    .show-all-btn {
      margin-top: 10px;
    }

    
element.style {
    right: 0px;
}
#animationSection {
    position: fixed;
    top: 0;
    right: -100%;
    height: 600px;
    margin: 71px 0px;
    width: 25%;
    background-color: #fff;
    overflow-y: auto;
    z-index: 1000;
    transition: right 0.5s ease-in-out;
    padding: 20px;
    border: 1px solid black;
}

#animationSection1 {
    position: fixed;
    top: 0;
    right: -100%;
    height: 600px;
    margin: 71px 0px;
    width: 25%;
    background-color: #fff;
    overflow-y: auto;
    z-index: 1000;
    transition: right 0.5s ease-in-out;
    padding: 20px;
    border: 1px solid black;
}

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
    #allSellerData1 {
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
   
   .download-iconn {
    /* float: right; */
    font-size: 16px;
    /* margin-top: 2px; */
    color: #5a5555;
   }
   
   .Meeting-Download-btbn {
    font-size: 14px;
    margin-top: 8px;
    height: 31px;
}
   .form-data-heading {
    font-size: 20px;
    position: absolute;
}
   .form-data-heading {
    line-height: 75px;
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
        font-size:14px;
    }
   .om-lead-formselect {
    padding: 5px;
    background-color: #040404;
    height: 42px;
    color: #fff;
}
  </style>
</head>
<body>
<div class="container-fluid">
    <!-------------------div-------------->
       <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="card-header1">
        <h4 class="form-data-heading mb-0">Active Event Meeting</h4>
        </div>
        </div>
        
     
         <div class="col-lg-2 col-md-2 col-sm-12">
             <div class="card-header1 mt-3">
             <button type="button" class="Meeting-Download-btbn btn btn-success"><i class="download-iconn fas fa-download action-icons" title="Download"></i> Meeting Download</button>
            </div>
         </div>
         
             <div class="col-lg-2 col-md-2 col-sm-12">
               <div class="dataTables_length" id="dataTable_length">
               <span>Show  entries </span>
               <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
                <option value="10">10</option>
                <option value="25">20</option>
                <option value="50">50</option>
                <option value="100">100</option>
                <option value="100">300</option>
                <option value="100">All</option>
                </select>
               </div>
             </div>
             
          

        <div class="col-lg-2 col-md-2 col-sm-12">
               <div class="dataTables_length" id="dataTable_length">
               <span>Seller Company Name </span>
               <select  name="dataTable_length" aria-controls="dataTable" id="cityFilter" class="custom-select custom-select-sm form-control form-control-sm">
               
               <option value="John Doe">John Doe</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Kolkata">Kolkata</option>
                
                </select>
               </div>
             </div>


              <div class="col-lg-3 col-md-3 col-sm-12">
               <div id="dataTable_filter" class="dataTables_filter">
               <span>Search:</span>
                <input type="search" id="dataTable_filter" class="form-control form-control-sm" placeholder="" aria-controls="dataTable">
               
              </div>
             </div>
          </div>
       
     




  <!-------------end----------------->
    <div class="margtoppp-data-form card">
      <div class="table-responsive card-body">
        <table class="table" id="dataTable">
        <thead>
        <tr>
            <th>ID</th>
            <th>Seller Name</th>
            <th>Seller Company Name</th>
            <th>Buyer Name</th>
            <th>Buyer Company Name</th>
            <th>Day</th>
            <th>Time Slot</th>
            <th>View Buyer</th>
            <th>View Seller</th>
        </tr>
        </thead>
        <tbody>
        <!-- Active Event Come  on that Events-->
        <tr>
            <td>1</td>
            <td>John Doe</td>
            <td>ABC Corporation</td>
            <td>John Doe</td>
            <td>ABC Corporation</td>
            <td>1</td>
            <td>1:20PM to 1:30 PM</td>
            <td class="old-eventbtnnn"><a href="https://www.ttjtravmart.com/Meeting/Admin/View_profile/View_profile_seller" class="event-details-button btn-secondary btn-icon-split" onclick="showAllDatabuyer()" contenteditable="false" style="cursor: pointer;">
             <span class="icon">
             <i class="fas fa-eye"></i>
             </span>
             
             </a>
           </td>
           
            <td class="old-eventbtnnn"><a href="https://www.ttjtravmart.com/Meeting/Admin/View_profile/View_profile_seller" class="event-details-button btn-secondary btn-icon-split" onclick="showAllSellerDataseller1()" contenteditable="false" style="cursor: pointer;">
             <span class="icon">
             <i class="fas fa-eye"></i>
             </span>
             
             </a>
           </td>
          
        </tr>
        <!-- Add more rows as needed -->
        </tbody>
      </table>

      <!------------pagination----start------->
     <!------------pagination----start---end--->


    </div>
  </div>
</div>

<!-- Animation Section -->

<!-- Buyer Data -->
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
 
    <div class="row">
             <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
              
             </div>      
             
              <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                <a href="#" class="btn btn-secondary mb-1">
                 View More
                  </a>
             </div>      
     </div>
     
       <!--------------new---row---add---------->
 
 
  </div>

<!-- Seller Data -->
  <div id="animationSection1">
  <span id="closeBtn" class="action-icons" style="font-size: 30px;" onclick="closeAnimation1()">×</span>
  <h4>Seller Data</h4>
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

   <div class="row">
    <div class="col-lg-7 col-md-7 col-sm-7 col-12">
        
   <ul class="lead-form-om">
  
    <li>
      <label for="email">Seller's Name -</label>
    </li>
    <li>
      <label for="contact_number"> Company Name -</label>
    </li>
    <li>
      <label for="trip_category">Contact -</label>
    </li>
    <li>
      <label for="departure_country">Email -</label>
    </li>
    <li>
      <label for="departure_city"> City -</label>
    </li>
    <li>
      <label for="arrival_country">Pin Code -</label>
    </li>
    <li>
      <label for="arrival_city">Website -</label>
    </li>
    <li>
      <label for="departure_date">Physical Addresse -</label>
    </li>
  </ul>
  </div>
 
  
  <div class="col-lg-5 col-md-5 col-sm-12 col-12">
       <ul class="lead-form-om">
    <li>
      <label for="full_name">Omprakash</label>
    </li>
    <li>
      <label for="email">omp@gmail.com</label>
    </li>
    <li>
      <label for="contact_number">9838575128</label>
    </li>
    <li>
      <label for="trip_category">xyz</label>
    </li>
    <li>
      <label for="departure_country">India</label>
    </li>
    <li>
      <label for="departure_city">Noida</label>
    </li>
    <li>
      <label for="arrival_country">Goa</label>
    </li>
    <li>
      <label for="arrival_city">Goa</label>
    </li>

  </ul>
  </div>
  </div><hr>
  <!--------------new---row---add---------->
  
   <!--------------new---row---add---------->
 
    <div class="row text-center">
              <div class="col-lg-12 col-md-12 col-sm-12 mt-2">
                <a href="#" class="btn btn-secondary mb-1">
                 View More
                  </a>
             </div>      
     </div>
     
       <!--------------new---row---add---------->
 
 
  </div>
  
  
<script>
$(document).ready(function() {
  const table = $('#dataTable');

  // Listen for changes in the "Show entries" dropdown
  $('#dataTable_length select').change(function() {
    const selectedLength = parseInt($(this).val(), 10);

    // Hide all rows
    table.find('tbody tr').hide();

    // Show the selected number of rows
    table.find('tbody tr:lt(' + selectedLength + ')').show();
  });

  // Listen for changes in the city dropdown
  $('#cityFilter').change(function() {
    filterTable();
  });

  // Listen for changes in the search input
  $('#dataTable_filter input').on('input', function() {
    filterTable();
  });

  function filterTable() {
    const selectedCity = $('#cityFilter').val().toLowerCase();
    const searchTerm = $('#dataTable_filter input').val().toLowerCase();

    // Show all rows before applying filters
    table.find('tbody tr').show();

    // Filter based on the selected city
    if (selectedCity !== 'all') {
      table.find('tbody tr').filter(function() {
        return $(this).find('td:eq(1)').text().toLowerCase() !== selectedCity;
      }).hide();
    }

    // Filter based on the search term
    if (searchTerm.length > 0) {
      table.find('tbody tr').filter(function() {
        return !$(this).text().toLowerCase().includes(searchTerm);
      }).hide();
    }
  }
});

</script>
<script>
  $(document).ready(function () {
    // DataTable initialization with custom options
    var table = $('#dataTable').DataTable({
      "paging": false,  // Disable default pagination
      "info": false    // Disable showing info
    });

    // Add your custom sorting, filtering, and pagination code here
    // ...

    // Example: Apply pagination to the custom pagination element
    var customPagination = $('#pagination').DataTable({
      "pagingType": "input",
      "displayStart": 0,  // Initial page
      "lengthChange": false,  // Disable page size change
      "drawCallback": function () {
        $('#pagination .paginate_button').on('click', function () {
          var pageIndex = $(this).attr('data-dt-idx');
          table.page(parseInt(pageIndex)).draw('page');
        });
      }
    });
  });
</script>
<script>
  $(document).ready(function () {
    // DataTable initialization with custom options
    var table = $('#dataTable').DataTable({
      "paging": false,  // Disable default pagination
      "info": false    // Disable showing info
    });

    // Add your custom sorting, filtering, and pagination code here
    // ...

    // Example: Apply pagination to the custom pagination element
    var customPagination = $('#pagination').DataTable({
      "pagingType": "input",
      "displayStart": 0,  // Initial page
      "lengthChange": false,  // Disable page size change
      "drawCallback": function () {
        $('#pagination .paginate_button').on('click', function () {
          var pageIndex = $(this).attr('data-dt-idx');
          table.page(parseInt(pageIndex)).draw('page');
        });
      }
    });
  });
</script>
<script>
  function showAllDatabuyer() {
    // Replace the placeholder with your actual demo data
    
    // Populate the animation section with demo data
    // populateAnimationSection(demoData);

    // Show the animation section
    $('#animationSection').css('right', '0');

    // Delayed opacity transition for the fadeIn effect
    setTimeout(function() {
      $('#allSellerData').css('opacity', '1');
    }, 100);
  }


  function closeAnimation() {
    // Hide the animation section and reset opacity
    $('#animationSection').css('right', '-100%');
    $('#allSellerData').css('opacity', '0');
  }
</script>

<script>
  function showAllSellerDataseller1() {
    // Replace the placeholder with your actual demo data
    
    // Populate the animation section with demo data
    // populateAnimationSection(demoData);

    // Show the animation section
    $('#animationSection1').css('right', '0');

    // Delayed opacity transition for the fadeIn effect
    setTimeout(function() {
      $('#allSellerData1').css('opacity', '1');
    }, 100);
  }

  function closeAnimation1() {
    // Hide the animation section and reset opacity
    $('#animationSection1').css('right', '-100%');
    $('#allSellerData1').css('opacity', '0');
  }
</script>

