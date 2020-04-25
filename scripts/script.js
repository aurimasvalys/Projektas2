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

// slider index.php puslapyje:

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems);
  });


/* Tomas Pacesa script kodas: */


// Tabs inicializacija 

var scrollspies = document.querySelectorAll('.scrollspy')
for (var i = 0; i < scrollspies.length; i++) {
    M.ScrollSpy.init(scrollspies[i]);
}

var tabs = document.querySelectorAll('.tabs')
for (var i = 0; i < tabs.length; i++) {
    M.Tabs.init(tabs[i]);
}

// Tabs swipe scriptas 

M.Tabs.init(document.querySelectorAll('.tabs'), { swipeable: true });

// Colapsinimo scriptas 

var collapsibles = document.querySelectorAll('.collapsible')
for (var i = 0; i < collapsibles.length; i++) {
    M.Collapsible.init(collapsibles[i]);
}

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