
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
									Selamat Datang Di Menu Makanan Kedai Kopi 11, Silahkan Pilih Makanan Yang Akan Dipesan.
								</div>
                                
                                <p></p>

								<table id="grid-table"></table>

								<div id="grid-pager"></div>

                                    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                                    <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
                                    </a>
                            </div>
                            <!-- /.main-container -->	

                            <?php echo form_open('Admin/Transaksi2/add') ?>
					         <div class="row">
					             <div class="col-md-6">
					               <div class="form-group">
					                    <label for="foto">Nama Makanan</label>
					                    <?php echo cmb_dinamis('id_makanan','tbl_makanan','nm_makanan','id_makanan') ?>
					                 </div>
					             </div>
					         </div>
					         

							<div class="row">
					            <div class="col-md-6">
					               <div class="form-group">
					                    <label for="foto">Jumlah</label>
					                 <input type="number" name="qty" class="form-control">
					                 </div>
					             </div>
					         </div>

					         <div class="row">
					         	 <div class="col-md-6">
					                <div class="form-group">
					                	<div class="text-right">
					                    <button type="submit" name="submit" class="btn btn-success">Proses</button>
					                    <?php echo anchor('Admin/Transaksi2/selesai','Selesai',['class'=>'btn btn-info']) ?>
					                 	</div>
					                 </div>
					             </div>
					           </div>
					         
								<?php echo form_close() ?>
						         <table class="table table-bordered">
						         <div class="card-header">
						              <tr class="success">
						            <th colspan="6"> Detail Transaksi</th>
						              </tr>
						        </div>
						      <th style="text-align:center;">No</th>
						      <th style="text-align:center;">Nama Makanan</th>
						      <th style="text-align:center;">Jumlah</th>
						      <th style="text-align:center;">Harga Makanan</th>
						      <th style="text-align:center;">Subtotal</th>
						      <th style="text-align:center;"> Cancel</th>
						  </tr>
						       <?php $no=1; ?>
						       <?php $total=0; ?>
						       <?php foreach($tbl_psn_makanan as $item): ?>
						       <?php $harga=str_replace('.','',$item->harga_jual); ?>
						       <?php $count=$harga ?>
						       <?php $subtotal=$harga ?>
						        <tr>
						        <td align="center"><?php echo $no; ?></td>
						        <td><?php echo $item->nm_makanan ?></td>
						        <td align="center"><?php echo $item->qty ?></td>
						        <td align=" right"><?php echo "Rp.".number_format($item->harga_jual).",-"  ?></td>
						        <td align="right"><?php echo "Rp.".number_format($subtotal*$item->qty).",-"  ?> </td>
						        <td align="center"><?php echo anchor('Admin/Transaksi2/cancel/'.$item->id_psn_makanan,'Cancel',['class'=>'btn btn-danger']) ?></td></tr>
						        <?php $total=$total+($subtotal*$item->qty) ?>
						<?php $no++ ?>
						<?php  endforeach; ?>
						<tr><td colspan="5"><p align="right"><i class="fab fa-wolf-pack-battalion"> Total </i></p></td><td><?php echo "Rp.".number_format($total).",-" ?></td></tr>

						<tr><td colspan="5"><p align="right"><i class="fab fa-wolf-pack-battalion"> Bayar </i></p></td><td>

							<form action="" method="POST">
							<div class="row">
								<div class="col-md-8">
					                <div class="form-group">
					                	<input type="text" name="jumlahUang">
					                 </div>
					             </div>
					         	 <div class="col-md-4">
					                <div class="form-group">
					                	<div class="text-right">
					                	<button type="submit" name="bayar" value="bayar" class="btn btn-success">Bayar</button>
					                 	</div>
					                 </div>
					             </div>
					           </div>
							<?php $Kembali=0; ?>
							<?php $jumlahUang=0; ?> 
							<?php if(isset($_POST['bayar'])){

								
								$jumlahUang = $_POST['jumlahUang'];
								$Kembali = $jumlahUang - $total;
								}
								?>
							
						</td></tr>
						<tr><td colspan="5"><p align="right"><i class="fab fa-wolf-pack-battalion"> Jumlah Bayar </i></p></td><td>
							<?php echo "Rp.".number_format($jumlahUang).",-" ?></td></tr>
							<tr><td colspan="5"><p align="right"><i class="fab fa-wolf-pack-battalion"> Kembalian </i></p></td><td>
							<?php echo "Rp.".number_format($Kembali).",-" ?></td></tr>
						</td></tr>
					</form>

						</table>

						 <div class="alert alert-info">
									<button class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Daftar Menu Makanan
									<i class="ace-icon fa fa-hand-o-down"></i>
									
								</div>
                                
                                <p></p>
					       

                            <table id="simple-table" class="table  table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="center">No</th>
                                                    <th class="center">Kode</th>
                                                    <th class="center">Nama Makanan</th>
                                                    <th class="center">Harga</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                  <tr>
                                                     <th class="center">No</th>
                                                    <th class="center">Kode</th>
                                                    <th class="center">Nama Makanan</th>
                                                    <th class="center">Harga</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php
                                            $no = 1;
                                            foreach ($tbl_makanan as $makanan) {
                                            ?>
                                            <tr>
                                                <td class="center"><?php echo $no++ ?></td>
                                                <td><?php echo $makanan->kd_makanan ?></td>
                                                <td><?php echo $makanan->nm_makanan ?></td>
                                                <td align="Right">Rp.<?php echo number_format($makanan->harga_jual,0,',','.')?></td>


                                             <?php } ?>   
                                            </tbody>
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
	