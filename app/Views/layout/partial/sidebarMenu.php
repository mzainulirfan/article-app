  <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
      <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
        <use xlink:href="<?= base_url(); ?>coreUi/assets/brand/coreui.svg#full"></use>
      </svg>
      <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
        <use xlink:href="<?= base_url(); ?>coreUi/assets/brand/coreui.svg#signet"></use>
      </svg>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
      <li class="nav-item"><a class="nav-link" href="index.html">
          <svg class="nav-icon">
            <use xlink:href="<?= base_url(); ?>coreUi/assets/@coreui/icons/sprites/free.svg#cil-speedometer"></use>
          </svg> Dashboard</a></li>
      <li class="nav-title">Articles</li>
      <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>articles">
          <svg class="nav-icon">
            <use xlink:href="<?= base_url(); ?>coreUi/assets/@coreui/icons/sprites/free.svg#cil-drop"></use>
          </svg> All article</a></li>
      <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>articles/new">
          <svg class="nav-icon">
            <use xlink:href="<?= base_url(); ?>coreUi/assets/@coreui/icons/sprites/free.svg#cil-pencil"></use>
          </svg> Create</a></li>
    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
  </div>