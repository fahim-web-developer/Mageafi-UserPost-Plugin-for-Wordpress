<?php 

if ( ! defined('ABSPATH')) exit;  // if direct access 

/*----------------------------------------------------------------------
	create_post_type
----------------------------------------------------------------------*/
function userpost_create_post_type() {
	register_post_type(
		'userpost',//new post type
		array(
			'labels' => array(
				'name' => __( 'Userpost' ),
				'singular_name' => __( 'Userpost' )
			),
			'public' => true,
			'supports' => array('title','editor','thumbnail'),
			'hierarchical' => false
		)
	);	
}
add_action( 'init', 'userpost_create_post_type' );


/*----------------------------------------------------------------------
	Add Meta Box 
----------------------------------------------------------------------*/

   add_action( 'add_meta_boxes', 'dynamic_add_custom_box' );


 /* Adds a box to the main column on the Post and Page edit screens */
    function dynamic_add_custom_box() {
        add_meta_box(
            'dynamic_sectionid',
            __( 'My Tracks', 'myplugin_textdomain' ),
            'dynamic_inner_custom_box',
            'post');
    }

    /* Prints the box content */
    function dynamic_inner_custom_box() {
        global $post;
        // Use nonce for verification
        wp_nonce_field( plugin_basename( __FILE__ ), 'dynamicMeta_noncename' );
        ?>
        <div id="meta_inner">
        <?php

        //get the saved meta as an array
        $songs = get_post_meta($post->ID,'songs',false);

        $c = 0;
        if ( count( $songs ) > 0 ) {
            foreach( $songs as $track ) {
                if ( isset( $track['title'] ) || isset( $track['track'] ) ) {
                    printf( '<p>Song Title <input type="text" name="songs[%1$s][title]" value="%2$s" /> -- Track number : <input type="text" name="songs[%1$s][track]" value="%3$s" /><span class="remove">%4$s</span></p>', $c, $track['title'], $track['track'], __( 'Remove Track' ) );
                    $c = $c +1;
                }
            }
        }

        ?>
    <span id="here"></span>
    <span class="add"><?php _e('Add Tracks'); ?></span>
    <script>
        var $ =jQuery.noConflict();
        $(document).ready(function() {
            var count = <?php echo $c; ?>;
            $(".add").click(function() {
                count = count + 1;

                $('#here').append('<p> Song Title <input type="text" name="songs['+count+'][title]" value="" /> -- Track number : <input type="text" name="songs['+count+'][track]" value="" /><span class="remove">Remove Track</span></p>' );
                return false;
            });
// The live() method was deprecated in jQuery version 1.7, and removed in version 1.9. Use the on() method instead. We can use .on
            $(".remove").live('click', function() {
                $(this).parent().remove();
            });
        });
        </script>
    </div><?php

    }

/* When the post is saved, saves our custom data */
function dynamic_save_postdata( $post_id ) {
    // verify if this is an auto save routine. 
    // If it is our form has not been submitted, so we dont want to do anything
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
        return;

    // verify this came from the our screen and with proper authorization,
    // because save_post can be triggered at other times
    if ( !isset( $_POST['dynamicMeta_noncename'] ) )
        return;

    if ( !wp_verify_nonce( $_POST['dynamicMeta_noncename'], plugin_basename( __FILE__ ) ) )
        return;

    // OK, we're authenticated: we need to find and save the data

    $songs = $_POST['songs'];

    update_post_meta($post_id,'songs',$songs);
}
 /* Do something with the data entered */
    add_action( 'save_post', 'dynamic_save_postdata' );








/*===============================================
	Save testimonial Options Meta Box Function
=================================================*/

// function userpost__save_meta_box($post_id){

	/*----------------------------------------------------------------------
		Position
	----------------------------------------------------------------------*/
// 	if(isset($_POST['position_input'])) {
// 		update_post_meta($post_id, 'position', $_POST['position_input']);
// 	}

// }
// add_action('save_post', 'userpost__save_meta_box');