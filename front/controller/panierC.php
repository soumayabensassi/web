

<?php
include_once "../config.php";
include_once "../model/panier.php";
class panierC
{
    public function ajouterProduit($idMedicament,$idClient,$qte)
    {$db=config::getConnexion();
       try{ $sql="INSERT INTO panier(idMedicament,idClient,qte)
        VALUES(:idMedicament,:idClient,:qte)";
    $query = $db->prepare($sql);
    $query->execute([
        'idMedicament'=>$idMedicament,
        'idClient'=>$idClient,
        'qte'=>$qte
    ]);}catch(PDOException $e)
    {$e->getMessage();}
    }
//     function afficher_panier(){

//         $sql="SELECT * FROM _panier";
//         $db = config::getConnexion();
//         try{
//             $liste = $db->query($sql);
//             return $liste;
//         }
//         catch (Exception $e){
//             die('Erreur: '.$e->getMessage());
//         }
    
//     }
     
     public function delete($idMedicament)
    {$db=config::getConnexion();
    try{
    
   $query=$db->prepare('DELETE FROM panier WHERE idMedicament= :idMedicament');
    $query->execute([
       'idMedicament'=>$idMedicament
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
     function modifierproduit($qte, $idMedicament){
        try {
            
            $db = config::getConnexion();
            $query = $db->prepare(
                     'UPDATE panier SET 
                     
                    qte=:qte
    
    
                WHERE idMedicament= :idMedicament'
             );
         
             $query->execute([
                'qte'=>$qte,
                
               'idMedicament'=>$idMedicament  
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