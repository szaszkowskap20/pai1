<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Kalkulatror</title>
    <style>
        
    </style>
</head>
<body>
    <!-- <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Kalkulator</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Historia</a>
        </li>
        
        <input type="button" value="Sign up">
        <input type="button" value="Sign in">
        
            <form class="d-flex" style="justify-content: flex-end;">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            
      </ul> -->

      <nav class="navbar navbar-light bg-light d-flex justify-content-between">
        <div class="container-fluid">
          <a class="navbar-brand" href="historia.php">Historia</a>
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
              
				if(isset($_POST['logowanie'])){
					header("Location: logowanie.php");
				}
              ?>
          </form>
        </div>
       
      </nav>
    <main class="d-flex align-items-center">
      <div class="container-lg alert alert-primary d-flex justify-content-center">
        <form action="rozwiazanie.php" method="POST">
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">a</span>

            <input type="number" id="a" name="a">
          </div>
          <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">b</span>
          <input type="number" id="b" name="b">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">c</span><input type="number" id="c" name="c"></div>
            <input type="submit" name="przycisk" class="btn btn-primary">
        </form>
      </div>
    </main>
</body>
</html>