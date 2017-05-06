/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    $(".email-input").blur(function(){
        var email = this.value;
        $.ajax({
            url: URL+'/email-test',
            data: {email: email},
            type: 'POST',
            success: function(response){
                if(response == "used"){
                    $(".email-input").css("border", "1px solid red");
                } else {
                    $(".email-input").css("border", "1px solid green");
                }
            }
        });
    });
});
