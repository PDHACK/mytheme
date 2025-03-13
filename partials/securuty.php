// En functions.php  
check_ajax_referer('techmaster_nonce', 'nonce');  
wp_localize_script('techmaster-custom', 'techmasterData', array(  
    'ajaxurl' => admin_url('admin-ajax.php'),  
    'nonce' => wp_create_nonce('techmaster_nonce')  
));  