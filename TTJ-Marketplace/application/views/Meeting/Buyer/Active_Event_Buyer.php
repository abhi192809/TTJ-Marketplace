<style type="text/css">
   .active-eventt{
    padding: 10px 0px 10px 0px !important;
   } 
   .active-event-social li{
    padding: 0px 15px 0px 0px;
    font-size: 20px;
   }
  .active-event-social li a i{
    color: #322e2e;
   }
   .active-event-heading{
    color: #ee362c;
    font-size: 20px;
    border-bottom: 1px solid #ddd;
    padding-bottom: 10px;
   }

   .table-dark {
    color: #fff;
    background-color: #231e1e;
    }
    .table thead th{
     font-size: 17px;
    }

    .table-dark td {
    border-color: #6c6e7e;
    font-size: 14px;
   }

    .btn-danger {
    color: #fff;
    background-color: #ee362c;
    border-color: #ee362c;
    -webkit-box-shadow: 0 .125rem .25rem 0 rgba(58,59,69,.2)!important;
    box-shadow: 0 .125rem .25rem 0 rgba(58,59,69,.2)!important;
    border-radius: 0.25rem;
}
</style>

<div class="container mt-3">
    <div class="row">
        <div class="col-md-6 text-justify">
           <h4 class="active-event-heading"><strong>Event Details</strong></h4> 
            <p>
                Join us for an exciting event filled with Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Architecto,
                cupiditate placeat! Aut quae mollitia quam corrupti quas veniam obcaecati! Doloribus assumenda
                blanditiis minima
                deserunt aliquid veniam soluta natus harum necessitatibus illum totam fugit cumque reiciendis enim aut
                dolor
                voluptatum non repellendus rerum, quia modi.
            </p><hr>

          <!--   <p class="active-eventtt">
                <strong class="active-eventt">Event Name:</strong> <span id="eventName"></span><br><hr>
                <strong class="active-eventt">Days:</strong> <span id="eventDays"></span><br><hr>
                <strong class="active-eventt">Event Location:</strong> <span id="eventLocation"></span><hr>
            </p> -->
             
         <h4 class="active-event-heading"><strong>Event Name</strong></h4>
         <table class="table table-dark table-bordered">
             <thead>
            <tr>
              <th id="eventName" scope="col">Event Name</th>
              <th id="eventDays" scope="col">Days</th>
              <th id="eventLocation" scope="col">Event Location</th>
            </tr>
            </thead>
           <tbody>
           <tr>
             <td>XYZ</td>
             <td>22/10/2024</td>
             <td>Noida</td>
            </tr>
          
          </tbody>
         </table> 
          <hr>

            <!-- Add more event-related data as needed -->

            <!-- Contact Information -->
            <h4 class="active-event-heading"><strong>Contact Information</strong></h4><br>
           <!--  <ul class="list-unstyled">
                <li>
                    <strong>Number:</strong>
                    <span id="eventNumber"></span>
                </li>
                <hr>
                <li>
                    <strong>Email:</strong>
                    <span id="eventEmail"></span>
                </li><hr>
            </ul> -->

          <table class="table table-dark table-bordered">
             <thead>
            <tr>
              <th id="eventNumber" scope="col">Number</th>
              <th id="eventEmail" scope="col">Email</th>
            </tr>
            </thead>
           <tbody>
           <tr>
             <td>123456789</td>
             <td>xyz@gmai.com</td>
            </tr>
          
          </tbody>
         </table> 
          <hr>

            <!-- Social Media Links -->
            <h4 class="active-event-heading"><strong>Follow Us on Social Media</strong></h4>
            <ul class="active-event-social list-unstyled d-flex mt-3">
                <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <!-- Add more social media icons as needed -->
            </ul>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <img src="https://tiimg.tistatic.com/fp/1/003/757/babylon-capital-commercial-offices-701.jpg"
                        alt="Clicked Image" class="img-fluid img-thumbnail mb-2 mt-2" id="modalEventImage">
                   
                 
                </div>
            </div>
            <br>
            <button class="btn btn-danger form-control"> Register Know</button>
        </div>