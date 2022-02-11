<form method="POST">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name" value="<?php if (isset($_POST['user_name'])) echo $_POST['user_name']; ?>">
        <p style="color:red; display: inline;">
            <?php
            if (empty($_POST['user_name'])) {
                $nameErr['user_name'] = "Name can't be empty";
                echo $nameErr['user_name'];
            }
            ?>
        </p>
    </div>
    <div>
        <label for="email">Courriel :</label>
        <input type="email" id="email" name="user_email" value="<?php if (isset($_POST['user_email'])) echo $_POST['user_email']; ?>">
        <p style="color:red; display: inline;">
            <?php
            if (empty($_POST['user_email'])) {
                $emailErr['user_email'] = "E-mail can't be empty";
                echo $emailErr['user_email'];
            }
            ?>
        </p>
    </div>
    <div>
        <label Enter for="phone">Enter your phone number:</label>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" value="<?php if (isset($_POST['phone'])) echo $_POST['phone']; ?>">
        <p style="color:red; display: inline;">
            <?php
            if (empty($_POST['phone'])) {
                $phoneErr['phone'] = "Phone can't be empty";
                echo $phoneErr['phone'];
            }

            ?>
        </p>
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
        <textarea id="message" name="user_message"><?php if (isset($_POST['user_message'])) echo $_POST['user_message']; ?></textarea>
        <p style="color:red; display: inline;">
            <?php
            if (empty($_POST['user_message'])) {
                $messageErr['user_message'] = "Message is required";
                echo $messageErr['user_message'];
            }
            ?>
        </p>
    </div>
    <div class="button">
        <button type="submit">Envoyer votre message</button>
    </div>

</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nameErr = $emailErr = $phoneErr = $messageErr = array();
    
    if (!empty($_POST['user_name']) && ($_POST['user_email']) && ($_POST['phone']) && ($_POST['user_message'])) {
        header("Location:thanks.php");
        exit();
    }
}
?>