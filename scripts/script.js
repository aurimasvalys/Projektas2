/* Bendras scriptas: */





/* Aurimas Valys script kodas: */

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems);
});

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
});

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.materialboxed');
    var instances = M.Materialbox.init(elems);
});

// button tooltip:
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.tooltipped');
    var instances = M.Tooltip.init(elems);
});

//slideshow script:
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (x.length > 0) {

        if (n > x.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = x.length }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        console.log(x);
        x[slideIndex - 1].style.display = "block";
    }

}




/* Tomas Pacesa script kodas: */


// Tabs inicializacija 

var tabs = document.querySelectorAll('.tabs')
for (var i = 0; i < tabs.length; i++) {
    M.Tabs.init(tabs[i]);
};

// Tabs swipe scriptas 

M.Tabs.init(document.querySelectorAll('.tabs'), { swipeable: true });
var textWrapper = document.querySelector('#quizheadertext');
if (textWrapper) {
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
}


// Quiz efektas

anime.timeline({ loop: true })
    .add({
        targets: '#quizheadertext .letter',
        opacity: [0, 1],
        easing: "easeInOutQuad",
        duration: 2250,
        delay: (el, i) => 150 * (i + 1)
    }).add({
        targets: '#quizheadertext',
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 100000
    });


var scrollspies = document.querySelectorAll('.scrollspy')
for (var i = 0; i < scrollspies.length; i++) {
    M.ScrollSpy.init(scrollspies[i]);
};



// Colapsinimo scriptas 

var collapsibles = document.querySelectorAll('.collapsible')
for (var i = 0; i < collapsibles.length; i++) {
    M.Collapsible.init(collapsibles[i]);
}

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, { accordion: false });
});


// Paspaudus button rodo div
function showDiv() {
    document.getElementById('welcomeDiv').style.display = "block";
}

document.addEventListener('DOMContentLoaded', function() {
    // M.AutoInit();

    var options = {
        fullWidth: true,
        indicators: true
    };
    var elems = document.querySelector('.carousel.no-autoinit');
    console.log(elems)
    var instances = M.Carousel.init(elems, options);
})








/* Zbignev Rakovskij script kodas: */





/* Aurimas Surgelas script kodas: */