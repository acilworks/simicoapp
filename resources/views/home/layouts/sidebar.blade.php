{{-- Menu  --}}

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="/home" class="app-brand-link">
        <span class="app-brand-logo demo">
          
        <span class="app-brand-text demo menu-text fw-bolder ms-2">Simico</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Home -->
      <li class="menu-item {{ Request::is('home*') ? 'active' : '' }}">
        <a href="/home" class="menu-link">
          <i class="menu-icon tf-icons bx bx-sun"></i>
          <div data-i18n="Analytics">Home</div>
        </a>
      </li>

      <!-- Data -->
      <li class="menu-header small text-uppercase"><span class="menu-header-text">Data</span></li>
      <!-- Cards -->
      <li class="menu-item {{ Request::is('odcmain*') ? 'active' : '' }}">
        <a href="/odcmain" class="menu-link">
          <i class="menu-icon tf-icons bx bx-box"></i>
          <div data-i18n="Basic">ODC Main</div>
        </a>
      </li>

      <li class="menu-item {{ Request::is('portmain*') ? 'active' : '' }}">
        <a href="/portmain" class="menu-link">
          <i class="menu-icon tf-icons bx bx-analyse"></i>
          <div data-i18n="Basic">Port Main</div>
        </a>
      </li>

    <!-- Search -->
    <li class="menu-header small text-uppercase"><span class="menu-header-text">Search</span></li>
    <!-- Cards -->
    <li class="menu-item {{ Request::is('searchodc*') ? 'active' : '' }}">
      <a href="/searchodc" class="menu-link">
        <i class="menu-icon tf-icons bx bx-directions"></i>
        <div data-i18n="Basic">Maincore ODC</div>
      </a>
    </li>

    <li class="menu-item {{ Request::is('searchhistory') ? 'active' : '' }}">
      <a href="/searchhistory" class="menu-link">
        <i class="menu-icon tf-icons bx bx-rotate-left"></i>
        <div data-i18n="Basic">History</div>
      </a>
    </li>

    <!-- Misc -->
      <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
      <li class="menu-item {{ Request::is('support') ? 'active' : '' }}">
        <a
          href="/support"
          class="menu-link"
        >
          <i class="menu-icon tf-icons bx bx-support"></i>
          <div data-i18n="Support">Support</div>
        </a>
      </li>
      
    </ul>
  </aside>

  {{-- End Menu --}}