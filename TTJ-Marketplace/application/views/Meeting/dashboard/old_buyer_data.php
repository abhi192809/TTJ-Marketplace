  

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
    
    .view-details-btnn a {
    text-decoration: none;
    margin-top: 5px;
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
    <div class="margtoppp-data-form card">
             <caption class="form-data-heading"><h4 class="my-2 mx-3"> All Buyer Data  </h4> </caption>
     
      <div class="table-responsive card-body">
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
        </tr>
        </thead>
        <tbody>
        <!-- Display first 5 entries with images -->
     <?php $i='1'; foreach ($Buyer_Data as $row): ?>
    <tr  class="buyer-row">
        <td><?php echo $i ?></td>
        <td><img src="<?=base_url() ?>/assets/Meeting/Buyer_logo/<?php echo $row->logo; ?>" width="100px"></td>
        <td><?php echo $row->name; ?></td>
        <td><?php echo $row->designation; ?></td>
        <td><?php echo $row->your_company_name; ?></td>
        <td><?php echo $row->mobile_number; ?></td>
        <td><?php echo $row->city; ?></td>
        <td><?php echo $row->business_category; ?></td>
        <td class="view-details-btnn">
          <a href="#" onclick="showAllSellerData('<?php echo base64_encode(json_encode($row)); ?>')" class="event-details-button btn-secondary btn-icon-split" title="View">
                <span class="icon">
                    <i class="fas fa-info-circle"></i>
                </span>
            </a>
            <a href="<?= base_url()?>/Meeting/Admin/Buyer/Buyer_Event/<?= $row->id;  ?>" class="event-details-button btn-danger btn-icon-split" title="View">
                <span class="icon">
                    <i class="fas fa-handshake"></i>
                </span>
            </a>
            
            
               <a href="#" class="event-details-button btn-danger btn-icon-split"
                   data-id="<?= $row->email ?>" contenteditable="false"
                   data-toggle="modal" data-target="#exampleModalCenter" id="modalCenterButton"
                   style="cursor: pointer;">
                   <span class="icon" title="Notification">
                      <i class="fas fa-bell"></i>
                   </span>
                </a>


        </td>
    </tr>
<?php $i++; endforeach; ?>
    </tbody>
      </table>
    </div>
  </div>
</div>
<!-- Bootstrap Modal -->

        <!-- Modal Center -->
    <div class="modal fade" id="sellerModal" tabindex="-1" role="dialog" aria-labelledby="sellerModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="sellerModalLabel">Buyer Data</h5>
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
   <!-- Modal Center -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
          aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalCenterTitle">Login In</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <!------------modaol---body--------->
              <!-- Include Font Awesome CSS in the head of your HTML document -->
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
                integrity="sha512-aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa=" crossorigin="anonymous"
                referrerpolicy="no-referrer" />

              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter your username">
                  </div>
                  <div class="form-group">
                    <label for="password">Password:</label>
                    <div class="input-group">
                      <input type="password" class="form-control" id="password" placeholder="Enter your password">
                      <div class="input-group-append">
                        <span class="input-group-text" onclick="togglePasswordVisibility()">
                          <i class="far fa-eye" id="eye-icon"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                </form>
              </div>

          
              <!------------modaol---body--------->


              <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="change_seller_password">Save changes</button>
              </div>
            </div>
          </div>
        
        </div>
        <!------------om---modoal--login---start----end--->


      </div>
    </div>
  </div>

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
        url: '<?php echo base_url();?>Meeting/Admin/Seller/show_seller_password',
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
        url: '<?php echo base_url();?>Meeting/Admin/Seller/Change_seller_password',
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
    function capitalizeFirstLetter(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }

    function  showAllSellerData(encodedData) {
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
    jQuery(document).ready(function ($) {
   $('#dataTable').DataTable();
});
</script>
