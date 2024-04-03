<!-- Sidebar -->
<ul class="omp-sidebar-icon navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <picture>
                <source>
                    <img class="d-inline-block mx-2 logo-1" src="https://www.ttjtravmart.com//assets/images/tt_logo.png" alt="TTJ Logo" aria-label="Logo">
                </source>                    
            </picture>       
        </div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('Meeting/Staffmarkating/dashboard'); ?>">
            <i class="fas fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    
     <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm3" aria-expanded="true" aria-controls="collapseForm">
        <i class="fab fa-wpforms"></i> <!-- Icon for the collapsed menu item -->
        <span>Event</span>
    </a>
    <div id="collapseForm3" class="dropdown-icon collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url('Meeting/Staffmarkating/Event/EventCreat'); ?>">
                <i class="fab fa-sellcast"></i> <!-- Icon for Seller Form -->
                Event Create
            </a> 
            <!--<a class="collapse-item" href="<?= base_url('Meeting/Staffmarkating/Event/ActiveEvent'); ?>">-->
            <!--    <i class="fab fa-sellcast"></i> <!-- Icon for Seller Form -->
            <!--    Active Event View-->
            <!--</a>-->
            <a class="collapse-item" href="<?= base_url('Meeting/Staffmarkating/Event/OldEvent'); ?>">
                <i class="fab fa-sellcast"></i> <!-- Icon for Seller Form -->
                 Last Event View
            </a>    
        </div>
     </div>
   </li>
  
  
    
  
   
    <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true" aria-controls="collapseForm">
        <i class="fab fa-wpforms"></i> <!-- Icon for the collapsed menu item -->
        <span>Seller</span>
    </a>
    <div id="collapseForm" class="dropdown-icon collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <!--<a class="collapse-item" href="<?= base_url('Meeting/Staffmarkating/seller'); ?>">-->
            <!--    <i class="fab fa-sellcast"></i> <!-- Icon for Seller Form -->
            <!--    Seller Form-->
            <!--</a>-->
            <a class="collapse-item" href="<?= base_url('Meeting/Staffmarkating/seller/seller_data_view'); ?>">
                <i class="fab fa-sellcast"></i> <!-- Icon for Seller Data -->
                Seller List
            </a>
            <!-- <a class="collapse-item" href="<?= base_url('Meeting/Staffmarkating/seller/seller_information_update'); ?>">-->
            <!--    <i class="fab fa-sellcast"></i> <!-- Icon for Seller Data -->
            <!--    Seller Update Data-->
            <!--</a>-->
        </div>
     </div>
   </li>
   
   
    <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm7" aria-expanded="true" aria-controls="collapseForm">
        <i class="fab fa-wpforms"></i> <!-- Icon for the collapsed menu item -->
        <span>Lead</span>
    </a>
    <div id="collapseForm7" class="dropdown-icon collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <!--<a class="collapse-item" href="<?= base_url('Meeting/Staffmarkating/Lead/Lead_form'); ?>">-->
            <!--    <i class="fab fa-sellcast"></i> <!-- Icon for Seller Data -->
            <!--    Lead Form-->
            <!--</a>-->
            
             <a class="collapse-item" href="<?= base_url('Meeting/Staffmarkating/Lead/Lead_list'); ?>">
                <i class="fab fa-sellcast"></i> <!-- Icon for Seller Data -->
                Lead List
            </a>
            
        </div>
     </div>
   </li>


  
    <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm1" aria-expanded="true" aria-controls="collapseForm">
        <i class="fab fa-wpforms"></i> <!-- Icon for the collapsed menu item -->
        <span>Buyer</span>
    </a>
    <div id="collapseForm1" class="dropdown-icon collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          
            <a class="collapse-item" href="<?= base_url('Meeting/Staffmarkating/Buyer/buyer_data_view'); ?>">
                <i class="fab fa-sellcast"></i> <!-- Icon for Seller Data -->
                Active Event Buyer
            </a>
            
             <a class="collapse-item" href="<?= base_url('Meeting/Staffmarkating/Buyer/buyer_ragistation_appreal_request'); ?>">
                <i class="fab fa-sellcast"></i> <!-- Icon for Seller Data -->
                Buyer Event Request 
            </a>
            
             <a class="collapse-item" href="<?= base_url('Meeting/Staffmarkating/Buyer/buyer_data_old_Event'); ?>">
                <i class="fab fa-sellcast"></i> <!-- Icon for Seller Data -->
                  B2B Buyer Data 
            </a>
            
        </div>
     </div>
   </li>
   
   <!-- <li class="nav-item">-->
   <!-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm5" aria-expanded="true" aria-controls="collapseForm">-->
   <!--     <i class="fab fa-wpforms"></i> <!-- Icon for the collapsed menu item -->-->
   <!--     <span>Meeting</span>-->
   <!-- </a>-->
   <!-- <div id="collapseForm5" class="dropdown-icon collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">-->
   <!--     <div class="bg-white py-2 collapse-inner rounded">-->
   <!--         <a class="collapse-item" href="<?= base_url('Meeting/Staffmarkating/Meeting_Data/Active_event_meeting'); ?>">-->
   <!--             <i class="fab fa-sellcast"></i> <!-- Icon for Seller Form -->-->
   <!--             Active Event Meeting-->
   <!--         </a>-->
   <!--         <a class="collapse-item" href="<?= base_url('Meeting/Staffmarkating/Meeting_Data/old_event_meeting'); ?>">-->
   <!--             <i class="fab fa-sellcast"></i> <!-- Icon for Seller Data -->-->
   <!--             Old Event Meeting-->
   <!--         </a>-->
   <!--     </div>-->
   <!--  </div>-->
   <!--</li>-->
   
   <!-- <li class="nav-item">-->
   <!-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm6" aria-expanded="true" aria-controls="collapseForm">-->
   <!--     <i class="fab fa-wpforms"></i> <!-- Icon for the collapsed menu item -->
   <!--     <span>Setting</span>-->
   <!-- </a>-->
   <!-- <div id="collapseForm6" class="dropdown-icon collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">-->
   <!--     <div class="bg-white py-2 collapse-inner rounded">-->
   <!--         <a class="collapse-item" href="<?= base_url('Meeting/Staffmarkating/Settings/User'); ?>">-->
   <!--             <i class="fab fa-sellcast"></i> <!-- Icon for Seller Form -->
   <!--             User-->
   <!--         </a>-->
            
   <!--     </div>-->
   <!--  </div>-->
   <!--</li>-->
</ul>
