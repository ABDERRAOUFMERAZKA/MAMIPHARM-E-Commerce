<?php

/**
 * Verifie si le panier existe, le cr�� sinon
 * @return booleen
 */
function creationPanier(){
   if (!isset($_SESSION['panier'])){
      $_SESSION['panier']=array();
      $_SESSION['panier']['libelleProduit'] = array();
      $_SESSION['panier']['qteProduit'] = array();
      $_SESSION['panier']['prixProduit'] = array();
      
   }
   return true;
}


/**
 * Ajoute un article dans le panier
 */
function ajouterArticle($libelleProduit,$qteProduit,$prixProduit){

   //Si le panier existe
   if (creationPanier() )
   {
      //Si le produit existe d�j� on ajoute seulement la quantit�
      $positionProduit = array_search($libelleProduit,  $_SESSION['panier']['libelleProduit']);

      if ($positionProduit !== false)
      {
         $_SESSION['panier']['qteProduit'][$positionProduit] += $qteProduit ;
      }
      else
      {
         //Sinon on ajoute le produit
         array_push( $_SESSION['panier']['libelleProduit'],$libelleProduit);
         array_push( $_SESSION['panier']['qteProduit'],$qteProduit);
         array_push( $_SESSION['panier']['prixProduit'],$prixProduit);
      }
   }
   else
   echo "Un probl�me est survenu veuillez contacter l'administrateur du site.";
}



/**
 * Modifie la quantit� d'un article
 */
function modifierQTeArticle($libelleProduit,$qteProduit){
   //Si le panier �xiste
   if (creationPanier() )
   {
      //Si la quantit� est positive on modifie sinon on supprime l'article
      if ($qteProduit > 0)
      {
         //Recharche du produit dans le panier
         $positionProduit = array_search($libelleProduit,  $_SESSION['panier']['libelleProduit']);

         if ($positionProduit !== false)
         {
            $_SESSION['panier']['qteProduit'][$positionProduit] = $qteProduit ;
         }
      }
      else
      supprimerArticle($libelleProduit);
   }
   else
   echo "Un probl�me est survenu veuillez contacter l'administrateur du site.";
}

/**
 * Supprime un article du panier
 */
function supprimerArticle($libelleProduit){
   //Si le panier existe
   if (creationPanier())
   {
      //Nous allons passer par un panier temporaire
      $tmp=array();
      $tmp['libelleProduit'] = array();
      $tmp['qteProduit'] = array();
      $tmp['prixProduit'] = array();
      

      for($i = 0; $i < count($_SESSION['panier']['libelleProduit']); $i++)
      {
         if ($_SESSION['panier']['libelleProduit'][$i] !== $libelleProduit)
         {
            array_push( $tmp['libelleProduit'],$_SESSION['panier']['libelleProduit'][$i]);
            array_push( $tmp['qteProduit'],$_SESSION['panier']['qteProduit'][$i]);
            array_push( $tmp['prixProduit'],$_SESSION['panier']['prixProduit'][$i]);
         }

      }
      //On remplace le panier en session par notre panier temporaire � jour
      $_SESSION['panier'] =  $tmp;
      //On efface notre panier temporaire
      unset($tmp);
   }
   else
   echo "Un probl�me est survenu veuillez contacter l'administrateur du site.";
}


/**
 * Montant total du panier
 */
function MontantGlobal(){
if (creationPanier())
{
   $total=0;
   for($i = 0; $i < count($_SESSION['panier']['libelleProduit']); $i++)
   {
      

      $total += $_SESSION['panier']['qteProduit'][$i] * $_SESSION['panier']['prixProduit'][$i];
   }
   return $total;
}
}

/**
 * Fonction de suppression du panier
 */
function supprimePanier(){
   unset($_SESSION['panier']);
}

/**
 * Permet de savoir si le panier est verrouill�
 * @return booleen
 */

/**
 * Compte le nombre d'articles diff�rents dans le panier
 */
function compterArticles()
{
   if (isset($_SESSION['panier']))
   return count($_SESSION['panier']['libelleProduit']);
   else
   return 0;

}

?>
