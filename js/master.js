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

    // $(".nav-Element").click (function(event){
    //   event.preventDefault();
    //   $.get("index.php?action=" + $(this).attr("href"), function(data) {
    //     $('#body').html(data);
    //     console.log("sa");
    //   });
    // });

});
