 <body class="no-skin">
        <div class="main-container ace-save-state" id="main-container">
            <script type="text/javascript">
                try{ace.settings.loadState('main-container')}catch(e){}
            </script>

            <div id="sidebar" class="sidebar responsive ace-save-state">
                <script type="text/javascript">
                    try{ace.settings.loadState('sidebar')}catch(e){}
                </script>

                <ul class="nav nav-list">
                    <li class="active">
                        <a href="<?php echo base_url('Admin/Admin/index')?>">
                            <i class="menu-icon fa fa-tachometer"></i>
                            <span class="menu-text"> Dashboard </span>
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-list"></i>
                            <span class="menu-text"> Menu </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="<?php echo site_url('Admin/Transaksi') ?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Minuman
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="<?php echo site_url('Admin/Transaksi2') ?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Makanan
                                </a>

                                <b class="arrow"></b>
                            </li>
                            
                        </ul>
                    </li>

                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-pencil-square-o"></i>
                            <span class="menu-text"> Database </span>
                            <b class="arrow fa fa-angle-down"></b>
                        </a>
                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="<?php echo base_url('Admin/Admin/data_minuman') ?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Data Tabel Minuman
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="<?php echo base_url('Admin/Admin/data_makanan') ?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Data Tabel Makanan
                                </a>

                                <b class="arrow"></b>
                            </li>

                        </ul>
                    </li>

                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-bullhorn"></i>
                            <span class="menu-text"> Laporan Penjualan </span>
                            <b class="arrow fa fa-angle-down"></b>
                        </a>
                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="<?php echo site_url('Admin/Admin/laporan_minuman') ?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Laporan Penjualan Minuman
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="<?php echo site_url('Admin/Admin/laporan_makanan') ?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Laporan Penjualan Makanan
                                </a>

                                <b class="arrow"></b>
                            </li>

                        </ul>
                    </li>

                    

                    <li class="">
                        <a href="<?= base_url('Admin/Admin/gallery')?>">
                            <i class="menu-icon fa fa-picture-o"></i>
                            <span class="menu-text"> Gallery </span>
                        </a>

                        <b class="arrow"></b>
                    </li>

                </ul><!-- /.nav-list -->