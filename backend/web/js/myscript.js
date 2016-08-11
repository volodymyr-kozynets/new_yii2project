//backend->items->view->view.php
//
//getting filename from [file=input] and put it to 
//#item_photo pole wich loading to DB

(function($, undefined){ 
    $("#items-file_image").change(function(event){
        
        var $fileName = $("#items-file_image")[0].files;
        var $files = [];
        
        $.each($fileName, function(index, value){
            
            $files[index] = (value.name);
        });
        $("#items-item_photo").val($files);
    });
})(jQuery);

// /backend->items->view->view.php













