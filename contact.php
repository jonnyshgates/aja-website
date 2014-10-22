<?php include 'includes/header.php'; ?>
        <title>Home Cleaning Services in Princes Risborough, Aylesbury, Great Missenden, Prestwood, Great Kingshill, Wendover and Surrounding Areas | AJA Domestic Services</title>
        <meta name="description" content="">
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


        <!-- Add your site or application content here -->
        <div class="header content">
          <div class="container">
            <?php include 'includes/navigation.php' ?>

            <div class="sixteen columns">
              <h1> CONTACT US </h1>
            </div>
          </div>
        </div>
      
        <!-- Body Section -->
      
        <div class="container">
          <div class="row">
            <div class="twelve columns">
              <h2> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras condimentum, lacus eu sagittis vestibulum, purus metus vestibulum metus, vitae rutrum ipsum leo sit amet est. Mauris interdum diam a varius malesuada. Nullam iaculis, enim quis facilisis vehicula, ipsum justo consectetur ante, a eleifend felis tellus sed nisi. </h2>
              <h3>Get in touch</h3>
              <form action='functions/contact-form.php'  method='POST' >
                <label for="name">Name</label>
                <input type="text" name="name" placeholder="Your name" required>
                <label for="email address">Email Address</label>
                <input type="text" name="email" placeholder="Your email address">
                <label for="number">Telephone Number</label>
                <input type="text" name="telephone" placeholder="Your telephone">
                <label for="addinfo">Additional Info</label>
                <textarea name="addinfo">Additional information</textarea>
                <input text="text" class="hidden" name="robot-test">
                <br>
                <input type="submit" class="submit" value="send">
              </form>

            </div>
            <div class="four columns sidebar">
            </div>
          </div>
        </div>
          
          <!-- Begin Footer -->
          
        <?php include 'includes/footer.php'; ?>

    </body>
</html>
