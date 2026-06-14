$(document).ready(function() { 
  var id = '#dialog';
  var maskHeight = $(document).height();
  var maskWidth = $(window).width();
  $('#mask').css({'width':maskWidth,'height':maskHeight}); 
  $('#mask').fadeIn(500); 
  $('#mask').fadeTo("slow",0.9); 
        var winH = $(window).height();
  var winW = $(window).width();
        $(id).css('top',  winH/2-$(id).height()/2);
  $(id).css('left', winW/2-$(id).width()/2);
     $(id).fadeIn(2000);  
     $('.window .close').click(function (e) {
  e.preventDefault();
  $('#mask').hide();
  $('.window').hide();
     });  
     $('#mask').click(function () {
  $(this).hide();
  $('.window').hide();
 });  
 
});


var coll = document.getElementsByClassName("collapsible");
        
        var i;
        var slideIndex = 0;
        
        carousel();
    

function carousel() {
    var x = document.getElementsByClassName("mySlides");
        var i;
 
  
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.display = "block";
  setTimeout(carousel, 3000); // Change image every 2 seconds
}




window.onload = function() {

    
    
    

    for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
        }

//pops-up-start
        

        //pops-up-end


function tracOrder() {
    
    var mobile = $('#dtOrderId').val();
    location.href = "https://deliverytiger.com.bd/m/order-tracking?orderId=" + mobile;    
}


function getOrderTrackingUtility() {
    
    var mobile = $('#dtOrderId').val();    
    getOrderTracking(mobile);
}

function getOrderTracking(mobile) {
    
  $.ajax({
      url: "https://adcore.ajkerdeal.com/api/Fetch/GetOrderTrackingNew/private",

      
      data: "{courierOrderId:'"+ mobile + "',courierUserId: 0}",
      dataType: "json",
      type: "POST",
      contentType: "application/json; charset=utf-8",
      success: function (data) {         
         
          //console.log(data.model);
          this.courierInfo=data.model.courierOrdersViewModel;
          this.courierName=this.courierInfo.collectionName;
          this.order=this.courierInfo.courierOrdersId;
          this.orderdetails = data.model.orderTrackingGroupViewModel;
          this.length=this.orderdetails.length;
          document.getElementById("courierId").innerHTML = this.order;
          document.getElementById("courierName").innerHTML = this.courierName;
          let greenImage = `<img style="margin:auto; width: 100%%;height: auto;float:left;margin-left: -28px;" id="myImg" src="https://static.ajkerdeal.com/images/dt/newlogin/testmarkgreen.png"></img>`;
          let redImage   = `<img style="margin:auto; width: 100%;height: auto;float:left;margin-left: -28px;" id="myImg" src="https://static.ajkerdeal.com/images/dt/newlogin/testmarkred.png"></img>`;
          //console.log(this.length);
          for (let i = 0; i < this.length; i++) {
              this.trackingInfo = this.orderdetails[i];
              this.trackingName = this.trackingInfo.trackingName;
              this.statusGroupId=this.trackingInfo.statusGroupId;
              this.trackingDate = this.trackingInfo.trackingDate.toLocaleString();
              this.trackColor = this.trackingInfo.trackingColor.toLocaleString();
              let date = new Date(this.trackingDate).toLocaleString("bn-BD");

              
              
              if(this.trackColor=="green"){


                if(this.statusGroupId==7){

                    document.getElementById("card").innerHTML += `<div class="row ">
              
              <div style="border-right-style: solid;border-color: #c3b8a9;" class="col-3">
                  <div  id="date"style="margin-left: -54%;">`+date +
                     
                  `</div>
              </div>
              <div class="col-2">
              <div id="check" style="float: left;" >`+greenImage+
                     
              `</div>
              </div>
              
              <div style="text-align: left;" class="col-7">
                  
                  <div id="track" style="margin-left: -17%;">`+this.trackingName+`
                     
                  </div>

                  <div style="font-size:x-small;margin-left:-17%;">ডেলিভারি করছেন-`+this.deliveryManInfo.courierDeliveryManName+`
                            
                        </div>
                            <div style="background-color: green;text-align: center;border-radius: 5px;width: 90%;font-size:x-small;margin-left:-17%;"><a style="text-decoration: none;color: white;" href="tel:`+this.deliveryManInfo.courierDeliveryManMobile+`">`+this.deliveryManInfo.courierDeliveryManMobile+`</a>
                            
                            </div>

                            <div style="margin-top: 4px;background-color: green;text-align: center;border-radius: 5px;width: 90%;font-size:x-small;margin-left:-17%;"><a style="text-decoration: none;color: white;" href="tel:`+this.deliveryManInfo.eDeshMobileNo+`">`+this.deliveryManInfo.eDeshMobileNo+`</a>
                            
                            </div>
                            <div style="margin-left:-17%;font-size:x-small;">`+this.deliveryManInfo.courierComment+`
                            
                            </div>
  
              </div>
  
  
                  
                  
              </div>
          </div>`;

                }
                  
                else{
                  
                  document.getElementById("card").innerHTML += `<div class="row ">
              
              <div style="border-right-style: solid;border-color: #c3b8a9;" class="col-3">
                  <div  id="date"style="margin-left: -54%;">`+date +
                     
                  `</div>
              </div>
              <div class="col-2">
              <div id="check" style="float: left;" >`+greenImage+
                     
              `</div>
              </div>
              
              <div style="text-align: left;" class="col-7">
                  
                  <div id="track" style="margin-left: -17%;">`+this.trackingName+`
                     
                  </div>

                  
  
              </div>
  
  
                  
                  
              </div>
          </div>`;
                }
                  
              }
              if(this.trackColor=="red"){

                 
                  
                  document.getElementById("card").innerHTML += `<div class="row ">
              
              <div style="border-right-style: solid;border-color: #c3b8a9;" class="col-3">
                  <div  id="date" style="margin-left: -54%;">`+date +
                     
                  `</div>
              </div>
              <div class="col-2">
              <div id="check" style="float: left;" >`+redImage+
                     
              `</div>
              </div>
              
              <div style="text-align: left;" class="col-7">
                  
                  <div id="track"style="margin-left: -17%;">`+this.trackingName+`
                     
                  </div>

                  
  
              </div>
  
  
                  
                  
              </div>
          </div>`;
              }
              
              
            }
            

            
      },
      error: function (xhr, ajaxOptions, thrownError) {
          $("#errMsg").addClass("show");
          $("#errMsg").text("Please Enter Correct Credential.");
      }
  });
}