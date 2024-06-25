<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>hello user, please sign to take offer.</h1>
    <div class="container">
        <form action="index.php" method="post">
            <h2>creatives</h2>
            <div class="personal_infos">
                <input type="text" name="first_name" placeholder="first name" required>
                <input type="text" name="surname" placeholder="surname" required>
                <input type="email" name="mail" placeholder="Email" required>
                <input type="text" name="phone" placeholder="phone number" required>
            </div>
            <h4>gender</h4>
            <input type="radio" name="gender" value="male" id="MALE">
            <label for="MALE">Male</label>
            <input type="radio" name="gender" value="female" id="FEMALE">
            <label for="FEMALE">Female</label>
            <div class="line"></div>
            <input type="date" name="date" required>
            <input type="checkbox" name="rod" id="">
            <label>please read <a href="#">privacy</a> and <a href="#">security</a> things and accept on it to continue process</label>
            <input type="submit" class="signBtn" name="sign" value="sign Now">
        </form> 
    </div>
    <?php 
        if(isset($_POST["sign"])) {
            if(isset($_POST["rod"])) {
                if(!empty($_POST["first_name"]) && !empty($_POST["surname"]) && !empty($_POST["mail"]) && !empty($_POST["phone"])) {
                    $FIRST_NAME = $_POST["first_name"];
                    $SUR_NAME = $_POST["surname"];
                    $EMAIL = $_POST["mail"];
                    $POHNE = $_POST["phone"];
                }
                if(isset($_POST["gender"])) {
                    $img;
                    $GENDER = $_POST["gender"];
                    if($GENDER == "male") {
                        $img = "usermale.jpg";
                    }
                    else {
                        $img = "female.jpeg";
                    }
                }
                echo "<div class=\"personal_page\">";
                echo "<img src=\"$img\" alt=\"\"/>";
                echo "<h2>first name: $FIRST_NAME</h2>";
                echo "<h2>surname: $SUR_NAME</h2>";
                echo "<h2>email: $EMAIL</h2>";
                echo "<h2>phone:$POHNE</h2>";
                echo "</div>";
            }
            else {
                echo "try again later";
            }
        }
    ?>
</body>
</html>