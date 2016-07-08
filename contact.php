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
        <link rel="stylesheet" href="css/wines.css">
        <link rel="stylesheet" href="css/contact.css">
      <!--   <link rel="stylesheet" href="css/style.css"> -->
        <!-- <link rel="stylesheet" href="css/mobile-nav.css"> -->
   <!--        <script src="hamburgler.js"> </script>
          <link rel="stylesheet" href="hamburgler.css"> -->
             <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

      <?php include "includes/header.php";?>
      <div class="container-fluid contact-background text-center">
         <h2 class=""> Come Visit Us</h2>
         <h4>Highway 79 Erie Canal</br>Green Mountains, Washington</h4>
      </div>

      <div class="container-fluid">
        <div class="container more-info-contact">
         <h3>Off the road</h3>
         <p>Erie-Freewater was founded in the mid-1800’s alongside what is now known as the Erie Canal River. This pristine river has its source 25 miles southeast of Erie-Freewater in Washington’s beautiful Green Mountains. From there the river meanders through Sunnyville, traversing southeastern Washington and finally merging with the mighty Columbia.</p>
        </div>
        <div class="col-md-8 col-md-offset-2 map-responsive">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d86151.17664823408!2d-122.87685288866251!3d47.563424717616485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5490339243f8d50d%3A0xf689ee87c2c14107!2sGreen+Mountain!5e0!3m2!1sen!2sar!4v1467218531491"  frameborder="0" width="450" height="450" style="border:0" allowfullscreen></iframe>
        </div>


      </div>
<section id="contact">
  <h2 class="contact-title">Write To Us</h2>
    <div class="container">
      <form name="htmlform" method="post" action="tosender.php">
        <input type="text" name="name" placeholder="NAME" required>   
        <input  type="email" name="email" placeholder="MAIL" required>
<!--         <label for="enquiry">Enquiry: </label>
          <select id="enquiry" name="enquiry">
            <option value="general">General</option>
            <option value="sales">Sales</option>
          </select> -->
        
        <textarea name="message" placeholder="MESSAGE" required ></textarea>

      <!--    <div class="checkbox-style inline"><label class="inline"><input type="checkbox" id="checkbox-toggle" name="wine" value="Accept" onClick="EnableSubmit()"> Would you like to purchase some of our wine?</label></div>
        <label name="">Purchase by Case</label></br>
          <select name="os" id="wineSelection" class="selection" disabled>
          <! json data 
          </select>

        <select name="os" id="quantitySelection" class="quantity" disabled>
          <option selected="selected" value="1">1</option>
          <option value="2">2</option>
          <option  value="3">3</option>
          <option  value="4">4</option>
          <option  value="5">5</option>
          <option  value="6">6</option>
          <option  value="7">7</option>
          <option  value="Other Amount">Other Amount</option>
        </select><br /><br /> -->

        <button name="send" type="submit" class="submit">SEND</button>
    </form>
  </div>
</section>

<?php include "includes/footer.php";?>

    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.js"><\/script>')</script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <script>
    // var showData= $('#featured-wine');
    $.getJSON("data/products.json", function addData(data) {
      // console.log(data);
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
</body>
</html>
