<?php
function BuildDate($tgl){
	for ($i = 1;$i<=31;$i++) {
		echo "<option value=\"$i\" ";
		if ($tgl == $i) {
			echo "selected>";
		} else {
			echo ">";
		}
		if ($i<10) {
			echo "0".$i;
		} else {
			echo "$i";
		}
		echo "</option>";
	}
}

function BuildMonth($bulan){
	for ($i = 1;$i<=12;$i++) {
		echo "<option value=\"$i\" ";
		if ($i == $bulan) {
			echo "selected>";
		} else {
			echo ">";
		}
		if ($i<10) {
			echo "0".$i;
		} else {
			echo "$i";
		}
		echo "</option>";
	}
}

function BuildYear($tahun,$begin,$end){
	for ($i = $begin;$i<=$end;$i++) {
		echo "<option value=\"$i\" ";
		if ($i == $tahun) {
			echo "selected >";
		} else {
			echo ">";
		}
		echo "$i</option>";
	}
}

function formatDOB($dob){
	$Adob = explode ("-",$dob);
	$newdob = $Adob[2];
	if ($Adob[1] == 1)$month = _JANUARY;
	if ($Adob[1] == 2)$month = _FEBRUARY;
	if ($Adob[1] == 3)$month = _MARCH;
	if ($Adob[1] == 4)$month = _APRIL;
	if ($Adob[1] == 5)$month = _MAY;
	if ($Adob[1] == 6)$month = _JUNE;
	if ($Adob[1] == 7)$month = _JULY;
	if ($Adob[1] == 8)$month = _AUGUST;
	if ($Adob[1] == 9)$month = _SEPTEMBER;
	if ($Adob[1] == 10)$month = _OCTOBER;
	if ($Adob[1] == 11)$month = _NOVEMBER;
	if ($Adob[1] == 12)$month = _DECEMBER;
	$newdob = "$month"." ".$newdob.", ".$Adob[0];
	return $newdob;
}


	$now = explode("-",date("d-m-Y"));
	$nowDate = $now[0];
	$nowMonth = $now[1];
	$nowYear = $now[2];
echo "<!DOCTYPE html PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN'>\n";
echo "<title>ZUL RESUME</title>";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"font.css\">\n";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"resume.css\">\n";
echo "<script type=textjavascript src=formretain.js>\n";
echo "</script>\n";
echo "<style type=\"text/css\">.grey{FONT: 7.5pt verdana; COLOR: #666666; TEXT-DECORATION: none;}\n";
echo "</style>\n";
echo "<p><center><img border=\"0\" src=\"grad.gif\" width=\"234\" height=\"134\"></p>\n";
echo "<p><font face=\"Verdana\" size=\"4\">RESUME/CURRICULUM VITAE MAKER</font><p>&nbsp;<table border=\"0\" width=\"100%\" id=\"table1\">\n";
echo "	<tr>\n";
echo "		<td bordercolorlight=\"#FFFFFF\" bordercolordark=\"#FFFFFF\"><font face=\"Verdana\" size=\"2\">";
echo "<center>When printing your Resume, <font color=\"red\"><b>ENSURE</b></font> that you set in your browser, click <b>Tools</b>\n";
echo "from the pull-down menu choose <b>Internet Option</b>, followed by <b>Advanced</b> tab, tick <b>Print Background Colors and Images</b> box</font></center></p>\n";
echo "		<p>&nbsp;</td>\n";
echo "	</tr>\n";
echo "</table>\n";
echo "</center><br>\n";
echo "<center><img src='bar1.gif'></center>\n";
echo "<br><br>\n";echo "<form action=\"hantar2.php\" method=\"post\" enctype=\"multipart/form-data\">";
echo "<table width=\"80%\" border=\"0\" cellspacing=\"1\" cellpadding=\"2\" align=\"center\">"
		."<tr class='TRHeader'><td colspan=\"2\" align=\"center\"><b>PERSONAL INFORMATION</b></td></tr>"
		."<tr><td width=\"25%\"><B>FULL NAME*</b></td><td><input type=\"text\" name=\"xfname\" size=\"40\" maxlength=\"80\" class=\"memorize\"></td></tr>"
		
		;
		
		echo "</select>";
		echo "</td></tr>"
		."<tr><td width=\"25%\" valign=\"top\"><B>ADDRESS *</b></td><td><textarea cols=\"45\" rows=\"5\" name=\"xaddr1\" class=\"memorize\"></textarea></td></tr>"
		
		."<tr><td width=\"25%\"><B>CITY *</b></td><td><input type=\"text\" name=\"xcity\" size=\"20\" maxlength=\"60\" class=\"memorize\"></td></tr>"
		."<tr><td width=\"25%\"><B>STATE *</b></td><td><input type=\"text\" name=\"xstate\" size=\"20\" maxlength=\"50\" class=\"memorize\"></td></tr>"
		."<tr><td width=\"25%\"><B>POSTCODE *</b></td><td><input type=\"text\" name=\"xzip\" size=\"10\" maxlength=\"20\" class=\"memorize\"></td></tr>"
		."<tr><td width=\"25%\"><B>COUNTRY *</b></td><td><input type=\"text\" name=\"xfk_country\" size=\"20\" maxlength=\"30\" class=\"memorize\"></td></tr>"
		."<tr><td width=\"25%\"><B>TEL NO *</b></td><td><input type=\"text\" name=\"xphone\" size=\"20\" maxlength=\"60\" class=\"memorize\"></td></tr>"
		."<tr><td width=\"25%\"><B>EMAIL *</b></td><td><input type=\"text\" name=\"xemail\" size=\"25\" maxlength=\"60\" class=\"memorize\"></td></tr>"
		."<tr><td width=\"25%\"><B>IDENTITY CARD NO</b></td><td><input type=\"text\" name=\"xkp\" size=\"14\" maxlength=\"20\" class=\"memorize\"></td></tr>"
            ."<tr><td width=\"25%\"><B>SEX</b></td><td><input type=\"radio\" value=\"Male\" name=\"jantina\" class=\"memorize\">Male"."       "."<input type=\"radio\" value=\"Female\" name=\"jantina\" class=\"memorize\">Female</td></tr>"
            ."<tr><td width=\"25%\"><B>MARITAL STATUS</b></td><td><input type=\"radio\" value=\"Single\" name=\"ms\" class=\"memorize\">Single"."       "."<input type=\"radio\" value=\"Married\" name=\"ms\" class=\"memorize\">Married"."<input type=\"radio\" value=\"Divorced\" name=\"ms\">Divorced"."<input type=\"radio\" value=\"Separated\" name=\"ms\">Separated</td></tr>"
            ."<tr><td width=\"25%\"><B>FOTO</b></td><td><input type=\"file\" name=\"image\" size=\"30\"></td></tr>"
            ."<tr><td width=\"25%\"><B>OBJECTIVE</b></td><td><textarea name=\"xobj\" cols=\"35\" rows=\"4\">to find a suitable job that match my qualification and experiences...</textarea></td></tr>"
          	."</table>" ;
		echo "<BR><BR>";
	      echo "<table width='80%' border='0' cellspacing='2' cellpadding='1' align='center'>"
            ."<tr class='TRHeader'>	<td colspan='4' align='center'>&nbsp;<b>ACADEMIC BACKGROUND</b></td></tr>"
            ."<tr>"
            ."<td width='35%'><b>INSTITUTION</b></td><td width='28%'><b>QUALIFICATION</b></td>"
		."<td width='27%'>"
		."<p align='center'><b>GRADE/CGPA</b></td><td width='8%'><b>YEAR</b></td></tr>";
		for ($i=0;$i<=5;$i++) {
		echo "<tr><td><input type='text' name='institute[$i]' size='35' maxlength='50'></td><td>";
		echo "<input type='text' name='degree[$i]' size='38' class=></td><td>"
		."<p align='center'><input type='text' name='gred[$i]' size='20'></td><td><input type='text' name='tahun[$i]' size='5' maxlength='4'></td></tr>";
		}
	echo "</table>";
	echo "<BR><BR>";
	echo "<table width=\"80%\" align=\"center\" border=\"0\" cellspacing=\"1\" cellpadding=\"2\">"
		."<tr class='TRHeader'><td colspan='2'align=\"center\">&nbsp;<b>EMPLOYMENT HISTORY</b></td></tr>";
		for ($i = 1;$i<=3;$i++) {
			echo "<tr><td>";
			echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"1\"><tr>"
    			."<td width=\"20%\"><B>EMPLOYER[$i]</b></td><td width=\"5\"><B> : </b></td><td>"
      			."<input type=\"text\" name=\"employer[$i]\" size=\"25\" maxlength=\"50\">"
    			."</td></tr>"
				."<tr><td width=\"20%\"><B>INDUSTRY</b></td><td><B> : </b></td><td>";
      		echo "<input type=\"text\" size=\"35\" name=\"industry[$i]\">"
         			."</td></tr><tr><td width=\"20%\"><B>LAST POST</b></td><TD width=\"5\"><B> : </b></td><td>"
      			."<input type=\"text\" name=\"position[$i]\" size=\"25\" maxlength=\"50\">"
    			."</td></tr><tr><td><B>EXPERIENCE</b></td><td><B> : </b></td><td>From ";
      		echo "<input type=\"text\" name=\"startyear[$i]\" size=\"4\">";
				
      
      		echo "to ";
			echo "<input type=\"text\" name=\"endyear[$i]\" size=\"4\">";
	     			
			
    		echo "</td></tr><tr><td width=\"20%\" valign=\"top\"><B>RESPONSIBILITIES</b><br><font face='Times New Roman' size='2'><i>use &lt;br&gt; to move next line</i></font>
</td><TD valign=\"top\" width=\"5\"><B> : </b></td><td>"
      			."<textarea name=\"responsibilities[$i]\" cols=\"45\" rows=\"4\"></textarea>"
    			."</td></tr></table>";
                  echo "<BR>";
			echo "</td></tr>";
		}

		echo "<table width=\"80%\" align=\"center\" border=\"0\" cellspacing=\"1\" cellpadding=\"1\">"
     		."<tr class='TRHeader'><td colspan=\"2\" align=\"center\" ><b>SKILLS</b></td></tr>"
            ."<tr><td width=\"50%\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SKILL</td>"
		."<td width=\"49%\">YEAR</TD></tr>";
		
	
	for ($i = 0;$i<=3;$i++) {
		
	echo "<tr><td width=\"50%\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type='text' name='skill[$i]' size=\"40\"></td>";
      echo "<td width=\"49%\"><input type='text' name='skillyear[$i]' size='4'></td></tr>";
     
       }
      
      echo "</TABLE>";
      echo "<table width=\"80%\" align=\"center\" border=\"0\" cellspacing=\"1\" cellpadding=\"2\">";
      echo "<BR>"
      ."<tr class='TRHeader'><td colspan=\"3\" align=\"center\" ><b>LANGUAGES</b></td></tr>";
      echo "<BR>"
      ."<tr><td>English:</td><td><input type=\"radio\" value=\"Good\" name=\"bi\" class=\"memorize\">Good"."       "."<input type=\"radio\" value=\"Average\" name=\"bi\" class=\"memorize\">Average".' '."<input type=\"radio\" value=\"Poor\" name=\"bi\" class=\"memorize\">Poor</td></tr>"
      ."<tr><td>Malay:</td><td><input type=\"radio\" value=\"Good\" name=\"bm\" class=\"memorize\">Good"."       "."<input type=\"radio\" value=\"Average\" name=\"bm\" class=\"memorize\">Average".' '."<input type=\"radio\" value=\"Poor\" name=\"bm\" class=\"memorize\">Poor</td></tr>"
      ."<tr><td>Others:<input type=\"text\" name=\"blain\" size=\"15\" maxlength=\"30\"></td><td><input type=\"radio\" value=\"Good\" name=\"lain\">Good"."       "."<input type=\"radio\" value=\"Average\" name=\"lain\">Average".' '."<input type=\"radio\" value=\"Poor\" name=\"lain\">Poor</td></tr>"
      
      ."<br>"
      ."</table>";    
      
      echo "<table width=\"80%\" align=\"center\" border=\"0\" cellspacing=\"1\" cellpadding=\"2\">";
      echo "<BR>"
      ."<tr class='TRHeader'><td colspan=\"3\" align=\"center\" ><b>MISCELLANEOUS</b></td></tr>";
      echo "<BR>"
       ."<tr><td>Own transport :</td><td><input type=\"radio\" value=\"Yes\" name=\"kenderaan\" class=\"memorize\">Yes"."       "."<input type=\"radio\" value=\"No\" name=\"kenderaan\" class=\"memorize\">No</td></tr>"
       ."<tr><td>Communication Skills :</td><td><input type=\"radio\" value=\"Good\" name=\"komunikasi\" class=\"memorize\">Good"."       "."<input type=\"radio\" value=\"Sederhana\" name=\"komunikasi\" class=\"memorize\">Average".' '."<input type=\"radio\" value=\"Lemah\" name=\"komunikasi\" class=\"memorize\">Poor</td></tr>"
       ."<tr><td>Expected Salary :</td><td><input type=\"text\" name=\"salary\" size='12' value='      '></td></tr>"
       ."<tr><td>Ready for work :</td><td><input type=\"radio\" value=\"At any time\" name=\"sedia\" class=\"memorize\">At any time"."       "."<input type=\"radio\" value=\"30 days notice\" name=\"sedia\" class=\"memorize\">30 days notice".' '."<input type=\"radio\" value=\"Notice\" name=\"sedia\" class=\"memorize\">Notice</td></tr>"

      ."<br>"
      ."</table>";    
      echo "<table width=\"80%\" align=\"center\" border=\"0\" cellspacing=\"1\" cellpadding=\"2\">";
      echo "<BR>"
	."<tr class='TRHeader'><td colspan=\"3\" align=\"center\" ><b>REFERENCES</b></td></tr>";
    
     echo "<tr><td width=\"25%\"><B>Name</b></td><td><input type=\"text\" name=\"xrefname\" size=\"30\" maxlength=\"50\"></td></tr>"
	      ."<tr><td width=\"25%\"><B>Occupation</b></td><td><input type=\"text\" name=\"xrefjob\" size=\"30\" maxlength=\"50\"></td></tr>"
		."<tr><td width=\"25%\"><B>Address</b></td><td><input type=\"text\" name=\"xrefadd\" size=\"40\" maxlength=\"60\"></td></tr>"
		."<tr><td width=\"25%\"><B>Tel No</b></td><td><input type=\"text\" name=\"xrefphone\" size=\"20\" maxlength=\"30\"></td></tr>"
		."<tr><td width=\"25%\"><B>Email</b></td><td><input type=\"text\" name=\"xrefemail\" size=\"20\" maxlength=\"30\"></td></tr>"
            ."<tr><td width=\"25%\"><B>Relationship</b></td><td><input type=\"text\" name=\"xhubungan\" size=\"20\" maxlength=\"30\"></td></tr>"
            ."<tr><td width=\"25%\"></td></tr>";
            
echo "</table>" ;
echo "<BR><center><input type=\"submit\" name=\"action\" value=\"Hantar Resume\"></center>";
echo "</form>";

include("counter.php")
?>
