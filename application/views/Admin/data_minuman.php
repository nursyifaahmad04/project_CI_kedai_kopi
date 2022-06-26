
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
									Selamat Datang Di Form Data Minuman Kedai Kopi 11, Silahkan Kelola Data Ini Dengan Bijak.
								</div>
                                <a href="<?php echo base_url().'index.php/Admin/Admin/data_minuman_input'?>" class="btn btn-primary">Tambahkan Data Minuman</a>
                                <a href="<?php echo site_url('Admin/Admin/cetak_data_minuman')?>" target="blank" class="btn btn-success">Cetak Data Minuman</a>
                                <p></p>

								<table id="grid-table"></table>

								<div id="grid-pager"></div>

                                    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                                    <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
                                    </a>
                            </div><!-- /.main-container -->

                  <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <div class="row">
                                    <div class="col-xs-12">
                                        <table id="simple-table" class="table  table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="center">No</th>
                                                    <th class="center">Kode</th>
                                                    <th class="center">Nama Minuman</th>
                                                    <th class="center">Modal</th>
                                                    <th class="center">Harga Jual</th>
                                                    <th class="center">Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                  <tr>
                                                     <th class="center">No</th>
                                                    <th class="center">Kode</th>
                                                    <th class="center">Nama Minuman</th>
                                                    <th class="center">Modal</th>
                                                    <th class="center">Harga Jual</th>
                                                    <th class="center">Action</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php
                                            $no = 1;
                                            foreach ($tbl_minuman as $minuman) {
                                            ?>
                                            <tr>
                                                <td class="center"><?php echo $no++ ?></td>
                                                <td><?php echo $minuman->kd_minuman ?></td>
                                                <td><?php echo $minuman->nm_minuman ?></td>
                                                <td align="Right">Rp.<?php echo number_format($minuman->modal,0,',','.')?></td>
                                                <td align="Right">Rp.<?php echo number_format($minuman->harga_jual,0,',','.')?></td>

                                                    <td class="center">
                                                        <div class="btn-group">
                                                            
                                                            <a href="<?php echo base_url().'index.php/Admin/Admin/data_minuman_edit/'.$minuman->id_minuman.''?>"  class="btn btn-xs btn-info" >
                                                                <i class="ace-icon fa fa-pencil bigger-120"></i>
                                                            </a>

                                                            <a href="<?php echo base_url().'index.php/Admin/Admin/data_minuman_delete/'.$minuman->id_minuman.''?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini ?')">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </a>
                                                    </td>

                                             <?php } ?>   
                                            </tbody>
                                        </table>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
				</div><!-- /.main-content -->

				</td></tr></tbody></table>
			</div>
		</div>
	</div>
	