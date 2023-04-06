    <aside class="main-sidebar">
        <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
            <img src="<?=base_url()?>assets\dist\img\user8-128x128.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
            <p>Administrator</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
         
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            
            <!-- menu dashboard -->
            <li class="active">
            <a href="<?=base_url()?>index.php/dashboard">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
            </li>

            <!-- menu anggota -->
            <li><a href="<?=base_url()?>index.php/anggota"><i class="fa fa-user"></i> Data Anggota</a></li>
            
            <!-- menu master buku -->
            <li class="treeview">
            <a href="#">
                <i class="fa fa-desktop"></i>
                <span>Master Buku</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="<?= base_url() ?>index.php/pengarang"><i class="fa fa-circle-o"></i> Pengarang</a></li>
                <li><a href="<?= base_url() ?>index.php/penerbit"><i class="fa fa-circle-o"></i> Penerbit</a></li>
                <li><a href="<?= base_url() ?>index.php/buku"><i class="fa fa-circle-o"></i> Buku</a></li>
            </ul>
            </li>

            <!-- menu transaksi -->
            <li class="treeview">
            <a href="#">
                <i class="fa fa-area-chart"></i>
                <span>Transaksi</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="<?= base_url() ?>index.php/peminjaman"><i class="fa fa-circle-o"></i> Peminjaman</a></li>
                <li><a href="<?= base_url() ?>index.php/pengembalian"><i class="fa fa-circle-o"></i> Pengembalian</a></li>
            </ul>
            </li>

            <!-- menu laporan -->
             <li class="treeview">
                <a href="#">
                    <i class=" fa fa-file-text"></i>
                    <span>Laporan</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
            <ul class="treeview-menu">
                <li><a href="<?= base_url() ?>index.php/laporan/peminjaman"><i class="fa fa-circle-o"></i>Laporan Peminjaman</a></li>
                <li><a href="<?= base_url() ?>index.php/laporan/pengembalian"><i class="fa fa-circle-o"></i>Laporan Pengembalian</a></li>
            </ul>
            </li>

            <hr>
            <!-- logout -->
            <li><a href="<?=base_url()?>index.php/login/logout"><i class="fa fa-sign-out"></i> Logout</a></li>
        </ul>
        </section>
    </aside>