<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Add other necessary stylesheets and scripts here -->
</head>
<body>
<?php $this->load->library('session'); ?>

<div class="text-center">
<small class="mx-2">Sellers are encouraged to register for the event. Please await activation as we process your registration during the event registration period. Thank you for your patience and participation!</small>
</div>
<div class=" mt-4 mx-2">
    <h3>Register For the Event</h3>
</div>
<div class="container-fluid mt-4">
    <div class="row">
        <?php if(!empty($Register_For_The_Event)){?>
        <?php foreach ($Register_For_The_Event as $row): ?>
          <?php if (date('Y', strtotime($row->EventStartDate)) == date('Y')): ?>
       
            <div class="col-md-6 border p-2">
                <div class="row">
                    <div class="col-md-4">
                             <img src="<?php echo base_url()?>/assets/Meeting/Event_image/<?= $row->EventImage ?>" alt="Demo Image 1" width="170px" class="m-0 p-0 image-popup" data-event-id="<?= $row->EventID ?>">
                     </div>
                    <div class="col-md-8">
                        <div class="row m-1 my-2">
                            <div class="col-md-12">
                                <h6 class="text-danger"><?= $row->EventPlace ?></h6>
                            </div>
                            <div class="col-md-6">
                                <small>Event Start: <?= $row->EventStartDate ?></small>
                            </div>
                            <div class="col-md-6">
                                <small>Event End: <?= $row->EventEndDate ?></small>
                            </div>
                            <div class="col-md-6">
                                <small>Location: <?= $row->Location ?></small>
                            </div>
                            <?php if ($isEventRequested($row->EventID)): ?>
                                <!-- Data exists in Marketplace_Events_request table -->
                                <div class="col-md-12 text-right mt-2">
                                    <input class="btn btn-danger w-100" style="font-size: 12px;cursor: pointer;" value="Processing Your Request" readonly>
                                </div>
                            <?php else: ?>
                                <!-- Data doesn't exist in Marketplace_Events_request table -->
                                <div class="col-md-12 text-right mt-2">
                                    <input class="btn btn-danger w-100" style="font-size: 12px;cursor: pointer;" value="Register Now" onclick="registerevent('<?= $row->EventID ?>','<?= $this->session->userdata('user_id'); ?>')">
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; endforeach; } ?>
    </div>
</div>

<div class=" mt-4 mx-2">
    <h3>Event Approved</h3>
</div>
<div class="container-fluid mt-4">
    <div class="row">
        <?php if (is_iterable($Aproved_Event) && count($Aproved_Event) > 0): ?>
    <?php foreach ($Aproved_Event as $row): ?>
        <?php
            // Compare event end date with the current date
            $currentDate = date('Y-m-d');
            if ($row->EventStartDate >= $currentDate):
                
        ?>
            <div class="col-md-6 border p-2">
                <div class="row">
                    <div class="col-md-4">
                           <img src="<?php echo base_url()?>/assets/Meeting/Event_image/<?= $row->EventImage ?>" alt="Demo Image 1" width="170px" class="m-0 p-0 image-popup" data-event-id="<?= $row->EventID ?>">
                     </div>
                    <div class="col-md-8">
                        <div class="row m-1 my-2">
                            <div class="col-md-12">
                                <h6 class="text-danger"><?= $row->EventPlace ?></h6>
                            </div>
                            <div class="col-md-6">
                                <small>Event Start: <?= $row->EventStartDate ?></small>
                            </div>
                            <div class="col-md-6">
                                <small>Event End: <?= $row->EventEndDate ?></small>
                            </div>
                            <div class="col-md-6">
                                <small>Location: <?= $row->Location ?></small>
                            </div>
                            <div class="col-md-12 text-right mt-2">
                               <div class="row">
                                   <div  class="col-md-12">
                                        <input class="btn btn-danger w-100" style="font-size: 12px;" value="Good To Fixed Your Meeting">
                                   </div>
                               </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; // end if ?>
    <?php endforeach; ?>
<?php else: ?>
    <!-- Handle the case when $Aproved_Event is not iterable or is empty -->
    <p>No approved events available.</p>
<?php endif; ?>

    </div>
</div>

<!-- Bootstrap Modal for image details -->
<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel">Event Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="" alt="Clicked Image" class="img-fluid mb-2" id="modalEventImage">
                <p><b>Event Name:</b> <span id="eventName"></span></p>
                <p><b>Days:</b> <span id="eventDays"></span></p>
                <p><b>Event Location:</b> <span id="eventLocation"></span></p>
                <p>For any help, contact us:</p>
                <p><b>Number:</b> <span id="eventNumber"></span></p>
                <p><b>Email:</b> <span id="eventEmail"></span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
      function registerevent(Event_id, Seller_ID) {
            $.ajax({
                type: 'POST',
                url: '<?= base_url() ?>Meeting/Selleruser/Bookmeeting/Request_Seller_For_Event',
                data: {
                    Event_id: Event_id,
                    Seller_ID: Seller_ID
                },
                success: function (response) {
                if (response === '1') {
                    // Show a success SweetAlert popup
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: 'Request is going to Processing.',
                    }).then(function() {
                        // Reload the page after the SweetAlert is closed
                        location.reload();
                    });
                } else {
                    // Handle other responses if needed
                    console.log(response);
                }
                },
                error: function (error) {
                    console.error(error);
                }
            });
        }
</script>

<!-- Add other necessary scripts or include external scripts here -->

</body>
</html>
