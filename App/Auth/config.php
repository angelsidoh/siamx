<?php

/**
 * Build a configuration array to pass to `Hybridauth\Hybridauth`
 *
 * Set the Authorization callback URL to https://path/to/hybridauth/examples/example_07/callback.php
 * Understandably, you need to replace 'path/to/hybridauth' with the real path to this script.
 */
$config = [
    'callback' => 'https://sociedadintelectualdelaguacatemexicano.com/hydridauth.php',
    'providers' => [

        'Google' => [
            'enabled' => true,
            'keys' => [
                'id'     => '550055461036-03hm4jf5nbtf20lf6f6ihs57uequiuf9.apps.googleusercontent.com',
                'secret' => '48GOHtVuOz9LwrtsyThR0hA-',
            ]
        ],
        'Facebook'  => [
            'enabled' => true,
            'keys' => [
                'id'   => '266936534558068', 
                'secret' => 'bfc0cf24de0f7bc9378831c3953ad86c']
            ]

        // 'Yahoo'     => ['enabled' => true, 'keys' => [ 'key'  => '...', 'secret' => '...']],
        
        // 'Twitter'   => ['enabled' => true, 'keys' => [ 'key'  => '...', 'secret' => '...']],
        // 'Instagram' => ['enabled' => true, 'keys' => [ 'id'   => '...', 'secret' => '...']],

    ],
];
 ?>
