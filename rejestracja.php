<?php  
 
 $error = '';  
 $se_esiste = false;
 if(isset($_POST["submit"])){  
      if(empty($_POST["name"]))  
      {  
           $error = "<label class='text-danger'>Enter LOgin</label>";  
      }  
      else if(empty($_POST["password"]))  
      {  
           $error = "<label class='text-danger'>Enter Gender</label>";  
      }  
      else  
      {  

           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true); 

                foreach($array_data as $riga){
                    if($riga['login'] == $_POST['name']){
                        $error = "<label>Juz istnieje takie konto!!</label>";
                        $se_esiste = true;
                    }
                   
                
            }
            if($se_esiste == false){
                
                    $extra = array(  
                        'login'               =>     $_POST['name'],  
                        'password'          =>     $_POST['password']
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data); 
                
                if(file_put_contents('data.json', $final_data))  
                {  
                    header("Location: logowanie.php");  
                } 
            }
                 
        }    
             
           
        
 } 
} 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>rejestracja</title>  
           
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <h3>Zarejestruj się</h3><br />                 
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
                     <label>Login</label>  
                     <input type="text" name="name" class="form-control" /><br />  
                     <label>Password</label>  
                     <input type="text" name="password" class="form-control" /><br />  
                     
                     <input type="submit" name="submit" value="Append" class="btn btn-info" /><br />                      
                     
                </form>  
           </div>  
           <br />  
      </body>  
 </html>  