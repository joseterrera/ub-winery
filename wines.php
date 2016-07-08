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
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
      <script src="hamburgler.js"> </script>
        <link rel="stylesheet" href="hamburgler.css">
      <link rel="stylesheet" href="css/normalize.min.css">
      <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" href="css/about.css">
      <link rel="stylesheet" href="css/contact.css">
      <link rel="stylesheet" href="css/wines.css">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
      <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
  </head>
  <body>
  <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
<?php include "includes/header.php";?>
  <div class="wine-background">
      <div class="more-info">
        <h2>Our Wines</h2>
          <h3>We always welcome visitors at our winery,</br> and we can also ship our wine to your door. </h3>
          <a href="contact.php"><button>Contact</button></a>
      </div>
  </div>
  <section>                       
    <div class="featured"></div>
  </section>
  <!-- <div class="space"></div> -->
    <button class="order-wine container center-block">Order Wine</button>

    <div id="purchase-wines">
      <section id="contact"> 
        <div class="container">
          <form name="htmlform" method="post" action="tosender.php">
            <input type="text" name="name" placeholder="NAME" required>
              
            <input  type="email" name="email" placeholder="MAIL" required>
            <!-- <label for="enquiry">Enquiry: </label>
              <select id="enquiry" name="enquiry">
                  <option value="general">General</option>
                  <option value="sales">Sales</option>
                  <option value="support">Support</option>
              </select> -->
            <textarea name="message" placeholder="MESSAGE" required ></textarea>
    <!--         <div class="checkbox-style"><label><input type="checkbox" id="checkbox-toggle" name="wine" value="Accept" onClick="EnableSubmit()"> Would you like to purchase some of our wine?</label></div>
            <Label name="">Purchase by Case</Label></br>
            <select name="os" id="wineSelection" class="selection" disabled> -->
            <!-- json data -->
          <!--   </select>
            <select name="os" id="quantitySelection" class="quantity" disabled>
            <option value="1">1</option>
            <option value="2">2</option>
            <option  value="3">3</option>
            <option  value="4">4</option>
            <option  value="5">5</option>
            <option  value="6">6</option>
            <option  value="7">7</option>
            <option  value="Other Amount">Other Amount</option>
            </select><br /><br/> -->
            <button name="send" type="submit" class="submit">SEND</button>
          </form>
        </div>
      </section>
    </div>
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

      // var showData= $('#featured-wine');
      $.getJSON("data/products.json", function addData(data) {
        console.log(data);
        var items = [];
          $.each( data, function( key, val ) {
              items.push( 
                "<div class='featured-list col-sm-4 thumbnail' id='" + key + "'>" 
               
                +"<a href='#myModal' data-toggle='modal'><img src="+val.productPhotos[0] +" class='featured-image img-responsive' id='myImg'/></a>"  
               + "<span class='caption'><h4 class='wine-title'>" + val.name + " - " + val.winemaker + "</h4></span>" 
                +"</div>");
              });
           
            $( "<div>", {
                "class": "wine-product-list",
                html: items.join( "" )
            }).appendTo( ".featured" );
        });
      </script>

        <script>
           window.onload = function() {
            $.getJSON("data/products.json", function addData(data) {
          // console.log(data);
                var items = [];
                $.each( data, function( key, val ) {
                  document.getElementById(key).addEventListener('click', function (e) {
                    console.log('testing');
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
        <script>
        // var showData= $('#featured-wine');
        $.getJSON("data/products.json", function addData(data) {
          console.log(data);
                var items = [];
                $.each( data, function( key, val ) {
                items.push( 
                    "<option value=" + key + ">" + val.name + "</option>");
                });
                $('.selection').html(items.join(''));
             });
        </script>
        <script>
        $("#checkbox-toggle").click(function() {
        $("#wineSelection").attr("disabled", !this.checked);
        $("#quantitySelection").attr("disabled", !this.checked);
        });
        </script>
        <script>
            $(function(){
            $('.order-wine').on('click', function(e){
                 e.preventDefault();
              $(this).next('#purchase-wines').show();
            });
          });
        </script>


</body>
</html>