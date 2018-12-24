<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/css/bootstrap-responsive.min.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/css/fullcalendar.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/css/matrix-style.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/css/matrix-media.css') }}" />
<link href="{{ asset('admin/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('admin/css/jquery.gritter.css') }}" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

@include('admin.navBar')
@include('admin.sideBar')

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->
  <div class="container-fluid">
@yield('content')

</div>
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>

<!--end-Footer-part-->

<script src="{{ asset('admin/js/excanvas.min.js') }}"></script> 
<script src="{{ asset('admin/js/jquery.min.js') }}"></script> 
<script src="{{ asset('admin/js/jquery.ui.custom.js') }}"></script> 
<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('admin/js/jquery.flot.min.js') }}"></script> 
<script src="{{ asset('admin/js/jquery.flot.resize.min.js') }}"></script> 
<script src="{{ asset('admin/js/jquery.peity.min.js') }}"></script> 
<script src="{{ asset('admin/js/fullcalendar.min.js') }}"></script> 
<script src="{{ asset('admin/js/matrix.js') }}"></script> 
<script src="{{ asset('admin/js/matrix.dashboard.js') }}"></script> 
<script src="{{ asset('admin/js/jquery.gritter.min.js') }}"></script> 
<script src="{{ asset('admin/js/matrix.interface.js') }}"></script> 
<script src="{{ asset('admin/js/matrix.chat.js') }}"></script> 
<script src="{{ asset('admin/js/jquery.validate.js') }}"></script> 
<script src="{{ asset('admin/js/matrix.form_validation.js') }}"></script> 
<script src="{{ asset('admin/js/jquery.wizard.js') }}"></script> 
<script src="{{ asset('admin/js/jquery.uniform.js') }}"></script> 
<script src="{{ asset('admin/js/select2.min.js') }}"></script> 
<script src="{{ asset('admin/js/matrix.popover.js') }}"></script> 
<script src="{{ asset('admin/js/jquery.dataTables.min.js') }}"></script> 
<script src="{{ asset('admin/js/matrix.tables.js') }}"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
