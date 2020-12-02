<?php

  class Auth
  {
    protected static $allow = ['Facebook', 'Twitter', 'Google'];

    protected static function issetRequest()
    {
      if(isset($_GET['login'])){
        if(in_array($_GET['login'], self::$allow)){
          return true;
        }
      }
      return false;
    }

    public static function getUserAuth()
    {
      if(self::issetRequest())
      {
        $service = $_GET['login'];

        $hybridAuth = new Hybrid_Auth(__DIR__ . '\config.php');

        $adapter = $hybridAuth->authenticate($service);

        $userProfile = $adapter->getUserProfile();
        var_dump($userProfile);
        die();
        // self::storeUser($service, $userProfile);

        // //redirect user
        // header('Location: index.php');
      }
    }

    
    public static function isLogin()
    {
      return (bool) isset($_SESSION['user']);
    }

    protected static function login($user)
    {
      $_SESSION['user'] = $user;
    }

    public static function logout()
    {
      if(self::isLogin()){
        unset($_SESSION['user']);
      }
    }

  }

 ?>
