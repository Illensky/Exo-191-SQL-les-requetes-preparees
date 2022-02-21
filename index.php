<?php

/**
 * Reprenez le code de l'exercice précédent et transformez vos requêtes pour utiliser les requêtes préparées
 * la méthode de bind du paramètre et du choix du marqueur de données est à votre convenance.
 */

require __DIR__ . '/Classes/Config.php';
require __DIR__ . '/Classes/DBSingleton.php';

try {
    /**
     * Créez ici votre objet de connection PDO, et utilisez à chaque fois le même objet $pdo ici.
     */
    $pdo = DBSingleton::PDO();

    /**
     * 1. Insérez un nouvel utilisateur dans la table utilisateur.
     */
    // TODO votre code ici.

    /*
    $stm = $pdo->prepare("
        INSERT INTO user (family_name, name, email, password, address, postal_code, country, registering_date)
        VALUES (:family_name, :name, :email, :password, :address, :postal_code, :country, :registering_date)
    ");

    $name = 'Laroche';
    $name = 'Alexis';
    $email = 'alexis.laroche.02240@gmail.com';
    $password = password_hash('cuahxd6wzb3', PASSWORD_ARGON2I);
    $address = '55 rue d\'hirson';
    $postal_code = '02830';
    $country = 'france';
    $date = new DateTime();
    $date = $date->format('Y-m-d H:i:s');

    $stm->bindParam(':family_name', $name);
    $stm->bindParam(':name', $name);
    $stm->bindParam(':email', $email);
    $stm->bindParam(':password', $password);
    $stm->bindParam(':address', $address);
    $stm->bindParam(':postal_code', $postal_code);
    $stm->bindParam(':country', $country);
    $stm->bindParam(':registering_date', $date);

    $stm->execute();
    */

    /**
     * 2. Insérez un nouveau produit dans la table produit
     */

    // TODO votre code ici.
/*
    $stm = $pdo->prepare("
        INSERT INTO product (user_fk, title, price, short_description, long_description)
        VALUES  (:user_fk, :title, :price, :short_description, :long_description)
    ");

    $user_fk = 17;
    $title = 'Cassoulet';
    $price = 12.78;
    $short_description = 'Boite de péteux a la saucisse.';
    $long_description = "Ragoût de haricots blancs, de charcuterie (saucisse, saucisson à l\'ail, lard) et de viande 
                            (confit d\'oie ou de canard, mouton ou porc). Cassoulet au canard, au mouton.";

    $stm->bindParam(':user_fk', $user_fk);
    $stm->bindParam(':title', $title);
    $stm->bindParam(':price', $price);
    $stm->bindParam(':short_description', $short_description);
    $stm->bindParam(':long_description', $long_description);

    $stm->execute();
*/

    /**
     * 3. En une seule requête, ajoutez deux nouveaux utilisateurs à la table utilisateur.
     */

    // TODO Votre code ici.
    /*
        $stm = $pdo->prepare("
                INSERT INTO user (family_name, name, email, password, address, postal_code, country, registering_date)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?),
                        (?, ?, ?, ?, ?, ?, ?, ?)
            ");

        $date = new DateTime();
        $date = $date->format('Y-m-d H:i:s');
        $password = password_hash('cuahxd6wzb3', PASSWORD_ARGON2I);

        $stm->execute(['Jean', 'Moulin', 'jeanmouline@gmail.com',
            $password, '55 rue piave', '02784', 'France', $date, 'Marcel', 'Pignole', 'pignololebraved@gmail.com',
            $password, '55 rue des écoles', '59610', 'France', $date]);

        */

} catch (PDOException $e) {
    echo "Une erreur est survenue : " . $e->getMessage();
}