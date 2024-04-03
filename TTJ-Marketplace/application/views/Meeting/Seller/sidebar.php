<?php
$last_segment = $this->uri->segment($this->uri->total_segments());
?>
<style>
   .active {
    font-weight: 700;
    color:red;
    background:white;
}

.sidebar .nav-item .collapse .collapse-inner .collapse-item.active, .sidebar .nav-item .collapsing .collapse-inner .collapse-item.active {
    color: #3a3b45;
    font-weight: 100;
}

</style>
<!-- Sidebar -->
<ul class="omp-sidebar-icon navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <picture>
                <source>
                    <img class="d-inline-block mx-2 logo-1" src="https://www.ttjtravmart.com/assets/images/tt_logo.png" alt="TTJ Logo" aria-label="Logo">
                </source>                    
            </picture>       
        </div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item <?php echo ($last_segment == 'seller') ? 'active' : ''; ?>">
        <a class="nav-link" href="<?= base_url('Meeting/Selleruser/seller'); ?>">
            <i class="fas fa-tachometer-alt"></i>
            <span  style="<?php echo ($last_segment == 'seller') ? 'color:red' : ''; ?>">Dashboard</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed <?php echo ($last_segment == 'pre_booking_Event_seller') ? 'active text-danger' : ''; ?>" href="#" data-toggle="collapse" data-target="#collapseForm6" aria-expanded="true" aria-controls="collapseForm">
            <i class="fab fa-wpforms"></i> <!-- Icon for the collapsed menu item -->
            <span>Book Event</span>
        </a>
        <div id="collapseForm6" class="dropdown-icon collapse <?php echo ($last_segment == 'pre_booking_Event_seller') ? 'show' : ''; ?>" aria-labelledby="headingForm" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item <?php echo ($last_segment == 'pre_booking_Event_seller') ? 'active bg-danger text-white' : ''; ?>" href="<?= base_url('Meeting/Selleruser/bookmeeting/pre_booking_Event_seller'); ?>">
                    <i class="fab fa-sellcast" style="<?php echo ($last_segment == 'pre_booking_Event_seller') ? 'color:white !important' : ''; ?>"></i>
                     Pre-Booking
                </a>
            </div>
        </div>
    </li>

    <li class="nav-item <?php echo ($last_segment == 'Your_Destination') ? 'active' : ''; ?>">
        <a class="nav-link" href="<?= base_url('Meeting/Selleruser/Lead/Your_Destination'); ?>">
            <i class="fab fa-wpforms"></i>
            <span style="<?php echo ($last_segment == 'Your_Destination') ? 'color:red' : ''; ?>">Your Destination</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed <?php echo ($last_segment == 'lead_seller_data') ? 'active text-danger' : ''; ?>" href="#" data-toggle="collapse" data-target="#collapseForm10" aria-expanded="true" aria-controls="collapseForm">
            <i class="fab fa-wpforms"></i> <!-- Icon for the collapsed menu item -->
            <span>Lead</span>
        </a>
        <div id="collapseForm10" class="dropdown-icon collapse <?php echo ($last_segment == 'lead_seller_data') ? 'show' : ''; ?>" aria-labelledby="headingForm" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item <?php echo ($last_segment == 'lead_seller_data') ? 'active bg-danger text-white' : ''; ?>" href="<?= base_url('Meeting/Selleruser/Lead/lead_seller_data'); ?>">
                    <i class="fab fa-sellcast" style="<?php echo ($last_segment == 'lead_seller_data') ? 'color:white !important' : ''; ?>"></i>
                    Seller Lead 
                </a>
               
            </div>
        </div>
        
    </li>  

    <li class="nav-item <?php echo ($last_segment == 'Enquiry') ? 'active' : ''; ?>">
        <a class="nav-link" href="<?= base_url('Meeting/Selleruser/Enquiry'); ?>">
            <i class="fas fa-sign-in-alt"></i>
            <span  style="<?php echo ($last_segment == 'Enquiry') ? 'color:red' : ''; ?>">Enquiry</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed <?php echo ($last_segment == 'Meeting_already_ragister' || $last_segment == 'Old_meeting_in_that_seller_ragister') ? 'active text-danger' : ''; ?>" href="#" data-toggle="collapse" data-target="#collapseForm4" aria-expanded="false" aria-controls="collapseForm" contenteditable="false" style="cursor: pointer;">
            <i class="fab fa-wpforms"></i> <!-- Icon for the collapsed menu item -->
            <span>Event Meeting</span>
        </a>
        <div id="collapseForm4" class="dropdown-icon collapse <?php echo ($last_segment == 'Meeting_already_ragister' || $last_segment == 'Old_meeting_in_that_seller_ragister') ? 'show' : ''; ?>" aria-labelledby="headingForm" data-parent="#accordionSidebar" style="">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item <?php echo ($last_segment == 'Meeting_already_ragister') ? 'active bg-danger text-white' : ''; ?>" href="<?= base_url()?>Meeting/Selleruser/Meeting/Meeting_already_ragister" contenteditable="false" style="cursor: pointer;">
                    <i class="fab fa-sellcast" style="<?php echo ($last_segment == 'Meeting_already_ragister') ? 'color:white !important' : ''; ?>"></i>
                    Active Event Meeting
                </a>
                <a class="collapse-item <?php echo ($last_segment == 'Old_meeting_in_that_seller_ragister') ? 'active bg-danger text-white' : ''; ?>" href="<?= base_url()?>Meeting/Selleruser/Meeting/Old_meeting_in_that_seller_ragister" contenteditable="false" style="cursor: pointer;">
                    <i class="fab fa-sellcast" style="<?php echo ($last_segment == 'Old_meeting_in_that_seller_ragister') ? 'color:white !important' : ''; ?>"></i>
                    Last Event Meeting
                </a>   
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed <?php echo ($last_segment == 'Book_your_meeting_with_buyer') ? 'active text-danger' : ''; ?>" href="#" data-toggle="collapse" data-target="#collapseForm5" aria-expanded="true" aria-controls="collapseForm">
            <i class="fab fa-wpforms"></i> <!-- Icon for the collapsed menu item -->
            <span>Book Your Meeting</span>
        </a>
        <div id="collapseForm5" class="dropdown-icon collapse <?php echo ($last_segment == 'Book_your_meeting_with_buyer') ? 'show' : ''; ?>" aria-labelledby="headingForm" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item <?php echo ($last_segment == 'Book_your_meeting_with_buyer') ? 'active bg-danger text-white' : ''; ?>" href="<?= base_url('Meeting/Selleruser/bookmeeting/Book_your_meeting_with_buyer'); ?>">
                    <i class="fab fa-sellcast" style="<?php echo ($last_segment == 'Book_your_meeting_with_buyer') ? 'color:white !important' : ''; ?>"></i>
                    Active Event Slot Book
                </a>
            </div>
        </div>
    </li>
</ul>
<!-- Sidebar -->
