function CloseMenus()
{

}

$(function() {
  
  $("#Submenu1").click(function(){

    event.preventDefault();

    if ( !$('#pageSubmenu1').is(':visible')) 
    {
      $("#pageSubmenu1").show();
      
      $("#pageSubmenu2").hide();
      $("#pageSubmenu3").hide();
      
    } 
    else 
    {
      $("#pageSubmenu1").hide();
    }

  });

  $("#Submenu2").click(function(){

    event.preventDefault();

    if ( !$('#pageSubmenu2').is(':visible')) 
    {
      $("#pageSubmenu2").show();

      $("#pageSubmenu1").hide();
      $("#pageSubmenu3").hide();
    } 
    else 
    {
      $("#pageSubmenu2").hide();
    }

  });

  $("#Submenu3").click(function(){

    event.preventDefault();

    if ( !$('#pageSubmenu3').is(':visible')) 
    {
      $("#pageSubmenu3").show();
    } 
    else 
    {
      $("#pageSubmenu3").hide();

      $("#pageSubmenu2").hide();
      $("#pageSubmenu1").hide();
    }

  });

});


