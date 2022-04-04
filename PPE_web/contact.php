<!DOCTYPE html>
<html>
<head>
<title>Nom Du Site </title>
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include "menu.php"?> 
<style>


.contact, select, #subject {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

.contact {
  background-color: #f8f3bf;
  color: Black;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.contact :hover {
  background-color: #ffa4c4;
}

.container {
  border-radius: 5px;
  padding: 275px;
  position: inherit;
  
}

</style>
</head>
<body>

<?php include "Corps.php"?>


<h3>Nous Contacter</h3>

<div class="container">
  <form action="/action_page.php">
    <label for="fname">Prénom</label>
    <input class="contact"type="text" id="fname" name="firstname" placeholder="Votres Prénom...">

    <label for="lname">Nom</label>
    <input class="contact"type="text" id="lname" name="lastname" placeholder="Votres Nom...">

    

    <label for="subject">Sujet</label>
    <textarea id="subject" name="subject" placeholder="Ecrire.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
<div>
   <?php
    include "footer.php"
   ?>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>
