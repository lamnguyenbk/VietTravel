<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php
        ob_start();
        session_start();
        $controller = isset($_GET['controllers']) ? $_GET['controllers'] . 'Controller' : 'HomeController';
        $action = isset($_GET['action']) ? $_GET['action'] : 'ViewHome';

        require_once("controllers/$controller.php");
        $usercontroller = new $controller();
        $usercontroller->$action();
        ob_flush();
        ?>  
    </body>
</html>