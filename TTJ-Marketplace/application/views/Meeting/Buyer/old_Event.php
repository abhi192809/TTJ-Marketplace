
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

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

  </style>

<div class="container-fluid">
   <div class="margtoppp-data-form card">
         <div class="row my-2">
        <div class="col-lg-6 col-md-6 col-sm-12 px-4">
            <div class="card-header1">
            <div class="margintopp"> 
         <caption class="form-data-heading  mb-4 "> Old Event Meeting </caption>
         </div>
            </div>
        </div>
         <div class="col-lg-6 col-md-6 col-sm-12 text-right px-4">
             <div class="card-header1 ">
             <button type="button" class="Meeting-Download-btbn btn btn-success"><i class="download-iconn fas fa-download action-icons" title="Download"></i> Meeting Download</button>
            </div>
         </div>
        </div>
      <div class="table-responsive card-body">
        <table class="table" id="dataTable">
        <thead>
        <tr>
            <th>ID</th>
            <th>Company</th>
            <th>Event Name</th>
            <th>Event Date</th>
             <th>Meeting</th>
            <th>Event Date</th>
            <th>View Meeting</th>
        </tr>
        </thead>
        <tbody>
        <!-- Sample data, replace with your actual data -->
       <?php $i = '1'; foreach ($Get_Map as $Row_Get_Map): ?>
    <?php  foreach ($Get_Event as $Row_Get_Event): ?>
        <?php if ($Row_Get_Event->EventID == $Row_Get_Map->Evet_ID && $Row_Get_Event->EventStartDate < date('Y-m-d')): ?>
            <tr>
                <td  style="vertical-align: middle;"><?php echo $i; ?></td>
                <td style="vertical-align: middle;"><img src="<?= base_url();?>assets/Meeting/Event_image/<?= $Row_Get_Event->EventImage ?>" width="80px"></td>
                <td style="vertical-align: middle;"><?= $Row_Get_Event->Country ?></td>
                <td style="vertical-align: middle;"><?= $Row_Get_Event->EventName ?></td>
                <td style="vertical-align: middle;"><?= $Row_Get_Event->EventStartDate ?></td>
                <td style="vertical-align: middle;">2024</td>
                <td style="vertical-align: middle;"><a href="<?php echo base_url(); ?>Meeting/Buyer/Meeting/Filer_meeting/<?=$Row_Get_Map->Evet_ID?>"><i class="fas fa-eye action-icons" title="View" ></i></a></td>
            </tr>
        <?php endif; ?>
    <?php endforeach; ?>
    <?php $i++; endforeach; ?>
       </tbody>
      </table>
    </div>
  </div>
</div>
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

<script>
    jQuery(document).ready(function ($) {
   $('#dataTable').DataTable();
});
</script>

<script>
    $(document).ready(function() {
        $('.Meeting-Download-btbn').click(function() {
            downloadTable();
        });

        function downloadTable() {
            var table = document.getElementById('dataTable');
            var rows = table.getElementsByTagName('tr');
            var csvContent = [];

            for (var i = 0; i < rows.length; i++) {
                var row = [],
                    cols = rows[i].querySelectorAll('td, th');

                // Example: Exclude the "Operation" column (index 9)
                for (var j = 0; j < cols.length; j++) {
                    if (j !== 9  ) {
                        row.push(cols[j].innerText.trim());
                    }
                    
                }

                csvContent.push(row.join(','));
            }

            var csvBlob = new Blob([csvContent.join('\n')], { type: 'text/csv;charset=utf-8' });
            saveAs(csvBlob, 'meeting_data.csv');
        }

        function saveAs(blob, filename) {
            var link = document.createElement('a');
            link.href = URL.createObjectURL(blob);
            link.download = filename;

            document.body.appendChild(link);

            link.click();

            document.body.removeChild(link);
        }
    });
</script>


<script>
    jQuery(document).ready(function ($) {
   $('#dataTable').DataTable();
    });
    </script>

