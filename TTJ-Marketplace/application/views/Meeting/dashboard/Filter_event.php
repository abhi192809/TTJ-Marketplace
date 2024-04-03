
 <style>
  .calendar {
    max-width: 400px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  .month {
    background-color: #007bff;
    color: #fff;
    padding: 10px 0;
    text-align: center;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
  }
  .weekdays {
    display: flex;
    justify-content: space-between;
    background-color: #f2f2f2;
    padding: 10px;
    border-bottom: 1px solid #ddd;
  }
  .weekdays span {
    width: calc(100% / 7);
    text-align: center;
    color: #666;
  }
  .days {
    display: flex;
    flex-wrap: wrap;
    padding: 10px;
  }
  .day {
    width: calc(100% / 7);
    padding: 10px 0;
    text-align: center;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  .day:hover {
    background-color: #f2f2f2;
  }
  .today {
    background-color: #dc3545;
    color: #fff;
  }
</style> 


<div class="container-fluid">
    <div class="row">
        <div class="col-md-4" style="align-items: center;box-shadow: -2px 2px 12px 0px #e1d9d9;padding: 20px;" >
            <div class="row">
                <div class="col-md-12">
                    <img src="https://picsum.photos/150/150?random" width="100%" height="200px" style="
        width: 100%;
        height: 183px;
        border-radius: 11px;
    ">

                </div>
                <div class="col-md-12 mt-2">
                    <h3 style="font-size:21px; font-weight:600">Pune 2023</h3>
                    <div class="row mb-2">
                        <div class="col-md-7 text-left">
                            Event
                        </div>
                        <div class="col-md-5 text-left">
                            Pune
                        </div>
                    </div>
                    
                   <div class="row">
                        <div class="col-md-7 text-left">
                            Year 
                        </div>
                         <div class="col-md-5 text-left">
                           2023
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>
          <hr>
         <!----------om---new---calender--add----strat------->
          
<div class="calendar"></div>

<script>
  function createCalendar(month, year) {
    const calendarElement = document.querySelector('.calendar');
    const daysInMonth = new Date(year, month + 1, 0).getDate();
    const firstDayOfMonth = new Date(year, month, 1).getDay();
    const today = new Date();

    const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

    let html = `
      <div class="month">${monthNames[month]} ${year}</div>
      <div class="weekdays">
        <span>Sun</span>
        <span>Mon</span>
        <span>Tue</span>
        <span>Wed</span>
        <span>Thu</span>
        <span>Fri</span>
        <span>Sat</span>
      </div>
      <div class="days">
    `;

    for (let i = 0; i < firstDayOfMonth; i++) {
      html += `<div class="day"></div>`;
    }

    for (let i = 1; i <= daysInMonth; i++) {
      if (year === today.getFullYear() && month === today.getMonth() && i === today.getDate()) {
        html += `<div class="day today">${i}</div>`;
      } else {
        html += `<div class="day">${i}</div>`;
      }
    }

    html += `</div>`;
    calendarElement.innerHTML = html;
  }

  const currentDate = new Date();
  createCalendar(currentDate.getMonth(), currentDate.getFullYear());
</script>
           
         
      <!----------om---new---calender--add----end------->
            
        </div>
        
        <div class="col-md-8" style="overflow-y: auto;height: 640px;">
           <div class="row" style="box-shadow: -2px 2px 12px 0px #e1d9d9;padding: 20px;">
            <div style="padding-bottom: 25px;">   
            <h4 style=" font-weight: 700; text-align: center; font-size: 28px"> 
            Event 
            <span style="color:red">
            Overview
                
            </span>
            </h4>
            </div> 
             <div class="col-md-12" >
                  
                   <p class="pt-2 py-1">Location </p> <span class="text-danger h5">Babylon Capital, Raipur VIP Chowk, G.E. Rd, Raipur, Chhattisgarh</span><br>
                   
                    <a href="#" class="btn btn-primary btn-icon-split mt-4" >
                    <span class="icon text-white-50">
                      <i class="fas fa-flag"></i>
                    </span>
                    <span class="text">No. of user regi</span>
                  </a> 
              </div>
                
            <div class="col-md-12">
                   <p class="pt-2 py-1 mt-2">Number of Seller </p> <span class="text-danger h5">200</span><br>
                    <a href="#" class="btn btn-success btn-icon-split mt-4" >
                    <span class="icon text-white-50">
                      <i class="fas fa-flag"></i>
                    </span>
                    <span class="text">No. of Seller view</span>
                  </a> 
                   
            </div>
            
            <div class="col-md-12">
                   <p class="pt-2 py-1">Number Of Buyer</p><span class="text-danger h5">200</span><br>
                    <a href="#" class="btn btn-warning btn-icon-split mt-4" >
                    <span class="icon text-white-50">
                      <i class="fas fa-flag"></i>
                    </span>
                    <span class="text">View</span>
                  </a>
             </div>

            <div class="col-md-12">
              <p class="pt-2 py-1">Number of Meeting</p><span class="text-danger h5">200</span><br>
                <a href="#" class="btn btn-danger btn-icon-split mt-4" >
                    <span class="icon text-white-50">
                      <i class="fas fa-flag"></i>
                    </span>
                    <span class="text">View Meeting</span>
                  </a>   
                   
            </div>
            
         
            
            </div>
        
        <!-----------om---new---row----add------------>
         <!--<div class="row">-->
         <!--    <div class="col-lg-12 col-md-12 col-sm-12 col-12">-->
         <!--        <div class="">-->
         <!--          <a href="#" class="btn btn-primary btn-icon-split mt-4" >-->
         <!--           <span class="icon text-white-50">-->
         <!--             <i class="fas fa-flag"></i>-->
         <!--           </span>-->
         <!--           <span class="text">No. of user regi</span>-->
         <!--         </a> -->
                  
         <!--          <a href="#" class="btn btn-success btn-icon-split mt-4" >-->
         <!--           <span class="icon text-white-50">-->
         <!--             <i class="fas fa-flag"></i>-->
         <!--           </span>-->
         <!--           <span class="text">No. of users on map</span>-->
         <!--         </a>   -->
                  
         <!--          <a href="#" class="btn btn-warning btn-icon-split mt-4" >-->
         <!--           <span class="icon text-white-50">-->
         <!--             <i class="fas fa-flag"></i>-->
         <!--           </span>-->
         <!--           <span class="text">View</span>-->
         <!--         </a>   -->
                  
         <!--          <a href="#" class="btn btn-danger btn-icon-split mt-4" >-->
         <!--           <span class="icon text-white-50">-->
         <!--             <i class="fas fa-flag"></i>-->
         <!--           </span>-->
         <!--           <span class="text">Seller</span>-->
         <!--         </a>  -->
                  
         <!--          <a href="#" class="btn btn-secondary btn-icon-split mt-4" >-->
         <!--           <span class="icon text-white-50">-->
         <!--             <i class="fas fa-flag"></i>-->
         <!--           </span>-->
         <!--           <span class="text">Buyer</span>-->
         <!--         </a>   -->
                     
         <!--        </div>-->
         <!--        </div>-->
         <!--    </div>-->
         </div>
         
         </div>  <!-------col-888---end------>
         
        <!--------om----new----row-----end------------>
    </div>
</div>