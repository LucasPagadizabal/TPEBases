$(document).ready(function(){

    $(".nav-Element").click (function(event){
       event.preventDefault();
      var dir = $(this).attr("href");
      $.get("index.php?action="+dir,function(data) {
        //console.log(data);
        $('.page').html(data);
        //initDynamicEventHandlers();
      });
    });

    $(document).on("click",".sel-serv", function(event){
       event.preventDefault();
      var nro = $(this).attr("nroSer");
      $.get("index.php?action=servicio"+nro,function(data) {
        console.log(data);
        $('.page').html(data);
        //initDynamicEventHandlers();
      });
    });

  //  object.onchange = function(){myScript};
  $(document).on("change",".idCompetenciaSel", function(event){
    event.preventDefault();
    //console.log($(this).val());
   $.get("index.php?action=servicio1lista",{ idcompetencia: $(this).val() },function(data) {
     console.log(data);
     $('#serv1lista').html(data);
     //initDynamicEventHandlers();
   });
  });

    $(document).on("submit", ".formComp", function(event)
    {
        event.preventDefault();
        var url=$(this).attr("href");
        $.ajax({
            url: url,
            type: $(this).attr("method"),
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function (data)
            {
              $('.page').html(data);
            },
        });
    });


    $(document).on("submit", ".formDeportista", function(event)
    {
        event.preventDefault();
        var url=$(this).attr("href");
        $.ajax({
            url: url,
            type: $(this).attr("method"),
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function (data)
            {
              $('.page').html(data);
            },
        });
    });

    $(document).on("change","#addFederaciones",function(ev) {
      ev.preventDefault();

      if($("#federaciones").attr("disabled") == "disabled"){
        $("#federaciones").removeAttr('disabled');
      }else{
        $("#federaciones").attr("disabled","disabled");
      }
    })

    $(document).on("change","#federado",function(ev) {
      ev.preventDefault();

    })
});
