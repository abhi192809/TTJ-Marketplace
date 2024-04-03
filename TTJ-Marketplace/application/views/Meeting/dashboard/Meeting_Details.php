
<style>
     .rotate-190 {
    transform: rotate(190deg);
  }
  
  .share-btnnn {
    border-radius: 5px;
    box-shadow: 2px 2px 11px 0px #747474;
    padding: 3px;
    font-size: 17px;
    margin-bottom: 10px;
  }

</style>
<?php foreach($Event as $Event_row): ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <a class="text-danger" href="<?php echo  base_url() ?>/Meeting/Admin/Event/OldEvent"><span class="share-btnnn"><i class="fa fa-share rotate-190" id="backButton"></i> Back</span></a><br> 
        </div>
        <div class="col-md-4" >
            <div class="row" style="align-items: center;box-shadow: -2px 2px 12px 0px #e1d9d9;padding: 20px; margin-top: 9px;">
                <div class="col-md-6">
                    <img src="<?= base_url();?>assets/Meeting/Event_image/<?php echo $Event_row->EventImage ?>" width="100%" height="200px" style="
        width: 100%;
        height: 161px;
        border-radius: 30px;
    ">

                </div>
                <div class="col-md-6 ">
                    <h3>Pune 2023</h3>
                    <div class="row">
                        <div class="col-md-6 text-left">
                            Event <br><small> <?= $Event_row->EventPlace ?> </small>
                        </div>
                        <div class="col-md-6 text-left">
                            Date <br><small><?= date('Y', strtotime($Event_row->EventStartDate)) ?></small>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="box-shadow: -2px 2px 12px 0px #e1d9d9;padding: 20px;">
            
             <div class="col-md-12" >
                   <p class="pt-2 py-1">Location </p> <span class="text-danger h4"><?= $Event_row->Location ?></span>
            </div>
                
            <div class="col-md-12">
                   <p class="pt-2 py-1">Event Day </p> <span class="text-danger h4"><?= $Event_row->EventStartDate ?></span>
            </div>
            
            <div class="col-md-12">
                   <p class="pt-2 py-1">Number Of Meeting </p><span class="text-danger h4"><?= $Meeting_count?></span>
            </div>

            <div class="col-md-12">
                   <p class="pt-2 py-1">Number of Buyer Come</p><span class="text-danger h4"><?= $Buyer ?></span> 
            </div>
            
            <div class="col-md-12">
                <p class="pt-2 py-1">Number of Seller</p> <span class="text-danger h4"><?= $Seller ?></span> 
            </div>
            
            </div>
            
        </div>
        
        <div class="col-md-8" style="overflow-y: auto;height: 640px;">
         <table class="table text-center">
             <thead>
                <tr>
                  <th>No.</th>
                  <th>Logo</th>
                  <th>Seller Name</th>
                  <th>Number</th>
                  <th>Meeting</th>
                </tr>
              </thead>
             <tbody>
               <?php
                $i = 1;
                $processedSellerIDs = array(); // Array to keep track of processed SellerIDs
                
                if (!empty($Meeting_Fixed)):
                    foreach ($Meeting_Fixed as $Row_Meeting_Fixed):
                        foreach ($All_Seller as $Row_All_Seller):
                            if ($Row_All_Seller->SellerID == $Row_Meeting_Fixed->SellerID && $Row_Meeting_Fixed->EventID == $EventID && !in_array($Row_Meeting_Fixed->SellerID, $processedSellerIDs)):
                                // Display information only if SellerID is not processed yet
                                $processedSellerIDs[] = $Row_Meeting_Fixed->SellerID; // Mark SellerID as processed
                
                                ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><img src="<?php echo base_url(); ?>assets/Meeting/Seller_logo/<?php echo $Row_All_Seller->Logo; ?>" style="width: 38px;box-shadow: 0px 1px 8px 4px #c1bbbb;"></td>
                                    <td><?php  echo $Row_All_Seller->SellerName; ?></td>
                                    <td><?php  echo $Row_All_Seller->PhoneNumber; ?></td>
                                    <td class="old-eventbtnnn"><a href="<?php echo base_url(); ?>Meeting/Admin/Filer_meeting/filter/<?php echo $Row_All_Seller->SellerID; ?>/<?php  echo $Row_All_Seller->SellerName; ?>/<?php  echo $Row_All_Seller->CompanyName; ?>" class="event-details-button btn-secondary btn-icon-split" onclick="showAllSellerDataseller1()" contenteditable="false" style="cursor: pointer;">
                                            <span class="icon">
                                                <i class="fas fa-eye"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                            <?php endif;
                        endforeach;
                    endforeach;
                endif;
                ?>

                
             </tbody>
         </table>
        </div>
    </div>
</div>
<?php endforeach;  ?>