"use scrict"

let mapButton = document.getElementsByClassName('mapButton')[0];

mapButton.onclick = () =>{

    console.log(1);
    if(mapButton.classList[1] === "off"){
        mapButton.classList.add('on');
        document.getElementsByClassName('mapBlock')[0].classList.add('show');
        mapButton.classList.remove('off');
    }else{
        mapButton.classList.add('off');
        mapButton.classList.remove('on');
        document.getElementsByClassName('mapBlock')[0].classList.remove('show');
    }
}


let forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(let c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(let e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};

let hamburgers = document.querySelectorAll(".hamburger");
if (hamburgers.length > 0) {
    forEach(hamburgers, function(hamburger) {
        hamburger.addEventListener("click", function() {
            this.classList.toggle("is-active");
        }, false);
    });
}



function sidebar() {
    this.mobile = window.matchMedia('(max-width: 767px)').matches;
    this.desktop = window.matchMedia('(min-width: 992px)').matches;
    this.tablet = window.matchMedia('(min-width:767px) and (max-width: 992px)').matches;
    let sidebar = document.getElementById('sidebar');
    let header = document.getElementsByTagName('header');


    if(this.mobile){
        if(sidebar.style.left === ""){
            sidebar.style.left = "100%";
        }
        if(sidebar.style.left ==="100%") {
            if(screen.orientation.angle === 90){
                sidebar.setAttribute("style",  "position: fixed; left:0px;overflow: scroll;height: 80%;");
                header[0].setAttribute('style', "position: fixed;grid-template-columns: 32% 29% 9% 11% 19%;width: 100%;z-index: 10;");
            }else{
                sidebar.setAttribute("style",  "position: fixed; left:0px;");
                header[0].setAttribute('style', "position: fixed;grid-template-columns: 32% 29% 9% 11% 19%;width: 100%;z-index: 10;");
            }
        }
        else {
            sidebar.setAttribute("style",  "position: absolute; left:100%;");
            header[0].setAttribute("style","position: relative;");
            window.scrollTo(0,0);
        }
    } else if(this.desktop) {
        if(sidebar.style.left === ""){ sidebar.style.left = "-376px";}

        if(sidebar.style.left === "-376px") { sidebar.style.left="0px"; }
        else { sidebar.style.left="-376px"; }
    }else if(this.tablet){
        if(sidebar.style.left === ""){ sidebar.style.left = "-376px"; }

        if(sidebar.style.left === "-376px"){sidebar.style.left="0px";}
        else { sidebar.style.left="-376px";}
    }
}

