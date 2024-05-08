	<!-- Sidebar Tampilan Menu Mobile -->
	<input type="checkbox" id="check">
	<div class="sidebar">
	    <ul>
	        <li><a href="<?php echo base_url('welcome')?>">Beranda</a></li>
	        <li><a href=" <?php echo base_url().'welcome/agenda'?>">Agenda</a></li>
	        <li class="nav-item dropdown">
	            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
	                aria-expanded="true">
	                Laporan
	            </a>
	            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
	                <li><a href="<?php echo base_url().'welcome/infaq'?>">Infaq</a></li>
	                <li><a href="<?php echo base_url().'welcome/cashjumat'?>">Keuangan Jum'at</a></li>
	                <li><a href="<?php echo base_url().'welcome/pengeluaran'?>">Pengeluaran</a></li>
	            </ul>
	        </li>
	        </li>
	        <li class="nav-item dropdown">
	            <a class="nav-link dropdown-toggle" id="navbarDropdown" data-bs-toggle="dropdown">
	                Lainnya
	            </a>
	            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
	                <li><a href="<?php echo base_url().'welcome/inventarisir'?>">Inventarisir</a></li>
	                <li><a href="<?php echo base_url().'welcome/perpustakaan'?>">Perpustakaan</a></li>
	            </ul>
	        </li>
	        <li><a href="<?php echo base_url().'logincontrol/index' ?>">Sign Admin</a></li>
	    </ul>
	</div>

	<!-- Bagian Header Tampilan Web-->
	<header>
	    <div class="container">
	        <h1><a href="<?php echo base_url('welcome')?>">MasjidKu</a></h1>
	        <img src="<?php echo base_url('img/logo.png')?>">
	        <ul>
	            <li><a href="<?php echo base_url('welcome')?>">Beranda</a></li>
	            <li><a href=" <?php echo base_url().'welcome/agenda'?>">Agenda</a></li>
	            <li class="nav-item dropdown">
	                <a class="nav-link dropdown-toggle" id="navbarDropdown" data-bs-toggle="dropdown">
	                    Laporan
	                </a>
	                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
	                    <li><a href="<?php echo base_url().'welcome/infaq'?>">Infaq</a></li>
	                    <li><a href="<?php echo base_url().'welcome/cashjumat'?>">Keuangan Jum'at</a></li>
	                    <li><a href="<?php echo base_url().'welcome/pengeluaran'?>">Pengeluaran</a></li>
	                </ul>
	            </li>
	            <li class="nav-item dropdown">
	                <a class="nav-link dropdown-toggle" id="navbarDropdown" data-bs-toggle="dropdown">
	                    Lainnya
	                </a>
	                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
	                    <li><a href="<?php echo base_url().'welcome/inventarisir'?>">Inventarisir</a></li>
	                    <li><a href="<?php echo base_url().'welcome/perpustakaan'?>">Perpustakaan</a></li>
	                </ul>
	            </li>
	            <li><a href="<?php echo base_url().'logincontrol/index' ?>">Sign Admin</a></li>
	        </ul>

	        <!-- menu mobile -->
	        <label for="check" class="mobile-menu"><i class="fas fa-bars fa-2x"></i></label>
	    </div>
	</header>