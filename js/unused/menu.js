function toggleMobileMenu() {
    menu = document.getElementById('top-menu');
    overlay = document.getElementById('overlay');
    $(menu).toggleClass("menu-open");
    $(overlay).toggleClass("hidden");
}

function overlayClicked(){
    toggleMobileMenu();
}