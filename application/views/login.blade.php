<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title>.:: CheckPoint ::.</title>

	<meta name="theme-color" content="#1a237e">
	<meta name="apple-mobile-web-app-capable" content="yes">  
	<meta name="apple-mobile-web-app-status-bar-style" content="#1a237e"> 
	<meta name="apple-mobile-web-app-title" content="Selflog Cagaras">
	<meta name="description" content="Localize entregas">

	<link rel="shortcut icon" 
  		href="{{ base_url('assets/images/favicon.ico') }}" type="image/x-icon">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="{{ base_url('assets/css/materialize.min.css') }}" rel="stylesheet" media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="manifest" href="{{ base_url('manifest.json') }}" />

	<style>
	    body { 
	      display: flex;
	      min-height: 100vh;
	      flex-direction: column;
	    }

	    main {
	      flex: 1 0 auto;
	      padding: 10px;
	    }

	    body {
	      background: #ECE0F8;
	    }

	    .input-field input[type=text]:focus + label,
	    .input-field input[type=email]:focus + label,
	    .input-field input[type=password]:focus + label {
	      color: #e91e63;
	    }

	    .input-field input[type=text]:focus,
	    .input-field input[type=email]:focus,
	    .input-field input[type=password]:focus {
	      border-bottom: 2px solid #e91e63;
	      box-shadow: none;
	    }

	    #topo {
	      font-weight: bold;
	      font-size: 16px;
	    }
	    #logo {
	      color: darkgray;
	      font-size: 20px;
	    }
  	</style>
</head>
<body>
 <main>
    <center>
      <div class="container" style="margin-top: 80px;">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 2px solid #EEE; border-radius: 5px;">

          <form id="form" class="col s12" method="post">
            <div id="topo" class='row'>
              <div id="logo" class='col s12'>
                <img src="<?=base_url('assets/images/checkpoint.png');?>" style="width: 250px">
              </div>
            </div>

            <div id="topo" class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='email' name='email' id='email' value="will@teste.com"  />
                <label for='email'>E-Mail</label>
              </div>
            </div>

            <div id="topo" class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='password' id='password' value="459NEP7" />
                <label for='password'>Senha</label>
              </div>
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect deep-purple accent-2'
                style="border-radius: 5px;">Entrar</button>
              </div>
            </center>
          </form>
        </div>
      </div>
    </center>
  </main>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>
</html>