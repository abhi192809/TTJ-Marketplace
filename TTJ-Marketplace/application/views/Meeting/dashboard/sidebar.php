
<style>
    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-toggle {
      padding: 10px;
      cursor: pointer;
    }

    .dropdown-menu {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      box-shadow: 0 8px 16px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .dropdown-menu a {
      padding: 12px;
      display: block;
      text-decoration: none;
      color: #333;
    }
   
  </style>

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
        <a class="nav-link" href="<?= base_url('Meeting/Admin/dashboard'); ?>">
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
            <a class="collapse-item" href="<?= base_url('Meeting/Admin/Event/EventCreat'); ?>">
                <i class="fab fa-sellcast"></i> <!-- Icon for Seller Form -->
                Event Create
            </a> 
            <!--<a class="collapse-item" href="<?= base_url('Meeting/Admin/Event/ActiveEvent'); ?>">-->
            <!--    <i class="fab fa-sellcast"></i> <!-- Icon for Seller Form -->
            <!--    Active Event View-->
            <!--</a>-->
            <a class="collapse-item" href="<?= base_url('Meeting/Admin/Event/OldEvent'); ?>">
                <i class="fab fa-sellcast"></i> <!-- Icon for Seller Form -->
                 Last Event View
            </a>    
        </div>
     </div>
   </li>
  
    
    
    <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm4" aria-expanded="true" aria-controls="collapseForm">
        <i class="fab fa-wpforms"></i> <!-- Icon for the collapsed menu item -->
        <span>Book event</span>
    </a>
    <div id="collapseForm4" class="dropdown-icon collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url('Meeting/Admin/Event_Book/event_permission '); ?>">
                <i class="fab fa-sellcast"></i> <!-- Icon for Seller Form -->
               Event permission 
            </a> 
            <!--<a class="collapse-item" href="<?= base_url('Meeting/Admin/Event/ActiveEvent'); ?>">-->
            <!--    <i class="fab fa-sellcast"></i> <!-- Icon for Seller Form -->
            <!--    Active Event View-->
            <!--</a>-->
           
        </div>
     </div>
   </li>
   
   
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('Meeting/Admin/Seller/seller_register_data'); ?>">
           <i class="fab fa-wpforms"></i>
            <span>Future Event Seller</span>
        </a>
    </li>
    
    <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm10" aria-expanded="true" aria-controls="collapseForm">
        <i class="fab fa-wpforms"></i> <!-- Icon for the collapsed menu item -->
        <span>Lead</span>
    </a>
    <div id="collapseForm10" class="dropdown-icon collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <!--<a class="collapse-item" href="<?= base_url('Meeting/Admin/Lead'); ?>">-->
            <!--    <i class="fab fa-sellcast"></i> <!-- Icon for Seller Form -->
            <!--    Lead Form-->
            <!--</a>-->
            <a class="collapse-item" href="<?= base_url('Meeting/Admin/Lead/lead_seller_data'); ?>">
                <i class="fab fa-sellcast"></i> <!-- Icon for Seller Data -->
                  lead Data
            </a>
           
        </div>
     </div>
   </li>  
   
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('Meeting/Admin/Enquiry'); ?>">
            <i class="fas fa-sign-in-alt"></i>
            <span>Enquiry</span>
        </a>
    </li>
    

    
  <li class="nav-item">
    <a class="nav-link collapsed active" href="<?= base_url('Meeting/Admin/seller/seller_data_view'); ?>" data-toggle="collapse" data-target="#collapseForm" aria-expanded="false" aria-controls="collapseForm">
        <i class="fab fa-wpforms"></i>
        <span> Seller</span>
    </a>
    
    <div id="collapseForm" class="dropdown-icon collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url('Meeting/Admin/seller/seller_data_view'); ?>">
                <i class="fab fa-sellcast"></i>
                Seller List
            </a>
            <a class="collapse-item" href="<?= base_url('Meeting/Admin/Seller/Seller_request'); ?>">
                <i class="fab fa-sellcast"></i>
                Seller Request
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
            <!--<a class="collapse-item" href="<?= base_url('Meeting/Admin/buyer'); ?>">-->
            <!--    <i class="fab fa-sellcast"></i> <!-- Icon for Seller Form -->
            <!--</a>-->
            <a class="collapse-item" href="<?= base_url('Meeting/Admin/buyer/buyer_data_view'); ?>">
                <i class="fab fa-sellcast"></i> <!-- Icon for Seller Data -->
                Active Event Buyer
            </a>
            
             <a class="collapse-item" href="<?= base_url('Meeting/Admin/buyer/buyer_ragistation_appreal_request'); ?>">
                <i class="fab fa-sellcast"></i> <!-- Icon for Seller Data -->
                Buyer Event Request 
            </a>
            
             <a class="collapse-item" href="<?= base_url('Meeting/Admin/buyer/buyer_data_old_Event'); ?>">
                <i class="fab fa-sellcast"></i> <!-- Icon for Seller Data -->
                  All Buyer Data 
            </a>
            
        </div>
     </div>
   </li>
   
    <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm5" aria-expanded="true" aria-controls="collapseForm">
        <i class="fab fa-wpforms"></i> <!-- Icon for the collapsed menu item -->
        <span>Meeting</span>
    </a>
    <div id="collapseForm5" class="dropdown-icon collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url('Meeting/Admin/Meeting_Data/Seller_Active_event_meeting'); ?>">
                <i class="fab fa-sellcast"></i> <!-- Icon for Seller Form -->
                Active Event Meeting
            </a>
        </div>
     </div>
   </li>
    <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm6" aria-expanded="true" aria-controls="collapseForm">
        <i class="fab fa-wpforms"></i> <!-- Icon for the collapsed menu item -->
        <span>Master</span>
    </a>
    <div id="collapseForm6" class="dropdown-icon collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url('Meeting/Admin/Settings/City_Master'); ?>">
                <i class="fab fa-sellcast"></i> 
                City Master
            </a>
            <a class="collapse-item" href="<?= base_url('Meeting/Admin/Settings/Nature_of_Business'); ?>">
                <i class="fab fa-sellcast"></i> 
                Nature of Business
            </a>
            
            <a class="collapse-item" href="<?= base_url('Meeting/Admin/Settings/Business_Category'); ?>">
                <i class="fab fa-sellcast"></i> 
                Business Category
            </a>
            <a class="collapse-item" href="<?= base_url('Meeting/Admin/Settings/Company_Master'); ?>">
                <i class="fab fa-sellcast"></i> 
                Company Master
            </a>
        </div>
     </div>
   </li>

   
    <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm7" aria-expanded="true" aria-controls="collapseForm">
        <i class="fab fa-wpforms"></i> <!-- Icon for the collapsed menu item -->
        <span>Setting</span>
    </a>
    <div id="collapseForm7" class="dropdown-icon collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url('Meeting/Admin/Settings/User'); ?>">
                <i class="fab fa-sellcast"></i> <!-- Icon for Seller Form -->
                User
            </a>
           
        </div>
     </div>
   </li>


 
    
</ul>
<!-- Sidebar ----end---->



