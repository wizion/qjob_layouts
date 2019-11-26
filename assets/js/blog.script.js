"use strict"
let forEach = function(t, o, r) { if ("[object Object]" === Object.prototype.toString.call(t))
        for (let c in t) Object.prototype.hasOwnProperty.call(t, c) && o.call(r, t[c], c, t);
    else
        for (let e = 0, l = t.length; l > e; e++) o.call(r, t[e], e, t) };

let hamburgers = document.querySelectorAll(".hamburger");
if (hamburgers.length > 0) {
    forEach(hamburgers, function(hamburger) {
        hamburger.addEventListener("click", function() {
            this.classList.toggle("is-active");
        }, false);
    });
}

function progressBarWidth() {
    let windowScrollTop = window.scrollY,
        docHeight = document.documentElement.offsetHeight,
        winHeight = window.innerHeight;
    let scrollPercent = (windowScrollTop / (docHeight - winHeight)) * 100;
    document.getElementsByClassName('indicator')[0].style.width = scrollPercent + '%';
}

function hasClass(id, className) {
    var id = document.getElementById(id);
    var cN = document.getElementsByClassName(className)[0];
    if (id) {
        return id != null;
    }
    return cN != null;
}

function imageDeterminant() {
    let desktop = window.matchMedia('(max-width: 680px)').matches;
    let mobile = window.matchMedia('(min-width: 681px)').matches;
    if (hasClass('image-for-mobile', '') || hasClass('image-for-desctop')) {
        if (desktop) {
            document.getElementById('image-for-desctop').value;
            document.getElementsByClassName('blog-image')[0].style.backgroundImage = "url(" + document.getElementById('image-for-mobile').value + ")";
        } else if (mobile) {
            document.getElementById('image-for-mobile').value;
            document.getElementsByClassName('blog-image')[0].style.backgroundImage = "url(" + document.getElementById('image-for-desctop').value + ")";
        }
    }

}
window.onscroll = () => {
    if (hasClass('', 'progress-bar')) {
        progressBarWidth();
    }
    imageDeterminant();
    document.getElementsByTagName('body')[0].style.height = "";
}
window.onresize = () => {
    imageDeterminant();
}

function sidebarBlog() {
    let blockHeight = $('#sidebar-blog').height() + 180;
    if ($('.hamburger').hasClass("is-active")) {
        $('#sidebar-blog').animate({
            top: -blockHeight
        }, 500);
        setTimeout(function() {
            $('#sidebar-blog').css({
                "display": "none",
            });
        }, 500);
        $('html').removeClass('noscroll');
    } else {
        $('#sidebar-blog').css({
            "display": "block",
            "top": -blockHeight
        });
        $('#sidebar-blog').animate({
            top: 0
        }, 500);
        $('html').addClass('noscroll');
    }
}

function shareBlock() {
    if (!$('.qjob-share-button').hasClass('opened')) {
        $('.qjob-share-button').css({
            display: "block"
        });
        $('.qjob-share-button').addClass('opened');
        if (window.matchMedia('(min-width:640px)').matches) {
            $('.share-window').css({
                top: 'calc(' + $('#share-button').offset().top + 'px - (' + $('.share-window').height() + 'px + 20px))',
                left: 'calc(' + $('#share-button').offset().left + 'px - (' + $('.share-window').width() + 'px - 50px))'
            });
        } else {
            $('html').addClass('noscroll');
        }
    } else {
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


$(document).ready(() => {
    imageDeterminant();
    if ($(".blog-text-item").hasClass("fotorama")) {
        $('.fotorama').fotorama({
            allowfullscreen: true,
            click: true,
            swipe: true,
        });
    }

    $('.arrow').on('click', () => {
        $('html, body').animate({
            scrollTop: $(".blog-text").offset().top
        }, 500);
    });
    fixes();
    $(window).resize(() => {
        fixes();
    });

    ScrollReveal({
        duration: 1000,
        reset: false
    }).reveal('.blog-text-item>p,.blog-text-item>h2,.blog-text-item>h3,.blog-text-item>img,.blog-text-item>blockquote,.blog-text-item>a,.blog-text-item>.fotorama,.blog-text-item>ol,.blog-text-item>ul', {
        delay: 300
    });



    $('.post-votes-section_button>button').on('click', function() {
        let value = $(".post-votes-section_item input:checked").val();
        let post_id = $("#post-votes-section_post_id").val();
        if (typeof value != 'undefined') {
            $.post("http://blog.qjob.hu/ajax_test.php", { votes: true, object: value, post_id: post_id })
                .done(function(data) {
                    $('.post-votes-section>.post-votes-section_list').addClass('voted');
                    $('.alert').removeClass('visible');
                    $('.alert').addClass('unvisible');
                    let obj = $.parseJSON(data);


                    for (let i = 1; i <= count(obj); i++) {
                        $('.post-votes-section_item:eq(' + (i - 1) + ')>.post-votes-section-progressbar').css("width", obj[i].procent + "%");
                        $('.post-votes-section_item:eq(' + (i - 1) + ')>.post-votes-section-descript>span:eq(0)').text(obj[i].votes);
                        $('.post-votes-section_item:eq(' + (i - 1) + ')>.post-votes-section-descript>span:eq(1)').text(obj[i].procent + '%');
                    }
                });
        } else {
            $('.alert').removeClass('unvisible');
            $('.alert').addClass('visible');
        }


    });






    $('.unvoted>.block').on('click', function() {
        let index_number = $('.block').index(this);
        let post_id = $('#liked-history').val();
        if (jQuery('.smiles').hasClass("unvoted")) {
            $.post("http://blog.qjob.hu/ajax_test.php", { smiles: true, object: index_number, post_id: post_id })
                .done(function(data) {
                    var obj = $.parseJSON(data);

                    $('.smiles').removeClass('unvoted');
                    $('.smiles').addClass('voted');

                    $('.voted .block:eq(' + obj.index + ')').addClass('selected');

                    if (obj.index === "1") {
                        $('.voted>.block:eq(' + 0 + ')>.votes').text(obj.greate);
                        $('.voted>.block:eq(' + obj.index + ')>.votes').text(obj.normal);
                        $('.voted>.block:eq(' + 2 + ')>.votes').text(obj.bad);
                    }
                    if (obj.index === "2") {
                        $('.voted>.block:eq(' + 0 + ')>.votes').text(obj.greate);
                        $('.voted>.block:eq(' + 1 + ')>.votes').text(obj.normal);
                        $('.voted>.block:eq(' + obj.index + ')>.votes').text(obj.bad);
                    }
                    if (obj.index === "0") {
                        $('.voted>.block:eq(' + 0 + ')>.votes').text(obj.greate);
                        $('.voted>.block:eq(' + 1 + ')>.votes').text(obj.normal);
                        $('.voted>.block:eq(' + 2 + ')>.votes').text(obj.bad);
                    }

                    $('.voted>.block:eq(' + obj.index + ')').addClass('selected');

                });
        }

    });


});







function fixes() {
    if ($('#sidebar-blog').height() < screen.height && !window.matchMedia('(min-width:640px)').matches) {
        $("#sidebar-blog").css({
            overflow: 'scroll',
            height: '59%'
        });
    }
}

function count(array) {
    var cnt = 0;
    for (var i in array) {
        if (i) {
            cnt++
        }
    }
    return cnt
}
