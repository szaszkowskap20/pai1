<?php  

 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
          echo "<label class='text-danger '>Podaj login</label>";  
      }  
      else if(empty($_POST["password"]))  
      {  
          echo "<label class='text-danger'>POdaj hasło</label>";  
      }   
      else  
      {  
           if(file_exists('data.json'))  
           {  
                $dati_attuali = file_get_contents('data.json');  
                $dati_matrice = json_decode($dati_attuali, true);  
                foreach($dati_matrice as $riga){
                    if($riga['login'] == $_POST['name']){
                         if($riga['password'] == $_POST['password']){
                              header('Location: kalkulator.php');
                              setcookie('accedere', true, time()+3600);
                         }
                    }
                }
                echo "<label class='text-danger'>POdaj hasło</label>";
           }  
           
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Login</title>  
           
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <h3>Zaloguj się</h3><br />                 
                <form method="post">  
                     
                     <br />  
                     <label>Login</label>  
                     <input type="text" name="name" class="form-control" /><br />  
                     <label>Password</label>  
                     <input type="password" name="password" class="form-control" /><br />  
                     <a href="rejestracja.php">Zarejestruj się</a><br /> 
                     <input type="submit" name="submit" value="Zaloguj się" class="btn btn-primary" />                     
                     
                     
                </form>  
           </div>  
           <br />  
      </body>  
 </html>  