<body onload="javascript:window.print()" style="marging auto; width:100%;">
<div style="margin-left: 10px; margin-right: 10px;"></div>

<table width="100%" cellpadding="0" cellspacing="0">
	
	<tr align="center">
		<td rowspan="3"><img src="<?php echo base_url().'assets/images/icon/kedaikopi11.png' ?> " width="150" height="100"></td>
		<td><font size="6">KEDAI KOPI 11</font></td>
	</tr>
	<tr align="center">
		<td><font size="3"></font></td>
	</tr>
	<tr align="center">
		<td><font size="3">Jalan Raya Belawa Nomor 11, Kecamatan Lemahabang Kabupaten Cirebon<br>
			Telepon : 081223343937 ~ E-Mail : ahmadnursyifa11.04.an@gmail.com</font>
		</td>
	</tr>
</table>
<hr><br>

<font size="5"><center><u>Laporan Penjualan Makanan</u></center></font>

<p></p>

 							<table align="center" width="90%" cellspacing="0" cellpadding="0">
						     <tr bgcolor="lightgray">
						      <th style="border-left: 1px solid #000; border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;">No</th>
						      <th style="border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;">Nama Makanan</th>
						      <th style="border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;">Jumlah</th>
						      <th style="border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;">Harga Makanan</th>
						      <th style="border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;">Subtotal</th>
						  </tr>
						       <?php $no=1; ?>
						       <?php $total=0; ?>
						       <?php foreach($tbl_psn_makanan as $item): ?>
						       <?php $harga=str_replace('.','',$item->harga_jual); ?>
						       <?php $count=$harga ?>
						       <?php $subtotal=$harga ?>
						        <tr>
						        <td align="center"  style="border-left: 1px solid #000; border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"><?php echo $no; ?></td>
						        <td  style="border-left: 1px solid #000; border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"><?php echo $item->nm_makanan ?></td>
						        <td align="center"  style="border-left: 1px solid #000; border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"><?php echo $item->qty ?></td>
						        <td align=" right"  style="border-left: 1px solid #000; border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"><?php echo "Rp.".number_format($item->harga_jual).",-"  ?></td>
						        <td align="right"  style="border-left: 1px solid #000; border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"><?php echo "Rp.".number_format($subtotal*$item->qty).",-"  ?> </td>
						        <?php $total=$total+($subtotal*$item->qty) ?>
						<?php $no++ ?>
						<?php  endforeach; ?>
						<tr><td colspan="4"><p align="right"  style="border-left: 1px solid #000; border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"><i class="fab fa-wolf-pack-battalion"> Total </i></p></td>
							<td align="right"  style="border-left: 1px solid #000; border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"><?php echo "Rp.".number_format($total).",-" ?></td></tr>
					</form>
						</table>

						<p>&nbsp;</p>

						<font size="5"><center><u>Laporan Profit Makanan</u></center></font>

						<p></p>

 							<table align="center" width="90%" cellspacing="0" cellpadding="0">
						    <tr bgcolor="lightgray">
						      <th style="border-left: 1px solid #000; border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;">No</th>
						      <th style="border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;">Nama makanan</th>
						      <th style="border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;">Jumlah</th>
						      <th style="border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;">Modal</th>
						      <th style="border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;">Harga Jual</th>
						      <th style="border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;">Laba</th>
						 	</tr>

						       <?php $no=1; ?>
						       <?php $total=0; ?>
						       <?php foreach($tbl_psn_makanan as $item): ?>
						       <?php $modal=str_replace('.','',$item->modal); ?>
						       <?php $harga=str_replace('.','',$item->harga_jual); ?>
						       <?php $count=$harga-$modal ?>
						       <?php $subtotal=$count ?>
						        <tr>
						        <td align="center" style="border-left: 1px solid #000; border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"><?php echo $no; ?></td>
						        <td style="border-left: 1px solid #000; border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"><?php echo $item->nm_makanan ?></td>
						        <td align="center" style="border-left: 1px solid #000; border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"><?php echo $item->qty ?></td>
						        <td align=" right" style="border-left: 1px solid #000; border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"><?php echo "Rp.".number_format($item->modal).",-"  ?></td>
						        <td align=" right" style="border-left: 1px solid #000; border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"><?php echo "Rp.".number_format($item->harga_jual).",-"  ?></td>
						        <td align="right" style="border-left: 1px solid #000; border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"><?php echo "Rp.".number_format($subtotal*$item->qty).",-"  ?> </td>
						        <?php $total=$total+($subtotal*$item->qty) ?>
						<?php $no++ ?>
						<?php  endforeach; ?>
						<tr><td colspan="5"><p align="right" style="border-left: 1px solid #000; border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"><i class="fab fa-wolf-pack-battalion"> Total </i></p></td>
							<td align="right" style="border-left: 1px solid #000; border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"><?php echo "Rp.".number_format($total).",-" ?></td></tr>
					</form>
						</table>



</body>