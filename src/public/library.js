(function($){
    "use strict";
    var HT = {};
HT.openCategoryDropdown = () => {
    $('.category-dropdown').slideUp();
    $('.department-wrapper').click(function(){
        let _this = $(this);
        let isOpen = _this.attr('data-open'); //0 là chưa mở
        if(isOpen == 0){
            $('.department-wrapper > span .uk-icon').css({
                'rotate' : "-180deg",
                'transition' : 'all 0.4s ease'

            });
            _this.attr('data-open', 1);
        } else {
            $('.department-wrapper > span .uk-icon').css({
                'rotate' : "0 deg",
                'transition' : 'all 0.4s ease'
            });
            _this.attr('data-open', 0);
        }
        $('.category-dropdown').slideToggle()
    })
}
HT.swiper = () => {

}
$(document).ready(function(){
    HT.openCategoryDropdown();
});
})(jQuery);


