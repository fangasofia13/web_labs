var discount_btn = $('.discount_btn');



discount_btn.click(function () {
    $('.price').each(function (i, elem) {
        if ($(elem).hasClass('discount_price')) {
            var pr = $(elem).text();
            pr /= 0.8;
            $(elem).text(pr);
            $('.discount_btn').text("Discount 20% is off");
            $(elem).removeClass('discount_price');
        } else {
            var pr = $(elem).text();
            pr *= 0.8;
            $(elem).text(pr);
            $('.discount_btn').text("Discount 20% is on");
            $(elem).addClass('discount_price');
        }
    });
});


