$(function () {
    var speed = 30; //数字越大速度越慢
    var tab = document.getElementById("textScrollArea");
    var tab1 = document.getElementById("textScrollCon1");
    var tab2 = document.getElementById("textScrollCon2");
    tab2.innerHTML = tab1.innerHTML;
    function Marquee() {
        if (tab2.offsetWidth - tab.scrollLeft <= 0)
            tab.scrollLeft -= tab1.offsetWidth
        else {
            tab.scrollLeft++;
        }
    }
    var MyMar = setInterval(Marquee, speed);
    tab.onmouseover = function () { clearInterval(MyMar) };
    tab.onmouseout = function () { MyMar = setInterval(Marquee, speed) };

    var image_list = $("#play_list > div[name='focus_image_list']");
    var rand = parseInt(Math.random() * image_list.length);
    if (image_list.length > 0) {
        image_list.hide();
        image_list.eq(rand).show();
        image_list.eq(rand).TrunAd2();
    }
    $("img[original]").lazyload();
    setShoppingUrl();
});