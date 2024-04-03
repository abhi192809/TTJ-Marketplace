<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

   .form-data-heading{
    line-height: 53px;
   }
  .margtoppp-data-form i{
      color: #fff;
  }

  .btn-icon-split22 {
    /*background: #d8d8d8;*/
    display: inline-block;
    /* padding: 0.375rem 0.75rem; */
    padding: 3px;
    line-height: 22px;
}

.custom-control-input:checked~.custom-control-label::before {
    color: #fff;
    border-color: #b50e12;
    background-color: #ca2327;
}

.margtoppp-data-form{
    margin-top: 11px;
   }

   .form-data-heading{
    line-height: 53px;
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
    #animationSection {
    position: fixed;
    top: 0;
    right: -100%; /* Initially off-screen */
    background-color: #fff; /* Background color */
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Box shadow for a subtle border */
    transition: right 0.3s ease; /* Smooth transition for right property */
}

/* Style the h4 element inside the animation section */
#animationSection h4 {
    color: #333; /* Text color */
}

/* Style the details list */
.details-list {
    list-style: none;
    padding: 0;
    padding-top: 20px;
}

.details-list li {
    margin-bottom: 10px;
}

/* Style the loading indicator */
#loadingIndicator {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(255, 255, 255, 0.8);
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Add a smooth fade-in effect for the dynamically updated content */
#allSellerData {
    opacity: 0;
    transition: opacity 0.3s ease;
}

.pp{
    float: right;
}

 </style>

<div class="container-fluid">
  <!-------------start---------------->
    <div class="margtoppp-data-form card">
      <div class="table-responsive card-body">
        <div class="margintopp"> 
         <caption class="form-data-heading  mb-4"> Seller Request </caption>
        </div>
        <table class="table" id="dataTable">
        <thead>
        <tr>
          <th>No</th>
          <th>Reffer User</th>
          <th>Seller Name</th>
          <th>Company Name</th>
          <th>Phone Number</th>
          <th>Email </th>
          <th>City</th>
           <th>Status </th>
        </tr>
        </thead>
        <tbody>
        <!-- Display first 5 entries with images -->
       <?php $i=1; foreach($View_Seller_pending as $row ):?>
        <tr>
          <td><?= $i ?></td>
          <td>
               <?php foreach ($call_Employ_Name as $employee): ?>
                <?php if ($employee->id == $row->ReferrerPerson): ?>
                    <?= $employee->fullName ?>
                <?php endif; endforeach; ?>
          </td>
          <td><?= $row->SellerName ?></td>
          <td><?= $row->CompanyName ?></td>
          <td><?= $row->PhoneNumber ?></td>
          <td><?= $row->SellerEmail ?></td>
          <td><?= $row->City ?></td>
          
          
      <td>
         
         <div class="btn-icon-split22">
             <a href="#" class="event-details-button btn-icon-split22" onclick="showAllSellerDataseller1()" data-name="<?= $row->SellerID ?>" contenteditable="false" style="cursor: pointer;">
                <span class="acrive-btn icon" title="Active / Inactive">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input toggle-checkbox" id="customSwitch1" data-sellerid="<?= $row->SellerID ?>" data-mail="<?= $row->SellerEmail ?>"  onchange="toggleActiveInactive(this)">
                        <label class="custom-control-label" for="customSwitch1"></label>
                    </div>
                </span>
            </a>
            </a>
         </div> 

          
           <a href="#" class="event-details-button btn-secondary btn-icon-split" onclick="showAllSellerData(this)" data-name="<?= $row->SellerID ?>"  contenteditable="false" style="cursor: pointer;">
    <span class="icon text-white-50">
        <i class="fas fa-info-circle"></i>
    </span>
</a>
             
             </td>
          
        </tr>
        <?php $i++; endforeach;?>
        
        <!-- Add more rows as needed -->
        </tbody>
      </table>

      <!------------pagination----start------->
     <!------------pagination----start---end--->


    </div>
  </div>
</div>

<!-- Animation Section -->
<!-- Animation Section -->
<div id="animationSection">
  <span id="closeBtn" class="action-icons" style="font-size: 30px;" onclick="closeAnimation()">×</span>
  
  
</div>


<script>
function showAllSellerData(clickedElement) {
    var sellerId = $(clickedElement).data('name');

    // Perform AJAX call
    $.ajax({
        type: 'POST',
        url: '<?= base_url()?>/Meeting/Admin/Seller/get_Seller_pending_data',
        data: { sellerId: sellerId },
        dataType: 'json',
        success: function(response) {
            // Handle the AJAX response
            console.log(response);

            // Show the animation section
            $('#animationSection').css('right', '0');

            // Update the content dynamically based on the response
            var animationSection = $('#animationSection');
            animationSection.find('h4').text(response.SellerName);
            animationSection.find('.event-detailss img').attr('src', response.LogoURL);

            // Clear existing details
            animationSection.find('.details-list').empty();

            // Create a list of details dynamically
            var detailsList = $('<ul class="details-list"></ul>');

            // Iterate over the response data and add details to the list
            $.each(response, function(key, value) {
                detailsList.append('<li><label for="' + key + '">' + key + ' - </label>  <label class="pp" > ' + value + '</label></li>');
            });

            // Append the details list to the animationSection
            animationSection.append(detailsList);

            // Delayed opacity transition for the fadeIn effect
            setTimeout(function() {
                $('#allSellerData').css('opacity', '1');
            }, 100);
        },
        error: function(error) {
            // Handle AJAX errors
            console.error('Error:', error);
        }
    });
}

function closeAnimation() {
    // Hide the animation section and reset opacity
    $('#animationSection').css('right', '-100%');
    $('#allSellerData').css('opacity', '0');
}

</script>
<!-- Existing code ... -->
<script>
function generateRandomPassword(length = 8) {
    const characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    let password = '';

    for (let i = 0; i < length; i++) {
        password += characters.charAt(Math.floor(Math.random() * characters.length));
    }
    return password;
}

function toggleActiveInactive(checkbox) {
    var sellerID = $(checkbox).data("sellerid");
    var SellerEmail = $(checkbox).data("mail");
    var isChecked = checkbox.checked;
    var password = generateRandomPassword(5);

    $.ajax({
        type: 'POST',
        url: '<?= base_url()?>/Meeting/Admin/Seller/toggleActiveInactive',
        data: {
            sellerID: sellerID,
            UserName: SellerEmail,
            password: password
        },
        success: function (response) {
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: 'Account for ' + response.CompanyName + ' created successfully. Your additional message goes here.',
            }).then((result) => {
                if (result.isConfirmed || result.isDismissed) {
                    location.reload();
                }
            });
        },
        error: function (error) {
            // Handle the error if needed
            console.error(error);
        }
    });
}
</script>

<script>
    jQuery(document).ready(function ($) {
   $('#dataTable').DataTable();
    });
    </script>
