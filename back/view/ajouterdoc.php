<!DOCTYPE html>
<html>
	<head>
		<title>Modifier blog</title>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>sign up</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    
   
   <style>
        html,
        body {
            height: 100%;
        }
        
        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 150px;
            padding-bottom: 100px;
            }
           
    </style>
	</head>
	<body>
    
       
        
		<form  action="ajoutdocfonct.php" method="POST">
      
          <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Ajouter un nouveau docteur
                </h3>
                <p>Please enter your user information.</p>
            </div>
            <div class="card-body">
            
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="nom" required="" placeholder="nom"  >
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="username" required="" placeholder="username" >
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="email" >
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="texte" name="mdp" required="" placeholder="mot de passe"  >
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="texte" name="specealite" required="" placeholder="specealite "  >
                </div>
                
                <div class="form-group">
                    <input class="form-control form-control-lg" id="img" type="file" name="img" required="" placeholder="img">
                </div>
                
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit">ADD </button>
                </div>
               
            
             </div>
               
            </div>
        </form>  
		
	</body>
</html>