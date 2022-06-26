
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						
			<div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
								<div class="row">
									<div class="col-xs-12">
									</div>
								</div>
							</div>
								<!-- PAGE CONTENT BEGINS -->
								<div class="alert alert-info">
									<button class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>

									<i class="ace-icon fa fa-hand-o-right"></i>
									Selamat Datang Di Menu Laporan Penjualan Minuman Kedai Kopi 11.
								</div>
								<a href="<?php echo site_url('Kasir/Kasir/cetak_laporan_minuman')?>" target="blank" class="btn btn-success">Cetak Laporan</a>
                                <p></p>

                                <table class="table table-bordered">
						         <div class="card-header">
						              <tr class="success">
						            <th colspan="6" style="text-align: center;">Laporan Penjualan Minuman</th>
						              </tr>
						        </div>
						      <th style="text-align:center;">No</th>
						      <th style="text-align:center;">Nama Minuman</th>
						      <th style="text-align:center;">Jumlah</th>
						      <th style="text-align:center;">Harga Minuman</th>
						      <th style="text-align:center;">Subtotal</th>
						  </tr>
						       <?php $no=1; ?>
						       <?php $total=0; ?>
						       <?php foreach($tbl_psn_minuman as $item): ?>
						       <?php $harga=str_replace('.','',$item->harga_jual); ?>
						       <?php $count=$harga ?>
						       <?php $subtotal=$harga ?>
						        <tr>
						        <td align="center"><?php echo $no; ?></td>
						        <td><?php echo $item->nm_minuman ?></td>
						        <td align="center"><?php echo $item->qty ?></td>
						        <td align=" right"><?php echo "Rp.".number_format($item->harga_jual).",-"  ?></td>
						        <td align="right"><?php echo "Rp.".number_format($subtotal*$item->qty).",-"  ?> </td>
						        <?php $total=$total+($subtotal*$item->qty) ?>
						<?php $no++ ?>
						<?php  endforeach; ?>
						<tr><td colspan="4"><p align="right"><i class="fab fa-wolf-pack-battalion"> Total </i></p></td>
							<td align="right"><?php echo "Rp.".number_format($total).",-" ?></td></tr>
					</form>
						</table>


								<table class="table table-bordered">
						         <div class="card-header">
						              <tr class="success">
						            <th colspan="6" style="text-align: center;">Laporan Profit Minuman</th>
						              </tr>
						        </div>
						      <th style="text-align:center;">No</th>
						      <th style="text-align:center;">Nama Minuman</th>
						      <th style="text-align:center;">Jumlah</th>
						      <th style="text-align:center;">Modal</th>
						      <th style="text-align:center;">Harga Jual</th>
						      <th style="text-align:center;">Laba</th>
						  </tr>
						       <?php $no=1; ?>
						       <?php $total=0; ?>
						       <?php foreach($tbl_psn_minuman as $item): ?>
						       <?php $modal=str_replace('.','',$item->modal); ?>
						       <?php $harga=str_replace('.','',$item->harga_jual); ?>
						       <?php $count=$harga-$modal ?>
						       <?php $subtotal=$count ?>
						        <tr>
						        <td align="center"><?php echo $no; ?></td>
						        <td><?php echo $item->nm_minuman ?></td>
						        <td align="center"><?php echo $item->qty ?></td>
						        <td align=" right"><?php echo "Rp.".number_format($item->modal).",-"  ?></td>
						        <td align=" right"><?php echo "Rp.".number_format($item->harga_jual).",-"  ?></td>
						        <td align="right"><?php echo "Rp.".number_format($subtotal*$item->qty).",-"  ?> </td>
						        <?php $total=$total+($subtotal*$item->qty) ?>
						<?php $no++ ?>
						<?php  endforeach; ?>
						<tr><td colspan="5"><p align="right"><i class="fab fa-wolf-pack-battalion"> Total </i></p></td>
							<td align="right"><?php echo "Rp.".number_format($total).",-" ?></td></tr>
					</form>
						</table>


                 
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
				</div><!-- /.main-content -->

				</td></tr></tbody></table>
			</div>
		</div>
	</div>
	