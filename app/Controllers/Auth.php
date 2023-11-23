<?php
// application/controllers/Login.php

namespace App\Controllers;

defined('BASEPATH') OR exit('No direct script access allowed');

use League\OAuth2\Client\Provider\Exception\IdentityProviderException;

class Login extends BaseController {
    
    public function microsoft() {
        $provider = new League\OAuth2\Client\Provider\GenericProvider($this->config->item('oauth2'));

        if (!isset($_GET['code'])) {
            // Si no hay código, redirige al usuario a la URL de autorización de Microsoft
            $authUrl = $provider->getAuthorizationUrl();
            $_SESSION['oauth2state'] = $provider->getState();
            redirect($authUrl);
        } elseif (empty($_GET['state']) || ($_GET['state'] !== $_SESSION['oauth2state'])) {
            // El estado no coincide, probablemente un ataque CSRF
            unset($_SESSION['oauth2state']);
            exit('Invalid state');
        } else {
            // Intercambia el código de autorización por un token de acceso
            try {
                $token = $provider->getAccessToken('authorization_code', [
                    'code' => $_GET['code']
                ]);

                // Utiliza el token de acceso para obtener información del usuario
                $resourceOwner = $provider->getResourceOwner($token);
                $user = $resourceOwner->toArray();

                // Aquí puedes almacenar la información del usuario en tu base de datos o sesión según tus necesidades
                print_r($user);
                redirect('/');
                }
                // Aquí colocarías la lógica para mostrar la página de inicio de sesión
                $this->load->Defaultview('No autorizado');



            } catch (IdentityProviderException $e) {
                // Error al obtener el token de acceso o la información del usuario
                exit($e->getMessage());
            }
        }
    }
}
