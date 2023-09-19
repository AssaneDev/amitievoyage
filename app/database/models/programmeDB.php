<?php

class programmeDB {
    private PDOStatement $statementCreateOneProgramme;
    private PDOStatement $statementSelectAll;
    private PDOStatement $statementSelectOne;
    private PDOStatement $statementModifOne;
    private PDOStatement $statementUpdateOne;
    private PDOStatement $statementDeleteOne;
    


    function __construct(private PDO $pdo){
            $this->statementCreateOneProgramme = $pdo->prepare('INSERT INTO programme(
                intituler,
                region,
                prix,
                nombredejour,
                category,
                types,
                images,
                canva,
                description
            )VALUES(
                :intituler,
                :region,
                :prix,
                :nombredejour,
                :category,
                :types,
                :images,
                :canva,
                :description
            )');
            $this->statementSelectAll = $pdo->prepare('SELECT * FROM programme');
            $this->statementSelectOne = $pdo->prepare('SELECT * FROM programme WHERE types=:types');
            $this->statementModifOne = $pdo->prepare('SELECT * FROM programme WHERE idprogramme=:idprogramme');
            $this->statementDeleteOne = $pdo->prepare('DELETE FROM programme WHERE idprogramme=:idprogramme');

            $this->statementUpdateOne = $pdo->prepare('UPDATE programme SET 
                intituler=:intituler,
                region=:region,
                prix=:prix,
                nombredejour=:nombredejour,
                category=:category,
                types=:types,
                images=:images,
                canva=:canva,
                description=:description

                WHERE idprogramme=:idprogramme
            ');


    }
   public function createOne($programme){
    $this->statementCreateOneProgramme->bindValue(':intituler',$programme['intituler']);
    $this->statementCreateOneProgramme->bindValue(':region',$programme['region']);
    $this->statementCreateOneProgramme->bindValue(':prix',$programme['prix']);
    $this->statementCreateOneProgramme->bindValue(':nombredejour',$programme['nombredejour']);
    $this->statementCreateOneProgramme->bindValue(':category',$programme['category']);
    $this->statementCreateOneProgramme->bindValue(':types',$programme['types']);
    $this->statementCreateOneProgramme->bindValue(':images',$programme['images']);
    $this->statementCreateOneProgramme->bindValue(':canva',$programme['canva']);
    $this->statementCreateOneProgramme->bindValue(':description',$programme['description']);
   


    $this->statementCreateOneProgramme->execute();

   }
   public function fetchAll(){
    $this->statementSelectAll->execute();
    return $this->statementSelectAll->fetchAll();
   }
   public function selectOne($types){
    $this->statementSelectOne->bindValue(':types',$types);
    $this->statementSelectOne->execute();
    return $this->statementSelectOne->fetchAll();

   }

   public function ModifOne($idprogramme){
    $this->statementModifOne->bindValue(':idprogramme',$idprogramme);
    $this->statementModifOne->execute();
    return $this->statementModifOne->fetchAll();
   }

   public function UpdateOne($programme):array{
    $this->statementUpdateOne->bindValue(':intituler',$programme['intituler']);
    $this->statementUpdateOne->bindValue(':region',$programme['region']);
    $this->statementUpdateOne->bindValue(':prix',$programme['prix']);
    $this->statementUpdateOne->bindValue(':nombredejour',$programme['nombredejour']);
    $this->statementUpdateOne->bindValue(':category',$programme['category']);
    $this->statementUpdateOne->bindValue(':types',$programme['types']);
    $this->statementUpdateOne->bindValue(':images',$programme['images']);
    $this->statementUpdateOne->bindValue(':canva',$programme['canva']);
    $this->statementUpdateOne->bindValue(':description',$programme['description']);
    $this->statementUpdateOne->bindValue(':idprogramme',$programme['idprogramme']);
   

    $this->statementUpdateOne->execute();
    return $programme;
   }

   public function DeleteOne($idprogramme){
      $this->statementDeleteOne->bindValue(':idprogramme',$idprogramme);
      $this->statementDeleteOne->execute();
      return $idprogramme;
   }

}
return new programmeDB($pdo);