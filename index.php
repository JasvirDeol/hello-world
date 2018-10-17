
<?php
include"connection.php";
$title="Panjab Writers and Cultural Forum";
$q="select * from gallery_records where pic_source!='0' order by album_id desc";
$res2=mysqli_query($con,$q);

?>
<?php include"header.php"?>
<center><div style=" width:100% ;" >
<?php include"menu.html"?></div></center>

<table align="center" width=100% border="0"  >                                                       <!--Container  TABLE-->
	<tr>
		<td colspan="3" ><?php include"header1.php"?></td></tr>
	<tr height=250px >
		<td width="30%" align=center valign="center" rowspan=2 >
			<table style="background-color:rgba(113,230,248,0.3);border-radius:15px; width:95%; height:100% ">                    <!--NOTICE TABLE-->
				<tr><td align=center >
					<img src="notice.gif" width=150 height=30><br />
					
					<font color="white">
						<marquee  direction=up onmouseover=stop() onmouseout=start() height=490px >
					<?php
						$res=mysqli_query($con,"select * from notice order by notice_id desc");
						while($column=mysqli_fetch_array($res))
						echo "<br><h3><b>$column[1]</b></h3><h4>$column[2]</h4><hr style='border-top:dashed 1px' >";
					?>
								</marquee></font><br />
						<a href='noticeall.php'><font color="white">View all Notices</font></a>
					
</td>
</tr>
</table>
</td>
<td width=40% valign="top" align=center height=200px > 
                                                                                              <!--How we came into existence TABLE-->
<table  style="background-color:rgba(113,230,248,0.3);border-radius:15px;" height="100%" ><tr><td><img src="m.jpg" align="left" hspace="10" style="border-radius:5px;" ><font color="#FFFFFF" ><u><h3>HOW WE CAME INTO EXITSTANCE</h3></u>
  <font size="3">It is terrifying to remember the dark period during the laast decades of the 20th century , when the people of punjab were forced to lead their lives in a constant fear of death and bloodshed. It was this time when a group of friends including myself, Jigar Jallandhari renowned Urdu poet and shiromani sahitkar , Dr. Madan Lal Hasiza then the director of Laguages deptt. of Punjab and Jagjit Singh Dardi , chief editor of Chardhikala decided to provide a platform for propagation of message of love through literature, art and culture to counter separatist movement and to imbibe a feeling of brotherhood................</font><a id="his1" href="history.php"><img src='readmore.gif' width=130 height=60 align='right' /></a></font></td></tr></table></td>
<td width="30%" align=center valign="center" >                                                              <!--Feedback TABLE-->

<table style="background-color:rgba(113,230,248,0.3);border-radius:15px; height: 270px" width="95%">
	<tr><td align=center valign=top style="height: 100%">
		<img src="feedback.gif" width=200 height=30>
		<font color="white">
		<div style=" height: 290px">
			<marquee direction=up onmouseover=stop() onmouseout=start() height=265px >
<?php
$res1=mysqli_query($con,"select * from feedback where active=1 order by feedback_id desc");
while($column1=mysqli_fetch_array($res1))
echo "<br><h3><b>$column1[1]</b></h3><h4>$column1[2]</h4><hr style='border-top:dashed 1px' >";
?>
			</marquee></div>
			<br />
			
		
		</font>
</td>
</tr>
</table>

</td>
</tr>
<tr><td  height="200px">
                                                                                             <!--Objectives TABLE-->
<table  style="background-color:rgba(113,230,248,0.3);border-radius:15px;" height="100%" ><tr><td><img src="objectives.png" align="left" hspace="10" width=150 height=150 ><font color="#FFFFFF" ><u><h3  align="center">OBJECTIVES OF THE FORUM</h3></u> The main object of the society is to spread the message of brotherhood and Global Development of Punjabiat through its Culture,Art,Heritage,Religion,Traditions and Language.The forum  tries to achieve these..<a id="his1" href="objectives.php"><img src='readmore.gif' width=130 height=60 align='right' /></a></font> </td></tr></table></td><td  height="200px">
                                                            <!--Gallery TABLE-->
<table style="background-color:rgba(113,230,248,0.3);border-radius:15px;" height="100%" width="95%" align="center"><tr><th><font color="#FFFFFF" >PHOTO GALLERY</font><hr /></th></tr><tr><td>
<a href="gallery.php">
<marquee onmouseover=stop() onmouseout=start() >
<?php
while($column2=mysqli_fetch_array($res2))
echo"<img src='$column2[1]' width=100 height=100 hspace=5 >"; ?>
</marquee>
</td></tr></table>
</a>
</td></tr>
</table>
<?php include"footer1.php"?>
