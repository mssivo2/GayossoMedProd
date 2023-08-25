$(document).on('ready',function(){  
  function getUtm(name) {
      var match = RegExp('[?&]' + name + '=([^&]*)').exec(window.location.search);
      return match && decodeURIComponent(match[1].replace(/\+/g, ' '));
  }
  var utmSource = getUtm('utm_source');
  var utmCampaign = getUtm('utm_campaign');
  var utmContent = getUtm('utm_content');
  if (utmSource) {
      $('#utm_source').val(utmSource);
  }
  if (utmCampaign) {
      $('#utm_campaign').val(utmCampaign);
  }
  if (utmContent) {
      $('#utm_content').val(utmContent);
  }

  $("#form-gayosso").submit(function( event ) {    
      event.preventDefault();
      var params = {                      
        "name" : $("#name").val(),      
        "lastname" : $("#lastname").val(),      
        "phone" : $("#phone").val(),      
        "email" : $("#email").val(),            
        "state" : $("#state").val(),      
        "interest" : $("#interest").val(), 
        "utm_source" : $("#utm_source").val(),            
        "utm_campaign" : $("#utm_campaign").val(),      
        "utm_content" : $("#utm_content").val(),      
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