<?php include_once 'header.php';?>

        <!-- Contact -->
      <!--  <section class="flat-contact-page">-->
            <div class="container">
                <div class="row">
                    <div class="col-md-2 wow fadeInUp">
                       
                    </div>
                    <div class="col-md-7 wow fadeInUp"><br><br><br><br><br><br>
                        <div class="contact-right">
                         <form method="post" class="form-contact-right"  action="process.php" accept-charset="utf-8" novalidate="novalidate">
                                <div class="input-row">
                                    <div class="input-name">
                                        <label for="name" class="heading-features">Name (required)</label>
                                        <input id="name" name="name" class="input-contact" type="text" placeholder="Full Name" required>
                                    </div>
                                    <div class="input-phone">
                                        <label for="phone" class="heading-features">Mobile No.</label>
                                        <input id="phone" name="phone" class="input-contact" type="text" placeholder="Phone Number" required>
                                    </div>

                                </div>
                                <div class="input-row">
                                    <div class="input-email" style="width:100%;">
                                        <label id="email" class="heading-features">Email address (required)</label>
                                        <input type="email" name="email" class="input-contact" placeholder="Email Address" required>
                                    </div>
                                   
                                </div>
                              
                                <div class="button">
                                    <button type="submit" class=" btn btn-left" style="width: 50%;">Send message</button>
                                </div>
                            </form><br><br><br><br><br><br>
                        </div>
                    </div>
                </div>
            </div>
       <!-- </section>-->
        <!-- /Contact -->



    

      

    </div>
    <!--/.boxed-->
<?php include_once 'footer.php';?>