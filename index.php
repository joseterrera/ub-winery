<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="hamburgler.js"> </script>
          <link rel="stylesheet" href="hamburgler.css">
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
 
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
        
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
     
         <script src="js/main.js"></script>
         <script>
  $('ul.nav li.active').removeClass('active')

  $("ul.nav a[href$='#{ window.location.pathname }']").parents('li').addClass('active')
         </script>

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


<?php include "includes/header.php";?>

      <div class="home-background">
        <h2>Discover U&B Winery</h2>
      </div>
  <div class="container-fluid welcome-text">
    <h2>Award-Winning Wine</h2>
    <div class="welcome">
        <p>U&B Winery would like to welcome you to the southern reaches of the exquisite Erie Canal Valley. Erie-Freewater was founded in the mid-1800’s alongside what is now known as the Erie Canal River. This pristine river has its source 25 miles southeast of Erie-Freewater in Washington’s beautiful Green Mountains. From there the river meanders through sunnyville, traversing southeastern Washington and finally merging with the mighty Columbia.</p>
    </div>
</div>
      <ul class="flex-container-home">
        <li class="flex-item item-1 more-info">
          <h3>Visit our winery and learn about the subtle process of our craft</h3><a href="contact.php"><button>Visit Us</button></a>
        </li>
        <li class="flex-item item-2 more-info">
          <h3>Order online a case of our award-winning selections</h3><a href="wines.php"><button>Order our Wines</button></a>
        
        </li>
      </ul>
        <div class="container-fluid">
            <div class="clearfix wine-container">
                  <section>                  
                    <h2 class="featured-title">Featured  Wine</h2>
                        <div class="featured"></div>
                  </section>
                  
            </div> <!-- #main -->
        </div> <!-- #main-container -->
        <a href="wines.php"><button class="see-more center-block">See More Wine</button></a>

        <!-- The Modal -->
        <div id="the-modal-container">    
        <!-- <div id="myModal" class="modal"> -->
          <!-- The Close Button -->
          <!-- <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span> -->
          <!-- Modal Content (The Image) -->
          <!-- Modal Caption (Image Text) -->
          <!-- <div id="caption"></div> -->
        <!-- </div> -->
        </div> <!-- end of the modal container -->


        <?php include "includes/footer.php";?>

        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.js"><\/script>')</script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
         <script>
             $.getJSON("data/featured_products.json", function addData(data) {
                var items = [];
                $.each( data, function( key, val ) {
                items.push( 
                  "<div class='featured-list col-sm-4 thumbnail-wine' id='" + key + "'>" 
                 
                  +"<a href='#myModal' data-toggle='modal'><img src="+val.productPhotos +" class='featured-image img-responsive' id='myImg'/></a>"  
                 + "<span class='caption'><h4 class='wine-title'>" + val.name + " - " + val.winemaker + "</h4></span>" 
                  +"</div>");
                });
             
                $( "<div>", {
                    "class": "wine-product-list",
                    html: items.join( "" )
                }).appendTo( ".featured" );
            });

   window.onload = function() {
            $.getJSON("data/featured_products.json", function addData(data) {
          // console.log(data);
                var items = [];
                $.each( data, function( key, val ) {
                  document.getElementById(key).addEventListener('click', function (e) {
                    // console.log('testing');
            //get element and append them when it is called..this should work!
            $('#the-modal-container').html('<div id="myModal" class="modal">' 

              + '<span class="close" data-dismiss="modal" onclick="document.getElementById(\'myModal\').style.display=\'none\'">&times;</span>'
              + "<img src='" + val.productPhotos  + 
              "' class='modal-content center-block' id='" + key + "' />" + '<div id="caption" class="caption-text">' + '<span class="caption-title">' + val.name + " - " + val.winemaker + "</span>" + "</br>"  + "<span class='taste-summary'>" + val.tastSummary + "</span></br>"

              + val.tastingNotes + "</br>" + "<p class='modal-list'>Well paired with:</p>" +
              '</div></div>');

            var ulHTML = '<ul class="bullet">';
            $.each(val.foodPairings, function(i,v){
              ulHTML += '<li>';
              ulHTML += val.foodPairings[i] + '</li>';
             
            });
             ulHTML += '</ul>';
             $('.modal-list').append(ulHTML);
   
                });

              });
          });


        }

         </script>
    </body>
</html>
