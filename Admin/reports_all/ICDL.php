<?php
error_reporting(0);
include_once('connect.php');

$sql = "SELECT studentID AS `Admission Number` , c.courseName AS `Course` ,s.firstName AS `First Name` ,s.lastName AS `Last Name`,s.gender AS `Gender`,s.PhoneNumber AS `Phone Number`,s.guardianPhoneNumber AS `Emergency Contact`, s.regDate AS `Admission Date` FROM student s join course c on s.course=c.courseID WHERE course='ICDL'";
$resultset = mysqli_query($db, $sql) or die("database error:". mysqli_error($db));


$sql2 = "SELECT COUNT(gender) AS nu FROM student WHERE course='ICDL' AND gender='Male'";
$resultset2 = mysqli_query($db, $sql2) or die("database error:". mysqli_error($db));
while($users3=mysqli_fetch_array($resultset2))
        {
        $male_gender=$users3['nu']; //male students
        }

$sql3 = "SELECT COUNT(gender) AS nu FROM student WHERE course='ICDL' AND gender='Female' ";
$resultset3 = mysqli_query($db, $sql3) or die("database error:". mysqli_error($db));
while($users3=mysqli_fetch_array($resultset3))
        {
        $female_gender=$users3['nu'];//female students
        }

//How many day solars in the school
$total_students=$male_gender+ $female_gender;

require('fpdf/fpdf.php');
class PDF extends FPDF
{

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-10);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Line(0, 600, 210,600);
    $this->Cell(0,5,'Page '.$this->PageNo().'/{nb}',0,0,'L');
    // $tDate=date('l \t\h\e jS');
    //$this->Cell(0, 10, 'Date : '.$tDate, 0, false, 'C', 0, '', 0, false, 'T', 'M');
}
}


$pdf = new PDF();
$pdf->SetAuthor('Group One');
$pdf->AliasNbPages();
//set font for the entire document
$pdf->SetFont('Arial','B',20);
$pdf->SetTextColor(0,0,0);
//set up a page. Code L for landscape and P FOR Portrait
$pdf->AddPage('L');
//$pdf->SetDisplayMode(real,'default');
//insert an image and make it a link

//display the title with a border around it
$pdf->SetXY(100,25);
$pdf->Cell(100,5,'Microsoft Office tools',0,0,'C',0);
//C MEANS CENTERED
//Set x and y position for the main text, reduce font size and write content
$pdf->SetXY (10,50);
$pdf->SetFontSize(10);

//for($i=1;$i<=40;$i++)
//    $pdf->Cell(0,10,'Printing line number '.$i,0,1);

//This is teh date included in the submited form i.e printinvloice.php
// X[WIDTH] is the first value Y[HEIGHT] is the SECOND VALUE

$pdf->SetXY(100, 25);
$pdf->SetFontSize(10);
$pdf->Cell(0,10,'Date Printed :'.date('d-m-Y') ,0,0,'R',0);

//Put a line here

$pdf->Ln(4); //break
$pdf->Ln(4); //break
$pdf->Line(0, 35, 297, 35);  //Set the line
$pdf->Ln(4); //line Break
$pdf->Ln(4); //break

//populate the table with data fetched using the resultset
while ($field_info = mysqli_fetch_field($resultset)) {
$pdf->Cell(32,8,$field_info->name,1);
}
while($rows = mysqli_fetch_assoc($resultset)){
$pdf->SetFont('Arial','',8);
$pdf->Ln();
foreach($rows as $column) {
$pdf->Cell(32,8,$column,1);
}
}


/// Begin with regular font
//Output the fee summary values calculated above

$pdf->Ln();
$pdf->SetFont('Arial','',14);
$pdf->SetFontSize(10);
$pdf->SetFont('','U');
$pdf->Cell(0,10,'Summary',0,1);

$pdf->SetFont('Arial','',14);
$pdf->SetFontSize(10);
$pdf->Cell(0,10,'Total Number :'.$total_students ,0,1);
$pdf->Cell(0,10,'Male Students :'.$male_gender ,0,1);
$pdf->Cell(0,10,'Female Students :'.$female_gender ,0,1);


$pdf->Output();
?>
