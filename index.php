<html>
    
    <head>
        
        <title>anazard's webpage</title>
        
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/custom.css">
        <link rel="stylesheet" href="css/fullpage.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/typed.js"></script>
        <script src="js/avatar.js"></script>
        <script src="js/fullpage.js"></script>
        
        <link href='https://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
        
        <script>
        
            
            $(function(){
              $(".text").typed({
                strings: ["<h1>welcome to anazard.tk</h1><h3>I'll be your host, let's get started</h3><br><h4>please scroll down</h4>"],
                typeSpeed: 0
              });
          });
            
            
            
        </script>
        
    </head>
    
    <body>

       <div class="container-fluid" id="fullpage">
           
           <?php
           
           # Navbar
           require_once 'navbar.php';
           
           # Banner
           require_once 'banner.php';
           
           # Content
           require_once 'about.php';
           require_once 'zardify.php';
           require_once 'technologies.php';
           require_once 'social.php';
           require_once 'contact.php';
           
           # Footer
           
           ?>
           
       </div>
   
    </body>
    
</html>