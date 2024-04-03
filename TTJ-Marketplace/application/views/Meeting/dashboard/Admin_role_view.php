  

 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>


  <style>

    .container {
      margin-bottom: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    table, th, td {
      border: 1px solid #dee2e6;
    }

    th, td {
      padding: 10px;
      text-align: left;
    }

    th {
      background-color: #007bff;
      color: #fff;
    }

    .actions {
      display: flex;
      justify-content: space-between;
    }

    .action-icons {
      font-size: 18px;
      cursor: pointer;
      margin-right: 10px;
    }
  </style>

<section class="body-bg-color1">
 <div class="container">
  <div class="card">
    <div class="card-header">
      <h4 class="mb-0">User Role Management</h4>
    </div>
    <div class="om-margin-top card-body">
      <div class="row">
        <div class="col-md-4">
         <div class="form-group">
                    <label for="select2Multiple">Multiple-Select Boxes (pillbox)</label>
                    <select class="select2-multiple form-control" name="states[]" multiple="multiple"
                      id="select2Multiple">
                      <option value="">Select</option>
                      <option value="Aceh">Aceh</option>
                      <option value="Sumatra Utara">Sumatra Utara</option>
                      <option value="Sumatra Barat">Sumatra Barat</option>
                      <option value="Riau">Riau</option>
                      <option value="Kepulauan Riau" selected>Kepulauan Riau</option>
                      <option value="Jambi">Jambi</option>
                      <option value="Bengkulu">Bengkulu</option>
                      <option value="Sumatra Selatan">Sumatra Selatan</option>
                      <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                      <option value="Lampung">Lampung</option>
                      <option value="Banten">Banten</option>
                      <option value="Jawa Barat" selected>Jawa Barat</option>
                      <option value="Jakarta">Jakarta</option>
                      <option value="Jawa Tengah">Jawa Tengah</option>
                      <option value="Yogyakarta">Yogyakarta</option>
                      <option value="Jawa TImur">Jawa Timur</option>
                      <option value="Bali">Bali</option>
                      <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                      <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                      <option value="Kalimantan Barat">Kalimantan Barat</option>
                      <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                      <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                      <option value="Kalimantan Timur">Kalimantan Timur</option>
                      <option value="Kalimantan Utara">Kalimantan Utara</option>
                      <option value="Gorontalo">Gorontalo</option>
                      <option value="Sulawaesi Barat">Sulawesi Barat</option>
                      <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                      <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                      <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                      <option value="Sulawesi Utara">Sulawesi Utara</option>
                      <option value="Maluku">Maluku</option>
                      <option value="Maluku Utara">Maluku Utara</option>
                      <option value="Papua Barat">Papua Barat</option>
                      <option value="Papua">Papua</option>
                    </select>
                  </div>


          <button class="btn btn-danger mt-3">Go</button>
        </div>
        <div class="col-md-8">
          <div id="roleDetails">
            <div class="list-group" id="roleList">
              <a href="#" class="list-group-item list-group-item-action active" data-role="sub_admin">Sub Admin</a>
              <a href="#" class="list-group-item list-group-item-action" data-role="admin">Admin</a>
              <a href="#" class="list-group-item list-group-item-action" data-role="seller">Seller</a>
              <a href="#" class="list-group-item list-group-item-action" data-role="buyer">Buyer</a>
              <a href="#" class="list-group-item list-group-item-action" data-role="staff_marketing">Staff (Marketing)</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>


<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <h4 class="mb-0">User Role Management Table</h4>
    </div>
    <div class="card-body">
      <table class="table">
        <thead>
        <tr>
          <th>User ID</th>
          <th>Name</th>
          <th>User Role</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>Admin</td>
          <td>Active</td>
          <td class="actions">
            <i class="fas fa-edit action-icons" title="Update"></i>
            <i class="fas fa-trash-alt action-icons" title="Delete"></i>
            <i class="fas fa-eye action-icons" title="View"></i>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>Seller</td>
          <td>Inactive</td>
          <td class="actions">
            <i class="fas fa-edit action-icons" title="Update"></i>
            <i class="fas fa-trash-alt action-icons" title="Delete"></i>
            <i class="fas fa-eye action-icons" title="View"></i>
          </td>
        </tr>
        <!-- Add more rows as needed -->
        </tbody>
      </table>
    </div>
  </div>
</div>


