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

    $(document).ready(function () {
        HT.openCategoryDropdown();
        HT.swiper();
        HT.specialSwiper();
        HT.countdown();
        HT.propertySwiper();
        HT.brandSwiper();
        HT.setUpPriceRange();
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
// console.log(btn);
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
                alertE= "Sản phẩm của bạn đã có"
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
function removeItem(){
    let cartItem = document.querySelectorAll("tbody tr");
    for (let k = 0; k< cartItem.length; k++) {
        const ele = document.querySelectorAll(".remove");
        ele[k].addEventListener("click", function(event){
            let cartDelete = event.target;
            let cartDeleteA = cartDelete.parentElement.parentElement;
            cartDeleteA.remove();
            cartTotal();
        });
         
    }
}
function inputChange(){
    let cartItem = document.querySelectorAll("tbody tr");
    for (let k = 0; k< cartItem.length; k++) {
        const num = cartItem[k].querySelector("input");
       num.addEventListener("change", function(){
        cartTotal();
        sortItem();
       }); 
    };
};
function sortItem() {
    let arr = document.querySelectorAll(""); // Bạn cần đưa ra arr từ một nguồn dữ liệu nào đó
    let left = 0;
    let right = arr.length - 1;
    mergeSort(arr, left, right);
    console.log(arr);
}

function mergeSort(arr, left, right) {
    if (left < right) {
        let mid = Math.floor((left + right) / 2);
        mergeSort(arr, left, mid);
        mergeSort(arr, mid + 1, right);
        merge(arr, left, mid, right);
    }
}

function merge(arr, left, mid, right) {
    let i = left;
    let j = mid + 1;
    let k = 0;
    const c = new Array(right - left + 1);

    while (i <= mid && j <= right) {
        if (arr[i] < arr[j]) {
            c[k++] = arr[i++];
        } else {
            c[k++] = arr[j++];
        }
    }

    while (i <= mid) {
        c[k++] = arr[i++];
    }

    while (j <= right) {
        c[k++] = arr[j++];
    }

    for (let t = 0; t < k; t++) {
        arr[left + t] = c[t];
    }
}

document.addEventListener("DOMContentLoaded", function() {
    const cartShow = document.querySelector("i.button-cart.uk-icon");
    const cartClose = document.querySelector("button.table-close.uk-icon.uk-close");
    
    if (cartShow) {
        document.querySelector(".cart").classList.add("show");
        cartShow.addEventListener('click', function() {
            document.querySelector(".cart").style.right = "0";
        });
    }

    if (cartClose) {
        cartClose.addEventListener('click', function() {
            document.querySelector(".cart").style.right = '-100%';
        });
    }
});
document.addEventListener("click", function(event) {
    if (event.target.matches('i.button-cart.uk-icon')) {
        console.log("Cart icon clicked");
        document.querySelector(".cart").style.right = "0";
    }

    if (event.target.matches('button.table-close.uk-icon.uk-close')) {
        console.log("Close button clicked");
        document.querySelector(".cart").style.right = '-100%';
    }
});
document.querySelector(".cart").classList.remove("show");

function searchItem(){
    let menuSearh = document.querySelector(".input-text");
    let menuItems = Array.from(document.querySelectorAll("product-name-main"));
    menuSearh.value = menuSearh.value.toLowerCase();
    menuItems.forEach(function(el){
        let text = el.innerHTML;
        if(text.indexOf(menuSearh.value) > -1)
        el.style.display = "";
    else el.style.display="none";
    });
}








   



