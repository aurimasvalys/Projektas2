/* Bendras scriptas: */





/* Aurimas Valys script kodas: */





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






/* Zbignev Rakovskij script kodas: */





/* Aurimas Surgelas script kodas: */