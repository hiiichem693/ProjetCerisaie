<?php

namespace App\Http\Controllers;

use App\dao\ServiceLogin;
use Illuminate\Support\Facades\Hash;
use Request;
use App\DAO\ServiceUtilisateur;

class UtilisateurController extends Controller {

    /**
     * Authentifie le visiteur
     * @return type Vue formLogin ou home
     */
    public function signIn() {
        try {
            $login = Request::input('login');
            $pwd = Request::input('pwd');
            $unUtilisateur = new ServiceUtilisateur();
            $connected = $unUtilisateur->login($login, $pwd);
            if ($connected) {
                return view('home');
            } else {
                $erreur = "Login ou mot de passe inconnu !";
                return view('Error', compact('erreur'));
            }
        } catch (MonException $e) {
            $erreur = $e->getMessage();
            return view('Error', compact('erreure'));
        }
    }

    /**
     * Déconnecte le visiteur authentifié
     * @return type Vue home
     */
    public function signOut() {
        try {

            $unUtilisateur = new ServiceUtilisateur();
            $unUtilisateur->logout();
            return view('home');
        } catch (Exception $e) {
            $erreur = $e->getMessage();
            return view('Error', compact('erreur'));
        }
    }

    /**
     * Initialise le formulaire d'authentification
     * @return type Vue formLogin
     */
    public function getLogin() {
        try {
            $erreur = "";
            return view('formLogin', compact('erreur'));
        } catch (Exception $ex) {
            $erreur = $e->getMessage();
            return view('Error', compact('erreur'));
        }
    }

    public function updatePassword($pwd)
    {
        $newpwd = Hash::make($pwd);
        try {
            $unLogin = new ServiceUtilisateur();
            $response = $unLogin->miseAjourMotPasse($newpwd);
            return view('home');
        } catch (MonException $e) {
            $erreur = $e->getMessage();
            return view('Error', compact('erreur'));
        } catch (Exception $e) {
            $erreur = $e->getMessage();
            return view('Error', compact('erreur'));
        }
    }

}
