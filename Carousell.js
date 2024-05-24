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
        }, 50);
    }else{
        car_elem.style.marginLeft = String(margin*100) + "vw"
    }
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
        }, 50);
    }else{
        car_elem.style.marginLeft = String(margin*100) + "vw"
    }
}

window.setInterval(carousellRight, 5000)