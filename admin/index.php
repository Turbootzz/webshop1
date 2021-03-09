<?php
    //haalt pagina binnen
    include('core/header.php');
    //of de post waarde van submit aanwezig is en niet leeg is
    if (isset($_POST['submit']) && $_POST['submit'] != '') {
        //default user: test@test.nl
        //default password: test123

        //wat er ingevoerd is.
        //real_escape_string is binnekomende waarde die ge-escaped word en omgezet in voor database veilige waarde
        $email = $con->real_escape_string($_POST['email']);
        $password = $con->real_escape_string($_POST['password']);
        

        //de database query word voorbereid
        //query opgebouwd: haal admin_user_id,email en password uit de tabel admin_user waar het email gelijk is aan de parameter die er later aan wordt verbonden
        $liqry = $con->prepare("SELECT admin_user_id,email,password FROM admin_user WHERE email = ? LIMIT 1;");
        //als de voorbereiding niet goed is, geef dan een foutmelding met de msqli-fout
        if($liqry === false) {
            trigger_error(mysqli_error($con));
        } else{
            //binnenkomen waarde $email wordt aan de query 
            $liqry->bind_param('s',$email);
            //de verbinden van de param aan de query word uitgevoerd
            $liqry->bind_result($adminId,$email,$dbHashPassword);
            // de query word uitgevoerd
            if($liqry->execute()){
                //resultaat van de uitgevoerde query wordt omgezet in database zoek-funtie
                $liqry->store_result();
                //de gegevens van de query worden binnengehaald
                $liqry->fetch();
                // als er 1 treffer uit de query komt
                if($liqry->num_rows == '1' && password_verify($password,$dbHashPassword)){
                    // opslaan van id in de admin-tabel in een session
                    $_SESSION['Sadmin_id'] = $adminId; //Sadmin_id
                    // en opslaan van admin-email adres in een session Sadmin_email
                    $_SESSION['Sadmin_email'] = stripslashes($email);
                    //text komt in beeld en de pagina ververst naar index_logedin.php
                    echo "Bezig met inloggen... <meta http-equiv=\"refresh\" content=\"1; URL=index_loggedin.php\">";
                    exit();
                } else {
                    echo "ERROR tijdens inloggen";
                }
            }
            $liqry->close();
        }
    }
?>
<!-- De HTML code voor de login -->
<form action="index.php" method="post">
    <input type="email" name="email" id="" placeholder="Email">
    <input type="password" name="password" id="" placeholder="Password">
    <input type="submit" name="submit" value="Login">
    <a href="forgot_password.php">Forgot Password?</a>
</form>
<?php //importeert de footer
    include('core/footer.php');
?>