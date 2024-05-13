<nav class="w-100 d-flex px-4 py-2 mb-4 ">
    <!-- close sidebar -->
    <button class="btn py-0 d-lg-none" id="open-sidebar">
        <span class="bi bi-list text-primary h3"></span>
    </button>
    <!--
    <div class="btn-group ms-auto">
        <button type="button" class="btn rounded" data-bs-toggle="dropdown" aria-expanded="true">
            {{ Auth::user()->name }}
            <span class="bi bi-person text-primary h4"></span>
            <span class="bi bi-chevron-down ml-1 mb-2 small"></span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end">

            <li>
                <button class="dropdown-item" type="button">
                    {{ __('Profile') }}
                </button>
            </li>
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.fault();document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>

        </ul>
    </div>
-->
</nav>