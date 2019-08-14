"use strict"
let forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(let c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(let e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};

let hamburgers = document.querySelectorAll(".hamburger");
if (hamburgers.length > 0) {
    forEach(hamburgers, function(hamburger) {
        hamburger.addEventListener("click", function() {
            this.classList.toggle("is-active");
        }, false);
    });
}
function progressBarWidth(){
    let windowScrollTop=window.scrollY,
        docHeight=document.documentElement.offsetHeight,
        winHeight=window.innerHeight;
    let scrollPercent = (windowScrollTop / (docHeight - winHeight))*100;
    document.getElementsByClassName('indicator')[0].style.width = scrollPercent + '%';
}
window.onscroll = ()=>{
    progressBarWidth();
}
function sidebarBlog() {
    let blockHeight = $('#sidebar-blog').height() + 180;
    if($('.hamburger').hasClass("is-active")){
        $('#sidebar-blog').animate({
            top: -blockHeight
        }, 500 );
        setTimeout(function () {
            $('#sidebar-blog').css({
                "display": "none",
            });
        },500);
        $('html').removeClass('noscroll');
    }else{
        $('#sidebar-blog').css({
            "display": "block",
            "top": -blockHeight
        });
        $('#sidebar-blog').animate({
            top: 0
        }, 500 );
        $('html').addClass('noscroll');
    }
}

function shareBlock(){
    if(!$('.qjob-share-button').hasClass('opened')){
        $('.qjob-share-button').css({
            display: "block"
        });
        $('.qjob-share-button').addClass('opened');
        if(window.matchMedia('(min-width:640px)').matches){
            $('.share-window').css({
                top: 'calc(' + $('#share-button').offset().top + 'px - (' + $('.share-window').height()+ 'px + 20px))',
                left: 'calc(' + $('#share-button').offset().left + 'px - (' + $('.share-window').width()+ 'px - 50px))'
            });
        }else{
            $('html').addClass('noscroll');
        }
    }else{
        $('.qjob-share-button').removeClass('opened');
        $('.qjob-share-button').removeAttr('style');
        $('html').removeClass('noscroll');
        $('.share-window').css({
            top: 'initial',
            left: ' 2.5%'
        });
        $('.share-window').removeAttr("style");
    }
}


$(document).ready(()=>{
    $('.arrow').on('click',()=>{
        $('html, body').animate({
            scrollTop: $(".blog-text").offset().top
        }, 500);
    });
    fixes();
    $( window ).resize(()=>{
        fixes();
    });

    const sr = ScrollReveal({
        duration: 1000,
        reset: false
    });
    sr.reveal('.blogTextItem>p,.blogTextItem>h2,.blogTextItem>h3,.blogTextItem>img,.blogTextItem>a,.blogTextItem>.citation,.blogTextItem>.fotorama', {
        delay: 300
    });
});
function fixes(){
    if($('#sidebar-blog').height()<screen.height && !window.matchMedia('(min-width:640px)').matches){
        $("#sidebar-blog").css({
            overflow: 'scroll',
            height: '59%'
        });
    }
}
