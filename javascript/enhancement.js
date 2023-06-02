
/********************************************** Slide Show **********************************************/
var slideIndex = 1;

function plusSlides(x){
    showSlides(slideIndex += x);
}

function currentSlide(x){
    showSlides(slideIndex = x);
}

function showSlides(x){
    var i;
    var slides = document.getElementsByClassName("slides");
    var dots = document.getElementsByClassName("slidesdot");
    if(x > slides.length){
        slideIndex = 1;
    }
    if (x < 1){
        slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++){
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
}


/********************************************** Confirmation button **********************************************/
function enqconfirm(){
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phoneNo").value;

    var result = confirm("Please check your information again and press OK to proceed.\n\nName: " + fname + " " + lname + "\nEmail: " + email + "\nPhone: " + phone);
    return result;
}