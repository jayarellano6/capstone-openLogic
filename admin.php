<!DOCTYPE html>
<?php

?>
<html>
    <head>
        <!-- standard metadata -->
    <meta charset="utf-8" />
    <meta name="description" content="Fitch-style proof editor and checker" />
    <meta name="author" content="Kevin C. Klement" />
    <meta name="copyright" content="© Kevin C. Klement" />
    <meta name="keywords" content="logic,proof,deduction" />
    
    <!-- facebook opengraph stuff -->
    <meta property="og:title" content="Fitch-style proof editor and checker" />
    <meta property="og:image" content="sample.png" />
    <meta property="og:description" content="Fitch-style proof proof editor and checker" />

    <!-- if mobile ready -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes" />

    <!-- web icon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>proof checker</title>

    <!-- page style from https://github.com/dhg/Skeleton -->
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/skeleton.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" type="text/css" href="../semantic/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">    
    <script 
    src="https://code.jquery.com/jquery-3.1.1.min.js" 
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" 
    crossorigin="anonymous">
    </script>
    <script src="../semantic/semantic.min.js"></script>
    
    <style>
      body {font-family: "Noto Sans";}
      a, a:hover, a:visited, a:focus, a:active {color: #0c1c8c; text-decoration: none; font-weight: bold ;}
      label, legend { display: inline-block; } 
    </style>
  
    <!-- css file -->
    <link rel="stylesheet" type="text/css" href="../css/proofs.css" />
    <!-- javascript file -->
    <script type="text/javascript" charset="utf-8" src="../js/ajax.js"></script>
    <script type="text/javascript" charset="utf-8" src="../js/syntax.js"></script>
    <script type="text/javascript" charset="utf-8" src="../js/proofs.js"></script>
    </head>
    <body>
        <div id="top-menu" class="ui menu" style = "height : 60px;">
          <div class="header item">
            <h1 id="title" style = "color : white;">Proof Checker</h1>
          </div>
          <a href="help.html" class="item" style = "color : white;">
            Help
          </a>
          <a class="item" style = "color : white;">
            About us
          </a>
          <a class="item" style = "color : white;">
            References
          </a>
          <div class="right menu">
              <a href="admin.php" class="item" style = "color : white;">
                  Admin
              </a>
  	        <a href="../auth/client/src/components/auth/register.js" class="item" style = "color : white;">
              Sign-up
            </a>
	        </div>
      </div>
      <div id="adminOptions" style="margin: 1.5rem;">
          <h3 id="header" class="ui top attached header">
            Administrator Options
          </h3>
          <div class="ui attached segment">
              
            <div id="optionsList" class="ui bulleted list">
              <div id="li" class="item"><a href="" style="color:black; font-weight: 300;">Add Proofs</a></div>
              <div id="li" class="item"><a href="" style="color:black; font-weight: 300;">View Students</a></div>
              <div id="li" class="item"><a href="" style="color:black; font-weight: 300;">View Proof Stats</a></div>
            </div>
            
          </div>
      </div>
      
        
      
    </body>
</html>