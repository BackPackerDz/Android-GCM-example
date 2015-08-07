<!DOCTYPE html>
<html>
    <head>
        <title>Google Cloud Messaging</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    
    </head>


    <body>

   <form role="form" method="post" action="send_message.php" >     
        <div class="form-group">
          <label >Titre</label>
          <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
          <label >Message</label>
          <input type="text" class="form-control" name="message">
        </div>

        <button type="submit" class="btn btn-default  center-block">Envoyer</button>
   </form>

    </body>
</html>