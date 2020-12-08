<?php
include_once "../model/blog.php" ;
include_once "../config.php";
class blogcontroller
{
    public function ajouterblog($nom,$nomarticle,$date,$categorie,$img,$blog)
    {$db=config::getConnexion();
       try{ $sql="INSERT INTO blogslist(nom,nomarticle,date,categorie,img,blog)
        VALUES(:nom,:nomarticle,:date,:categorie,:img,:blog)";
    $query = $db->prepare($sql);
    $query->execute([
        'nom'=>$nom,
        'nomarticle'=>$nomarticle,
        'date'=>$date,
        'categorie'=>$categorie,
        'img'=>$img,
        'blog'=>$blog,
        
    ]);}catch(PDOException $e)
    {$e->getMessage();}
    }
    function afficherblog(){

        $sql="SELECT * FROM blogslist";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    
    }
    public function delete($id)
    {$db=config::getConnexion();
    try{
    
    $query=$db->prepare('DELETE FROM blogslist WHERE id= :id');
    $query->execute([
        'id'=>$id
    ]);
    echo $query->rowCount() ;
     }catch(PDOException $e)
      {$e->getMessage();}
     }




     function recupererblog($id){
        $sql="SELECT * from blogslist where id=$id";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $user=$query->fetch();
            return $user;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }  




     function modifierblog($blogs, $id){
        
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE blogslist SET 
                    nom = :nom, 
                    nomarticle = :nomarticle,
                    date = :date,
                    categorie = :categorie,
                    img= :img,
                    blog= :blog
    
                WHERE id = :id'
            );
            $query->execute([
                'nom'=>$blogs->getNom(),
                'nomarticle'=>$blogs->getNomarticle(),
                'date'=>$blogs->getDate(),
                'categorie'=>$blogs->getCategorie(),
                'img'=>$blogs->getImg(),
                'blog'=>$blogs->getBlog(),
                'id' => $id
            ]);
            
        } catch (PDOException $e) {
            $e->getMessage();
        }
        
    }

 }