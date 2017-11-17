<?php

$name="";
$email="";
$address="";
$phone="";

$education = [];
$skill = [];
$work = [];
$work_desc = [];


if(isset($_POST["sub"]))
{
    if(isset($_POST["name"]))
    {
        $name = $_POST["name"];
    }

    if(isset($_POST["email"]))
    {
        $email = $_POST["email"];
    }
    if(isset($_POST["address"]))
    {
        $address = $_POST["address"];
    }
    if(isset($_POST["phone"]))
    {
        $phone = $_POST["phone"];
    }    
	if(isset($_POST["education"]) && is_array($_POST["education"])){  
		$education = $_POST["education"];
	}
	if(isset($_POST["skill"]) && is_array($_POST["skill"])){  
		$skill = $_POST["skill"];
	}
	if(isset($_POST["work"]) && is_array($_POST["work"])){  
		$work = $_POST["work"];
	}	
	if(isset($_POST["work_desc"]) && is_array($_POST["work_desc"])){  
		$work_desc = $_POST["work_desc"];
	}

    $cv = "
<!DOCTYPE html>
<html>

<head>
<meta http-equiv=Content-Type content=\"text/html; charset=windows-1252\">
<meta name=Generator content=\"Microsoft Word 15 (filtered)\">
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:Wingdings;
	panose-1:5 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:\"MS Mincho\";
	panose-1:2 2 6 9 4 2 5 8 3 4;}
@font-face
	{font-family:\"Cambria Math\";
	panose-1:0 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:Verdana;
	panose-1:2 11 6 4 3 5 4 4 2 4;}
@font-face
	{font-family:\"High Tower Text\";
	panose-1:2 4 5 2 5 5 6 3 3 3;}
@font-face
	{font-family:\"\@MS Mincho\";
	panose-1:2 2 6 9 4 2 5 8 3 4;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin:0cm;
	margin-bottom:.0001pt;
	line-height:115%;
	font-size:10.0pt;
	font-family:\"Arial\",\"sans-serif\";}
h1
	{mso-style-link:\"Heading 1 Char\";
	margin:0cm;
	margin-bottom:.0001pt;
	line-height:115%;
	border:none;
	padding:0cm;
	font-size:10.0pt;
	font-family:\"Arial\",\"sans-serif\";}
h2
	{mso-style-link:\"Heading 2 Char\";
	margin:0cm;
	margin-bottom:.0001pt;
	font-size:10.0pt;
	font-family:\"Verdana\",\"sans-serif\";}
a:link, span.MsoHyperlink
	{color:blue;
	text-decoration:underline;}
a:visited, span.MsoHyperlinkFollowed
	{color:purple;
	text-decoration:underline;}
p.MsoNoSpacing, li.MsoNoSpacing, div.MsoNoSpacing
	{margin:0cm;
	margin-bottom:.0001pt;
	font-size:10.0pt;
	font-family:\"Arial\",\"sans-serif\";}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:18.0pt;
	margin-bottom:.0001pt;
	text-indent:-18.0pt;
	line-height:115%;
	font-size:10.0pt;
	font-family:\"Arial\",\"sans-serif\";}
p.MsoListParagraphCxSpFirst, li.MsoListParagraphCxSpFirst, div.MsoListParagraphCxSpFirst
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:18.0pt;
	margin-bottom:.0001pt;
	text-indent:-18.0pt;
	line-height:115%;
	font-size:10.0pt;
	font-family:\"Arial\",\"sans-serif\";}
p.MsoListParagraphCxSpMiddle, li.MsoListParagraphCxSpMiddle, div.MsoListParagraphCxSpMiddle
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:18.0pt;
	margin-bottom:.0001pt;
	text-indent:-18.0pt;
	line-height:115%;
	font-size:10.0pt;
	font-family:\"Arial\",\"sans-serif\";}
p.MsoListParagraphCxSpLast, li.MsoListParagraphCxSpLast, div.MsoListParagraphCxSpLast
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:18.0pt;
	margin-bottom:.0001pt;
	text-indent:-18.0pt;
	line-height:115%;
	font-size:10.0pt;
	font-family:\"Arial\",\"sans-serif\";}
span.Heading1Char
	{mso-style-name:\"Heading 1 Char\";
	mso-style-link:\"Heading 1\";
	font-family:\"Arial\",\"sans-serif\";
	font-weight:bold;}
span.Heading2Char
	{mso-style-name:\"Heading 2 Char\";
	mso-style-link:\"Heading 2\";
	font-family:\"Verdana\",\"sans-serif\";
	font-weight:bold;}
p.Tabbedtextleftandright, li.Tabbedtextleftandright, div.Tabbedtextleftandright
	{mso-style-name:\"Tabbed text left and right\";
	margin:0cm;
	margin-bottom:.0001pt;
	line-height:115%;
	font-size:10.0pt;
	font-family:\"Arial\",\"sans-serif\";}
p.Name, li.Name, div.Name
	{mso-style-name:Name;
	margin:0cm;
	margin-bottom:.0001pt;
	line-height:115%;
	border:none;
	padding:0cm;
	font-size:10.0pt;
	font-family:\"Arial\",\"sans-serif\";
	font-weight:bold;}
p.Contactinfo, li.Contactinfo, div.Contactinfo
	{mso-style-name:\"Contact info\";
	margin:0cm;
	margin-bottom:.0001pt;
	font-size:10.0pt;
	font-family:\"Arial\",\"sans-serif\";}
p.Topborder, li.Topborder, div.Topborder
	{mso-style-name:\"Top border\";
	margin:0cm;
	margin-bottom:.0001pt;
	line-height:115%;
	border:none;
	padding:0cm;
	font-size:10.0pt;
	font-family:\"Arial\",\"sans-serif\";}
.MsoChpDefault
	{font-family:\"Calibri\",\"sans-serif\";}
.MsoPapDefault
	{margin-bottom:10.0pt;
	line-height:115%;}
@page WordSection1
	{size:612.0pt 792.0pt;
	margin:72.0pt 72.0pt 72.0pt 72.0pt;}
div.WordSection1
	{page:WordSection1;}
 /* List Definitions */
 ol
	{margin-bottom:0cm;}
ul
	{margin-bottom:0cm;}
-->
</style>

</head>

<body lang=EN-IN link=blue vlink=purple>

<div class=WordSection1>
";

    if($name != "")
    {
        $cv .= "<p class=MsoNormal><b><span lang=EN-US style='font-size:16.0pt;line-height:
115%'>".$name."</span></b></p>";
    }

    $cv .= "<p class=MsoNormal><span lang=EN-US>&nbsp;</span></p>

<div style='border:none;border-top:solid #26ADE4 3.0pt;padding:1.0pt 0cm 0cm 0cm'>

<p class=Topborder style='border:none;padding:0cm'><span lang=EN-US>&nbsp;</span></p>

</div>

";

    if($address != "")
    {
        $cv .= "<p class=MsoNormal><span lang=EN-US>".$address."</span></p>";
    }

    if($phone != "")
    {
        $cv .= "<p class=MsoNormal><span lang=EN-US>".$phone."</span></p>";
    }

    if($email!="")
    {
        $cv .= "<p class=MsoNormal><span lang=EN-US>".$email."</span></p>
    ";

    }

    $cv .= "<p class=MsoNormal><span lang=EN-US>&nbsp;</span></p>

";

        if(isset($education) && is_array($education))
    {
        $cv .= "<div style='border:none;border-top:solid #26ADE4 3.0pt;padding:10.0pt 0cm 0cm 0cm'>
<h1 style='border:none;padding:0cm'><span lang=EN-US>Education</span></h1><br>
</div>
";

       foreach($education as $key => $text_field)
        {
            $cv .= "<p class=Tabbedtextleftandright><span lang=EN-US>".$text_field."</span></p>
";
        }
        $cv .= "<p class=MsoNormal><span lang=EN-US>&nbsp;</span></p>";
    }
    if(isset($skill) && is_array($skill))
    {
        $cv .= "<div style='border:none;border-top:solid #26ADE4 3.0pt;padding:10.0pt 0cm 0cm 0cm'>

<h1 style='border:none;padding:0cm'><span lang=EN-US>Skills</span></h1><br>

</div>";
 foreach($skill as $key => $text_field)
        {
            $cv .= "<p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt'><span
lang=EN-US style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US>".$text_field."</span></p>
";
        }

        $cv .= "<p class=MsoNormal><span lang=EN-US>&nbsp;</span></p>";
    }


    if(isset($work) && is_array($work) && isset($work_desc) && is_array($work_desc))
    {
        $cv .= "<div style='border:none;border-top:solid #26ADE4 3.0pt;padding:10.0pt 0cm 0cm 0cm'>

<h1 style='border:none;padding:0cm'><span lang=EN-US>Experience</span></h1><br>

</div>
";





        foreach($work as $key => $text_field)
        {
            $cv .= "<p class=Tabbedtextleftandright><span lang=EN-US>".$text_field."</span></p>

<p class=MsoListParagraph><span lang=EN-US style='font-family:Symbol'>·<span
style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US>".$work_desc[$key]."</span></p>

<p class=MsoNormal><span lang=EN-US>&nbsp;</span></p>
";


        }

    }



    if($_POST['rad'] == 'doc')
    {


        $cv .= "</html>";
        $file = fopen($name.".doc","w");
        fwrite($file,$cv);
        fclose($file);

        header("Content-disposition: attachment; filename=".$name.".doc");

        header("Content-type: application/msword");
        readfile($name.".doc");

    }

    if($_POST['rad'] == 'print')
    {
        $cv .= "<script language=\"javascript\" type=\"text/javascript\">
<!--
  //window.print();
//-->
</script>
</html>
";
        echo $cv;
    }

}
?>
