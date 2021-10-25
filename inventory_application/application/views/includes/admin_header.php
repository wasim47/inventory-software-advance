<?php include('admin_tophead.php');?>

<div class="col-sm-2">
        <h4><a href="<?php echo base_url('ouradminmanage/dashboard');?>">
        <img src="<?php echo base_url();?>asset/images/logo.png" class="img-responsive" style="margin:10px; width:100%; height:auto"></a></h4>
    </div>
<nav id="sidebar" class="sidebar nav-collapse collapse">
            <ul id="side-nav" class="side-nav" style="background:#354d65">
                <li class="active">
                    <a href="<?php echo base_url('ouradminmanage/dashboard');?>"><i class="fa fa-home"></i> <span class="name">Dashboard</span></a>
                </li>
                <li class="panel "><a href="<?php echo base_url('ouradminmanage/company_info_registration');?>"><i class="fa fa-building-o"></i> <span class="name">Company Setup</span></a>
                    
                </li>
                <li class="panel">
                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                       data-parent="#side-nav" href="#stats-collapse"><i class="fa-user-secret"></i> <span class="name">Administration</span></a>
                    <ul id="stats-collapse" class="panel-collapse collapse">
                        <li><a href="<?php echo base_url('ouradminmanage/admin_list');?>"><i class="fa fa-list"></i> Admin List</a></li>
                        <li><a href="<?php echo base_url('ouradminmanage/admin_registration');?>"><i class="fa-user-plus"></i> New Admin</a></li>
                    </ul>
                </li>
                <li class="panel ">
                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                       data-parent="#side-nav" href="#ui-collapse"><i class="fa fa-building "></i> <span class="name">Supplier</span></a>
                    <ul id="ui-collapse" class="panel-collapse collapse ">
                        <li><a href="<?php echo base_url('ouradminmanage/boutique_list');?>"><i class="fa fa-bars"></i> Supplier List</a></li>
                        <li><a href="<?php echo base_url('ouradminmanage/boutique_registration');?>"><i class="fa fa-plus-circle"></i> New Supplier</a></li>
                    </ul>
                </li>
                <li class="panel ">
                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                       data-parent="#side-nav" href="#components-collapse"><i class="fa fa-users"></i> <span class="name">Agent</span></a>
                    <ul id="components-collapse" class="panel-collapse collapse ">
                        <li><a href="<?php echo base_url('ouradminmanage/agent_list');?>"><i class="fa fa-bars"></i> Agent List</a></li>
                        <li><a href="<?php echo base_url('ouradminmanage/agent_registration');?>"><i class="fa fa-plus-circle"></i> New Agent</a></li>
                    </ul>
                </li>
                <li class="panel ">
                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                       data-parent="#side-nav" href="#tables-collapse"><i class="fa fa-cog"></i> <span class="name">Tables</span></a>
                    <ul id="tables-collapse" class="panel-collapse collapse ">
                        <li class=""><a href="tables_static.html">Static <sup class="text-danger fw-bold">upd</sup></a></li>
                        <li class=""><a href="tables_dynamic.html">Dynamic</a></li>
                    </ul>
                </li>
                <li class="panel ">
                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                       data-parent="#side-nav" href="#grid-collapse"><i class="fa fa-th"></i> <span class="name">Widgets</span></a>
                    <ul id="grid-collapse" class="panel-collapse collapse ">
                        <li class=""><a href="grid_basic.html">Basic</a></li>
                        <li class=""><a href="grid_live.html">Live</a></li>
                    </ul>
                </li>
                <li class="panel ">
                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                       data-parent="#side-nav" href="#special-collapse"><i class="fa fa-leaf"></i> <span class="name">Special</span></a>
                    <ul id="special-collapse" class="panel-collapse collapse ">
                        <li class=""><a href="special_search.html">Search <sup class="text-warning fw-bold">new</sup></a></li>
                        <li class=""><a href="special_invoice.html">Invoice</a></li>
                        <li class=""><a href="special_inbox.html">Inbox &nbsp; <span class="label label-important">3</span></a></li>
                        <li><a target="_blank" href="login.html">Login</a></li>
                        <li><a target="_blank" href="error.html">Error Page</a></li>
                        <li><a href="landing.html" data-no-pjax>Landing</a></li>
                        <li><a href="http://demo.flatlogic.com/3.5.0/light/index.html" data-no-pjax title="Light Blue Transparent Light version">Light <sup class="text-warning fw-bold">new</sup></a></li>
                        <li><a href="http://demo.flatlogic.com/3.5.0/white/index.html" data-no-pjax title="Light Blue Transparent White version">White <sup class="text-warning fw-bold">new</sup></a></li>
                    </ul>
                </li>
                <li class="panel">
                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                       data-parent="#side-nav" href="#menu-levels-collapse"><i class="fa fa-folder-open"></i> <span class="name">Menu Levels</span></a>
                    <ul id="menu-levels-collapse" class="panel-collapse collapse">
                        <li><a href="#">Item 1.1</a></li>
                        <li><a href="#">Item 1.2</a></li>
                        <li class="panel">
                            <a class="accordion-toggle collapsed" data-toggle="collapse"
                               data-parent="#menu-levels-collapse" href="#sub-menu-1-collapse">Item 1.3</a>
                            <ul id="sub-menu-1-collapse" class="panel-collapse collapse">
                                <li class="panel">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                       data-parent="#sub-menu-1-collapse" href="#sub-menu-3-collapse">Item 2.1</a>
                                    <ul id="sub-menu-3-collapse" class="panel-collapse collapse">
                                        <li><a href="#">Item 3.1</a></li>
                                        <li><a href="#">Item 3.2</a></li>
                                        <li><a href="#">Item 3.3</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Item 2.2</a></li>
                                <li class="panel">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                       data-parent="#sub-menu-1-collapse" href="#sub-menu-2-collapse">Item 2.3</a>
                                    <ul id="sub-menu-2-collapse" class="panel-collapse collapse">
                                        <li><a href="#">Item 3.4</a></li>
                                        <li><a href="#">Item 3.5</a></li>
                                        <li><a href="#">Item 3.6</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="visible-xs">
                    <a href="login.html"><i class="fa fa-sign-out"></i> <span class="name">Sign Out</span></a>
                </li>
            </ul>
        
            <h5 class="sidebar-nav-title"> <a href="index-2.html"><i class="fa fa-list"></i> <span class="name">Dashboard</span></a></h5>

            <ul class="sidebar-labels" style="background:#354d65">
                <li>
                    <a href="#">
                        <!-- yep, .circle again -->
                        <i class="fa fa-circle text-warning"></i>
                        <span class="label-name">My Recent</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-circle text-gray"></i>
                        <span class="label-name">Starred</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-circle text-danger"></i>
                        <span class="label-name">Background</span>
                    </a>
                </li>
            </ul>
        </nav>
<div class="wrap">
    <header class="page-header">
        <div class="navbar">
            <ul class="nav navbar-nav navbar-right pull-right">
                <li class="visible-phone-landscape">
                    <a href="#" id="search-toggle">
                        <i class="fa fa-search"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" title="Messages" id="messages"
                       class="dropdown-toggle"
                       data-toggle="dropdown">
                        <i class="glyphicon glyphicon-comment"></i>
                    </a>
                    <ul id="messages-menu" class="dropdown-menu messages" role="menu">
                        <li role="presentation">
                            <a href="#" class="message">
                                <img src="img/1.png" alt="">
                                <div class="details">
                                    <div class="sender">Jane Hew</div>
                                    <div class="text">
                                        Hey, John! How is it going? ...
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="message">
                                <img src="img/2.png" alt="">
                                <div class="details">
                                    <div class="sender">Alies Rumiancau</div>
                                    <div class="text">
                                        I'll definitely buy this template
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="message">
                                <img src="img/3.png" alt="">
                                <div class="details">
                                    <div class="sender">Michal Rumiancau</div>
                                    <div class="text">
                                        Is it really Lore ipsum? Lore ...
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="text-align-center see-all">
                                See all messages <i class="fa fa-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" title="8 support tickets"
                       class="dropdown-toggle"
                       data-toggle="dropdown">
                        <i class="glyphicon glyphicon-globe"></i>
                        <span class="count">8</span>                        </a>
              <ul id="support-menu" class="dropdown-menu support" role="menu">
                        <li role="presentation">
                            <a href="#" class="support-ticket">
                                <div class="picture">
                                    <span class="label label-important"><i class="fa fa-bell-o"></i></span>
                                </div>
                                <div class="details">
                                    Check out this awesome ticket
                                </div>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="support-ticket">
                                <div class="picture">
                                    <span class="label label-warning"><i class="fa fa-question-circle"></i></span>
                                </div>
                                <div class="details">
                                    "What is the best way to get ...
                                </div>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="support-ticket">
                                <div class="picture">
                                    <span class="label label-success"><i class="fa fa-tag"></i></span>
                                </div>
                                <div class="details">
                                    This is just a simple notification
                                </div>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="support-ticket">
                                <div class="picture">
                                    <span class="label label-info"><i class="fa fa-info-circle"></i></span>
                                </div>
                                <div class="details">
                                    12 new orders has arrived today
                                </div>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="support-ticket">
                                <div class="picture">
                                    <span class="label label-important"><i class="fa fa-plus"></i></span>
                                </div>
                                <div class="details">
                                    One more thing that just happened
                                </div>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="text-align-center see-all">
                                See all tickets <i class="fa fa-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
              <li class="divider"></li>
                <li class="hidden-xs">
                    <a href="#" id="settings"
                       title="Settings"
                       data-toggle="popover"
                       data-placement="bottom">
                        <i class="glyphicon glyphicon-cog"></i>
                    </a>
                </li>
                <li class="hidden-xs dropdown">
                    <a href="#" title="Account" id="account"
                       class="dropdown-toggle"
                       data-toggle="dropdown">
                        <i class="glyphicon glyphicon-user"></i>
                    </a>
                    <ul id="account-menu" class="dropdown-menu account" role="menu">
                        <li role="presentation" class="account-picture">
                            <img src="img/2.png" alt="">
                            Philip Daineka
                        </li>
                        <li role="presentation">
                            <a href="form_account.html" class="link">
                                <i class="fa fa-user"></i>
                                Profile
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="component_calendar.html" class="link">
                                <i class="fa fa-calendar"></i>
                                Calendar
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="link">
                                <i class="fa fa-inbox"></i>
                                Inbox
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="visible-xs">
                    <a href="#"
                       class="btn-navbar"
                       data-toggle="collapse"
                       data-target=".sidebar"
                       title="">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
                <li class="hidden-xs"><a href="login.html"><i class="glyphicon glyphicon-off"></i></a></li>
            </ul>
            <form id="search-form" class="navbar-form pull-right" role="search">
                <input type="search" class="form-control search-query" placeholder="Search...">
                <button type="submit" class="btn" style="background:#354d65"><i class="fa fa-search"></i></button>
            </form>
            
        </div>
    </header>        
    
