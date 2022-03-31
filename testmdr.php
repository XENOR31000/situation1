<?php




$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$conn = mysqli_connect("localhost", "root", "", "situation1");

  // Taking all 5 values from the form data(input)
  $nomproduit =  $_REQUEST['nomproduit'];
  $reference =  $_REQUEST['reference'];
  $description1 =  $_REQUEST['description1'];
    
  // Performing insert query execution
  // here our table name is college
  $sql = "INSERT INTO produit (nomproduit,reference,description1) VALUES ('$nomproduit','$reference','$description1')";


  if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully." 
        . " Please browse your localhost php my admin" 
        . " to view the updated data</h3>"; 

    echo nl2br("$nomproduit");
} else{
    echo "ERROR: Hush! Sorry $sql. " 
        . mysqli_error($conn);
}
  

  // Close connection
  mysqli_close($conn);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="theme.css">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@800&display=swap');
</style>
</head>
<body class="h-[100vh] bg-slate-800 flex items-center	 ">

<div class=" w-full h-80 flex items-center	justify-center  " >

<div class="bg-white p-8  rounded-lg">

<h1 class="m-5 titre1"> rentrer un produit a mettre dans la base de donnees </h1>

    <form action="" method="post" class="form-example  flex flex-col items-center">
        <div class="form-example">
            <label for="nomproduit">Nom produit </label>
            <input type="text" name="nomproduit" id="nomproduit" required class="bg-slate-300">
        </div>
  



        <br>



        <div class="form-example">
            <label for="reference"> Reference </label>
            <input type="text" name="reference" id="reference" required class="bg-slate-300">
        </div>



        <br>

        <p>
       <label for="description">Comment pensez-vous que je pourrais améliorer mon site ?</label><br />
       <textarea name="description1" id="description1" rows="10" cols="55" class="border-solid border-2 border-sky-500"></textarea >
   </p>


        <div class="form-example">
            <input type="submit" value="Subscribe!" >
        </div>

        <div class="form-example">
       
        </div>
    </form>
</div>


</div>
    
</body>
</html>