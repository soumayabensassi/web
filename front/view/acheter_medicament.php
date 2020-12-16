<?php
session_start();
?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/styles/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles/fv.css" type="text/css" />

    
    
    
    <title>Acheter Maintenant </title>
</head>

<body>


        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <br>
                                <br>
                                <h2 class="pageheader-title">Vous pouvez passer votre commande  </h2>
                                 
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Médicaments</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Entrer vos données</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="mb-0">Adresse de facturation</h4>
                                        </div>
                                        <div class="card-body">
                                            <form action="../../back/view/ajoutordonnance.php" method="post" class="needs-validation" novalidate="">
                                                <fieldset>
                                                <div class="row">

                                                    <div class="item">
                                                    <div class="col-md-6 mb-3">
                                                        
                                                        <label> <span>Nom</span>
                                                        <input type="text" class="form-control" name="firstName" id="firstName" placeholder="" required="required">
                                                    </label>
                                                    </div>
        
                                                       </div>
                                                       <div class="item">
                                                    <div class="col-md-6 mb-3">
                                                        <label> <span>Prenom</span>
                                                        <input   type="text" class="form-control" name="lastName" id="lastName" placeholder="" value="" required="required">
                                                    </label>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="item">
                                                <div class="col-md-6 mb-3">
                                                    <label for="username">Nom d'utilisateur</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">@</span>
                                                        </div>
                                                        <input type="text" class="form-control" id="username" placeholder="Nom d'utilisateur"  value="<?php  echo $_SESSION['nom']; ?>">
                                                    </label> 
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="item">
                                                <div class="mb-3">
                                                    <label for="email">Email </label>
                                                    <input type="email" class="form-control" id="email"  placeholder="you@example.com" value="<?php echo $_SESSION['m_un'];?>" >
                                                   
                                                </div>
                                                </div>
                                                
                                                <div class="item">
                                                <div class="mb-3">
                                                    <label for="address">Adresse</label>
                                                    <input type="text" class="form-control" id="address" placeholder="x rue XXXX" required="required">
                                                    
                                                </div>
                                                </div>

                                                <div class="item">
                                                <div class="mb-3">
                                                    <label for="address2">Adresse 2 <span class="text-muted">(Optionnel)</span></label>
                                                    
                                                    <input type="text" class="form-control" id="address2" placeholder="Appartement ou suite" required="required">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="item">
                                                    <div class="col-md-5 mb-3">
                                                        <label for="country">ville</label>
                                                        <select class="required" class="custom-select d-block w-100" id="country" >
                                                            <option value="">Choisir...</option>
                                                            
                                                            <option>Tunis</option>
                                                            <option>Ariana</option>
                                                            <option>Nabeul</option>
                                                            <option>Sfax</option>
                                                            <option>Bizertte</option>
                                                            <option>Beja</option>
                                                            <option>Hawareia</option>
                                                            <option>Klibia</option>
                                                            <option>Sousse</option>
                                                            <option>Monastir</option>
                                                            <option>Jarzis</option>
                                                            <option>Gabes</option>
                                                            <option>Kairoun</option>
                                                        </select>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                </div>
                                                <div class="item">
                                                <hr class="mb-4">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="same-address">
                                                    <label class="custom-control-label" for="same-address">L'adresse de livraison est la même que mon adresse de facturation</label>
                                                </div>
                                                </div>

                                                <div class="item">
                                                <hr class="mb-4">
                                                <h4 class="mb-3">Paiement</h4>
                                                <div class="d-block my-3">
                                                    <div class="custom-control custom-radio">
                                                        <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                                                        <label class="custom-control-label" for="credit">Carte de crédit</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                                                        <label class="custom-control-label" for="debit">Carte de débit</label>
                                                    </div>
                                                   
                                                </div>
                                                </div>

                                                <div class="row">
                                                    <div class="item">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="cc-name">Nom sur la carte</label>
                                                        <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                                                        <small class="text-muted">Nom complet tel qu'affiché sur la carte</small>
                                                        
                                                    </div>
                                                    </div>
                                                    <div class="item">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="cc-number">Numéro de Carte </label>
                                                        <input  type="number" class="form-control" id="cc-number" placeholder="" required="">
                                                      
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="item">
                                                    <div class="col-md-3 mb-3">
                                                        <label for="cc-expiration">Expiration</label>
                                                        <input type="number" class="form-control" id="cc-expiration" placeholder="" required="">
                                                       
                                                    </div>
                                                    </div>

                                                    <div class="item">
                                                    <div class="col-md-3 mb-3">
                                                        <label for="cc-cvv">CVV</label>
                                                        <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                                                        <div class="invalid-feedback">
                                                            Security code required
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                              <hr class="mb-4">
                                                <h4 class="mb-3">Déposer l'odonnance</h4>
                                                <div class="col-md-3 mb-3">
                                                <input type = "file" name = "ordonnance" ></div>
                                            </fieldset>
                                                <hr class="mb-4">
                                                <button class="btn btn-primary btn-lg btn-block" type="submit">Acheter Maintenant</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            <!-- ============================================================== -->
            <!-- end wrapper  -->
            <!-- ============================================================== -->
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  
    <script src="../assets/js/validator.js"></script>
	<script>
		// initialize the validator function
		validator.message['date'] = 'not a real date';

		// validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
		$('form')
			.on('blur', 'input[required], input.optional, select.required', validator.checkField)
			.on('change', 'select.required', validator.checkField)
			.on('keypress', 'input[required][pattern]', validator.keypress);

		$('.multi.required')
			.on('keyup blur', 'input', function(){
				validator.checkField.apply( $(this).siblings().last()[0] );
			});

		// bind the validation to the form submit event
		//$('#send').click('submit');//.prop('disabled', true);

		$('form').submit(function(e){
			e.preventDefault();
			var submit = true;

			// Validate the form using generic validaing
			if( !validator.checkAll( $(this) ) ){
				submit = false;
			}

			if( submit )
				this.submit();

			return false;
		});

		/* FOR DEMO ONLY */
		$('#vfields').change(function(){
			$('form').toggleClass('mode2');
		}).prop('checked',false);

		$('#alerts').change(function(){
			validator.defaults.alerts = (this.checked) ? false : true;
			if( this.checked )
				$('form .alert').remove();
		}).prop('checked',false);
	</script>
    
</body>

 
</html>