<html>
    <head>
        
    </head>
    <body>
        <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">پنل مدیریت</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="direction: ltr">
      <div style="direction: rtl">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

          <div class="info">
            <a href="#" class="d-block">ادمین</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item  ">
              <a href="/admin" class="nav-link <?php if(Request::is('admin')): ?> active <?php endif; ?>">
                <i class="nav-icon fa fa-dashboard"></i>
                <p>
                  داشبورد
                  
                </p>
              </a>
              
            </li>
            
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-address-book"></i>
                <p>
                  نمایندگی
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item ">
                  <a href="/addprovince" class="nav-link <?php if(Request::is('addprovince')): ?> active <?php endif; ?>">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>افزودن استان</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/addcity" class="nav-link <?php if(Request::is('addcity')): ?> active <?php endif; ?>">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>افزودن شهر</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/addbranch" class="nav-link <?php if(Request::is('addbranch')): ?> active <?php endif; ?>">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>افزودن نمایندگی</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/editbranch" class="nav-link <?php if(Request::is('editbranch')): ?> active <?php endif; ?>">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>ویرایش نمایندگی</p>
                  </a>
                </li>
                
              </ul>
            </li>
            <li class="nav-item">
              <a href="/showcomplaints" class="nav-link <?php if(Request::is('showcomplaints')): ?> active <?php endif; ?>">
                <i class="nav-icon fa fa-edit"></i>
                <p>شکایات</p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-newspaper-o"></i>
                <p>
                  اخبار
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/addnews" class="nav-link <?php if(Request::is('addnews')): ?> active <?php endif; ?>">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>افزودن خبر</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/editnews" class="nav-link <?php if(Request::is('editnews')): ?> active <?php endif; ?>">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>ویرایش اخبار</p>
                  </a>
                </li>
                
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-book"></i>
                <p>
                   بلاگ
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                  <a href="/addcategory" class="nav-link <?php if(Request::is('addcategory')): ?> active <?php endif; ?>">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>افزودن دسته</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/addarticle" class="nav-link <?php if(Request::is('addarticle')): ?> active <?php endif; ?>">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>افزودن مقاله</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="editarticle" class="nav-link <?php if(Request::is('editarticles')): ?> active <?php endif; ?>">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>ویرایش مقالات</p>
                  </a>
                </li>
                
              </ul>
            </li>
            
            <li class="nav-item ">
              <a href="/addgaranty" class="nav-link <?php if(Request::is('addgaranty')): ?> active <?php endif; ?>">
                <i class="nav-icon fa fa-folder"></i>
                <p>
                  گارانتی

                </p>
              </a>
             </li>
            <li class="nav-item ">
              <a href="/adminrepair" class="nav-link <?php if(Request::is('adminrepair')): ?> active <?php endif; ?>">
                <i class="nav-icon fa fa-cog"></i>
                <p>
                  تعمیرات

                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-cart-plus"></i>
                <p>
                  فروشگاه
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/addcolor" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>افزودن رنگ</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/addproduct" class="nav-link <?php if(Request::is('addproduct')): ?> active <?php endif; ?>">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>افزودن محصول</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/editproduct" class="nav-link <?php if(Request::is('editproduct')): ?> active <?php endif; ?>">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>ویرایش محصولات</p>
                  </a>
                </li>
                </ul>
            </li>
            
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
    </div>
    <!-- /.sidebar -->
  </aside>
    </body>
</html>

