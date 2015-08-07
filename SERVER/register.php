<?php
 

if (isset($_POST["gcm_token"])) {

    $gcm_token = $_POST["gcm_token"];
    // Store user details in db
    include_once 'db_functions.php';
 
    $db = new DB_Functions();
 
    $res = $db->addUser($gcm_token);

    if ($res)
    {
        $response['message'] = 'Utilisateur enregistré !';
        $response['success'] = 1;
    }
    else
    {
        $response['message'] = 'Utilisateur non enregistré !';
        $response['success'] = 0;
    }

} else {
    $response['message'] = "Je crois que tu t'es planté mon gars...";
    $response['success'] = 0;
}


echo json_encode($response);    

?>