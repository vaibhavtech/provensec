<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up</title>
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <?php echo $this->element("header1"); ?>
    </head>
    <body>

      <form action="login" method="post">
      
        <h1>Login</h1>
        
        <fieldset>
                    
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="username">
          
          <label for="password">Password:</label>
          <input type="password" id="password" name="password">
         
        </fieldset>
        
        <button type="submit" name="login">Login</button>
      </form>
      
    </body>
    <?php echo $this->element("footer"); ?>
</html>