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
    /*background-color: rgba(255, 255, 255, 0.9);*/
    overflow-y: auto;
    z-index: 1000;
    transition: right 0.5s ease-in-out;
    padding: 20px;
    border: 1px solid black;
    background-color: #fff;
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
    .old-eventbtnnn a{
        text-decoration: none;
    }
    .card-body{
        margin-top:1px;
    }
    .form-control{
        width:100%;
        margin-bottom:10px;
        text-align:left;
    }
    .btn-icon-split{
      text-align:left !important;     
    }

  </style>
</head>
<body>

<div class="container-fluid">
    <!-------------------div-------------->
       <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="card-header1">
        <h4 class="form-data-heading mb-0"> Event View</h4>
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
          <th>No.</th>
          
          <th>Event Name</th>
          <th>Event Place</th>
          <th>Laction</th>
          <th>Year</th>
          <th>Operation</th>
        </tr>
        </thead>
        <tbody>
        <!-- Display first 5 entries with images -->
        <?php     $i ='1';
        foreach($view_Event as $row ){
            ?>
            <tr>
              <td><?= $i ?></td>
              <td><?= $row->EventName ?></td>
              <td><?= $row->EventPlace?></td>
              <td><?= $row->Location ?></td>
              <td><?= date('Y', strtotime($row->EventStartDate)) ?></td>

              <td class="old-eventbtnnn">
                <a href="<?php echo base_url();?>Meeting/Admin/Meeting_Details?id=<?php echo $row->EventID ?>" class="event-details-button btn-secondary btn-icon-split" >
                <span class="icon text-white-50">
                <i class="fas fa-info-circle"></i>
                </span>
                <span class="text">View Details</span>
                </a>
               </td>
                     
          
        </tr>
            <?php
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

<!-- Animation Section -->
<div id="animationSection">
  <span id="closeBtn" class="action-icons" style="font-size: 30px;" onclick="closeAnimation()">×</span>
  <h4>Old Event Data</h4>
   <hr>
  <div class="old-event-img">
  <img src="https://tiimg.tistatic.com/fp/1/003/757/babylon-capital-commercial-offices-701.jpg" width="100%">
  </div>
  <div class="row mt-4">
     <div class="col-md-6">
         asdf
     </div>
     <div class="col-md-6">
         asdf
     </div>
  </div>
    <div class="card-body">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-12">   
                  <a href="#" class="btn btn-primary btn-icon-split form-control">
                    <span class="icon text-white-50">
                       <i class="fas fa-check"></i>
                    </span>
                    <span class="text">No. - 1</span>
                  </a>
                  </div> 
                  
                  <div class="col-lg-12 col-md-12 col-sm-12 col-12">   
                  <a href="#" class="btn btn-success btn-icon-split form-control">
                    <span class="icon text-white-50"> 
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Event Name - Delhi</span>
                  </a>
                  </div>
                  
                 <div class="col-lg-12 col-md-12 col-sm-12 col-12">    
                 
                  <a href="#" class="btn btn-info btn-icon-split form-control">
                    <span class="icon text-white-50">
                       <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Place - Delhi</span>
                  </a>
                  </div>
                  
                  
                  <div class="col-lg-12 col-md-12 col-sm-12 col-12">   
                  <a href="#" class="btn btn-warning btn-icon-split form-control">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Venue - XYZ</span>
                  </a>
                  </div>
                  
                  
                 <div class="col-lg-12 col-md-12 col-sm-12 col-12">   
                   <a href="#" class="btn btn-danger btn-icon-split form-control">
                    <span class="icon text-white-50">
                       <i class="fas fa-check"></i>
                    </span>
                    <span class="text">City- Delhi</span>
                  </a>
                  </div>
                  
                  
                  <div class="col-lg-12 col-md-12 col-sm-12 col-12">   
                  <a href="#" class="btn btn-secondary btn-icon-split form-control">
                    <span class="icon text-white-50">
                       <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Year - 2024</span>
                  </a>
             </div>
             </div>
             
             
             

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
