$(document).ready(function(){


    $(".navbar-mobile-icon i").click(function(){
        $(".navbar-navlinks").toggleClass("navbar-burger-trigger");
    })

     $("#nav-login-trigger").click(function(){
        $(".userLoginForm-container").toggleClass("userLogin-form-triiger");
     })

     $(".form-cross").click(function(){
        $(".userLoginForm-container").toggleClass("userLogin-form-triiger");
     })


   //   mamger

      $("#manager-form-link").click(function(){
         $(".managerLoginForm-container").toggleClass("managerLogin-form-triiger");
      })
 
      $(".manager-form-cross").click(function(){
         $(".managerLoginForm-container").toggleClass("managerLogin-form-triiger");
      })

      // admin
      $("#admin-form-link").click(function(){
         $(".adminLoginForm-container").toggleClass("adminLogin-form-triiger");
      })
 
      $(".admin-form-cross").click(function(){
         $(".adminLoginForm-container").toggleClass("adminLogin-form-triiger");
      })

      // 
      
})