<style type="text/css">
.event-detailss h2{
 padding-bottom: 15px;
 font-size: 25px;
 font-weight: 600;
}

.body-bg-color h4 {
    padding-bottom: 6px;
    font-size: 21px;
}

.event-detailss{
 box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
  padding: 10px;
 }

.event-detailss-list li {
  padding: 6px 0px 6px 0px !important;
 font-size: 15px;
 padding-bottom: 12px !important;
 font-weight: 300;
 color: #191919;
}
.event-detailss img{
  padding: 10px;
  width: 100%;
  height: 327px;
}
.card-body1 {
    padding: 15px;
    background-color: transparent;
}
.card-body1 a{
  margin: 0px 0px 15px 0px;
  padding: 2px;
}

.margtoppp-data-form{
  margin-top: 20px;
}

.margtoppp-data-form i{
  margin: 5px;
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
      background-color: #ca2327;
      color: #fff;
    }
  .event-detailss a{
      text-decoration: none;
      color:#5e5e5e;
      font-size: 16px;
  }
  .text-white-50555 i{
      color: #fff;
  }
</style>


<section class="body-bg-color">
<div class="container-fluid">
 <h4 class="mb-4">Active Event </h4>
 <div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12 col-12">
  <div class="event-detailss">
   <img src="https://tiimg.tistatic.com/fp/1/003/757/babylon-capital-commercial-offices-701.jpg" width="100%"> 
</div>
</div> 

<!-------------1st--col----end------------>

 <div class="col-lg-6">
    <div class="card-body1">
     
      <div class="my-2"></div>
      <a href="#" class="btn btn-danger btn-icon-split">
        <span class="icon text-white-50">
          <i class="fas fa-map-marker-alt"></i>
        </span>
        <span class="text"> users on map</span>
      </a>
      <div class="my-2"></div>
      <a href="#" class="btn btn-success btn-icon-split">
        <span class="icon text-white-50">
          <i class="fas fa-eye"></i>
        </span>
        <span class="text">View</span>
      </a>
     
      
    <div class="my-2"></div>
      <a href="#" class="btn btn-warning btn-icon-split">
        <span class="icon text-white-50">
          <i class="fas fa-store"></i> 
        </span>
        <span class="text">Seller</span>
      </a>
      
    <div class="my-2"></div>
      <a href="#" class="btn btn-warning btn-icon-split">
        <span class="icon text-white-50">
          <i class="fas fa-user"></i>
        </span>
        <span class="text">Buyer</span>
      </a>
      
      
    </div>
  </div>
  </div>
<!--------1st---row---end------------>

 <div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-12">
  <div class="event-detailss">
    <div class="margtoppp-data-form card">
      <div class="table-responsive card-body">
        <table class="table" id="dataTable">
        <thead>
        <tr>
          <th>Event Name</th>
           <th>Location</th>
          <th>Year</th>
          <th>Operation</th>
        </tr>
        </thead>
        <tbody>
        <!-- Display first 5 entries with images -->
        <tr>
          <td>Pune</td>
          <td>Pune</td>
          <td>2023</td>
          <td><a href="<?php echo base_url();?>Meeting/Admin/Filter_event" contenteditable="false" style="cursor: pointer;" class="text-white-50555 btn btn-secondary"> <i class="fas fa-eye"></i></a>
          </td>
        </tr>
        
       
    
        <!-- Add more rows as needed -->
        </tbody>
      </table>

      <!------------pagination----start------->
     <!------------pagination----start---end--->


    </div>
  </div>

 </div>
</div>
</div>



</div>
</section>
