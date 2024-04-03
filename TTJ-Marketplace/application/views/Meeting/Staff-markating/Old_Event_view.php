
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
    /*background-color: rgba(255, 255, 255, 0.9);*/
    overflow-y: auto;
    z-index: 1000;
    transition: right 0.5s ease-in-out;
    padding: 20px;
    border: 1px solid black;
    background-color: #fff;
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
    .old-eventbtnnn a{
        text-decoration: none;
    }
    .card-body{
        margin-top:1px;
    }
    .form-control{
        width:100%;
        margin-bottom:10px;
        text-align:left;
    }
    .btn-icon-split{
      text-align:left !important;     
    }

  </style>
</head>
<body>

<div class="container-fluid">
    <!-------------------div-------------->
       



  <!-------------end----------------->
    <div class="margtoppp-data-form card">
        <h5 class="form-data-heading mb-0 mx-4"> Event View</h5>
        
      <div class="table-responsive card-body">
        <table class="table" id="dataTable">
        <thead>
        <tr>
          <th>No.</th>
          
          <th>Event Name</th>
          <th>Event Place</th>
          <th>Country</th>
          <th>Laction</th>
          <th>Date</th>
          <th>S.N</th>
          <th>B.N</th>
          <th>E.M</th>
        </tr>
        </thead>
        <tbody>
        <!-- Display first 5 entries with images -->
        <?php     $i ='1';
        foreach($view_Event as $row ){
             $this->load->model('Meeting_model/Event_model');
    $row->sellerCount = $this->Event_model->getSellerCount($row->EventID);
    $row->buyerCount = $this->Event_model->getBuyerCount($row->EventID);
    $row->meetingCount = $this->Event_model->getMeetingCount($row->EventID);
            ?>
            <tr>
              <td><?= $i ?></td>
              <td><?= $row->EventName ?></td>
              <td><?= $row->EventPlace?></td>
              <td><?= $row->Country ?></td>
              <td><?= $row->Location ?></td>
             <td><?= $row->EventStartDate ?></td>
              <td><?= $row->sellerCount ?></td>
             <td><?= $row->buyerCount ?></td>
             <td><?= $row->meetingCount ?></td>
        </tr>
            <?php
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
<!-- Animation Section -->
<script>
    function capitalizeFirstLetter(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }

    function showAllSellerData(encodedData) {
    // Decode the JSON string
    var decodedJSON = JSON.parse(atob(encodedData));

    // Log the decoded JSON data to the console
    console.log('Decoded JSON:', decodedJSON);

    // Check if the modalBody element exists
    var modalBody = document.getElementById('sellerModalBody');
    if (modalBody) {
        // Clear existing content
        modalBody.innerHTML = '';

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
    } else {
        console.error("Element with id 'sellerModalBody' not found.");
    }
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

