<?php   
    
    if(isset($_POST['valid'])){
        if (!empty($_POST['user']) && !empty($_POST['pass']))
        {
            // Les deux champs sont remplis
            

            if (isset($_POST['user']) && isset($_POST['pass']))
            {
                
                $email = $_POST['user'];
                $mdp1 = $_POST['pass'];
            
                // informations de l base de données
                $nom_serveur = "localhost";
                $nom_user = "root";
                $mdp = "";
                $database = "Formulaire";

                $con = mysqli_connect($nom_serveur, $nom_user, $mdp, $database);
                
                if ($con->connect_error)
                {
                    die("echec connexion : ". $con->connect_error);
                }

                $verification = mysqli_query($con, "SELECT email FROM client WHERE email = '$email'");
               // $req = mysqli_query($con, "SELECT * FROM client where email = '$email' and mot_passe = '$mdp1'");
                
                /*$re2 =  "INSERT INTO client (idU,email, mot_passe) VALUES (NULL, '$email','$mdp1')";

                if($con->query($re2)===TRUE)
                {
                    //$valid = 
                    echo "données insérées avec succès";
                    sleep(3);
                    header("location : page.html");
                }
                else{
                    $error2 = "erreur lors de l'inseertion";
                }*/

                $num_verif = mysqli_num_rows($verification);
                if ( $num_verif>0)
                {
                    $req = mysqli_query($con, "SELECT * FROM client WHERE email = '$email' and mot_passe = '$mdp1'");

                   // $num_ligne = mysqli_num_rows($req);
                   $num = mysqli_num_rows($req);
                   if($num>0)
                        {
                            sleep(3);
                            header("location:  page.php");// on sera dirigé vers la page bienvenu.php
                            //$_SESSION['email']=$email;
                        }
                        else{
                            //echo 
                            sleep(2);
                            
                            $error="Mot de passe incorrect"; 
                        }
                    }
                else
                {
                    sleep(2);
                    $error_validation = "Adresse e-mail incorrecte ou introuvable";
                } 
            
        }
    }
    else {
        // Au moins un des champs est vide
        $error= "Veuillez remplir tous les champs.";
      }     
    }   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My  essai</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>


<section>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>


    <div class="sign-in">
        <h1>Sign In</h1>

        <div class="content">
            <form action="" method="POST">
           
            <input type="text" placeholder="e-mail Adress" class="User" name = "user" autocomplete="off">
            <div class="message">
                <?php
                    if (isset($error_validation))
                    {
                        echo "<br><img src='erreur.png' alt='error'>";
                        echo "<h2>".$error_validation."</h2>";
                        echo $req;
                    }
                ?>
            </div>
                <input type="password" placeholder="Password" class="pass" name = "pass" >
            <div class="message">
                
                <?php
                if (isset($error))
                {
                    echo "<img src='erreur.png' alt='error'>";
                    echo "<h2>".$error."</h2>";
                }
                ?>
            </div>
            <div class="lien">
                <a href="#" class="forgot">Forgot password</a>
                <a href="#" class="signin"> sign in</a>
            </div>
            
            <input type="submit" value="Valid" name = "valid">
            

        </form>
        </div>
    </div>
</section>
    
</body>
</html>