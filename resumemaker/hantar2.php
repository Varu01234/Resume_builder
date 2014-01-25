<?php


//print_r($_POST);

if($_POST["action"] == "Hantar Resume")
{
unset($imagename);

if(!isset($_FILES) && isset($HTTP_POST_FILES))
$_FILES = $HTTP_POST_FILES;

if(!isset($_FILES['image']))
$error["image"] = "An image was not found.";


$imagename = basename($_FILES['image']['name']);
//echo $imagename;

if(empty($imagename))
$error["imagename"] = "The name of the image was not found.";

if(empty($error))
{
$newimage = "" . $imagename;
//echo $newimage;
$result = @move_uploaded_file($_FILES['image']['tmp_name'], $newimage);
if(empty($result))
$error["result"] = "There was an error moving the uploaded file.";
}

}
echo "<html><head><title>RESUME</title>";
echo "<link rel='stylesheet' type='text/css' href='font.css' media='print'>";
echo "<link rel='stylesheet' type='text/css' href='resume.css'>";
echo "<style type='text/css'>.grey{FONT: 8pt verdana; COLOR: #666666; TEXT-DECORATION: none;}";
echo "</style>";
echo "</head>";
echo "<body>";
echo "<div align='left'>";
echo " <table border='0' cellpadding='0' cellspacing='3' width='100%' bordercolor='#FFFFFF' bordercolorlight='#FFFFFF' bordercolordark='#FFFFFF'>";
echo "    <tr>";
echo "      <td align='center' width='1084' bgcolor='#d8d1f3'>";
echo "		<font face='Arial' color='#6C4884' size='5'><b>";
echo "		RESUME</b></font><font face='Arial' size='2'><br>";
echo "        </font></td>";
echo "      <td width='121' height='130' rowspan='2' >";
if ($newimage) {
echo "<img src=\"$newimage\" align='right' width='121' height='130'>";
} else {
      echo "<img src='tiada.gif' align='right' width='121' height='130' border='1'>";   
      }
echo "</td>";
echo "    </tr>";
echo "    <tr>";
echo "      <td width='1084'>";
echo "        &nbsp;</td>";
echo "    </tr>";
echo "    <tr>";
echo "      <td width='1217' bgcolor='#6C4884' colspan='2' valign='top' height='1'>";
echo "      </td>";
echo "    </tr>";
echo "  </table>";
echo "</div>";
echo "<font color='#000000' size='2' face='Arial'>";
echo "</font><b><font size='2' face='Arial'>$xfname</font></b><div align='left'>";
echo "  <table border='0' cellpadding='0' cellspacing='5' width='100%'>";
echo "    <tr>";
echo "      <td width='20%' valign='top' rowspan='34' bgcolor='#E5E5E5'>";
echo "        <p align='left'><b>Address</b><br>";
echo "        <br>";
echo $xaddr1 ." "; echo $xcity .", ";
echo $xzip ." "; 
echo $xstate .", ";
echo $xfk_country;
echo "<br><br>";
echo "<b>Telephone:</b><br>"; 
echo $xphone;

echo "		<br><br><b>Email: </b><br>";
echo $xemail;
echo "		<br><br><b>Identity Card No:</b><br>";
echo "		$xkp<br>";
echo "        <br><b>Date of birth:</b><br>";
echo "        $dob<br>";
echo "        <br><b>Sex:</b><br>";
echo "        $jantina<br>";
echo "	  <br><b>Marital Status:</b><br>";
echo "        $ms </p></font></td>";
echo "      <td width='1%' bgcolor='#6C4884' valign='top' rowspan='34' height='0'>";
echo "        &nbsp;";
echo "      </td>";
echo "      <td width='83%' colspan='5' valign='top' height='1'>";
echo "        <p align='left'><b><font face='Arial' color='#6C4884' size='2'>&nbsp;OBJECTIVE</font></b></p>";
echo "      </td>";
echo "    </tr>";
echo "    <tr>";
echo "      <td width='83%' bgcolor='#6C4884' colspan='5' valign='top' height='1'>";
echo "      </td>";
echo "    </tr>";
echo "    <tr>";
echo "      <td width='83%' colspan='5' valign='top' height='1'>";
echo "<p><font face='Times New Roman' size='2' color='#000000'>";
echo "<i>$xobj</i></font></p>";
echo "<br><br>";
echo "      </td>";
echo "    </tr>";
echo "    <tr>";
echo "      <td width='83%' colspan='5' valign='top' height='1'>";
echo "        <p align='left'><b><font face='Arial' size='2' color='#6C4884'>";
echo "		ACADEMIC BACKGROUND</font></b></p>";
echo "      </td>";
echo "    </tr>";
echo "    <tr>";
echo "      <td width='83%' bgcolor='#6C4884' colspan='5' valign='top' height='1'>";
echo "      </td>";
echo "    </tr>";
echo "    <tr>";
echo "      <td valign='top' align='right' height='1'>";
echo "        <p align='left'><font face='Arial' size='2' color='#000000'>INSTITUTION<br><br></font></p>";
echo "      </td>";
echo "      <td valign='top' align='center' height='1' colspan='2'>";
echo "        <p align='center'><font face='Arial' size='2' color='#000000'>QUALIFICATION<br><br></font></td>";
echo "      <td width='4%' height='1'>";
echo "      <font face='Arial' size='2' color='#000000'>CGPA<br><br></font></td>";
echo "      <td width='6%' height='1' valign='top'>";
echo "      <font face='Arial' size='2' color='#000000'>YEAR<br><br></font></td>";
echo "    </tr>";
for ($i=0;$i<=5;$i++) {
			if (($institute[$i]!="")) 
echo "<tr>";
echo "<td>";
echo "<font face='Arial' size='2' color='#6C4884'>$institute[$i]</font>";
echo "</b></td>";
echo "<td align='center' valign='top' height='1' colspan='2'>";
echo "<font face='Arial' size='2' color='#6C4884'>$degree[$i]</font>";
echo "</td>";
echo "<td valign='top' align='left' height='1'>";
echo "<font face='Arial' size='2' color='#000000'>$gred[$i]</font>";
echo "</td>";
echo "<td valign='top' align='left' height='1'>";
echo "<font face='Arial' size='2' color='#000000'>$tahun[$i]</font>";
echo "</td>";

}

echo "        <b>";
echo "    <font face='Arial' size='2' color='#6C4884'></font>    </b>      </td>      ";
echo "        <b>";
echo "    <font face='Arial' size='2' color='#6C4884'></font>    </b>      </td>      ";
echo "        <b>";
echo "    <font face='Arial' size='2' color='#6C4884'></font>    </b>      </td>      ";
echo "        <b>";
echo "    <font face='Arial' size='2' color='#6C4884'></font>    </b>      </td>      ";

echo "    <tr>";
echo "      <td valign='top' height='1' colspan='5'>";
echo "        ";
echo "      </td>";

echo "    </tr>";

echo "    <tr>";
echo "      <td colspan='5' valign='top' height='1'>";
echo "        <p align='left'><BR><BR><b><font face='Arial' color='#800000' size='2'>&nbsp;</font><font face='Arial' size='2' color='#6C4884'>EMPLOYMENT ";
echo "		/ EXPERIENCE</font></b></p>";
echo "      </td>";
echo "    </tr>";
echo "    <tr>";
echo "      <td bgcolor='#6C4884' colspan='5' valign='top' height='1'>";
echo "      </td>";
echo "    </tr>";
echo "    <tr>";
echo "      <td width='23%' valign='top' align='left' height='1'>";
echo "        <p><font face='Arial' size='2' color='#000000'>COMPANY</font></p>";
echo "      </td>";
echo "      <td valign='top' align='left' height='1'>";
echo "        <font size='2' face='Arial' color='#000000'>POST</font></td>";
echo "      <td width='28%' height='1' align='left'>";
echo "        <font size='2' face='Arial' color='#000000'>RESPONSIBILITIES</font></td>";
echo "      <td width='4%' height='1' align='center' valign='top'>";
echo "        <font size='2' face='Arial' color='#000000'>FROM</font></td>";
echo "      <td width='6%' valign='top' height='1' align='center'>";
echo "      <font size='2' face='Arial' color='#000000'>TO</font></td>";

echo "    </tr>";
for ($i=1;$i<=3;$i++) {
			if (($employer[$i]!="")) 

echo "<tr>";
echo "      <td width='23%' valign='top' align='left' height='1'>";
echo "      <font face='Arial' size='2' color='#6C4884'>$employer[$i]</td>";
echo "      <td valign='top' align='left' height='1'>";
echo "        <font face='Arial' size='2' color='#6C4884'>$position[$i]</td>";
echo "      <td width='28%' height='1' align='left'>";
echo "        <font face='Arial' size='2' color='#6C4884'>$responsibilities[$i]</td>";
echo "      <td width='4%' height='1' align='center' valign='top'>";
echo "        <font face='Arial' size='2' color='#6C4884'>$startyear[$i]</td>";
echo "      <td width='6%' valign='top' height='1' align='center'>";
echo "      <font face='Arial' size='2' color='#6C4884'>$endyear[$i]</td>";
}
echo "    <tr>";
echo "      <td valign='top' height='1' colspan='2'>";
echo "      </td>";
echo "      <td width='33%' height='1' colspan='2'>";
echo "       ";
echo "      </td>";
echo "      <td width='6%' height='1'>";
echo "      </td>";
echo "    </tr>";
echo "    <tr>";
echo "      <td width='83%' colspan='5' valign='top' height='1'>";
echo "    <b><br><br><font face='Arial' color='#800000' size='2'>&nbsp;</font><p><font face='Arial' size='2' color='#6C4884'>SKILLS</font></b></p>";
echo "      </td>";
echo "    </tr>";
echo "    <tr>";
echo "      <td width='83%' bgcolor='#6C4884' colspan='5' valign='top' height='1'>";
echo "      </td>";
echo "    </tr>";
echo "    <tr>";
echo "      <td width='785' valign='top' align='left' height='1' colspan='5'>";
echo "        <p align='left'><b><font face='Arial' size='2' color='#6C4884'>Additional Skills</font></b></p>";
echo "        </td>";
echo "    </tr>";
echo "    <tr>";
echo "      <td align='center' width='34%' height='1' colspan='2' align='left'>";
echo "        <p align='left'><font face='Arial' size='2' color='#000000'>Skill</p></font></td>";
echo "      <td align='center' width='62%' valign='top' colspan='3' align='left'>";
echo "      <font face='Arial' size='2' color='#000000'>YEARS</td></font></p>";
echo "     </tr>";
for ($i = 0;$i<=3;$i++) {
			if (($skill[$i]!="")) 
echo "     <tr>";
echo "       <td align='left' width='43%' valign='top' height='1' colspan='2'>";
echo "       <font face='Arial' size='2' color='#6C4884'>$skill[$i]</font></td>";
echo "       <td align='center' width='40%' height='1' colspan='3'>";
echo "       <font face='Arial' size='2' color='#6C4884'>$skillyear[$i]</font>";
echo "       </td>";
}
echo "     </tr>";
echo "    <tr>";
echo "      <td width='83%' colspan='5' align='left' valign='top' height='1'>";
echo "        <br><br><p align='left'><b><font face='Arial' color='#6C4884' size='2'>&nbsp;MISCELLANEOUS</font></b></p>";
echo "      </td>";
echo "    </tr>";
echo "    <tr>";
echo "      <td width='83%' bgcolor='#6C4884' colspan='5' valign='top' height='1'>";
echo "      </td>";
echo "    </tr>";
echo "    <tr>";
echo "      <td width='83%' colspan='5' align='left' valign='top' height='1'>";
echo "<p><font face='Arial' size='2'>English language: <font face='Arial' size='2' color='#6C4884'>$bi</font><br>Malay language: <font face='Arial' size='2' color='#6C4884'>$bm</font><br>";
echo "Others: <font face='Arial' size='2' color='#6C4884'>$blain" ."$lain</font><br>";
echo "Own transport: <font face='Arial' size='2' color='#6C4884'>$kenderaan</font><br>";
echo "Expected Salary: <font face='Arial' size='2' color='#6C4884'>$salary</font><br>";
echo "Ready to work: <font face='Arial' size='2' color='#6C4884'>$sedia</font></font><font face='Arial' size='2' color='#800000'><br>: ";
echo "</font><font face='Arial' size='2' color='#000000'>";
echo "</font></p>";
echo "      </td>";
echo "    </tr>";
echo "    <tr>";
echo "      <td width='83%' colspan='5' valign='top' height='1'>";
echo "        <p align='left'><b><font face='Arial' color='#6C4884' size='2'>&nbsp;REFERENCE</font></b></p>";
echo "      </td>";
echo "    </tr>";
echo "    <tr>";
echo "      <td width='83%' bgcolor='#6C4884' colspan='5' valign='top' height='1'>";
echo "      </td>";
echo "    </tr>";
echo "    <tr>";
echo "      <td width='0' colspan='1' valign='top'>";
echo "          <p><font face='Arial' size='2'>NAME: <br>";
echo "			ADDRESS: <br>";
echo "			POST:  <br>";
echo "			TEL NO: <br>";
echo "			EMAIL: <br>";
echo "<br>";
echo "<br>";
echo "      </td>";
echo "      <td colspan='4' valign='top'>";
echo "          <p><font face='Arial' size='2' color='#6C4884'>$xrefname</font><br>";
echo "		 <font face='Arial' size='2' color='#6C4884'>$xrefadd</font><br>";
echo "		 <font face='Arial' size='2' color='#6C4884'>$xrefjob</font><br>";
echo "		 <font face='Arial' size='2' color='#6C4884'>$xrefphone</font><br>";
echo "		 <font face='Arial' size='2' color='#6C4884'>$xrefemail</font><br>";
echo "<br>";
echo "<br>";
echo "<font face= 'times new roman' size = '1' color='#6C4884'><i>*Additional reference will be supplied upon request.</i></font>";
echo "      </td>";
echo "    </tr>";
echo "    <tr>";
echo "      <td width='83%' colspan='5' valign='top' height='1'>";
echo "          <p><font size='2' face='Arial' color='#800000'><br>";
echo "          </font>";
echo "          </p>";
echo "      </td>";
echo "    </tr>";
echo "    <tr>";
echo "    <CENTER><td colspan='5' align='right'>";
echo "    <input class=\"NavButton\" id=\"btnPrint\" type=\"button\" value=\"Print Resume\" onclick=\"window.print();\">";
echo "    <br>";
echo "          <br><font size='1' face='Times New Roman' color='blue'>";

echo "    </td></tr>";
echo "    </table>";
echo "    </center>";
echo "</div>";
echo "</body>";
echo "</html>";
?>
