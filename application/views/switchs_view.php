<!DOCTYPE html>
<html>
    <body>
        <?php
        echo ( isset($nameErr) ? $nameErr : '' );
        echo "<br>";
        echo ( isset($emailErr) ? $emailErr : '');
        echo "<br>";
        echo ( isset($websiteErr) ? $websiteErr : '');
        "<br>";
        echo ( isset($commentErr) ? $commentErr : '');
        echo "<br>";
        echo ( isset($genderErr) ? $genderErr : '');
        echo "<br>";
        ?>
        <form action="" method="post">
            Name: <input type="text" name="name" value="<?= isset($name) ? $name : '' ?>"</span>
            <br><br>
            E-mail: <input type="text" name="email" value="<?= isset($email) ? $email : '' ?>"</span>
            <br><br>
            website: <input type="text" name="website" value="<?= isset($website) ? $website : '' ?>"</span>
            <br><br>
            Comment: <textarea name="comment" rows="5" cols="40"></textarea>
            <br><br>
            gender: 
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <span class="error">* <?php echo $genderErr; ?></span>
            <br><br>
            <br><br>
            <input type="submit">
        </form>
    </body>
</html>




