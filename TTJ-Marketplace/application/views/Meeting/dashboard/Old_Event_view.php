
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

<div class="container-fluid">

  <!-------------end----------------->
    <div class="margtoppp-data-form card">
        <div class="row my-2">
        <div class="col-lg-6 col-md-6 col-sm-12 px-4">
            <div class="card-header1">
            <div class="margintopp"> 
         <caption class="form-data-heading  mb-4"> Old Event view </caption>
         </div>
            </div>
        </div>
         <div class="col-lg-6 col-md-6 col-sm-12 text-right px-4">
             <div class="card-header1 mt-3">
             <button type="button" class="Meeting-Download-btbn btn btn-success"><i class="download-iconn fas fa-download action-icons" title="Download"></i> Meeting Download</button>
            </div>
         </div>
        </div>
      <div class="table-responsive card-body">
        
        <table class="table" id="dataTable">
        <thead>
        <tr>
          <th>No.</th>
          
          <th>Name</th>
          <th> Place</th>
          <th>Country</th>
          <th>Laction</th>
          <th>Date</th>
          <th>S.N</th>
          <th>B.N</th>
          <th>E.M</th>
          <th>Operation</th>
        </tr>
        </thead>
        <tbody>
        <!-- Display first 5 entries with images -->
    <?php $i = '1';
foreach ($view_Event as $row) {
    $this->load->model('Meeting_model/Event_model');
    $row->sellerCount = $this->Event_model->getSellerCount($row->EventID);
    $row->buyerCount = $this->Event_model->getBuyerCount($row->EventID);
    $row->meetingCount = $this->Event_model->getMeetingCount($row->EventID);
?>
    <tr>
        <td><?= $i ?></td>
        <td><?= $row->EventName ?></td>
        <td><?= $row->EventPlace ?></td>
        <td><?= $row->Country ?></td>
        <td><?= $row->Location ?></td>
        <td><?= $row->EventStartDate ?></td>
        <td><?= $row->sellerCount ?></td>
        <td><?= $row->buyerCount ?></td>
        <td><?= $row->meetingCount ?></td>
        <td class="old-eventbtnnn">
            <a href="<?= base_url()?>Meeting/Admin/Meeting_Details/filter/<?php echo $row->EventID?>" class="event-details-button btn-secondary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-info-circle"></i>
                </span>
            </a>


        </td>
    </tr>
<?php
    $i++;
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
<div id="animationSection">
  <span id="closeBtn" class="action-icons" style="font-size: 30px;" onclick="closeAnimation()">×</span>
  <h4>Old Event Data</h4>
   <hr>
  <div class="old-event-img">
  <img src="https://tiimg.tistatic.com/fp/1/003/757/babylon-capital-commercial-offices-701.jpg" width="100%">
  </div>
  <div class="row mt-4">
     <div class="col-md-6">
         asdf
     </div>
     <div class="col-md-6">
         asdf
     </div>
  </div>
    <div class="card-body">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-12">   
                  <a href="#" class="btn btn-primary btn-icon-split form-control">
                    <span class="icon text-white-50">
                       <i class="fas fa-check"></i>
                    </span>
                    <span class="text">No. - 1</span>
                  </a>
                  </div> 
                  
                  <div class="col-lg-12 col-md-12 col-sm-12 col-12">   
                  <a href="#" class="btn btn-success btn-icon-split form-control">
                    <span class="icon text-white-50"> 
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Event Name - Delhi</span>
                  </a>
                  </div>
                  
                 <div class="col-lg-12 col-md-12 col-sm-12 col-12">    
                 
                  <a href="#" class="btn btn-info btn-icon-split form-control">
                    <span class="icon text-white-50">
                       <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Place - Delhi</span>
                  </a>
                  </div>
                  
                  
                  <div class="col-lg-12 col-md-12 col-sm-12 col-12">   
                  <a href="#" class="btn btn-warning btn-icon-split form-control">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Venue - XYZ</span>
                  </a>
                  </div>
                  
                  
                 <div class="col-lg-12 col-md-12 col-sm-12 col-12">   
                   <a href="#" class="btn btn-danger btn-icon-split form-control">
                    <span class="icon text-white-50">
                       <i class="fas fa-check"></i>
                    </span>
                    <span class="text">City- Delhi</span>
                  </a>
                  </div>
                  
                  
                  <div class="col-lg-12 col-md-12 col-sm-12 col-12">   
                  <a href="#" class="btn btn-secondary btn-icon-split form-control">
                    <span class="icon text-white-50">
                       <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Year - 2024</span>
                  </a>
             </div>
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Your existing script -->
<script>
  $(document).ready(function() {
    // Event listener for search input
    $('#searchInput').on('input', function() {
      var searchText = $(this).val().toLowerCase();

      // Show/hide rows based on search input
      $('table tbody tr').each(function() {
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

