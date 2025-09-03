<?php
//inicia sesion
session_start();

//resetea conexion con twitter
if(isset($_GET["reset"]) && $_GET["reset"]==1)
{
    session_destroy();
    header('Location: ./index.php');
}

//Library by Abraham Williams (abraham@abrah.am)
include_once("config.php");
include_once("inc/twitteroauth.php");
?>
<html>
<head>
<title>Tweet via TweetEnsamble</title>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<link href="css/twensamble.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="wrapper">
<?php

if(isset($_SESSION['status']) && $_SESSION['status']=='verified')
{   //redireccionado desde  process.php verificado.
    $screenname         = $_SESSION['request_vars']['screen_name'];
    $twitterid          = $_SESSION['request_vars']['user_id'];
    $oauth_token        = $_SESSION['request_vars']['oauth_token'];
    $oauth_token_secret = $_SESSION['request_vars']['oauth_token_secret'];

    //bienvenida
    echo '<div class="welcome_txt">Welcome <strong>'
            .$screenname.
            '</strong> <small>(Twitter ID : '.$twitterid.').</small> '
            . '<a class="logout" href="index.php?reset=1">Logout</a>!</div>';
    //
    $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $oauth_token, $oauth_token_secret);
    //
    if(isset($_POST["updateme"]))
    {
        //Postea un tweet
        $my_update = $connection->post('statuses/update', array('status' => $_POST["updateme"]));
        die('<script type="text/javascript">window.top.location="index.php"</script>'); //redireccion
    }

    //show tweet form
    echo '<div class="tweet_box">';
    echo '<form method="post" action="index.php"><table width="200" border="0" cellpadding="3">';
    echo '<tr>';
    echo '<td><textarea name="updateme" cols="60" rows="4"></textarea></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td><input type="submit" value="Tweet" /></td>';
    echo '</tr></table></form>';
    echo '</div>';

        //Get latest tweets
        $my_tweets = $connection->get('statuses/user_timeline', array('screen_name' => $screenname, 'count' => 5));
        /* echo '<pre>'; print_r($my_tweets); echo '</pre>'; */

        echo '<div class="tweet_list"><strong>Latest Tweets : </strong>';
        echo '<ul>';
        foreach ($my_tweets  as $my_tweet) {
            echo '<li>'.$my_tweet->text.' <br />-<i>'.$my_tweet->created_at.'</i></li>';
        }
        echo '</ul></div>';

}else{
    //boton login
    echo '<h1 class="txtitulo">TweetEnsamble</h1>'
            . '<h2 class="txtsubheader">Crea, Coolabora y Comparte '
            . '<a href="https://tagdef.com/sctweet" target="_blank">SCTweets</a> desde '
            . '<a href="http://supercollider.github.io/" target="_blank">#supercollider</a></h2>'
            . '</br>'
            . '<h4 class="txtensamble">Creado por '
            . '<a href="http://livecodenet.flujoalterno.com/" target="_blank">#liveCodeNetEnsamble</a>:'
            . ' Grupo multidisciplinario que explora las posibilidades de la interconexión a través de '
            . 'una red local para realizar '
            . '<a href="http://toplap.org/wiki/Main_Page" target="_blank">#liveCoding</a> colaborativo</h4>'
            . '</br>'
            . '<h5 class="txtwhat">Has alcanzado esta pagina por que estas utilizando '
            . 'la aplicacion "TweetEnsable" Aqui podras postear tus <a href="https://tagdef.com/sctweet" target="_blank">SCTweets</a> desde '
            . '<a href="http://supercollider.github.io/" target="_blank">#supercollider</a></h5>';
    echo '<a href="process.php"><img class="botonLogin" src="img/signin-twitter.png"/></a>';//boton login
    echo '<h6 class="txtwhat">Si no sabes de que estamos hablando, puedes visitar nuestra pagina '
            . '<a href="http://livecodenet.flujoalterno.com/" target="_blank">#liveCodeNetEnsamble</a>'
            .' y nuestro <a href="http://www.github.com/liveCodeNetEnsamble" target="_blank">github.</a> </h6>';
}

?>
</div>
</body>
</html>