$(document).ready(function(){
    
    $("#nameCountry").blur(function(){
        var nameCountry = $(this).val();
        
        
        if(nameCountry.trim() ==''){
            $('#errorCountry').text('Заполните поле');
            $('#errorCountry').css('display', 'block');
        }
        else {
            $.ajax({
                type: "POST",
                url: "index.php",
                data: {nameCountry : nameCountry},
                success: function(data) {if (data == 1) {
                    $('#errorCountry').text('Все ок');
                    $('#errorCountry').css('display', 'block');
                }
        }
        
        
    });
});