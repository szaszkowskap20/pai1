
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Historia</title>
</head>
<body>
<nav class="navbar navbar-light bg-light d-flex justify-content-between">
        <div class="container-fluid">
          <a class="navbar-brand" href="kalkulator.php">Kalkulator</a>
          <form method="POST">
			  <?php
			  	if(isset(($_COOKIE['accedere']))){

				  
				
					if($_COOKIE['accedere'] == true){
						echo "<input type='submit' name='wylogowanie' class='btn btn-primary' value='Wyloguj'>";
					}else{
						echo "<button class='btn btn-primary' value='Zaloguj się' ><a href='logowanie.php'>Zaloguj się</a></button>";
					}
				
			}else{
				echo "<button class='btn btn-primary' value='Zaloguj się'><a href='logowanie.php' class='text-light'>Zaloguj się</a></button>";
			}
				
			  ?>
	
              <?php
				if(isset($_POST['wylogowanie'])){
					setcookie('accedere', false);
				}
              
				
              ?>
          </form>
        </div>
       
      </nav>

    

<?php
    if(isset($_COOKIE['accedere'])){
            if($_COOKIE['accedere'] == true){

        
                echo "<div class='container-lg alert alert-dark'>";
    
                
                    ob_start();
                    session_start();
                    $sessssion = $_SESSION['count'];
                    for($i = 0; $i <= $sessssion; $i++){
                        $nazwa = "wynik".$i.".txt";
                        
                        echo "<a href='$nazwa' class='stretched-link text-danger d-flex justify-content-center'>$nazwa</a><br>";
                         
                        
                        
                        
                    }
                
    
        echo "</div>";
            }else{
                echo "<div class='alert alert-danger d-flex justify-content-center' style='margin: 10%'>
                <button class='btn btn-danger' value='Zaloguj się'><a href='logowanie.php' class='text-light'>Zaloguj się</a></button>      
            </div>";
            }
        }else{
            echo "<div class='alert alert-danger d-flex justify-content-center' style='margin: 10%'>
                <button class='btn btn-danger' value='Zaloguj się'><a href='logowanie.php' class='text-light'>Zaloguj się</a></button>      
            </div>";
        }
        ?>
    <!-- <input type="button" onClick = "generujWykres()" value="Wygeneruj wykres">
     
    <canvas id="obrazek" width="750" height="750" style="border:1px solid #000000;">
    </canvas> -->
</body>
</html>
