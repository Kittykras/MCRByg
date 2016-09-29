<?php

require_once 'DBConnection.php';

function sendSMS($sMessage) {
    $login = 'MCRByg';
    $password = 'Reidar1515';
    $to = '+4526191601';
    $from = "mcrbyg.dk";
    $text = urlencode($sMessage); // make the phrase URL friendly
    $sUrl = "https://suresms.com/Script/GlobalSendSMS.aspx"; // point to this URL
    $sLink = $sUrl . "?login=" . $login . "&password=" . $password . "&to=" . $to . "&from=" . $from . "&text=" . $text; // create the SMS
    file_get_contents($sLink); // send the SMS
}

try {
    $comment = json_decode($_REQUEST["q"]);
    $db = new DBConnection();
    $q = "insert into comments(c_name, c_date, c_title, c_comment, c_where) values(:name, now(), :title, :comment, :where)";
    $stmt = $db->prepare($q);
    $stmt->execute(array(":name" => $comment[0], ":title" => $comment[1], ":comment" => $comment[2], ":where" => $comment[3]));
    $q = "call getComments()";
    $stmt = $db->prepare($q);
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $stmt->execute();
    $comments = $stmt->fetchAll();
    if ($comment[3] === "website") {
        $sMessage = "Der er en der har fundet MCR Byg på hjemmesiden";
        sendSMS($sMessage);
    }
    echo '<div class="addedcomments">
            <h4>Andre har skrevet:</h4>';
    foreach ($comments as $com) {
        echo '<h4>' . $com->c_title . '</h4>' .
        '<p><small class="default">Skrevet den ' . $com->c_date . ' af ' . $com->c_name . '</small></p>'
        . '<p>' . $com->c_comment . '<p>' .
        '<div class="divider"></div>';
    }
    echo '</div>
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
        </div>';
} catch (PDOException $e) {
    echo $e->getMessage();
}