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
 
 .lead-form-om{
     font-size:14px !important;
 }
 
 .text-right {
    text-align: right!important;
    margin-top: 11px;
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
    line-height: 36px;
   }
  .event-details-button {
    font-size: 13px;
    height: 30px;
    line-height: 17px;
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
    
    
    @media only screen and (max-width: 600px) {
    .form-data-heading {
      font-size: 21px;
     }
     .dataTables_length {
      padding-top: 10px;
     }
     .card .table th{
        font-size: 12px !important;  
     }
     #animationSection {
     width: 100% !important;
     }
     .event-detailss img{
         width: 120px;
     }
     .text-right {
      margin-top: -11px !important;
    }
    }

  </style>
</head>
<body>

<div class="container-fluid">
    <!-------------------div-------------->

      <!------------2nd---row---------->

   
   <div class="margtoppp-data-form card" style="overflow: hidden;">
      <div class="table-responsive card-body">
        <div class="margintopp"> 
         <caption class="form-data-heading  mb-4"> Event Permission</caption>
        </div>
        <table class="table" id="dataTable" style="overflow: auto;width: 108%;">
        <thead>
        <tr>
          <th>No.</th>
          <th>Logo</th>
          <th>Event </th>
          <th>Seller </th>
          <th>Company  </th>
          <th>City</th>
          <th>Email</th>
          <th>Phone No.</th>
           <th>Status</th>
          <th>Operation</th>
        </tr>
        </thead>
        <tbody>
        <!-- Display first 5 entries with images -->
       <?php
$i = 1;
if (!empty($Event_Requst)) {
    foreach ($Event_Requst as $row) {
        ?>
        <tr>
            <td><?= $i ?></td>
            <td><img src="<?= base_url() ?>assets/Meeting/Seller_logo/<?= $row->Logo ?>" width="50px"></td>
            <td><?= $row->EventName?></td>
            <td><?= $row->SellerName ?></td>
            <td><?= $row->CompanyName ?></td>
            <td><?= $row->SellerEmail ?></td>
            <td><?=  $row->City ?></td>
            <td><?= $row->PhoneNumber?></td>
            <td><div class="btn btn-dangers">ON Process...</div></td>
            <td class="old-eventbtnnn">
               <a href="#" class="event-details-button btn-secondary btn-icon-split" onclick="showAllSellerData('<?= $row->SellerID ?>','<?= $row->EventID ?>')" contenteditable="false" style="cursor: pointer;">
    <span class="icon text-white-50">
        <i class="fas fa-info-circle"></i>
    </span>
</a>

            </td>
        </tr>
        <?php
        $i++;
    }
} else {
    // Handle case where $Event_Requst is empty or null
    echo "No data found";
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
  <!-------------end----------------->
 
  <style>
    .main {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .main > div {
      width: 50%;
      box-sizing: border-box;
    }
     .main > div:first-child {
      text-align: left; /* Align text to the left for the first div */
    }

    .main > div:last-child {
      text-align: right; /* Align text to the right for the second div */
    }
  </style>


<!-- Animation Section -->
<div id="animationSection">
 
 
  </div>
  <!-- Add these links in the head section of your HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>

  
<script>
$(document).ready(function() {
  const table = $('#dataTable');

  // Listen for changes in the "Show entries" dropdown
  $('#dataTable_length select').change(function() {
    const selectedLength = parseInt($(this).val(), 10);

    // Hide all rows
    table.find('tbody tr').hide();

    // Show the selected number of rows
    table.find('tbody tr:lt(' + selectedLength + ')').show();
  });

  // Listen for changes in the city dropdown
  $('#cityFilter').change(function() {
    filterTable();
  });

  // Listen for changes in the search input
  $('#dataTable_filter input').on('input', function() {
    filterTable();
  });

  function filterTable() {
    const selectedCity = $('#cityFilter').val().toLowerCase();
    const searchTerm = $('#dataTable_filter input').val().toLowerCase();

    // Show all rows before applying filters
    table.find('tbody tr').show();

    // Filter based on the selected city
    if (selectedCity !== 'all') {
      table.find('tbody tr').filter(function() {
        return $(this).find('td:eq(4)').text().toLowerCase() !== selectedCity;
      }).hide();
    }

    // Filter based on the search term
    if (searchTerm.length > 0) {
      table.find('tbody tr').filter(function() {
        return !$(this).text().toLowerCase().includes(searchTerm);
      }).hide();
    }
  }
});

</script>
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
    function showAllSellerData(SellerID ,EventID ) {
        $.ajax({
            type: 'POST',
            url: '<?= base_url() ?>Meeting/Admin/Event_Book/View_Seller_information',
            data: {
                SellerID: SellerID,
                EventID: EventID,
            },
            success: function(response) {
                console.log(response);

                if (response.length > 0) {
                    var sellerData = response[0];
                    console.log(sellerData);

                    // Append seller information to animationSection
                    $('#animationSection').html(`
                        <span id="closeBtn" class="action-icons" style="font-size: 30px;" onclick="closeAnimation()">×</span>
                        <h4>Seller Register</h4>

                        <div class="row">
                            <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                                <div>
                                    <select name="Permition" id="approvalStatus" class="form-control mt-2">
                                        <option value="">Select lead status</option>
                                        <option value="Approved">Approved</option>
                                        <option value="Non Approved">Non Approved</option>
                                        <option value="Pending">Pending</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-2 col-sm-2 col-2 mt-2">
                                <a href="#" class="btn btn-danger" onclick="openPopup('${sellerData.SellerID}','${EventID}')">
                                    <i class="fas fa-check"></i>
                                </a>
                            </div>
                        </div>
                        <hr>

                        <div class="row" style="align-items:center">
                            <div class='col-md-6'>
                                <label for="full_name">Logo -</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-right">
                                <div class="event-detailss">
                                    <img src="<?= base_url()?>assets/Meeting/Seller_logo/${sellerData.Logo}" width="65%">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                             <div class="row lead-form-om mt-3">
                              <div class="col-md-6 mt-2">Seller's Name - </div>  <div class="col-md-6 text-right"> ${sellerData.SellerName}</div>
                               <div class="col-md-6 mt-2"> Company Name - </div>  <div class="col-md-6 text-right"> ${sellerData.CompanyName}</div>
                                <div class="col-md-6 mt-2">Contact - </div>  <div class="col-md-6 text-right"> ${sellerData.PhoneNumber}</div>
                                 <div class="col-md-6 mt-2">Email - </div>  <div class="col-md-6 text-right"> ${sellerData.SellerEmail}</div>
                                  <div class="col-md-6 mt-2">City - </div>  <div class="col-md-6 text-right"> ${sellerData.City}</div>
                                   <div class="col-md-6 mt-2">Pin Code - </div>  <div class="col-md-6 text-right"> ${sellerData.PinCode}</div>
                                    <div class="col-md-6 mt-2">Website - </div>  <div class="col-md-6 text-right"> ${sellerData.Website}</div>
                                     <div class="col-md-6 mt-2">Physical Address - </div>  <div class="col-md-6 text-right"> ${sellerData.PhysicalAddress}</div>
                                      <div class="col-md-6 mt-2">PAN Number - </div>  <div class="col-md-6 text-right"> ${sellerData.PanNumber}</div>
                                      <div class="col-md-6 mt-2">GST Number - </div>  <div class="col-md-6 text-right"> ${sellerData.GstNumber}</div>
                                      <div class="col-md-6 mt-2">Certifications - </div>  <div class="col-md-6 text-right"> ${sellerData.Certifications}</div>
                              
                              
                               
                              </div>
                              
                            </div>

                            
                        </div>
                        <hr>

                    `);

                    // Show animationSection
                    $('#animationSection').css('right', '0');

                    // Add animation for opacity after a delay
                    setTimeout(function() {
                        $('#animationSection').css('opacity', '1');
                    }, 100);
                } else {
                    // Handle case when no data is returned
                    $('#animationSection').html('<p>No data available for the seller.</p>');
                }
            },
            error: function(error) {
                console.error(error);
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                });
            }
        });
    }
function openPopup(SellerID, EventID) {
    // Check the selected approval status
    var approvalStatus = $('#approvalStatus').val();

    // Prompt user for Event Amount
    var Event_Amount = prompt("Add Event Amount Changes");

    // Check if Event Amount is not null and approvalStatus is 'Approved'
    if (Event_Amount !== null && approvalStatus === 'Approved') {
        var PaymentMethod = prompt("Payment Method");
        var PaymentID = prompt('Payment ID');

        // Check if both Event_Amount and PaymentID are not null
        if (Event_Amount !== null && PaymentID !== null) {
            $.ajax({
                type: 'POST',
                url: '<?= base_url() ?>Meeting/Admin/Event_Book/Event_Approved',
                data: {
                    SellerID: SellerID,
                    EventID: EventID,
                    Event_Amount: Event_Amount,
                    PaymentMethod: PaymentMethod,
                    PaymentID: PaymentID // Include PaymentID in data
                },
                success: function (response) {
                    // Handle success response
                    if (response == '1') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: 'Event Approved successfully!',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.reload();
                            }
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!'
                        });
                    }
                },
                error: function (error) {
                    console.error(error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                    });
                }
            });
        } else {
            // Either Event_Amount or PaymentID is null
            Swal.fire({
                icon: 'info',
                title: 'Info',
                text: 'Event Amount and Payment ID cannot be null.',
            });
        }
    } else {
        // User clicked Cancel on the prompt or entered null
        Swal.fire({
            icon: 'info',
            title: 'Info',
            text: 'Event Amount cannot be null or approval status is not Approved.',
        });
    }
}



function closeAnimation() {
    $('#animationSection').css('right', '-100%');
    $('#animationSection').css('opacity', '0');
}
</script>

 <script>
    jQuery(document).ready(function ($) {
   $('#dataTable').DataTable();
    });
    </script>
