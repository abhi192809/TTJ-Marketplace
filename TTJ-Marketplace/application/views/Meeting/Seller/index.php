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
        background-color: #1c1c1c; /* Black background */
        padding: 14px 10px 3px 10px;
        line-height: 22px;
        border-radius: 10px;
        text-align: center;
    }
    .section1 {
        background-color:#3abaf4; /* Black background */
        padding: 14px 10px 3px 10px;
        line-height: 22px;
        border-radius: 10px;
        text-align: center;
    }
    .section2 {
        background-color: #66bb6a; /* Black background */
        padding: 14px 10px 3px 10px;
        line-height: 22px;
        border-radius: 10px;
        text-align: center;
    }
    .section3 {
        background-color: #fc544b; /* Black background */
        padding: 14px 10px 3px 10px;
        line-height: 22px;
        border-radius: 10px;
        text-align: center;
    }


    .section4 {
        background-color: #bd007a; /* Black background */
        padding: 14px 10px 3px 10px;
        line-height: 22px;
        border-radius: 10px;
        text-align: center;
    }
    
    .section5 {
        background-color: #548969; /* Black background */
        padding: 14px 10px 3px 10px;
        line-height: 22px;
        border-radius: 10px;
        text-align: center;
    }
    
    .section6 {
        background-color: #775489; /* Black background */
        padding: 14px 10px 3px 10px;
        line-height: 22px;
        border-radius: 10px;
        text-align: center;
    }


    h2 {
        margin-bottom: 10px;
         color: #ffffff; /* White text */
         font-size: 21px;
    }
    
    .section1, .section2, .section3, .section4, .section5, .section6, .section7, .section8 {
     margin-top: 10px;
     }

    p {
        color: #ffffff; /* White text */
    }
    
    @media only screen and (max-width: 600px) {
    .section1, .section2, .section3, .section4, .section5, .section6, .section7, .section8 {
    margin-bottom: 10px;
   }
  }
</style>

    <div class="dashboard1">
        
        <div class="container-fluid">
            <h6>Total Event </h2>
        <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12"> 
        <div class="section2">
            <h2> Event </h2>
            <p id="sellerCount">10</p>
        </div>
        </div>
        
       <div class="col-lg-3 col-md-6 col-sm-6 col-12"> 
        <div class="section3">
            <h2>Travemart Meeting</h2>
            <p id="eventsDone">400</p>
        </div>
        </div>
        
       <div class="col-lg-3 col-md-6 col-sm-6 col-12"> 
        <div class="section4">
            <h2> Lead</h2>
            <p id="activeEvents">1000</p>
        </div>
        </div>
      

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">     
        <div class="section5">
            <h2>Virtual Networking </h2>
            <p id="buyerCount">5</p>
        </div>
       </div>
       </div>
       <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
           <h6 class="my-3">Active Event</h6>
          </div>   
              <div class="col-lg-3 col-md-3 col-sm-3 col-12">
            <div class="section5">
            <h2> Event </h2>
            <p id="buyerCount">Raipur</p>
           </div>
          </div>   
           
           
        <div class="col-lg-3 col-md-6 col-sm-6 col-12"> 
        <div class="section6">
            <h2>Meeting Scheduling </h2>
            <p id="sellerCount">20</p>
        </div>
        </div>
    
       </DIV>
      </div>
    </div>
    
    
    <hr>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                 <h4 class="pb-3 fw-5"> All Event</h4>
                 <table class="table table-bordered table-striped text-center">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th>ID</th>
                            <th>Event Name</th>
                            <th>Place</th>
                            <th>Location</th>
                            <th>Fresh Meeting</th>
                            <th>View Buyer Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Sample data, replace with actual data -->
                         <tr>
                            <td>1</td>
                            <td>Event A</td>
                            <td>Location A</td>
                            <td>Place A</td>
                            <td><a href="<?= base_url();?>Meeting/Selleruser/Meeting/Meeting_already_ragister"><i class="fas fa-calendar-alt"></i><a/></td>
                            <td><a href="<?= base_url();?>Meeting/Selleruser/bookmeeting/Book_your_meeting_with_buyer"> <i class="fas fa-eye"></i><a/></td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>




    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                 <h4 class="pb-3 fw-5"> Upcoming Event</h4>
                 <table class="table table-bordered table-striped text-center">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th>ID</th>
                            <th>Event Name</th>
                            <th>Place</th>
                            <th>Location</th>
                            <th>Fresh Meeting</th>
                            <th>View Buyer Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Sample data, replace with actual data -->
                         <tr>
                            <td>1</td>
                            <td>Event A</td>
                            <td>Location A</td>
                            <td>Place A</td>
                            <td><a href="<?= base_url();?>Meeting/Selleruser/Meeting/Meeting_already_ragister"><i class="fas fa-calendar-alt"></i><a/></td>
                            <td><a href="<?= base_url();?>Meeting/Selleruser/bookmeeting/Book_your_meeting_with_buyer"> <i class="fas fa-eye"></i><a/></td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    