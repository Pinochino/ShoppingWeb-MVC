(function ($) {
    "use strict";
    var HT = {};
    HT.openCategoryDropdown = () => {
        $('.category-dropdown').slideUp();
        $('.department-wrapper').click(function () {
            let _this = $(this);
            let isOpen = _this.attr('data-open'); //0 là chưa mở
            if (isOpen == 0) {
                $('.department-wrapper > span .uk-icon').css({
                    'rotate': "-180deg",
                    'transition': 'all 0.4s ease'

                });
                _this.attr('data-open', 1);
            } else {
                $('.department-wrapper > span .uk-icon').css({
                    'rotate': "0 deg",
                    'transition': 'all 0.4s ease'
                });
                _this.attr('data-open', 0);
            }
            $('.category-dropdown').slideToggle()
        })
    }
    HT.swiper = () => {
        var swiper = new Swiper(".panel-slide .swiper-container", {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
            },
            slidePerview: 1,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    }

    HT.specialSwiper = () => {
        var swiper = new Swiper(".special-offer .swiper-container", {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
            },
            slidePerview: 1,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    }
    $(document).ready(function () {
        HT.openCategoryDropdown();
        HT.swiper();
        HT.specialSwiper();
    });
})(jQuery);
const sidebar = document.querySelector('.sidebar');
const toggleBtn = document.querySelector('.toggle-btn');
toggleBtn.addEventListener('click', () => {
    sidebar.classList.toggle('active');
});


let endDate = new Date("2024-01-25T00:00:00").getTime();
let check = setInterval(function(){
    let now = new Date().getTime();
    let distance = endDate - now;
    let day = Math.floor(distance / (24 * 60 * 60 * 1000));
    let hour = Math.floor((distance % (24 * 60 * 60 * 1000)) / (60 * 60 * 1000));
    let minute = Math.floor((distance % (60 * 60 * 1000)) / (60 * 1000));
    let seconds = Math.floor((distance % (60 * 1000)) / 1000);
    document.getElementById('day').innerText = day;
    document.getElementById('hour').innerText = hour;
    document.getElementById('minute').innerText = minute;
    document.getElementById('milis').innerText = seconds;
    if(distance <= 0){
        clearInterval(check);
    }
}, 1000);


// Begin ms 
// 1s = 1000 ms
// 1p = 60s = 60 * 1000 ms
// 1h = 60p = 60 * 60 * 1000 ms
// 1d = 24h = 24 * 60 * 60 * 1000 ms