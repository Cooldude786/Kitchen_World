<?php 
include('conn.php');

           require_once('fpdf/fpdf.php');  

           $obj_pdf = new FPDF('p','mm','A4');  
            $obj_pdf->AliasNbpages('pages');
            $obj_pdf->SetAutoPageBreak(true);
             $obj_pdf->AddPage();  
            $obj_pdf->SetFont("Arial","",8);
            $obj_pdf->SetDrawColor(50,50,100);
     $obj_pdf->cell(30,8,"ID",1,0);  
     $obj_pdf->cell(40,8,"Order id",1,0); 
           $obj_pdf->cell(35,8,"Quantity",1,0);
              $obj_pdf->cell(35,8,"Amount",1,0);
               $obj_pdf->cell(35,8,"Payment type",1,0);
                $obj_pdf->cell(35,8,"Order status",1,0);
                 $obj_pdf->cell(35,8,"Name",1,1);

         if(isset($_POST["download"]))  
{  $emp_query =mysqli_query($conn,"SELECT * FROM order_re");   
          while($row=mysqli_fetch_assoc($emp_query))  

{      
 $obj_pdf->cell(30,8,$row['id'],1,0);
         $obj_pdf->cell(40,8,$row['order_id'],1,0);
   
           $obj_pdf->cell(35,8,$row['quantity'],1,0);
            $obj_pdf->cell(35,8,$row['amount'],1,0);
            $obj_pdf->cell(35,8,$row['payment_type'],1,0);
            $obj_pdf->cell(35,8,$row['order_status'],1,1);
            
         
     }  }
  $obj_pdf->Output();  
     ?> 