jQuery(document).ready(function () {

    jQuery('#testimonials_form').validate({ // initialize the plugin
        rules: {
            title: {
                required: true,
            }
        }
    });

});