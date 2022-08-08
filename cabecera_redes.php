<?php
function hacer_cabecera()
{
	$cabecera="<header>
				<table border= '5' bordercolor='blue' cellpadding='' cellspacing='' width='100%' height='80' align='center' valign='center' >
					<tr height='10%' width='50'>
						<td  align='center' style='background-color: tranparent'><img src='logo_1.jpg' width='40%' ></td>
						<td width='12.5%' align='center' valign='middle' style='background-color: #58adc9 '><a href='https://www.facebook.com/FloresColombianas/'><img src='facebook_icon.jpg' width='20%' height=''></a></td>
						<td width='12.5%' align='center' valign='middle' style='background-color: #d43bc4'><a href='https://www.instagram.com/explore/tags/rosascolombianas/'><img src='instagram_icon.jpg' width='20%' height=''></a></td>
					</tr>
				</table>		
				</header>";
	echo $cabecera;
}
?>