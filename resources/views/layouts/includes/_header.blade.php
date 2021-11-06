
<header class="navbar-fixed-top">
  <section style="background-color:#02AE99;">
    <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <div class="col-md-12 d-flex justify-content-end">
          <div class="">
              <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                  @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="text-decoration-none"><span class="text-white"><b>@lang('translate.register')</b></span></a>
                  @endif
              </div>
          </div>
        </div>
      </div>
    </nav>
  </section>  
</header>