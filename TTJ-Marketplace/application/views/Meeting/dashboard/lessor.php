
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
      margin-top: 9px;
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

   .form-data-heading{
    line-height: 30px;
   }
  .margtoppp-data-form i{
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
       <div class="row">
         <div class="col-lg-1 col-md-1 col-sm-12">
         <a class="text-danger" href="<?php echo  base_url() ?>/Meeting/Admin/seller/seller_data_view"><span class="share-btnnn"><i class="fa fa-share rotate-190" id="backButton"></i></span></a>
         </div>
        <div class="col-lg-5 col-md-5 col-sm-12">
        <div class="back-iconn card-header1">
         <!--<button id="backButton">Go Back</button>-->
        <h4 class="form-data-heading mb-0"><?= isset($View_Seller[0]->SellerName) ? $View_Seller[0]->SellerName : 'Seller Name' ?></h4>
        </div>
        </div>
        
        <div class="col-lg-6 col-md-2 col-sm-12 text-lg-right">
        <div class="back-iconn card-header1">
         <!--<button id="backButton">Go Back</button>-->
        <h4 class="form-data-heading mb-0"><?= isset($View_Seller[0]->SellerName) ? $View_Seller[0]->CompanyName : 'Seller Name' ?></h4>
        </div>
        </div>
        
        
        </div>
    </div>
      <!------------2nd---row---end------->


  <!-------------end----------------->
   <div class="margtoppp-data-form card">
    <div class="table-responsive card-body">
        <table class="table" id="dataTable">
            <thead>
                <tr>
                    <th>S No.</th>
                    <th>Event Name</th>
                    <th>Year</th>
                    <th>Transaction Amount</th>
                </tr>
            </thead>
            <tbody>
                <!-- Display first 5 entries with images -->
                <?php $i = 1; $totalAmount = 0; foreach ($View_Seller as $row): ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $row->EventName ?></td>
                    <td><?= $row->Created_at ?></td>
                    <td><?= number_format($row->amount, 2); ?></td>
                </tr>
                <?php 
                    $totalAmount += $row->amount; 
                endforeach; ?>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
        <div class="container-fluid border">
            <div class="row  ">
                <div class="col-md-6">
                    Table Amount
                </div>
                <div class="col-md-6 text-right">
                    <?= number_format($totalAmount, 2) ?> <!-- Display total amount formatted as currency -->
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    jQuery(document).ready(function ($) {
   $('#dataTable').DataTable();
});
</script>