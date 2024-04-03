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


<div class="container-fluid">
    <!-------------------div-------------->
    <!--   <div class="row">-->
    <!--    <div class="col-lg-6 col-md-6 col-sm-12">-->
    <!--    <div class="card-header1">-->
    <!--    <?php if($Active_Event):?>-->
    <!--    <h4 class="form-data-heading mb-0"> Buyer Event <?= $Active_Event->EventName ?> </h4>-->
    <!--    <?php endif;?>-->
        
    <!--    </div>-->
    <!--    </div>-->
        
    <!--<div class="col-lg-6 col-md-6 col-sm-12 ">-->
    <!--      <div class="row">-->
    <!--         <div class="col-lg-4 col-md-4 col-sm-12">-->
    <!--           <div class="dataTables_length" id="dataTable_length" style="margin-top: 24px;">-->
    <!--            <a href="https://www.ttjtravmart.com/Meeting/Admin/buyer" contenteditable="false" style="cursor: pointer;"><button class="btn-height btn btn-danger text-white">+ Add Buyer</button></a>-->
    <!--           </div>-->
    <!--         </div>-->
             
             
    <!--      </div>-->
    <!--    </div>-->
    <!--      </div>-->
        
    <!--  <hr>-->
      <!------------2nd---row---------->




  <!-------------end----------------->
    <div class="margtoppp-data-form card">
      <div class="table-responsive card-body">
          <div class="row">
             <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="margintopp"> 
                <caption class="form-data-heading  mb-4"> Buyer Event Event1 2024 </caption> 
                 </div>
            </div>
          
          <div class="col-lg-6 col-md-6 col-sm-6 col-12 text-right">
            <div class="dataTables_length" id="dataTable_length">
              <a href="<?= base_url() ?>Meeting/Admin/buyer"><button class="btn-height btn btn-danger text-white">+ Add Buyer</button></a>
            </div>
          </div>

        </div>
        
        
        <table class="table" id="dataTable">
        <thead>
        <tr>
          <th>No.</th>
          <th>Logo</th>
          <th>Name</th>
          <th>Designation</th>
          <th>Company</th>
          <th>Phone.no</th>
          <th>City</th>
          <th>Category</th>
          <th>Year</th>
          <th>Event Name</th>
        </tr>
        </thead>
        <tbody>
        <!-- Display first 5 entries with images -->
   <?php if (!empty($Buyer_Data)) { $i = '1'; foreach ($Buyer_Data as $row): foreach($Event_Related_Buyer as $row_Related_Buyer): ?>
    <?php if ($row->id == $row_Related_Buyer->Buyer_ID): ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><img src="<?= base_url() ?>/assets/Meeting/Buyer_logo/<?php echo $row->logo; ?>" width="100px"></td>
            <td><?php echo $row->name; ?></td>
            <td><?php echo $row->designation; ?></td>
            <td><?php echo $row->your_company_name; ?></td>
            <td><?php echo $row->mobile_number; ?></td>
            <td><?php echo $row->city; ?></td>
            <td><?php echo $row->business_category; ?></td>
            <td><?php echo $Active_Event->EventStartDate; ?></td>
            <td class="view-details-btnn">
                <a href="#" onclick="showAllSellerData('<?php echo base64_encode(json_encode($row)); ?>')" class="event-details-button btn-secondary btn-icon-split" title="View">
                    <span class="icon">
                        <i class="fas fa-info-circle"></i>
                    </span>
                </a>
            </td>
        </tr>
        <?php $i++; endif; endforeach; endforeach; } ?>



        <!-- Add more rows as needed -->
        </tbody>
      </table>

      <!------------pagination----start------->
     <!------------pagination----start---end--->


    </div>
  </div>
</div>


<!-- Bootstrap Modal -->
<div class="modal fade" id="sellerModal" tabindex="-1" role="dialog" aria-labelledby="sellerModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="sellerModalLabel">Seller Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="sellerModalBody">
        <!-- Seller data will be appended here -->
      </div>
    </div>
  </div>
</div>
<script>
    function capitalizeFirstLetter(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }

    function showAllSellerData(encodedData) {
        // Decode the JSON string
        var decodedJSON = JSON.parse(atob(encodedData));

        // Log the decoded JSON data to the console
        console.log('Decoded JSON:', decodedJSON);

        // Append the decoded data to the Bootstrap modal
        var modalBody = document.getElementById('sellerModalBody');
        modalBody.innerHTML = ''; // Clear existing content

        // Display the logo (image)
        if (decodedJSON.logo) {
            var logoImage = document.createElement('img');
            logoImage.src = 'https://www.ttjtravmart.com/assets/Meeting/Buyer_logo/' + decodedJSON.logo;
            logoImage.alt = 'Logo';
            logoImage.style.width = '100%';
            modalBody.appendChild(logoImage);
        }

        // Loop through the properties and append them to the modal
        for (var key in decodedJSON) {
            if (decodedJSON.hasOwnProperty(key) && key !== 'id' && key !== 'logo') {
                var formattedKey = capitalizeFirstLetter(key.replace(/_/g, ' '));

                var listItem = document.createElement('p');
                listItem.textContent = formattedKey + ': ' + decodedJSON[key];
                modalBody.appendChild(listItem);
            }
        }

        // Show the Bootstrap modal
        $('#sellerModal').modal('show');
    }
</script>

 <script>
  $(document).ready(function () {
    // Function to toggle password visibility
    function togglePasswordVisibility() {
      var passwordField = $('#password');
      var eyeIcon = $('#eye-icon');

      if (passwordField.attr('type') === 'password') {
        passwordField.attr('type', 'text');
        eyeIcon.removeClass('far fa-eye').addClass('fas fa-eye-slash');
      } else {
        passwordField.attr('type', 'password');
        eyeIcon.removeClass('fas fa-eye-slash').addClass('far fa-eye');
      }
    }

    // Show event handler for the modal
    $('#exampleModalCenter').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget);
      var sellerName = button.data('id');

      // Perform AJAX request to get seller data
      $.ajax({
        type: 'POST',
        url: 'https://www.ttjtravmart.com/Meeting/Admin/Seller/show_seller_password',
        data: { sellerName: sellerName },
        success: function (response) {
          var sellerData = JSON.parse(response);
          $('#username').val(sellerData.username);
          $('#password').val(sellerData.password);

          // Ensure the eye icon is set to the initial state (password hidden)
          $('#eye-icon').removeClass('fas fa-eye-slash').addClass('far fa-eye');
          $('#password').attr('type', 'password');
        },
        error: function (error) {
          console.error('AJAX error:', error);
        }
      });
    });

    // Click event handler for the eye icon
    $('#eye-icon').click(function () {
      togglePasswordVisibility();
    });

    // Click event handler for "Save changes" button
    $('#exampleModalCenter').on('click', '.btn-primary', function () {
      var sellerName = $('#username').val();
      var newPassword = $('#password').val();

      // Perform AJAX request to change seller's password
      $.ajax({
        type: 'POST',
        url: 'https://www.ttjtravmart.com/Meeting/Admin/Seller/Change_seller_password',
        data: { sellerName: sellerName, newPassword: newPassword },
        success: function (response) {
          // Handle success, if needed
             $('#success-alert').removeClass('d-none');
          setTimeout(function () {
            $('#success-alert').addClass('d-none');
          }, 5000);
        },
        error: function (error) {
          console.error('AJAX error:', error);
        }
      });

      // Close the modal
      $('#exampleModalCenter').modal('hide');
    });
  });
</script>
 <script>
    jQuery(document).ready(function ($) {
   $('#dataTable').DataTable();
    });
    </script>
