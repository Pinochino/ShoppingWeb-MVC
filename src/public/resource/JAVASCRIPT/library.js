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
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            // Default parameters
            slidesPerView: 2.5,
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

    HT.brandSwiper = () => {
        var swiper = new Swiper(".panel-brand .swiper-container", {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
            },

            // Default parameters
            slidesPerView: 4,
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
                    slidesPerView: 3,
                    spaceBetween: 0
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 0
                }
            },
            navigation: {
                nextEl: '.swiper-button-next-1',
                prevEl: '.swiper-button-prev-1',
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
    HT.setUpPriceRange = () => {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 500,
            values: [75, 300],
            slide: function (event, ui) {
                $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
            }
        });
        $("#amount").val("$" + $("#slider-range").slider("values", 0) +
            " - $" + $("#slider-range").slider("values", 1));
    };

    HT.quantityProduct = () => {
        let minusButton = document.querySelector("#minusButton");
        // console.log(minusButton);
        let plusButton = document.querySelector("#plusButton");
        // console.log(plusButton);
        let quatityButton = document.querySelector("#quantity");

        minusButton.addEventListener('click', () => {
            let quantity = parseInt(quatityButton.value);
            quantity--;
            if (quantity == 0) {
                alert("Error");
            }
            quatityButton.value = quantity;
        });
        plusButton.addEventListener('click', () => {
            let quantity = parseInt(quatityButton.value);
            quantity++;
            quatityButton.value = quantity;
        });
    };

    $(document).ready(function () {
        HT.openCategoryDropdown();
        HT.swiper();
        HT.specialSwiper();
        // HT.countdown();
        HT.propertySwiper();
        HT.brandSwiper();
        HT.setUpPriceRange();
        HT.quantityProduct();
    });
})(jQuery);
/// SIDEBAR
const sidebar = document.querySelector('.sidebar');
const toggleBtn = document.querySelector('.toggle-btn');
toggleBtn.addEventListener('click', () => {
    sidebar.classList.toggle('active');
});
const closeBtn = document.querySelector('.btnClose');
closeBtn.addEventListener('click', () => {
    sidebar.classList.remove('active');
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

/// CART
const btn = document.querySelectorAll('.btncart');
btn.forEach(function (button, index) {
    button.addEventListener("click", function (event) {
        {
            let btnItem = event.target;
            let product = btnItem.parentElement.parentElement.parentElement;
            let productImg = product.querySelector('img').src;
            let productName = product.querySelector('.product-name-main').innerText;
            let productPrice = product.querySelector('.price-sale').innerText;

            addCart(productImg, productName, productPrice);
        }
    });
});

// THÊM SẢN PHẨM VÀO GIỎ HÀNG
function addCart(productImg, productName, productPrice) {
    let addtr = document.createElement('tr');
    let cartItem = document.querySelectorAll("tbody tr");
    for (let l = 0; l < cartItem.length; l++) {
        const element = document.querySelectorAll(".table-product-name");
        if (element[l].innerHTML == productName) {
            alertE = "Sản phẩm của bạn đã có"
            alert(alertE);
            return;
        }
    }
    let trContent = '<tr><td><img class="img img-cover" src="' + productImg + '" alt="" /></td><td><span class="table-product-name" >' + productName + '</span></td><td><span class="table-price">' + productPrice + '</span></td><td><input type="number" value="1" min="0" /></td><td><span class="remove">Xóa</span></td></tr>';
    addtr.innerHTML = trContent;
    let cartTable = document.querySelector("tbody");
    cartTable.append(addtr);
    cartTotal();
    removeItem();
    inputChange();
}
// Tính tổng của sản phẩm
function cartTotal() {
    let cartItem = document.querySelectorAll("tbody tr");
    let total = 0;
    for (let i = 0; i < cartItem.length; i++) {
        let inputValue = parseInt(cartItem[i].querySelector("input").value, 10);
        var productPrice = parseFloat(cartItem[i].querySelector(".table-price").innerHTML);
        let quotion = (inputValue * productPrice * 1000)
        // .toLocaleString('de-DE');
        total = total + quotion;
        // totalNew = total.toLocaleString('de-DE');
    }
    var sum = document.querySelector('.price-total span');
    sum.innerHTML = total.toLocaleString('de-DE');
    // var carMoney = document.querySelector(".button-cart")
    // carMoney.innerHTML = total.toLocaleString('de-DE');
    inputChange();
}
// XÓA SẢN PHẨM TRONG GIỎ HÀNG 
function removeItem() {
    let cartItem = document.querySelectorAll("tbody tr");
    for (let k = 0; k < cartItem.length; k++) {
        const ele = document.querySelectorAll(".remove");
        ele[k].addEventListener("click", function (event) {
            let cartDelete = event.target;
            let cartDeleteA = cartDelete.parentElement.parentElement;
            cartDeleteA.remove();
            cartTotal();
        });

    }
}
function inputChange() {
    let cartItem = document.querySelectorAll("tbody tr");
    for (let k = 0; k < cartItem.length; k++) {
        const num = cartItem[k].querySelector("input");
        num.addEventListener("change", function () {
            cartTotal();
            sortItem();
        });
    };
};

window.addEventListener('DOMContentLoaded', function () {
    function openCart() {
        const cart = document.querySelector(".cart");
        const buttonCart = document.querySelector("#button-cart");
        const closeCart = document.querySelector("#closeCart");

        buttonCart.addEventListener("click", function () {
            cart.style.display = "block";
        });

        closeCart.addEventListener("click", function () {
            cart.style.display = "none";
        });
    }
    openCart();
});

function changeImage(fileName) {
    let img = document.querySelector("#bannerImage");
    img.setAttribute("src", fileName);
}


let iconSign = document.querySelector("#iconLogin");
// let closeTable = document.querySelector("header uk-visible@m");
iconSign.addEventListener('click', function () {
    document.querySelector("#loginTable").classList.add("show");
});



















