<?php include 'includes/header.php'; ?>
        <title>Home Cleaning Services in Princes Risborough, Aylesbury, Great Missenden, Prestwood, Great Kingshill, Wendover and Surrounding Areas | AJA Domestic Services</title>
        <meta name="description" content="">
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


        <!-- Add your site or application content here -->
        <div class="home header">
          <div class="container">
            <?php include 'includes/navigation.php' ?>

            <div class="sixteen columns">
              <h1> HOME CLEANING SERVICES IN BUCKS </h1>
              <h2 class="mobile-hide"> WE PROVIDE PREMIUM QUALITY DOMESTIC SERVICES INCLUDING REGULAR HOUSE CLEANING, IRONING, END OF TENANCY CLEANING AND CARPET CLEANING </h2>
              <a href="contact.php" class="home-button"> Get a Quote </a>
            </div>
          </div>
        </div>
      
        <!-- Body Section -->
      
        <div class="container">
          <div class="row">
            <div class="columns eight">
              <h2> OUR SERVICES </h2>
            </div>
            <div class="columns eight">
              <h2 class="tel mobile-hide"> CALL US: 07809676082 </h2>
            </div>
          </div>
            <div class="row">
              <div class="column one-third">
                <h3> Regular Cleaning </h3>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pellentesque est ante, id interdum neque vestibulum et. Vestibulum lacinia vulputate interdum. Duis a nibh semper, imperdiet arcu et, aliquet dolor. Cras posuere vehicula odio ac imperdiet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi maximus orci vitae viverra faucibus. Vivamus ut arcu erat. </p>
                <a class="find-out-more" href="services.php"> find out more </a>
              </div>
              <div class="column one-third">
                <h3> Ironing </h3>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pellentesque est ante, id interdum neque vestibulum et. Vestibulum lacinia vulputate interdum. Duis a nibh semper, imperdiet arcu et, aliquet dolor. Cras posuere vehicula odio ac imperdiet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi maximus orci vitae viverra faucibus. Vivamus ut arcu erat. </p>
                <a class="find-out-more" href="services.php"> find out more </a>
              </div>
              <div class="column one-third">
                <h3> End of Tenancy </h3>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pellentesque est ante, id interdum neque vestibulum et. Vestibulum lacinia vulputate interdum. Duis a nibh semper, imperdiet arcu et, aliquet dolor. Cras posuere vehicula odio ac imperdiet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi maximus orci vitae viverra faucibus. Vivamus ut arcu erat. </p>
                <a class="find-out-more" href="services.php"> find out more </a>
              </div>
            </div>
              <div class="row home-row">
                <div class="columns eight">
                  <h2>Get in touch</h2>
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
                <div class="columns eight home-locations">
                  <h2>Places we serve</h2>
                  <p>We work all over Bucks in Princes Risborough, Aylesbury, Great Missenden, Great Kingshill, High Wycombe, Prestwood, Great Hampden, Speen, Naphill and surrounding areas.</p>
                  <p>You can use the form to get in touch or click below to find out more about AJA Domestic Services. </p>
                  <a class="find-out-more" href="services.php"> find out more </a>
                </div>
          </div>
      </div>
          
          <!-- Begin Footer -->
          
        <?php include 'includes/footer.php'; ?>

    </body>
</html>
