   <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<style type="text/css">
  .body-bg-color .mb-2 {
    padding: 0px 15px 6px 10px;
  }

  .body-bg-color h4 {
    padding-bottom: 6px;
  }

  label {
    display: inline-block;
    margin-bottom: 0.5rem;
    font-size: 14px;
    color: #353535;
  }

  .form-control {
    display: block;
    width: 100%;
    height: 36px;
    padding: 0.375rem 0.75rem;
    font-size: 13px;
    font-weight: 400;
    line-height: 1.5;
    color: #777777;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #b3b3b3;
    border-radius: 0.25rem;
    -webkit-transition: border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
    margin-left: 10px;
  }

  .form-body-padding {
    padding: 20px;
    border: 1px solid #ddd;
    background-color: #fff;
  }

  .om-submit-btn {
    padding: 5px 10px 5px 10px !important;
    background-color: #ec1e24;
    width: 120px;
    margin-bottom: 25px;
    border: 1px solid #da0c12;
  }

  .event-detailss h2 {
    padding-bottom: 15px;
    font-size: 25px;
  }

  .event-detailss {
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    padding: 10px;
  }

  .event-detailss-list li {
    padding: 6px 0px 6px 0px !important;
    font-size: 15px;
    padding-bottom: 13px !important;
  }

  .event-detailss img {
    margin-bottom: 12px;
  }
  .p-0 {
    padding: 0!important;
    color: red;
    font-weight: 500;
    border-bottom: 1px solid #c3c1c1;
    padding-bottom: 5px;
   }
</style>



 <style type="text/css">
   .event-details-body img{
    margin-bottom: 10px !important;
}
    .event-details-body p{
        padding-top: 5px;
    }
    
     .event-details-body span{
        font-size: 15px; 
        margin-bottom: 10px !important;
        padding-left: 10px;
        color: #3c3c3c;
    }

    .event-details-body{
        border: 1px solid #ccc;
        padding: 10px;
    }
    .event-details-body i{
        color: #000;
    }

    .active-event-heading-phone{
        float: right;
    }

    .gt-event-status-phone i{
        color: red !important;
    }

    .gt-event-status i{
     color: #fff !important;
     margin-right: 5px;
    }
    #wrapper #content-wrapper{
        background-color: #fff;
    }

    .gt-event-status {
    position: absolute;
    z-index: 1;
    bottom: 337px;
    left: 31px;
    font-size: 13px;
    text-transform: uppercase;
    list-style: none;
    margin: 0;
    background: #ea2024;
    padding: 7px 20px;
    border-radius: 10px;
    font-weight: 300;
    padding: 8px !important;
    color: #fff;
}

.gt-event-status-phone {
    position: absolute;
    z-index: 1;
    bottom: 337px;
    left: 270px;
    font-size: 13px;
    text-transform: uppercase;
    list-style: none;
    margin: 0;
    background: #fdfdfd;
    padding: 7px 20px;
    border-radius: 10px;
    font-weight: 300;
    padding: 8px !important;
    color: #131313;
}

.bottom-text-ii {
      overflow: auto;
    height: 640px;
    }
    /* Customize the main body scrollbar */
.body-bg-color {
    scrollbar-width: thin;
    scrollbar-color: #232121 #fff; /* thumb and track color */
}

/* WebKit browsers (Chrome, Safari) */
.body-bg-color::-webkit-scrollbar {
    width: 12px;
}

.body-bg-color::-webkit-scrollbar-thumb {
    background-color: #ec1e24; /* thumb color */
}

.body-bg-color::-webkit-scrollbar-track {
    background-color: #fff; /* track color */
}

/* Customize the scrollbar inside the .bottom-text-ii container */
.bottom-text-ii {
    scrollbar-width: thin;
    scrollbar-color: #232121 #fff;
}

.bottom-text-ii::-webkit-scrollbar {
    width: 12px;
}

.bottom-text-ii::-webkit-scrollbar-thumb {
    background-color: #232121;
}

.bottom-text-ii::-webkit-scrollbar-track {
    background-color: #fff;
}

 .last-event-imgg {
    background-color: #f7f7f7;
    padding: 21px;
    border-radius: 5px;
}

.form-body-padding {
    padding: 20px;
    border: 1px solid #ddd;
    background-color: #fff;
    margin-top: 26px;
}

.last-event-imgg {
    background-color: #f7f7f7;
    padding: 21px;
    border-radius: 5px;
    margin-top: 20px;
}
 </style>


<section class="body-bg-color">
  <div class="container-fluid">
    <div class="row">
       <!-- Last Event Done -->
          <div class="col-md-12">
          <h4 >All Event <?php echo date('Y')?></h4>
              
          </div>
         <?php
if(!empty($view_Event)){
    foreach($view_Event as $row ){
?>
    <div class="col-lg-6 col-md-6 bottom-text-ii">
        <div class="row">
            <div class="col-md-4">
                <img src="<?= base_url() ?>assets/Meeting/Event_image/<?= $row->EventImage ?>" style="border-radius: 20px;" width="100%">
            </div>
            <div class="col-md-8" style="position: relative">
                <h5 class="p-0 m-0"><?= $row->EventName ?></h5>
                <small>Event Place: <?= $row->EventPlace ?></small>
                <div>
                    <div class="row">
                        <div class="col-md-6">
                            <small>Event start Time: <?= $row->EventStartDate ?></small>
                        </div>
                        <div class="col-md-6">
                            <small>Event End Time: <?= $row->EventEndDate?> </small>
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <small>Location: <?= $row->Location?> </small>
                </div>
            </div>
        </div> 
    </div>
    <hr>
<?php
    }
}
?>
 
  </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
$(document).ready(function() {
    // Attach a submit handler to the form
    $('#eventForm').submit(function(event) {
        // Prevent the default form submission
        event.preventDefault();

        // Create a FormData object to store form data, including the image
        var quillContent = quill.root.innerHTML;

        // Set the HTML content to the hidden input
        $('#Description').val(quillContent);

        // Continue with your form submission logic
        var formData = new FormData($(this)[0]);

        // Append Quill content to FormData
        formData.append('Description', quillContent);

        // Perform the AJAX request
        $.ajax({
            url: '<?php echo base_url()?>Meeting/Users/Event/EventCreatInsert',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                // Handle the success response
                console.log(response);

                // Show success pop-up using SweetAlert2
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Event Creat successfully.',
                }).then(function() {
                    // Reload the page after the user clicks "OK" on the success pop-up
                    location.reload();
                });
            },
            error: function(error) {
                // Handle the error
                console.error(error);
            }
        });
    });
});

</script>

    <script>
        var quill = new Quill('#editor', {
            theme: 'snow'
        });
    </script>
            