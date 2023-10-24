<?php

class programmeEnglishDB {
    private PDOStatement $statementCreateOneprogrammeEnglish;
    private PDOStatement $statementSelectAll;
    private PDOStatement $statementSelectOne;
    private PDOStatement $statementModifOne;
    private PDOStatement $statementUpdateOne;
    private PDOStatement $statementDeleteOne;
    


    function __construct(private PDO $pdo){
            $this->statementCreateOneprogrammeEnglish = $pdo->prepare('INSERT INTO programmeEnglish(
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
            $this->statementSelectAll = $pdo->prepare('SELECT * FROM programmeEnglish');
            $this->statementSelectOne = $pdo->prepare('SELECT * FROM programmeEnglish WHERE types=:types');
            $this->statementModifOne = $pdo->prepare('SELECT * FROM programmeEnglish WHERE idprogramme=:idprogramme');
            $this->statementDeleteOne = $pdo->prepare('DELETE FROM programmeEnglish WHERE idprogramme=:idprogramme');

            $this->statementUpdateOne = $pdo->prepare('UPDATE programmeEnglish SET 
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
   public function createOne($programmeEnglish){
    $this->statementCreateOneprogrammeEnglish->bindValue(':intituler',$programmeEnglish['intituler']);
    $this->statementCreateOneprogrammeEnglish->bindValue(':region',$programmeEnglish['region']);
    $this->statementCreateOneprogrammeEnglish->bindValue(':prix',$programmeEnglish['prix']);
    $this->statementCreateOneprogrammeEnglish->bindValue(':nombredejour',$programmeEnglish['nombredejour']);
    $this->statementCreateOneprogrammeEnglish->bindValue(':category',$programmeEnglish['category']);
    $this->statementCreateOneprogrammeEnglish->bindValue(':types',$programmeEnglish['types']);
    $this->statementCreateOneprogrammeEnglish->bindValue(':images',$programmeEnglish['images']);
    $this->statementCreateOneprogrammeEnglish->bindValue(':canva',$programmeEnglish['canva']);
    $this->statementCreateOneprogrammeEnglish->bindValue(':description',$programmeEnglish['description']);
   


    $this->statementCreateOneprogrammeEnglish->execute();

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

   public function UpdateOne($programmeEnglish):array{
    $this->statementUpdateOne->bindValue(':intituler',$programmeEnglish['intituler']);
    $this->statementUpdateOne->bindValue(':region',$programmeEnglish['region']);
    $this->statementUpdateOne->bindValue(':prix',$programmeEnglish['prix']);
    $this->statementUpdateOne->bindValue(':nombredejour',$programmeEnglish['nombredejour']);
    $this->statementUpdateOne->bindValue(':category',$programmeEnglish['category']);
    $this->statementUpdateOne->bindValue(':types',$programmeEnglish['types']);
    $this->statementUpdateOne->bindValue(':images',$programmeEnglish['images']);
    $this->statementUpdateOne->bindValue(':canva',$programmeEnglish['canva']);
    $this->statementUpdateOne->bindValue(':description',$programmeEnglish['description']);
    $this->statementUpdateOne->bindValue(':idprogramme',$programmeEnglish['idprogramme']);
   

    $this->statementUpdateOne->execute();
    return $programmeEnglish;
   }

   public function DeleteOne($idprogramme){
      $this->statementDeleteOne->bindValue(':idprogramme',$idprogramme);
      $this->statementDeleteOne->execute();
      return $idprogramme;
   }

}
return new programmeEnglishDB($pdo);