<li class="nav-item  {{ Request::segment(1) == 'tanda-terima' ? 'bg-gradient-primary active' : '' }}">
    <a class="nav-link text-white " href="./pages/tables.html">
        <i class="fa fa-user"></i>
        <span class="nav-link-text ms-1">Tanda Terima Penagihan</span>
    </a>
</li>
<li class="nav-item  {{ Request::segment(1) == 'informasi-pembayaran' ? 'bg-gradient-primary active' : '' }}">
    <a class="nav-link text-white " href="./pages/tables.html">
        <i class="fa fa-user"></i>
        <span class="nav-link-text ms-1">Informasi Pembayaran</span>
    </a>
</li>
