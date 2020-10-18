<template>
  <Fragment>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav
        class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row"
      >
        <div
          class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center"
        >
          <a class="navbar-brand brand-logo" href="index.html"
            ><img src="assets/images/logo.svg" alt="logo"
          /></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"
            ><img src="assets/images/logo-mini.svg" alt="logo"
          /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button
            class="navbar-toggler navbar-toggler align-self-center"
            type="button"
            data-toggle="minimize"
          >
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input
                  type="text"
                  class="form-control bg-transparent border-0"
                  placeholder="Search projects"
                />
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a
                class="nav-link dropdown-toggle"
                id="profileDropdown"
                href="#"
                data-toggle="dropdown"
                aria-expanded="false"
              >
                <div class="nav-profile-img">
                  <img src="assets/images/faces/face1.jpg" alt="image" />
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">David Greymaax</p>
                </div>
              </a>
              <div
                class="dropdown-menu navbar-dropdown"
                aria-labelledby="profileDropdown"
              >
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-logout mr-2 text-primary"></i> Signout
                </a>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
            <li class="nav-item nav-settings d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-format-line-spacing"></i>
              </a>
            </li>
          </ul>
          <button
            class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
            type="button"
            data-toggle="offcanvas"
          >
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="assets/images/faces/face1.jpg" alt="profile" />
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">David Grey. H</span>
                  <span class="text-secondary text-small">Project Manager</span>
                </div>
                <i
                  class="mdi mdi-bookmark-check text-success nav-profile-badge"
                ></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link">
                <router-link
                  class="sidebar-link"
                  to="/"
                  aria-expanded="false"
                  ><i class="mdi mdi-home menu-icon"></i
                  ><span class="menu-title">Dashboard</span></router-link
                >
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link">
                <router-link
                  class="sidebar-link"
                  to="/Jurnal"
                  aria-expanded="false"
                  ><i class="mdi mdi-home menu-icon"></i
                  ><span class="menu-title">Jurnal</span></router-link
                >
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link">
                <router-link
                  class="sidebar-link"
                  to="/LPK"
                  aria-expanded="false"
                  ><i class="mdi mdi-home menu-icon"></i
                  ><span class="menu-title">Neraca</span></router-link
                >
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link">
                <router-link
                  class="sidebar-link"
                  to="/Aktivitas"
                  aria-expanded="false"
                  ><i class="mdi mdi-home menu-icon"></i
                  ><span class="menu-title">Aktivitas</span></router-link
                >
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link">
                <router-link
                  class="sidebar-link"
                  to="/ArusKas"
                  aria-expanded="false"
                  ><i class="mdi mdi-home menu-icon"></i
                  ><span class="menu-title">Arus Kas</span></router-link
                >
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link">
                <router-link
                  class="sidebar-link"
                  to="/LPDana"
                  aria-expanded="false"
                  ><i class="mdi mdi-home menu-icon"></i
                  ><span class="menu-title">LPD</span></router-link
                >
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link">
                <router-link
                  class="sidebar-link"
                  to="/PAK"
                  aria-expanded="false"
                  ><i class="mdi mdi-home menu-icon"></i
                  ><span class="menu-title">PAK</span></router-link
                >
              </a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                data-toggle="collapse"
                href="#ui-basic"
                aria-expanded="false"
                aria-controls="ui-basic"
              >
                <span class="menu-title">Basic UI Elements</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/buttons.html"
                      >Buttons</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/typography.html"
                      >Typography</a
                    >
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                data-toggle="collapse"
                href="#general-pages"
                aria-expanded="false"
                aria-controls="general-pages"
              >
                <span class="menu-title">Sample Pages</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-medical-bag menu-icon"></i>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/blank-page.html">
                      Blank Page
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/login.html">
                      Login
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/register.html">
                      Register
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/error-404.html">
                      404
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/error-500.html">
                      500
                    </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                  <p>
                    Get tons of UI components, Plugins, multiple layouts, 20+
                    sample pages, and more!
                  </p>
                  <a
                    href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template?utm_source=organic&utm_medium=banner&utm_campaign=free-preview"
                    target="_blank"
                    class="btn download-button purchase-button ml-auto"
                    >Upgrade To Pro</a
                  >
                  <i class="mdi mdi-close" id="bannerClose"></i>
                </span>
              </div>
            </div>
            <div class="page-header">
              <h3 class="page-title">
                <span
                  class="page-title-icon bg-gradient-primary text-white mr-2"
                >
                  <i class="mdi mdi-home"></i>
                </span>
                Dashboard
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview
                    <i
                      class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"
                    ></i>
                  </li>
                </ul>
              </nav>
            </div>
            <router-view></router-view>
          </div>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
  </Fragment>
</template>

<script>
import { Fragment } from "vue-fragment";
export default {
  name: "app",
  components: {},
};
</script>