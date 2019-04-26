<?php
  function generateRow(){
    
    $contents = '';
    //include('C:/xampp/htdocs/backoffice/views/config.php');
    //require 'C:/wamp64/www/projet/web/admin/entities/produit.php';
    include('C:/xampp/htdocs/backoffice/entites/produitret.php');
require 'C:/xampp/htdocs/backoffice/core/traitment.php';
    $req = 'SELECT * FROM prodreteur';
    $db = config::getConnexion();
    $sth = $db->query($req);
         while ($row = $sth->fetch(PDO::FETCH_ASSOC)) 
     {
      $contents .= "
      <tr>
        <td>".$row['id']."</td>
        <td>".$row['designation']."</td>
        <td>".$row['quantite']."</td>
        <td>".$row['prix']."</td>
        
      </tr>
      ";
    
   }
    return $contents;
  }

  require_once('tcpdf/tcpdf.php');  
    $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
    $pdf->SetCreator(PDF_CREATOR);  
    $pdf->SetTitle("Generated PDF using TCPDF");  
    $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
    $pdf->SetDefaultMonospacedFont('helvetica');  
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
    $pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
    $pdf->setPrintHeader(false);  
    $pdf->setPrintFooter(false);  
    $pdf->SetAutoPageBreak(TRUE, 10);  
    $pdf->SetFont('helvetica', '', 11);  
    $pdf->AddPage();  
    $content = '';  
    $content .= '
        <h2 align="center"> Produits</h2>
        <h4>Produit à Retournés</h4>
        <table border="1" cellspacing="0" cellpadding="3">  
           <tr>  
                <th width="25%">ID</th>
        <th width="25%">NOM</th>
        <th width="25%">DESCRIPTION</th>
        <th width="25%">PRIX</th> 
           </tr>  
      ';  
    $content .= generateRow();  
    $content .= '</table>';  
    $pdf->writeHTML($content);  
      ob_end_clean(); 

   $pdf->Output('produit.pdf', 'I');
?>