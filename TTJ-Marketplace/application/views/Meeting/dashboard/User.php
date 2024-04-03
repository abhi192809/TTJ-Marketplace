
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- DataTables JavaScript -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.7/js/jquery.dataTables.js"></script>
  

 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>


  <style>

     table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 9px;
  }

  th,
  td {
    padding: 10px;
    text-align: left;
  }

  th {
    background-color:#de1313;
    color: #fff;
  }
  table.dataTable tbody tr {
    background-color: #ffffff;
    color: black;
        font-size: 11px;
}

  table th,
  table td {
    text-align: center;
  }

    .actions {
      display: flex;
      justify-content: space-between;
    }
    table th, table td {
    text-align: center;
  }
  .dataTables_wrapper .dataTables_length select {
    border: 1px solid #aaa;
    border-radius: 3px;
    padding: 3px;
    background-color: transparent;
    padding: 2px 15px 2px 15px;
}

.dataTables_wrapper .dataTables_filter input {
    border: 1px solid #aaa;
    border-radius: 3px;
    padding: 3px;
    background-color: transparent;
    margin-left: 3px;
}
.dataTables_wrapper .dataTables_paginate .paginate_button {
    padding: 0.2em 0.5em;
}

.margintopp{
     margin-bottom: 10px;
     font-size: 20px;
}

.table.dataTable thead th, table.dataTable thead td{
    border: none;
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
  <div class="card " >
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 my-2">
                     <caption class="form-data-heading"><h4 class=""> Employ User</h4> </caption>
            </div>
            <div class="col-md-6 text-right my-2">
                     <caption class="form-data-heading"> <a href="<?= base_url();?>Meeting/Admin/Staffmarketing" class="btn btn-danger">+ New User </a> </caption>
            </div>
        </div>
      <table class="table text-center" id="dataTable" >
        <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Department</th>
          <th>Position</th>
          <th>Join date</th>
          <th>Phone.No</th>
          <th>User ID</th>
          <th>Password</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php $i=1; foreach($Get_User_data as $row):?>
        <tr>
          <td><?= $i ?></td>
          <td><?= $row->fullName ?></td>
          <td><?= $row->department ?></td>
          <td><?= $row->position ?></td>
          <td><?= $row->startDate?></td>
          <td><?= $row->phone?></td>
          <td><?= $row->username?></td>
          <td><?= $row->password ?></td>
          
          <td>Active</td>
        </tr>
        <?php $i++; endforeach;?>
        <!-- Add more rows as needed -->
        </tbody>
      </table>
    </div>
  </div>
</div>



<script>
    jQuery(document).ready(function ($) {
   $('#dataTable').DataTable();
});
</script>