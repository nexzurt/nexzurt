@extends('layouts.admin.main')

@section('page-title')
Nexzurt Dashboard
@stop

@push('styles')

@endpush


@section('page-contents')

	<div class="row">
      <div class="col-md-7">
        <div class="widget widget-fullwidth user-develop-chart">
          <div class="widget-head">
            <div class="tools"><span class="icon s7-cloud-download"></span><span class="icon s7-refresh-2"></span></div><span class="title">Development Activity</span>
          </div>
          <div class="widget-chart-container">
            <div id="develop-chart-legend" class="legend-container"></div>
            <div id="develop-chart" style="height: 225px;"></div>
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <div class="widget-indicators">
          <div class="indicator-item">
            <div class="indicator-item-icon">
              <div class="icon"><span class="s7-graph1"></span></div>
            </div>
            <div class="indicator-item-value"><span data-toggle="counter" data-end="36" class="indicator-value-counter">0</span>
              <div class="indicator-value-title">Today's Orders</div>
            </div>
          </div>
          <div class="indicator-item">
            <div class="indicator-item-icon">
              <div class="icon"><span class="s7-graph"></span></div>
            </div>
            <div class="indicator-item-value"><span data-toggle="counter" data-end="157" class="indicator-value-counter">0</span>
              <div class="indicator-value-title">Support Tickets</div>
            </div>
          </div>
          <div class="indicator-item">
            <div class="indicator-item-icon">
              <div class="icon"><span class="s7-graph3"></span></div>
            </div>
            <div class="indicator-item-value"><span data-toggle="counter" data-decimals="1" data-end="17.9" class="indicator-value-counter">0</span>
              <div class="indicator-value-title">Download Files</div>
            </div>
          </div>
          <div class="indicator-item">
            <div class="indicator-item-icon">
              <div class="icon"><span class="s7-cart"></span></div>
            </div>
            <div class="indicator-item-value"><span data-toggle="counter" data-decimals="2" data-end="78,450" data-prefix="$" class="indicator-value-counter">0</span>
              <div class="indicator-value-title">Total Purchases</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="widget widget-fullwidth week-chart">
          <div class="widget-head"><span class="title">Week Activity</span></div>
          <div class="widget-chart-container">
            <div id="week-chart" style="height: 215px;"></div>
          </div>
          <div class="row widget-info">
            <div class="col-6 counter-block"><span data-toggle="counter" data-end="735" class="counter"></span><span class="title">New Users</span></div>
            <div class="col-6 counter-block"><span data-toggle="counter" data-end="73" data-suffix="%" class="counter">0</span><span class="title">More Visits</span></div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="user-stats">
          <div class="user-stats-id">
            <div class="user-stats-avatar"><img src="assets/img/avatars/img3.jpg" alt="avatar"><span class="user-stats-status-indicator online"></span></div>
            <div class="user-stats-info"><span class="user-stats-name">Justin Adams</span><span class="user-stats-position">Sales</span></div>
          </div>
          <div class="user-stats-indicators">
            <div class="user-stats-indicator"><span class="user-stats-indicator-title">Premium Purchases</span><span data-toggle="counter" data-end="173" class="user-stats-indicator-counter">0</span></div>
            <div class="user-stats-indicator"><span class="user-stats-indicator-title">Standard Plans   </span><span data-toggle="counter" data-end="367" class="user-stats-indicator-counter">0</span></div>
            <div class="user-stats-indicator"><span class="user-stats-indicator-title">Services</span><span data-toggle="counter" data-end="724" class="user-stats-indicator-counter">0</span></div>
            <div class="user-stats-indicator"><span class="user-stats-indicator-title">Total Sales</span><span data-toggle="counter" data-end="1264" class="user-stats-indicator-counter">0</span></div>
          </div>
          <div class="user-stats-milestone"><span>Current Progress</span>
            <div class="progress">
              <div style="width: 45%" class="progress-bar progress-bar-primary"></div>
            </div>
          </div><a href="#" class="user-stats-more-details">More Details</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="widget widget-fullwidth ads-chart">
          <div class="widget-head"><span class="title">Advertisement</span></div>
          <div class="ads-resume">
            <div class="ads-info">
              <div class="ads-progress"><span data-toggle="counter" data-end="55" data-suffix="%" class="ads-progress-counter">0</span><span class="ads-progress-title">Advance</span>
                <div class="progress">
                  <div style="width: 55%" class="progress-bar progress-bar-primary"></div>
                </div>
              </div>
              <div id="ads-chart-legend" class="ads-legend"></div>
            </div>
            <div class="ads-users">
              <div class="widget-chart-container">
                <div id="users-chart" style="height: 153px;"></div>
                <div class="users-chart-counter"><span data-toggle="counter" data-end="1207" class="users-counter">0</span><span class="users-title">New Users</span></div>
              </div>
            </div>
          </div>
          <div class="widget-chart-container">
            <div id="ads-chart" style="height: 229px;"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="project-list">
          <div class="project-list-title">Project Progress</div>
          <div class="project-item">
            <div class="project-item-title"><span class="name">Product Design</span><span class="description">Create the new product design</span></div>
            <div class="project-item-user">
              <div class="user-avatar"><img src="assets/img/avatar.jpg" alt="avatar"></div>
              <div class="user-info"><span class="name">Justin Adams</span><span class="position description">Product designer</span></div>
            </div>
            <div class="project-item-state"><span class="name">In Progress</span><span class="description">3D modeling</span></div>
            <div class="project-item-date"><span class="date">May 6, 2017</span><span class="time description">8:30</span></div>
            <div class="project-item-progress"><span class="description">50%</span>
              <div class="progress">
                <div style="width: 50%" class="progress-bar progress-bar-primary"></div>
              </div>
            </div>
            <div class="project-item-actions"><span class="icon s7-refresh-2"></span><span class="icon s7-close"></span></div>
          </div>
          <div class="project-item">
            <div class="project-item-title"><span class="name">Concept Design</span><span class="description">Create the concept</span></div>
            <div class="project-item-user">
              <div class="user-avatar"><img src="assets/img/avatars/img1.jpg" alt="avatar"></div>
              <div class="user-info"><span class="name">Justin Adams</span><span class="position description">Marketing</span></div>
            </div>
            <div class="project-item-state"><span class="name">Completed</span><span class="description">Collection concept</span></div>
            <div class="project-item-date"><span class="date">April 22, 2017</span><span class="time description">14:45</span></div>
            <div class="project-item-progress"><span class="description">100%</span>
              <div class="progress">
                <div style="width: 100%" class="progress-bar progress-bar-primary"></div>
              </div>
            </div>
            <div class="project-item-actions"><span class="icon s7-refresh-2"></span><span class="icon s7-close"></span></div>
          </div>
          <div class="project-item">
            <div class="project-item-title"><span class="name">Product Development</span><span class="description">3D printing</span></div>
            <div class="project-item-user">
              <div class="user-avatar"><img src="assets/img/avatars/img2.jpg" alt="avatar"></div>
              <div class="user-info"><span class="name">Justin Adams</span><span class="position description">3D printer</span></div>
            </div>
            <div class="project-item-state"><span class="name">Waiting</span><span class="description">Waiting for 3D design</span></div>
            <div class="project-item-date"><span class="date">April 15, 2017</span><span class="time description">10:00</span></div>
            <div class="project-item-progress"><span class="description">0%</span>
              <div class="progress">
                <div style="width: 0%" class="progress-bar progress-bar-primary"></div>
              </div>
            </div>
            <div class="project-item-actions"><span class="icon s7-refresh-2"></span><span class="icon s7-close"></span></div>
          </div>
          <div class="project-item">
            <div class="project-item-title"><span class="name">Web site</span><span class="description">Web site development</span></div>
            <div class="project-item-user">
              <div class="user-avatar"><img src="assets/img/avatars/img3.jpg" alt="avatar"></div>
              <div class="user-info"><span class="name">Justin Adams</span><span class="position description">Web Designer</span></div>
            </div>
            <div class="project-item-state"><span class="name">In progress</span><span class="description">HTML markup</span></div>
            <div class="project-item-date"><span class="date">April 8, 2016</span><span class="time description">17:24</span></div>
            <div class="project-item-progress"><span class="description">60%</span>
              <div class="progress">
                <div style="width: 60%" class="progress-bar progress-bar-primary"></div>
              </div>
            </div>
            <div class="project-item-actions"><span class="icon s7-refresh-2"></span><span class="icon s7-close"></span></div>
          </div>
          <div class="project-item">
            <div class="project-item-title"><span class="name">SEO strategy</span><span class="description">Define target</span></div>
            <div class="project-item-user">
              <div class="user-avatar"><img src="assets/img/avatars/img2.jpg" alt="avatar"></div>
              <div class="user-info"><span class="name">Justin Adams</span><span class="position description">SEO</span></div>
            </div>
            <div class="project-item-state"><span class="name">completed</span><span class="description">Marketing</span></div>
            <div class="project-item-date"><span class="date">April 15, 2017</span><span class="time description">10:00</span></div>
            <div class="project-item-progress"><span class="description">100%</span>
              <div class="progress">
                <div style="width: 100%" class="progress-bar progress-bar-primary"></div>
              </div>
            </div>
            <div class="project-item-actions"><span class="icon s7-refresh-2"></span><span class="icon s7-close"></span></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="widget widget-fullwidth todo-list">
          <div class="widget-head"><span class="title">Todo List</span></div>
          <div class="todo-list-container">
            <ul class="todo-tasks">
              <li class="todo-task">
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input"><span class="custom-control-indicator"></span><span class="custom-control-description">Pellentesque habitant morbi tristique senectus et netus et.</span>
                </label><a href="#" class="close"><span class="icon s7-close"></span></a>
              </li>
              <li class="todo-task">
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input"><span class="custom-control-indicator"></span><span class="custom-control-description">Sed id interdum nunc. Ut sodales dolor non ultricies mattis. </span>
                </label><a href="#" class="close"><span class="icon s7-close"></span></a>
              </li>
              <li class="todo-task">
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input"><span class="custom-control-indicator"></span><span class="custom-control-description">Pellentesque habitant morbi tristique senectus et netus et.</span>
                </label><a href="#" class="close"><span class="icon s7-close"></span></a>
              </li>
              <li class="todo-task">
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input"><span class="custom-control-indicator"></span><span class="custom-control-description">Sed id interdum nunc. Ut sodales dolor non ultricies mattis. </span>
                </label><a href="#" class="close"><span class="icon s7-close"></span></a>
              </li>
              <li class="todo-task">
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input"><span class="custom-control-indicator"></span><span class="custom-control-description">Sed id interdum nunc. Ut sodales dolor non ultricies mattis. </span>
                </label><a href="#" class="close"><span class="icon s7-close"></span></a>
              </li>
              <li class="todo-task">
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input"><span class="custom-control-indicator"></span><span class="custom-control-description">Pellentesque habitant morbi tristique senectus et netus et.</span>
                </label><a href="#" class="close"><span class="icon s7-close"></span></a>
              </li>
            </ul>
          </div>
          <div class="todo-new-task">
            <div class="input-group">
              <input type="text" placeholder="Add a new task..." class="form-control"><span class="input-group-addon"><i class="icon s7-plus"></i></span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="widget widget-fullwidth earnings">
          <div class="widget-head">
            <div class="tools"><span class="icon s7-refresh-2"></span></div><span class="title">Weekly Earnings</span>
          </div>
          <div class="earnings-resume">
            <div class="earnings-value earnings-value-big"><span data-toggle="counter" data-end="127.95" data-decimals="2" data-prefix="$" class="earnings-counter">0</span><span class="earnings-title">Advance</span></div>
            <div class="earnings-value"><span data-toggle="counter" data-end="527" data-decimals="2" data-prefix="$" class="earnings-counter">0</span><span class="earnings-title">Estimated</span></div>
            <div class="earnings-value"><span data-toggle="counter" data-end="79" data-suffix="%" class="earnings-counter">0</span><span class="earnings-title">More Sales</span></div>
          </div>
          <div class="earnings-chart">
            <div id="earnings-chart" style="height: 156px;"></div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="usage usage-dark">
          <div class="usage-head"><span class="usage-head-title">Download Files</span>
            <div class="usage-head-tools"><span class="icon s7-refresh-2"></span></div>
          </div>
          <div class="usage-resume">
            <div class="usage-data"><span data-toggle="counter" data-end="73.6" data-decimals="1" data-suffix="%" class="usage-counter"></span><span class="usage-title">Download Files</span><span class="usage-detail">13,5 MB</span></div>
            <div class="usage-icon"><span class="icon s7-graph3"></span></div>
          </div>
        </div>
        <div class="usage usage-primary">
          <div class="usage-head"><span class="usage-head-title">Server CPU</span>
            <div class="usage-head-tools"><span class="icon s7-refresh-2"></span></div>
          </div>
          <div class="usage-resume">
            <div class="usage-data"><span data-toggle="counter" data-end="33.9" data-decimals="1" data-suffix="%" class="usage-counter"></span><span class="usage-title">Total Usage</span><span class="usage-detail">178 MB</span></div>
            <div class="usage-icon"><span class="icon s7-timer"></span></div>
          </div>
        </div>
      </div>
    </div>

@stop


@push('scripts')

  <script src="{{ asset( 'nx-assets/nx-admin/lib/jquery-flot/jquery.flot.js' ) }}" type="text/javascript"></script>
  <script src="{{ asset( 'nx-assets/nx-admin/lib/jquery-flot/jquery.flot.pie.js' ) }}" type="text/javascript"></script>
  <script src="{{ asset( 'nx-assets/nx-admin/lib/jquery-flot/jquery.flot.time.js' ) }}" type="text/javascript"></script>
  <script src="{{ asset( 'nx-assets/nx-admin/lib/jquery-flot/jquery.flot.resize.js' ) }}" type="text/javascript"></script>
  <script src="{{ asset( 'nx-assets/nx-admin/lib/jquery-flot/plugins/jquery.flot.orderBars.js' ) }}" type="text/javascript"></script>
  <script src="{{ asset( 'nx-assets/nx-admin/lib/jquery-flot/plugins/curvedLines.js' ) }}" type="text/javascript"></script>
  <script src="{{ asset( 'nx-assets/nx-admin/lib/countup/countUp.min.js' ) }}" type="text/javascript"></script>
  <script src="{{ asset( 'nx-assets/nx-admin/js/app-dashboard.js' ) }}" type="text/javascript"></script>

@endpush