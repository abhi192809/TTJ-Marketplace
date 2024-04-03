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
    <li class="nav-item ">
        <a class="nav-link <?php if ($last_segment == "Dashboard") { echo "active"; }else{} ?>" href="<?= base_url('Meeting/Buyer/Dashboard'); ?>">
            <i class="fas fa-tachometer-alt"></i>
            <span class="<?php if ($last_segment == "Dashboard") { echo "active"; }else{} ?>">Dashboard</span>
        </a>
    </li>

    <li class="nav-item">
    <a class="nav-link  collapsed  <?php echo ($last_segment == "EventCreat" || $last_segment ==  "OldEvent" ) ? 'active' : ''; ?>" href="#" data-toggle="collapse" data-target="#collapseForm3" aria-expanded="<?php echo ($last_segment == "EventCreat" || $last_segment ==  "OldEvent" ) ? 'true' : 'false'; ?>" aria-controls="collapseForm">
        <i class="fab fa-wpforms"></i> <!-- Icon for the collapsed menu item -->
        <span class=" <?php echo ($last_segment == "EventCreat" || $last_segment ==  "OldEvent" ) ? 'active' : ''; ?>">Event</span>
    </a>
    <div id="collapseForm3" class="dropdown-icon collapse <?php echo ($last_segment == "EventCreat" || $last_segment ==  "OldEvent" ) ? 'show' : ''; ?>" aria-labelledby="headingForm" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item  <?php echo ($last_segment == "EventCreat") ? 'active bg-danger text-white' : ''; ?> " href="<?= base_url('Meeting/Buyer/Event/EventCreat'); ?>">
             <i class="fab fa-sellcast" style="<?php echo ($last_segment == "EventCreat") ? 'color:white !important' : ''; ?>"></i>

                Event Create
            </a> 
          
            <a class="collapse-item <?php echo ($last_segment == "OldEvent") ? 'active bg-danger text-white' : ''; ?> " href="<?= base_url('Meeting/Buyer/Event/OldEvent'); ?>">
                <i class="fab fa-sellcast" style="<?php echo ($last_segment == "OldEvent") ? 'color:white !important' : ''; ?>"></i> <!-- Icon for Seller Form -->
                 Last Event View
            </a>    
        </div>
     </div>
   </li>
   <li class="nav-item <?php echo ($last_segment == "lead_buyer_data" ) ? 'active' : ''; ?>" >
    <a  class="nav-link" href="<?= base_url('Meeting/Buyer/Lead/lead_buyer_data'); ?>" >
        <i class="fab fa-wpforms"></i> <!-- Icon for the collapsed menu item -->
        <span class="<?php echo ($last_segment == "lead_buyer_data" ) ? 'active' : ''; ?>">Lead</span>
    </a>
   </li>  
  
  <li class="nav-item">
    <a class="nav-link collapsed <?php echo ($last_segment == "Recent_event_meeting" || $last_segment == "Old_meeting_in_that_Buyer_ragister") ? 'active' : ''; ?>" href="#" data-toggle="collapse" data-target="#collapseForm4" aria-expanded="<?php echo ($last_segment == "Recent_event_meeting" || $last_segment == "Old_meeting_in_that_Buyer_ragister") ? 'true' : 'false'; ?>" aria-controls="collapseForm">
        <i class="fab fa-wpforms"></i> <!-- Icon for the collapsed menu item -->
        <span class="<?php echo ($last_segment == "Recent_event_meeting" || $last_segment == "Old_meeting_in_that_Buyer_ragister") ? 'active' : ''; ?>">Event Meeting</span>
    </a>
    <div id="collapseForm4" class="dropdown-icon collapse <?php echo ($last_segment == "Recent_event_meeting" || $last_segment == "Old_meeting_in_that_Buyer_ragister") ? 'show' : ''; ?>" aria-labelledby="headingForm" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item <?php echo ($last_segment == "Recent_event_meeting") ? 'active bg-danger text-white' : ''; ?>" href="<?= base_url('Meeting/Buyer/Meeting/Recent_event_meeting'); ?>">
                <i class="fab fa-sellcast" style="<?php echo ($last_segment == "Recent_event_meeting") ? 'color:white !important' : ''; ?>"></i>
                Active Event Meeting
            </a>
            <a class="collapse-item <?php echo ($last_segment == "Old_meeting_in_that_Buyer_ragister") ? 'active bg-danger text-white' : ''; ?>" href="<?= base_url('Meeting/Buyer/Meeting/Old_meeting_in_that_Buyer_ragister'); ?>">
                <i class="fab fa-sellcast" style="<?php echo ($last_segment == "Old_meeting_in_that_Buyer_ragister") ? 'color:white !important' : ''; ?>"></i>
                Old Event Meeting
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
                <a class="collapse-item <?php echo ($last_segment == 'Book_your_meeting_with_buyer') ? 'active bg-danger text-white' : ''; ?>" href="<?= base_url('Meeting/Buyer/Bookmeeting/Book_your_meeting_with_buyer'); ?>">
                    <i class="fab fa-sellcast" style="<?php echo ($last_segment == 'Book_your_meeting_with_buyer') ? 'color:white !important' : ''; ?>"></i>
                    Active Event Slot Book
                </a>
            </div>
        </div>
    </li>



</ul>
<!-- Sidebar -->
