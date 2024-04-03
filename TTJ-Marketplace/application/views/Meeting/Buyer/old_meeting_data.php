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
   .Meeting-Download-btbn {
    font-size: 14px;
    margin-top: 8px;
    height: 31px;
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
        <div class="col-lg-5 col-md-5 col-sm-12">
        <div class="card-header1">
        <h4 class="form-data-heading mb-0">Old Meeting {Event Name}</h4>
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


              <div class="col-lg-3 col-md-3 col-sm-12">
               <div id="dataTable_filter" class="dataTables_filter">
               <span>Search:</span>
                <input type="search" id="dataTable_filter" class="form-control form-control-sm" placeholder="" aria-controls="dataTable">
               
              </div>
             </div>
          </div>
      <hr>
      <!------------2nd---row---------->

      
  <!-------------end----------------->
    <div class="margtoppp-data-form card">
      <div class="table-responsive card-body">
        <table class="table" id="dataTable">
        <thead>
        <tr>
            <th>ID</th>
            <th>Event Name</th>
            <th>Seller Name</th>
            <th>Company Name</th>
            <th>Day</th>
            <th>Time Slot</th>
           
        </tr>
        </thead>
        <tbody>
        <!-- Sample data, replace with your actual data -->
        <tr>
            <td>1</td>
            <td>Pune Event</td>
            <td>John Doe</td>
            <td>ABC Corporation</td>
            <td>1</td>
            <td>1:20PM to 1:30 PM</td>
          
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
      $('#allSellerData').css('opacity', '1');
    }, 100);
  }

  function populateAnimationSection(data) {
    // Clear existing rows
    $('#allSellerData').empty();

    // Populate the table with demo data
    data.forEach(entry => {
      const row = $('<tbody>');
      row.append($('<tr>').text(entry.userId));
      row.append($('<tr>').text(entry.name));
      $('#allSellerData').append(row);
    });
  }

  function closeAnimation() {
    // Hide the animation section and reset opacity
    $('#animationSection').css('right', '-100%');
    $('#allSellerData').css('opacity', '0');
  }
</script>
