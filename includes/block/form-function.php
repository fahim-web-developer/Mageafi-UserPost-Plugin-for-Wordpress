<?php 
    if(isset($_POST['ispost'])){
        $post_title = $_POST['title'];
        $post_content = $_POST['content'];
        $position_input = $_POST['position_input'];
        $webtestimonial_rating__list = $_POST['webtestimonial_rating__list'];
        $image = $_FILES['image']['name'];
        $new_post = array(
            'post_title' => $post_title,
            'post_content' => $post_content,
            'position_input' => $position_input,
            'webtestimonial_rating__list' => $webtestimonial_rating__list,
            'post_status' => 'pending',
            'post_type' => 'webtestimonial',
        );

        $pid = wp_insert_post($new_post);
        add_post_meta($pid, 'meta_key', true);

        if (!function_exists('wp_generate_attachment_metadata'))
        {
            require_once(ABSPATH . "wp-admin" . '/includes/image.php');
            require_once(ABSPATH . "wp-admin" . '/includes/file.php');
            require_once(ABSPATH . "wp-admin" . '/includes/media.php');
        }

        if ($_FILES){
            foreach ($_FILES as $file => $array){
                if ($_FILES[$file]['error'] !== UPLOAD_ERR_OK){
                    return "upload error : " . $_FILES[$file]['error'];
                }
                $attach_id = media_handle_upload( $file, $pid );
            }
        }
        
        if ($attach_id > 0){
            update_post_meta($pid, '_thumbnail_id', $attach_id);
        }

        $my_post1 = get_post($attach_id);
        $my_post2 = get_post($pid);
        $my_post = array_merge((array)$my_post1, (array) $my_post2);

    }
?>

