<li class="nav-item  {{ Request::segment(1) == 'rekap-pembayaran' ? 'bg-gradient-primary active' : '' }}">
    <a class="nav-link text-white " href="{{ route('rekap-pembayaran.get') }}">
        <i class="fa fa-user"></i>
        <span class="nav-link-text ms-1">Rekap Pembayaran</span>
    </a>
</li>
<li class="nav-item  {{ Request::segment(1) == 'pembelian-dimuka' ? 'bg-gradient-primary active' : '' }}">
    <a class="nav-link text-white " href="{{ route('pembelian-dimuka.get') }}">
        <i class="fa fa-user"></i>
        <span class="nav-link-text ms-1">Pembayaran Dimuka</span>
    </a>
</li>
<li class="nav-item  {{ Request::segment(1) == 'rekap-bank' ? 'bg-gradient-primary active' : '' }}">
    <a class="nav-link text-white " href="{{ route('bank.get') }}">
        <i class="fa fa-user"></i>
        <span class="nav-link-text ms-1">Bank Keluar</span>
    </a>
</li>
