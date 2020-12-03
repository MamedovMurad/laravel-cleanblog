		<!-- /.content -->
    </div>
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <div class="pull-right d-none d-sm-inline-block">
      <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">FAQ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Purchase Now</a>
        </li>
      </ul>
  </div>
    &copy; 2020 <a href="https://www.multipurposethemes.com/">Multipurpose Themes</a>. All Rights Reserved.
</footer>



<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- Vendor JS -->
<script src="{{asset('admin/admin1/')}}/js/vendors.min.js"></script>
<script src="{{asset('admin/admin1/')}}/../assets/icons/feather-icons/feather.min.js"></script>



<!-- Adminto App -->
<script src="{{asset('admin/admin1/')}}/js/jquery.smartmenus.min.js"></script>
<script src="{{asset('admin/admin1/')}}/js/menus.min.js"></script>
<script src="{{asset('admin/admin1/')}}/js/template.min.js"></script>
@toastr_js
@toastr_render

@yield("script")

</body>

</html>