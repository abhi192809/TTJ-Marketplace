  

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
    background-color: #1b1b1b;
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
    .list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #fc544b;
    border-color: #ef4339;
    }
    .action-icons {
    font-size: 14px;
    cursor: pointer;
    margin-right: 10px;
    }

  .go-buttonnn {
    padding: 2px 31px 4px 31px;
   }
   
   .list-group-item:hover { 
       background-color: #fc544b;
       color: #fff;
   } 

  .list-group-item:hover .active { 
       background-color: #000 !important;
       color: #fff;
   } 

  </style>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #1c1c1c; /* Black background */
        color: #ffffff; /* White text */
    }

    .dashboard {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-gap: 20px;
        padding: 20px;
    }

    .section {
        padding: 20px;
        border-radius: 10px;
        text-align: center;
    }
    .section1 {
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        border:1px solid black;
    }
    .section2 {
        padding: 20px;
        border-radius: 10px;
        text-align: center;border:1px solid black;
    }
    .section3 {
        padding: 20px;
        border-radius: 10px;
        text-align: center;border:1px solid black;
    }


    .section4 {
        padding: 20px;
        border-radius: 10px;
        text-align: center;border:1px solid black;
    }

    h4 {
        margin-bottom: 10px;
    }

    p {
    }
</style>


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


