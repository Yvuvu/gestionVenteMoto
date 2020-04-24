<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nouveau carnet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <link rel="stylesheet" href="../font/css/font-awesome.min.css"/>
    
</head>
    <body>

    <div class="container-fluid">
        <h1>Enregistrer un patient</h1>
        <form action="../controller/register.php" method="POST">    
            <div class="form-row">
                <div class="col-md-6 mb-4 ">                
                    <div class="input-group champinput">                        
                        <div class="input-group-prepend">
                            <span class="input-group-text inputlabel" id="inputGroupPrepend3">serie</span>
                        </div>
                        <input type="text" class="form-control inputborder" id="validationServerUsername" name="serialNumber" placeholder="entrer nom..." aria-describedby="inputGroupPrepend3" >                        
                    </div>                
                </div>
                <div class="col-md-6 mb-4">                
                    <div class="input-group champinput">
                        <div class="input-group-prepend">
                            <span class="input-group-text inputlabel" id="inputGroupPrepend3">marque</span>
                        </div>
                        <input type="text" class="form-control inputborder" id="validationServerUsername" name="brand" placeholder="entrer prénom..." aria-describedby="inputGroupPrepend3" >
                    </div>                
                </div>
            </div>
            <div class="form-row">
            <div class="col-md-6 mb-4">                
                    <div class="input-group champinput">
                        <div class="input-group-prepend">
                            <span class="input-group-text inputlabel" id="inputGroupPrepend3">modele</span>
                        </div>
                        <input type="text" class="form-control inputborder" id="validationServerUsername" name="model" placeholder="entrer téléphne..." aria-describedby="inputGroupPrepend3" >
                    </div>                
                </div>
                <div class="col-md-6 mb-4">                
                    <div class="input-group champinput">
                        <div class="input-group-prepend">
                            <span class="input-group-text inputlabel" id="inputGroupPrepend3">cylindre</span>
                        </div>
                        <input type="text" class="form-control inputborder" id="validationServerUsername" name="cylinder" placeholder="entrer date de naissance..." aria-describedby="inputGroupPrepend3" >
                    </div>                
                </div>
                                
                </div>
                <div class="col-md-6 mb-4">                
                <div class="input-group champinput">
                    <div class="input-group-prepend">
                        <span class="input-group-text inputlabel" id="inputGroupPrepend3">categorie</span>
                    </div>
                    <input type="text" class="form-control inputborder" id="validationServerUsername" name="category" placeholder="entrer date de naissance..." aria-describedby="inputGroupPrepend3" >
                </div>
            </div>
            <div class="form-row">            

            </div>
            <div class="form-row">

                <div class="col-md-6 mb-4">
                    <div class="input-group champinput">
                        <div class="input-group-prepend">
                            <span class="input-group-text inputlabel" id="inputGroupPrepend3">Prix</span>
                        </div>
                        <input type="number" class="form-control inputborder" id="validationServerUsername" name="price" placeholder="le groupe sanguin..." aria-describedby="inputGroupPrepend3" >
                    </div>            
                </div>
            </div>
                                   
            <div class="row boutons">        
                <button class="btn btn-primary" type="submit">Enregistrer</button>
                <button class="btn btn-primary annuler" type="reset">Annuler</button>
            </div>
        </form>
    </div>              
    </body>
</html>