<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- DataTables JavaScript -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.7/js/jquery.dataTables.js"></script>


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
  
  .lead-form-om{
       margin: 3px;
       padding: 0px;
       /*color: transparent;*/
       /*text-shadow: 0 0 5px rgba(0,0,0,0.5); */
    }
    .view-details-btnn a{
      text-decoration: none;
    }
    .old-eventbtnnn i{
        color: #fff;
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



<!------------2nd---row---------->

<!-------------end----------------->
<div class="margtoppp-data-form card">
    
    <div class="container-fluid">
  <!-------------------div-------------->
  <div class="row  mt-3">
    <div class="col-lg-6 col-md-5 col-sm-12">
      <div class="card-header1">
        <caption class="form-data-heading "><?= $Buyer->EventName?></caption>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 text-right ">
        <div class="card-header1">
             <button type="button" class="Meeting-Download-btbn btn btn-success"><i class="download-iconn fas fa-download action-icons" title="Download"></i> Meeting Download</button>
        </div>
    </div> 
  </div>
</div>


  <div class="table-responsive card-body">
    <table class="table" id="dataTable">
      <thead>
        <tr>
          <th>SO.no</th>
          <th>Logo</th>
          <th>Name</th>
          <th>Company Name</th>
          <th>Time Slots</th>
          <th>Day</th>
          <th>View More</th>

        </tr>
      </thead>
      <tbody>
            <?php $i = '1'; foreach ($Meeting_fixed as $row_Map): ?>
                <?php foreach ($Buyer_get as $row_Buyer): ?>
                        <?php if ($row_Map->SellerID == $this->session->userdata('user_id')  AND $row_Map->BuyerID == $row_Buyer->id): ?>
                            <tr>
                                <td><?= $i ?></td>
                                <!--<?php echo base_url();?>assets/Meeting/Buyer_logo/-->
                                <td><img src="<?php echo $row_Buyer->logo?>" alt="Random Logo" width="50px"></td>
                                <td><?= $row_Buyer->name?></td>
                                <td><?= $row_Buyer->your_company_name?></td>
                                <td  class="time-slot-value"><?= $row_Map->Time_Slot?></td>
                                <td><?= $row_Map->Date?></td>
                                <td> 
                            
                                        
                                         <a href="#" onclick="customButtonClick(this,'<?= $row_Buyer->id ?>','<?= $this->session->userdata('user_id')?>','<?= $row_Map->EventID ?>','<?= $row_Buyer->your_company_name?>')" class="event-details-button btn-success btn-icon-split" title="View" contenteditable="false" style="cursor: pointer;">
                                         <span class="icon">
                                           <i class="fas fa-sync-alt"></i>
                                         </span>
                                        </a>
                                </td>
                              
                            </tr>
                            <?php $i++; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
            <?php endforeach; ?>

      </tbody>
    </table>


    <!------------popup----start--------->
    <!-- Your modal -->


    <!------------popup----start--------->
    <!-- Your modal -->
<div class="modal fade bookingModal" id="allTimeSlotsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="max-width: 820px;">
    <div class="modal-content">
      <!-- Modal content goes here -->
      <div class="modal-header">
          <div class="container-fluid">
              <div class="row">
              <div class="col-md-6">
                   <h5 class="modal-title" id="exampleModalLabel"></h5>
              </div>
              <div class="col-md-6 Event_duration">
                  
              </div>
          </div>
          </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" >X</button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
            <div class="row appande_col">
              
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- Additional buttons or actions go here -->
      </div>
    </div>
  </div>
</div>


     


  </div>
</div>
</div>
<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script src="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.4/dist/js/bulma-carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/file-saver@2.0.5/dist/FileSaver.min.js"></script>




<script>
  bulmaCarousel.attach('#trend-slide', {
    slidesToScroll: 2,
    slidesToShow: 4,
    pagination: false,
    loop: true,
    autoplay: true,
    autoplaySpeed: 5000,
  });
</script>
<script>
$(document).ready(function(){
  // This code runs when the document (web page) is fully loaded

  // Bind a click event to elements with the class 'btn-close'
  $('.btn-close').click(function(){
    // When a 'btn-close' element is clicked, reload the page
   
  });
  
   $(document).on('change', '.select_value', function () {
        var buyerid = $(this).data('buyerid');
        var sellerid = $(this).data('sellerid');
        var eventid = $(this).data('eventid');

        console.log(buyerid, sellerid, eventid);
    });
    
    
});

function customButtonClick(Element, BuyerID, SellerID, EventID, Name) {
    $.ajax({
        url: '<?php echo base_url();?>/Meeting/Selleruser/Bookmeeting/Chack_the_meetting_slot',
        type: 'post',
        data: { BuyerID: BuyerID, SellerID: SellerID, EventID: EventID, Date: $('.select_value').val() },
        dataType: 'json',
        success: function(response) {
            $('.Event_duration').empty();
            $('.modal-title').empty();
            var value = $('select').val('value');
            var Select = '<select class="form-control select_value" style="color:black" name="value" data-buyerid="' + BuyerID + '" data-sellerid="' + SellerID + '" data-eventid="' + EventID + '">';
            Select += '<option value="Select Your Meeting Date">Select Your Meeting Date</option>';
            
            // Format start date
            var startDate = new Date(response.Event_Duration[0].EventStartDate);
            var formattedStartDate = startDate.toISOString().split('T')[0]; // Convert to yyyy-mm-dd format

            // Format end date
            var endDate = new Date(response.Event_Duration[0].EventEndDate);
            var formattedEndDate = endDate.toISOString().split('T')[0]; // Convert to yyyy-mm-dd format

            // Calculate and append middle dates
            var currentDate = new Date(response.Event_Duration[0].EventStartDate);
            while (currentDate < endDate) {
                var formattedCurrentDate = currentDate.toISOString().split('T')[0]; // Convert to yyyy-mm-dd format
                Select += '<option value="' + formattedCurrentDate + '">' + formattedCurrentDate + '</option>';
                currentDate.setDate(currentDate.getDate() + 1);
            }

            Select += '<option value="' + formattedEndDate + '">' + formattedEndDate + '</option>';
            Select += '</select>';
            $('#exampleModalLabel').append(Name);

            $('.Event_duration').append(Select);

            // Assign the select element reference to the variable
            selectElement = $('.Event_duration .select_value');

            // Use the variable to get the value
            var value_give = selectElement.val();

            if(value_give == 'Select Your Meeting Date'){
                $('#allTimeSlotsModal .modal-body .appande_col').empty();
                $('#allTimeSlotsModal .modal-body .appande_col').append('<div class="text-center"><h4>Select The Date to Fix the Meeting</h4>');
            }

            // Show the modal
            $('#allTimeSlotsModal').modal('show');
        },

        error: function(xhr, status, error) {
            console.error('AJAX request failed:', status, error);
        }
    });
}
$(document).on('change', '.select_value', function() {
    var date = $(this).val();
    var SellerID = $(this).data('sellerid');
    var BuyerID = $(this).data('buyerid');
    var EventID = $(this).data('eventid');

    if (date == 'Select Your Meeting Date') {
        $('#allTimeSlotsModal .modal-body .appande_col').empty();
        $('#allTimeSlotsModal .modal-body .appande_col').append('<div class="text-center"><h4>Select The Date to Fix The Meeting</h4>');
    } else {
        $.ajax({
            url: '<?php echo base_url();?>/Meeting/Selleruser/Bookmeeting/Chack_the_meetting_slot',
            type: 'post',
            data: { BuyerID: BuyerID, SellerID: SellerID, EventID: EventID, date: date },
            dataType: 'json',
            success: function(response) {
                $('#allTimeSlotsModal .modal-body .appande_col').empty();
                var array = [];
                var already_book = response.get_all_seller_Book_slot;
                var Time_Slot = response.all_time_slots;
               
                Time_Slot.forEach(function(entry) {
                    var Get_Same_seller_same_Buyer = already_book.find(function(bookedEntry) {
                        return bookedEntry.Time_Slot === entry.Time_Slot && date == bookedEntry.Date &&  bookedEntry.SellerID == SellerID &&  bookedEntry.BuyerID ==  BuyerID ;
                    });
                    
                    var Get_Same_seller_Diff_Buyer = already_book.find(function(bookedEntry) {
                        return bookedEntry.Time_Slot === entry.Time_Slot && date == bookedEntry.Date &&  bookedEntry.SellerID == SellerID &&  bookedEntry.BuyerID !=  BuyerID ;
                    });
                    
                    var Get_Diff_seller_Diff_Buyer = already_book.find(function(bookedEntry) {
                        return bookedEntry.Time_Slot === entry.Time_Slot && date == bookedEntry.Date &&  bookedEntry.SellerID != SellerID &&  bookedEntry.BuyerID ==  BuyerID ;
                    });
                     
                     if(Get_Diff_seller_Diff_Buyer){
                         array.push('<div class="col-md-3"><div class="time-slot  bg-secondary text-white" style="cursor: pointer;border: 1px solid black;text-align: center;border-radius: 26px;font-size:10px;margin-bottom:10px;padding:10px"> Another Seller Booked</div></div>');
                    }
                    else if(Get_Same_seller_Diff_Buyer){
                         array.push('<div class="col-md-3"><div class="time-slot  bg-primary text-white" style="cursor: pointer;border: 1px solid black;text-align: center;border-radius: 26px;font-size:10px;margin-bottom:10px;padding:10px"> You booked with another buyer.</div></div>');
                    }
                    else if (Get_Same_seller_same_Buyer) {
                        array.push('<div class="col-md-3"><div class="time-slot text-white" style="background:green;cursor: pointer;border: 1px solid black;text-align: center;border-radius: 26px;font-size:10px;margin-bottom:10px;padding:10px">' + entry.Time_Slot + '</div></div>');
                    } else {
                        array.push('<div class="col-md-3"><div class="time-slot" onclick="book_your_slot(this, ' + BuyerID + ', ' + SellerID + ', ' + EventID + ', \'' + entry.Time_Slot + '\')" style="cursor: pointer;border: 1px solid black;text-align: center;border-radius: 26px;font-size:10px;margin-bottom:10px;padding:10px">' + entry.Time_Slot + '</div></div>');
                    }
                });

                $('#allTimeSlotsModal .modal-body .appande_col').append(array.join(''));
            },
            error: function(xhr, status, error) {
                console.error('AJAX request failed:', status, error);
            }
        });
    }
});


function book_your_slot(Element, BuyerID, SellerID, EventID, Time_Slot) {
    $.ajax({
        url: '<?php echo base_url();?>Meeting/Selleruser/Bookmeeting/Book_your_seller_meeting',
        type: 'post',
        data: { BuyerID: BuyerID, SellerID: SellerID, EventID: EventID, Time_Slot: Time_Slot, date: $('.select_value').val() },
        dataType: 'json',
        success: function (response) {
            if (response == 1) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Thank You',
                }).then(function () {
                    // Optionally, you can perform some actions here after the user clicks "OK"
                    // For example, hide the modal
                    $('#allTimeSlotsModal').modal('hide');
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Meeting Already Fixed',
                    text: 'You Can\'t fix the meeting with the same Buyer',
                }).then(function () {
                    // Optionally, you can perform some actions here after the user clicks "OK"
                    // For example, hide the modal
                    $('#allTimeSlotsModal').modal('hide');
                });
            }
        },
        error: function (error) {
            Swal.fire({
                icon: 'error',
                title: 'Meeting Already Fixed',
                text: 'You Can\'t fix the meeting with the same Buyer',
            }).then(function () {
                // Optionally, you can perform some actions here after the user clicks "OK"
                // For example, hide the modal
                $('#allTimeSlotsModal').modal('hide');
            });
        }
    });
}


function book_your_slot(Element, BuyerID, SellerID, EventID, Time_Slot) {
    $.ajax({
        url: '<?php echo base_url();?>Meeting/Selleruser/Bookmeeting/Update_Meeting_seller',
        type: 'post',
        data: { BuyerID: BuyerID, SellerID: SellerID, EventID: EventID, Time_Slot: Time_Slot, date: $('.select_value').val() },
        dataType: 'json',
        success: function (response) {
            if (response == 1) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: ' Slot Updated',
                }).then(function () {
                    // Optionally, you can perform some actions here after the user clicks "OK"
                    // For example, hide the modal
                    $('#allTimeSlotsModal').modal('hide');
                       location.reload();
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Meeting Already Fixed',
                    text: 'You Can\'t fix the meeting with the same Buyer',
                }).then(function () {
                    // Optionally, you can perform some actions here after the user clicks "OK"
                    // For example, hide the modal
                    $('#allTimeSlotsModal').modal('hide');
                });
            }
        },
        error: function (error) {
            Swal.fire({
                icon: 'error',
                title: 'Meeting Already Fixed',
                text: 'You Can\'t fix the meeting with the same Buyer',
            }).then(function () {
                // Optionally, you can perform some actions here after the user clicks "OK"
                // For example, hide the modal
                $('#allTimeSlotsModal').modal('hide');
            });
        }
    });
}


</script>

<script>
    $(document).ready(function() {
        $('.Meeting-Download-btbn').click(function() {
            downloadTable();
        });

        function downloadTable() {
            var table = document.getElementById('dataTable');
            var csvContent = [];

            // Get header row
            var headerRow = [];
            for (var i = 0; i < table.rows[0].cells.length; i++) {
                // Skip columns with specific headers
                if (table.rows[0].cells[i].innerText !== 'Logo' && table.rows[0].cells[i].innerText !== 'View More') {
                    headerRow.push(table.rows[0].cells[i].innerText);
                }
            }
            csvContent.push(headerRow.join(','));

            // Get data rows
            for (var i = 1; i < table.rows.length; i++) {
                var dataRow = [];
                for (var j = 0; j < table.rows[i].cells.length; j++) {
                    // Skip columns with specific headers
                    if (table.rows[0].cells[j].innerText !== 'Logo' && table.rows[0].cells[j].innerText !== 'View More') {
                        dataRow.push(table.rows[i].cells[j].innerText);
                    }
                }
                csvContent.push(dataRow.join(','));
            }

            // Create Blob and download
            var csvBlob = new Blob([csvContent.join('\n')], { type: 'text/csv;charset=utf-8' });
            saveAs(csvBlob, 'meeting_data.csv');
        }
    });
</script>
<script>
    jQuery(document).ready(function ($) {
   $('#dataTable').DataTable();
    });
    </script>