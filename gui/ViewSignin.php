<?php

namespace gui;

include_once "gui/View.php";

class ViewSignin extends View
{
	public function __construct($layout)
	{
		parent::__construct($layout);

		$this->title = 'Signin';

		$this->content = '
			<h1>Inscription</h1>
            <form method="post" action="/annonces/index.php/register">
            	<label for="name"> Votre nom </label> :
                <input type="text" name="name" id="name" placeholder="Dupont" />
                <br />
            	<label for="firstname"> Votre prénom </label> :
                <input type="text" name="firstname" id="firstname" placeholder="Jeremy" />
                <br />
                <label for="login"> Votre identifiant </label> :
                <input type="text" name="signin" id="signin" placeholder="jermerstar" />
                <br />
                <label for="password"> Votre mot de passe </label> :
                <input type="password" name="password" placeholder="Ajdlz2491%" id="password" />
        
                <input type="submit" value="Envoyer">
            </form>';
	}
}
