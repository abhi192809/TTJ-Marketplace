<div class="p-3">
    <form id="companyForm">
    <div class="container-fluid">
    <div class="co-md-5">
       <h5> Your Company Entry  </h5>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-4">
            <lable>Company Name</lable><br>
            <input name="Name" class="form-control" type="text" >
        </div>
        <div class="col-md-4">
            <lable>Company Logo</lable><br>
            <input name='Company_Logo' class="form-control" type="file" accept="image/png">

        </div>
        
        <div class="col-md-4">
            <lable>Company Favicon</lable><br>
            <input name="Company_Favicon" class="form-control" type="file" accept="image/png">

        </div>
        
        <div class="col-md-4">
            <lable>Company GST Number</lable><br>
            <input name="GST_Number" class="form-control" type="text">
        </div>
        
        <div class="col-md-4">
            <lable>Company Number</lable><br>
            <input name="Company_Number" class="form-control" type="text">
        </div>
        
        <div class="col-md-4">
            <lable>Email</lable><br>
            <input name="Company_EmailID" class="form-control" type="text">
        </div>
        
        <div class="col-md-4">
           <button type="submit" class="btn btn-danger mt-3">OK</button>
        </div>
        
    </div>
</div>
</form>
 <h4 class="mt-3">Company Detels</h4>
<?php if($Market_place_Companies != NULL){
?>
<table class="text-center ">
    <tr>
        <td class="border">Name</td>
        <td class="border">Logo</td>
        <td class="border">Favicon</td>
        <td class="border">GST Number</td>
        <td class="border">Number</td>
        <td class="border">Email</td>
        <td class="border">Status</td>
    </tr>
    <?php foreach($Market_place_Companies as $row):?>
    <tr>
        <td><?= $row->Name ?></td>
        <td><img src="<?= base_url();?>assets/Meeting/Company_Master/<?= $row->Logo ?>" width="115px"></td>
        <td><img src="<?= base_url();?>assets/Meeting/Company_Master/<?= $row->Favicon ?>" width="115px"></td>
        <td><?= $row->Gst_number ?></td>
        <td><?= $row->Company_number ?></td>
        <td><?= $row->email?></td>
        <td>
            <a href="#" class="btn btn-warning btn-sm update-btn" role="button" onclick="updatedata();" data-id="<?= $row->id ?>" title="Information Update" style="cursor: pointer;">
                <i class="fas fa-arrow-right"></i>
            </a>

                            
            <a href="#" class="event-details-button btn-danger btn-icon-split delete-btn" data-id="<?= $row->id ?>" contenteditable="false" style="cursor: pointer;padding:8px">
                       <i class="fas fa-trash action-icons"></i>
            </a>
        </td>
    </tr>
    <?php endforeach;?>
</table>

<?php
}?>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        // Function to handle clicking on the "Information Update" button
       

        // Function to handle form submission
        $('#companyForm').submit(function(e){
            e.preventDefault(); 
            var formData = new FormData(this);

            $.ajax({
                type: 'POST',
                url: '<?php echo base_url()?>/Meeting/Admin/Settings/insert_Master_Company',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response){
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: response,
                        showConfirmButton: false,
                        timer: 1500 
                    });
                    
                     Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: response,
                        showConfirmButton: false,
                        timer: 1500 
                    }).then(function() {
                        // Reload the page
                        location.reload();
                    });
                }
            });
        });

    });
    
    $(document).ready(function(){
    // Event binding corrected
    $(document).on('click', '.update-btn', function() {
        var id = $(this).data("id");
        
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url()?>/Meeting/Admin/Settings/Update_the_Entry_company',
            data: {id: id},
            success: function(response) {
                var entryData = JSON.parse(response); // Parse the JSON string to object
                var modalHtml = `
                    <div class="modal " id="entryModal" tabindex="-1" role="dialog" aria-labelledby="entryModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                             <form id="updateForm">
                                   
                                <div class="modal-header">
                                    <h5 class="modal-title" id="entryModalLabel">Entry Data</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                        <input type="hidden" name="id" value="${entryData.id}">
                                        <div class="form-group">
                                            <label for="Name">Company Name</label>
                                            <input type="text" class="form-control" id="Name" name="Name" value="${entryData.Name}">
                                        </div>
                                        <div class="form-group">
                                            <label for="Company_Logo">Company Logo</label>
                                            <img src="<?php echo base_url();?>/assets/Meeting/Company_Master/${entryData.Logo}" width="70px">
                                            <input type="file" class="form-control" id="Company_Logo" name="Company_Logo" value="${entryData.Logo}" accept="image/png">
                                        </div>
                                        <div class="form-group">
                                            <label for="Company_Favicon">Company Favicon</label>
                                            <img src="<?php echo base_url();?>/assets/Meeting/Company_Master/${entryData.Favicon}" width="70px">
                                            <input type="file" class="form-control" id="Company_Favicon" name="Company_Favicon" value="${entryData.Favicon}" accept="image/png">
                                        </div>
                                        <div class="form-group">
                                            <label for="GST_Number">Company GST Number</label>
                                            <input type="text" class="form-control" id="GST_Number" name="GST_Number" value="${entryData.Gst_number}">
                                        </div>
                                        <div class="form-group">
                                            <label for="Company_Number">Company Number</label>
                                            <input type="text" class="form-control" id="Company_Number" name="Company_Number" value="${entryData.Company_number}">
                                        </div>
                                        <div class="form-group">
                                            <label for="Company_EmailID">Company Email</label>
                                            <input type="email" class="form-control" id="Company_EmailID" name="Company_EmailID" value="${entryData.email}">
                                        </div>
                                      
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                `;
                $('body').append(modalHtml);
                $('#entryModal').modal('show');
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });
    });

    // Other JavaScript code...

   $(document).on('submit', '#updateForm', function(e){
    e.preventDefault();
    var formData = new FormData(this); // Create FormData object for handling file uploads

    $.ajax({
        type: 'POST',
        url: '<?php echo base_url();?>Meeting/Admin/Settings/update_company',
        data: formData, // Use FormData object
        contentType: false, // Set to false to let jQuery handle the content type
        processData: false, // Set to false to prevent jQuery from processing data (required for FormData)
        success: function(response){
             Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: response,
                        showConfirmButton: false,
                        timer: 1500 
                    }).then(function() {
                        // Reload the page
                        location.reload();
                    });
        },
        error: function(xhr, status, error) {
            // Handle error response
            console.log(error);
        }
    });
});

});


</script>
<script>
    $(document).ready(function() {
        // Handle click event on delete button
        $('.delete-btn').click(function(e) {
            e.preventDefault(); // Prevent the default action of the anchor tag
            var itemId = $(this).data('id'); // Get the ID of the item to be deleted

            // Display confirmation popup using SweetAlert2
            Swal.fire({
                title: 'Are you sure?',
                text: 'You are about to delete this item.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Perform AJAX request to delete the item
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo base_url();?>Meeting/Admin/Settings/delete_item', // Replace 'delete_item.php' with the actual URL for your delete action
                        data: { id: itemId }, // Send the ID of the item to be deleted
                        success: function(response) {
                            // Handle success response
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: response,
                                showConfirmButton: false,
                                timer: 1500 
                            }).then(function() {
                                // Reload the page
                                location.reload();
                            });
                        },
                        error: function(xhr, status, error) {
                            // Handle error response
                            console.error(error);
                        }
                    });
                }
            });
        });
    });
</script>