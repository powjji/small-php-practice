<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new password</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="POST">
        <?php
            if (isset($_POST['submit'])) {
                $password = $_POST['new_password'];
                $password_re = $_POST['new_password_re'];
                if ($password != "" && $password_re != "") {
                    if ($password == $password_re) {
                        if (strlen($password)>=8) {
                            for ($i = 97; $i <= 122; $i++) {
                                $character = chr($i);
                                $found = strpbrk($password, $character);
                                if ($found){
                                    $found = 1;
                                    break;
                                }
                                else{
                                    //skip
                                }
                            }
                            if($found==1){
                                for ($a = 65; $a <= 90; $a++) {
                                    $character = chr($a);
                                    $found = strpbrk($password, $character);
                                    if ($found){
                                        $found = 1;
                                        break;
                                    }
                                    else{
                                        //skip
                                    }
                                }
                                if ($found==1) {
                                    Throw_Message("Good Password" . ":" . $password);
                                }
                                else{
                                    Throw_Message('Your password must have at least 1 uppercase character!');
                                } 
                            }
                            else {
                                Throw_Message('Your password must have at least 1 lowercase character!');   
                            }
                        }
                        else{
                            Throw_Message('Your password must have at least 8 characters!');
                        }
                    }
                    else{
                        Throw_Message('password don\'t match');
                    }
                }
                else{
                    Throw_Message('please fill up both entry`s');
                }
            }

        ?>
        <br><br>
        <label for="new_password">New Password :</label>
        <input type="password" name="new_password" id="new_password">
        <br>
        <label for="new_password_re">Repeat New Password :</label>
        <input type="password" name="new_password_re" id="new_password_re">
        <br><br>
        <input type="submit" value="ok" name="submit">
        <br>
        <div>
            <?php
                function Throw_Message($message){
                    
                    echo $message;
                
                }
            ?>
            
        </div>
    </form>
</body>
</html> 