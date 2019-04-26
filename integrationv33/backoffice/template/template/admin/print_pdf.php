<?php
    include_once('../entities/element.php');
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
    $id = $_POST['id']; 
    $content .= "
    <link rel='stylesheet' type='text/css' href='pdf.css'>
    <body>
        <h2 align='center'>S.D.A</h2>
        <h4 align='center'>Detail Sur la Commande</h4>
        <h3 align='center'>ID_Commande: $id</h3>";
        
        $db = Config::getConnexion();
        $sql = "SELECT * FROM commande WHERE id_C = '$id'";
        $query = $db->prepare($sql);
        $query->execute();
        $sdt = $query->fetchAll(PDO::FETCH_OBJ);

    $content .= "
        <table  align='center' border='1' cellspacing='0' cellpadding='3'>  
        <thead>
          <tr>
            <th>Article</th>
            <th>Date</th>
            <th>Prix Unitaire</th>
            <th>Quantite</th>
            <th>Total</th>
          </tr>
        </thead>";
    foreach($sdt as $row){
    $dx=$row->id_C;
    $content .= "
        </tbody>
            <tr>
                <td>$row->article</td>
                <td>$row->date</td>
                <td>$row->prixUnitaire</td>
                <td>$row->quantite</td>
                <td>$row->total</td>
            </tr>
        </tbody>
    ";
    }  
         
    $content .= "</table>
    </body>";  
    $pdf->writeHTML($content);  
    $pdf->Output('event.pdf', 'I');
    

?>