<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>N. Llerandi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/slideshow.css" type="text/css">
      
    <!-- instagram start -->  
      
    <script type="text/javascript" src="instafeed.js/instafeed.min.js"></script>
      
      <!-- instagram stop -->
      
  </head>

  <body>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4"><a href="#">In the Studio</a></div>
            <div class="col-md-4"><a href="#">Music Academy</a></div>
            <div class="col-md-4"><a href="#">Booze</a></div>
          </div>
          <div class="row">
              <div class="col-md-6">
                  <img src="img/lostbannerweb.jpg">
              </div>
              <div class="col-md-6">
                  <img src="img/stimpy_lockjaw.jpg">
              </div>              
          </div>         
      </div>
      
      <!-- instagram start -->
      
              <div class="container">
      
     <div class="row">
         <div class="col-md-4">  
         <div id="instafeed"></div>
         </div>
     </div>    
      </div>
         
       <script type="text/javascript">
    var feed = new Instafeed({
        get: 'user',
        userId: 231269882,
                resolution: 'standard_resolution',
        accessToken: '231269882.b5fe880.615795fc785a426f982d015761971415',
        clientId: 'b5fe88095947410699a2a913ee3dc8f9',
        filter: function(image) {
            return image.tags.indexOf('efinthestudio') >= 0;
        }
    });
    feed.run();
      </script>
      
      <!-- instagram stop -->

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 
  </body>
</html>
