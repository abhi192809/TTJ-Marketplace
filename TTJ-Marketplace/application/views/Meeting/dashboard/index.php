<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #1c1c1c; /* Black background */
        color: #ffffff; /* White text */
    }

    .dashboard {
        grid-template-columns: repeat(4, 1fr);
        grid-gap: 20px;
        padding-top: 15px;
        
    }

    .section {
        background-color: #1c1c1c; /* Black background */
        padding: 20px;
        border-radius: 10px;
        text-align: center;
    }
    .section1 {
        background-color:#3abaf4; /* Black background */
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        margin-bottom: 10px;
    }
    .section2 {
        background-color: #66bb6a; /* Black background */
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        margin-bottom: 10px;
    }
    .section3 {
        background-color: #fc544b; /* Black background */
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        margin-bottom: 10px;
    }


    .section4 {
        background-color: #1c1c1c; /* Black background */
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        margin-bottom: 10px;
    }

    h2 {
        margin-bottom: 10px;
         color: #ffffff; /* White text */
         font-size: 24px;
    }
    .omp-admin-dashboard h2{
       font-size: 21px; 
    }
    
    .h4, h4 {
    font-size: 1.2rem;
    font-weight: 500;
   }

    p {
        color: #ffffff; /* White text */
    }
    
    .table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #e3e6f0;
    font-size: 14px;
    font-weight: 300;
}

.btn-icon-split .icon {
    background: rgb(242 59 63 / 97%);
    display: inline-block;
    padding: 0.375rem 0.75rem;
}

.bg-dark {
    background-color: #36373e!important;
}

.table td, .table th {
    padding: 0.4rem;
    vertical-align: middle;
    border-top: 1px solid #e3e6f0;
    font-size: 14px;
}

.btn-icon-split .icon {
    background: rgb(58 58 58);
    display: inline-block;
    padding: 0.275rem 0.55rem;
}

.pb-2, .py-2 {
    padding-bottom: 0.5rem!important;
    color: #353434;
}

@media only screen and (max-width: 600px) {
  .table thead th{
    font-size: 12px !important;
  }
  .table td, .table th{
      font-size: 12px !important; 
      border: 1px solid #ddd;
  }
  .omp-admin-dashboard h2 {
    font-size: 15px !important;
   }
   .section1, .section2, .section3, .section4{
       padding: 8px !important;
   }
   .mobile-view-scroll{
    display: block; 
    overflow-x: auto; 
    white-space: nowrap;
    padding-bottom: 22px;
   }
}

    
</style>


<div class="omp-admin-dashboard dashboard">
   <div class="container-fluid">
     <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-6">
        <div class="section1">
            <h2>Number of Sellers</h2>
            <p id="sellerCount">100</p>
         </div>
        </div>
        
         <div class="col-lg-3 col-md-6 col-sm-6 col-6">   
        <div class="section2">
            <h2>Number of Buyers</h2>
            <p id="buyerCount">200</p>
         </div>
        </div>
        
       <div class="col-lg-3 col-md-6 col-sm-6 col-6">       
        <div class="section3">
            <h2>Events Done</h2>
            <p id="eventsDone">50</p>
        </div>
        </div> 
        
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">   
        <div class="section4">
            <h2>Active Event Data</h2>
            <p id="activeEvents">5</p>
        </div>
        </div>
      </div>
     </div>
    </div>
    
    
    
    <hr>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                 <h4 class="pb-2 fw-5"> Active Meeting Data</h4>
                 <table class="mobile-view-scroll table table-bordered table-striped text-center">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th>ID</th>
                            <th>Event Name</th>
                            <th>Place</th>
                            <th>Location</th>
                            <th>More Event Data</th>
                            <th>View Buyer Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Sample data, replace with actual data -->
                      <?php if(!empty($view_Event)): ?>
                        <tr>
                            <td>1</td>
                            <td><?php echo $view_Event->EventName; ?></td>
                            <td><?php echo $view_Event->EventPlace; ?></td>
                            <td><?php echo $view_Event->Location; ?></td>
                            <td class="old-eventbtnnn"><a href="<?php echo base_url();?>Meeting/Admin/Meeting_Details/filter/<?php echo $view_Event->EventID?>" class="event-details-button btn-secondary btn-icon-split" onclick="showAllSellerDataseller1()" contenteditable="false" style="cursor: pointer;"> <span class="icon"> <i class="fas fa-eye"></i></span> </a>  </td>
                            <td class="old-eventbtnnn"><a href="<?php echo base_url();?>Meeting/Admin/buyer/buyer_data_view" class="event-details-button btn-secondary btn-icon-split" onclick="showAllSellerDataseller1()" contenteditable="false" style="cursor: pointer;"> <span class="icon"> <i class="fas fa-eye"></i></span> </a>  </td>
                        </tr>
                    <?php endif; ?>

                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <!--<div class="col-md-6">-->
            <!--    <h4 class="pb-2 pt-3 fw-5"> Active Event Seller Data</h4>-->
            <!--<div class="table-responsive">-->
            <!--    <table class="table table-bordered table-striped text-center">-->
            <!--        <thead class="bg-dark text-white">-->
            <!--            <tr>-->
            <!--                <th>ID</th>-->
            <!--                <th>Event Name</th>-->
            <!--                <th>Place</th>-->
            <!--                <th> View Seller Data</th>-->
            <!--            </tr>-->
            <!--        </thead>-->
            <!--        <tbody>-->
                        <!-- Sample data, replace with actual data -->
            <!--            <tr>-->
            <!--                <td>1</td>-->
            <!--                <td>John Doe</td>-->
            <!--                <td>Event A</td>-->
                              
            <!--                <td class="old-eventbtnnn"><a href="<?php echo base_url();?>Meeting/Admin/seller/seller_data_view" class="event-details-button btn-secondary btn-icon-split" onclick="showAllSellerDataseller1()" contenteditable="false" style="cursor: pointer;"> <span class="icon"> <i class="fas fa-eye"></i></span> </a>  </td>-->
            <!--            </tr>-->
                       
            <!--        </tbody>-->
            <!--    </table>-->
            <!--</div>-->
            <!--</div>-->
            <div class="col-md-6">
                 <h4 class="pb-3 pt-3 fw-5">View  Meeting</h4>
                 
                 <table class="table table-bordered table-striped text-center">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th>ID</th>
                            <th>Event Name</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Sample data, replace with actual data -->
                         <tr>
                            <td>1</td>
                            <td>Now About the Meeting</td>
                             <td class="old-eventbtnnn"><a href="<?php echo base_url();?>Meeting/Admin/Meeting_Data/old_event_meeting" class="event-details-button btn-secondary btn-icon-split" onclick="showAllSellerDataseller1()" contenteditable="false" style="cursor: pointer;"> <span class="icon"> <i class="fas fa-eye"></i></span> </a>  </td>
                        </tr>
                        </tr>
                      
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    