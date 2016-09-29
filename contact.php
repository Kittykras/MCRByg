<?php
include './includes/top.inc.php';
include './includes/menu.inc.php';
?>
<script>
    $(document).ready(function () {
        var isMobile = window.matchMedia("only screen and (max-width: 480px)");

        if (isMobile.matches) {
            document.getElementById("adress2").removeAttribute("align");
            $("#adressh4").removeClass("text-right");
            $("#adressh5").removeClass("text-right");
            $("#adressh6").removeClass("text-right");
        }
    });
</script>
<div class="container">
    <div class="headline">
        <h4>Kontakt mig</h4>
    </div>
    <div class="content">
        <div  class="section group">
            <div id="contact"class="col span_1_of_2">
                <iframe id="maps" width="600" height="334" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Vallensved%20Bygade%209%2C%20N%C3%A6stved%2C%20Danmark&key=AIzaSyCCJsjXASMOxrEb7w9ugeaJ_iTy2-yXqos" allowfullscreen></iframe>
            </div>
            <div id="adress2" class="col span_1_of_2" align="right">
                <h4 id="adressh4" class="text-right tlf">Adresse</h4>
                <h4 id="adressh5" class="text-right">MCR Byg v/ Reidar Fjordhøj<br>Vallensved Bygade 9<br>4700 Næstved<br><br>mcrbyg@mcrbyg.dk</h4>
                <h4 id="adressh6" class="text-right"><a href="tel: 31668691"><span class="tlf glyphicon glyphicon-earphone"> 31 66 86 91</span></a></h4>
                <a class="first-icon"href="http://www.houzz.dk/pro/mcrbyg/mcr-byg-v-reidar-fjordhoej" title="houzz.dk"><img src="http://st.hzcdn.com/static_da-DK/badge36_36.png" alt="houzz.dk" width="29px" height="29px" border="0" /></a>
                <a class="first-icon" href="http://www.anmeld-haandvaerker.dk/virksomhed/mcr-byg-v-reidar-fjordh%C3%B8j" title="anmeld-haandvaerkere.dk"><img alt="anmeld-haandvaerkere.dk" height="29px" width="29px" src="https://b2bdoc.net/upl9004859/img/smiley-h%C3%A5ndv%C3%A6rk-din-garanti_NY_ORIGINAL-uden-Payoff.jpg"></a>
                <a class="middle-icon" href="https://plus.google.com/102771004071791919564" title="plus.google.com"><img alt="plus.google.com" height="29px" width="29px" src="images/g+icon_red.png"></a>
                <a href="https://www.facebook.com/MCRBYG/" title="facebook.com"><img alt="facebook.com" src="images/FB-f-Logo__blue_29.png"></a>
                <form class="smsform"role="form" action="sendSms.php" method="post">
                    <div class="form-group">
                        <input name="name" type="text" class="form-control" placeholder="Dit navn">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" placeholder="Din besked"></textarea>
                        <?php if (isset($_GET["smssuccess"])) { ?>
                            <span class="text-left help-block text-success">Din sms blev sendt. Tak.</span>
                        <?php } ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Send SMS</button>
                </form>
            </div>
        </div>
        <form class="contactform" method="post" action="http://www.mcrbyg.dk/cgi-bin/FormMail.pl" 
              accept-charset="ISO-8859-1" onsubmit="var originalCharset = document.charset;
                      document.charset = 'ISO-8859-1';
                      window.onbeforeunload = function () {
                          document.charset = originalCharset;
                      };">
            <div class="section group">
                <div class="col span_1_of_2">
                    <div class="form-group">
                        <input class="form-control" type="text" name="realname" placeholder="Navn">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="subject" placeholder="Vedrørende">
                    </div>
                </div>
                <div class="col span_1_of_2">
                    <div class="form-group">
                        <textarea class="form-control" rows="6" name="Message" placeholder="Din besked"></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Send email</button>
            <input type="hidden" name="recipient" value="mcrbyg@mcrbyg.dk" />
            <input type="hidden" name="redirect" 
                   value="../contact.php?success" />
            <input type="hidden" name="missing_fields_redirect" 
                   value="../contact.php?error" />
            <input type="hidden" name="required" value="realname,email,Message" />
        </form>
    </div>
</div>
<?php
if (isset($_GET["success"])) {
    ?>
    <div class="container" align="center">
        <span class="help-block text-success">Din email blev sendt. Tak.</span>
    </div>
    <?php
}
if (isset($_GET["error"])) {
    ?>
    <div class="container" align="center">
        <span class="help-block text-danger">Det mislykkedes at sende din email. Prøv venligst senere eller kontakt Annette Sund på email: Silqe@hotmail.com.<br><?php echo $_GET["error"] ?></span>
    </div>
    <?php
}
include './includes/footer.inc.php';

