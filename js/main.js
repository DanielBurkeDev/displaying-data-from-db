


    $(document).ready(function(){
       

        $("nav .navbar .navbar-nav .nav-link").on("click", function(){
            $("nav .navbar .navbar-nav").find(".active").removeClass("active");
            $(this).addClass("active");
         });


         
         
    });

    // console.log("arrived in main js");

    