

<?php
include_once "../config.php";
include_once "../model/panier.php";
class panierC
{
    public function ajouterProduit($idMedicament,$idClient,$qte,$nom_Medicament)
    {$db=config::getConnexion();
       try{ $sql="INSERT INTO panier(idMedicament,idClient,qte,nom_Medicament)
        VALUES(:idMedicament,:idClient,:qte,:nom_Medicament)";
    $query = $db->prepare($sql);
    $query->execute([
        'idMedicament'=>$idMedicament,
        'idClient'=>$idClient,
        'qte'=>$qte,
        'nom_Medicament'=>$nom_Medicament
    ]);}catch(PDOException $e)
    {$e->getMessage();}
    }
    
    function  afficher_panier($idClient){
        $db = config::getConnexion();
        $sql="SELECT * from panier where idClient=$idClient";
                try{
                  $liste=$db->query($sql);
                   
        
                   
                    return $liste;
              }
               catch (Exception $e){
                     die('Erreur: '.$e->getMessage());
            }
           }  
  
     
     public function delete($nom_Medicament)
    {$db=config::getConnexion();
    try{
    
   $query=$db->prepare('DELETE FROM panier WHERE nom_Medicament= :nom_Medicament');
    $query->execute([
       'nom_Medicament'=>$nom_Medicament
   ]);
    
     }catch(PDOException $e)
      {$e->getMessage();}
         }
//      function recuperer_panier($id_panier){
//         $sql="SELECT * from _panier where id_panier=$id_panier";
//         $db = config::getConnexion();
//         try{
//             $query=$db->prepare($sql);
//             $query->execute();

//             $user=$query->fetch();
//             return $user;
//         }
//         catch (Exception $e){
//             die('Erreur: '.$e->getMessage());
//         }
//     }  
   



//     //modifier
     function modifierproduit($qte, $nom_Medicament){
        try {
            
            $db = config::getConnexion();
            $query = $db->prepare(
                     'UPDATE panier SET 
                     
                    qte=:qte
    
    
                WHERE nom_Medicament= :nom_Medicament'
             );
         
             $query->execute([
                'qte'=>$qte,
                
               'nom_Medicament'=>$nom_Medicament 
                ]
 );
            
           
        } catch (PDOException $e) {
             $e->getMessage();
         }
     }
//     function connexionAccount($Email,$Password) {
//         $sql="SELECT * FROM _panier WHERE email_panier='" . $Email ."' and Password = '". $Password."'";
//         $db = config::getConnexion();
        
        

//         try {
//             $query=$db->prepare($sql);

            
//             $query->execute();
//             $count=$query->rowCount();
//             if($count==0)
//             {$message= "pseudo ou mot de passe incorrect";
            
//             }
//             else { 
//                 $x = $query->fetch();
//                 $message = $x['role'];
              

//              session_start(); 
//     $_SESSION['id_panier']= $x['id_panier'];
//     $_SESSION['nom']=$x['nom_panier'];
    
//             }
//         }            catch (Exception $e)
//         {
//             $message= " ".$e->getMessage();        
//             }
//             return $message;
//     }
  
//     function chercherEmail($Email){
//         $sql="SELECT * from _panier where email_panier='$Email'";
//         $db = config::getConnexion();
//         try{
//             $query=$db->prepare($sql);
//             $query->execute();
//             $user=$query->fetch();
//             if($user==false)
//             return 1;
//             else return 0;
//         }
//         catch (Exception $e){
//             die('Erreur: '.$e->getMessage());
//         }
//     }   
 
}