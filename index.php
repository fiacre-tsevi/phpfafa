<?php
    /*
    * PHPFAFA V1.0
    *
    * A Simple Php Framework
    *
    * Created by Fickson Favodya Afrikavi
    * © 2017, All Rights Reserved
    */

    include_once('app/config/config.php');
    include_once('app/functions/router.php');
    include_once('app/routing/routes.php');
    include_once('app/functions/handler.php');

    //Calling findRoute function
    $route = array();
    $route = findRoute($routes);
    $page = $route[0];
    $page_title = $route[1];
?>

<!Doctype html>
<html>
	<?php
		include('views/main/head.php');

		include('views/main/body.php');

		include('views/main/foot.php');
	?>
</html>