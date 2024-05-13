<div class="col-md-3 col-lg-2 px-0 position-fixed h-100 bg-white shadow-sm sidebar" id="sidebar">
    <x-dashboard.icon />

    <div class="list-group rounded-0">

        <x-dashboard.sidebar-link :active="request()->routeIs('home')" :href="route('home')" :icon="'bi-house'">
            Dashboard
        </x-dashboard.sidebar-link>

        <x-dashboard.sidebar-link :active="request()->routeIs('store')" :href="route('store')" :icon="'bi-shop'">
            Tienda
        </x-dashboard.sidebar-link>

        <x-dashboard.sidebar-link :active="request()->routeIs('categorias.index')" :href="route('categorias.index')" :icon="'bi-bar-chart-steps'">
            Categorias
        </x-dashboard.sidebar-link>

        <!--<a href="{{ route('categorias.index')}} " class="list-group-item list-group-item-action border-0 align-items-center {{Request::is('categorias') ? 'active':''}}">
            <span class="bi bi-box"></span>
            <span class="ms-2">Categorias</span>
        </a>
        
            <a  class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#sale-collapse">
                <div>
                    <span class="bi bi-cart-dash"></span>
                    <span class="ms-2">Categorias</span>
                </div>
                <span class="bi bi-chevron-down small"></span>
            </a>
            <div class="collapse" id="sale-collapse" data-parent="#sidebar">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action border-0 pl-5">Customers</a>
                    <a href="#" class="list-group-item list-group-item-action border-0 pl-5">Sale Orders</a>
                </div>
            </div>

            <button class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#purchase-collapse">
                <div>
                    <span class="bi bi-cart-plus"></span>
                    <span class="ms-2">Purchase</span>
                </div>
                <span class="bi bi-chevron-down small"></span>
            </button>
            <div class="collapse" id="purchase-collapse" data-parent="#sidebar">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action border-0 pl-5">Sellers</a>
                    <a href="#" class="list-group-item list-group-item-action border-0 pl-5">Purchase Orders</a>
                </div>
            </div>
        -->
    </div>
</div>