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
            <th>No</th>
            <th>Event Name</th>
            <th>PLace</th>
            <th>Location</th>
            <th>Number of Meeting fixed</th>
            <th>Date</th>
            <th>View More</th>
            
        </tr>
        </thead>
        <tbody>
        <!-- Active Event Come  on that Events-->
        <tr>
            <td>1</td>
            <td>John Doe</td>
            <td>abc PVT LTD</td>
            <td>PUNA</td>
            <td>200</td>
            <td>Date</td>
             <td class="old-eventbtnnn"><a href="<?php echo base_url()?>/Meeting/Admin/Meeting_Details?id=1" class="event-details-button btn-secondary btn-icon-split" onclick="showAllSellerDataseller1()" contenteditable="false" style="cursor: pointer;">
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
<div id="animationSection">
  <span id="closeBtn" class="action-icons" style="font-size: 30px;" onclick="closeAnimation()">×</span>
  <h4>Buyer Information</h4>
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
