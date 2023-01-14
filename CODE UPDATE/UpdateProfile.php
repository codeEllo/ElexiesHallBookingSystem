<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script  src='https://kit.fontawesome.com/a076d05399.js'></script> 
  <link href="../elexies/admin/assets/css/admProfile.css" rel="stylesheet" type="text/css">
</head>
    <style> 
body {
    margin: 0;
    color:#E9E9E9;
    background:#EFEFEF;
    font:  'Open Sans', sans-serif
}</style>
</head>
    
<body>
<?php
$ADM_ID = "A100";
// Connection to the server and datbase
    $dbc = mysqli_connect ("localhost","root","","elexieshall"); 
	if (mysqli_connect_error())     
	{         
		echo "Failed to connect to MySQL: " . mysqli_connect_error();  
	}    
	$sql = "select * from admin where ADM_ID = '$ADM_ID'"; 
	$results = mysqli_query($dbc, $sql);
	$row = mysqli_fetch_assoc($results);  
?>
    <p>&nbsp;  </p>
    <div align="center">
      <img src="../elexies/admin/assets/img/businessman_edit-removebg-preview.png" width="180" height="180" alt=""/>
    </div>
  
<h1>Update Profile</h1> 
<form action="PHPAdminUpdate.php" method="post">
 
        <h1>Update Profile</h1>
        
    <div class="contentform">
        <div id="sendmessage"> Your message has been sent successfully. Thank you. </div>

<div class="form-group">
                    <p>Your ID<span>*</span></p>
                    <span class="icon-case"><i class="fa fa-male"></i></span>
                        <input  type="text" name="ADM_ID"  data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Nom' doit être renseigné."value='<?=$row['ADM_ID'];?>' readonly/>
                
               </div> 
        <div class="leftcontact">
                  

            <div class="form-group">
            <p>Name <span>*</span></p>
            <span class="icon-case"><i class="fa fa-user"></i></span>
                <input type="text" name="ADM_NAME" placeholder="Enter Staff Name" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Prénom' doit être renseigné."value='<?=$row['ADM_NAME'];?>' required />
            </div>
            
            <div class="form-group" >
            <p>Email <span>*</span></p>
            <span class="icon-case"><i class="fa fa-key" aria-hidden="true"></i></span>
                <input type="text" name="ADM_EMAIL"  data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné."value='<?=$row['ADM_EMAIL'];?>'/></div>

    </div>

    <div class="rightcontact">  

            

            <div class="form-group">
            <p>Phone number <span>*</span></p>  
            <span class="icon-case"><i class="fa fa-phone"></i></span>
                <input type="text" name="ADM_PHONE"  data-rule="maxlen:10" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Téléphone' doit être renseigné. Minimum 10 chiffres"value='<?=$row['ADM_PHONE'];?>'/></div>
        
            
              

      <div class="form-group" align="center">
            <p>Password <span>*</span></p>
            <span class="icon-case"><i class="fa fa-key" aria-hidden="true"></i></span>
                <input type="text" name="ADM_PASS"  data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné."value='<?=$row['ADM_PASS'];?>'/></div>
            </div> </div>   
    </div>
        
        <button type="submit" class="bouton-contact" name="submit" onClick="return confirm('Are you sure?')">Update</button>
    
</form> 
</body>
</html>