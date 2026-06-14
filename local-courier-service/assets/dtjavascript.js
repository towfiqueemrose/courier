let tmp = [],
    tmp2 = [],
    tmp3 = [];

let zoomed = false;

function zoom() {
    if (zoomed) {
        $("#dtservice").css("transform", " scale(1)")
    } else {
        $("#dtservice").css("transform", " scale(1.3)")
    }
    zoomed = !zoomed;
}

function collaps(divid) {
    $(divid).toggle("slow", function () {});
}

//pops-up-start

//pops-up-end

function tracOrder() {
    let mobile = $('#dtOrderId').val();
    let link = "https://deliverytiger.com.bd/order-tracking/?orderId=" + mobile;
    // let link = "http://localhost:5501/order-tracking/?orderId=" + mobile;
    location.href = link;
}

function getOrderTrackingUtility() {
    let mobile = $('#dtOrderId').val();
    getOrderTracking(mobile);
}


function getOrderTracking(mobile) {
    $.ajax({
        url: "https://adcore.ajkerdeal.com/api/Fetch/GetOrderTrackingNew/private",

        data: "{courierOrderId:'" + mobile + "',courierUserId: 0}",
        dataType: "json",
        type: "POST",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            // data = TestData()

            this.orderdetails = data.model.orderTrackingGroupViewModel;
            this.courierInfo = data.model.courierOrdersViewModel;
            this.courierName = this.courierInfo.collectionName;
            this.companyName = this.courierInfo.companyName;
            this.order = this.courierInfo.courierOrdersId;
            document.getElementById("courierId").innerHTML = this.order;
            document.getElementById("courierName").innerHTML = this.courierName;

            // localStorage.setItem("companyName", this.companyName);

            this.length = this.orderdetails.length;

            let greenImage = `<img style="margin:auto; width: 80%;height: auto;" id="myImg" src="https://static.ajkerdeal.com/images/dt/newlogin/testmarkgreen.png"></img>`;
            let redImage = `<img style="margin:auto; width: 85%;height: auto;" id="myImg" src="https://static.ajkerdeal.com/images/dt/newlogin/testmarkred.png"></img>`;

            let html = "";
            for (let i = 0; i < this.length; i++) {
                this.trackingInfo = this.orderdetails[i];
                this.trackingName = this.trackingInfo.trackingName;
                this.statusGroupId = this.trackingInfo.statusGroupId;
                this.status = this.trackingInfo.status;
                console.log(this.status)

                this.trackingDate = this.trackingInfo.trackingDate.toLocaleString();
                this.trackColor = this.trackingInfo.trackingColor.toLocaleString();
                this.date = new Date(this.trackingDate).toLocaleString("bn-BD");

                if (this.trackColor == "green") {
                    // html += tracOrderHTML(this, greenImage);
                    document.getElementById("card").innerHTML += trackOrderHTML(this, greenImage);
                }
                else if (this.trackColor == "red") {
                    document.getElementById("card").innerHTML += trackOrderHTML(this, redImage);
                }
                
            }
            $('.merchant-chat-button').attr("style", "display: block !important;");
            // document.getElementById("card").innerHTML += html;
        },
        error: function (xhr, ajaxOptions, thrownError) {
            $("#errMsg").addClass("show");
            $("#errMsg").text("Please Enter Correct Credential.");
        }
    });
}

function trackOrderHTML(data, image) {    
    try {
        let html = "";
        if (data.statusGroupId == 4 && data.status == 54) {
            html = trackOrderWithdeliveryManInfoHTML(data, image);
        }

        else if(data.statusGroupId == 4 && data.status != 54){
            html = trackOrderWithpostshipmentInfoHtml(data, image);
        }
        
        
        else {
            html = trackOrderWithoutdeliveryManInfoHTML(data, image);
        }
        return html;
    } catch(err) {
        console.log(err)
    }
}

function trackOrderWithdeliveryManInfoHTML(data, image) {
    var head = document.getElementsByTagName('head')[0];
    const js = document.createElement('script');
    js.type = 'module'
    js.src = '/assets/chat/rider_messenger.js';
    head.appendChild(js)
    // console.log(data)
    const deliveryManInfo = data.trackingInfo.courierDeliveryMan;
    const deliveryManName = deliveryManInfo.courierDeliveryManName;
    const deliveryId = deliveryManInfo.deliveryUserId;
    if(deliveryManName == null)
    {
        deliveryManName = "Rider";
    }
    localStorage.setItem("deliveryManName", deliveryManName);
    localStorage.setItem("deliveryId", deliveryId);
    const html = `
        <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="date">`+ data.date + `</div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 check">
                <div>`+ image + ` </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                <div class="track">`+ data.trackingName + `</div>
                 
                <div class="delivery-man--phone delivery-man--contact"> 
                    <div>`+ deliveryManInfo.courierDeliveryManMobile + `</div>
                </div> 
                <div class="chat-button btn btn-success" onclick="riderChat()">
                    <i class="fa-regular fa-comments"></i> <span>রাইডার<span>
                </div>
                <div class="delivery-man--edesh-mobile delivery-man--contact">`+ deliveryManInfo.eDeshMobileNo + `</div>
                <div>`+ deliveryManInfo.courierComment + `</div>
            </div>
        </div>
    `;
    // console.log(html)
    return html;
}




function trackOrderWithpostshipmentInfoHtml(data, image) {
    var head = document.getElementsByTagName('head')[0];
    const js = document.createElement('script');
    js.type = 'module'
    js.src = '/assets/chat/post_rider_messenger.js';
    head.appendChild(js)
    // console.log(data)
    const deliveryManInfo = data.trackingInfo.courierDeliveryMan;
    const shipmentName = data.trackingInfo.subTrackingShipmentName.name;
    // const deliveryManName = deliveryManInfo.courierDeliveryManName;
    // const deliveryId = deliveryManInfo.deliveryUserId;
    // localStorage.setItem("deliveryManName", deliveryManName);
    // localStorage.setItem("deliveryId", deliveryId);
    const html = `
        <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="date">`+ data.date + `</div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 check">
                <div>`+ image + ` </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                <div class="track">`+ data.trackingName + `</div>
                <div>`+ shipmentName + `</div>

               
                <div  class="post-chat-button btn btn-success" onclick="chatWithPostShipment()">
                    <i class="fa-regular fa-comments"></i> <span>পোস্ট শিপমেন্ট<span>
                </div>
                <div class="delivery-man--phone delivery-man--contact"> 
                    <div>`+ deliveryManInfo.courierComment + `</div>
                </div> 
            </div>
        </div>
    `;
    // console.log(html)
    return html;
}

function trackOrderWithoutdeliveryManInfoHTML(data, image) {

    const deliveryManInfo = data.trackingInfo.courierDeliveryMan;
    const shipmentName = data.trackingInfo.subTrackingShipmentName.name;
    return `
        <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="date">`+ data.date + ` </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 check">
                <div>`+ image + ` </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                <div class="track" style="font-weight: bold;">`+ data.trackingName + ` </div>
                <div>`+ deliveryManInfo.courierComment + `</div>
            </div>

            
        </div>
    `;
}

// function chat() {
//     window.LoadChat(merchant, client, chatRoom).then(chat => console.log(chat))
// }

// function riderChat() {
//     window.LoadRiderChat(merchant, client, chatRoom).then(chat => console.log(chat))
// }

function TestData() {
    
}