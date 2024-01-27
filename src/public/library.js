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
    HT.propertySwiper = () => {
        var swiper = new Swiper(".panel-property .swiper-container", {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
            },
            // Default parameters
            slidesPerView: 2,
            spaceBetween: 0,
            // Responsive breakpoints
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 2,
                    spaceBetween: 0
                },
                // when window width is >= 480px
                480: {
                    slidesPerView: 3,
                    spaceBetween: 0
                },
                // when window width is >= 640px
                640: {
                    slidesPerView: 6,
                    spaceBetween: 0
                }
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    }

    HT.brandSwiper = () => {
        var swiper = new Swiper(".panel-brand .swiper-container", {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
            },
            // Default parameters
            slidesPerView: 2,
            spaceBetween: 0,
            // Responsive breakpoints
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 2,
                    spaceBetween: 0
                },
                // when window width is >= 480px
                480: {
                    slidesPerView: 3,
                    spaceBetween: 0
                },
                // when window width is >= 640px
                640: {
                    slidesPerView: 5,
                    spaceBetween: 0
                }
            },
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
        if (countdown.length) {
            countdown.each(function () {
                let _this = $(this);
                let countdownValue = _this.attr('data-countdown');
                let second = 1000;
                let minute = 1000 * 60;
                let hour = minute * 60;
                let day = hour * 24;
                let countDownTime = new Date(countdownValue).getTime();
                console.log(countDownTime);
                setInterval(function () {
                    let now = new Date().getTime(); //--> Thời điểm hiện tại
                    let distance = countDownTime - now;
                    if (distance > 0) {
                        let days = Math.floor(distance / day);
                        let hours = Math.floor((distance % day) / hour);
                        let minutes = Math.floor((distance % hour) / minute);
                        let seconds = Math.floor((distance % minute) / second);

                        _this.find('.days').html(days);
                        _this.find('.hours').html(hours);
                        _this.find('.minutes').html(minutes);
                        _this.find('.seconds').html(seconds);

                        console.log(days, hours, minutes, seconds);
                    }
                }, second)
            });
        }
    }
    $(document).ready(function () {
        HT.openCategoryDropdown();
        HT.swiper();
        HT.specialSwiper();
        HT.countdown();
        HT.propertySwiper();
        HT.brandSwiper();
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

const btn = document.querySelectorAll(".btncart");
btn.forEach(function (btncart, index) {
    btncart.addEventListener("click", function (event) {
        var btnItem = event.target;
        var product = btnItem.parentElement.parentElement;
        var productImg = product.querySelector("img").src;
        var productName = product.querySelector(".product-name").innerText;
        var productCost = product.querySelector(".price-sale").innerText;
        addCart(productImg, productName, productCost);
    });
});

function addCart(productImg, productName, productCost) {
    var cartItem = document.querySelectorAll(".panel-body .info");
    for (var i = 0; i < cartItem.length; i++) {
        let productT = cartItem[i].querySelector(".title");
        if (productT && productT.innerHTML === productName) {
            alert("Sản phẩm của bạn đã có trong giỏ hàng");
            return;
        }
    }


    var addtr = document.createElement("tr");
    var trcontent = `
        <tr>
            <td class="col-sm-3">
                <img class="img-fluid" src="${productImg}" alt="">
                <span class="title">${productName}</span>
            </td>
            <td class="col-sm-3 Cost">
                <p><span class="prices">${productCost}</span><sup>$</sup></p>
            </td>
            <td class="col-sm-3"><input type="number" value="1" min="1"></td>
            <td class="col-sm-3 " style="cursor: pointer;"><span class="cart-delete">Delete</span></td>
        </tr>
    `;
    addtr.innerHTML = trcontent;
    var carttable = document.querySelector("tbody");
    carttable.appendChild(addtr);
    cartTotal();
    deleteCart();
}
// ----------------------totalPrice---------------
function cartTotal() {
    var cartItem = document.querySelectorAll("tbody tr")
    var totalC = 0;
    for (var i = 0; i < cartItem.length; i++) {
        var inputValue = parseInt(cartItem[i].querySelector("input").value);
        var productPrice = parseFloat(cartItem[i].querySelector(".prices").innerHTML);
        var totalA = inputValue * productPrice * 1000;
        var totalC = totalA + totalC;
    }
    // var totalD = totalC.toLocaleString('de-DE');
    var cartTotalE = document.querySelector(".price-total span");
    var cartPrice = document.querySelector(".cartIcon span");
    cartTotalE.innerHTML = totalC.toLocaleString('de-DE');
    cartPrice.innerHTML = totalC.toLocaleString('de-DE');
    inputchange();
}
//-------------------------Delete cart-----------
function deleteCart() {
    var cartItem = document.querySelectorAll("tbody tr");
    for (var i = 0; i < cartItem.length; i++) {
        let productT = document.querySelectorAll(".cart-delete");
        productT[i].addEventListener("click", function (event) {
            var cartDelete = event.target;
            var cartItemR = cartDelete.parentElement.parentElement;
            cartItemR.remove();
            cartTotal();
        });
    }
}
deleteCart();

function inputchange() {
    var cartItem = document.querySelectorAll("tbody tr");
    for (var i = 0; i < cartItem.length; i++) {
        let inputValue = cartItem[i].querySelector("input");
        inputValue.addEventListener("change", function () {
            cartTotal();
        });
    }
}
const cartbutton1 = document.querySelector(".button-close");
const cartshow = document.querySelector(".cartIcon");
cartshow.addEventListener("click", function () {
    document.querySelector("#cart-table").style.right = "0";
});
cartbutton1.addEventListener("click", function () {
    document.querySelector("#cart-table").style.right = "-100%";
});

function overImage(element) {
    if (element.dataset.hover) {
        element.src = element.dataset.hover;
    }
}

function outImage(element) {
    if (element.dataset.out) {
        element.src = element.dataset.out;
    }
}