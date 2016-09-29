<?php
include './includes/top.inc.php';
include './includes/menu.inc.php';
include './database/commenthandler.php';
?>
<script>
    $('iframe').load(function () {
        $(this).height($(this).contents().outerHeight());
    });
</script>
<div class="container">
    <div class="headline">
            <h4>Referencer</h4>
    </div>
    <div id="comments">
        <div class="addedcomments">
            <h4>Andre har skrevet:</h4>
<?php foreach ($comments as $comment) { ?>
                <h4><?php echo $comment->c_title ?></h4>
                <p><small class="default">Skrevet den <?php echo $comment->c_date ?> af <?php echo $comment->c_name ?></small></p>
                <p><?php echo $comment->c_comment ?><p>
        <div class="divider"></div>
<?php } ?>
        </div>
        <div class="addComment">
            <div class="form-group">
                <label for="name">Navn</label>
                <input type="text" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="where">Hvor fandt du MCR Byg</label>
                <select class="form-control" id="where">
                    <option value="website">Hjemmeside</option>
                    <option value="facebook">Facebook</option>
                    <option value="plus">Google+</option>
                    <option value="andmeld">Anmeld-håndværkere</option>
                    <option value="friends">Venner</option>
                    <option value="other">Andet</option>
                </select>
            </div>
            <div class="form-group">
                <label for="title">Overskrift</label>
                <input type="text" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="comment">Kommentar</label>
                <textarea class="form-control" id="comment"></textarea>
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-primary" onclick="addComment()">Skriv Kommentar</button>
            </div>
        </div>
    </div>
    <div class="review">
        <h4>Skriv gerne en anmeldelse på <a href="http://www.anmeld-haandvaerker.dk/virksomhed/mcr-byg-v-reidar-fjordh%C3%B8j">www.anmeld-haandvaerker.dk:</a></h4>
        <iframe id="anmeld" border="0" name="anmeldhaandvaerker" marginwidth="0" marginheight="0" src=" http://www.anmeld-haandvaerker.dk/smileybox/90612/3/5/?farve=e7e7e7" frameborder="no" width="900" scrolling="auto" height="490"></iframe>
    </div>
</div>
<?php
include './includes/footer.inc.php';
?>
<script>
    function addComment() {
        var name = document.getElementById("name").value;
        var where = document.getElementById("where").value;
        var title = document.getElementById("title").value;
        var comment = document.getElementById("comment").value;
        var comments = [name, title, comment, where];
        var json = JSON.stringify(comments);
        xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                document.getElementById("comments").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "database/addcomments.php?q=" + json, true);
        xmlhttp.send();
    }
</script>
