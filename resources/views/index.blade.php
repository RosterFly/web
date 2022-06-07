@extends('layouts.simple')

@section('content')
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
      <nav id="sidebar" aria-label="Main Navigation">
        <div class="bg-header-dark">
          <div class="content-header bg-white-5">
            <a class="fw-semibold text-white tracking-wide" href="{{route('user.index')}}">
              <span class="smini-hidden">
                Roster<span class="opacity-75">Fly</span>
              </span>
            </a>
            <div>
              <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on" onclick="Dashmix.layout('sidebar_style_toggle');Dashmix.layout('header_style_toggle');">
                <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
              </button>
              <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#dark-mode-toggler" data-class="far fa" onclick="Dashmix.layout('dark_mode_toggle');">
                <i class="far fa-moon" id="dark-mode-toggler"></i>
              </button>
            </div>
          </div>
        </div>

        <div class="js-sidebar-scroll">
          <div class="content-side">
            <ul class="nav-main">
              <li class="nav-main-item">
                <a class="nav-main-link active" href="be_pages_dashboard.html">
                  <i class="nav-main-link-icon fa fa-location-arrow"></i>
                  <span class="nav-main-link-name">Dashboard</span>
                  <span class="nav-main-link-badge badge rounded-pill bg-primary">8</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-clone"></i>
                  <span class="nav-main-link-name">Page Kits</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Generic</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_generic_blank.html">
                          <span class="nav-main-link-name">Blank</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_generic_blank_block.html">
                          <span class="nav-main-link-name">Blank (Block)</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_generic_search.html">
                          <span class="nav-main-link-name">Search</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_generic_profile.html">
                          <span class="nav-main-link-name">Profile</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_generic_profile_edit.html">
                          <span class="nav-main-link-name">Profile Edit</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_generic_inbox.html">
                          <span class="nav-main-link-name">Inbox</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_generic_invoice.html">
                          <span class="nav-main-link-name">Invoice</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_generic_faq.html">
                          <span class="nav-main-link-name">FAQ</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_generic_upgrade_plan.html">
                          <span class="nav-main-link-name">Upgrade Plan</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">e-Commerce</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_ecom_dashboard.html">
                          <span class="nav-main-link-name">Dashboard</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_ecom_orders.html">
                          <span class="nav-main-link-name">Orders</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_ecom_order.html">
                          <span class="nav-main-link-name">Order</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_ecom_products.html">
                          <span class="nav-main-link-name">Products</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_ecom_product_edit.html">
                          <span class="nav-main-link-name">Product Edit</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_ecom_customer.html">
                          <span class="nav-main-link-name">Customer</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Projects</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_projects_dashboard.html">
                          <span class="nav-main-link-name">Dashboard</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_projects_tasks.html">
                          <span class="nav-main-link-name">Project Tasks</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_projects_create.html">
                          <span class="nav-main-link-name">Create</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_projects_edit.html">
                          <span class="nav-main-link-name">Edit</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Jobs</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_jobs_dashboard.html">
                          <span class="nav-main-link-name">Dashboard</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_jobs_listing.html">
                          <span class="nav-main-link-name">Listing</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_jobs_apply.html">
                          <span class="nav-main-link-name">Apply</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_jobs_post.html">
                          <span class="nav-main-link-name">Post</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Education</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_education_dashboard.html">
                          <span class="nav-main-link-name">Dashboard</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_education_course.html">
                          <span class="nav-main-link-name">Course</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_education_authors.html">
                          <span class="nav-main-link-name">Authors</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Forum</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_forum_categories.html">
                          <span class="nav-main-link-name">Categories</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_forum_topics.html">
                          <span class="nav-main-link-name">Topics</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_forum_discussion.html">
                          <span class="nav-main-link-name">Discussion</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Blog</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_blog_classic.html">
                          <span class="nav-main-link-name">Classic</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_blog_list.html">
                          <span class="nav-main-link-name">List</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_blog_grid.html">
                          <span class="nav-main-link-name">Grid</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_blog_story.html">
                          <span class="nav-main-link-name">Story</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_blog_story_cover.html">
                          <span class="nav-main-link-name">Story Cover</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_blog_post_manage.html">
                          <span class="nav-main-link-name">Manage Posts</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_blog_post_add.html">
                          <span class="nav-main-link-name">Add Post</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_blog_post_edit.html">
                          <span class="nav-main-link-name">Edit Post</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Boxed Backend</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/bd_dashboard.html">
                          <span class="nav-main-link-name">Dashboard</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/bd_search.html">
                          <span class="nav-main-link-name">Search</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/bd_simple_1.html">
                          <span class="nav-main-link-name">Simple 1</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/bd_simple_2.html">
                          <span class="nav-main-link-name">Simple 2</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/bd_image_1.html">
                          <span class="nav-main-link-name">Image 1</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/bd_image_2.html">
                          <span class="nav-main-link-name">Image 2</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/bd_video_1.html">
                          <span class="nav-main-link-name">Video 1</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/bd_video_2.html">
                          <span class="nav-main-link-name">Video 2</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Special</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/op_maintenance.html">
                          <span class="nav-main-link-name">Maintenance</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/op_status.html">
                          <span class="nav-main-link-name">Status</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/op_installation.html">
                          <span class="nav-main-link-name">Installation</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/op_coming_soon.html">
                          <span class="nav-main-link-name">Coming Soon</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/op_coming_soon_2.html">
                          <span class="nav-main-link-name">Coming Soon 2</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="nav-main-heading">Base</li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-border-all"></i>
                  <span class="nav-main-link-name">Blocks</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_blocks_styles.html">
                      <span class="nav-main-link-name">Styles</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_blocks_options.html">
                      <span class="nav-main-link-name">Options</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_blocks_forms.html">
                      <span class="nav-main-link-name">Forms</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_blocks_themed.html">
                      <span class="nav-main-link-name">Themed</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_blocks_api.html">
                      <span class="nav-main-link-name">API</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-boxes"></i>
                  <span class="nav-main-link-name">Widgets</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_widgets_tiles.html">
                      <span class="nav-main-link-name">Tiles</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_widgets_stats.html">
                      <span class="nav-main-link-name">Statistics</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_widgets_media.html">
                      <span class="nav-main-link-name">Media</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_widgets_users.html">
                      <span class="nav-main-link-name">Users</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_widgets_blog.html">
                      <span class="nav-main-link-name">Blog</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_widgets_various.html">
                      <span class="nav-main-link-name">Various</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-vector-square"></i>
                  <span class="nav-main-link-name">Layout</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Page</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_layout_page_default.html">
                          <span class="nav-main-link-name">Default</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_layout_page_flipped.html">
                          <span class="nav-main-link-name">Flipped</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_layout_page_native_scrolling.html">
                          <span class="nav-main-link-name">Native Scrolling</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Main Content</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_layout_content_main_full_width.html">
                          <span class="nav-main-link-name">Full Width</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_layout_content_main_narrow.html">
                          <span class="nav-main-link-name">Narrow</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_layout_content_main_boxed.html">
                          <span class="nav-main-link-name">Boxed</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Side Content</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_layout_content_side_left.html">
                          <span class="nav-main-link-name">Left</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_layout_content_side_right.html">
                          <span class="nav-main-link-name">Right</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Hero</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                          <span class="nav-main-link-name">Color</span>
                        </a>
                        <ul class="nav-main-submenu">
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_layout_hero_color_dark.html">
                              <span class="nav-main-link-name">Dark</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_layout_hero_color_light.html">
                              <span class="nav-main-link-name">Light</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                          <span class="nav-main-link-name">Image</span>
                        </a>
                        <ul class="nav-main-submenu">
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_layout_hero_image_dark.html">
                              <span class="nav-main-link-name">Dark</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_layout_hero_image_light.html">
                              <span class="nav-main-link-name">Light</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                          <span class="nav-main-link-name">Video</span>
                        </a>
                        <ul class="nav-main-submenu">
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_layout_hero_video_dark.html">
                              <span class="nav-main-link-name">Dark</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_layout_hero_video_light.html">
                              <span class="nav-main-link-name">Light</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Header</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                          <span class="nav-main-link-name">Fixed</span>
                        </a>
                        <ul class="nav-main-submenu">
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_layout_header_fixed_light.html">
                              <span class="nav-main-link-name">Light</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_layout_header_fixed_light_glass.html">
                              <span class="nav-main-link-name">Light Glass</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_layout_header_fixed_dark.html">
                              <span class="nav-main-link-name">Dark</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_layout_header_fixed_dark_glass.html">
                              <span class="nav-main-link-name">Dark Glass</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                          <span class="nav-main-link-name">Static</span>
                        </a>
                        <ul class="nav-main-submenu">
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_layout_header_static_light.html">
                              <span class="nav-main-link-name">Light</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_layout_header_static_light_glass.html">
                              <span class="nav-main-link-name">Light Glass</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_layout_header_static_dark.html">
                              <span class="nav-main-link-name">Dark</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_layout_header_static_dark_glass.html">
                              <span class="nav-main-link-name">Dark Glass</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Footer</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_layout_footer_static.html">
                          <span class="nav-main-link-name">Static</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_layout_footer_fixed.html">
                          <span class="nav-main-link-name">Fixed</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Sidebar</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_layout_sidebar_mini.html">
                          <span class="nav-main-link-name">Mini</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_layout_sidebar_light.html">
                          <span class="nav-main-link-name">Light</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_layout_sidebar_dark.html">
                          <span class="nav-main-link-name">Dark</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_layout_sidebar_hidden.html">
                          <span class="nav-main-link-name">Hidden</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Side Overlay</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_layout_side_overlay_visible.html">
                          <span class="nav-main-link-name">Visible</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_layout_side_overlay_mode_hover.html">
                          <span class="nav-main-link-name">Hover Mode</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_layout_side_overlay_no_page_overlay.html">
                          <span class="nav-main-link-name">No Page Overlay</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_layout_api.html">
                      <span class="nav-main-link-name">API</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-heading">Interface</li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-flask"></i>
                  <span class="nav-main-link-name">Elements</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_ui_icons.html">
                      <span class="nav-main-link-name">Icon Packs</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_ui_grid.html">
                      <span class="nav-main-link-name">Grid</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_ui_typography.html">
                      <span class="nav-main-link-name">Typography</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_ui_navigation.html">
                      <span class="nav-main-link-name">Navigation</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_ui_navigation_horizontal.html">
                      <span class="nav-main-link-name">Horizontal Nav</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_ui_mega_menu.html">
                      <span class="nav-main-link-name">Mega Menu</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_ui_tabs.html">
                      <span class="nav-main-link-name">Tabs</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_ui_buttons.html">
                      <span class="nav-main-link-name">Buttons</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_ui_buttons_groups.html">
                      <span class="nav-main-link-name">Button Groups</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_ui_dropdowns.html">
                      <span class="nav-main-link-name">Dropdowns</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_ui_progress.html">
                      <span class="nav-main-link-name">Progress</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_ui_alerts.html">
                      <span class="nav-main-link-name">Alerts</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_ui_tooltips.html">
                      <span class="nav-main-link-name">Tooltips</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_ui_popovers.html">
                      <span class="nav-main-link-name">Popovers</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_ui_accordion.html">
                      <span class="nav-main-link-name">Accordion</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_ui_modals.html">
                      <span class="nav-main-link-name">Modals</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_ui_images.html">
                      <span class="nav-main-link-name">Images Overlay</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_ui_timeline.html">
                      <span class="nav-main-link-name">Timeline</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_ui_ribbons.html">
                      <span class="nav-main-link-name">Ribbons</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_ui_animations.html">
                      <span class="nav-main-link-name">Animations</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_ui_backgrounds.html">
                      <span class="nav-main-link-name">Backgrounds</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_ui_color_themes.html">
                      <span class="nav-main-link-name">Color Themes</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-grip-horizontal"></i>
                  <span class="nav-main-link-name">Tables</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_tables_styles.html">
                      <span class="nav-main-link-name">Styles</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_tables_responsive.html">
                      <span class="nav-main-link-name">Responsive</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_tables_helpers.html">
                      <span class="nav-main-link-name">Helpers</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_tables_pricing.html">
                      <span class="nav-main-link-name">Pricing</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_tables_datatables.html">
                      <span class="nav-main-link-name">DataTables</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-sticky-note"></i>
                  <span class="nav-main-link-name">Forms</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_forms_elements.html">
                      <span class="nav-main-link-name">Elements</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_forms_layouts.html">
                      <span class="nav-main-link-name">Layouts</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_forms_input_groups.html">
                      <span class="nav-main-link-name">Input Groups</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_forms_plugins.html">
                      <span class="nav-main-link-name">Plugins</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_forms_editors.html">
                      <span class="nav-main-link-name">Editors</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">CKEditor 5</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_forms_ckeditor5_classic.html">
                          <span class="nav-main-link-name">Classic</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_forms_ckeditor5_inline.html">
                          <span class="nav-main-link-name">Inline</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_forms_validation.html">
                      <span class="nav-main-link-name">Validation</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-heading">Extend</li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-wrench"></i>
                  <span class="nav-main-link-name">Components</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_comp_chat.html">
                      <span class="nav-main-link-name">Chat</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_comp_onboarding.html">
                      <span class="nav-main-link-name">Onboarding</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_comp_nestable.html">
                      <span class="nav-main-link-name">Nestable</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_comp_dialogs.html">
                      <span class="nav-main-link-name">Dialogs</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_comp_notifications.html">
                      <span class="nav-main-link-name">Notifications</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_comp_loaders.html">
                      <span class="nav-main-link-name">Loaders</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_comp_charts.html">
                      <span class="nav-main-link-name">Charts</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_comp_gallery.html">
                      <span class="nav-main-link-name">Gallery</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_comp_sliders.html">
                      <span class="nav-main-link-name">Sliders</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_comp_carousel.html">
                      <span class="nav-main-link-name">Carousel</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_comp_rating.html">
                      <span class="nav-main-link-name">Rating</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_comp_appear.html">
                      <span class="nav-main-link-name">Appear</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_comp_calendar.html">
                      <span class="nav-main-link-name">Calendar</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_comp_image_cropper.html">
                      <span class="nav-main-link-name">Image Cropper</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_comp_maps_vector.html">
                      <span class="nav-main-link-name">Vector Maps</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_comp_syntax_highlighting.html">
                      <span class="nav-main-link-name">Syntax Highlighting</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-cog"></i>
                  <span class="nav-main-link-name">Main Menu</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="#">
                      <i class="nav-main-link-icon fa fa-inbox"></i>
                      <span class="nav-main-link-name">1.1 Item</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="#">
                      <i class="nav-main-link-icon fa fa-fire"></i>
                      <span class="nav-main-link-name">1.2 Item</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="#">
                      <i class="nav-main-link-icon fa fa-share-alt"></i>
                      <span class="nav-main-link-name">1.3 Item</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Sub Level 2</span>
                      <span class="nav-main-link-badge badge rounded-pill bg-primary">3</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="#">
                          <i class="nav-main-link-icon fa fa-tag"></i>
                          <span class="nav-main-link-name">2.1 Item</span>
                          <span class="nav-main-link-badge badge rounded-pill bg-info">2</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="#">
                          <i class="nav-main-link-icon fa fa-chart-pie"></i>
                          <span class="nav-main-link-name">2.2 Item</span>
                          <span class="nav-main-link-badge badge rounded-pill bg-danger">2</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="#">
                          <i class="nav-main-link-icon fa fa-sticky-note"></i>
                          <span class="nav-main-link-name">2.3 Item</span>
                          <span class="nav-main-link-badge badge rounded-pill bg-warning">3</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                          <span class="nav-main-link-name">Sub Level 3</span>
                        </a>
                        <ul class="nav-main-submenu">
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="#">
                              <i class="nav-main-link-icon fa fa-map"></i>
                              <span class="nav-main-link-name">3.1 Item</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="#">
                              <i class="nav-main-link-icon fa fa-coffee"></i>
                              <span class="nav-main-link-name">3.2 Item</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="#">
                              <i class="nav-main-link-icon fa fa-user-astronaut"></i>
                              <span class="nav-main-link-name">3.3 Item</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                              <span class="nav-main-link-name">Sub Level 4</span>
                            </a>
                            <ul class="nav-main-submenu">
                              <li class="nav-main-item">
                                <a class="nav-main-link" href="#">
                                  <i class="nav-main-link-icon fa fa-heart"></i>
                                  <span class="nav-main-link-name">4.1 Item</span>
                                </a>
                              </li>
                              <li class="nav-main-item">
                                <a class="nav-main-link" href="#">
                                  <i class="nav-main-link-icon fa fa-search"></i>
                                  <span class="nav-main-link-name">4.2 Item</span>
                                </a>
                              </li>
                              <li class="nav-main-item">
                                <a class="nav-main-link" href="#">
                                  <i class="nav-main-link-icon fa fa-microphone"></i>
                                  <span class="nav-main-link-name">4.3 Item</span>
                                </a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="nav-main-heading">Pages</li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-rocket"></i>
                  <span class="nav-main-link-name">Dashboards</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_dashboard_all.html">
                      <span class="nav-main-link-name">All</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_dashboard_v1.html">
                      <span class="nav-main-link-name">Corporate v1</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/db_social.html">
                      <span class="nav-main-link-name">Social</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/db_messages.html">
                      <span class="nav-main-link-name">Messages</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/db_dark.html">
                      <span class="nav-main-link-name">Dark</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/db_minimal.html">
                      <span class="nav-main-link-name">Minimal</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/db_modern.html">
                      <span class="nav-main-link-name">Modern</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/db_classic_boxed.html">
                      <span class="nav-main-link-name">Classic Boxed</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/db_banking.html">
                      <span class="nav-main-link-name">Banking</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/db_crypto.html">
                      <span class="nav-main-link-name">Crypto</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/db_hosting.html">
                      <span class="nav-main-link-name">Hosting</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/db_booking.html">
                      <span class="nav-main-link-name">Booking</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/db_gaming.html">
                      <span class="nav-main-link-name">Gaming</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/db_tasks.html">
                      <span class="nav-main-link-name">Tasks</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/db_medical.html">
                      <span class="nav-main-link-name">Medical</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/db_travel.html">
                      <span class="nav-main-link-name">Travel</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/db_social_compact.html">
                      <span class="nav-main-link-name">Social Compact</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/db_chat.html">
                      <span class="nav-main-link-name">Chat</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/db_analytics.html">
                      <span class="nav-main-link-name">Analytics</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/db_corporate_slim.html">
                      <span class="nav-main-link-name">Corporate Slim</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/db_wp_post.html">
                      <span class="nav-main-link-name">WP Post</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/db_file_hosting.html">
                      <span class="nav-main-link-name">File Hosting</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-user-friends"></i>
                  <span class="nav-main-link-name">Auth</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_auth_all.html">
                      <span class="nav-main-link-name">All</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/op_auth_signin.html">
                      <span class="nav-main-link-name">Sign In</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/op_auth_signin_box.html">
                      <span class="nav-main-link-name">Sign In Box</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/op_auth_signin_box_alt.html">
                      <span class="nav-main-link-name">Sign In Box Alt</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/op_auth_signup.html">
                      <span class="nav-main-link-name">Sign Up</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/op_auth_signup_box.html">
                      <span class="nav-main-link-name">Sign Up Box</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/op_auth_signup_box_alt.html">
                      <span class="nav-main-link-name">Sign Up Box Alt</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/op_auth_lock.html">
                      <span class="nav-main-link-name">Lock Screen</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/op_auth_lock_box.html">
                      <span class="nav-main-link-name">Lock Screen Box</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/op_auth_lock_box_alt.html">
                      <span class="nav-main-link-name">Lock Screen Box Alt</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/op_auth_reminder.html">
                      <span class="nav-main-link-name">Pass Reminder</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/op_auth_reminder_box.html">
                      <span class="nav-main-link-name">Pass Reminder Box</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/op_auth_reminder_box_alt.html">
                      <span class="nav-main-link-name">Pass Reminder Box Alt</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-ghost"></i>
                  <span class="nav-main-link-name">Error</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/be_pages_error_all.html">
                      <span class="nav-main-link-name">All</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/op_error_400.html">
                      <span class="nav-main-link-name">400</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/op_error_401.html">
                      <span class="nav-main-link-name">401</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/op_error_403.html">
                      <span class="nav-main-link-name">403</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/op_error_404.html">
                      <span class="nav-main-link-name">404</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/op_error_500.html">
                      <span class="nav-main-link-name">500</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/op_error_503.html">
                      <span class="nav-main-link-name">503</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-coffee"></i>
                  <span class="nav-main-link-name">Get Started</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/gs_backend.html">
                      <span class="nav-main-link-name">Backend</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/gs_backend_boxed.html">
                      <span class="nav-main-link-name">Backend Boxed</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/gs_landing.html">
                      <span class="nav-main-link-name">Landing</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/gs_rtl_backend.html">
                      <span class="nav-main-link-name">RTL Backend</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/gs_rtl_backend_boxed.html">
                      <span class="nav-main-link-name">RTL Backend Boxed</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="../../../../Downloads/dashmix-51/Dashmix%205.1%20by%20pixelcave/01%20-%20Dashmix%20Source%20(HTML)/src/gs_rtl_landing.html">
                      <span class="nav-main-link-name">RTL Landing</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

        <header id="page-header">
            <div class="content-header">
                <div class="space-x-1">
                </div>
                <div class="space-x-1">
                    <!-- Opciones Usuario-->
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-user d-sm-none"></i>
                            <span class="d-none d-sm-inline-block">{{ Auth::user()->name }} {{Auth::user()->surname}}</span>
                            <i class="fa fa-fw fa-angle-down opacity-50 ms-1 d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
                            <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">
                                Application Status
                            </div>
                            <div class="p-2">
                                <a class="dropdown-item" href="{{route('status')}}">
                                    <i class="fa-solid fa-flask"></i>&nbsp;&nbsp;Heartbeat
                                </a>
                            </div>
                            <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">
                                User Options
                            </div>
                            <div class="p-2">
                                <a class="dropdown-item" href="{{route('edit.profile')}}">
                                    <i class="far fa-fw fa-user me-1"></i> Edit Profile
                                </a>
                                <!--Logout button-->
                                <div role="separator" class="dropdown-divider"></div>
                                <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                    <button class="dropdown-item" type="submit">
                                        <i class="far fa-fw fa-arrow-alt-circle-left me-1"></i> Sign Out
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Notificationes -->
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn btn-alt-secondary" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-bell"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                            <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">
                                Notifications
                            </div>
                            <ul class="nav-items my-2">
                                @foreach($notifications=DB::table('notifications')->orderBy('created_at', 'desc')->limit(5)->get() as $notification)
                                <li>
                                    <a class="d-flex text-dark py-2">
                                        <div class="flex-shrink-0 mx-3">
                                            <i class="{{$notification->fa_icon}}"></i>
                                        </div>
                                        <div class="flex-grow-1 fs-sm pe-2">
                                            <div class="fw-semibold">{{$notification->description}}</div>
                                            <div class="text-muted">{{Carbon::parse($date=$notification->created_at)->addHours(-2)->diffForHumans()}}</div>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- Lenguaje -->
                    <div class="dropdown d-inline-block">
                        @if(app()->getLocale()=='es')

                            <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="flag-icon flag-icon-es"></i>
                                <i class="fa fa-fw fa-angle-down opacity-50 ms-1 d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
                                <div class="p-2">
                                    <a class="dropdown-item" href="{{url('locale/en')}}">
                                        <i class="flag-icon flag-icon-us"></i> English
                                    </a>
                                </div>
                            </div>
                        @elseif(app()->getLocale()=='en')
                            <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="flag-icon flag-icon-us"></i>
                                <i class="fa fa-fw fa-angle-down opacity-50 ms-1 d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
                                <div class="p-2">
                                    <a class="dropdown-item" href="{{url('locale/es')}}">
                                        <i class="flag-icon flag-icon-es"></i> Español
                                    </a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </header>

      <main id="main-container">
        <div class="content">
          <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-start">
            <div>
              <h1 class="h3 mb-1">
                RosterFly
              </h1>
              <p class="fw-medium mb-0 text-muted">
                Welcome, {{ Auth::user()->name }} {{Auth::user()->surname}}!
              </p>
            </div>
          </div>
        </div>
        <div class="content">
          <div class="row items-push">
            <div class="col-sm-6 col-xl-4">
              <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                <div class="block-content block-content-full flex-grow-1">
                  <div class="item rounded-3 bg-body mx-auto my-3">
                    <i class="fa fa-users fa-lg text-primary"></i>
                  </div>
                  <div class="fs-1 fw-bold">{{DB::table('users')->count()}}</div>
                  <div class="text-muted mb-3">Registered Users</div>
                  <div class="d-inline-block px-3 py-1 rounded-pill fs-sm fw-semibold text-success bg-success-light">
                    <i class="fa fa-caret-up me-1"></i>
                    19.2%
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                <div class="block-content block-content-full flex-grow-1">
                  <div class="item rounded-3 bg-body mx-auto my-3">
                    <i class="fa fa-level-up-alt fa-lg text-primary"></i>
                  </div>
                  <div class="fs-1 fw-bold">14.6%</div>
                  <div class="text-muted mb-3">Managed Flights</div>
                  <div class="d-inline-block px-3 py-1 rounded-pill fs-sm fw-semibold text-danger bg-danger-light">
                    <i class="fa fa-caret-down me-1"></i>
                    2.3%
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                <div class="block-content block-content-full flex-grow-1">
                  <div class="item rounded-3 bg-body mx-auto my-3">
                    <i class="fa fa-chart-line fa-lg text-primary"></i>
                  </div>
                  <div class="fs-1 fw-bold">386</div>
                  <div class="text-muted mb-3">Passengers Carried</div>
                  <div class="d-inline-block px-3 py-1 rounded-pill fs-sm fw-semibold text-success bg-success-light">
                    <i class="fa fa-caret-up me-1"></i>
                    7.9%
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">
                Store Growth
              </h3>
              <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                  <i class="si si-refresh"></i>
                </button>
                <button type="button" class="btn-block-option">
                  <i class="si si-wrench"></i>
                </button>
              </div>
            </div>
            <div class="block-content block-content-full">
              <div class="row">
                <div class="col-md-5 col-xl-4 d-md-flex align-items-md-center">
                  <div class="p-md-2 p-lg-3">
                    <div class="py-3">
                      <div class="fs-1 fw-bold">1,430</div>
                      <div class="fw-semibold">Your new website Customers</div>
                      <div class="py-3 d-flex align-items-center">
                        <div class="bg-success-light p-2 rounded me-3">
                          <i class="fa fa-fw fa-arrow-up text-success"></i>
                        </div>
                        <p class="mb-0">
                          You have a <span class="fw-semibold text-success">12% customer growth</span> in the last 30 days. This is amazing, keep it up!
                        </p>
                      </div>
                    </div>
                    <div class="py-3">
                      <div class="fs-1 fw-bold">65</div>
                      <div class="fw-semibold">New products added</div>
                      <div class="py-3 d-flex align-items-center">
                        <div class="bg-success-light p-2 rounded me-3">
                          <i class="fa fa-fw fa-arrow-up text-success"></i>
                        </div>
                        <p class="mb-0">
                          You’ve managed to add <span class="fw-semibold text-success">12% more products</span> in the last 30 days. Store’s portfolio is growing!
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-7 col-xl-8 d-md-flex align-items-md-center">
                  <div class="p-md-2 p-lg-3 w-100">

                    <canvas id="js-chartjs-analytics-bars"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>

            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        Store Growth
                    </h3>
                </div>
                <div class="block-content">
                    <table class="table table-striped table-hover table-borderless table-vcenter fs-sm">
                        <thead>
                        <tr class="text-uppercase">
                            <th>Product</th>
                            <th class="d-none d-xl-table-cell">Date</th>
                            <th>Status</th>
                            <th class="d-none d-sm-table-cell text-end" style="width: 120px;">Price</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <span class="fw-semibold">iPhone 11 Pro</span>
                            </td>
                            <td class="d-none d-xl-table-cell">
                                <span class="fs-sm text-muted">today</span>
                            </td>
                            <td>
                                <span class="fw-semibold text-warning">Pending..</span>
                            </td>
                            <td class="d-none d-sm-table-cell text-end fw-medium">
                                $1199,99
                            </td>
                            <td class="text-center text-nowrap fw-medium">
                                <a href="javascript:void(0)">
                                    View
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="fw-semibold">MacBook Pro 15"</span>
                            </td>
                            <td class="d-none d-xl-table-cell">
                                <span class="fs-sm text-muted">today</span>
                            </td>
                            <td>
                                <span class="fw-semibold text-warning">Pending..</span>
                            </td>
                            <td class="d-none d-sm-table-cell text-end fw-medium">
                                $2.299,00
                            </td>
                            <td class="text-center text-nowrap fw-medium">
                                <a href="javascript:void(0)">
                                    View
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="fw-semibold">Nvidia GTX 2080 Ti</span>
                            </td>
                            <td class="d-none d-xl-table-cell">
                                <span class="fs-sm text-muted">today</span>
                            </td>
                            <td>
                                <span class="fw-semibold text-warning">Pending..</span>
                            </td>
                            <td class="d-none d-sm-table-cell text-end fw-medium">
                                $1200,00
                            </td>
                            <td class="text-center text-nowrap fw-medium">
                                <a href="javascript:void(0)">
                                    View
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="fw-semibold">Playstation 4 Pro</span>
                            </td>
                            <td class="d-none d-xl-table-cell">
                                <span class="fs-sm text-muted">today</span>
                            </td>
                            <td>
                                <span class="fw-semibold text-danger">Canceled</span>
                            </td>
                            <td class="d-none d-sm-table-cell text-end fw-medium">
                                $399,00
                            </td>
                            <td class="text-center text-nowrap fw-medium">
                                <a href="javascript:void(0)">
                                    View
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="fw-semibold">Nintendo Switch</span>
                            </td>
                            <td class="d-none d-xl-table-cell">
                                <span class="fs-sm text-muted">yesterday</span>
                            </td>
                            <td>
                                <span class="fw-semibold text-success">Completed</span>
                            </td>
                            <td class="d-none d-sm-table-cell text-end fw-medium">
                                $349,00
                            </td>
                            <td class="text-center text-nowrap fw-medium">
                                <a href="javascript:void(0)">
                                    View
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="fw-semibold">iPhone 11</span>
                            </td>
                            <td class="d-none d-xl-table-cell">
                                <span class="fs-sm text-muted">yesterday</span>
                            </td>
                            <td>
                                <span class="fw-semibold text-success">Completed</span>
                            </td>
                            <td class="d-none d-sm-table-cell text-end fw-medium">
                                $999,00
                            </td>
                            <td class="text-center text-nowrap fw-medium">
                                <a href="javascript:void(0)">
                                    View
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="fw-semibold">Airpods Pro</span>
                            </td>
                            <td class="d-none d-xl-table-cell">
                                <span class="fs-sm text-muted">yesterday</span>
                            </td>
                            <td>
                                <span class="fw-semibold text-success">Completed</span>
                            </td>
                            <td class="d-none d-sm-table-cell text-end fw-medium">
                                $39,99
                            </td>
                            <td class="text-center text-nowrap fw-medium">
                                <a href="javascript:void(0)">
                                    View
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="fw-semibold">Xbox One X</span>
                            </td>
                            <td class="d-none d-xl-table-cell">
                                <span class="fs-sm text-muted">yesterday</span>
                            </td>
                            <td>
                                <span class="fw-semibold text-success">Completed</span>
                            </td>
                            <td class="d-none d-sm-table-cell text-end fw-medium">
                                $499,00
                            </td>
                            <td class="text-center text-nowrap fw-medium">
                                <a href="javascript:void(0)">
                                    View
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>


          <div class="row">
            <div class="col-md-8">
              <div class="block block-rounded block-mode-loading-refresh">
                <div class="block-header block-header-default">
                  <h3 class="block-title">
                    Latest Orders
                  </h3>
                  <div class="block-options">
                    <div class="dropdown">
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="javascript:void(0)">
                          <i class="far fa-fw fa-dot-circle opacity-50 me-1"></i> Pending
                        </a>
                        <a class="dropdown-item" href="javascript:void(0)">
                          <i class="far fa-fw fa-times-circle opacity-50 me-1"></i> Canceled
                        </a>
                        <a class="dropdown-item" href="javascript:void(0)">
                          <i class="far fa-fw fa-check-circle opacity-50 me-1"></i> Completed
                        </a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)">
                          <i class="fa fa-fw fa-eye opacity-50 me-1"></i> View All
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="block-content">
                  <table class="table table-striped table-hover table-borderless table-vcenter fs-sm">
                    <thead>
                      <tr class="text-uppercase">
                        <th>Product</th>
                        <th class="d-none d-xl-table-cell">Date</th>
                        <th>Status</th>
                        <th class="d-none d-sm-table-cell text-end" style="width: 120px;">Price</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <span class="fw-semibold">iPhone 11 Pro</span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                          <span class="fs-sm text-muted">today</span>
                        </td>
                        <td>
                          <span class="fw-semibold text-warning">Pending..</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-end fw-medium">
                          $1199,99
                        </td>
                        <td class="text-center text-nowrap fw-medium">
                          <a href="javascript:void(0)">
                            View
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">MacBook Pro 15"</span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                          <span class="fs-sm text-muted">today</span>
                        </td>
                        <td>
                          <span class="fw-semibold text-warning">Pending..</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-end fw-medium">
                          $2.299,00
                        </td>
                        <td class="text-center text-nowrap fw-medium">
                          <a href="javascript:void(0)">
                            View
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">Nvidia GTX 2080 Ti</span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                          <span class="fs-sm text-muted">today</span>
                        </td>
                        <td>
                          <span class="fw-semibold text-warning">Pending..</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-end fw-medium">
                          $1200,00
                        </td>
                        <td class="text-center text-nowrap fw-medium">
                          <a href="javascript:void(0)">
                            View
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">Playstation 4 Pro</span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                          <span class="fs-sm text-muted">today</span>
                        </td>
                        <td>
                          <span class="fw-semibold text-danger">Canceled</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-end fw-medium">
                          $399,00
                        </td>
                        <td class="text-center text-nowrap fw-medium">
                          <a href="javascript:void(0)">
                            View
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">Nintendo Switch</span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                          <span class="fs-sm text-muted">yesterday</span>
                        </td>
                        <td>
                          <span class="fw-semibold text-success">Completed</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-end fw-medium">
                          $349,00
                        </td>
                        <td class="text-center text-nowrap fw-medium">
                          <a href="javascript:void(0)">
                            View
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">iPhone 11</span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                          <span class="fs-sm text-muted">yesterday</span>
                        </td>
                        <td>
                          <span class="fw-semibold text-success">Completed</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-end fw-medium">
                          $999,00
                        </td>
                        <td class="text-center text-nowrap fw-medium">
                          <a href="javascript:void(0)">
                            View
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">Airpods Pro</span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                          <span class="fs-sm text-muted">yesterday</span>
                        </td>
                        <td>
                          <span class="fw-semibold text-success">Completed</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-end fw-medium">
                          $39,99
                        </td>
                        <td class="text-center text-nowrap fw-medium">
                          <a href="javascript:void(0)">
                            View
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">Xbox One X</span>
                        </td>
                        <td class="d-none d-xl-table-cell">
                          <span class="fs-sm text-muted">yesterday</span>
                        </td>
                        <td>
                          <span class="fw-semibold text-success">Completed</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-end fw-medium">
                          $499,00
                        </td>
                        <td class="text-center text-nowrap fw-medium">
                          <a href="javascript:void(0)">
                            View
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light fs-sm text-center">
                  <a class="fw-medium" href="javascript:void(0)">
                    View all orders
                    <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-4 d-flex flex-column">
              <div class="block block-rounded">
                <div class="block-content block-content-full d-flex justify-content-between align-items-center flex-grow-1">
                  <div class="me-3">
                    <p class="fs-3 fw-bold mb-0">
                      35,698
                    </p>
                    <p class="text-muted mb-0">
                      Completed orders
                    </p>
                  </div>
                  <div class="item rounded-circle bg-body">
                    <i class="fa fa-check fa-lg text-primary"></i>
                  </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light fs-sm text-center">
                  <a class="fw-medium" href="javascript:void(0)">
                    View Archive
                    <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                  </a>
                </div>
              </div>
              <div class="block block-rounded text-center d-flex flex-column flex-grow-1">
                <div class="block-content block-content-full d-flex align-items-center flex-grow-1">
                  <div class="w-100">
                    <div class="item rounded-3 bg-body mx-auto my-3">
                      <i class="fa fa-archive fa-lg text-primary"></i>
                    </div>
                    <div class="fs-1 fw-bold">75</div>
                    <div class="text-muted mb-3">Products out of stock</div>
                    <div class="d-inline-block px-3 py-1 rounded-pill fs-sm fw-semibold text-warning bg-warning-light">
                      5% of portfolio
                    </div>
                  </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
                  <a class="fw-medium" href="javascript:void(0)">
                    Order supplies
                    <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>

      <footer id="page-footer" class="bg-body-light">
        <div class="content py-0">
          <div class="row fs-sm">
            <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-end">
                @lang('index.copyright')
            </div>
          </div>
        </div>
      </footer>
    </div>
@endsection
