
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

#animationSection1 {
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
    #allSellerData1 {
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
   
   .download-iconn {
    /* float: right; */
    font-size: 16px;
    /* margin-top: 2px; */
    color: #5a5555;
   }
   
   .Meeting-Download-btbn {
    font-size: 14px;
    margin-top: 8px;
    height: 31px;
}
   .form-data-heading {
    font-size: 20px;
    position: absolute;
}
   .form-data-heading {
    line-height: 45px;
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
        font-size:14px;
    }
   .om-lead-formselect {
    padding: 5px;
    background-color: #040404;
    height: 42px;
    color: #fff;
}

   .rotate-190 {
    transform: rotate(190deg);
  }
.share-btnnn {
    border-radius: 5px;
    box-shadow: 2px 2px 11px 0px #747474;
    padding: 3px;
    font-size: 17px;
  }
  </style>

<div class="container-fluid">
    <!-------------------div-------------->
       
    
  <!-------------end----------------->
    <div class="margtoppp-data-form card">
      
 <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 px-4">
            <div class="card-header1">
                <h4 class="form-data-heading mb-0"><a class="text-danger" href="<?php echo  base_url() ?>/Meeting/Admin/Meeting_Data/Seller_Active_event_meeting"><span class="share-btnnn"><i class="fa fa-share rotate-190" id="backButton"></i></span></a> Active Event Meeting</h4>
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
            <th>ID</th>
            <th>Buyer Name</th>
            <th>Buyer Company Name</th>
            <th>Date</th>
            <th>Time Slot</th>
        </tr>
        </thead>
        <tbody>
        <!-- Active Event Come  on that Events-->
        
        
        <?php if(!empty($Get_meeting_fixed)){ $i= '1';foreach($Get_meeting_fixed as $Get_meeting_fixed_row):?>
        <?php foreach($Buyer as $Buyer_row):?>
        <?php if($Get_meeting_fixed_row->BuyerID == $Buyer_row->id):?>
        <tr>
            <td><?= $i?></td>
            <td><?= $Buyer_row->name?></td>
            <td><?= $Buyer_row->your_company_name?></td>
            <td><?= $Get_meeting_fixed_row->Date  ?></td>
            <td><?= $Get_meeting_fixed_row->Time_Slot  ?></td>
             </a>
           </td>
           </td>
           <?php endif;?>
         <?php endforeach;?>
         <?php $i++; endforeach;}?>
        </tr>
        <!-- Add more rows as needed -->
        </tbody>
      </table>

      <!------------pagination----start------->
     <!------------pagination----start---end--->


    </div>
  </div>
</div>

<!-- Animation Section -->

<!-- Buyer Data -->
<div id="animationSection">
  <span id="closeBtn" class="action-icons" style="font-size: 30px;" onclick="closeAnimation()">×</span>
  <h4>Buyer Data</h4>
  
   <div class="row">
      <div class="col-lg-10 col-md-10 col-sm-12">
               <div>
               <select name="Permition"  class="form-control  mt-2">
                <option value="">Select lead status</option>
                <option value="Approved">Approved</option>
                <option value="Non Approved">Non Approved</option>
                <option value="Pending">Pending </option>
                </select>
               </div>
             
             </div>
             
              <div class="col-lg-2 col-md-2 col-sm-12 mt-2">
               <a href="#" class="btn btn-danger" onclick="openPopup()">
                    <i class="fas fa-check"></i>
                  </a>
             </div>      
     </div>
     <hr>
     <!----------1st----row---end---------->
     <div class="row" style="align-items:center">
          <div class='col-md-6'>
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
 
    <div class="row">
             <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
              
             </div>      
             
              <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                <a href="#" class="btn btn-secondary mb-1">
                 View More
                  </a>
             </div>      
     </div>
     
       <!--------------new---row---add---------->
 
 
  </div>

<!-- Seller Data -->
  <div id="animationSection1">
  <span id="closeBtn" class="action-icons" style="font-size: 30px;" onclick="closeAnimation1()">×</span>
  <h4>Seller Data</h4>
  <hr>
     <!----------1st----row---end---------->
     <div class="row" style="align-items:center">
          <div class='col-md-6'>
           <label for="full_name">Logo -</label>
          </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-12">
         <div class="event-detailss">
         <img src="https://tiimg.tistatic.com/fp/1/003/757/babylon-capital-commercial-offices-701.jpg" width="65%"> 
         </div>
         </div>
      </div>

   <div class="row">
    <div class="col-lg-7 col-md-7 col-sm-7 col-12">
        
   <ul class="lead-form-om">
  
    <li>
      <label for="email">Seller's Name -</label>
    </li>
    <li>
      <label for="contact_number"> Company Name -</label>
    </li>
    <li>
      <label for="trip_category">Contact -</label>
    </li>
    <li>
      <label for="departure_country">Email -</label>
    </li>
    <li>
      <label for="departure_city"> City -</label>
    </li>
    <li>
      <label for="arrival_country">Pin Code -</label>
    </li>
    <li>
      <label for="arrival_city">Website -</label>
    </li>
    <li>
      <label for="departure_date">Physical Addresse -</label>
    </li>
  </ul>
  </div>
 
  
  <div class="col-lg-5 col-md-5 col-sm-12 col-12">
       <ul class="lead-form-om">
    <li>
      <label for="full_name">Omprakash</label>
    </li>
    <li>
      <label for="email">omp@gmail.com</label>
    </li>
    <li>
      <label for="contact_number">9838575128</label>
    </li>
    <li>
      <label for="trip_category">xyz</label>
    </li>
    <li>
      <label for="departure_country">India</label>
    </li>
    <li>
      <label for="departure_city">Noida</label>
    </li>
    <li>
      <label for="arrival_country">Goa</label>
    </li>
    <li>
      <label for="arrival_city">Goa</label>
    </li>

  </ul>
  </div>
  </div><hr>
  <!--------------new---row---add---------->
  
   <!--------------new---row---add---------->
 
    <div class="row text-center">
              <div class="col-lg-12 col-md-12 col-sm-12 mt-2">
                <a href="#" class="btn btn-secondary mb-1">
                 View More
                  </a>
             </div>      
     </div>
     
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

                for (var j = 0; j < cols.length; j++) {
                    row.push(cols[j].innerText.trim());
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