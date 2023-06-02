
function validate(){
    var errMsg = ""; 
    var result = true; 
    if(result){
        alert("Booking Successfully");
    }
    else{
        alert("Booking Failed");
    }
    return result; 
}

function cancelBooking(){
    window.location="enquiry.php";
}

function init () {
    var bookingForm = document.getElementById("confirmform");
    var cancelBooking = document.getElementById("cancelButton");
    if(bookingForm){
        bookingForm.onsubmit = validate;
    }
    else{
        cancelBooking.onclick = cancelBooking();
    }
}

window.onload = init;