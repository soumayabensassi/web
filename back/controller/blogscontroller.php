<?php
include_once "../model/blog.php" ;
include_once "../config.php";
class blogcontroller
{   
  public function ajouterblog($medecin,$nomarticle,$date,$categorie,$img,$blog)
    {$db=config::getConnexion();
       try{ $sql="INSERT INTO blogslist(medecin,nomarticle,date,categorie,img,blog)
        VALUES(:medecin,:nomarticle,:date,:categorie,:img,:blog)";
    $query = $db->prepare($sql);
    $query->execute([
        'medecin'=>$medecin,
        'nomarticle'=>$nomarticle,
        'date'=>$date,
        'categorie'=>$categorie,
        'img'=>$img,
        'blog'=>$blog
        
    ]);}catch(PDOException $e)
    {$e->getMessage();}
    }
    function afficherblog1(){

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
    function  afficherblog($categorie){
        
        try{$db = config::getConnexion();
            $query=$db->prepare('SELECT * from blogslist where categorie=:categorie');
             $query->execute(['categorie'=>$categorie]);
            
                 
                    return $query->fetchAll();
              }
               catch (Exception $e){
                     die('Erreur: '.$e->getMessage());
            }
           }
           function  afficher_cate_nom($categorie){
        
            try{$db = config::getConnexion();
                $query=$db->prepare('SELECT * from categorie where id=:id');
                 $query->execute(['id'=>$categorie]);
                
                     
                        return $query->fetchAll();
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
                    medecin = :medecin, 
                    nomarticle = :nomarticle,
                    date = :date,
                    categorie = :categorie,
                    img= :img,
                    blog= :blog
    
                WHERE id = :id'
            );
            $query->execute([
                'medecin'=>$blogs->getNom(),
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