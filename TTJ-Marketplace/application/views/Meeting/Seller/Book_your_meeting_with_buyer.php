
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.4/dist/css/bulma-carousel.min.css">
<!--slider-->
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- DataTables JavaScript -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.7/js/jquery.dataTables.js"></script>

<style>
  .carousel {
    overflow: hidden;
  }

  .m-padding a {
    margin: 5px;
    background: #ccc;
    display: block;
    border-radius: 5px;
    overflow: hidden;
  }

  .card-content,
  .card-content .title,
  .card-content .subtitle {
    background-color: #3f3f3f;
    color: #ccc;
  }

  .slider-navigation-previous {
    left: 10px;
  }

  .slider-navigation-next {
    right: 10px;
  }
  #wrapper #content-wrapper {
    background-color: transparent;
    /* width: 100%; */
    overflow-x: hidden;
   
}

</style>

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


  table,
  th,
  td {
    border: 1px solid #dee2e6;
  }


  th,
  td {
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

  table th,
  table td {
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



  .element.style {
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
    max-height: 600px;
    /* Set a fixed height for the content */
    /* overflow-y: auto; */
    /* Remove this line to disable scrollbar */
  }

  .active-status {
    background-color: #28a745;
    /* Green color for Active */
    color: #fff;
    /* White text for better contrast */
  }


  .inactive-status {
    background-color: #dc3545;
    /* Red color for Inactive */
    color: #fff;
    /* White text for better contrast */
  }


  .margtoppp-data-form {
    margin-top: 11px;
  }


  .form-data-heading {
    line-height: 53px;
  }
</style>
<style>
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

  /* Adjusting carousel height */
  #imageContainer {
    height: 300px;
    /* Adjust this as needed */
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


  .carousel-control-next,
  .carousel-control-prev {
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


  .know-more-btn {
    padding: 2px 15px 2px 15px;
    background-color: #ed1e26;
    color: #fff;
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
    border: 1px solid black;
    /* Change the color of the border */
  }

  .form-data-heading {
    line-height: 53px;
  }

  .event-details-button {
    font-size: 13px;
    height: 30px;
    line-height: 17px;
  }

  .view-details-btnn a {
    text-decoration: none;
  }

  .view-details-btnn a {
    text-decoration: none;
  }

  .old-eventbtnnn i {
    color: #fff;
  }

  .lead-form-om {
    margin: 3px;
    padding: 0px;
    /*color: transparent;*/
    /*text-shadow: 0 0 5px rgba(0,0,0,0.5); */
  }

  .lead-form-om li {
    list-style: none;
    padding-top: 6px;
    font-size: 15px;
  }

  .om-lead-formselect {
    padding: 5px;
    background-color: #040404;
    height: 42px;
    color: #fff;
  }
  
  .booked_time_slot{
      background-color:#117111bd;
      color:white;
  }
  .text-body-center{
      
  }
</style>


<?php if($Map_or_not == 1) : ?>
 <div class="container-fluid">
   <!-- Start Carousel -->
   <h4 class="my-2"> Fixed Your  Meeting <?= $Buyer->EventName ?> </h4>
    <div id="trend-slide" class="carousel">
     
      <?php $i='1'; foreach($Buyer_get  as $row):?> <!-- Buyer Data -->
        <?php foreach($Buyer_map_Event as $map_Event ):?> <!--map Buyer-->
        <?php if($map_Event->Buyer_ID == $row->id AND  $Buyer->EventID == $map_Event->Evet_ID ):?>
        <div class="item-<?= $i ?> m-padding  position-relative">
          <div class="book-buyer-logo  position-relative ">
            <img src="<?php echo base_url();?>assets/Meeting/Buyer_logo/<?php echo $row->logo?>" alt="Random Logo">
            <div class="content">
              <p><i class="fas fa-building"></i> <?= $row->your_company_name ?> </p>
              <p> <?php echo str_replace(array('/', "\t"), '', implode(', ', explode(',', $row->city))) ?></p>

            </div>
          </div>
            <button class="overlay-button customButton" onclick="customButtonClick(this, '<?= $row->id ?>', '<?= $this->session->userdata('user_id') ?>', '<?= $Buyer->EventID ?>','<?= $row->your_company_name?>')">Button</button>
         </div>
        <?php endif;?>
        <?php endforeach;?>
        <?php $i++; endforeach; ?>
      

      <!-- Add more items as needed -->

    </div>
     </div>
    <!-- End Carousel -->






<!-- Bootstrap JS and jQuery -->


<!------------2nd---row---------->

<!-------------end----------------->
<div class="margtoppp-data-form card">
          <h4 class="form-data-heading mb-0 px-3">Your Meeting</h4>
  <div class="table-responsive card-body">
    <table class="table" id="dataTable">
      <thead>
        <tr>
          <th>User ID</th>
          <th>Logo</th>
          <th>Name</th>
          <th>Company Name</th>
          <th>Time Slots</th>
          <th>Date</th>
          

        </tr>
      </thead>
      <tbody>
            <?php $i = '1'; foreach ($Meeting_fixed as $row_Map): ?>
                <?php foreach ($Buyer_get as $row_Buyer): ?>
                        <?php if ($row_Map->SellerID == $this->session->userdata('user_id')  AND $row_Map->BuyerID == $row_Buyer->id): ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td><img src="<?php echo base_url();?>assets/Meeting/Buyer_logo/<?php echo $row_Buyer->logo?>" alt="Random Logo" width="50px"></td>
                                <td><?= $row_Buyer->name?></td>
                                <td><?= $row_Buyer->your_company_name?></td>
                                <td><?= $row_Map->Time_Slot?></td>
                                <td><?= $row_Map->Date?></td>
                                
                            </tr>
                            <?php $i++; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
            <?php endforeach; ?>

      </tbody>
    </table>
<?php else:?>
<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
    <div class="text-body-center">
        <h1 class="mx-4">Fist Booking Your Event</h1>
        <h4> After approval fixed Your Meeting and Enjoy</h4>
        <div class="text-center">
            <a href="<?php echo base_url()?>Meeting/Selleruser/bookmeeting/pre_booking_Event_seller" class="btn btn-danger">Book Know</a>
        </div>
    </div>
</div>

<?php endif;?>
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


</script>

<script>
    jQuery(document).ready(function ($) {
   $('#dataTable').DataTable();
    });
    </script>