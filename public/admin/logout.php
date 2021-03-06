<?php
    require_once(__DIR__.'/../../includes/helpers.php');
    require_once(__DIR__.'/../../loader.php');
    require_once(__DIR__.'/../../includes/Session.php');
    
    Logger::start()->add(User::getUser($_SESSION['uid'])->username, $_SERVER['PHP_SELF'], 'Logout');
    session_destroy();
    redirect_to('login.php');
