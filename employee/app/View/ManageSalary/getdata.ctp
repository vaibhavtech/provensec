<?php
if(is_array($contentdata) && count($contentdata) > 0)
{
      foreach ($contentdata as $key => $value)
      {
            $this->layout = 'pdf';
            $this->response->type('pdf');
            $this->set('fpdf', new FPDF('L','mm','A4'));
            $fpdf = new PDF();
            $fpdf->AddPage('L');
            $fpdf->SetMargins(10, 10, 10);    
            $fpdf->SetFont('Arial','I', 22);
            $fpdf->SetXY(20, 17);
            $fpdf->SetTextColor(128, 0, 128);
            $fpdf->Cell(10, 10, "Provensec");
            $fpdf->SetFont('Arial','I', 14);
            $fpdf->SetXY(20, 24);
            $fpdf->SetTextColor(255, 20, 147);
            $fpdf->Cell(10, 10, " 616 Corporate Way #2,");
            $fpdf->Ln();
            $fpdf->SetFont('Arial','I', 14);
            $fpdf->SetXY(20, 30);
            $fpdf->Cell(10, 10, "Valley Cottage,");
            $fpdf->Ln();
            $fpdf->SetFont('Arial','I', 14);
            $fpdf->SetXY(20, 36);
            $fpdf->Cell(10, 10, "NY 10989, United States");
            $fpdf->SetXY(10, 265);
            $newimage = WWW_ROOT.'organization-logo/psec2.png';
            $fpdf->Image($newimage,240,10,35,40);
            $fpdf->Ln();
            $fpdf->SetXY(20, 120);
            //$fpdf->Cell(10, 10, $heading);
            $fpdf->Ln();
            $fpdf->SetXY(80, 140);
            //$fpdf->Cell(10, 10, $naam);
            $fpdf->Ln();
            $fpdf->Ln();
            $fpdf->Ln();
            $fpdf->SetXY(20, 160);
            $fpdf->SetFont('Arial', 'B', 14);
            //$fpdf->Cell(60,10, $tdate ,0,0,'L',false);
            $fpdf->SetXY(70, 170);
            $fpdf->Cell(14);
            $fpdf->SetFont('Arial', 'B','10');
            $fpdf->SetWidths(array(50,150,80));
            $fpdf->SetTextColor(0,0,0);
            $fpdf->SetXY(4, 55);
            // echo "<pre>";
            // print_r($content);
            // echo "</pre>";
            
            // echo "<pre>";
            // print_r($contentdata);
            // echo "</pre>";
            $fpdf->Row(array('PAY SLIP', 'EMPLOYEE ID :                ' . $value["0"]["code"],'MONTH:     ' . $value["Salary"]["salary_month"]));
            $fpdf->SetXY(4, 60);
            $fpdf->MultiCell(30, 10, "NAME", 1, "C", false);
            $fpdf->SetTextColor(0, 0, 0);
            $fpdf->SetFont('Arial', '','11');
            $fpdf->SetX(4);
            $fpdf->MultiCell(30, 16, $value['0']["name"], 1,"C");
            $fpdf->SetXY(34, 60);
            $fpdf->SetFont('Arial', 'B','10');
            $fpdf->MultiCell(20, 10, "DESIG.", 1, "C", false);
            $fpdf->SetTextColor(0, 0, 0);
            $fpdf->SetFont('Arial', '','11');
            $fpdf->SetX(34);
            $fpdf->MultiCell(20, 16, $value['0']["designation"], 1,"C");
            $fpdf->SetXY(54, 60);
            $fpdf->SetFont('Arial', 'B','10');
            $fpdf->MultiCell(20, 10, "BASIC", 1, "C", false);
            $fpdf->SetTextColor(0, 0, 0);
            $fpdf->SetFont('Arial', '','11');
            $fpdf->SetX(54);
            $fpdf->MultiCell(20, 16, $value['Salary']["basic_salary"], 1,"C");
            $fpdf->SetXY(74, 60);
            $fpdf->SetFont('Arial', 'B','10');
            $fpdf->MultiCell(20, 10, "HRA", 1, "C", false);
            $fpdf->SetTextColor(0, 0, 0);
            $fpdf->SetFont('Arial', '','11');
            $fpdf->SetX(74);
            $fpdf->MultiCell(20, 16, $value['Salary']["hra"], 1,"C");
            $fpdf->SetXY(94, 60);
            $fpdf->SetFont('Arial', 'B','10');
            $fpdf->MultiCell(20, 10, "DA", 1, "C", false);
            $fpdf->SetTextColor(0, 0, 0);
            $fpdf->SetFont('Arial', '','11');
            $fpdf->SetX(94);
            $fpdf->MultiCell(20, 16, $value['Salary']["da"], 1,"C");
            $fpdf->SetXY(114, 60);
            $fpdf->SetFont('Arial', 'B','10');
            $fpdf->MultiCell(36, 10, "REIMBURSEMENT", 1, "C", false);
            $fpdf->SetTextColor(0, 0, 0);
            $fpdf->SetFont('Arial', '','11');
            $fpdf->SetX(114);
            $fpdf->MultiCell(36, 16, "1000", 1,"C");
            $fpdf->SetXY(150, 60);
            $fpdf->SetFont('Arial', 'B','10');
            $fpdf->MultiCell(24, 10, "ADVANCE", 1, "C", false);
            $fpdf->SetTextColor(0, 0, 0);
            $fpdf->SetFont('Arial', '','11');
            $fpdf->SetX(150);
            $fpdf->MultiCell(24, 16, $value['Salary']["advance"], 1,"C");
            $fpdf->SetXY(174, 60);
            $fpdf->SetFont('Arial', 'B','10');
            $fpdf->MultiCell(30, 10, "GROSS TOTAL", 1, "C", false);
            $fpdf->SetTextColor(0, 0, 0);
            $fpdf->SetFont('Arial', '','11');
            $fpdf->SetX(174);
            $fpdf->MultiCell(30, 16, $value['Salary']["total"], 1,"C");
            $fpdf->SetXY(204, 60);
            $fpdf->SetFont('Arial', 'B','10');
            $fpdf->MultiCell(60, 5, "DEDUCTIONS", 1, "C", false);
            $fpdf->SetXY(204, 65);
            $fpdf->SetFont('Arial', 'B','10');
            $fpdf->MultiCell(20, 7, "IT", 1, "C", false);
            $fpdf->SetXY(204, 72);
            $fpdf->SetFont('Arial', '','10');
            $fpdf->MultiCell(20, 14, "0.00", 1, "C", false);
            $fpdf->SetXY(224, 65);
            $fpdf->SetFont('Arial', 'B','10');
            $fpdf->MultiCell(20, 7, "OTRS", 1, "C", false);
            $fpdf->SetXY(224, 72);
            $fpdf->SetFont('Arial', '','10');
            $fpdf->MultiCell(20, 14, "0.00", 1, "C", false);
            $fpdf->SetXY(244, 65);
            $fpdf->SetFont('Arial', 'B','10');
            $fpdf->MultiCell(20, 7, "TOT", 1, "C", false);
            $fpdf->SetXY(244, 72);
            $fpdf->SetFont('Arial', '','10');
            $fpdf->MultiCell(20, 14, "0.00", 1, "C", false);
            $fpdf->SetXY(264, 60);
            $fpdf->SetFont('Arial', 'B','10');
            $fpdf->MultiCell(20, 6, "NET SALARY", 1, "C", false);
            $fpdf->SetTextColor(0, 0, 0);
            $fpdf->SetFont('Arial', '','11');
            $fpdf->SetX(264);
            $fpdf->MultiCell(20, 14, $value['Salary']["total"], 1,"C");
            $fpdf->SetXY(4, 90);  
            $fpdf->SetFillColor(255, 105, 180);
            $fpdf->MultiCell(280, 8, " ", 0,'L', true);
            $fpdf->SetFont('Arial', 'I','12');
            $fpdf->SetTextColor(128, 0, 128);
            $fpdf->SetXY(4, 100);
            $fpdf->MultiCell(40, 15, "", 1, "C", false);
            $fpdf->SetXY(44, 100);
            $fpdf->MultiCell(240, 15, "LEAVE DETAILS", 1, "C", false);
            $fpdf->SetXY(4, 115);
            $fpdf->SetFont('Arial', 'B','11');
            $fpdf->SetTextColor(0, 0, 0);
            $fpdf->MultiCell(280, 10, "Leave Entitled :                 7", 1, "L", false);
            $fpdf->SetXY(4, 125);
            $fpdf->SetFont('Arial', 'B','11');
            $fpdf->SetTextColor(0, 0, 0);
            $fpdf->MultiCell(280, 10, "Leave Taken :                    ". $value["0"]["taken"], 1, "L", false);
            $fpdf->SetXY(4, 135);
            $fpdf->SetFont('Arial', 'B','11');
            $fpdf->SetTextColor(0, 0, 0);
            $fpdf->MultiCell(280, 10, "Balance :                          ". $value["0"]["remaining"], 1, "L", false);
            $fpdf->SetFont('Arial', 'I','10');
            $fpdf->SetTextColor(128, 0, 128);
            $fpdf->SetXY(4, 145);
            $fpdf->MultiCell(40, 15, "", 1, "C", false);
            $fpdf->SetXY(44, 145);
            $fpdf->MultiCell(240, 15, "This is a system generated Pay slip. Signature is not required.", 1, "L", false);
            $path = WWW_ROOT . "pdfs/";
            $file_name = $path . $value["0"]["name"] . '.pdf';
            // $file_name = date('Y-m-d').'_'.$value["0"]["name"].'.pdf';
            $fpdf->Output($file_name, 'D');
      }
}
// header("location:../salary_slip");
// header("Location:" . $this->Html->url(array('action'=>'salary_slip')));
header('Location:../salary_slip');
exit();
class PDF extends FPDF 
{ }
?>