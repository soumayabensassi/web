<!DOCTYPE html>
<html>
	<head>
		<title>Pick Medico</title>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>sign up</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../../front/assets/css/styles/fv.css" type="text/css" />

   
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

    <!-- End top bar -->
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <form  class="splash-container" action="ajoutdocfonct.php" method="POST">
      
          <div class="card" style="width: 550px;">
            <div class="card-header">
                <h3 class="mb-1">Ajouter un nouveau docteur </h3>
                <p>Veuillez saisir vos informations d'utilisateur.</p>
            </div>
            <div class="card-body">
            <div class="item">
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="nom" required="" placeholder="nom">
                </div>
                </div>
                <div class="item">
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="username" required="" placeholder="username">
                </div>
                </div>
                <div class="item">
                <div class="form-group">
                    <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="email">
                </div>
                </div>
                <div class="item">
                <div class="form-group">
                    <input class="form-control form-control-lg" type="texte" name="mdp" required="" placeholder="mot de passe">
                </div>
                </div>
                <div class="item">
                <div class="form-group">
                    <input class="form-control form-control-lg" type="texte" name="specealite" required="" placeholder="specealite "  >
                </div>
                </div>
                <div class="item">
                <div class="form-group">
                    <input class="form-control form-control-lg" id="img" type="file" name="img" required="" placeholder="img">
                </div>
                </div>
                
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit">Ajouter </button>
                </div>
               
            
             </div>
               
            </div>
        </form>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script src="../../front/assets/js/validator.js"></script>
<script>
    // initialize the validator function
    validator.message['date'] = 'not a real date';

    // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
    $('form')
        .on('blur', 'input[required], input.optional, select.required', validator.checkField)
        .on('change', 'select.required', validator.checkField)
        .on('keypress', 'input[required][pattern]', validator.keypress);

    $('.multi.required')
        .on('keyup blur', 'input', function() {
            validator.checkField.apply($(this).siblings().last()[0]);
        });

    // bind the validation to the form submit event
    //$('#send').click('submit');//.prop('disabled', true);

    $('form').submit(function(e) {
        e.preventDefault();
        var submit = true;

        // Validate the form using generic validaing
        if (!validator.checkAll($(this))) {
            submit = false;
        }

        if (submit)
            this.submit();

        return false;
    });

    /* FOR DEMO ONLY */
    $('#vfields').change(function() {
        $('form').toggleClass('mode2');
    }).prop('checked', false);

    $('#alerts').change(function() {
        validator.defaults.alerts = (this.checked) ? false : true;
        if (this.checked)
            $('form .alert').remove();
    }).prop('checked', false);
</script>
</body>
	
</html>