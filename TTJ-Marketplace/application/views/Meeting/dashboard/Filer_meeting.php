
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- DataTables JavaScript -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.7/js/jquery.dataTables.js"></script>


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
        font-size: 14px;
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

.h4, h4 {
    font-size: 1.5rem;
}

  </style>
  
  
<div class="container-fluid">
  
    <div class="row my-2">
         <div class="col-md-6 mb-2">
            <h4>  <?= $SellerName ?> </h4>
            <span class="border-btn"> <?= $SellerCompanyName ?> </span>
        </div>
        
         <div class="col-lg-6 col-md-6 col-sm-6 text-right px-4">
             <div class="card-header1">
             <button type="button" class="Meeting-Download-btbn btn btn-success"><i class="download-iconn fas fa-download action-icons" title="Download"></i> Meeting Download</button>
            </div>
         </div>
        </div>
       
  
<table class="table text-center" id="dataTable">
             <thead>
                <tr>
                  <th>No.</th>
                  <th>Buyer Logo</th>
                  <th>Buyer Name</th>
                  <th>Company</th>
                  <th>Nature Business</th>
                  <th>Business Category</th>
                  <th>Mobile number</th>
                  <th>Time Slot</th>
                </tr>
              </thead>
             <tbody>
                <?php $i=1; foreach($Buyer_Map as $Row_Buyer_Map):?>
                <?php foreach($BuyerID as $Row_BuyerID):?>
                <?php if($Row_BuyerID->id == $Row_Buyer_Map->BuyerID){ ?>
                 <tr>
                     <td><?= $i?></td>
                     <td><img   src="<?= base_url();?>/assets/Meeting/Buyer_logo/<?= $Row_BuyerID->logo ?>" style="width: 68px;box-shadow: 0px 1px 8px 4px #c1bbbb;"></td>
                     <td><?= $Row_BuyerID->name ?></td>
                     <td><?= $Row_BuyerID->your_company_name ?></td>
                     <td><?= $Row_BuyerID->nature_of_business ?></td>
                     
                     <td><?= $Row_BuyerID->business_category ?></td>
                     <td><?= $Row_BuyerID->mobile_number?></td>
                     <td><?= $Row_Buyer_Map->Time_Slot?></td>
                     
                </tr>
                <?php $i++; }; endforeach; ?>
                <?php endforeach; ?>
             </tbody>
         </table>
         
         </div>
         
         
   <script>
    jQuery(document).ready(function ($) {
   $('#dataTable').DataTable();
    });
    </script>
    
  <script>
    $(document).ready(function() {
        $('.Meeting-Download-btbn').click(function() {
            downloadTable();
        });

        function downloadTable() {
            var table = document.getElementById('dataTable');
            var rows = table.getElementsByTagName('tr');
            var csvContent = [];

            for (var i = 0; i < rows.length; i++) {
                var row = [],
                    cols = rows[i].querySelectorAll('td, th');

                for (var j = 0; j < cols.length; j++) {
                    row.push(cols[j].innerText.trim());
                }

                csvContent.push(row.join(','));
            }

            var csvBlob = new Blob([csvContent.join('\n')], { type: 'text/csv;charset=utf-8' });
            saveAs(csvBlob, 'meeting_data.csv');
        }

        function saveAs(blob, filename) {
            var link = document.createElement('a');
            link.href = URL.createObjectURL(blob);
            link.download = filename;

            document.body.appendChild(link);

            link.click();

            document.body.removeChild(link);
        }
    });
</script>        

<!--<button type="button" class="Meeting-Download-btbn btn btn-success"><i class="download-iconn fas fa-download action-icons" title="Download"></i> Meeting Download</button>-->

