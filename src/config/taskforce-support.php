<?php

return array(

    'layout' => 'taskforce-support::layouts.master',

    'frontend' => [

        /**
         * Use this section to indicate if your view supports any of the following libraries.
         *
         * When using the master layout provided by this package the frameworks will be pulled from
         * their respective cdn's.
         *
         * Use true/false
         */
        'libraries' => [
            // Currently does nothing but in the future will allow for a method that
            // Will add these files into the head/scripts section.
            'load_from_cdn' => false,

            // jQuery listed separately as is a dependency of a lot of the other frameworks.
            'jquery'        => true,

            'bootstrap3'     => false, // Requires jQuery
            'bootstrap4'     => false, // Requires jQuery
            'foundation6'    => false,

            'angularjs'     => false,
            'backbone'      => false,
            'ember'         => false,
            'react'         => false,
            'vuejs'         => false,
            'emberjs'       => false,
        ]
    ],

);
