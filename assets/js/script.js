$(function(){
    $('.accordian li:odd:gt(0)').hide();

    $('.accordian li:odd').addClass('dimension');
    $('.accordian li:even:even').addClass('even');
    $('.accordian li:even:odd').addClass('odd');

    $('.accordian li:even').css('cursor', 'pointer');

    $('.accordian li:even').click(function(){
        var cur = $(this).next();
        var old = $('.accordian li:odd:visible');

        if(cur.is(':visible'))
            return false;

        old.slideToggle(500);
        cur.stop().slideToggle(500);
    });

});

/* MODAL - Affichage des résultats de la recherche */

// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}