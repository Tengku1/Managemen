<li class="nav-item">
    <a class="nav-link text-white   {{ Request::segment(1) == 'pembelian-dimuka' ? 'bg-gradient-primary active' : '' }}"
        href="{{ route('pembelian-dimuka.get') }}">
        <i class="fa fa-user"></i>
        <span class="nav-link-text ms-1">Pembelian Dimuka</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link text-white   {{ Request::segment(1) == 'rekap-bank' ? 'bg-gradient-primary active' : '' }}"
        href="{{ route('bank.get') }}">
        <i class="fa fa-user"></i>
        <span class="nav-link-text ms-1">Bank Keluar</span>
    </a>
</li>
