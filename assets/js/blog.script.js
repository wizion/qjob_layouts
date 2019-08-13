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
    let blockHeight = $('#sidebarBlog').height() + 180;
    if($('.hamburger').hasClass("is-active")){
        $('#sidebarBlog').animate({
            top: -blockHeight
        }, 500 );
        setTimeout(function () {
            $('#sidebarBlog').css({
                "display": "none",
            });
        },500);
        $('html').removeClass('noscroll');
    }else{
        $('#sidebarBlog').css({
            "display": "block",
            "top": -blockHeight
        });
        $('#sidebarBlog').animate({
            top: 0
        }, 500 );
        $('html').addClass('noscroll');
    }
}

function shareBlock(){
    if(!$('.qjobShareButton').hasClass('opened')){
        $('.qjobShareButton').css({
            display: "block"
        });
        $('.qjobShareButton').addClass('opened');
        if(window.matchMedia('(min-width:640px)').matches){
            $('.shareWindow').css({
                top: 'calc(' + $('#shareButton').offset().top + 'px - (' + $('.shareWindow').height()+ 'px + 20px))',
                left: 'calc(' + $('#shareButton').offset().left + 'px - (' + $('.shareWindow').width()+ 'px - 50px))'
            });
        }else{
            $('html').addClass('noscroll');
        }
    }else{
        $('.qjobShareButton').removeClass('opened');
        $('.qjobShareButton').removeAttr('style');
        $('html').removeClass('noscroll');
        $('.shareWindow').css({
            top: 'initial',
            left: ' 2.5%'
        });
        $('.shareWindow').removeAttr("style");
    }

}


$(document).ready(()=>{
    $('.arrow').on('click',()=>{
        $('html, body').animate({
            scrollTop: $(".blogText").offset().top
        }, 500);
    });

    fixes();
    $( window ).resize(()=>{
        fixes();
    });

    /*$('#shareButton').on('click', ()=>{
        if(!$('.qjobShareButton').hasClass('opened')){
            $('.qjobShareButton').css({
                display: "block"
            });
            $('.qjobShareButton').addClass('opened');
        }


        if(window.matchMedia('(min-width:640px)').matches){
            $('.shareWindow').css({
                top: 'calc(' + $('#shareButton').offset().top + 'px - (' + $('.shareWindow').height()+ 'px + 20px))',
                left: 'calc(' + $('#shareButton').offset().left + 'px - (' + $('.shareWindow').width()+ 'px - 50px))'
            });
        }else{
            $('html').addClass('noscroll');
        }

    });
    $('.share_layout').on('click',()=>{
        $('.qjobShareButton').removeClass('opened');
        $('.qjobShareButton').removeAttr('style');

        $('html').removeClass('noscroll');

        $('.shareWindow').css({
            top: 'initial',
            left: ' 2.5%'
        });
        $('.shareWindow').removeAttr("style");
    });

     */

    const sr = ScrollReveal({
        duration: 1000,
        reset: false
    });
    sr.reveal('.blogTextItem>p,.blogTextItem>h2,.blogTextItem>h3,.blogTextItem>img,.blogTextItem>a,.blogTextItem>.citation,.blogTextItem>.fotorama', {
        delay: 300
    });
});
function fixes(){
    if($('#sidebarBlog').height()<screen.height && !window.matchMedia('(min-width:640px)').matches){
        $("#sidebarBlog").css({
            overflow: 'scroll',
            height: '59%'
        });
    }
}
