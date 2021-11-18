{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Dasha - Bootstrap Admin Template</title>
   @include('layouts.css')
  </head>
  <body class="theme-default">
    <div class="layout-container">
      <!-- top navbar-->
      @include('layouts.navigation')
      <!-- sidebar-->
      @include('layouts.sidebar')
      <div class="sidebar-layout-obfuscator"></div>
      <!-- Main section-->
      <main class="main-container">
        <!-- Page content-->
        <section class="section-container">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xl-9">
                <div class="welcome">
                  <div class="float-right mt-1 mr-1 d-none d-sm-block"><a class="text-muted" href="#"><em class="ion-grid icon-lg"></em></a></div>
                  <h1>Hello, Jane</h1>
                  <p>Welcome back to your Bootstrap 4 admin template.</p>
                </div>
                <div class="my-4">
                  <button class="btn btn-oval btn-primary btn-gradient mr-2">14 Messages</button>
                  <button class="btn btn-secondary btn-oval" type="button"><em class="ion-forward text-success mr-2 icon-lg"></em><span>View requests</span></button>
                </div>
                <div class="h-scroll">
                  <div class="row">
                    <div class="col-8 col-md-4">
                      <div class="cardbox">
                        <div class="cardbox-body">
                          <div class="clearfix mb-2">
                            <div class="float-right"><small><em class="ml-2 ion-arrow-up-b"></em></small></div>
                            <div class="float-left"><small>Running tasks</small></div>
                          </div>
                          <div class="h3" data-counter="275">0</div>
                          <div class="text-center mt-3">
                            <div class="sparkline" id="sparkline1" data-bar-color="#42a5f5"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-8 col-md-4">
                      <div class="cardbox">
                        <div class="cardbox-body">
                          <div class="clearfix mb-2">
                            <div class="float-right"><small><em class="ml-2 ion-arrow-down-b"></em></small></div>
                            <div class="float-left"><small>Commits</small></div>
                          </div>
                          <div class="h3" data-counter="8345">0</div>
                          <div class="text-center mt-3">
                            <div class="sparkline" id="sparkline2" data-bar-color="#42a5f5"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-8 col-md-4">
                      <div class="cardbox">
                        <div class="cardbox-body">
                          <div class="clearfix mb-2">
                            <div class="float-right"><small><em class="ml-2 ion-arrow-up-b"></em></small></div>
                            <div class="float-left"><small>Pull requests</small></div>
                          </div>
                          <div class="h3" data-counter="559">0</div>
                          <div class="text-center mt-3">
                            <div class="sparkline" id="sparkline3" data-bar-color="#42a5f5"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cardbox">
                  <div class="cardbox-heading clearfix">
                    <div class="float-md-left"><strong>Overview of sales progress</strong><br><small>Relevance per month of the current year</small></div>
                    <div class="mb-2 d-sm-none"></div>
                    <div class="float-md-right">
                      <select class="custom-select form-control form-control-sm">
                        <option value="1" selected="">Last Period</option>
                        <option value="2">Last Month</option>
                        <option value="4">Last Year</option>
                        <option value="4">01.01.2017 - 06.06.2017</option>
                      </select>
                    </div>
                  </div>
                  <div style="margin: 0 -8px">
                    <div class="flot-chart flot-chart-lg flot-legend-left" id="flot-main-spline"></div>
                  </div>
                  <div class="cardbox-body">
                    <div class="h-scroll">
                      <div class="row text-center">
                        <div class="col-sm-4"><small>Visitors</small>
                          <h5 class="mt-1 mb-3"><strong>550</strong></h5>
                          <div class="progress progress-xs mb-0 wd-xs m-auto">
                            <div class="progress-bar bg-success" style="width: 45%"></div>
                          </div>
                        </div>
                        <div class="col-sm-4"><small>Clicks</small>
                          <h5 class="mt-1 mb-3"><strong>230</strong></h5>
                          <div class="progress progress-xs mb-0 wd-xs m-auto">
                            <div class="progress-bar bg-warning" style="width: 25%"></div>
                          </div>
                        </div>
                        <div class="col-sm-4"><small>Income</small>
                          <h5 class="mt-1 mb-3"><strong>$2,154.5</strong></h5>
                          <div class="progress progress-xs mb-0 wd-xs m-auto">
                            <div class="progress-bar bg-info" style="width: 75%"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>
    @include('layouts.scripts')
  </body>
</html>
