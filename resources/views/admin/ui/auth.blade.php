@if (Request::routeIs('admin.login'))
@include('admin.ui.login')
@elseif(Request::routeIs('admin.forget'))
@include('admin.ui.forget')
@elseif(Request::routeIs('admin.reset'))
@include('admin.ui.reset')
@endif
