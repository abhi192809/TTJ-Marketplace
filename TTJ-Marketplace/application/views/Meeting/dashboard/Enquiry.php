
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- DataTables JavaScript -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.7/js/jquery.dataTables.js"></script>


<style>
    table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 9px;
  }

  th,
  td {
    padding: 10px;
    text-align: left;
  }

  th {
    background-color:#de1313;
    color: #fff;
  }
  table.dataTable tbody tr {
    background-color: #ffffff;
    color: black;
        font-size: 14px;
}

  table th,
  table td {
    text-align: center;
  }

    .actions {
      display: flex;
      justify-content: space-between;
    }
    table th, table td {
    text-align: center;
  }
  .dataTables_wrapper .dataTables_length select {
    border: 1px solid #aaa;
    border-radius: 3px;
    padding: 3px;
    background-color: transparent;
    padding: 2px 15px 2px 15px;
}

.dataTables_wrapper .dataTables_filter input {
    border: 1px solid #aaa;
    border-radius: 3px;
    padding: 3px;
    background-color: transparent;
    margin-left: 3px;
}
.dataTables_wrapper .dataTables_paginate .paginate_button {
    padding: 0.2em 0.5em;
}

.margintopp{
     margin-bottom: 10px;
     font-size: 20px;
}

.table.dataTable thead th, table.dataTable thead td{
    border: none;
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
  .event-details-button {
    font-size: 13px;
    height: 30px;
    line-height: 17px;
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

  </style>
</head>
<body>

<div class="container-fluid">
    <!-------------------div-------------->
     
  <!-------------end----------------->
 <div class="margtoppp-data-form card">
    <div class="table-responsive card-body">
         <div class="margintopp"> 
         <caption class="form-data-heading  mb-4"> Enquiry </caption>
        </div>

       <table class="table " id="dataTable">
    <thead class="thead-danger">
      <tr>
        <th>LeadID</th>
        <th>Buyer Name</th>
        <th>Date</th>
        <th>Departure Date</th>
        <th>Destination</th>
        <th>Number of Pax</th>
        <th>Status</th>
        <th>View</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Ram</td>
        <td>2024-03-13</td>
        <td>2024-04-01</td>
        <td>Paris</td>
        <td>2 Adults</td>
            <td>
         <select class="form-control">
             <option> Open  </option>
             <option> Approved </option>
             <option>  Declined</option>
         </select>
         <td onclick="showAllSellerData()"> 
                <a  class="event-details-button btn-secondary btn-icon-split " contenteditable="false" style="cursor: pointer;">
                  <span class="icon" title="View">
                    <i class="fas fa-eye action-icons text-white"></i>
                  </span>
                </a>
         </td>
        </td>
      </tr>
     
      <tr>
        <td>2</td>
        <td>Ram</td>
        <td>2024-03-13</td>
        <td>2024-04-01</td>
        <td>London</td>
        <td>2 Adults</td>
        <td>
         <select class="form-control">
             <option> Open  </option>
             <option> Approved </option>
             <option>  Declined</option>
         </select>
        </td>
        <td onclick="showAllSellerData()"> 
                <a  class="event-details-button btn-secondary btn-icon-split " contenteditable="false" style="cursor: pointer;">
                  <span class="icon" title="View">
                    <i class="fas fa-eye action-icons text-white"></i>
                  </span>
                </a>
         </td>
      </tr>
     
    </tbody>
  </table>

        <!-- Pagination (if any) -->
        <!------------pagination----start------->
        <!------------pagination----start---end--->

    </div>
</div>
</div>


<!-- Animation Section -->
<div id="animationSection">
  <span id="closeBtn" class="action-icons" style="font-size: 30px;" onclick="closeAnimation()">×</span>
  <h4>Lead</h4>
  <hr>
   
     <!----------1st----row---end---------->
     
  <div class="row" style="font-size:12px">
    <div class="col-lg-7 col-md-7 col-sm-7 col-12">
   <ul class="lead-form-om">
    <li>
      <label for="full_name">Full Name -</label>
    </li>
    <li>
      <label for="email">Email Address -</label>
    </li>
    <li>
      <label for="contact_number">Contact Number -</label>
    </li>
    <li>
      <label for="trip_category">Trip Category -</label>
    </li>
    <li>
      <label for="departure_country">Departure Country -</label>
    </li>
    <li>
      <label for="departure_city">Departure City -</label>
    </li>
    <li>
      <label for="arrival_country">Arrival Country -</label>
    </li>
    <li>
      <label for="arrival_city">Arrival City -</label>
    </li>
    <li>
      <label for="departure_date">Departure Date -</label>
    </li>
    <li>
      <label for="number_of_nights">No. of Nights -</label>
    </li>
    <li>
      <label for="number_of_adults">No. of Adults -</label>
    </li>
    <li>
      <label for="number_of_minors">No. of Minors -</label>
    </li>
    <li>
      <label for="enquiry">Your Enquiry -</label>
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
    <li>
      <label for="departure_date">12/03/2024</label>
    </li>
    <li>
      <label for="number_of_nights">6</label>
    </li>
    <li>
      <label for="number_of_adults">4</label>
    </li>
    <li>
      <label for="number_of_minors">2</label>
    </li>
    <li>
      <label for="enquiry">Tour Package</label>
    </li>
  </ul>
  </div>
  </div>
  <hr>
  
  <!--------------new---row---add---------->
 
   
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
  function showAllSellerData() {
    // Replace the placeholder with your actual demo data
   
    // Populate the animation section with demo data
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


<script>
    jQuery(document).ready(function ($) {
   $('#dataTable').DataTable();
    });
    </script>
<!-- Add these scripts after your existing scripts -->

<script>
  $(document).ready(function () {
    const table = $('#dataTable').DataTable({
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

    // Add event listener for city filter
    $('#cityFilter').change(function () {
      filterTable();
    });

    // Add event listener for date filter
    $('#dateFilter').on('change', function () {
      filterTable();
    });

    // Add event listener for general search
    $('#generalSearch').on('input', function () {
      filterTable();
    });

    function filterTable() {
      const selectedCity = $('#cityFilter').val().toLowerCase();
      const selectedDate = $('#dateFilter').val();
      const searchTerm = $('#generalSearch').val().toLowerCase();

      // Show all rows before applying filters
      table.rows().nodes().to$().show();

      // Filter based on the selected city
      if (selectedCity !== 'all') {
        table.rows().nodes().to$().filter(function () {
          return $(this).find('td:eq(5)').text().toLowerCase() !== selectedCity;
        }).hide();
      }

      // Filter based on the selected date
      if (selectedDate !== '') {
        table.rows().nodes().to$().filter(function () {
          return $(this).find('td:eq(9)').text() !== selectedDate;
        }).hide();
      }

      // Filter based on the general search term
      if (searchTerm.length > 0) {
        table.rows().nodes().to$().filter(function () {
          return !$(this).text().toLowerCase().includes(searchTerm);
        }).hide();
      }
    }
  });
</script>
