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
       <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card-header1">
    
        <h4 class="form-data-heading mb-0"> All Buyer Data </h4>
        
        </div>
        </div>
        
<div class="col-lg-6 col-md-8 col-sm-12 ">
          <div class="row">
             
             <div class="col-lg-4 col-md-4 col-sm-12">
               <div class="dataTables_length" id="dataTable_length">
               <span>City </span>
               <select name="dataTable_length" aria-controls="dataTable" id="cityFilter" class="cityFilter custom-select custom-select-sm form-control form-control-sm">
               <?php foreach($Buyer_city as $row): ?>
               
               <option value="<?= $row->city ?>"><?= $row->city ?></option>
                <?php endforeach; ?>

                </select>
               </div>
             </div>
             
             
             <div class="col-lg-4 col-md-4 col-sm-12">
               <div class="dataTables_length" id="dataTable_length">
               <span>Business Category  </span>
               <select name="dataTable_length" aria-controls="dataTable" id="business_category" class=" business_category custom-select custom-select-sm form-control form-control-sm">
                    <?php foreach($Buyer_business_category as $row): ?>
                        <option value="<?= $row->business_category ?>"><?= $row->business_category ?></option>
                    <?php endforeach; ?>
                </select>
               </div>
             </div>
             
              <div class="col-lg-4 col-md-4 col-sm-12">
               <div id="dataTable_filter" class="dataTables_filter">
               <span>Search:</span>
                <input type="search" id="searchInput"  class="form-control form-control-sm" placeholder="" aria-controls="dataTable">
               
              </div>
             </div>
             
         
             
             
          </div>
        </div>
          </div>
        
      <hr>
      <!------------2nd---row---------->




  <!-------------end----------------->
    <div class="margtoppp-data-form card">
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

        </td>
    </tr>
<?php $i++; endforeach; ?>
    </tbody>
      </table>
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
            logoImage.src = '<?php echo base_url();?>assets/Meeting/Buyer_logo/' + decodedJSON.logo;
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

<!-- City Filter -->
<script>
    $(document).ready(function () {
        // Event listener for city filter dropdown
        $('#cityFilter').on('change', function () {
            var selectedCity = $(this).val();

            // Hide all rows
            $('.buyer-row').hide();

            // Show only the rows with the selected city
            $('.buyer-row').each(function () {
                if ($(this).find('td:eq(6)').text() === selectedCity) { // Assuming the city is in the 7th column (index 6)
                    $(this).show();
                }
            });
        });
    });
</script>


<!-- business_category -->
<script>
    $(document).ready(function () {
        // Event listener for city filter dropdown
        $('#business_category').on('change', function () {
            var selectedCity = $(this).val();

            // Hide all rows
            $('.buyer-row').hide();

            // Show only the rows with the selected city
            $('.buyer-row').each(function () {
                if ($(this).find('td:eq(7)').text() === selectedCity) { // Assuming the city is in the 7th column (index 6)
                    $(this).show();
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#searchInput').on('input', function() {
            var searchText = $(this).val().toLowerCase();

            // Show/hide rows based on search input
            $('.buyer-row').each(function() {
                var rowText = $(this).text().toLowerCase();
                if (rowText.includes(searchText)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
    });
</script>