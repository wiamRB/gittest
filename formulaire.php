<!DOCTYPE html>
<html lang="en">
    <head>
  
        <title>Bibliotheque</title>
         </head>
    <body>
                <form method="POST" action="formulaire.php">
                    <h3>Titre</h3>
                                <input class="form-control" id="titre" style="text-align: right;" type="text" placeholder="*titre" name="titre" />
                      <h3>prix</h3>
                                <input class="form-control" id="num" style="text-align: right;" type="int" placeholder="*prix" data-sb-validations="required" name="prix" />
                  <div ><input type="submit" value="envoyer" name="enre" /></div>
					 </form>
		</body>
</html>
<?php
 $link1 = mysqli_connect("192.168.56.102","wiam","Wiam@2000","app") or die
       ("Error " . mysqli_error($link1));
if (isset ($_POST['enre'])){
$titre=$_POST['titre'];
$prix=$_POST['prix'];
$sql2 = "INSERT INTO books VALUES(NULL,'$titre','$prix')";
//echo $sql2;
mysqli_query ($link1,$sql2);
} 
?>
