<?php 
include('conn.php');

           require_once('fpdf/fpdf.php');  

           $obj_pdf = new FPDF('p','mm','A4');  
            $obj_pdf->AliasNbpages('pages');
            $obj_pdf->SetAutoPageBreak(true);
             $obj_pdf->AddPage();  
            $obj_pdf->SetFont("Arial","",8);
            $obj_pdf->SetDrawColor(50,50,100);
     $obj_pdf->cell(30,8,"Customer id",1,0);  
     $obj_pdf->cell(35,8,"Customer Name",1,0);
    $obj_pdf->cell(40,8,"Email",1,0);
         $obj_pdf->cell(35,8,"Address",1,0);
           $obj_pdf->cell(35,8,"mobile",1,1);
         if(isset($_POST["download"]))  
{  $emp_query =mysqli_query($conn,"SELECT * FROM userinfo");   
          while($row=mysqli_fetch_assoc($emp_query))  

{       $obj_pdf->cell(30,8,$row['id'],1,0);
         $obj_pdf->cell(35,8,$row['name'],1,0);
          $obj_pdf->cell(40,8,$row['email'],1,0);
           $obj_pdf->cell(35,8,$row['address'],1,0);
            $obj_pdf->cell(35,8,$row['mobile'],1,1);
 
         
     }  }
  $obj_pdf->Output();  
     ?> 