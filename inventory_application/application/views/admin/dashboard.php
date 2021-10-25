<style>
.dashboard-widgets{
	
}
.blue-icon{
	width:100%; 
	height:100px; 
	background:rgba(75,139,245,0.8); 
	border-radius:5px; 
	padding:5px; 
	box-shadow:#4b8bf5 0 0 2px 2px; 
	float:left;
}
.icon-size{
	font-size:40px; 
	width:30px; 
	float:left;
}
.info-area{
	width:80px; 
	float:left; 
	margin-left:10px; 
	font-size:18px;
}
.go-enter{
	width:100%; 
	height:20px; 
	float:left; 
	border-top:1px solid #fff; 
	font-weight:bold; 
	text-align:center; 
	padding-top:3px;
}
.go-enter a{
	color:#fff;
	text-decoration:none;
}
.green-icon{
	width:100%; 
	height:100px; 
	background:rgba(10,177,22,0.8);
	box-shadow:#0ab116 0 0 2px 2px;
	border-radius:5px; 
	padding:5px; 
	float:left;
}
.red-icon{
	width:100%; 
	height:100px; 
	background:rgba(201,29,10,0.8); 
	border-radius:5px; 
	padding:10px; 
	box-shadow:#c91d0a 0 0 2px 2px; 
	float:left;
}
.darkgreen-icon{
	width:100%; 
	height:100px; 
	background:rgba(46,165,105,0.8); 
	border-radius:5px; 
	padding:10px; 
	box-shadow:#2ea569 0 0 2px 2px;
	float:left;
}
</style>
    <div class="content container" style="margin-top:0; padding-top:0">
    <h2 class="page-title">Dashboard <small><?php echo $this->session->userdata('AdminAccessName');?></small></h2>
    <div class="row">
        <div class="col-lg-8">
            <section class="widget">
            	<div class="row">
                        <div class="col-sm-3 dashboard-widgets">
                            <div class="blue-icon">
                            	
                                <div style="width:100%; height:70px; float:left">
                                    <div class="fa fa-user icon-size"></div>
                                    <div class="info-area"> Company Information</div>
                                </div>
                                <div class="go-enter"><a href="#"><i class="fa fa-key"></i> Go Enter</a></div>
                                
                            </div>
                        </div>
                        
                        
                        <div class="col-sm-3">
                            <div class="green-icon">
                            	
                                <div style="width:100%; height:70px; float:left">
                                    <div class="fa fa-user icon-size"></div>
                                    <div class="info-area"> Company Information</div>
                                </div>
                                <div class="go-enter"><a href="#"><i class="fa fa-key"></i> Go Enter</a></div>
                                
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="red-icon">
                                <div style="width:100%; height:70px; float:left">
                                    <div class="fa fa-user icon-size"></div>
                                    <div class="info-area"> Company Information</div>
                                </div>
                                <div class="go-enter"><a href="#"><i class="fa fa-key"></i> Go Enter</a></div>
                                
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="darkgreen-icon">
                                <div style="width:100%; height:70px; float:left">
                                    <div class="fa fa-user icon-size"></div>
                                    <div class="info-area"> Company Information</div>
                                </div>
                                <div class="go-enter"><a href="#"><i class="fa fa-key"></i> Go Enter</a></div>
                                
                            </div>
                        </div>
                </div>
            </section>
            <section class="widget">
                <header>
                    <h4>
                        Visits
                        <small>
                            Based on a three months data                            </small>                        </h4>
                    <div class="widget-controls">
                        <a title="Options" href="#"><i class="glyphicon glyphicon-cog"></i></a>
                        <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                        <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                        <a data-widgster="close" title="Close" href="#"><i class="glyphicon glyphicon-remove"></i></a>                        </div>
              </header>
                <div class="body no-margin">
                    <div id="visits-chart" class="chart visits-chart">
                        <svg></svg>
                    </div>
                    <div class="visits-info well well-sm">
                        <div class="row">
                            <div class="col-sm-3 col-xs-6">
                                <div class="key"><i class="fa fa-users"></i> Total Traffic</div>
                                <div class="value">24 541 <i class="fa fa-caret-up color-green"></i></div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="key"><i class="fa fa-bolt"></i> Unique Visits</div>
                                <div class="value">14 778 <i class="fa fa-caret-down color-red"></i></div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="key"><i class="fa fa-plus-square"></i> Revenue</div>
                                <div class="value">$3 583.18 <i class="fa fa-caret-up color-green"></i></div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="key"><i class="fa fa-user"></i> Total Sales</div>
                                <div class="value">$59 871.12 <i class="fa fa-caret-down color-red"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
        </div>
        <div class="col-lg-4">
            
            <section class="widget widget-tabs">
                <header>
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#stats" data-toggle="tab">Users</a>                            </li>
                        <li>
                            <a href="#report" data-toggle="tab">Favorites</a>                            </li>
                        <li>
                            <a href="#dropdown1" data-toggle="tab">Commenters</a>                            </li>
                    </ul>
              </header>
                <div class="body tab-content">
                    <div id="stats" class="tab-pane active clearfix">
                        <h5 class="tab-header"><span class="label label-primary"><i class="fa fa-facebook"></i></span> Last logged-in users</h5>
                        <ul class="news-list">
                            <li>
                                <img src="img/1.png" alt="" class="pull-left img-circle"/>
                                <div class="news-item-info">
                                    <div class="name"><a href="#">Finees Lund</a></div>
                                    <div class="position">Product Designer</div>
                                    <div class="time">Last logged-in: Mar 20, 18:46</div>
                                </div>
                            </li>
                            <li>
                                <img src="img/3.png" alt="" class="pull-left img-circle"/>
                                <div class="news-item-info">
                                    <div class="name"><a href="#">Erebus Novak</a></div>
                                    <div class="position">Software Engineer</div>
                                    <div class="time">Last logged-in: Mar 23, 9:02</div>
                                </div>
                            </li>
                            <li>
                                <img src="img/2.png" alt="" class="pull-left img-circle"/>
                                <div class="news-item-info">
                                    <div class="name"><a href="#">Leopoldo Reier</a></div>
                                    <div class="position">Chief Officer</div>
                                    <div class="time">Last logged-in: Jun 6, 15:34</div>
                                </div>
                            </li>
                            <li>
                                <img src="img/13.png" alt="" class="pull-left img-circle"/>
                                <div class="news-item-info">
                                    <div class="name"><a href="#">Frans Garey</a></div>
                                    <div class="position">Financial Assistant</div>
                                    <div class="time">Last logged-in: Jun 8, 17:20</div>
                                </div>
                            </li>
                            <li>
                                <img src="img/14.png" alt="" class="pull-left img-circle"/>
                                <div class="news-item-info">
                                    <div class="name"><a href="#">Jessica Johnsson</a></div>
                                    <div class="position">Sales Manager</div>
                                    <div class="time">Last logged-in: Jun 8, 9:13</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="report" class="tab-pane">
                        <h5 class="tab-header"><i class="fa fa-star"></i> Popular contacts</h5>
                        <ul class="news-list news-list-no-hover">
                            <li>
                                <img src="img/14.png" alt="" class="pull-left img-circle"/>
                                <div class="news-item-info">
                                    <div class="name"><a href="#">Jessica Johnsson</a></div>
                                    <div class="options">
                                        <button class="btn btn-xs btn-success">
                                            <i class="fa fa-phone"></i>
                                            Call
                                        </button>
                                        <button class="btn btn-xs btn-warning">
                                            <i class="fa fa-envelope-o"></i>
                                            Message
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <img src="img/13.png" alt="" class="pull-left img-circle"/>
                                <div class="news-item-info">
                                    <div class="name"><a href="#">Frans Garey</a></div>
                                    <div class="options">
                                        <button class="btn btn-xs btn-success">
                                            <i class="fa fa-phone"></i>
                                            Call
                                        </button>
                                        <button class="btn btn-xs btn-warning">
                                            <i class="fa fa-envelope-o"></i>
                                            Message
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <img src="img/3.png" alt="" class="pull-left img-circle"/>
                                <div class="news-item-info">
                                    <div class="name"><a href="#">Erebus Novak</a></div>
                                    <div class="options">
                                        <button class="btn btn-xs btn-success">
                                            <i class="fa fa-phone"></i>
                                            Call
                                        </button>
                                        <button class="btn btn-xs btn-warning">
                                            <i class="fa fa-envelope-o"></i>
                                            Message
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <img src="img/2.png" alt="" class="pull-left img-circle"/>
                                <div class="news-item-info">
                                    <div class="name"><a href="#">Leopoldo Reier</a></div>
                                    <div class="options">
                                        <button class="btn btn-xs btn-success">
                                            <i class="fa fa-phone"></i>
                                            Call
                                        </button>
                                        <button class="btn btn-xs btn-warning">
                                            <i class="fa fa-envelope-o"></i>
                                            Message
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <img src="img/1.png" alt="" class="pull-left img-circle"/>
                                <div class="news-item-info">
                                    <div class="name"><a href="#">Finees Lund</a></div>
                                    <div class="options">
                                        <button class="btn btn-xs btn-success">
                                            <i class="fa fa-phone"></i>
                                            Call
                                        </button>
                                        <button class="btn btn-xs btn-warning">
                                            <i class="fa fa-envelope-o"></i>
                                            Message
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="dropdown1" class="tab-pane">
                        <h5 class="tab-header"><i class="fa fa-comments"></i> Top Commenters</h5>
                        <ul class="news-list">
                            <li>
                                <img src="img/13.png" alt="" class="pull-left img-circle"/>
                                <div class="news-item-info">
                                    <div class="name"><a href="#">Frans Garey</a></div>
                                    <div class="comment">
                                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                                        sed quia
                                    </div>
                                </div>
                            </li>
                            <li>
                                <img src="img/1.png" alt="" class="pull-left img-circle"/>
                                <div class="news-item-info">
                                    <div class="name"><a href="#">Finees Lund</a></div>
                                    <div class="comment">
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                        eu fugiat.
                                    </div>
                                </div>
                            </li>
                            <li>
                                <img src="img/14.png" alt="" class="pull-left img-circle"/>
                                <div class="news-item-info">
                                    <div class="name"><a href="#">Jessica Johnsson</a></div>
                                    <div class="comment">
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                        deserunt.
                                    </div>
                                </div>
                            </li>
                            <li>
                                <img src="img/3.png" alt="" class="pull-left img-circle"/>
                                <div class="news-item-info">
                                    <div class="name"><a href="#">Erebus Novak</a></div>
                                    <div class="comment">
                                        Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium
                                        doloremque.
                                    </div>
                                </div>
                            </li>
                            <li>
                                <img src="img/2.png" alt="" class="pull-left img-circle"/>
                                <div class="news-item-info">
                                    <div class="name"><a href="#">Leopoldo Reier</a></div>
                                    <div class="comment">
                                        Laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis
                                        et quasi.
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="widget">
                <header>
                    <h4>
                        Server Overview                        </h4>
                    <div class="actions">
                        <small class="text-muted pull-right">2 days ago</small>                        </div>
              </header>
                <div class="body">
                    <ul class="server-stats">
                        <li>
                            <div class="key pull-right">CPU</div>
                            <div class="stat">
                                <div class="info">60% / 37&deg;C / 3.3 Ghz</div>
                                <div class="progress progress-small">
                                    <div class="progress-bar progress-bar-danger" style="width: 70%;"></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="key pull-right">Mem</div>
                            <div class="stat">
                                <div class="info">29% / 4GB (16 GB)</div>
                                <div class="progress progress-small">
                                    <div class="progress-bar" style="width: 29%;"></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="key pull-right">LAN</div>
                            <div class="stat">
                                <div class="info">6 Mb/s <i class="fa fa-caret-down"></i> &nbsp; 3 Mb/s <i class="fa fa-caret-up"></i></div>
                                <div class="progress progress-small">
                                    <div class="progress-bar progress-bar-inverse" style="width: 48%;"></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
    </div>
    <div class="loader-wrap hiding hide">
        <i class="fa fa-circle-o-notch fa-spin"></i>
    </div>
</div>