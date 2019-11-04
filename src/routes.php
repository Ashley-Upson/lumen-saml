<?php

/**
 * The laravel-saml package route configuration
 */

Route::group([
        'namespace' => '\AshleyUpson\LumenSaml\Http\Controllers'
    ], function () {
        Route::get('/saml/idp/metadata', 'SamlIdpController@metadata');
    }
);

