 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

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
          font-size: 10px !important;
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
</head>
<body>

<div class="container-fluid">
    <!-------------------div-------------->
     



  <!-------------end----------------->
    <div class="margtoppp-data-form card">
        
      <div class="table-responsive card-body">
             <h4 class="form-data-heading mb-0">Buyer Event Request</h4>
        <table class="table" id="dataTable">
        <thead>
        <tr>
          <th>No.</th>
          <th>Logo</th>
          <th>Company</th>
          <th>Designation</th>
          <th>Phone.no</th>
          <th>City</th>
          <th>Category</th>
          <th>Year</th>
          <th>Event</th>
          <th>Opration</th>
        </tr>
        </thead>
        <tbody>
        <!-- Display first 5 entries with images -->
     <?php $i='1'; foreach ($Event as $row): ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><img src="<?=base_url() ?>/assets/Meeting/Buyer_logo/<?php echo $row->logo; ?>" width="100px"></td>
        <td><?php echo $row->your_company_name; ?></td>
        <td><?php echo $row->designation; ?></td>
        <td><?php echo $row->mobile_number; ?></td>
        <td><?php echo $row->city; ?></td>
        <td><?php echo $row->business_category; ?></td>
        <td><?php echo $row->Created_by; ?></td>
        <td><?php echo $row->EventName?></td>
        <td class="view-details-btnn">
            <a href="#" onclick="showSellerData('<?php echo base64_encode(json_encode($row)); ?>');" data-toggle="modal" data-target="#detailsModal" class="event-details-button btn-secondary btn-icon-split" title="View">
                <span class="icon">
                    <i class="fas fa-info-circle"></i>
                </span>
            </a>

            <!--<a href="<?php echo base_url();?>/Meeting/Admin/Buyer/update_buyer_data/<?php echo $row->Buyer_ID; ?>" class="event-details-button btn-warning btn-icon-split" title="Update">-->
            <!--    <span class="icon">-->
            <!--        <i class="fas fa-exclamation-triangle"></i>-->
            <!--    </span>-->
            <!--</a>-->




            <a href="#" class=" approve-entry event-details-button btn-success btn-icon-split" data-buyer-id="<?= $row->id ?>" id="<?= $row->Evet_ID ?>" title="Delete">
                <span class="icon">
                    <i class="fas fa-check"></i>
                </span>
            </a>
            
           <a href="#" class="delete-entry event-details-button btn-danger btn-icon-split" data-buyer-id="<?= $row->id ?>" id="<?= $row->Evet_ID ?>" title="Delete">
                <span class="icon">
                    <i class="fas fa-trash"></i>
                </span>
            </a>


        </td>
    </tr>
<?php $i++; endforeach; ?>


        <!-- Add more rows as needed -->
        </tbody>
      </table>

      <!------------pagination----start------->
     <!------------pagination----start---end--->


    </div>
  </div>
</div>

<!-- Modal structure -->
<div class="modal fade" id="detailsModal" tabindex="-1" role="dialog" aria-labelledby="detailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailsModalLabel">Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Event Details</h4>
                        <p id="eventDetails"></p>
                    </div>
                    <div class="col-md-6">
                        <h4>Buyer Details</h4>
                        <p id="buyerDetails"></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    function showSellerData(encodedData) {
        // Decode the data
        var decodedData = JSON.parse(atob(encodedData));
        var excludedProperties = ['EventID', 'EventName', 'EventPlace', 'EventStartDate', 'EventEndDate', 'Location', 'EventImage', 'Phone_Number', 'Email', 'Description', 'Status', 'table_name', 'Map_ID', 'Evet_ID', 'Buyer_ID', 'id', 'Created_by'];
        var buyerDetailsHTML = '<div class="row">';
        
        for (var key in decodedData) {
            if (decodedData.hasOwnProperty(key) && !excludedProperties.includes(key)) {
                var value = decodedData[key];
                var formattedValue = key.includes('logo') && (value.toLowerCase().endsWith('.jpg') || value.toLowerCase().endsWith('.jpeg') || value.toLowerCase().endsWith('.png') || value.toLowerCase().endsWith('.gif'))
                    ? '<img src="<?php echo base_url()?>/assets/Meeting/Buyer_logo/' + value.replace(/\s/g, '%20') + '" width="100px">'
                    : value;

                buyerDetailsHTML += '<div class="col-md-12"><div class="row" style="align-items: center;padding: 16px 0px;"><div class="col-md-6 text-left">' + key.replace(/_/g, ' ') + '</div><div class="col-md-6 text-right">' + formattedValue + '</div></div></div>';
            }
        }

        buyerDetailsHTML += '</div>';  // Concatenate the closing div to the existing content

        document.getElementById('buyerDetails').innerHTML = buyerDetailsHTML;

        var excludedRemove = ['id', 'logo', 'name', 'designation', 'your_company_name', 'nature_of_business', 'business_category', 'company_address', 'annual_turnover', 'year_commencement', 'destinations', 'trade_associations', 'city', 'pin_code', 'email', 'mobile_number', 'table_name', 'created_at', 'Map_ID', 'Evet_ID', 'Buyer_ID','Created_by',`EventID`,`Phone_Number`,`Email`,`Description`,`Status`,`EventImage`];

        var eventDetailsHTML = '<div class="row">';
        
        for (var key in decodedData) {
            if (decodedData.hasOwnProperty(key) && !excludedRemove.includes(key)) {
                var value = decodedData[key];
                var formattedValue = key.includes('EventImage') && (value.toLowerCase().endsWith('.jpg') || value.toLowerCase().endsWith('.jpeg') || value.toLowerCase().endsWith('.png') || value.toLowerCase().endsWith('.gif'))
                    ? '<img src="<?php echo base_url()?>/assets/Meeting/Event_image/' + value.replace(/\s/g, '%20') + '" width="100px">'
                    : value;

                eventDetailsHTML += '<div class="col-md-12"><div class="row" style="align-items: center;padding: 16px 0px;"><div class="col-md-6 text-left">' + key.replace(/_/g, ' ') + '</div><div class="col-md-6 text-right">' + formattedValue + '</div></div></div>';
            }
        }

        eventDetailsHTML += '</div>';  // Concatenate the closing div to the existing content
        document.getElementById('eventDetails').innerHTML = eventDetailsHTML;

        // Show the modal
        $('#detailsModal').modal('show');
    }
</script>
<script>
    $(document).ready(function () {
        $(".delete-entry").click(function (e) {
            e.preventDefault();

          var buyerId = $(this).data('buyer-id');
           var Eventid = $(this).attr('id'); // Use 'Event-id' (consistent with HTML)

$.ajax({
    type: 'POST',
    url: '<?php echo base_url();?>/Meeting/Staffmarkating/Buyer/delete_buyer_data',
    data: { Buyer_ID: buyerId, Event_ID: Eventid }, // Use 'Event_ID' (consistent with HTML)
    success: function (response) {
        Swal.fire({
            title: 'Success!',
            text: 'Entry deleted successfully',
            icon: 'success',
            confirmButtonText: 'OK'
        }).then(function() {
            // Reload the page
            location.reload();
        });
    },
    error: function (error) {
        // Handle error response
        console.log(error.responseText);

        // You can display an error message or handle the error in another way
    }
});

        });
    });
</script>
<script>
$(document).ready(function () {
    $(".approve-entry").click(function (e) {
        e.preventDefault();

        var buyerId = $(this).data('buyer-id');
        var eventId = $(this).attr('id');

        // Make AJAX request to approve registration
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url();?>/Meeting/Staffmarkating/Buyer/approve_registration',
            data: { Buyer_ID: buyerId, Event_ID: eventId },
            success: function (response) {
                Swal.fire({
                    title: 'Success!',
                    text: 'Registration approved successfully',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then(function () {
                    // Reload the page or perform any other necessary actions
                    location.reload();
                });
            },
            error: function (error) {
                // Handle error response
                console.log(error.responseText);
                // Display an error message or handle the error in another way
            }
        });
    });
});

</script>


<script>
    jQuery(document).ready(function ($) {
   $('#dataTable').DataTable();
});
</script>
