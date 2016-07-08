     <div class="mobilenav">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="wines.php">Wines</a></li>
        <li><a href="contact.php">Contact</a></li>
      </div>   
      <a href="javascript:void(0)" class="icon">
        <div class="hamburger">
        <div class="menui top-menu"></div>
        <div class="menui mid-menu"></div>
        <div class="menui bottom-menu"></div>
        </div>
      </a>
    <div class="desktop-nav">
      <nav>
        <ul class="main-nav">
          <li><a href="index.php" class="logo">U&B</a></li>
            <li><a href="index.php" >Home</a></li>
            <li><a href="/about.php">About</a></li>
            <li><a href="wines.php">Wines</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav> 
    </div>
    <script>
    var selector = 'ul.main-nav li a';
      $(selector).on('click', function(){
      $(selector).removeClass('active');
      $(this).addClass('active');
    });
    </script>