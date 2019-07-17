function getUri(){
    return window.location.pathname;
}
function setMenuActive(){
    if( getUri().length > 1 ){
        var elem = $('#sidebar ul li a[href*="'+getUri()+'"]');
        elem.addClass('active')
        if(elem.closest('.button-group').length === 1){
            elem.closest('.button-group').addClass('show')
        }
    } else {
        $('#sidebar ul li a.accueil').addClass('active')
    }
}
$(document).ready(function() {
    setMenuActive();
});