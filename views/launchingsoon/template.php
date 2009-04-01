<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8">
  <title><?php echo $title ?></title>

  <style type="text/css" media="screen">
  body {
  	background-color:#000000;
	  font-family:arial;
	  color:#FFFFFF;
	  width: 800px;
	  margin: 0 auto;
  }
  
  h1 {
    font-size: 28px; font-weight: bold;
  }

  h2 {
    font-size: 20px; font-weight: bold;
  }
  
  img {
    border:0;
  }
  ul {
    list-style: none;
    margin: 0; padding: 0;
  }

    ul li {
      margin: 0; padding: 0;
      float: left;
    }

  ul.errors li {
    float: none;
    color: #900;
  }

  label {
    display: none;
  }

  input[type=text] {
    border: 1px solid #333;
  }

  #submit {
    margin-left: 10px;
  }
  
  form {
  }

  .flash {
    font-weight: bold;
    font-size: 18px;
    color: #090;
  }
  
  </style>
</head>

<body id="launching">

  <div id="header">
    <h1><?php echo $title ?></h1>
    <h2><?php echo $tagline ?></h2>
  </div>
  
  <div id="main">

  	<?php if (isset($this->session) && $this->session->get('flash') <> '') { ?>
  	  <p class="flash"><?php echo $this->session->get('flash');  ?></p>
	  <?php } ?>

    <p><?php echo $intro ?></p>
    
    <?php if (isset($form)) echo $form ?>
  </div>

  <div id="footer">
    Copyright &copy; 2009.
  </div>
  
</body>

</html>