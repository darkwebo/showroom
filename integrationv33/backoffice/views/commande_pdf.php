<?php
    include_once('../entites/element.php');
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
    $content = '<link rel="stylesheet" type="text/css" href="pdf.css">'; 
    $content .= '<link rel="stylesheet" type="text/css" href="panier.css">'; 
    $id_commande = $_GET['id']; 
    $content  .= '
                    <body >
                        <div align = "left">
                                <h4 align = "left"><img align = "left"  width = "100px" height = "100px"/><span class= "hhh2">S</span>ociete de <br/><br/><span class= "hhh2">D</span>eveloppement<br/><br/> <span class= "hhh2">A</span>gricole</h4>
                        </div>
                        <div><h3 align = "right" >ID_Commande:';
                        $content .= " $id_commande </h3>";
                        $content .= '<h2 align="center">Detail Sur la Commande</h2>';
                        
                        
                        $db = Config::getConnexion();
                        $sql = "SELECT * FROM commande  WHERE  id_C = '$id_commande'";
                        $query = $db->prepare($sql);
                        $query->execute();
                        $sdt = $query->fetchAll(PDO::FETCH_OBJ);

                $content .= '
                        <table class="table" cellspacing="2" align="center" height= "50%" width="100%"  cellpadding="10">  
                        <thead>
                          <tr class="pure" >
                            <th>Article</th>
                            <th>Date</th>
                            <th>Prix Unitaire</th>
                            <th>Quantite</th>
                            <th>Total</th>
                          </tr>
                        </thead>';
                foreach($sdt as $row){
                $content .= '
                        <tbody align = "center">';
                $content .= "
                            <tr>
                                <td>$row->article</td>
                                <td>$row->date</td>
                                <td>$row->prixUnitaire</td>
                                <td>$row->quantite</td>
                                <td>$row->total</td>
                            </tr>";
                } 
                $content .= '        
                            <tr class="pure">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div align="left">
                                        <span class="dddj">Total <span class= "hhh">du</span></span>
                                    </div>
                                    <div align="right">
                                        <span class="dj"><span class= "hhh">PA</span>nier</span>
                                    </div>
                                </td>
                                <td  colspan="2">
                                    <div align="center"></div>
                                    <div align="center"></div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div align="center"></div>
                                </td>
                                <td>
                                    <div color="red" align="center"></div>
                                    <div align="center" class="puttttttt">
                                        <span class="ddj"><span class= "hhh1">TOTAL</span></span>
                                        ';
                $sql = "SELECT * FROM liste_commandes  WHERE  id_commande = '$id_commande'";
                $query = $db->prepare($sql);
                $query->execute();
                $sdt = $query->fetchAll(PDO::FETCH_OBJ);
                foreach($sdt as $row){
                $content .= "
                                        <h4 >$row->total DT</h4>";}
                $content .= "
                                        <hr/>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </body>";     
    $pdf->writeHTML($content);  
    $pdf->Output('event.pdf', 'I');
    

?>