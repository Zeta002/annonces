<?php
function openConnection()
{
    try {
        $link = new PDO('mysql:host=mysql-portelli.alwaysdata.net;dbname=portelli_annonces_db', 'portelli_annonce', '%Angelo13');

    } catch(PDOException $e) {
        print "Erreur de connexion !: " . $e->getMessage() . "<br/>";
        die();
    }

    return $link;
}

function closeConnection($link)
{
    $link = null;
}

function isUser( $login, $password )
{
    $isuser = False ;
    $link = openConnection();

    $query= 'SELECT login FROM Users WHERE login="'.$login.'" and password="'.$password.'"';
    $result = $link->query($query);

    if($result)
        $isuser = True;

    $result->closeCursor();
    closeConnection($link);

    return $isuser;
}

function getAllAnnonces()
{
    $link = openConnection();

    $result = $link->query('SELECT id, title FROM Post');
    $annonces = array();

    while ($row = $result->fetch()) {
        $annonces[] = $row;
    }

    $result->closeCursor();
    closeConnection($link);

    return $annonces;
}

function getPost( $id )
{
    $link = openConnection();

    $id = intval($id);
    $result = $link->query('SELECT * FROM Post WHERE id='.$id );
    $post = mysqli_fetch_assoc($result);

    mysqli_free_result( $result);
    closeConnection($link);
    return $post;
}

