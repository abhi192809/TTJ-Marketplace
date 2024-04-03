
<div class="text-center mt-4">
  <div class="site-heading text-center">
     <h2>Event <span> - 2024 </span></h2>
                
    </div>
</div>

  
  <section>
     <div class="container">
     <div class="row ">
         <div class="col-md-12 ">
            <br class="d-md-block d-none">
            <br class="col-md-block d-none">
            </div>
                <div class="col">
                <div class="make_show">
                    <picture>
                        <source srcset="https://www.ttjtravmart.com/assets/image/RAIPUR.webp" type="image/png">
                        <img loading="lazy" src="https://www.ttjtravmart.com/assets/image/RAIPUR.webp" alt="RAIPUR.webp" width="100%">
                    </picture>
                    <div style="padding-left: 38px; padding-top: 12px; padding-bottom: 10px;">16th MARCH</div>
                 
                   <a href="#" contenteditable="false" style="cursor: pointer;" data-toggle="modal"
                    data-target="#exampleModalScrollable" id="#modalScroll">
                    <div class="text-center"><button class="btn btn-danger">Register Now</button></div>
                    </a>
                   
                </div>
            </div>
            
            
            
                   <div class="col">
                <div class="make_show">
                    <picture>
                        <source srcset="https://www.ttjtravmart.com/assets/image/LUCKNOW.webp" type="image/png">
                        <img loading="lazy" src="https://www.ttjtravmart.com/assets/image/LUCKNOW.webp" alt="LUCKNOW.webp" width="100%">
                    </picture>
                    <div style="padding-left: 38px; padding-top: 12px; padding-bottom: 10px;">12/13 APRIL</div>
                    
                 <a href="#" contenteditable="false" style="cursor: pointer;" data-toggle="modal"
                    data-target="#exampleModalScrollable" id="#modalScroll">
                    <div class="text-center"><button class="btn btn-danger">Register Now</button></div>
                    </a>
                    
                </div>
            </div>
            
            
                 <div class="col">
                <div class="make_show">
                    <picture>
                        <source srcset="https://www.ttjtravmart.com/assets/image/SITM.webp" type="image/png">
                        <img loading="lazy" src="https://www.ttjtravmart.com/assets/image/SITM.webp" alt="SITM.webp" width="100%">
                    </picture>
                    <div style="padding-left: 38px; padding-top: 12px; padding-bottom: 10px;">28-30 JUNE</div>
                
                 <a href="#" contenteditable="false" style="cursor: pointer;" data-toggle="modal"
                    data-target="#exampleModalScrollable" id="#modalScroll">
                    <div class="text-center"><button class="btn btn-danger">Register Now</button></div>
                    </a>
                    
                </div>
            </div>
            
            
           <div class="col">
                <div class="make_show">
                    <picture>
                        <source srcset="https://www.ttjtravmart.com/assets/image/EITM.webp" type="image/png">
                        <img loading="lazy" src="https://www.ttjtravmart.com/assets/image/EITM.webp" alt="EITM.webp" width="100%">
                    </picture>
                    <div style="padding-left: 38px; padding-top: 12px; padding-bottom: 10px;">20-22 SEP</div>

                 <a href="#" contenteditable="false" style="cursor: pointer;" data-toggle="modal"
                    data-target="#exampleModalScrollable" id="#modalScroll">
                    <div class="text-center"><button class="btn btn-danger">Register Now</button></div>
                    </a>
                    
                </div>
            </div>
            
            
            
           <div class="col">
                <div class="make_show">
                    <picture>
                        <source srcset="https://www.ttjtravmart.com/assets/image/bhopalindore.webp" type="image/png">
                        <img loading="lazy" src="https://www.ttjtravmart.com/assets/image/bhopalindore.webp" alt="bhopalindore.webp" width="100%">
                    </picture>
                    <div style="padding-left: 38px; padding-top: 12px; padding-bottom: 10px;">12/13 JULY</div>
                    
                    
                 <a href="#" contenteditable="false" style="cursor: pointer;" data-toggle="modal"
                    data-target="#exampleModalScrollable" id="#modalScroll">
                    <div class="text-center"><button class="btn btn-danger">Register Now</button></div>
                    </a>
                    
                    
                </div>
            </div>
          
     </div>
     </div>
</section>

 <!--------om-----new---popup---------->
    
  <!-- Modal Scrollable -->
          <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel">Event Details</h5>
                  <button type="button" class="close modal-close-btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="https://tiimg.tistatic.com/fp/1/003/757/babylon-capital-commercial-offices-701.jpg" alt="Clicked Image" class="img-fluid mb-2" id="modalEventImage">
                <p><b>Event Name:</b> <span id="eventName"></span></p>
                <p><b>Days:</b> <span id="eventDays"></span></p>
                <p><b>Event Location:</b> <span id="eventLocation"></span></p>
                <p>For any help, contact us:</p>
                <p><b>Number:</b> <span id="eventNumber"></span></p>
                <p><b>Email:</b> <span id="eventEmail"></span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
          
  <!-------om---new--popup--end----------->


<script>
    // Add this script after including jQuery and Bootstrap scripts
    $(document).ready(function () {
        // Show the modal when needed
        $(".close").click(function(){
           $('model').css('display','none');  
        })
    });
</script>


<script>
    $(document).ready(function () {
        // Define event details
        var eventDetails = {
            "event1": {
                "imageSrc": "https://tiimg.tistatic.com/fp/1/003/757/babylon-capital-commercial-offices-701.jpg",
                "eventName": "Event 1",
                "eventDays": "2 Day Event",
                "eventLocation": "Event Location 1",
                "eventNumber": "9999999",
                "eventEmail": "demo1@gmail.com"
            },
            "event2": {
                "imageSrc": "https://example.com/image2.jpg",
                "eventName": "Event 2",
                "eventDays": "3 Day Event",
                "eventLocation": "Event Location 2",
                "eventNumber": "8888888",
                "eventEmail": "demo2@gmail.com"
            }
            // Add more events as needed
        };

        // Handle click on images with class "image-popup"
        $(".image-popup").click(function () {
            var eventId = $(this).data("event-id");
            var clickedEvent = eventDetails[eventId];

            // Update modal content
            $("#modalEventImage").attr("src", clickedEvent.imageSrc);
            $("#eventName").text(clickedEvent.eventName);
            $("#eventDays").text(clickedEvent.eventDays);
            $("#eventLocation").text(clickedEvent.eventLocation);
            $("#eventNumber").text(clickedEvent.eventNumber);
            $("#eventEmail").text(clickedEvent.eventEmail);

            // Show the modal
            $("#imageModal").modal('show');
        });
    });
</script>

</body>
</html>
