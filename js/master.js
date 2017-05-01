$(document).ready(function(){

    $(".nav-Element").click (function(event){
       event.preventDefault();
      var dir = $(this).attr("href");
      $.get("index.php?action="+dir,function(data) {
        console.log(data);
        $('.page').html(data);
        //initDynamicEventHandlers();
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
