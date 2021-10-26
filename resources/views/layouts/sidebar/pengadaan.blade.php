<li class="nav-item">
    <a class="nav-link text-white  {{ Request::segment(1) == 'purchase-order' ? 'bg-gradient-primary active' : '' }}"
        href="{{ route('order.get') }}">
        <i class="fa fa-bill"></i>
        <span class="nav-link-text ms-1">Purchase Order</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link text-white  {{ Request::segment(1) == 'penerimaan-barang' ? 'bg-gradient-primary active' : '' }}"
        href="{{ route('penerimaan.get') }}">
        <i class="fa fa-user"></i>
        <span class="nav-link-text ms-1">Penerimaan Barang</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link text-white  {{ Request::segment(1) == 'faktur' ? 'bg-gradient-primary active' : '' }}"
        href="{{ route('faktur.get') }}">
        <i class="fa fa-user"></i>
        <span class="nav-link-text ms-1">Faktur</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link text-white  {{ Request::segment(1) == 'kasbon' ? 'bg-gradient-primary active' : '' }}"
        href="{{ route('kasbon.get') }}">
        <i class="fa fa-user"></i>
        <span class="nav-link-text ms-1">Kasbon</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link text-white  {{ Request::segment(1) == 'penagihan' ? 'bg-gradient-primary active' : '' }}"
        href="{{ route('penagihan.get') }}">
        <i class="fa fa-user"></i>
        <span class="nav-link-text ms-1">Tanda Terima Penagihan</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link text-white  {{ Request::segment(1) == 'rekap-pembelian' ? 'bg-gradient-primary active' : '' }}"
        href="{{ route('rekap-pembelian.get') }}">
        <i class="fa fa-user"></i>
        <span class="nav-link-text ms-1">Rekap Pembelian</span>
    </a>
</li>
