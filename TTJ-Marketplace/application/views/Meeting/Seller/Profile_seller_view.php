 
  <style>


* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
.bg-dark {
    background-color: #040404!important;
}

.nav ul {
    display: flex;
    justify-content: space-around;
    list-style-type: none;
    height: 40px;
    background: #d41d21 !important;
    box-shadow: 0px 2px 5px rgb(0 0 0 / 30%);
    color: #fff;
    /* margin-left: 27px; */
    width: 100%;
}

.nav ul li.active {
    box-shadow: 0px -3px 0px rgb(255 255 255) inset !important;
}

.profile-header {
  background: #fff;
  width: 100%;
  display: flex;
  height: 190px;
  position: relative;
}

.profile-img {
  float: left;
  width: 340px;
  height: 200px;
  
}

.profile-img img {
  border-radius: 50%;
  height: 230px;
  width: 230px;
  border: 5px solid #fff;
  box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
  left: 50px;
  top: 20px;
  z-index: 5;
  background: #fff;
  padding: 34px;
}

.profile-nav-info {
  float: left;
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding-top: 60px;
}

.profile-nav-info h3 {
  font-variant: small-caps;
  font-size: 2rem;
  font-family: sans-serif;
  font-weight: bold;
}
.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 7px);
    padding: 0.375rem 0.75rem;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.5;
    color: #807171;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #d3d4d5;
    border-radius: 0.25rem;
    -webkit-transition: border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
}

.pb-3, .py-3 {
    padding-bottom: 1rem!important;
    text-align: left;
}

.profile-nav-info .address {
  display: flex;
  font-weight: bold;
  color: #777;
}

.profile-nav-info .address p {
  margin-right: 5px;
}

.profile-option {
  width: 40px;
  height: 40px;
  position: absolute;
  right: 50px;
  top: 50%;
  transform: translateY(-50%);
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;
  transition: all 0.5s ease-in-out;
  outline: none;
  background: #e40046;
}

.profile-option:hover {
  background: #fff;
  border: 1px solid #e40046;
}
.profile-option:hover .notification i {
  color: #e40046;
}

.profile-option:hover span {
  background: #e40046;
}

.profile-option .notification i {
  color: #fff;
  font-size: 1.2rem;
  transition: all 0.5s ease-in-out;
}

.profile-option .notification .alert-message {
  position: absolute;
  top: -5px;
  right: -5px;
  background: #fff;
  color: #e40046;
  border: 1px solid #e40046;
  padding: 5px;
  border-radius: 50%;
  height: 20px;
  width: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 0.8rem;
  font-weight: bold;
}

.main-bd {
  width: 100%;
  display: flex;
  padding-right: 15px;
}

.nav ul li {
    padding: 5px 25px 5px 25px;
}
.profile-side {
  width: 300px;
  background: #fff;
  box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
  padding: 26px 30px 20px;
  font-family: "Bree Serif", serif;
  margin-left: 1px;
  z-index: 99;
  margin-top:49px;
}

.profile-side p {
  margin-bottom: 7px;
  color: #333;
  font-size: 14px;
}

.profile-side p i {
  color: #ec1e16;
  margin-right: 10px;
}

.mobile-no i {
  transform: rotateY(180deg);
  color: #e40046;
}

.profile-btn {
  display: flex;
}

button.chatbtn,
button.createbtn {
  border: 0;
  padding: 10px;
  width: 100%;
  border-radius: 3px;
  background: #040404;
  color: #fff;
  font-family: "Bree Serif";
  font-size: 1rem;
  margin: 5px 2px;
  cursor: pointer;
  outline: none;
  margin-bottom: 10px;
  transition: background 0.3s ease-in-out;
  box-shadow: 0px 5px 7px 0px rgba(0, 0, 0, 0.3);
}

button.chatbtn:hover,
button.createbtn:hover {
  background: rgba(288, 0, 70, 0.9);
}

button.chatbtn i,
button.createbtn i {
  margin-right: 5px;
}

.user-rating {
  display: flex;
}

.user-rating h3 {
  font-size: 2.5rem;
  font-weight: 200;
  margin-right: 5px;
  letter-spacing: 1px;
  color: #666;
}

.user-rating .no-of-user-rate {
  font-size: 0.9rem;
}

.rate {
  padding-top: 6px;
}

.rate i {
  font-size: 0.9rem;
  color: rgb(236 30 22);
}

.nav {
  width: 100%;
  z-index: -1;
}

.nav ul {
  display: flex;
  justify-content: space-around;
  list-style-type: none;
  height: 40px;
  background: #fff;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
}


.nav ul li:hover,
.nav ul li.active {
  box-shadow: 0px -3px 0px rgba(288, 0, 70, 0.9) inset;
}

.profile-body {
  width: 100%;
  z-index: -1;
}

.tab {
  display: none;
}

.tab {
  padding: 3px;
  width: 100%;
  text-align: center;
}

@media (max-width: 1100px) {
  .profile-side {
    width: 250px;
    padding: 90px 15px 20px;
  }

  .profile-img img {
    height: 200px;
    width: 200px;
    left: 50px;
    top: 50px;
  }
}

@media (max-width: 900px) {
  body {
    margin: 0 20px;
  }

  .profile-header {
    display: flex;
    height: 100%;
    flex-direction: column;
    text-align: center;
    padding-bottom: 20px;
  }

  .profile-img {
    float: left;
    width: 100%;
    height: 200px;
  }

  .profile-img img {
    position: relative;
    height: 200px;
    width: 200px;
    left: 0px;
  }

  .profile-nav-info {
    text-align: center;
  }

  .profile-option {
    right: 20px;
    top: 75%;
    transform: translateY(50%);
  }

  .main-bd {
    flex-direction: column;
    padding-right: 0;
  }

  .profile-side {
    width: 100%;
    text-align: center;
    padding: 20px;
    margin: 5px 0;
  }

  .profile-nav-info .address {
    justify-content: center;
  }

  .user-rating {
    justify-content: center;
  }
}

@media (max-width: 400px) {
  body {
    margin: ;
  }

  .profile-header h3 {
  }

  .profile-option {
    width: 30px;
    height: 30px;
    position: absolute;
    right: 15px;
    top: 83%;
  }

  .profile-option .notification .alert-message {
    top: -3px;
    right: -4px;
    padding: 4px;
    height: 15px;
    width: 15px;
    font-size: 0.7rem;
  }

  .profile-nav-info h3 {
    font-size: 1.9rem;
  }

  .profile-nav-info .address p,
  .profile-nav-info .address span {
    font-size: 0.7rem;
  }
}
#see-more-bio,
#see-less-bio {
  color: blue;
  cursor: pointer;
  text-transform: lowercase;
}
.tab h1 {
  font-family: "Bree Serif", sans-serif;
  display: flex;
  justify-content: center;
  margin: 20px auto;
}

.right-side{
    margin-top:45px;
    border: 1px solid #ddd;
    padding: 13px;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}

  </style>

<div class="container">
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-4 col-12"> 
  <div class="profile-header">
    <div class="profile-img">
      <img src="https://tse3.mm.bing.net/th?id=OIP.2LIJytjEwCo_dYKrZnLSRgHaHX&pid=Api&P=0&h=220" width="200" alt="Profile Image">
    </div>
  </div>
   <!-----row----new--start------>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12">
          <div class="main-bd">
    <div class="left-side">
      <div class="profile-side">
                  <!-- Assuming you are using Font Awesome 5 -->
        <p class="user-mail m-2"><i class="fas fa-envelope"></i> www.abc.com</p>
        
        <p class="user-mail m-2"><i class="fas fa-building"></i> ABC Corporation</p>
        <p class="user-mail m-2"><i class="fas fa-user"></i> John Doe</p>
        
        <p class="mobile-no m-2"><i class="fas fa-phone"></i> +23470xxxxx700</p>
        <p class="user-mail m-2"><i class="fas fa-envelope"></i> john.doe@example.com</p>
        
        <p class="user-mail m-2"><i class="fas fa-map-marker"></i> New York</p>
        
        <p class="user-mail m-2"><i class="fas fa-map-marker"></i> 12345</p>
        <p class="user-mail m-2"><i class="fas fa-check-circle"></i> GSTIN123456789</p>
      </div>

    </div>
    
  </div>
      </div>   
        
    </div>
   
  </div> 
  
  <div class="col-lg-8 col-md-8 col-sm-4 col-12">
      <div class="right-side">
      <div class="nav">
        <ul>
          <li onclick="tabs(0)" class="user-post active">Lead</li>
          <li onclick="tabs(1)" class="user-review">Pending Lead </li>
          <li onclick="tabs(2)" class="user-setting"> Last Event</li>
          <li onclick="tabs(3)" class="user-meeting"> All Meeting</li>
          <li onclick="tabs(4)" class="user-profile"> Edit Profile</li>
        </ul>
      </div>
      <div class="profile-body">
        <div class="profile-posts tab">
         <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                 <h4 class="pb-3 fw-5"> Lead </h4>
                 <table class="table table-bordered table-striped text-center">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th>ID</th>
                            <th>Number of  lead </th>
                            <th>View Lead Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Sample data, replace with actual data -->
                         <tr>
                            <td>1</td>
                            <td>Event A</td>
                            <td class="old-eventbtnnn"><a href="<?php echo base_url();?>Meeting/Selleruser/Lead/lead_seller_data" class="event-details-button btn-secondary btn-icon-split" onclick="showAllSellerDataseller1()" contenteditable="false" style="cursor: pointer;"> <span class="icon"> <i class="fas fa-eye"></i></span> </a> 
                            </td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
         
         
         </div>
        <div class="profile-reviews tab">
         <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                 <h4 class="pb-3 fw-5"> Pending Leaves</h4>
                         <table class="table table-bordered table-striped text-center">
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th>ID</th>
                                    <th>Lead are in panding</th>
                                    <th>View  Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Sample data, replace with actual data -->
                                 <tr>
                                    <td>1</td>
                                    <td>Event A</td>
                                    <td class="old-eventbtnnn"><a href="<?php echo base_url();?>Meeting/Selleruser/Lead/lead_seller_data" class="event-details-button btn-secondary btn-icon-split" onclick="showAllSellerDataseller1()" contenteditable="false" style="cursor: pointer;"> <span class="icon"> <i class="fas fa-eye"></i></span> </a> 
                                    </td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
          
        </div>
        
        <div class="profile-settings tab">
          <div class="account-setting">
              <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                         <h4 class="pb-3 fw-5"> Last Event </h4>
                         <table class="table table-bordered table-striped text-center">
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th>ID</th>
                                    <th>Event Name </th>
                                     <th>View  Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Sample data, replace with actual data -->
                                 <tr>
                                    <td>1</td>
                                    <td>Event A</td>
                                    <td class="old-eventbtnnn"><a href="<?php echo base_url();?>Meeting/Admin/Event/ActiveEvent" class="event-details-button btn-secondary btn-icon-split" onclick="showAllSellerDataseller1()" contenteditable="false" style="cursor: pointer;"> <span class="icon"> <i class="fas fa-eye"></i></span> </a> 
                                    </td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
                 
          </div>
        </div>
        
         <div class="profile-meeting tab">
          <div class="account-meeting">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                         <h4 class="pb-3 fw-5"> Lead </h4>
                         <table class="table table-bordered table-striped text-center">
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th>ID</th>
                                    <th>Numbr of meeting </th>
                                    <th>View  Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Sample data, replace with actual data -->
                                 <tr>
                                    <td>1</td>
                                    <td>Event A</td>
                                    <td class="old-eventbtnnn"><a href="<?php echo base_url();?>Meeting/Selleruser/Lead/lead_seller_data" class="event-details-button btn-secondary btn-icon-split" onclick="showAllSellerDataseller1()" contenteditable="false" style="cursor: pointer;"> <span class="icon"> <i class="fas fa-eye"></i></span> </a> 
                                    </td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
          </div>
        </div>
        
         <div class="profile-profile tab">
          <div class="account-profile">
              <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 mb-3 d-flex align-items-center">
        <div for="gstNumber"> 
          Notes: - Add Your Place / City that you Sell
        </div>
      </div>

              <div class="row">
                <div class="col-md-12 my-2">
                  <input type="text" class="form-control" id="SellingCity1" name="sellingCity1" placeholder="Add Place / City" title="Add Place / City" required="">
                </div>
                <div class="col-md-12 my-2">
                  <input type="text" class="form-control" id="SellingCity2" name="sellingCity2" placeholder="Add Place / City" title="Add Place / City" required="">
                </div>
                <div class="col-md-12 my-2">
                  <input type="text" class="form-control" id="SellingCity3" name="sellingCity3" placeholder="Add Place / City" title="Add Place / City" required="">
                </div>
                <div class="col-md-12 my-2">
                  <input type="text" class="form-control" id="SellingCity4" name="sellingCity4" placeholder="Add Place / City" title="Add Place / City" required="">
                </div>
                <div class="col-md-12 my-2">
                  <input type="text" class="form-control" id="SellingCity5" name="sellingCity5" placeholder="Add Place / City" title="Add Place / City" required="">
                </div>
                <div class="col-md-12 my-2">
                  <input type="text" class="form-control" id="SellingCity6" name="sellingCity6" placeholder="Add Place / City" title="Add Place / City" required="">
                </div>
                <div class="col-md-12 my-2">
                  <input type="text" class="form-control" id="SellingCity7" name="sellingCity7" placeholder="Add Place / City" title="Add Place / City" required="">
                </div>
                <div class="col-md-12 my-2">
                  <input type="text" class="form-control" id="SellingCity8" name="sellingCity8" placeholder="Add Place / City" title="Add Place / City" required="">
                </div>
                <div class="col-md-12 my-2">
                  <input type="text" class="form-control" id="SellingCity9" name="sellingCity9" placeholder="Add Place / City" title="Add Place / City" required="">
                </div>
                <div class="col-md-12 my-2">
                  <input type="Submit" class="form-control btn btn-danger" >
                </div>
              </div>
                </div>
            </div>
                 
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  
 
</div>

<script>
    $(".nav ul li").click(function() {
  $(this)
    .addClass("active")
    .siblings()
    .removeClass("active");
});

const tabBtn = document.querySelectorAll(".nav ul li");
const tab = document.querySelectorAll(".tab");

function tabs(panelIndex) {
  tab.forEach(function(node) {
    node.style.display = "none";
  });
  tab[panelIndex].style.display = "block";
}
tabs(0);

let bio = document.querySelector(".bio");
const bioMore = document.querySelector("#see-more-bio");
const bioLength = bio.innerText.length;

function bioText() {
  bio.oldText = bio.innerText;

  bio.innerText = bio.innerText.substring(0, 100) + "...";
  bio.innerHTML += `<span onclick='addLength()' id='see-more-bio'>See More</span>`;
}
//        console.log(bio.innerText)

bioText();

function addLength() {
  bio.innerText = bio.oldText;
  bio.innerHTML +=
    "&nbsp;" + `<span onclick='bioText()' id='see-less-bio'>See Less</span>`;
  document.getElementById("see-less-bio").addEventListener("click", () => {
    document.getElementById("see-less-bio").style.display = "none";
  });
}
if (document.querySelector(".alert-message").innerText > 9) {
  document.querySelector(".alert-message").style.fontSize = ".7rem";
}

</script>

