<!-- Side Nav START -->
<div class="side-nav">
    <div class="side-nav-inner">
        <ul class="side-nav-menu scrollable">
            <li class="nav-item">
                <a href="<?= base_url('/') ?>">
                    <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-appstore"></i>
                    </span>
                    <span class="title">Master</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?= base_url('/master-poli/poli') ?>">Poli</a>
                    </li>
                    <li>
                        <a href="<?= base_url('/master-poli/dokter') ?>">Dokter</a>
                    </li>
                    <li>
                        <a href="<?= base_url('/master-poli/tindakan') ?>">Tindakan</a>
                    </li>
                    <li>
                        <a href="<?= base_url('/master-poli/obat') ?>">Obat</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('/tindakan') ?>">
                    <span class="icon-holder">
                        <i class="anticon anticon-medicine-box"></i>
                    </span>
                    <span class="title">Tindakan</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('/riwayat') ?>">
                    <span class="icon-holder">
                        <i class="anticon anticon-folder-open"></i>
                    </span>
                    <span class="title">Riwayat</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('/pasien') ?>">
                    <span class="icon-holder">
                        <i class="anticon anticon-team"></i>
                    </span>
                    <span class="title">Pasien</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-wallet"></i>
                    </span>
                    <span class="title">Keuangan</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?= base_url('/keuangan/pendapatan') ?>">Pendapatan</a>
                    </li>
                    <li>
                        <a href="<?= base_url('/keuangan/pengeluaran') ?>">Pengeluaran</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- Side Nav END -->