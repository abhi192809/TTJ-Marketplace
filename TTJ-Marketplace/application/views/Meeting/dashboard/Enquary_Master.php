<div class="container-fluid">
    <h5>Add Enquary</h5>
    <div class="row">
         <div  class="col-md-11">
             <input type="text" class="form-control" id="EnquaryInput">
         </div>
          <div  class="col-md-1">
             <button type="submit" id="insertButton" class="btn btn-danger">GO</button>
         </div>
         <div class="col-md-12">
            <div class="table-responsive">
                <table class="table text-center">
                    <!-- Table header row -->
                    <tr class="bg-dark text-white">
                        <th>No</th>
                        <th>Enquary</th>
                        <th>Status</th>
                    </tr>
                    <?php $i="1"; foreach($Enquary_Master as $row):?>
                    <tr>
                        <!-- First row content -->
                        <th><p><?= $i ?></p></th>
                        <td><p><?= $row->Enquary ?></p></td>
                        <td>
                            <!-- Button embedded in the cell -->
                            <input type="hidden" id="EnquaryId" value="<?= $row->id ?>">
                            <a href="#" class="btn btn-warning btn-sm update-btn"  role="button" title="Information Update">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                            <a href="#" class="btn btn-warning btn-sm delete-btn" role="button" title="Information Update">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php $i++; endforeach;?>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Enquary</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input id="updatedEnquary" type="text" class="form-control">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="updateBtnModal" type="button" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function(){
        $("#insertButton").click(function(){
            var Enquary = $("#EnquaryInput").val();
            $.ajax({
                url: "<?php echo base_url('Meeting/Admin/Settings/insert_Enquary'); ?>",
                type: "POST",
                data: { Enquary: Enquary },
                success: function(response){
                    // Handle success response if needed
                    console.log(response);
                    // Show success message using SweetAlert
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Enquary inserted successfully.',
                    }).then((result) => {
                        // Reload the page after the success message is closed
                        location.reload();
                    });
                },
                error: function(xhr, status, error){
                    // Handle error
                    console.error(error);
                }
            });
        });
    });
</script>

<script>
   $(document).ready(function(){
    // Update Button Clicked
    $(".update-btn").click(function(){
        // Get the nature of business value from the table row
        var Business_Category = $(this).closest("tr").find("td:eq(1)").text().trim();
        
        // Get the id of the nature of business
        var id = $(this).closest("tr").find("#EnquaryId").val(); // Corrected this line
        
        // Set the nature of business value and id in the update modal
        $("#updatedEnquary").val();
        $("#EnquaryId").val(id);
        
        // Show the update modal
        $("#updateModal").modal("show");
    });
    
    // Update Button in Modal Clicked
    $("#updateBtnModal").click(function(){
        // Get the updated nature of business value from the modal
        var updatedEnquary = $("#updatedEnquary").val();
        var id = $("#EnquaryId").val();
        
        // Perform AJAX update request
        $.ajax({
            url: "<?php echo base_url('Meeting/Admin/Settings/update_Enquary'); ?>",
            type: "POST",
            data: { id: id, updatedEnquary: updatedEnquary },
            success: function(response){
                // Handle success response
                console.log(response);
                // Show success message using SweetAlert
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'Enquary updated successfully.',
                }).then((result) => {
                    // Reload the page after the success message is closed
                    location.reload();
                });
            },
            error: function(xhr, status, error){
                // Handle error
                console.error(error);
            }
        });
    });
});

</script>
<script>
    $(document).ready(function(){
        // Function to handle deletion
        $(".delete-btn").click(function(){
            var id = $(this).closest("tr").find("#EnquaryId").val();
            
            // Show confirmation dialog using SweetAlert
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // If user confirms deletion, perform AJAX request
                    $.ajax({
                        url: "<?php echo base_url('Meeting/Admin/Settings/delete_Enquary'); ?>",
                        type: "POST",
                        data: { id: id },
                        success: function(response){
                            // Handle success response
                            console.log(response);
                            // Show success message using SweetAlert
                            Swal.fire({
                                icon: 'success',
                                title: 'Deleted!',
                                text: 'Enquary has been deleted.',
                            }).then((result) => {
                                // Reload the page after the success message is closed
                                location.reload();
                            });
                        },
                        error: function(xhr, status, error){
                            // Handle error
                            console.error(error);
                        }
                    });
                }
            });
        });
    });
</script>