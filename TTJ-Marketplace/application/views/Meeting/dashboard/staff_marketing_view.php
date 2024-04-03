
<style>
    .form-control {
        height: 38px;
    }
    .font-stylee {
    font-size: 23px;
    font-weight: 500;
}
.rotate-190 {
    transform: rotate(190deg);
  }
  
  .share-btnnn {
    border-radius: 5px;
    box-shadow: 2px 2px 11px 0px #747474;
    padding: 5px 4px 4px 5px;
    font-size: 17px;
    margin-right: 5px;
}
</style>

<div class="container mt-3">
    <h2 class="font-stylee mb-4">
    <a class="text-danger" href="<?php echo  base_url() ?>/Meeting/Admin/Settings/User"><span class="share-btnnn"><i class="fa fa-share rotate-190" id="backButton"></i></span></a> Employee Entry Form</h2>

    <form id="employeeForm">
        <div class="row">
          

            <div class="col-md-12">
                <div class="form-group">
                    <label for="fullName">Full Name:</label>
                    <input type="text" class="form-control" id="fullName" name="fullName" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="dob">Date of Birth:</label>
                    <input type="date" class="form-control" id="dob" name="dob" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <select class="form-control" id="gender" name="gender" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="department">Department:</label>
                   <select class="form-control" name="department">
                        <option value="">Select Department</option>
                        <?php foreach($User_Data as $row): ?>
                            <option value="<?php echo $row->User_Section ?>"><?php echo $row->User_Section ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="position">Position:</label>
                    <input type="text" class="form-control" id="position" name="position" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="startDate">Start Date:</label>
                    <input type="date" class="form-control" id="startDate" name="startDate" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="salary">Salary:</label>
                    <input type="text" class="form-control" id="salary" name="salary" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="address">Address:</label>
                    <textarea class="form-control" id="address" name="address" rows="4" required></textarea>
                </div>
            </div>

            <div class="col-md-6">
                <button type="submit" id="submitBtn" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    $(document).ready(function () {
        $('#submitBtn').on('click', function (e) {
            e.preventDefault(); // Prevent default form submission

            // Get form data
            const formData = new FormData($('#employeeForm')[0]);

            // Send POST request using jQuery AJAX
            $.ajax({
                url: '<?php echo base_url()?>Meeting/Admin/Staffmarketing/Upload_form',
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (data) {
                     
                     if(data == 'Success'){
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: 'Employee data submitted successfully!',
                        }).then(function() {
                            location.reload(); // Reload the page
                        });
                    }
                },
                error: function (error) {
                   Swal.fire({
                            icon: 'error',
                            title: 'error!',
                            text: 'Samething is issues',
                        });
                    }
            });
        });
    });
</script>