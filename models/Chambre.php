<?php
require('models/Bdd.php');


class Chambre
{
    public function getChambres()
    {
        $bdd = new Bdd();
        $connection = $bdd->getConnection();
        $result = $connection->query('SELECT * FROM chambres ORDER BY id ASC');
        return $result ? $result->fetchAll(PDO::FETCH_ASSOC) : null;
    }

    public function getChambre($chambreId)
    {
        $bdd = new Bdd();
        $connection = $bdd->getConnection();
        $result = $connection->query('SELECT * FROM chambres where id = ' . $chambreId);
        return $result ? $result->fetch(PDO::FETCH_ASSOC) : null;
    }

    public function changeChambre($chambreId, $params)
    {
        $bdd = new Bdd();
        $connection = $bdd->getConnection();
        $result = $connection->prepare("UPDATE chambres SET etat = :etat , type = :type , tarif1 = :tarif1 , tarif2 = :tarif2 , tarif3 = :tarif3 where id = $chambreId");
        $result -> execute($params);
    }

    public function ajouterChambre( $params )
    {
        $bdd        = new Bdd();
        $connection = $bdd->getConnection();

        $result =
            $connection->prepare( 'INSERT INTO chambres(etat, type, description, services, img, info, tarif1, tarif2, tarif3) VALUES(:etat, :type, :description, :services, :img, :info, :tarif1, :tarif2, :tarif3 )' );
        $result->execute( $params );
    }

    public function supprimerChambre( $id )
    {
        $bdd        = new Bdd();
        $connection = $bdd->getConnection();

        $result = $connection->prepare( 'DELETE FROM chambres WHERE id = :id' );
        $result->execute( array(
            'id' => $id,
        ) );
    }
}