<!DOCTYPE html>
<html>
  <head>
    <title>Nom Du Site </title>

    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
  </head>
        <body>
        

<div class="main ">
  
    
  <?php
  $db = new PDO('mysql:host=localhost;dbname=jeu_ton;charset=utf8', 'root' );


  if (isset($_GET['id'])){
  $sth = $db->prepare("SELECT * FROM jeux WHERE idJeux =" . $_GET['id']  );
  //execution de la requéte
  $sth->execute();
  //récupération et stockage du contenu de la requéte dans la variable $result (en gros c'est un tableau)
  $result = $sth->fetch();

}
  ?>
  	<div class="article">
  
    <h1>   
  <?php 
    if (isset($_GET['id']))
    {
    echo $result["titre"]; 
    }
  ?> 
    </h1>


  <br>
  <br>
  

	

  <p>  
  <?php 
    if (isset($_GET['id']))
    {
        ?>
        <h5>
     <strong>Description :</strong>
    </h5>
    <?php 
    echo $result["description"]; 
    }
?>
 </p> 



 <br>
  

 
    

    <p>
    <?php 
        if (isset($_GET['id']))
        {
            ?>
            <h6>
     <strong>Information :</strong>
    </h6>

    <?php 
        echo $result["Information"]; 
        }
    ?>
</p>
	
	</div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>