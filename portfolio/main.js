// 開発時にウィンドウの幅を表示させる

const displayWindowWidth = document.getElementById('windowSize');

function resizeWindow() {
    displayWindowWidth.innerHTML = window.innerWidth + 'px';
}

window.addEventListener('resize', resizeWindow);

// ローディング画面のアニメーション

window.onload = function() {
    const timeline = anime.timeline({
        targets: "#loading .loading-outline path", 
        direction: "normal", 
        loop: false
    })
    .add({
        strokeDashoffset: [anime.setDashoffset, 0], 
        fill: ["transparent", "transparent"], 
        easing: 'easeInOutSine', 
        duration: 400, 
        delay: function(el, i) { return i * 100 }, 
    });

    setTimeout(function() {
        $('#section-loading').fadeOut();
    }, 3000);
}

// serviceのアニメーション

const appearServiceContents = anime.timeline({
    targets: '.service', 
    easing: 'easeInSine', 
    delay: anime.stagger(200), 
    autoplay: false
})
.add({
    opacity: [0, 1], 
    delay: anime.stagger(100), 
    duration: 500, 
});

let appearAboutContentSignal = false;
$(document).scroll(function() {
    var scroll = $(window).scrollTop();
    var elmPos = $('.wrapper-service').offset().top;
    var windowHeight = $(window).height();

    if (scroll+windowHeight >= elmPos+200 && appearAboutContentSignal == false) {
        appearServiceContents.play();
        appearAboutContentSignal = true;
    }
});
