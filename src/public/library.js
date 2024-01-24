(function ($) {
    "use strict";
    var HT = {};
    var countdown = $('.countdown-time');
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
    // COUNTDOWN
    HT.countdown = () => {
        if(countdown.length){
            countdown.each(function(){
                let _this = $(this);
                let countdownValue = _this.attr('data-countdown');
                let second = 1000;
                let minute = 1000 * 60;
                let hour = minute * 60;
                let day = hour * 24;
                let countDownTime  = new Date(countdownValue).getTime();
                console.log(countDownTime);
                setInterval(function(){
                    let now = new Date().getTime(); //--> Thời điểm hiện tại
                    let distance = countDownTime - now;
                    if(distance > 0){
                        let days = Math.floor(distance / day);
                        let hours = Math.floor((distance % day) /hour);
                        let minutes = Math.floor((distance % hour) / minute);
                        let seconds = Math.floor((distance % minute) / second);

                            _this.find('.days').html(days);
                          _this.find('.hours').html(hours);
                           _this.find('.minutes').html(minutes);
                            _this.find('.seconds').html(seconds);

                       console.log(days, hours, minutes, seconds);
                    }
                },second)
            });
        }
    }
    $(document).ready(function () {
        HT.openCategoryDropdown();
        HT.swiper();
        HT.specialSwiper();
        HT.countdown();
    });
})(jQuery);
const sidebar = document.querySelector('.sidebar');
const toggleBtn = document.querySelector('.toggle-btn');
toggleBtn.addEventListener('click', () => {
    sidebar.classList.toggle('active');
});


// let endDate = new Date("2024-01-25T00:00:00").getTime();
// let check = setInterval(function(){
//     let now = new Date().getTime();
//     let distance = endDate - now;
//     let day = Math.floor(distance / (24 * 60 * 60 * 1000));
//     let hour = Math.floor((distance % (24 * 60 * 60 * 1000)) / (60 * 60 * 1000));
//     let minute = Math.floor((distance % (60 * 60 * 1000)) / (60 * 1000));
//     let seconds = Math.floor((distance % (60 * 1000)) / 1000);
//     document.getElementById('day').innerText = day;
//     document.getElementById('hour').innerText = hour;
//     document.getElementById('minute').innerText = minute;
//     document.getElementById('milis').innerText = seconds;
//     if(distance <= 0){
//         clearInterval(check);
//     }
// }, 1000);


// Begin ms 
// 1s = 1000 ms
// 1p = 60s = 60 * 1000 ms
// 1h = 60p = 60 * 60 * 1000 ms
// 1d = 24h = 24 * 60 * 60 * 1000 ms