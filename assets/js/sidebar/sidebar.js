/**
 * Created with JetBrains PhpStorm.
 * User: bloodmoonshard
 * Date: 01.05.15
 * Time: 19:34
 * To change this template use File | Settings | File Templates.
 */
jQuery(document).ready(function(){
    $('#addElementSidebar').on('click', function(){
        jQuery.ajax({
            url: '/admin/sidebar/add_element',
            data: jQuery('#addElement').serialize(),
            dataType: 'json',
            method: 'POST',
            success: function(r){
                if(r.status){
                    window.location.href = window.location.href;
                }
            }
        })
    })

})
