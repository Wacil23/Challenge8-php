<form action="thanks.php" method="POST">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="email">Courriel :</label>
        <input type="email" id="email" name="user_email">
    </div>
    <div>
        <label for="phone">Enter your phone number:</label>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}">
    </div>
    <div>
        <select name="subject" size="1">
            <OPTION>Subject 1
            <OPTION>Subject 2
            <OPTION selected>Subject 3
            <OPTION>Subject 4
            <OPTION>Subject 5
        </select>
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea id="message" name="user_message"></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer votre message</button>
    </div>

</form>
<?php
var_dump($_POST);
?>