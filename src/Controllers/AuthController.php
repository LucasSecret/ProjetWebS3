<?php

namespace DUT\Controllers;

use Silex\Application;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;


class AuthController
{
    public function displayLoginPage() {
        return new Response("Login Page");
    }

    private function login() {

    }

    public function displaySubscribePage() {
        return new Response("Subscribe Page");
    }

    private function subscribe() {

    }

    /**
     * Check if user is connected and if not redirect him to login page.
     *
     * @param Request $request
     * @param Application $app
     * @return null|RedirectResponse
     */
    public static function isConnected(Request $request, Application $app) {
        if (!isset($_SESSION["user"]["connected"]) || $_SESSION["user"]["connected"] != true) {
            return new RedirectResponse($app["url_generator"]->generate("login"));
        }
        return null;
    }

    /**
     * Check if user is an admin and if not redirect him to login page.
     *
     * @return null|RedirectResponse
     */
    public function isAdmin() {
        if (isset($_SESSION["user"]["connected"]) && $_SESSION["user"]["isAdmin"] != true) {
            return new RedirectResponse('../login');
        }
        return null;
    }

}