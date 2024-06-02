var user_agent = navigator.userAgent
if(user_agent.toLowerCase().includes("android")){
    document.getElementsByClassName("logo-emoji")[0].classList.add("android")
}
if(user_agent.toLowerCase().includes("iphone")){
    document.getElementsByClassName("logo-emoji")[0].classList.add("iphone")
}
