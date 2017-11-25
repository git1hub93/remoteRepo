<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
       

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" type="text/css" href="style.css">
        <title></title>
        <script>
            $(document).ready(function(){
                
                 $(".tint").hover(function(){
                    
                      $(this).animate({backgroundColor:'#32CD32'}, 400);
                      $(this).find(".ico").css("color", "darkslategray"); 
                      $(this).find(".cap").css("color", "darkslategray");
                      $(this).find(".ico").css("top", "25%"); 
                      $(this).find(".cap").css("top", "39%"); 
                      $(this).find(".para").show();
                      $(this).find(".but").show();
                   }, function() {
                       
                        $(this).animate({backgroundColor:'#2f4f4f'}, 100);
                        $(this).find(".ico").css("color", "limegreen"); 
                        $(this).find(".cap").css("color", "limegreen"); 
                        $(this).find(".para").hide();
                        $(this).find(".but").hide();
                        $(this).find(".ico").css("top", "45%"); 
                        $(this).find(".cap").css("top", "59%"); 
                    }
                ); 
        });
        </script>
    </head>
    <body>
       
           <div class = "col-sm-2 img-col">
               <div class = "tint" id = "tint1">
                <img class = "img-class" src = "images/1.jpg">
                <i class="fa fa-product-hunt fa-5x ico"> </i>
                <h4 class = "cap"> Branding </h4>
                <p class = "para"> Implementation of elements combined with ideas to create an artwork <br> that can express something in short time through out the design </p>
                <button class = "btn but" data-toggle="modal" data-target="#myModal1"> find out more </button>
               </div>
           </div>
           <div class = "col-sm-2 img-col">
               <div class = "tint" id = "tint2">
                   
                <img class = "img-class" src = "images/2.jpg">
                 <i class="fa fa-camera fa-5x ico">  </i>
                 <h4 class = "cap"> Photography </h4>
                 <p class = "para"> Enjoy our service that offered by a group of professional photographers <br>  using unique ideas and the best equipment.  </p>
                 <button class = "btn but" data-toggle="modal" data-target="#myModal2"> find out more </button>
                 </div>
           </div>
           <div class = "col-sm-2 img-col">
               <div class = "tint" id = "tint3">
                   
                <img class = "img-class" src = "images/3.jpg">
                 <i class="fa fa-thumbs-up fa-5x ico">  </i>
                 <h4 class = "cap"> Social Media </h4>
                  <p class = "para"> Great facebook pages educate, interact and connect with your target market. <br> It is also fast, efficient, effective and fun </p>
                <button class = "btn but" data-toggle="modal" data-target="#myModal3"> find out more </button>
                 </div>
           </div>
           <div class = "col-sm-2 img-col">
               <div class = "tint" id = "tint4">
                   
                <img class = "img-class" src = "images/4.jpg">
                 <i class="fa fa-paint-brush fa-5x ico">  </i>
                 <h4 class = "cap"> Web design </h4>
                  <p class = "para"> Stand out within the online community <br>  with our advanced process-driven web services.  </p>
                <button class = "btn but" data-toggle="modal" data-target="#myModal4"> find out more </button>
                 </div>
           </div>
           <div class = "col-sm-2 img-col">
               <div class = "tint" id = "tint5">
                   
                <img class = "img-class" src = "images/5.jpg">
                 <i class="fa fa-envelope fa-5x ico">  </i>
                 <h4 class = "cap"> SMS Marketing </h4>
                 <p class = "para"> Choose your boom through our sms campaigns <br> ( Targeting by street - Mobile advertising - Bulk sms - Location based service ).  </p>
                <button class = "btn but" data-toggle="modal" data-target="#myModal5"> find out more </button>
                 </div>
           </div>
           <div class = "col-sm-2 img-col">
               <div class = "tint" id = "tint6">
                  
                <img class = "img-class" src = "images/6.jpg">
                 <i class="fa fa-video-camera fa-5x ico">  </i>
                 <h4 class = "cap"> Media Product </h4>
                <p class = "para"> With our wide range of TV channels we can serve you <br> in TV advertisement and executive production.  </p>
                <button class = "btn but" data-toggle="modal" data-target="#myModal6"> find out more </button>
                 </div>
           </div>
     
        <div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

  
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" style = "color:white;">&times;</button>
        <h4 class="modal-title"> Branding </h4>
      </div>
      <div class="modal-body">
          <img class = "img-responsive" src = "images/11.jpg">
        <p> Branding is an art based on the implementation of elements combined with ideas to create an artwork that can express something in short time throughout the design.

Therefore, we care so much about graphic design. we have a very professional team of graphic designers that work hard on creating creative and unique ideas to be able to reach all our clients desires and provide them with the best solutions and the greatest results.

We also do "Whole Corporate Identity" that starts with "Logo Design" and creating the corporate identification by using shapes and colors that creates a successful corporatie to our clients.

At Reyana we print all the contents belonging to "Whole Identification" for big corporates.

We do: Branding - Logo Design - Printing (Flyers, Brochures Cataluges, Posters, Stationary, Business Cards).

We use the latest technologies in printing as well as the latest machines and gear, Using special colors and hot stamping, along with other printing service choices, in order to give you an amazing service. </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
        
        
        
   <div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

  
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" style = "color:white;">&times;</button>
        <h4 class="modal-title"> Photography </h4>
      </div>
      <div class="modal-body">
          <img class = "img-responsive" src = "images/22.jpg">
        <p> Branding is an art based on the implementation of elements combined with ideas to create an artwork that can express something in short time throughout the design.

Therefore, we care so much about graphic design. we have a very professional team of graphic designers that work hard on creating creative and unique ideas to be able to reach all our clients desires and provide them with the best solutions and the greatest results.

We also do "Whole Corporate Identity" that starts with "Logo Design" and creating the corporate identification by using shapes and colors that creates a successful corporatie to our clients.

At Reyana we print all the contents belonging to "Whole Identification" for big corporates.

We do: Branding - Logo Design - Printing (Flyers, Brochures Cataluges, Posters, Stationary, Business Cards).

We use the latest technologies in printing as well as the latest machines and gear, Using special colors and hot stamping, along with other printing service choices, in order to give you an amazing service. </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
        
        
        <div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog">

  
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" style = "color:white;">&times;</button>
        <h4 class="modal-title"> Social Media </h4>
      </div>
      <div class="modal-body">
          <img class = "img-responsive" src = "images/33.jpg">
        <p> Branding is an art based on the implementation of elements combined with ideas to create an artwork that can express something in short time throughout the design.

Therefore, we care so much about graphic design. we have a very professional team of graphic designers that work hard on creating creative and unique ideas to be able to reach all our clients desires and provide them with the best solutions and the greatest results.

We also do "Whole Corporate Identity" that starts with "Logo Design" and creating the corporate identification by using shapes and colors that creates a successful corporatie to our clients.

At Reyana we print all the contents belonging to "Whole Identification" for big corporates.

We do: Branding - Logo Design - Printing (Flyers, Brochures Cataluges, Posters, Stationary, Business Cards).

We use the latest technologies in printing as well as the latest machines and gear, Using special colors and hot stamping, along with other printing service choices, in order to give you an amazing service. </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>        
        
        
        
  <div id="myModal4" class="modal fade" role="dialog">
  <div class="modal-dialog">

  
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" style = "color:white;">&times;</button>
        <h4 class="modal-title"> Web design </h4>
      </div>
      <div class="modal-body">
          <img class = "img-responsive" src = "images/44.jpg">
        <p> Branding is an art based on the implementation of elements combined with ideas to create an artwork that can express something in short time throughout the design.

Therefore, we care so much about graphic design. we have a very professional team of graphic designers that work hard on creating creative and unique ideas to be able to reach all our clients desires and provide them with the best solutions and the greatest results.

We also do "Whole Corporate Identity" that starts with "Logo Design" and creating the corporate identification by using shapes and colors that creates a successful corporatie to our clients.

At Reyana we print all the contents belonging to "Whole Identification" for big corporates.

We do: Branding - Logo Design - Printing (Flyers, Brochures Cataluges, Posters, Stationary, Business Cards).

We use the latest technologies in printing as well as the latest machines and gear, Using special colors and hot stamping, along with other printing service choices, in order to give you an amazing service. </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>  
        
        
  <div id="myModal5" class="modal fade" role="dialog">
  <div class="modal-dialog">

  
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" style = "color:white;">&times;</button>
        <h4 class="modal-title"> SMS Marketing </h4>
      </div>
      <div class="modal-body">
          <img class = "img-responsive" src = "images/55.jpg">
        <p> Branding is an art based on the implementation of elements combined with ideas to create an artwork that can express something in short time throughout the design.

Therefore, we care so much about graphic design. we have a very professional team of graphic designers that work hard on creating creative and unique ideas to be able to reach all our clients desires and provide them with the best solutions and the greatest results.

We also do "Whole Corporate Identity" that starts with "Logo Design" and creating the corporate identification by using shapes and colors that creates a successful corporatie to our clients.

At Reyana we print all the contents belonging to "Whole Identification" for big corporates.

We do: Branding - Logo Design - Printing (Flyers, Brochures Cataluges, Posters, Stationary, Business Cards).

We use the latest technologies in printing as well as the latest machines and gear, Using special colors and hot stamping, along with other printing service choices, in order to give you an amazing service. </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
        
        
   <div id="myModal6" class="modal fade" role="dialog">
  <div class="modal-dialog">

  
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" style = "color:white;">&times;</button>
        <h4 class="modal-title"> Media production </h4>
      </div>
      <div class="modal-body">
          <img class = "img-responsive" src = "images/66.jpg">
        <p> Branding is an art based on the implementation of elements combined with ideas to create an artwork that can express something in short time throughout the design.

Therefore, we care so much about graphic design. we have a very professional team of graphic designers that work hard on creating creative and unique ideas to be able to reach all our clients desires and provide them with the best solutions and the greatest results.

We also do "Whole Corporate Identity" that starts with "Logo Design" and creating the corporate identification by using shapes and colors that creates a successful corporatie to our clients.

At Reyana we print all the contents belonging to "Whole Identification" for big corporates.

We do: Branding - Logo Design - Printing (Flyers, Brochures Cataluges, Posters, Stationary, Business Cards).

We use the latest technologies in printing as well as the latest machines and gear, Using special colors and hot stamping, along with other printing service choices, in order to give you an amazing service. </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>     
        
        
        
        
    </body>
</html>