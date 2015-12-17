/**
 * Created by Chanaka on 17/12/2015.
 */
$(document).ready(function() {
    var menu = $('#menu');
    menu.menu();

    var blurTimer;
    var blurTimeAbandoned = 20;  // time in ms for when menu is consider no longer in focus

    menu.on('menufocus', function() {
        clearTimeout(blurTimer);
    });

    menu.on('menublur', function(event) {
        blurTimer = setTimeout(function() {
            menu.menu("collapseAll", null, true );
        }, blurTimeAbandoned);
    });
});