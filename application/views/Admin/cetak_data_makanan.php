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

<font size="5"><center><u>Daftar Makanan</u></center></font>

<p></p>

                                        <table align="center" width="90%" cellspacing="0" cellpadding="0">
                                            <thead>
                                                <tr bgcolor="lightgray">
                                                    <th style="border-left: 1px solid #000; border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;">No</th>
                                                    <th style="border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;">Kode</th>
                                                    <th style="border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;">Nama Makanan</th>
                                                    <th style="border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;">Modal</th>
                                                    <th style="border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;">Harga Jual</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                <?php
                                            $no = 1;
                                            foreach ($tbl_makanan as $makanan) {
                                            ?>
                                            <tr>
                                                <td align="center" style="border-left: 1px solid #000; border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"><?php echo $no++ ?></td>
                                                <td  style="border-left: 1px solid #000; border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"><?php echo $makanan->kd_makanan ?></td>
                                                <td  style="border-left: 1px solid #000; border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;"><?php echo $makanan->nm_makanan ?></td>
                                                <td align="Right"  style="border-left: 1px solid #000; border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;">Rp.<?php echo number_format($makanan->modal,0,',','.')?></td>
                                                <td align="Right"  style="border-left: 1px solid #000; border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;">Rp.<?php echo number_format($makanan->harga_jual,0,',','.')?></td>
                                             <?php } ?>   
                                            </tbody>
                                        </table>
</body>