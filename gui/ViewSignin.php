<?php
namespace gui;

include_once "View.php";

class ViewSignin extends View
{
    public function __construct($layout)
    {
        parent::__construct($layout);

        $this->title = 'Exemple Annonces Basic PHP: Connexion';

        $this->content = '
            <form method="post" action="/annonces/index.php/register">
                <label for="login"> Votre identifiant </label> :
                <input type="text" name="login" id="login" placeholder="Jeremy" maxlength="20" required />
                <br />
                <label for="password"> Votre mot de passe </label> :
                <input type="password" name="password" id="password" maxlength="20" required />
                
                <label for="name"> Votre mot de passe </label> :
                <input type="text" name="name" id="name" maxlength="20" required />
                
                <label for="firstname"> Votre mot de passe </label> :
                <input type="text" name="firstname" id="firstname" maxlength="20" required />
        
                <input type="submit" value="Envoyer">
            </form>';
    }
}