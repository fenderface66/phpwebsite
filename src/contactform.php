


    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


@@include('./header.php')


    <section class="contact-main">
        <div class="social-circles">
            <!--
                <div class="facebook hvr-bob">
                    <a class="ion-social-facebook facebook" href="https://www.facebook.com/Robbie-Heygate-UX-Developer-819055561545297/timeline/"></a>
                </div>
-->
            <div class="Twitter hvr-bob">
                <a class="ion-social-twitter twitter" href="https://twitter.com/RobbieHeygate?lang=en-gb"></a>
            </div>
            <div class="LinkedIn facebook hvr-bob">
                <a class="ion-social-linkedin linkedin" href="https://uk.linkedin.com/pub/robbie-heygate/101/471/499
"></a>
            </div>

        </div>
        <form method="post" action="contactform.php">
            <legend>Get in touch</legend>
            <label for="name">Name</label>
            <input class="details" name="name" placeholder="Type Here">

            <label for="email">Email</label>
            <input class="details" name="email" type="email" placeholder="Type Here">

            <label for="message">Message</label>
            <textarea name="message" placeholder="Type Here"></textarea>

            <label>What is 2+7?</label>
            <input class="validator" name="human" placeholder="Type Here">

            <input id="submit" name="submit" type="submit" value="Submit">

        </form>




    </section>


    @@include('./footer.php')

