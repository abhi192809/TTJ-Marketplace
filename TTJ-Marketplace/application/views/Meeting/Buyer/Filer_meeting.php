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
  
  .lead-form-om{
       margin: 3px;
       padding: 0px;
       /*color: transparent;*/
       /*text-shadow: 0 0 5px rgba(0,0,0,0.5); */
    }
    .view-details-btnn a{
      text-decoration: none;
    }
    .old-eventbtnnn i{
        color: #fff;
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
      
     
      <!------------2nd---row---------->

      <!------------2nd---row---end------->



  <!-------------end----------------->
    <div class="margtoppp-data-form card">
           <?php foreach($Get_Event as $Row_Get_Event):?>
      
       <div class="row py-2">
        <div class="col-lg-6 col-md-2 col-sm-12">
        <div class="card-header1  px-4 py-2 ">
        <h5 class=" mb-0 pb-0  "><?php echo $Row_Get_Event->EventName?></h5>
        <small> <?php echo $Row_Get_Event->Location?> </small>
        </div>
        </div>
          <div class="col-lg-6 col-md-6 col-sm-12 text-right px-4">
             <div class="card-header1  py-2">
             <button type="button" class="Meeting-Download-btbn btn btn-success"><i class="download-iconn fas fa-download action-icons" title="Download"></i> Meeting Download</button>
            </div>
         </div>
        </div>
          <?php endforeach; ?>
      <div class="table-responsive card-body">
        <table class="table" id="dataTable">
        <thead>
        <tr>
            <th>ID</th>
            <th>Seller Name</th>
            <th>Company Name</th>
            <th>Date</th>
            <th>Time Slot</th>
            <!--<th>Buyer Data</th>-->
        </tr>
        </thead>
        <tbody>
        <?php $i="1"; foreach($Get_Meeting as  $Row_Get_Meeting):?>
        <?php  foreach($Get_Seller as  $Row_Get_Seller):?>
         
        <?php  if( $Row_Get_Meeting->SellerID ==  $Row_Get_Seller->SellerID  && $Row_Get_Meeting->BuyerID  ==   $this->session->userdata('user_id') ):?>
               
        <tr>
            <td><?= $i?></td>
            <td><?= $Row_Get_Seller->SellerName?></td>
            <td><?= $Row_Get_Seller->CompanyName ?></td>
            <td><?= $Row_Get_Event->EventStartDate ?></td>
            <td><?= $Row_Get_Meeting->Time_Slot?></td>
            <!--<td> -->
            <!--<a href="#" onclick="showAllSellerData()" class="event-details-button btn-secondary btn-icon-split" title="View" contenteditable="false" style="cursor: pointer;">-->
            <!--     <span class="icon">-->
            <!--       <i class="fas fa-info-circle"></i>-->
            <!--     </span>-->
            <!--    </a>-->
                <!--</td>-->
          
        </tr>
        <?php  $i++; endif;?>
        <?php endforeach;?>
        <?php endforeach;?>
        <!-- Add more rows as needed -->
        </tbody>
      </table>

      <!------------pagination----start------->
     <!------------pagination----start---end--->


    </div>
  </div>
</div>
<!-- Animation Section -->
<div id="animationSection" >
  <span id="closeBtn" class="action-icons" style="font-size: 30px;" onclick="closeAnimation()">×</span>
  <h4>Meeting Already Register</h4>
     <hr>
     <!----------1st----row---end---------->
     <div class="row" style="align-items:center">
          <div class="col-md-6">
           <label for="full_name">Logo -</label>
          </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-12">
         <div class="event-detailss">
         <img src="https://tiimg.tistatic.com/fp/1/003/757/babylon-capital-commercial-offices-701.jpg" width="65%"> 
         </div>
         </div>
      </div>
   </div>

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


