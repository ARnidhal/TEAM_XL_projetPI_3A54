<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* back.html.twig */
class __TwigTemplate_b402d6b2c8e2a431b2fe58c7e51e3234 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>

    
    <meta charset=\"utf-8\" />
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css\" integrity=\"sha384-KyZXEAg3QhqLMpG8r+Knujsl7/1L_dstPt3HV5HzF6Gvk/e3s4Wz6iJgD/+ub2oU\" crossorigin=\"anonymous\">

    

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta content=\"\" name=\"description\" />
    <meta content=\"\" name=\"keywords\" />

    <!-- Favicons -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsB/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\" />
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsB/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\" />
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css\" />
    <!-- Google Fonts -->
    <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" />
    <link
      href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\"
      rel=\"stylesheet\"
    />

    <!-- Vendor CSS Files -->
    <link
      href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsB/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\"
      rel=\"stylesheet\"
    />
    <link
      href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsB/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\"
      rel=\"stylesheet\"
    />
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsB/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsB/vendor/quill/quill.snow.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsB/vendor/quill/quill.bubble.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsB/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsB/vendor/simple-datatables/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- Template Main CSS File -->
    <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsB/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id=\"header\" class=\"header fixed-top d-flex align-items-center\">
      <div class=\"d-flex align-items-center justify-content-between\">
        <a href=\"index.html\" class=\"logo d-flex align-items-center\">
          <img src=\"assets/img/logo.png\" alt=\"\" />
          <span class=\"d-none d-lg-block\">NiceAdmin</span>
        </a>
        <i class=\"bi bi-list toggle-sidebar-btn\"></i>
      </div>
      <!-- End Logo -->

      <div class=\"search-bar\">
        <form
          class=\"search-form d-flex align-items-center\"
          method=\"POST\"
          action=\"#\"
        >
          <input
            type=\"text\"
            name=\"query\"
            placeholder=\"Search\"
            title=\"Enter search keyword\"
          />
          <button type=\"submit\" title=\"Search\">
            <i class=\"bi bi-search\"></i>
          </button>
        </form>
      </div>
      <!-- End Search Bar -->

      <nav class=\"header-nav ms-auto\">
        <ul class=\"d-flex align-items-center\">
          <li class=\"nav-item d-block d-lg-none\">
            <a class=\"nav-link nav-icon search-bar-toggle\" href=\"#\">
              <i class=\"bi bi-search\"></i>
            </a>
          </li>
          <!-- End Search Icon-->

          <li class=\"nav-item dropdown\">
            <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
              <i class=\"bi bi-bell\"></i>
              <span class=\"badge bg-primary badge-number\">4</span> </a
            ><!-- End Notification Icon -->

            <ul
              class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\"
            >
              <li class=\"dropdown-header\">
                You have 4 new notifications
                <a href=\"#\"
                  ><span class=\"badge rounded-pill bg-primary p-2 ms-2\"
                    >View all</span
                  ></a
                >
              </li>
              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li class=\"notification-item\">
                <i class=\"bi bi-exclamation-circle text-warning\"></i>
                <div>
                  <h4>Lorem Ipsum</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>30 min. ago</p>
                </div>
              </li>

              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li class=\"notification-item\">
                <i class=\"bi bi-x-circle text-danger\"></i>
                <div>
                  <h4>Atque rerum nesciunt</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>1 hr. ago</p>
                </div>
              </li>

              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li class=\"notification-item\">
                <i class=\"bi bi-check-circle text-success\"></i>
                <div>
                  <h4>Sit rerum fuga</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>2 hrs. ago</p>
                </div>
              </li>

              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li class=\"notification-item\">
                <i class=\"bi bi-info-circle text-primary\"></i>
                <div>
                  <h4>Dicta reprehenderit</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>4 hrs. ago</p>
                </div>
              </li>

              <li>
                <hr class=\"dropdown-divider\" />
              </li>
              <li class=\"dropdown-footer\">
                <a href=\"#\">Show all notifications</a>
              </li>
            </ul>
            <!-- End Notification Dropdown Items -->
          </li>
          <!-- End Notification Nav -->

          <li class=\"nav-item dropdown\">
            <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
              <i class=\"bi bi-chat-left-text\"></i>
              <span class=\"badge bg-success badge-number\">3</span> </a
            ><!-- End Messages Icon -->

            <ul
              class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\"
            >
              <li class=\"dropdown-header\">
                You have 3 new messages
                <a href=\"#\"
                  ><span class=\"badge rounded-pill bg-primary p-2 ms-2\"
                    >View all</span
                  ></a
                >
              </li>
              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li class=\"message-item\">
                <a href=\"#\">
                  <img
                    src=\"assets/img/messages-1.jpg\"
                    alt=\"\"
                    class=\"rounded-circle\"
                  />
                  <div>
                    <h4>Maria Hudson</h4>
                    <p>
                      Velit asperiores et ducimus soluta repudiandae labore
                      officia est ut...
                    </p>
                    <p>4 hrs. ago</p>
                  </div>
                </a>
              </li>
              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li class=\"message-item\">
                <a href=\"#\">
                  <img
                    src=\"assets/img/messages-2.jpg\"
                    alt=\"\"
                    class=\"rounded-circle\"
                  />
                  <div>
                    <h4>Anna Nelson</h4>
                    <p>
                      Velit asperiores et ducimus soluta repudiandae labore
                      officia est ut...
                    </p>
                    <p>6 hrs. ago</p>
                  </div>
                </a>
              </li>
              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li class=\"message-item\">
                <a href=\"#\">
                  <img
                    src=\"assets/img/messages-3.jpg\"
                    alt=\"\"
                    class=\"rounded-circle\"
                  />
                  <div>
                    <h4>David Muldon</h4>
                    <p>
                      Velit asperiores et ducimus soluta repudiandae labore
                      officia est ut...
                    </p>
                    <p>8 hrs. ago</p>
                  </div>
                </a>
              </li>
              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li class=\"dropdown-footer\">
                <a href=\"#\">Show all messages</a>
              </li>
            </ul>
            <!-- End Messages Dropdown Items -->
          </li>
          <!-- End Messages Nav -->

          <li class=\"nav-item dropdown pe-3\">
            <a
              class=\"nav-link nav-profile d-flex align-items-center pe-0\"
              href=\"#\"
              data-bs-toggle=\"dropdown\"
            >
              <img
                src=\"assets/img/profile-img.jpg\"
                alt=\"Profile\"
                class=\"rounded-circle\"
              />
              <span class=\"d-none d-md-block dropdown-toggle ps-2\"
                >K. Anderson</span
              > </a
            ><!-- End Profile Iamge Icon -->

            <ul
              class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\"
            >
              <li class=\"dropdown-header\">
                <h6>Kevin Anderson</h6>
                <span>Web Designer</span>
              </li>
              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li>
                <a
                  class=\"dropdown-item d-flex align-items-center\"
                  href=\"users-profile.html\"
                >
                  <i class=\"bi bi-person\"></i>
                  <span>My Profile</span>
                </a>
              </li>
              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li>
                <a
                  class=\"dropdown-item d-flex align-items-center\"
                  href=\"users-profile.html\"
                >
                  <i class=\"bi bi-gear\"></i>
                  <span>Account Settings</span>
                </a>
              </li>
              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li>
                <a
                  class=\"dropdown-item d-flex align-items-center\"
                  href=\"pages-faq.html\"
                >
                  <i class=\"bi bi-question-circle\"></i>
                  <span>Need Help?</span>
                </a>
              </li>
              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                  <i class=\"bi bi-box-arrow-right\"></i>
                  <span>Sign Out</span>
                </a>
              </li>
            </ul>
            <!-- End Profile Dropdown Items -->
          </li>
          <!-- End Profile Nav -->
        </ul>
      </nav>
      <!-- End Icons Navigation -->
    </header>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id=\"sidebar\" class=\"sidebar\">
      <ul class=\"sidebar-nav\" id=\"sidebar-nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"index.html\">
            <i class=\"bi bi-grid\"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <!-- End Dashboard Nav -->

        <li class=\"nav-item\">
          <a
            class=\"nav-link collapsed\"
            data-bs-target=\"#components-nav\"
            data-bs-toggle=\"collapse\"
            href=\"#\"
          >
            <i class=\"bi bi-menu-button-wide\"></i><span>Components</span
            ><i class=\"bi bi-chevron-down ms-auto\"></i>
          </a>
          <ul
            id=\"components-nav\"
            class=\"nav-content collapse\"
            data-bs-parent=\"#sidebar-nav\"
          >
            <li>
              <a href=\"components-alerts.html\">
                <i class=\"bi bi-circle\"></i><span>Alerts</span>
              </a>
            </li>
            <li>
              <a href=\"components-accordion.html\">
                <i class=\"bi bi-circle\"></i><span>Accordion</span>
              </a>
            </li>
            <li>
              <a href=\"components-badges.html\">
                <i class=\"bi bi-circle\"></i><span>Badges</span>
              </a>
            </li>
            <li>
              <a href=\"components-breadcrumbs.html\">
                <i class=\"bi bi-circle\"></i><span>Breadcrumbs</span>
              </a>
            </li>
            <li>
              <a href=\"components-buttons.html\">
                <i class=\"bi bi-circle\"></i><span>Buttons</span>
              </a>
            </li>
            <li>
              <a href=\"components-cards.html\">
                <i class=\"bi bi-circle\"></i><span>Cards</span>
              </a>
            </li>
            <li>
              <a href=\"components-carousel.html\">
                <i class=\"bi bi-circle\"></i><span>Carousel</span>
              </a>
            </li>
            <li>
              <a href=\"components-list-group.html\">
                <i class=\"bi bi-circle\"></i><span>List group</span>
              </a>
            </li>
            <li>
              <a href=\"components-modal.html\">
                <i class=\"bi bi-circle\"></i><span>Modal</span>
              </a>
            </li>
            <li>
              <a href=\"components-tabs.html\">
                <i class=\"bi bi-circle\"></i><span>Tabs</span>
              </a>
            </li>
            <li>
              <a href=\"components-pagination.html\">
                <i class=\"bi bi-circle\"></i><span>Pagination</span>
              </a>
            </li>
            <li>
              <a href=\"components-progress.html\">
                <i class=\"bi bi-circle\"></i><span>Progress</span>
              </a>
            </li>
            <li>
              <a href=\"components-spinners.html\">
                <i class=\"bi bi-circle\"></i><span>Spinners</span>
              </a>
            </li>
            <li>
              <a href=\"components-tooltips.html\">
                <i class=\"bi bi-circle\"></i><span>Tooltips</span>
              </a>
            </li>
          </ul>
        </li>
        <!-- End Components Nav -->

        <li class=\"nav-item\">
          <a
            class=\"nav-link collapsed\"
            data-bs-target=\"#forms-nav\"
            data-bs-toggle=\"collapse\"
            href=\"#\"
          >
            <i class=\"bi bi-journal-text\"></i><span>Forms</span
            ><i class=\"bi bi-chevron-down ms-auto\"></i>
          </a>
          <ul
            id=\"forms-nav\"
            class=\"nav-content collapse\"
            data-bs-parent=\"#sidebar-nav\"
          >
            <li>
              <a href=\"forms-elements.html\">
                <i class=\"bi bi-circle\"></i><span>Form Elements</span>
              </a>
            </li>
            <li>
              <a href=\"forms-layouts.html\">
                <i class=\"bi bi-circle\"></i><span>Form Layouts</span>
              </a>
            </li>
            <li>
              <a href=\"forms-editors.html\">
                <i class=\"bi bi-circle\"></i><span>Form Editors</span>
              </a>
            </li>
            <li>
              <a href=\"forms-validation.html\">
                <i class=\"bi bi-circle\"></i><span>Form Validation</span>
              </a>
            </li>
          </ul>
        </li>
        <!-- End Forms Nav -->

        <li class=\"nav-item\">
          <a
            class=\"nav-link collapsed\"
            data-bs-target=\"#tables-nav\"
            data-bs-toggle=\"collapse\"
            href=\"#\"
          >
            <i class=\"bi bi-layout-text-window-reverse\"></i><span>Tables</span
            ><i class=\"bi bi-chevron-down ms-auto\"></i>
          </a>
          <ul
            id=\"tables-nav\"
            class=\"nav-content collapse\"
            data-bs-parent=\"#sidebar-nav\"
          >
            <li>
              <a href=\"tables-general.html\">
                <i class=\"bi bi-circle\"></i><span>General Tables</span>
              </a>
            </li>
            <li>
              <a href=\"tables-data.html\">
                <i class=\"bi bi-circle\"></i><span>Data Tables</span>
              </a>
            </li>
          </ul>
        </li>
        <!-- End Tables Nav -->

        <li class=\"nav-item\">
          <a
            class=\"nav-link collapsed\"
            data-bs-target=\"#charts-nav\"
            data-bs-toggle=\"collapse\"
            href=\"#\"
          >
            <i class=\"bi bi-bar-chart\"></i><span>Charts</span
            ><i class=\"bi bi-chevron-down ms-auto\"></i>
          </a>
          <ul
            id=\"charts-nav\"
            class=\"nav-content collapse\"
            data-bs-parent=\"#sidebar-nav\"
          >
            <li>
              <a href=\"";
        // line 532
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_indexstat");
        echo "\">
                <i class=\"bi bi-circle\"></i><span>Chart.js</span>
              </a>
            </li>
            <li>
              <a href=\"charts-apexcharts.html\">
                <i class=\"bi bi-circle\"></i><span>ApexCharts</span>
              </a>
            </li>
            <li>
              <a href=\"charts-echarts.html\">
                <i class=\"bi bi-circle\"></i><span>ECharts</span>
              </a>
            </li>
          </ul>
        </li>
        <!-- End Charts Nav -->

        <li class=\"nav-item\">
          <a
            class=\"nav-link collapsed\"
            data-bs-target=\"#icons-nav\"
            data-bs-toggle=\"collapse\"
            href=\"#\"
          >
            <i class=\"bi bi-gem\"></i><span>Icons</span
            ><i class=\"bi bi-chevron-down ms-auto\"></i>
          </a>
          <ul
            id=\"icons-nav\"
            class=\"nav-content collapse\"
            data-bs-parent=\"#sidebar-nav\"
          >
            <li>
              <a href=\"icons-bootstrap.html\">
                <i class=\"bi bi-circle\"></i><span>Bootstrap Icons</span>
              </a>
            </li>
            <li>
              <a href=\"icons-remix.html\">
                <i class=\"bi bi-circle\"></i><span>Remix Icons</span>
              </a>
            </li>
            <li>
              <a href=\"icons-boxicons.html\">
                <i class=\"bi bi-circle\"></i><span>Boxicons</span>
              </a>
            </li>
          </ul>
        </li>
        <!-- End Icons Nav -->

        <li class=\"nav-heading\">Pages</li>

        <li class=\"nav-item\">
          <a class=\"nav-link collapsed\" href=\"users-profile.html\">
            <i class=\"bi bi-person\"></i>
            <span>Profile</span>
          </a>
        </li>
        <!-- End Profile Page Nav -->

        <li class=\"nav-item\">
          <a class=\"nav-link collapsed\" href=\"pages-faq.html\">
            <i class=\"bi bi-question-circle\"></i>
            <span>F.A.Q</span>
          </a>
        </li>
        <!-- End F.A.Q Page Nav -->

        <li class=\"nav-item\">
          <a class=\"nav-link collapsed\" href=\"pages-contact.html\">
            <i class=\"bi bi-envelope\"></i>
            <span>Contact</span>
          </a>
        </li>
        <!-- End Contact Page Nav -->

        <li class=\"nav-item\">
          <a class=\"nav-link collapsed\" href=\"pages-register.html\">
            <i class=\"bi bi-card-list\"></i>
            <span>Register</span>
          </a>
        </li>
        <!-- End Register Page Nav -->

        <li class=\"nav-item\">
          <a class=\"nav-link collapsed\" href=\"pages-login.html\">
            <i class=\"bi bi-box-arrow-in-right\"></i>
            <span>Login</span>
          </a>
        </li>
        <!-- End Login Page Nav -->

        <li class=\"nav-item\">
          <a class=\"nav-link collapsed\" href=\"pages-error-404.html\">
            <i class=\"bi bi-dash-circle\"></i>
            <span>Error 404</span>
          </a>
        </li>
        <!-- End Error 404 Page Nav -->

        <li class=\"nav-item\">
          <a class=\"nav-link collapsed\" href=\"pages-blank.html\">
            <i class=\"bi bi-file-earmark\"></i>
            <span>Blank</span>
          </a>
        </li>
        <!-- End Blank Page Nav -->
      </ul>
    </aside>
    <!-- End Sidebar-->

    <main id=\"main\" class=\"main\">
      <div class=\"pagetitle\">
        <h1>Dashboard</h1>
        <nav>
          <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
            <li class=\"breadcrumb-item active\">Dashboard</li>
          </ol>
        </nav>
      </div>
      <!-- End Page Title -->

      <section class=\"section dashboard\">
        <div class=\"row\">
          <!-- Left side columns -->
          <div class=\"col-lg-6\">
            <div class=\"row\">
";
        // line 662
        $this->displayBlock('body', $context, $blocks);
        // line 663
        echo "


            </div>
          </div>
          <!-- End Left side columns -->

        
        </div>
      </section>
    </main>
    <!-- End #main -->


<!-- ======= Footer ======= -->
    <footer id=\"footer\" class=\"footer\">
      <div class=\"copyright\">
        &copy; Copyright <strong><span>NiceAdmin</span></strong
        >. All Rights Reserved
      </div>
      <div class=\"credits\">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
      </div>
    </footer>
    <!-- End Footer -->

    <a
      href=\"#\"
      class=\"back-to-top d-flex align-items-center justify-content-center\"
      ><i class=\"bi bi-arrow-up-short\"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src=\"";
        // line 700
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsB/vendor/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 701
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsB/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 702
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsB/vendor/chart.js/chart.umd.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 703
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsB/vendor/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 704
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsB/vendor/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 705
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsB/vendor/simple-datatables/simple-datatables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 706
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsB/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 707
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsB/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

    <!-- Template Main JS File -->
    <script src=\"";
        // line 710
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsB/js/main.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 662
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  829 => 662,  815 => 710,  809 => 707,  805 => 706,  801 => 705,  797 => 704,  793 => 703,  789 => 702,  785 => 701,  781 => 700,  742 => 663,  740 => 662,  607 => 532,  115 => 43,  109 => 40,  105 => 39,  101 => 38,  97 => 37,  93 => 36,  87 => 33,  80 => 29,  66 => 18,  62 => 17,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>

    
    <meta charset=\"utf-8\" />
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css\" integrity=\"sha384-KyZXEAg3QhqLMpG8r+Knujsl7/1L_dstPt3HV5HzF6Gvk/e3s4Wz6iJgD/+ub2oU\" crossorigin=\"anonymous\">

    

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta content=\"\" name=\"description\" />
    <meta content=\"\" name=\"keywords\" />

    <!-- Favicons -->
    <link href=\"{{asset('assetsB/img/favicon.png')}}\" rel=\"icon\" />
    <link href=\"{{asset('assetsB/img/apple-touch-icon.png')}}\" rel=\"apple-touch-icon\" />
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css\" />
    <!-- Google Fonts -->
    <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" />
    <link
      href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\"
      rel=\"stylesheet\"
    />

    <!-- Vendor CSS Files -->
    <link
      href=\"{{asset('assetsB/vendor/bootstrap/css/bootstrap.min.css')}}\"
      rel=\"stylesheet\"
    />
    <link
      href=\"{{asset('assetsB/vendor/bootstrap-icons/bootstrap-icons.css')}}\"
      rel=\"stylesheet\"
    />
    <link href=\"{{asset('assetsB/vendor/boxicons/css/boxicons.min.css')}}\" rel=\"stylesheet\" />
    <link href=\"{{asset('assetsB/vendor/quill/quill.snow.css')}}\" rel=\"stylesheet\" />
    <link href=\"{{asset('assetsB/vendor/quill/quill.bubble.css')}}\" rel=\"stylesheet\" />
    <link href=\"{{asset('assetsB/vendor/remixicon/remixicon.css')}}\" rel=\"stylesheet\" />
    <link href=\"{{asset('assetsB/vendor/simple-datatables/style.css')}}\" rel=\"stylesheet\" />

    <!-- Template Main CSS File -->
    <link href=\"{{asset('assetsB/css/style.css')}}\" rel=\"stylesheet\" />

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id=\"header\" class=\"header fixed-top d-flex align-items-center\">
      <div class=\"d-flex align-items-center justify-content-between\">
        <a href=\"index.html\" class=\"logo d-flex align-items-center\">
          <img src=\"assets/img/logo.png\" alt=\"\" />
          <span class=\"d-none d-lg-block\">NiceAdmin</span>
        </a>
        <i class=\"bi bi-list toggle-sidebar-btn\"></i>
      </div>
      <!-- End Logo -->

      <div class=\"search-bar\">
        <form
          class=\"search-form d-flex align-items-center\"
          method=\"POST\"
          action=\"#\"
        >
          <input
            type=\"text\"
            name=\"query\"
            placeholder=\"Search\"
            title=\"Enter search keyword\"
          />
          <button type=\"submit\" title=\"Search\">
            <i class=\"bi bi-search\"></i>
          </button>
        </form>
      </div>
      <!-- End Search Bar -->

      <nav class=\"header-nav ms-auto\">
        <ul class=\"d-flex align-items-center\">
          <li class=\"nav-item d-block d-lg-none\">
            <a class=\"nav-link nav-icon search-bar-toggle\" href=\"#\">
              <i class=\"bi bi-search\"></i>
            </a>
          </li>
          <!-- End Search Icon-->

          <li class=\"nav-item dropdown\">
            <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
              <i class=\"bi bi-bell\"></i>
              <span class=\"badge bg-primary badge-number\">4</span> </a
            ><!-- End Notification Icon -->

            <ul
              class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\"
            >
              <li class=\"dropdown-header\">
                You have 4 new notifications
                <a href=\"#\"
                  ><span class=\"badge rounded-pill bg-primary p-2 ms-2\"
                    >View all</span
                  ></a
                >
              </li>
              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li class=\"notification-item\">
                <i class=\"bi bi-exclamation-circle text-warning\"></i>
                <div>
                  <h4>Lorem Ipsum</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>30 min. ago</p>
                </div>
              </li>

              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li class=\"notification-item\">
                <i class=\"bi bi-x-circle text-danger\"></i>
                <div>
                  <h4>Atque rerum nesciunt</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>1 hr. ago</p>
                </div>
              </li>

              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li class=\"notification-item\">
                <i class=\"bi bi-check-circle text-success\"></i>
                <div>
                  <h4>Sit rerum fuga</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>2 hrs. ago</p>
                </div>
              </li>

              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li class=\"notification-item\">
                <i class=\"bi bi-info-circle text-primary\"></i>
                <div>
                  <h4>Dicta reprehenderit</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>4 hrs. ago</p>
                </div>
              </li>

              <li>
                <hr class=\"dropdown-divider\" />
              </li>
              <li class=\"dropdown-footer\">
                <a href=\"#\">Show all notifications</a>
              </li>
            </ul>
            <!-- End Notification Dropdown Items -->
          </li>
          <!-- End Notification Nav -->

          <li class=\"nav-item dropdown\">
            <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
              <i class=\"bi bi-chat-left-text\"></i>
              <span class=\"badge bg-success badge-number\">3</span> </a
            ><!-- End Messages Icon -->

            <ul
              class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\"
            >
              <li class=\"dropdown-header\">
                You have 3 new messages
                <a href=\"#\"
                  ><span class=\"badge rounded-pill bg-primary p-2 ms-2\"
                    >View all</span
                  ></a
                >
              </li>
              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li class=\"message-item\">
                <a href=\"#\">
                  <img
                    src=\"assets/img/messages-1.jpg\"
                    alt=\"\"
                    class=\"rounded-circle\"
                  />
                  <div>
                    <h4>Maria Hudson</h4>
                    <p>
                      Velit asperiores et ducimus soluta repudiandae labore
                      officia est ut...
                    </p>
                    <p>4 hrs. ago</p>
                  </div>
                </a>
              </li>
              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li class=\"message-item\">
                <a href=\"#\">
                  <img
                    src=\"assets/img/messages-2.jpg\"
                    alt=\"\"
                    class=\"rounded-circle\"
                  />
                  <div>
                    <h4>Anna Nelson</h4>
                    <p>
                      Velit asperiores et ducimus soluta repudiandae labore
                      officia est ut...
                    </p>
                    <p>6 hrs. ago</p>
                  </div>
                </a>
              </li>
              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li class=\"message-item\">
                <a href=\"#\">
                  <img
                    src=\"assets/img/messages-3.jpg\"
                    alt=\"\"
                    class=\"rounded-circle\"
                  />
                  <div>
                    <h4>David Muldon</h4>
                    <p>
                      Velit asperiores et ducimus soluta repudiandae labore
                      officia est ut...
                    </p>
                    <p>8 hrs. ago</p>
                  </div>
                </a>
              </li>
              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li class=\"dropdown-footer\">
                <a href=\"#\">Show all messages</a>
              </li>
            </ul>
            <!-- End Messages Dropdown Items -->
          </li>
          <!-- End Messages Nav -->

          <li class=\"nav-item dropdown pe-3\">
            <a
              class=\"nav-link nav-profile d-flex align-items-center pe-0\"
              href=\"#\"
              data-bs-toggle=\"dropdown\"
            >
              <img
                src=\"assets/img/profile-img.jpg\"
                alt=\"Profile\"
                class=\"rounded-circle\"
              />
              <span class=\"d-none d-md-block dropdown-toggle ps-2\"
                >K. Anderson</span
              > </a
            ><!-- End Profile Iamge Icon -->

            <ul
              class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\"
            >
              <li class=\"dropdown-header\">
                <h6>Kevin Anderson</h6>
                <span>Web Designer</span>
              </li>
              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li>
                <a
                  class=\"dropdown-item d-flex align-items-center\"
                  href=\"users-profile.html\"
                >
                  <i class=\"bi bi-person\"></i>
                  <span>My Profile</span>
                </a>
              </li>
              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li>
                <a
                  class=\"dropdown-item d-flex align-items-center\"
                  href=\"users-profile.html\"
                >
                  <i class=\"bi bi-gear\"></i>
                  <span>Account Settings</span>
                </a>
              </li>
              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li>
                <a
                  class=\"dropdown-item d-flex align-items-center\"
                  href=\"pages-faq.html\"
                >
                  <i class=\"bi bi-question-circle\"></i>
                  <span>Need Help?</span>
                </a>
              </li>
              <li>
                <hr class=\"dropdown-divider\" />
              </li>

              <li>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                  <i class=\"bi bi-box-arrow-right\"></i>
                  <span>Sign Out</span>
                </a>
              </li>
            </ul>
            <!-- End Profile Dropdown Items -->
          </li>
          <!-- End Profile Nav -->
        </ul>
      </nav>
      <!-- End Icons Navigation -->
    </header>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id=\"sidebar\" class=\"sidebar\">
      <ul class=\"sidebar-nav\" id=\"sidebar-nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"index.html\">
            <i class=\"bi bi-grid\"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <!-- End Dashboard Nav -->

        <li class=\"nav-item\">
          <a
            class=\"nav-link collapsed\"
            data-bs-target=\"#components-nav\"
            data-bs-toggle=\"collapse\"
            href=\"#\"
          >
            <i class=\"bi bi-menu-button-wide\"></i><span>Components</span
            ><i class=\"bi bi-chevron-down ms-auto\"></i>
          </a>
          <ul
            id=\"components-nav\"
            class=\"nav-content collapse\"
            data-bs-parent=\"#sidebar-nav\"
          >
            <li>
              <a href=\"components-alerts.html\">
                <i class=\"bi bi-circle\"></i><span>Alerts</span>
              </a>
            </li>
            <li>
              <a href=\"components-accordion.html\">
                <i class=\"bi bi-circle\"></i><span>Accordion</span>
              </a>
            </li>
            <li>
              <a href=\"components-badges.html\">
                <i class=\"bi bi-circle\"></i><span>Badges</span>
              </a>
            </li>
            <li>
              <a href=\"components-breadcrumbs.html\">
                <i class=\"bi bi-circle\"></i><span>Breadcrumbs</span>
              </a>
            </li>
            <li>
              <a href=\"components-buttons.html\">
                <i class=\"bi bi-circle\"></i><span>Buttons</span>
              </a>
            </li>
            <li>
              <a href=\"components-cards.html\">
                <i class=\"bi bi-circle\"></i><span>Cards</span>
              </a>
            </li>
            <li>
              <a href=\"components-carousel.html\">
                <i class=\"bi bi-circle\"></i><span>Carousel</span>
              </a>
            </li>
            <li>
              <a href=\"components-list-group.html\">
                <i class=\"bi bi-circle\"></i><span>List group</span>
              </a>
            </li>
            <li>
              <a href=\"components-modal.html\">
                <i class=\"bi bi-circle\"></i><span>Modal</span>
              </a>
            </li>
            <li>
              <a href=\"components-tabs.html\">
                <i class=\"bi bi-circle\"></i><span>Tabs</span>
              </a>
            </li>
            <li>
              <a href=\"components-pagination.html\">
                <i class=\"bi bi-circle\"></i><span>Pagination</span>
              </a>
            </li>
            <li>
              <a href=\"components-progress.html\">
                <i class=\"bi bi-circle\"></i><span>Progress</span>
              </a>
            </li>
            <li>
              <a href=\"components-spinners.html\">
                <i class=\"bi bi-circle\"></i><span>Spinners</span>
              </a>
            </li>
            <li>
              <a href=\"components-tooltips.html\">
                <i class=\"bi bi-circle\"></i><span>Tooltips</span>
              </a>
            </li>
          </ul>
        </li>
        <!-- End Components Nav -->

        <li class=\"nav-item\">
          <a
            class=\"nav-link collapsed\"
            data-bs-target=\"#forms-nav\"
            data-bs-toggle=\"collapse\"
            href=\"#\"
          >
            <i class=\"bi bi-journal-text\"></i><span>Forms</span
            ><i class=\"bi bi-chevron-down ms-auto\"></i>
          </a>
          <ul
            id=\"forms-nav\"
            class=\"nav-content collapse\"
            data-bs-parent=\"#sidebar-nav\"
          >
            <li>
              <a href=\"forms-elements.html\">
                <i class=\"bi bi-circle\"></i><span>Form Elements</span>
              </a>
            </li>
            <li>
              <a href=\"forms-layouts.html\">
                <i class=\"bi bi-circle\"></i><span>Form Layouts</span>
              </a>
            </li>
            <li>
              <a href=\"forms-editors.html\">
                <i class=\"bi bi-circle\"></i><span>Form Editors</span>
              </a>
            </li>
            <li>
              <a href=\"forms-validation.html\">
                <i class=\"bi bi-circle\"></i><span>Form Validation</span>
              </a>
            </li>
          </ul>
        </li>
        <!-- End Forms Nav -->

        <li class=\"nav-item\">
          <a
            class=\"nav-link collapsed\"
            data-bs-target=\"#tables-nav\"
            data-bs-toggle=\"collapse\"
            href=\"#\"
          >
            <i class=\"bi bi-layout-text-window-reverse\"></i><span>Tables</span
            ><i class=\"bi bi-chevron-down ms-auto\"></i>
          </a>
          <ul
            id=\"tables-nav\"
            class=\"nav-content collapse\"
            data-bs-parent=\"#sidebar-nav\"
          >
            <li>
              <a href=\"tables-general.html\">
                <i class=\"bi bi-circle\"></i><span>General Tables</span>
              </a>
            </li>
            <li>
              <a href=\"tables-data.html\">
                <i class=\"bi bi-circle\"></i><span>Data Tables</span>
              </a>
            </li>
          </ul>
        </li>
        <!-- End Tables Nav -->

        <li class=\"nav-item\">
          <a
            class=\"nav-link collapsed\"
            data-bs-target=\"#charts-nav\"
            data-bs-toggle=\"collapse\"
            href=\"#\"
          >
            <i class=\"bi bi-bar-chart\"></i><span>Charts</span
            ><i class=\"bi bi-chevron-down ms-auto\"></i>
          </a>
          <ul
            id=\"charts-nav\"
            class=\"nav-content collapse\"
            data-bs-parent=\"#sidebar-nav\"
          >
            <li>
              <a href=\"{{path('app_evenement_indexstat')}}\">
                <i class=\"bi bi-circle\"></i><span>Chart.js</span>
              </a>
            </li>
            <li>
              <a href=\"charts-apexcharts.html\">
                <i class=\"bi bi-circle\"></i><span>ApexCharts</span>
              </a>
            </li>
            <li>
              <a href=\"charts-echarts.html\">
                <i class=\"bi bi-circle\"></i><span>ECharts</span>
              </a>
            </li>
          </ul>
        </li>
        <!-- End Charts Nav -->

        <li class=\"nav-item\">
          <a
            class=\"nav-link collapsed\"
            data-bs-target=\"#icons-nav\"
            data-bs-toggle=\"collapse\"
            href=\"#\"
          >
            <i class=\"bi bi-gem\"></i><span>Icons</span
            ><i class=\"bi bi-chevron-down ms-auto\"></i>
          </a>
          <ul
            id=\"icons-nav\"
            class=\"nav-content collapse\"
            data-bs-parent=\"#sidebar-nav\"
          >
            <li>
              <a href=\"icons-bootstrap.html\">
                <i class=\"bi bi-circle\"></i><span>Bootstrap Icons</span>
              </a>
            </li>
            <li>
              <a href=\"icons-remix.html\">
                <i class=\"bi bi-circle\"></i><span>Remix Icons</span>
              </a>
            </li>
            <li>
              <a href=\"icons-boxicons.html\">
                <i class=\"bi bi-circle\"></i><span>Boxicons</span>
              </a>
            </li>
          </ul>
        </li>
        <!-- End Icons Nav -->

        <li class=\"nav-heading\">Pages</li>

        <li class=\"nav-item\">
          <a class=\"nav-link collapsed\" href=\"users-profile.html\">
            <i class=\"bi bi-person\"></i>
            <span>Profile</span>
          </a>
        </li>
        <!-- End Profile Page Nav -->

        <li class=\"nav-item\">
          <a class=\"nav-link collapsed\" href=\"pages-faq.html\">
            <i class=\"bi bi-question-circle\"></i>
            <span>F.A.Q</span>
          </a>
        </li>
        <!-- End F.A.Q Page Nav -->

        <li class=\"nav-item\">
          <a class=\"nav-link collapsed\" href=\"pages-contact.html\">
            <i class=\"bi bi-envelope\"></i>
            <span>Contact</span>
          </a>
        </li>
        <!-- End Contact Page Nav -->

        <li class=\"nav-item\">
          <a class=\"nav-link collapsed\" href=\"pages-register.html\">
            <i class=\"bi bi-card-list\"></i>
            <span>Register</span>
          </a>
        </li>
        <!-- End Register Page Nav -->

        <li class=\"nav-item\">
          <a class=\"nav-link collapsed\" href=\"pages-login.html\">
            <i class=\"bi bi-box-arrow-in-right\"></i>
            <span>Login</span>
          </a>
        </li>
        <!-- End Login Page Nav -->

        <li class=\"nav-item\">
          <a class=\"nav-link collapsed\" href=\"pages-error-404.html\">
            <i class=\"bi bi-dash-circle\"></i>
            <span>Error 404</span>
          </a>
        </li>
        <!-- End Error 404 Page Nav -->

        <li class=\"nav-item\">
          <a class=\"nav-link collapsed\" href=\"pages-blank.html\">
            <i class=\"bi bi-file-earmark\"></i>
            <span>Blank</span>
          </a>
        </li>
        <!-- End Blank Page Nav -->
      </ul>
    </aside>
    <!-- End Sidebar-->

    <main id=\"main\" class=\"main\">
      <div class=\"pagetitle\">
        <h1>Dashboard</h1>
        <nav>
          <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
            <li class=\"breadcrumb-item active\">Dashboard</li>
          </ol>
        </nav>
      </div>
      <!-- End Page Title -->

      <section class=\"section dashboard\">
        <div class=\"row\">
          <!-- Left side columns -->
          <div class=\"col-lg-6\">
            <div class=\"row\">
{% block body %} {% endblock %}



            </div>
          </div>
          <!-- End Left side columns -->

        
        </div>
      </section>
    </main>
    <!-- End #main -->


<!-- ======= Footer ======= -->
    <footer id=\"footer\" class=\"footer\">
      <div class=\"copyright\">
        &copy; Copyright <strong><span>NiceAdmin</span></strong
        >. All Rights Reserved
      </div>
      <div class=\"credits\">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
      </div>
    </footer>
    <!-- End Footer -->

    <a
      href=\"#\"
      class=\"back-to-top d-flex align-items-center justify-content-center\"
      ><i class=\"bi bi-arrow-up-short\"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src=\"{{asset('assetsB/vendor/apexcharts/apexcharts.min.js')}}\"></script>
    <script src=\"{{asset('assetsB/vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
    <script src=\"{{asset('assetsB/vendor/chart.js/chart.umd.js')}}\"></script>
    <script src=\"{{asset('assetsB/vendor/echarts/echarts.min.js')}}\"></script>
    <script src=\"{{asset('assetsB/vendor/quill/quill.min.js')}}\"></script>
    <script src=\"{{asset('assetsB/vendor/simple-datatables/simple-datatables.js')}}\"></script>
    <script src=\"{{asset('assetsB/vendor/tinymce/tinymce.min.js')}}\"></script>
    <script src=\"{{asset('assetsB/vendor/php-email-form/validate.js')}}\"></script>

    <!-- Template Main JS File -->
    <script src=\"{{asset('assetsB/js/main.js')}}\"></script>
  </body>
</html>
", "back.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\back.html.twig");
    }
}
