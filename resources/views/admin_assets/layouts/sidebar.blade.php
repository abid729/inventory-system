<div id="sidebar" class="sidebar sidebar-fixed expandable sidebar-color sidebar-darkblue sidebar-top sidebar-backdrop has-open" data-swipe="true" data-dismiss="true">
  <div class="sidebar-inner">

    <div class="flex-grow-1 ace-scroll" data-ace-scroll="{}">

      <div class="sidebar-section my-2">
        <div class="sidebar-section-item fadeable-left">

          <div class="fadeinable sidebar-shortcuts-mini">
            <span class="btn btn-outline-primary border-2 text-white radius-2"></span>
            <span class="btn btn-outline-primary border-2 text-white radius-2"></span>
            <span class="btn btn-outline-primary border-2 text-white radius-2"></span>
            <span class="btn btn-outline-primary border-2 text-white radius-2"></span>
          </div>

          <div class="fadeable">
            <div class="sub-arrow"></div>
            <div>
              <button class="btn px-25 py-2 text-95 btn-outline-primary border-2 text-white radius-2">
                <i class="fa fa-signal"></i>
              </button>

              <button class="btn px-25 py-2 text-95 btn-outline-primary border-2 text-white radius-2">
                <i class="fa fa-edit"></i>
              </button>

              <button class="btn px-25 py-2 text-95 btn-outline-primary border-2 text-white radius-2">
                <i class="fa fa-users"></i>
              </button>

              <button class="btn px-25 py-2 text-95 btn-outline-primary border-2 text-white radius-2">
                <i class="fa fa-cogs"></i>
              </button>
            </div>
          </div>

        </div>


        <div class="sidebar-section-item">
          <i class="fadeinable fa fa-search text-orange-l2 mr-n1"></i>

          <div class="fadeable d-inline-flex align-items-center ml-3 ml-lg-0">
            <i class="fa fa-search mr-n3 text-orange-l2"></i>
            <input type="text" class="sidebar-search-input pl-4 pr-3 mr-n2" maxlength="60" placeholder="Search ..." aria-label="Search">
            <a href="#"><i class="fa fa-microphone text-white-tp3 ml-n1"></i></a>
          </div>
        </div>
      </div>

      <ul class="nav flex-column has-active-border active-on-top active-on-right">


        <li class="nav-item-caption">
          <span class="fadeable pl-3">MAIN</span>
          <span class="fadeinable mt-n2 text-125">…</span>
          <!--
             OR something like the following (with `.hideable` text)
           -->
          <!--
             <div class="hideable">
               <span class="pl-3">MAIN</span>
             </div>
             <span class="fadeinable mt-n2 text-125">&hellip;</span>
           -->
        </li>


        <li class="nav-item">

          <a href="html/dashboard.html" class="nav-link">
            <i class="nav-icon fa fa-tachometer-alt"></i>
            <span class="nav-text fadeable">
           <span>Dashboard</span>
            </span>


          </a>

          <b class="sub-arrow"></b>

        </li>
       

        <li class="nav-item active open">

          <a href="#" class="nav-link dropdown-toggle">
            <i class="nav-icon fa fa-cube"></i>
            <span class="nav-text fadeable">
           <span>Products</span>
            </span>

            <b class="caret fa fa-angle-left rt-n90"></b>

            <!-- or you can use custom icons. first add `d-style` to 'A' -->
            <!--
            <b class="caret d-n-collapsed fa fa-minus text-80"></b>
            <b class="caret d-collapsed fa fa-plus text-80"></b>
          -->
          </a>

          <div class="hideable submenu collapse show">
            <ul class="submenu-inner">

              <li class="nav-item">

                <a href="html/dashboard-2.html" class="nav-link">

                  <span class="nav-text">
                 <span>Products</span>
                  </span>


                </a>


              </li>


              <li class="nav-item">

                <a href="html/dashboard-3.html" class="nav-link">

                  <span class="nav-text">
                 <span>Products Categories</span>
                  </span>


                </a>


              </li>


              <li class="nav-item active">

                <a href="admin/all-brands" class="nav-link">

                  <span class="nav-text">
                 <span>Brands</span>
                  </span>


                </a>


              </li>


              <li class="nav-item">

                <a href="html/horizontal.html" class="nav-link">

                  <span class="nav-text">
                 <span>Units</span>
                  </span>


                </a>


              </li>


              <li class="nav-item">

                <a href="html/two-menus-1.html" class="nav-link">

                  <span class="nav-text">
                 <span>Print Barcode</span>
                  </span>


                </a>


              </li>



            </ul>
          </div>

          <b class="sub-arrow"></b>

        </li>

        <li class="nav-item">

          <a href="html/dashboard.html" class="nav-link">
            <i class="nav-icon fa fa-tachometer-alt"></i>
            <span class="nav-text fadeable">
           <span>Adjustment</span>
            </span>


          </a>

          <b class="sub-arrow"></b>

        </li>
        <li class="nav-item">

          <a href="html/dashboard.html" class="nav-link">
            <i class="nav-icon fa fa-tachometer-alt"></i>
            <span class="nav-text fadeable">
           <span>Quotations</span>
            </span>


          </a>

          <b class="sub-arrow"></b>

        </li>
        <li class="nav-item">

          <a href="#" class="nav-link dropdown-toggle collapsed">
            <i class="nav-icon fa fa-desktop"></i>
            <span class="nav-text fadeable">
           <span>Purchases</span>
            </span>

            <b class="caret fa fa-angle-left rt-n90"></b>

            <!-- or you can use custom icons. first add `d-style` to 'A' -->
            <!--
            <b class="caret d-n-collapsed fa fa-minus text-80"></b>
            <b class="caret d-collapsed fa fa-plus text-80"></b>
          -->
          </a>

          <div class="hideable submenu collapse">
            <ul class="submenu-inner">

              <li class="nav-item">

                <a href="html/buttons.html" class="nav-link">

                  <span class="nav-text">
                 <span>Purchases</span>
                  </span>


                </a>


              </li>


              <li class="nav-item">

                <a href="html/button-groups.html" class="nav-link">

                  <span class="nav-text">
                 <span>Return Purchases</span>
                  </span>


                </a>


              </li>


            </ul>
          </div>

          <b class="sub-arrow"></b>

        </li>
        <li class="nav-item">

          <a href="#" class="nav-link dropdown-toggle collapsed">
            <i class="nav-icon fa fa-desktop"></i>
            <span class="nav-text fadeable">
           <span>Sales</span>
            </span>

            <b class="caret fa fa-angle-left rt-n90"></b>

          </a>

          <div class="hideable submenu collapse">
            <ul class="submenu-inner">

              <li class="nav-item">

                <a href="html/buttons.html" class="nav-link">

                  <span class="nav-text">
                 <span>Sales</span>
                  </span>


                </a>


              </li>


              <li class="nav-item">

                <a href="html/button-groups.html" class="nav-link">

                  <span class="nav-text">
                 <span>Return Sales</span>
                  </span>


                </a>


              </li>


            </ul>
          </div>

          <b class="sub-arrow"></b>

        </li>
        <li class="nav-item">

          <a href="#" class="nav-link dropdown-toggle collapsed">
            <i class="nav-icon fa fa-desktop"></i>
            <span class="nav-text fadeable">
           <span>Expenses</span>
            </span>

            <b class="caret fa fa-angle-left rt-n90"></b>

          </a>

          <div class="hideable submenu collapse">
            <ul class="submenu-inner">

              <li class="nav-item">

                <a href="html/buttons.html" class="nav-link">

                  <span class="nav-text">
                 <span>Expenses</span>
                  </span>


                </a>


              </li>


              <li class="nav-item">

                <a href="html/button-groups.html" class="nav-link">

                  <span class="nav-text">
                 <span>Expenses Categories</span>
                  </span>


                </a>


              </li>


            </ul>
          </div>

          <b class="sub-arrow"></b>

        </li>
        <li class="nav-item">

          <a href="html/dashboard.html" class="nav-link">
            <i class="nav-icon fa fa-tachometer-alt"></i>
            <span class="nav-text fadeable">
           <span>Role & Permissions</span>
            </span>


          </a>

          <b class="sub-arrow"></b>

        </li>
        <li class="nav-item">

          <a href="#" class="nav-link dropdown-toggle collapsed">
            <i class="nav-icon fa fa-desktop"></i>
            <span class="nav-text fadeable">
           <span>Peoples</span>
            </span>

            <b class="caret fa fa-angle-left rt-n90"></b>

          </a>

          <div class="hideable submenu collapse">
            <ul class="submenu-inner">

              <li class="nav-item">

                <a href="html/buttons.html" class="nav-link">

                  <span class="nav-text">
                 <span>Suppliers</span>
                  </span>


                </a>


              </li>


              <li class="nav-item">

                <a href="html/button-groups.html" class="nav-link">

                  <span class="nav-text">
                 <span>Customers</span>
                  </span>


                </a>


              </li>
              <li class="nav-item">

                <a href="html/button-groups.html" class="nav-link">

                  <span class="nav-text">
                 <span>Users</span>
                  </span>


                </a>


              </li>

            </ul>
          </div>

          <b class="sub-arrow"></b>

        </li>
        <li class="nav-item">

          <a href="html/dashboard.html" class="nav-link">
            <i class="nav-icon fa fa-tachometer-alt"></i>
            <span class="nav-text fadeable">
           <span>Transfers</span>
            </span>


          </a>

          <b class="sub-arrow"></b>

        </li>
        <li class="nav-item">

          <a href="html/dashboard.html" class="nav-link">
            <i class="nav-icon fa fa-tachometer-alt"></i>
            <span class="nav-text fadeable">
           <span>Warehouse</span>
            </span>


          </a>

          <b class="sub-arrow"></b>

        </li>
        <li class="nav-item">

          <a href="html/dashboard.html" class="nav-link">
            <i class="nav-icon fa fa-tachometer-alt"></i>
            <span class="nav-text fadeable">
           <span>Reports</span>
            </span>


          </a>

          <b class="sub-arrow"></b>

        </li>
        <li class="nav-item">

          <a href="html/dashboard.html" class="nav-link">
            <i class="nav-icon fa fa-tachometer-alt"></i>
            <span class="nav-text fadeable">
           <span>Currencies</span>
            </span>


          </a>

          <b class="sub-arrow"></b>

        </li>
        <li class="nav-item">

          <a href="html/dashboard.html" class="nav-link">
            <i class="nav-icon fa fa-tachometer-alt"></i>
            <span class="nav-text fadeable">
           <span>Setting</span>
            </span>


          </a>

          <b class="sub-arrow"></b>

        </li>
       

      </ul>

    </div><!-- .sidebar scroll -->
  </div>
</div>