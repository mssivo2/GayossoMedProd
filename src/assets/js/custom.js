$(document).on('ready',function(){  
  $("#form-gayosso").submit(function( event ) {    
      event.preventDefault();
      var params = {                      
        "name" : $("#name").val(),      
        "lastname" : $("#lastname").val(),      
        "phone" : $("#phone").val(),      
        "email" : $("#email").val(),            
        "state" : $("#state").val(),      
        "interest" : $("#interest").val(),      
    };
    var url = "/gayosso/GayossoMed.php";
    $(document).ajaxStart(function () {
      $('button.btn a.btn_light').text('Enviando ...');
    });
    $.ajax({                        
      type: "POST",                 
      url: url, 
      data: params,      
      xhrFields: { withCredentials: true },
      success: function(response)             
      {                  
        console.log(response);
        var data = JSON.parse(response);                
        setTimeout(function(){
          $('button.btn a.btn_light').html("<span>" + data.Message + "</span>");
        }, 100);                     
        setTimeout(function(){
          $('button.btn a.btn_light').text('Solicita información');
          $("#form-gayosso input").val('');
          $("#interest").prop("selectedIndex", "");
          $("#state").prop("selectedIndex", "");
        }, 3000);                  
      }
    });
  });  
});