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
    .btn{
        font-size: 14px;
        padding: 0.225rem 0.65rem !important; 
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
    height: 545px;
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
    
    .mt-1, .my-1 {
    margin-top: 1.1rem!important;
    }
    
     @media only screen and (max-width: 600px) {
    .form-data-heading {
      font-size: 21px;
     }
     .dataTables_length {
      padding-top: 10px;
     }
     .card .table th{
        font-size: 12px !important;  
     }
     #animationSection {
     width: 100% !important;
     }
     .event-detailss img{
         width: 120px;
     }
     .text-right {
      margin-top: -11px !important;
    }
    .dataTables_filter{
        margin-top: 10px;
    }
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
         <caption class="form-data-heading  mb-4"> Up Coming Event Seller</caption>
        </div>
        <table class="table" id="dataTable" >
        <thead>
        <tr>
          <th>No.</th>
          <th>Logo</th>
          <th>Event </th>
          <th>Seller </th>
          <th>Company </th>
          <th>City</th>
          <th>Email</th>
          <th>Ph Number</th>
           <th>Status</th>
          
        </tr>
        </thead>
        <tbody>
        <!-- Display first 5 entries with images -->
<?php
$i = 1;
if (!empty($Approved_Seller)) {
    foreach ($Approved_Seller as $row) {
        // Convert event start date to DateTime for comparison
        $eventStartDate = new DateTime($row->EventStartDate);
        $currentDate = new DateTime(); // Current date

        // Check if the event date is closer to the current date
        if ($eventStartDate >= $currentDate) {
            ?>
            <tr>
                <td><?= $i ?></td>
                <td><img src="<?= base_url() ?>assets/Meeting/Seller_logo/<?= $row->Logo ?>" width="50px"></td>
                <td><?= $row->EventName?></td>
                <td><?= $row->SellerName ?></td>
                <td><?= $row->CompanyName ?></td>
                <td><?= $row->SellerEmail ?></td>
                <td><?=  $row->City ?></td>
                <td><?= $row->PhoneNumber?></td>
                <td><div class="btn btn-danger">Approved</div></td>
                
            </tr>
            
            <?php
            $i++;
        }
    }
} else {
    // Handle case where $Approved_Seller is empty or null
    echo "No data found";
}
?>


        <!-- Add more rows as needed -->
        </tbody>
      </table>

      <!------------pagination----start------->
      
     <!------------pagination----start---end--->


    </div>
  </div>
</div>
  <style>
    .main {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .main > div {
      width: 50%;
      box-sizing: border-box;
    }
     .main > div:first-child {
      text-align: left; /* Align text to the left for the first div */
    }

    .main > div:last-child {
      text-align: right; /* Align text to the right for the second div */
    }
  </style>


<!-- Animation Section -->
<div id="animationSection">
  <span id="closeBtn" class="action-icons" style="font-size: 30px;" onclick="closeAnimation()">×</span>
  <h4>Seller Registered</h4>
  <hr>
     <!----------1st----row---end---------->
     <div class="row" style="align-items:center">
          <div class="col-lg-6 col-md-6 col-sm-6 col-6">
           <label for="full_name">Logo -</label>
          </div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-6">
         <div class="event-detailss">
         <img src="https://tiimg.tistatic.com/fp/1/003/757/babylon-capital-commercial-offices-701.jpg" width="65%"> 
         </div>
         </div>
      </div>

   <div class="row">
    <div class="col-lg-7 col-md-7 col-sm-7 col-7">
        
   <ul class="lead-form-om mt-1">
  
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
 
  
  <div class="col-lg-5 col-md-5 col-sm-5 col-5">
       <ul class="lead-form-om mt-3">
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
                <a href="https://www.ttjtravmart.com/Meeting/Admin/View_profile/View_profile_seller" class="btn btn-danger mb-1 p-3">
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
