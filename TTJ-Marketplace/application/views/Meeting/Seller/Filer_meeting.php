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
   
    <div class="margtoppp-data-form card">
         <div class="container-fluid">
             <?php foreach($Get_Event as $Row_Get_Event):?>
          
           <div class="row">
            <div class="col-lg-6 col-md-2 col-sm-12">
            <div class="card-header1">
            <h4 class="form-data-heading mb-0"><?php echo $Row_Get_Event->EventName?></h4>
            </div>
            </div>
    
            <div class="col-lg-6 col-md-8 col-sm-12 text-right ">
                   <div id="dataTable_filter" class="dataTables_filter">
                    
                     <h4 class="form-data-heading mb-0">Date: <?php echo $Row_Get_Event->EventStartDate ?> </h4>  
                   
                  </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12">
                  <small> <?php echo $Row_Get_Event->Location?> </small>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 text-right ">
        <div class="card-header1">
             <button type="button" class="Meeting-Download-btbn btn btn-success"><i class="download-iconn fas fa-download action-icons" title="Download"></i> Meeting Download</button>
        </div>
    </div> 
            </div>
              <?php endforeach; ?>
          </div>

      <div class="table-responsive card-body">
        <table class="table" id="dataTable">
        <thead>
        <tr>
            <th>ID</th>
            <th>Buyer Name</th>
            <th>Company Name</th>
            <th>Date</th>
            <th>Time Slot</th>
            <!--<th>Buyer Data</th>-->
        </tr>
        </thead>
        <tbody>
        <?php $i="1"; foreach($Get_Meeting as  $Row_Get_Meeting):?>
        <?php  foreach($Get_Buyer as  $Row_Get_Buyer):?>
        
        <?php  if($Row_Get_Meeting->BuyerID ==  $Row_Get_Buyer->id ):?>
               
        <tr>
            <td><?= $i?></td>
            <td><?= $Row_Get_Buyer->name?></td>
            <td><?= $Row_Get_Buyer->your_company_name?></td>
            <td><?= $Row_Get_Event->EventStartDate ?></td>
            <td><?= $Row_Get_Meeting->Time_Slot?></td>
            <!--<td> -->
            <!--<a href="#" onclick="showAllSellerData()" class="event-details-button btn-secondary btn-icon-split" title="View" contenteditable="false" style="cursor: pointer;">-->
            <!--     <span class="icon">-->
            <!--       <i class="fas fa-info-circle"></i>-->
            <!--     </span>-->
            <!--    </a>-->
            <!--    </td>-->
          
        </tr>
        <?php endif;?>
        <?php endforeach;?>
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
<!-- Existing code ... -->

<div class="row">
    <div class="col-lg-7 col-md-7 col-sm-7 col-12">

        <ul class="lead-form-om">
         
            <li>
                <label for="name">Name:</label>
            </li>
            <li>
                <label for="designation">Designation:</label>
            </li>
            <li>
                <label for="company_name">Your Company Name:</label>
            </li>
            <li>
                <label for="nature_of_business">Nature of Business:</label>
            </li>
            <li>
                <label for="business_category">Business Category:</label>
            </li>
            <li>
                <label for="company_address">Company Address:</label>
            </li>
            <li>
                <label for="annual_turnover">Annual Turnover:</label>
            </li>
            <li>
                <label for="year_of_commencement">Y.C.B:</label>
            </li>
            <li>
                <label for="destinations">Destinations:</label>
            </li>
            <li>
                <label for="trade_associations">Trade Associations:</label>
            </li>
            <li>
                <label for="city">City:</label>
            </li>
            <li>
                <label for="pin_code">Pin Code:</label>
            </li>
            <li>
                <label for="email">Email:</label>
            </li>
            <li>
                <label for="mobile_number">Mobile Number:</label>
            </li>
        </ul>
    </div>

    <div class="col-lg-5 col-md-5 col-sm-12 col-12">
        <ul class="lead-form-om">
            <!-- Replace with the corresponding input values -->
            
            <li>
                <label for="company_name_value">xyz</label>
            </li>
            <li>
                <label for="contact_value">9838575128</label>
            </li>
            <li>
                <label for="email_value">omp@gmail.com</label>
            </li>
            <li>
                <label for="city_value">Noida</label>
            </li>
            <li>
                <label for="pin_code_value">201301</label>
            </li>
            <li>
                <label for="website_value">Goa</label>
            </li>
            <li>
                <label for="address_value">Goa</label>
            </li>
             <li>
                <label for="address_value">Demo</label>
            </li>
            <li>
                <label for="address_value">Demo</label>
            </li>
            <li>
                <label for="address_value">Demo</label>
            </li>
             <li>
                <label for="address_value">Demo</label>
            </li>
             <li>
                <label for="address_value">Demo</label>
            </li>
             <li>
                <label for="address_value">Demo</label>
            </li>
             <li>
                <label for="address_value">Demo</label>
            </li>
        </ul>
    </div>
</div>

<!-- Existing code ... -->

   
    <hr>
  <!--------------new---row---add---------->
  
   <!--------------new---row---add---------->
 
    <!--<div class="row text-center">-->

    <!--          <div class="col-lg-12 col-md-12 col-sm-12 mt-2">-->
    <!--            <a href="https://www.ttjtravmart.com/Meeting/Admin/View_profile/View_profile_seller" class="btn btn-secondary mb-1" contenteditable="false" style="cursor: pointer;">-->
    <!--             Buyer View -->
    <!--              </a>-->
    <!--         </div>      -->
    <!-- </div>-->
     
       <!--------------new---row---add---------->
 
 
  </div>
  
  
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
                    if (j !== 6) {
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