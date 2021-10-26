<li class="nav-item">
    <a class="nav-link text-white   {{ Request::segment(1) == 'pembayaran' ? 'bg-gradient-primary active' : '' }}"
        href="./pages/tables.html">
        <i class="fa fa-user"></i>
        <span class="nav-link-text ms-1">Pembayaran Dimuka</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link text-white   {{ Request::segment(1) == 'bank' ? 'bg-gradient-primary active' : '' }}"
        href="./pages/tables.html">
        <i class="fa fa-user"></i>
        <span class="nav-link-text ms-1">Bank Keluar</span>
    </a>
</li>
