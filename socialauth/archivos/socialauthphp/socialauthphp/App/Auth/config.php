<?php

  return

  array(
    "base_url" => "http://localhost/socialauthphp/hydridauth.php",
    "providers" => array(
      "Twitter" => array(
        "enabled" => true,
        "keys" => array(
          "key" => "",
          "secret" => ""
        ),
        "includeEmail" => true
      ),
      "Facebook" => array(
        "enabled" => true,
        "keys" => array(
          "id" => "",
          "secret" => ""
        ),
        "scope" => "email"
      ),
      "Google" => array(
        "enabled" => true,
        "keys" => array(
          "id" => "",
          "secret" => ""
        )
      )
    )
  )

 ?>
