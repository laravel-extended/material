@hasSection('sidebar')
<div class='sidebar mdc-top-app-bar--dense-fixed-adjust'>
  <m-drawer title="@yield('title')" subtitle="@yield('subtitle')">
    @section('sidebar')

    @show
  </m-drawer>
</div>
@endif
