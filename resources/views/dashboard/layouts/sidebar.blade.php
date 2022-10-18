{{-- Menu  --}}

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="/dashboard" class="app-brand-link">
        <span class="app-brand-logo demo">
          
        <span class="app-brand-text demo menu-text fw-bolder ms-2">Simico</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      <li class="menu-item active">
        <a href="/dashboard" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Dashboard</div>
        </a>
      </li>

      <!-- Components -->
      <li class="menu-header small text-uppercase"><span class="menu-header-text">Search</span></li>
      <!-- Cards -->
      <li class="menu-item">
        <a href="/searchodc" class="menu-link">
          <i class="menu-icon tf-icons bx bx-box"></i>
          <div data-i18n="Basic">ODC</div>
        </a>
      </li>

      <li class="menu-item">
        <a href="/searchhistory" class="menu-link">
          <i class="menu-icon tf-icons bx bx-file"></i>
          <div data-i18n="Basic">History</div>
        </a>
      </li>

    <!-- Tables -->
      <li class="menu-header small text-uppercase"><span class="menu-header-text">Validation</span></li>
      
      <li class="menu-item">
        <a href="/postodc" class="menu-link">
          <i class="menu-icon tf-icons bx bx-table"></i>
          <div data-i18n="Tables">Validation ODC</div>
        </a>
      </li>
      <!-- Misc -->
      <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
      <li class="menu-item">
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