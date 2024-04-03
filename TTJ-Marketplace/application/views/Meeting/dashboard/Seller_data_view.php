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

  .form-data-heading {
    line-height: 53px;
  }

  .margtoppp-data-form i {
    color: #fff;
  }

  .custom-control-input:checked~.custom-control-label::before {
    color: #fff;
    border-color: #b50e12;
    background-color: #ca2327;
  }

  .margtoppp-data-form {
    margin-top: 11px;
  }

  .form-data-heading {
    line-height: 53px;
  }

  .view-details-btnn a {
    text-decoration: none;
  }

  ul {
    list-style-type: none;
    padding: 0;
  }

  li {
    margin-bottom: 10px;
  }

  /*.btn-icon-split22 {*/
  /*display: inline-block;*/
  /*padding: 3px;*/
  /*line-height: 22px;*/
  }

  .btn-icon-split .icon1 {
    background: rgba(0, 0, 0, 0.15) !important;
    display: inline-block;
    padding: 0.375rem 0.75rem;
  }

  .custom-switch22 {
    padding-left: 2.25rem;
    width: 44px;
  }
</style>

  <div class="container-fluid">
      
    <!-------------end----------------->
    <div class="margtoppp-data-form card">
      <div class="table-responsive card-body">
          
           <div class="row">
             <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="margintopp"> 
                <caption class="form-data-heading  mb-4"> Seller Data </caption> 
                 </div>
            </div>
          
          <div class="col-lg-6 col-md-6 col-sm-6 col-12 text-right">
            <div class="dataTables_length" id="dataTable_length">
              <a href="<?= base_url() ?>Meeting/Admin/seller"><button class="btn-height btn btn-danger text-white">+ Add
                  Seller</button></a>
            </div>
          </div>

        </div>
    
        
       
        <table class="table" id="dataTable">
          <thead>
            <tr>
              <th>No</th>
              <th>Logo</th>
              <th>Name</th>
              <th>Company Name</th>
              <th>Phone Number</th>
              <th>City</th>
              <th>Year</th>
              <th>Status </th>
            </tr>
          </thead>
          <tbody>
            <!-- Display first 5 entries with images -->
            <?php $i='1';
      
      foreach($View_Seller as $row):?>

            <tr>
              <td>
                <?= $i?>
              </td>
              <td>
                <img src="<?= base_url()?>/assets/Meeting/Seller_logo/<?= $row->Logo ?>" width="60px">
              </td>
              <td>
                <?= $row->SellerName ?>
              </td>
              <td>
                <?= $row->CompanyName?>
              </td>
              <td>
                <?= $row->PhoneNumber?>
              </td>
              <td>
                <?= $row->City?>
              </td>
              <td>
                <?= (new DateTime($row->Created_by))->format('Y');?>
              </td>

              <td>
                <!--<a href="https://www.ttjtravmart.com/Meeting/Admin/View_profile/View_profile_seller"-->
                <a href="<?php echo base_url()?>Meeting/Admin/Seller/seller_event_data/<?= $row->SellerID ?>"
                  class="event-details-button btn-secondary btn-icon-split"
                  contenteditable="false" style="cursor: pointer;">
                  <span class="icon" title="View">
                    <i class="fas fa-eye action-icons"></i>
                  </span>

                </a>


                <a href="<?php echo base_url();?>Meeting/Admin/seller/seller_information_update/<?php echo $row->SellerID ?>"
                  class="event-details-button btn-warning btn-icon-split"
                  contenteditable="false" style="cursor: pointer;">
                  <span class="icon" title="Information Update">
                    <i class="fas fa-arrow-right action-icons"></i>
                  </span>

                </a>

                <a href="<?php echo base_url();?>Meeting/Admin/seller/lessor/<?php echo $row->SellerID ?>"
                  class="event-details-button btn-success btn-icon-split"
                  contenteditable="false" style="cursor: pointer;">
                  <span class="icon" title="Ledger">
                    <i class="fas fa-file action-icons"></i>
                  </span>

                </a>

               <a href="#" class="event-details-button btn-danger btn-icon-split"
                   data-id="<?= $row->SellerEmail ?>" contenteditable="false"
                   data-toggle="modal" data-target="#exampleModalCenter" id="modalCenterButton"
                   style="cursor: pointer;">
                   <span class="icon" title="Notification">
                      <i class="fas fa-bell"></i>
                   </span>
                </a>


                </a>

              </td>

            </tr>

            

              <?php
      endforeach;
      ?>


              <!-- Add more rows as needed -->
          </tbody>
        </table>

        <!------------om---modoal--login---start------->

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

  <!-- Animation Section -->
  <div id="animationSection">
    <span id="closeBtn" class="action-icons" style="font-size: 30px;" onclick="closeAnimation()">×</span>
    <h4>View All Seller Data</h4>
    <table class="table" id="allSellerData">
      <!-- Dynamically populated content will go here -->
    </table>
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
   jQuery(document).ready(function ($) {
      $('#dataTable').DataTable();
   });
</script>