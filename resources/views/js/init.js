(function ($) {
    $(function () {

        $('.button-collapse').sideNav({
            edge: 'right', // Choose the horizontal origin
            menuWidth: 150, // Default is 240
            closeOnClick: true
        });
        $('.button-collapse-1').sideNav({
            edge: 'left', // Choose the horizontal origin
            menuWidth: 250, // Default is 240
            closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
            draggable: true // Choose whether you can drag to open on touch screens
            
        });
        $('input.autocomplete').autocomplete({
            data: {
                "Apple": null,
                "Microsoft": null,
                "Google": 'http://placehold.it/250x250'
            }
        });

        $(document).ready(function() {
            $('select').material_select();
           
        });
        

    }); // end of document ready
})(jQuery); // end of jQuery name space