var was_last_pressed = true

function carousellLeft(){
    var car_elem = document.getElementById("first-carousell-element");
    var margin = Number(car_elem.style.marginLeft.replace("vw",""));
    margin /= 100;
    margin += 1;
    if(margin>0){
        car_elem.style.transition = "none";
        car_elem.style.marginLeft =  "-400vw"
        setTimeout(function(){
            car_elem.style.transition = "";
        }, 50);
        setTimeout(function(){
            car_elem.style.marginLeft =  "-300vw"
            updateCarousellMarkers()
        }, 50);
    }else{
        car_elem.style.marginLeft = String(margin*100) + "vw"
    }
    updateCarousellMarkers()
}

function carousellRight(){
    var car_elem = document.getElementById("first-carousell-element");
    var margin = Number(car_elem.style.marginLeft.replace("vw",""));
    margin /= 100;
    margin -= 1;
    if(margin<-4){
        car_elem.style.transition = "none";
        car_elem.style.marginLeft =  "0vw"
        setTimeout(function(){
            car_elem.style.transition = "";
        }, 50);
        setTimeout(function(){
            car_elem.style.marginLeft =  "-100vw"
            updateCarousellMarkers()
        }, 50);
    }else{
        car_elem.style.marginLeft = String(margin*100) + "vw"
    }
    updateCarousellMarkers()
}

function updateCarousellMarkers(){
    var car_markers = document.getElementsByClassName("carousell-page-marker")
    var car_elem = document.getElementById("first-carousell-element");
    var margin = Number(car_elem.style.marginLeft.replace("vw",""));
    margin /= 100;
    margin = Math.abs(margin)%4
    for(let i = 0; i < car_markers.length; i++){
        car_markers[i].style.backgroundColor = ""
        car_markers[i].style.opacity = ""
     }
        
    car_markers[margin].style.opacity = 1
    car_markers[margin].style.backgroundColor = "var(--secondary-color)"
}

updateCarousellMarkers()
window.setInterval(carousellRight, 5000)