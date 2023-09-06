<?php

class programmeDB {
    private PDOStatement $statementCreateOneProgramme;
    private PDOStatement $statementSelectAll;
    private PDOStatement $statementSelectOne;
    


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

}
return new programmeDB($pdo);