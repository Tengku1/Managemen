<li class="nav-item">
    <a class="nav-link text-white   {{ Request::segment(1) == 'hutang' ? 'bg-gradient-primary active' : '' }}"
        href="{{ route('hutang.get') }}">
        <i class="fa fa-user"></i>
        <span class="nav-link-text ms-1">Hutang</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link text-white   {{ Request::segment(1) == 'pembelian-kontan' ? 'bg-gradient-primary active' : '' }}"
        href="{{ route('pembelian.get') }}">
        <i class="fa fa-user"></i>
        <span class="nav-link-text ms-1">Pembelian Kontan</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link text-white   {{ Request::segment(1) == 'rekap-pembayaran' ? 'bg-gradient-primary active' : '' }}"
        href="{{ route('rekap-pembayaran.get') }}">
        <i class="fa fa-user"></i>
        <span class="nav-link-text ms-1">Rekap Pembayaran</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link text-white   {{ Request::segment(1) == 'rekap-pembelian' ? 'bg-gradient-primary active' : '' }}"
        href="{{ route('rekap-pembelian.get') }}">
        <i class="fa fa-user"></i>
        <span class="nav-link-text ms-1">Rekap Pembelian</span>
    </a>
</li>
