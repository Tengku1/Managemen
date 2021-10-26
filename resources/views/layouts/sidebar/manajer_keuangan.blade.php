<li class="nav-item  {{ Request::segment(1) == 'rekap-pembayaran' ? 'bg-gradient-primary active' : '' }}">
    <a class="nav-link text-white " href="./pages/tables.html">
        <i class="fa fa-user"></i>
        <span class="nav-link-text ms-1">Rekap Pembayaran</span>
    </a>
</li>
<li class="nav-item  {{ Request::segment(1) == 'pembayaran' ? 'bg-gradient-primary active' : '' }}">
    <a class="nav-link text-white " href="./pages/tables.html">
        <i class="fa fa-user"></i>
        <span class="nav-link-text ms-1">Pembayaran Dimuka</span>
    </a>
</li>
<li class="nav-item  {{ Request::segment(1) == 'bank' ? 'bg-gradient-primary active' : '' }}">
    <a class="nav-link text-white " href="./pages/tables.html">
        <i class="fa fa-user"></i>
        <span class="nav-link-text ms-1">Bank Keluar</span>
    </a>
</li>
