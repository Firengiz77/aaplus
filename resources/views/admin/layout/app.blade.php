<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>AA PLUS</title>
    <link rel="stylesheet" href="{{ asset('/admin/vendors/mdi/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/admin/vendors/flag-icon-css/css/flag-icon.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/admin/vendors/css/vendor.bundle.base.css') }}" />
    <link rel="stylesheet" href="{{ asset('/admin/vendors/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/admin/css/style.css') }}" />
    <link rel="shortcut icon" href="{{ asset('/admin/images/favicon.png') }}" />
  </head>
  <body>
    @php
$id=auth()->guard('admin')->id();
$admin=App\Models\User::find($id);

@endphp

<style>
.lang{
  text-align:right;
}

</style>

    <div class="container-scroller">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
          <a class="sidebar-brand brand-logo" href="{{ route('admin.index') }}"><img src="assets/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="{{ route('admin.index') }}"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="{{  (!empty($admin->image)? url('upload/admin_images/'.$admin->image):url('upload/admin_images/icon-admin.png')  )}}" alt="profile" />
                <span class="login-status online"></span>
                <!--change to offline or busy as needed-->
              </div>
      
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.index') }}">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('page.index') }}">
              <i class="mdi mdi-google-pages menu-icon"></i>
              <span class="menu-title">Pages</span>
            </a>
          </li>



          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">Category And Product</span>
            </a>
          </li>

          <div class="collapse" id="ui-basic2">
            <ul class="nav flex-column sub-menu">

              <li class="nav-item">
                <a class="nav-link" href="{{ route('category.index') }}">
                  <i class="mdi mdi-rocket menu-icon"></i>
                  <span class="menu-title">Category</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ route('product.index') }}">
                  <i class="mdi mdi-airballoon menu-icon"></i>
                  <span class="menu-title">Products</span>
                </a>
              </li>

              
    
            </ul>
          </div>


          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-weather-sunny menu-icon"></i>
              <span class="menu-title">Projects</span>
            </a>
          </li>

          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">

              <li class="nav-item">
                <a class="nav-link"  href="{{ route('project.index') }}"  >
                  <i class="mdi mdi-newspaper menu-icon"></i>
                  <span class="menu-title">Projects</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ route('project_type.index') }}">
                  <i class="mdi mdi-checkbox-marked-outline menu-icon"></i>
                  <span class="menu-title">Project Type</span>
                </a>
              </li>

              
    
            </ul>
          </div>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic3">
              <i class="mdi mdi-flag-triangle menu-icon"></i>
              <span class="menu-title">Partners And Certificates</span>
            </a>
          </li>

          <div class="collapse" id="ui-basic3">
            <ul class="nav flex-column sub-menu">

              <li class="nav-item">
                <a class="nav-link" href="{{ route('partners.index') }}">
                  <i class="mdi mdi-clipboard-outline menu-icon"></i>
                  <span class="menu-title">Partners</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ route('certificate.index') }}">
                  <i class="mdi mdi-certificate menu-icon"></i>
                  <span class="menu-title">Certificate</span>
                </a>
              </li>

            </ul>
          </div>



          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact.index') }}">
              <i class="mdi mdi-contact-mail menu-icon"></i>
              <span class="menu-title">Contact</span>
            </a> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('gallery.index') }}">
              <i class="mdi mdi-file-image menu-icon"></i>
              <span class="menu-title">Gallery</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('news.index') }}">
              <i class="mdi mdi-newspaper menu-icon"></i>
              <span class="menu-title">News</span>
            </a>
          </li>

         

      




        

       

          <li class="nav-item">
            <a class="nav-link" href="{{ route('slider.index') }}">
              <i class="mdi mdi-folder-image menu-icon"></i>
              <span class="menu-title">Slider</span>
            </a>
          </li>

          
     
        

          <li class="nav-item">
            <a class="nav-link" href="{{ route('counter.index') }}">
              <i class="mdi mdi-counter menu-icon"></i>
              <span class="menu-title">Counter</span>
            </a>
          </li>
       

    

          <li class="nav-item">
            <a class="nav-link" href="{{ route('user.index') }}">
              <i class="mdi mdi-contacts menu-icon"></i>
              <span class="menu-title">Users</span>
            </a>
          </li>
    
     
      
        
          <li class="nav-item sidebar-actions">
            <div class="nav-link">
              <div class="mt-4">
                <ul class="mt-4 pl-0">
              <a href="{{ route('admin.logout') }}"  >  <li>Sign Out</li></a>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </nav>


      @yield('container')

    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('/admin/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('/admin/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('/admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('/admin/vendors/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('/admin/vendors/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('/admin/vendors/flot/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('/admin/vendors/flot/jquery.flot.fillbetween.js') }}"></script>
    <script src="{{ asset('/admin/vendors/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('/admin/vendors/flot/jquery.flot.pie.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('/admin/js/off-canvas.js') }}"></script>
    <script src="{{ asset('/admin/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('/admin/js/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('/admin/js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->
  </body>
</html>
