<!--
=========================================================
* Material Dashboard 2 - v3.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../abcd.com">
  <link rel="icon" type="image/png" href="{{url("/assets/img/favicon.png")}}>
  <title>
  Hob - Food Ordering System
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{url('/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{url('/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{url("/assets/css/material-dashboard.css?v=3.0.0")}}" rel="stylesheet" />

</head>
<body class="g-sidenav-show bg-gray-200">
{{-- sidebar --}}

<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark ps ps--active-y bg-white" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href=" {{route('home')}} " target="_blank">
      <img src="../../../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold text-white">Hob Food Ordering </span>
    </a>
  </div>
  <hr class="horizontal light mt-0 mb-2">
  <div class="collapse navbar-collapse w-auto h-auto ps" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item mb-2 mt-0">
        <a data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-white" aria-controls="ProfileNav" role="button" aria-expanded="false">
          <img src="../../../assets/img/team-3.jpg" class="avatar">
          <span class="nav-link-text ms-2 ps-1">Brooklyn Alice</span>
        </a>
        <div class="collapse" id="ProfileNav" style="">
          <ul class="nav ">
            <li class="nav-item">
              <a class="nav-link text-white" href="../../../pages/pages/profile/overview.html">
                <span class="sidenav-mini-icon"> MP </span>
                <span class="sidenav-normal  ms-3  ps-1"> My Profile </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white " href="../../../pages/pages/account/settings.html">
                <span class="sidenav-mini-icon"> S </span>
                <span class="sidenav-normal  ms-3  ps-1"> Settings </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white " href="../../../pages/authentication/signin/basic.html">
                <span class="sidenav-mini-icon"> L </span>
                <span class="sidenav-normal  ms-3  ps-1"> Logout </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <hr class="horizontal light mt-0">
      {{-- Restaurant Settings --}}
      <li class="nav-item">
        <a data-bs-toggle="collapse" href="#dashboardsExamples" class="nav-link text-white collapsed" aria-controls="dashboardsExamples" role="button" aria-expanded="false">
          <i class="material-icons-round opacity-10">dashboard</i>
          <span class="nav-link-text ms-2 ps-1">Restaurant Settings</span>
        </a>
        <div class="collapse" id="dashboardsExamples" style="">
          <ul class="nav ">
            <li class="nav-item ">
              <a class="nav-link text-white " href="{{route('restur.setup')}}">
                <span class="sidenav-mini-icon"> R </span>
                <span class="sidenav-normal  ms-2  ps-1"> Restaurnt Setup </span>
              </a>
            </li>

            </li>
          </ul>
        </div>
      </li>
    {{-- Restaurant Settings --}}

        {{-- Branch Settings --}}
      <li class="nav-item">
        <a data-bs-toggle="collapse" href="#dashboardsExamples1" class="nav-link text-white collapsed" aria-controls="dashboardsExamples1" role="button" aria-expanded="false">
          <i class="material-icons-round opacity-10">apps</i>
          <span class="nav-link-text ms-2 ps-1">Branch Settings</span>
        </a>
        <div class="collapse" id="dashboardsExamples1" style="">
          <ul class="nav ">
            <li class="nav-item ">
              <a class="nav-link text-white " href="{{route('branch_details.index')}}">
                <span class="sidenav-mini-icon"> R </span>
                <span class="sidenav-normal  ms-2  ps-1"> Branch Details </span>
              </a>
            </li>

            </li>
          </ul>
        </div>
      </li>
        {{-- Branch Settings --}}

        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#dashboardsExamples2" class="nav-link text-white collapsed" aria-controls="dashboardsExamples2" role="button" aria-expanded="false">
            <i class="material-icons-round opacity-10">dashboard</i>
            <span class="nav-link-text ms-2 ps-1">Menu Catalogue</span>
          </a>
          <div class="collapse" id="dashboardsExamples2" style="">
            <ul class="nav ">
              <li class="nav-item ">
                <a class="nav-link text-white " href="{{route('menu_category.index')}}">
                  <span class="sidenav-mini-icon"> M </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Menu Catagory </span>
                </a>
              </li>
  
              </li>
            </ul>
          </div>
        </li>


        
      <li class="nav-item mt-3">
        <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder text-white">PAGES</h6>
      </li>
      <li class="nav-item">
        <a data-bs-toggle="collapse" href="#pagesExamples" class="nav-link text-white active" aria-controls="pagesExamples" role="button" aria-expanded="false">
          <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">image</i>
          <span class="nav-link-text ms-2 ps-1">Pages</span>
        </a>
        <div class="collapse  show " id="pagesExamples">
          <ul class="nav ">
            <li class="nav-item ">
              <a class="nav-link text-white  active " data-bs-toggle="collapse" aria-expanded="false" href="#profileExample">
                <span class="sidenav-mini-icon"> P </span>
                <span class="sidenav-normal  ms-2  ps-1"> Profile <b class="caret"></b></span>
              </a>
              <div class="collapse show" id="profileExample">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a class="nav-link text-white active" href="../../../pages/pages/profile/overview.html">
                      <span class="sidenav-mini-icon"> P </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Profile Overview </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white " href="../../../pages/pages/profile/projects.html">
                      <span class="sidenav-mini-icon"> A </span>
                      <span class="sidenav-normal  ms-2  ps-1"> All Projects </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white " href="../../../pages/pages/profile/messages.html">
                      <span class="sidenav-mini-icon"> M </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Messages </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#usersExample">
                <span class="sidenav-mini-icon"> U </span>
                <span class="sidenav-normal  ms-2  ps-1"> Users <b class="caret"></b></span>
              </a>
              <div class="collapse " id="usersExample">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a class="nav-link text-white " href="../../../pages/pages/users/reports.html">
                      <span class="sidenav-mini-icon"> R </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Reports </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white " href="../../../pages/pages/users/new-user.html">
                      <span class="sidenav-mini-icon"> N </span>
                      <span class="sidenav-normal  ms-2  ps-1"> New User </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#accountExample">
                <span class="sidenav-mini-icon"> A </span>
                <span class="sidenav-normal  ms-2  ps-1"> Account <b class="caret"></b></span>
              </a>
              <div class="collapse " id="accountExample">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a class="nav-link text-white " href="../../../pages/pages/account/settings.html">
                      <span class="sidenav-mini-icon"> S </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Settings </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white " href="../../../pages/pages/account/billing.html">
                      <span class="sidenav-mini-icon"> B </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Billing </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white " href="../../../pages/pages/account/invoice.html">
                      <span class="sidenav-mini-icon"> I </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Invoice </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white " href="../../../pages/pages/account/security.html">
                      <span class="sidenav-mini-icon"> S </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Security </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#projectsExample">
                <span class="sidenav-mini-icon"> P </span>
                <span class="sidenav-normal  ms-2  ps-1"> Projects <b class="caret"></b></span>
              </a>
              <div class="collapse " id="projectsExample">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a class="nav-link text-white " href="../../../pages/pages/projects/general.html">
                      <span class="sidenav-mini-icon"> G </span>
                      <span class="sidenav-normal  ms-2  ps-1"> General </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white " href="../../../pages/pages/projects/timeline.html">
                      <span class="sidenav-mini-icon"> T </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Timeline </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white " href="../../../pages/pages/projects/new-project.html">
                      <span class="sidenav-mini-icon"> N </span>
                      <span class="sidenav-normal  ms-2  ps-1"> New Project </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#vrExamples">
                <span class="sidenav-mini-icon"> V </span>
                <span class="sidenav-normal  ms-2  ps-1"> Virtual Reality <b class="caret"></b></span>
              </a>
              <div class="collapse " id="vrExamples">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a class="nav-link text-white " href="../../../pages/pages/vr/vr-default.html">
                      <span class="sidenav-mini-icon"> V </span>
                      <span class="sidenav-normal  ms-2  ps-1"> VR Default </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white " href="../../../pages/pages/vr/vr-info.html">
                      <span class="sidenav-mini-icon"> V </span>
                      <span class="sidenav-normal  ms-2  ps-1"> VR Info </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white " href="../../../pages/pages/pricing-page.html">
                <span class="sidenav-mini-icon"> P </span>
                <span class="sidenav-normal  ms-2  ps-1"> Pricing Page </span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white " href="../../../pages/pages/rtl-page.html">
                <span class="sidenav-mini-icon"> R </span>
                <span class="sidenav-normal  ms-2  ps-1"> RTL </span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white " href="../../../pages/pages/widgets.html">
                <span class="sidenav-mini-icon"> W </span>
                <span class="sidenav-normal  ms-2  ps-1"> Widgets </span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white " href="../../../pages/pages/charts.html">
                <span class="sidenav-mini-icon"> C </span>
                <span class="sidenav-normal  ms-2  ps-1"> Charts </span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white " href="../../../pages/pages/sweet-alerts.html">
                <span class="sidenav-mini-icon"> S </span>
                <span class="sidenav-normal  ms-2  ps-1"> Sweet Alerts </span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white " href="../../../pages/pages/notifications.html">
                <span class="sidenav-mini-icon"> N </span>
                <span class="sidenav-normal  ms-2  ps-1"> Notifications </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a data-bs-toggle="collapse" href="#applicationsExamples" class="nav-link text-white " aria-controls="applicationsExamples" role="button" aria-expanded="false">
          <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">apps</i>
          <span class="nav-link-text ms-2 ps-1">Applications</span>
        </a>
        <div class="collapse " id="applicationsExamples">
          <ul class="nav ">
            <li class="nav-item ">
              <a class="nav-link text-white " href="../../../pages/applications/crm.html">
                <span class="sidenav-mini-icon"> C </span>
                <span class="sidenav-normal  ms-2  ps-1"> CRM </span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white " href="../../../pages/applications/kanban.html">
                <span class="sidenav-mini-icon"> K </span>
                <span class="sidenav-normal  ms-2  ps-1"> Kanban </span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white " href="../../../pages/applications/wizard.html">
                <span class="sidenav-mini-icon"> W </span>
                <span class="sidenav-normal  ms-2  ps-1"> Wizard </span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white " href="../../../pages/applications/datatables.html">
                <span class="sidenav-mini-icon"> D </span>
                <span class="sidenav-normal  ms-2  ps-1"> DataTables </span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white " href="../../../pages/applications/calendar.html">
                <span class="sidenav-mini-icon"> C </span>
                <span class="sidenav-normal  ms-2  ps-1"> Calendar </span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white " href="../../../pages/applications/stats.html">
                <span class="sidenav-mini-icon"> S </span>
                <span class="sidenav-normal  ms-2  ps-1"> Stats </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a data-bs-toggle="collapse" href="#ecommerceExamples" class="nav-link text-white " aria-controls="ecommerceExamples" role="button" aria-expanded="false">
          <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">shopping_basket</i>
          <span class="nav-link-text ms-2 ps-1">Ecommerce</span>
        </a>
        <div class="collapse " id="ecommerceExamples">
          <ul class="nav ">
            <li class="nav-item ">
              <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#productsExample">
                <span class="sidenav-mini-icon"> P </span>
                <span class="sidenav-normal  ms-2  ps-1"> Products <b class="caret"></b></span>
              </a>
              <div class="collapse " id="productsExample">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a class="nav-link text-white " href="../../../pages/ecommerce/products/new-product.html">
                      <span class="sidenav-mini-icon"> N </span>
                      <span class="sidenav-normal  ms-2  ps-1"> New Product </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white " href="../../../pages/ecommerce/products/edit-product.html">
                      <span class="sidenav-mini-icon"> E </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Edit Product </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white " href="../../../pages/ecommerce/products/product-page.html">
                      <span class="sidenav-mini-icon"> P </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Product Page </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white " href="../../../pages/ecommerce/products/products-list.html">
                      <span class="sidenav-mini-icon"> P </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Products List </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#ordersExample">
                <span class="sidenav-mini-icon"> O </span>
                <span class="sidenav-normal  ms-2  ps-1"> Orders <b class="caret"></b></span>
              </a>
              <div class="collapse " id="ordersExample">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a class="nav-link text-white " href="../../../pages/ecommerce/orders/list.html">
                      <span class="sidenav-mini-icon"> O </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Order List </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white " href="../../../pages/ecommerce/orders/details.html">
                      <span class="sidenav-mini-icon"> O </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Order Details </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white " href="../../../pages/ecommerce/referral.html">
                <span class="sidenav-mini-icon"> R </span>
                <span class="sidenav-normal  ms-2  ps-1"> Referral </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a data-bs-toggle="collapse" href="#authExamples" class="nav-link text-white " aria-controls="authExamples" role="button" aria-expanded="false">
          <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">content_paste</i>
          <span class="nav-link-text ms-2 ps-1">Authentication</span>
        </a>
        <div class="collapse " id="authExamples">
          <ul class="nav ">
            <li class="nav-item ">
              <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#signinExample">
                <span class="sidenav-mini-icon"> S </span>
                <span class="sidenav-normal  ms-2  ps-1"> Sign In <b class="caret"></b></span>
              </a>
              <div class="collapse " id="signinExample">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a class="nav-link text-white " href="../../../pages/authentication/signin/basic.html">
                      <span class="sidenav-mini-icon"> B </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Basic </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white " href="../../../pages/authentication/signin/cover.html">
                      <span class="sidenav-mini-icon"> C </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Cover </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white " href="../../../pages/authentication/signin/illustration.html">
                      <span class="sidenav-mini-icon"> I </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Illustration </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#signupExample">
                <span class="sidenav-mini-icon"> S </span>
                <span class="sidenav-normal  ms-2  ps-1"> Sign Up <b class="caret"></b></span>
              </a>
              <div class="collapse " id="signupExample">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a class="nav-link text-white " href="../../../pages/authentication/signup/basic.html">
                      <span class="sidenav-mini-icon"> B </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Basic </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white " href="../../../pages/authentication/signup/cover.html">
                      <span class="sidenav-mini-icon"> C </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Cover </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white " href="../../../pages/authentication/signup/illustration.html">
                      <span class="sidenav-mini-icon"> I </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Illustration </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#resetExample">
                <span class="sidenav-mini-icon"> R </span>
                <span class="sidenav-normal  ms-2  ps-1"> Reset Password <b class="caret"></b></span>
              </a>
              <div class="collapse " id="resetExample">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a class="nav-link text-white " href="../../../pages/authentication/reset/basic.html">
                      <span class="sidenav-mini-icon"> B </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Basic </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white " href="../../../pages/authentication/reset/cover.html">
                      <span class="sidenav-mini-icon"> C </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Cover </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white " href="../../../pages/authentication/reset/illustration.html">
                      <span class="sidenav-mini-icon"> I </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Illustration </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#lockExample">
                <span class="sidenav-mini-icon"> L </span>
                <span class="sidenav-normal  ms-2  ps-1"> Lock <b class="caret"></b></span>
              </a>
              <div class="collapse " id="lockExample">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a class="nav-link text-white " href="../../../pages/authentication/lock/basic.html">
                      <span class="sidenav-mini-icon"> B </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Basic </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white " href="../../../pages/authentication/lock/cover.html">
                      <span class="sidenav-mini-icon"> C </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Cover </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white " href="../../../pages/authentication/lock/illustration.html">
                      <span class="sidenav-mini-icon"> I </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Illustration </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#StepExample">
                <span class="sidenav-mini-icon"> 2 </span>
                <span class="sidenav-normal  ms-2  ps-1"> 2-Step Verification <b class="caret"></b></span>
              </a>
              <div class="collapse " id="StepExample">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a class="nav-link text-white " href="../../../pages/authentication/verification/basic.html">
                      <span class="sidenav-mini-icon"> B </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Basic </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white " href="../../../pages/authentication/verification/cover.html">
                      <span class="sidenav-mini-icon"> C </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Cover </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white " href="../../../pages/authentication/verification/illustration.html">
                      <span class="sidenav-mini-icon"> I </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Illustration </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#errorExample">
                <span class="sidenav-mini-icon"> E </span>
                <span class="sidenav-normal  ms-2  ps-1"> Error <b class="caret"></b></span>
              </a>
              <div class="collapse " id="errorExample">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a class="nav-link text-white " href="../../../pages/authentication/error/404.html">
                      <span class="sidenav-mini-icon"> E </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Error 404 </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white " href="../../../pages/authentication/error/500.html">
                      <span class="sidenav-mini-icon"> E </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Error 500 </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <hr class="horizontal light">
        <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder text-white">DOCS</h6>
      </li>
      <li class="nav-item">
        <a data-bs-toggle="collapse" href="#basicExamples" class="nav-link text-white " aria-controls="basicExamples" role="button" aria-expanded="false">
          <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">upcoming</i>
          <span class="nav-link-text ms-2 ps-1">Basic</span>
        </a>
        <div class="collapse " id="basicExamples">
          <ul class="nav ">
            <li class="nav-item ">
              <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#gettingStartedExample">
                <span class="sidenav-mini-icon"> G </span>
                <span class="sidenav-normal  ms-2  ps-1"> Getting Started <b class="caret"></b></span>
              </a>
              <div class="collapse " id="gettingStartedExample">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/quick-start/material-dashboard" target="_blank">
                      <span class="sidenav-mini-icon"> Q </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Quick Start </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/license/material-dashboard" target="_blank">
                      <span class="sidenav-mini-icon"> L </span>
                      <span class="sidenav-normal  ms-2  ps-1"> License </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard" target="_blank">
                      <span class="sidenav-mini-icon"> C </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Contents </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/build-tools/material-dashboard" target="_blank">
                      <span class="sidenav-mini-icon"> B </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Build Tools </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#foundationExample">
                <span class="sidenav-mini-icon"> F </span>
                <span class="sidenav-normal  ms-2  ps-1"> Foundation <b class="caret"></b></span>
              </a>
              <div class="collapse " id="foundationExample">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/colors/material-dashboard" target="_blank">
                      <span class="sidenav-mini-icon"> C </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Colors </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/grid/material-dashboard" target="_blank">
                      <span class="sidenav-mini-icon"> G </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Grid </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/typography/material-dashboard" target="_blank">
                      <span class="sidenav-mini-icon"> T </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Typography </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/icons/material-dashboard" target="_blank">
                      <span class="sidenav-mini-icon"> I </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Icons </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a data-bs-toggle="collapse" href="#componentsExamples" class="nav-link text-white " aria-controls="componentsExamples" role="button" aria-expanded="false">
          <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">view_in_ar</i>
          <span class="nav-link-text ms-2 ps-1">Components</span>
        </a>
        <div class="collapse " id="componentsExamples">
          <ul class="nav ">
            <li class="nav-item ">
              <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/alerts/material-dashboard" target="_blank">
                <span class="sidenav-mini-icon"> A </span>
                <span class="sidenav-normal  ms-2  ps-1"> Alerts </span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/badge/material-dashboard" target="_blank">
                <span class="sidenav-mini-icon"> B </span>
                <span class="sidenav-normal  ms-2  ps-1"> Badge </span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/buttons/material-dashboard" target="_blank">
                <span class="sidenav-mini-icon"> B </span>
                <span class="sidenav-normal  ms-2  ps-1"> Buttons </span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/cards/material-dashboard" target="_blank">
                <span class="sidenav-mini-icon"> C </span>
                <span class="sidenav-normal  ms-2  ps-1"> Card </span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/carousel/material-dashboard" target="_blank">
                <span class="sidenav-mini-icon"> C </span>
                <span class="sidenav-normal  ms-2  ps-1"> Carousel </span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/collapse/material-dashboard" target="_blank">
                <span class="sidenav-mini-icon"> C </span>
                <span class="sidenav-normal  ms-2  ps-1"> Collapse </span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/dropdowns/material-dashboard" target="_blank">
                <span class="sidenav-mini-icon"> D </span>
                <span class="sidenav-normal  ms-2  ps-1"> Dropdowns </span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/forms/material-dashboard" target="_blank">
                <span class="sidenav-mini-icon"> F </span>
                <span class="sidenav-normal  ms-2  ps-1"> Forms </span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/modal/material-dashboard" target="_blank">
                <span class="sidenav-mini-icon"> M </span>
                <span class="sidenav-normal  ms-2  ps-1"> Modal </span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/navs/material-dashboard" target="_blank">
                <span class="sidenav-mini-icon"> N </span>
                <span class="sidenav-normal  ms-2  ps-1"> Navs </span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/navbar/material-dashboard" target="_blank">
                <span class="sidenav-mini-icon"> N </span>
                <span class="sidenav-normal  ms-2  ps-1"> Navbar </span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/pagination/material-dashboard" target="_blank">
                <span class="sidenav-mini-icon"> P </span>
                <span class="sidenav-normal  ms-2  ps-1"> Pagination </span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/popovers/material-dashboard" target="_blank">
                <span class="sidenav-mini-icon"> P </span>
                <span class="sidenav-normal  ms-2  ps-1"> Popovers </span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/progress/material-dashboard" target="_blank">
                <span class="sidenav-mini-icon"> P </span>
                <span class="sidenav-normal  ms-2  ps-1"> Progress </span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/spinners/material-dashboard" target="_blank">
                <span class="sidenav-mini-icon"> S </span>
                <span class="sidenav-normal  ms-2  ps-1"> Spinners </span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/tables/material-dashboard" target="_blank">
                <span class="sidenav-mini-icon"> T </span>
                <span class="sidenav-normal  ms-2  ps-1"> Tables </span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/tooltips/material-dashboard" target="_blank">
                <span class="sidenav-mini-icon"> T </span>
                <span class="sidenav-normal  ms-2  ps-1"> Tooltips </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://github.com/creativetimofficial/ct-material-dashboard-pro/blob/master/CHANGELOG.md" target="_blank">
          <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">receipt_long</i>
          <span class="nav-link-text ms-2 ps-1">Changelog</span>
        </a>
      </li>
    </ul>
  <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
<div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 668px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 326px;"></div></div></aside>


{{-- sidebar --}}
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100 ps ps--active-y">
      <!-- Navbar -->
      <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
              <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
              <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Profile</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Profile</h6>
          </nav>
          <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
              {{-- <div class="input-group input-group-outline">
                <label class="form-label">Type here...</label>
                <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
              </div> --}}
            </div>
            <ul class="navbar-nav  justify-content-end">
              <li class="nav-item d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                  <i class="fa fa-user me-sm-1" aria-hidden="true"></i>
                  <span class="d-sm-inline d-none">Sign In</span>
                </a>
              </li>
              <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                  </div>
                </a>
              </li>
              <li class="nav-item px-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0">
                  <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer" aria-hidden="true"></i>
                </a>
              </li>
              <li class="nav-item dropdown pe-2 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-bell cursor-pointer" aria-hidden="true"></i>
                </a>
                <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                  <li class="mb-2">
                    <a class="dropdown-item border-radius-md" href="javascript:;">
                      <div class="d-flex py-1">
                        <div class="my-auto">
                          <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-sm font-weight-normal mb-1">
                            <span class="font-weight-bold">New message</span> from Laur
                          </h6>
                          <p class="text-xs text-secondary mb-0">
                            <i class="fa fa-clock me-1" aria-hidden="true"></i>
                            13 minutes ago
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="mb-2">
                    <a class="dropdown-item border-radius-md" href="javascript:;">
                      <div class="d-flex py-1">
                        <div class="my-auto">
                          <img src="{{url("/assets/img/small-logos/logo-spotify.svg")}}" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-sm font-weight-normal mb-1">
                            <span class="font-weight-bold">New album</span> by Travis Scott
                          </h6>
                          <p class="text-xs text-secondary mb-0">
                            <i class="fa fa-clock me-1" aria-hidden="true"></i>
                            1 day
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item border-radius-md" href="javascript:;">
                      <div class="d-flex py-1">
                        <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                          <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>credit-card</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                  <g transform="translate(453.000000, 454.000000)">
                                    <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                    <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                  </g>
                                </g>
                              </g>
                            </g>
                          </svg>
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-sm font-weight-normal mb-1">
                            Payment successfully completed
                          </h6>
                          <p class="text-xs text-secondary mb-0">
                            <i class="fa fa-clock me-1" aria-hidden="true"></i>
                            2 days
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="container-fluid py-4">
        @yield('dynamic')
        {{-- <div class="row">
          <div class="col-12">
            <div class="card my-4">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                  <h6 class="text-white text-capitalize ps-3">Authors table</h6>
                </div>
              </div>
              <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                        <th class="text-secondary opacity-7"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">John Michael</h6>
                              <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">Manager</p>
                          <p class="text-xs text-secondary mb-0">Organization</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-success">Online</span>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                        </td>
                        <td class="align-middle">
                          <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Edit
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user2">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">Alexa Liras</h6>
                              <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">Programator</p>
                          <p class="text-xs text-secondary mb-0">Developer</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                        </td>
                        <td class="align-middle">
                          <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Edit
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user3">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">Laurent Perrier</h6>
                              <p class="text-xs text-secondary mb-0">laurent@creative-tim.com</p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">Executive</p>
                          <p class="text-xs text-secondary mb-0">Projects</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-success">Online</span>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">19/09/17</span>
                        </td>
                        <td class="align-middle">
                          <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Edit
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user4">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">Michael Levi</h6>
                              <p class="text-xs text-secondary mb-0">michael@creative-tim.com</p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">Programator</p>
                          <p class="text-xs text-secondary mb-0">Developer</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-success">Online</span>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">24/12/08</span>
                        </td>
                        <td class="align-middle">
                          <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Edit
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user5">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">Richard Gran</h6>
                              <p class="text-xs text-secondary mb-0">richard@creative-tim.com</p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">Manager</p>
                          <p class="text-xs text-secondary mb-0">Executive</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">04/10/21</span>
                        </td>
                        <td class="align-middle">
                          <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Edit
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user6">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">Miriam Eric</h6>
                              <p class="text-xs text-secondary mb-0">miriam@creative-tim.com</p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">Programator</p>
                          <p class="text-xs text-secondary mb-0">Developer</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">14/09/20</span>
                        </td>
                        <td class="align-middle">
                          <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Edit
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card my-4">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                  <h6 class="text-white text-capitalize ps-3">Projects table</h6>
                </div>
              </div>
              <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center justify-content-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Project</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Budget</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Completion</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-flex px-2">
                            <div>
                              <img src="../assets/img/small-logos/logo-asana.svg" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                            </div>
                            <div class="my-auto">
                              <h6 class="mb-0 text-sm">Asana</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-sm font-weight-bold mb-0">$2,500</p>
                        </td>
                        <td>
                          <span class="text-xs font-weight-bold">working</span>
                        </td>
                        <td class="align-middle text-center">
                          <div class="d-flex align-items-center justify-content-center">
                            <span class="me-2 text-xs font-weight-bold">60%</span>
                            <div>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">
                          <button class="btn btn-link text-secondary mb-0">
                            <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2">
                            <div>
                              <img src="../assets/img/small-logos/github.svg" class="avatar avatar-sm rounded-circle me-2" alt="invision">
                            </div>
                            <div class="my-auto">
                              <h6 class="mb-0 text-sm">Github</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-sm font-weight-bold mb-0">$5,000</p>
                        </td>
                        <td>
                          <span class="text-xs font-weight-bold">done</span>
                        </td>
                        <td class="align-middle text-center">
                          <div class="d-flex align-items-center justify-content-center">
                            <span class="me-2 text-xs font-weight-bold">100%</span>
                            <div>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">
                          <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2">
                            <div>
                              <img src="../assets/img/small-logos/logo-atlassian.svg" class="avatar avatar-sm rounded-circle me-2" alt="jira">
                            </div>
                            <div class="my-auto">
                              <h6 class="mb-0 text-sm">Atlassian</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-sm font-weight-bold mb-0">$3,400</p>
                        </td>
                        <td>
                          <span class="text-xs font-weight-bold">canceled</span>
                        </td>
                        <td class="align-middle text-center">
                          <div class="d-flex align-items-center justify-content-center">
                            <span class="me-2 text-xs font-weight-bold">30%</span>
                            <div>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="30" style="width: 30%;"></div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">
                          <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2">
                            <div>
                              <img src="../assets/img/small-logos/bootstrap.svg" class="avatar avatar-sm rounded-circle me-2" alt="webdev">
                            </div>
                            <div class="my-auto">
                              <h6 class="mb-0 text-sm">Bootstrap</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-sm font-weight-bold mb-0">$14,000</p>
                        </td>
                        <td>
                          <span class="text-xs font-weight-bold">working</span>
                        </td>
                        <td class="align-middle text-center">
                          <div class="d-flex align-items-center justify-content-center">
                            <span class="me-2 text-xs font-weight-bold">80%</span>
                            <div>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80" style="width: 80%;"></div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">
                          <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2">
                            <div>
                              <img src="../assets/img/small-logos/logo-slack.svg" class="avatar avatar-sm rounded-circle me-2" alt="slack">
                            </div>
                            <div class="my-auto">
                              <h6 class="mb-0 text-sm">Slack</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-sm font-weight-bold mb-0">$1,000</p>
                        </td>
                        <td>
                          <span class="text-xs font-weight-bold">canceled</span>
                        </td>
                        <td class="align-middle text-center">
                          <div class="d-flex align-items-center justify-content-center">
                            <span class="me-2 text-xs font-weight-bold">0%</span>
                            <div>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0" style="width: 0%;"></div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">
                          <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2">
                            <div>
                              <img src="../assets/img/small-logos/devto.svg" class="avatar avatar-sm rounded-circle me-2" alt="xd">
                            </div>
                            <div class="my-auto">
                              <h6 class="mb-0 text-sm">Devto</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-sm font-weight-bold mb-0">$2,300</p>
                        </td>
                        <td>
                          <span class="text-xs font-weight-bold">done</span>
                        </td>
                        <td class="align-middle text-center">
                          <div class="d-flex align-items-center justify-content-center">
                            <span class="me-2 text-xs font-weight-bold">100%</span>
                            <div>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">
                          <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
        <footer class="footer py-4  ">
          <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
              <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-start">
                  © <script>
                    document.write(new Date().getFullYear())
                  </script>2021,
                  made with <i class="fa fa-heart" aria-hidden="true"></i> by
                  <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                  for a better web.
                </div>
              </div>
              <div class="col-lg-6">
                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                  <li class="nav-item">
                    <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                  </li>
                  <li class="nav-item">
                    <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </div>
    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 757px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 407px;"></div></div></div>
    <div class="fixed-plugin ps">
      <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
        <i class="material-icons py-2">settings</i>
      </a>
      <div class="card shadow-lg">
        <div class="card-header pb-0 pt-3">
          <div class="float-start">
            <h5 class="mt-3 mb-0">Material UI Configurator</h5>
            <p>See our dashboard options.</p>
          </div>
          <div class="float-end mt-4">
            <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
              <i class="material-icons">clear</i>
            </button>
          </div>
          <!-- End Toggle Button -->
        </div>
        <hr class="horizontal dark my-1">
        <div class="card-body pt-sm-3 pt-0">
          <!-- Sidebar Backgrounds -->
          <div>
            <h6 class="mb-0">Sidebar Colors</h6>
          </div>
          <a href="javascript:void(0)" class="switch-trigger background-color">
            <div class="badge-colors my-2 text-start">
              <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
              <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
              <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
              <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
              <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
              <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
            </div>
          </a>
          <!-- Sidenav Type -->
          <div class="mt-3">
            <h6 class="mb-0">Sidenav Type</h6>
            <p class="text-sm">Choose between 2 different sidenav types.</p>
          </div>
          <div class="d-flex">
            <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
            <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
            <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
          </div>
          <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
          <!-- Navbar Fixed -->
          <hr class="horizontal dark my-3">
          <div class="mt-2 d-flex">
            <h6 class="mb-0">Light / Dark</h6>
            <div class="form-check form-switch ps-0 ms-auto my-auto">
              <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
            </div>
          </div>
          <hr class="horizontal dark my-sm-4">
          <a class="btn btn-outline-dark w-100" href="">View documentation</a>
          <div class="w-100 text-center">
            <span></span>
            <h6 class="mt-3">Thank you for sharing!</h6>
            <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
              <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
            </a>
            <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
              <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
            </a>
          </div>
        </div>
      </div>
    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
    <!--   Core JS Files   -->
    <script src="{{url("/assets/js/core/popper.min.js")}}"></script>
    <script src="{{url("/assets/js/core/bootstrap.min.js")}}"></script>
    <script src="{{url("/assets/js/plugins/perfect-scrollbar.min.js")}}"></script>
    <script src="{{url("/assets/js/plugins/smooth-scrollbar.min.js")}}"></script>
    <script>
      var win = navigator.platform.indexOf('Win') > -1;
      if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
          damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
      }
    </script>
    <!-- Github buttons -->
    <script async="" defer="" src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{url("/assets/js/material-dashboard.min.js?v=3.0.0")}}"></script>
  
  
  </body>