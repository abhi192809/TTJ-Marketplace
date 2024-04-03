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
      margin-top: 9px;
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
    background-color: rgba(255, 255, 255, 0.9);
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
  .active-status {
    background-color: #28a745; /* Green color for Active */
    color: #fff; /* White text for better contrast */
  }

  .inactive-status {
    background-color: #dc3545; /* Red color for Inactive */
    color: #fff; /* White text for better contrast */
  }

   .form-data-heading{
    line-height: 53px;
   }
  .margtoppp-data-form i{
      color: #fff;
  }
  
  .custom-control-input:checked~.custom-control-label::before {
    color: #fff;
    border-color: #b50e12;
    background-color: #ca2327;
}

.margtoppp-data-form{
    margin-top: 11px;
   }

   .form-data-heading{
    line-height: 53px;
   }
 
    .view-details-btnn a{
      text-decoration: none;
    }
    
    ul {
      list-style-type: none;
      padding: 0;
    }

    li {
      margin-bottom: 10px;
    }
    
    /*.btn-icon-split22 {*/
    /*display: inline-block;*/
    /*padding: 3px;*/
    /*line-height: 22px;*/
}

.btn-icon-split .icon1 {
   background: rgba(0, 0, 0, 0.15) !important;
    display: inline-block;
    padding: 0.375rem 0.75rem;
}

.custom-switch22 {
    padding-left: 2.25rem;
    width: 44px;
}
    
  </style>
</head>
<body>

<div class="container-fluid">
    <!-------------------div-------------->
       <div class="row">
        <div class="col-lg-6 col-md-2 col-sm-12">
        <div class="back-iconn card-header1">
         <!--<button id="backButton">Go Back</button>-->
        <h4 class="form-data-heading mb-0">Seller Data</h4>
        </div>
        </div>

        <div class="col-lg-6 col-md-8 col-sm-12 ">
          <div class="row">
             <div class="col-lg-3 col-md-4 col-sm-12">
               <div class="dataTables_length" id="dataTable_length">
               <span>Year </span>
               <select  class="custom-select custom-select-sm form-control form-control-sm">
               
               <option value="Delhi">2024</option>
                <option value="Mumbai">2023</option>
                <option value="Kolkata">2022</option>
                
                </select>
               </div>
             </div>
            

             <div class="col-lg-3 col-md-4 col-sm-12">
               <div class="dataTables_length" id="dataTable_length">
               <span>Event Name  </span>
               <select  name="dataTable_length" aria-controls="dataTable" id="cityFilter" class="custom-select custom-select-sm form-control form-control-sm">
               
               <option value="Delhi">Delhi</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Kolkata">Kolkata</option>
                
                </select>
               </div>
             </div>
             
              <div class="col-lg-3 col-md-4 col-sm-12">
               <div id="dataTable_filter" class="dataTables_filter">
               <span>Search:</span>
                <input type="search" id="dataTable_filter" class="form-control form-control-sm" placeholder="" aria-controls="dataTable">
               
              </div>
             </div>
             
             <div class="col-lg-3 col-md-4 col-sm-12">
               <div class="dataTables_length" id="dataTable_length" style="margin-top: 24px;">
                <a href="<?= base_url() ?>Meeting/Admin/seller"><button class="btn-height btn btn-danger text-white">+ Add Seller</button></a>
               </div>
             </div>
             
             
          </div>
        </div>
      </div>
      <hr>
      <!------------2nd---row---end------->


  <!-------------end----------------->
    <div class="margtoppp-data-form card">
      <div class="table-responsive card-body">
        <table class="table" id="dataTable">
        <thead>
        <tr>
          <th>User ID</th>
          <th>Name</th>
          <th>Company Name</th>
          <th>Phone Number</th>
          <th>City</th>
          <th>Year</th>
           <th>Status </th>
        </tr>
        </thead>
        <tbody>
        <!-- Display first 5 entries with images -->
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>ABC Corporation</td>
          <td>123-456-7890</td>
          <td>Delhi</td>
          <td>2024</td>
          
      <td>
          
         
         <!--<a href="#" class="event-details-button btn-icon-split22" onclick="showAllSellerDataseller1()" contenteditable="false" style="cursor: pointer;">-->
         <!--    <span class=" acrive-btnn icon" title="Active / Inactive">-->
         <!--<div class="custom-control custom-switch">-->
         <!--   <input type="checkbox" class="custom-control-input" id="customSwitch1" onchange="toggleActiveInactive(this)">-->
         <!--    <label class="custom-control-label" for="customSwitch1"></label>-->
         <!--  </div>-->
         <!-- </span>-->
         <!--</a>-->
      
         
         
            <a href="#" class="event-details-button btn-icon-split btn-icon-split22" onclick="showAllSellerDataseller1()" contenteditable="false" style="cursor: pointer;">
             <span class="icon1" title="File Meeting">
             <div class="custom-control custom-switch22 custom-switch">
            <input type="checkbox" class="custom-control-input" id="customSwitch1" onchange="toggleActiveInactive(this)">
             <label class="custom-control-label" for="customSwitch1"></label>
           </div> 
             </span>
             </a>
         
         
          <a href="<?php echo base_url();?>Meeting/Admin/Filer_meeting" class="event-details-button btn-primary btn-icon-split" onclick="showAllSellerDataseller1()" contenteditable="false" style="cursor: pointer;">
             <span class="icon" title="File Meeting">
             <i class="fas fa-handshake action-icons"></i>
             </span>
             
             </a>
          
              <a href="https://www.ttjtravmart.com/Meeting/Admin/View_profile/View_profile_seller" class="event-details-button btn-secondary btn-icon-split" onclick="showAllSellerDataseller1()" contenteditable="false" style="cursor: pointer;">
             <span class="icon" title="View">
             <i class="fas fa-eye action-icons"></i>
             </span>
             
             </a>
         
           
            <a href="<?php echo base_url();?>Meeting/Admin/seller/seller_information_update" class="event-details-button btn-warning btn-icon-split" onclick="showAllSellerDataseller1()" contenteditable="false" style="cursor: pointer;">
             <span class="icon" title="Information Update">
             <i class="fas fa-arrow-right action-icons"></i>
             </span>
             
             </a>
             
              <a href="<?php echo base_url();?>Meeting/Admin/seller/lessor" class="event-details-button btn-success btn-icon-split" onclick="showAllSellerDataseller1()" contenteditable="false" style="cursor: pointer;">
             <span class="icon" title="Ledger">
             <i class="fas fa-file action-icons"></i>
             </span>
             
             </a>
             
             <a href="#" class="event-details-button btn-danger btn-icon-split" onclick="showAllSellerDataseller1()" contenteditable="false" data-toggle="modal" data-target="#exampleModalCenter" id="#modalCenter" style="cursor: pointer;">
             <span class="icon" title="Notification">
             <i class="fas fa-bell"></i>
             </span>
             
             </a>
             
             </td>
          
        </tr>
        
        <tr>
       
        <!-- Add more rows as needed -->
        </tbody>
      </table>

     <!------------om---modoal--login---start------->
     
        <!-- Modal Center -->
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title text-center" id="exampleModalCenterTitle">Login In</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                
        <!------------modaol---body--------->            
                   <!-- Include Font Awesome CSS in the head of your HTML document -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa="
crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="modal-body">
  <form>
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter your username">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <div class="input-group">
        <input type="password" class="form-control" id="password" placeholder="Enter your password">
        <div class="input-group-append">
          <span class="input-group-text" onclick="togglePasswordVisibility()">
            <i class="far fa-eye" id="eye-icon"></i>
          </span>
        </div>
      </div>
    </div>
  </form>
</div>

<script>
function togglePasswordVisibility() {
  var passwordInput = document.getElementById("password");
  var eyeIcon = document.getElementById("eye-icon");

  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    eyeIcon.classList.remove("far", "fa-eye");
    eyeIcon.classList.add("far", "fa-eye-slash");
  } else {
    passwordInput.type = "password";
    eyeIcon.classList.remove("far", "fa-eye-slash");
    eyeIcon.classList.add("far", "fa-eye");
  }
}
</script>


<!------------modaol---body--------->   
                
                
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
     <!------------om---modoal--login---start----end--->


    </div>
  </div>
</div>

<!-- Animation Section -->
<div id="animationSection">
  <span id="closeBtn" class="action-icons" style="font-size: 30px;" onclick="closeAnimation()">×</span>
  <h4>View All Seller Data</h4>
  <table class="table" id="allSellerData">
    <!-- Dynamically populated content will go here -->
  </table>
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
        return $(this).find('td:eq(4)').text().toLowerCase() !== selectedCity;
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

<!---------back--button------om----->
<script>
    $(document).ready(function() {
        // Add click event to the button
        $('#backButton').on('click', function() {
            // Use window.history to navigate back
            window.history.back();
        });
    });
</script>

<!---------back--button------om----->


<!---------login-password---show--strt------>

<!---------login-password---show--end---->
