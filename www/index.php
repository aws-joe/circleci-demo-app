<?php
ob_start();

include "../phpsysinfo/xml.php";

$buff = ob_get_clean();

if(strlen($buff) < 200)
	{
	print "Error in system information gathering<br>\n";
	exit(1);
	}
else
	{
	$buffA = json_decode($buff,true);
	if(json_last_error() != JSON_ERROR_NONE)
		{
		print "Error in JSON Response<br>\n";
		exit(1);
		}
	}

?>
<!DOCTYPE html>
<head>
	<!-- 
    	Brownie Template
    	http://www.templatemo.com/preview/templatemo_440_brownie

    	Credits:
    	http://sorgalla.com/jcarousel/
    	http://unsplash.com
    	http://absurdwordpreferred.deviantart.com/art/FREE-Cogs-Transparent-PNG-145452644
    -->
	<title>CircleCI & CodeDeploy</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/templatemo_style.css" rel="stylesheet" type="text/css">
	<script src="Chart.min.js"></script>
</head>
<body>
	<nav id="responsive-menu">
        <ul class="menu-holder">
            <li class="active"><a href="#home"><i class="fa fa-home"></i>Home</a></li>
            <li><a href="#about"><i class="fa fa-briefcase"></i>CPU</a></li>
            <li><a href="#services"><i class="fa fa-cogs"></i>Memory</a></li>
            <li><a href="#products"><i class="fa fa-list"></i>Network</a></li>
            <li><a href="#contact"><i class="fa fa-envelope"></i>Disk</a></li>
        </ul>
    </nav>
    <div class="templatemo-site-header">
		<div class="container">
			<div class="row templatemo-position-relative">				
				<nav class="hidden-xs text-uppercase templatemo-nav">
					<ul class="menu-holder">
						<li class="active"><a href="#home">Home</a></li>
						<li><a href="#about">CPU</a></li>					
						<li><a href="#services">Memory</a></li>
						<li><a href="#products">Network</a></li>
						<li><a href="#contact">Disk</a></li>
					</ul>
				</nav>
				<h1 class="templatemo-site-name">
                	<span class="templatemo-brown">AWS</span> 
                	<span class="templatemo-gold">CircleCI</span>
                </h1>
				<div class="text-right visible-xs">
		            <a href="#" id="mobile_menu"><span class="fa fa-bars"></span></a>
		        </div>
			</div>
		</div>    	
    </div>
	<section id="home" class="templatemo-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 templatemo-position-relative">
						<canvas id="overview" width="600" height="400"></canvas>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="templatemo-content-box templatemo-second-box">
						<h2 class="templatemo-brown">System Overview</h2>
						<h3 class="templatemo-gold">Overview of major system components.</h3>
						<p class="margin-top-30">System overview information for top processes and resources used.</p>
					</div>					
				</div>
			</div>
		</div>
	</section>
	<section id="about" class="templatemo-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="templatemo-content-box text-right">
						<h2 class="templatemo-brown">
							<span class="templatemo-section-title">CPU</span>
							<span class="templatemo-section-title">Information <span class="templatemo-gold"><strong>Graph</strong></span></span>
						</h2>
						<p class="margin-top-30">CPU use information in graph presentation.</p>
					</div>										
				</div>
				<div class="col-lg-6 col-md-6">
							<canvas id="cpu" width="600" height="400"></canvas>
				</div>
			</div>
		</div>
	</section>
	<section id="services" class="templatemo-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
						<canvas id="memory" width="600" height="400"></canvas>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="templatemo-content-box templatemo-second-box">
						<h2 class="templatemo-brown">
							<span class="templatemo-section-title">RAM</span>
							<span class="templatemo-section-title">System <span class="templatemo-gold"><strong>Memory</strong></span></span>
						</h2>
						<p class="margin-top-30">System memory.</p>
					</div>					
				</div>
			</div>
		</div>
	</section>
	<section id="products" class="templatemo-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="templatemo-content-box text-right">
						<h2 class="templatemo-brown">
							<span class="templatemo-section-title">Current Network</span>
							<span class="templatemo-section-title">Use <span class="templatemo-gold"><strong>DATA</strong></span></span>
						</h2>
						<p class="margin-top-30">Current system memory utilization.</p>
					</div>					
				</div>
				<div class="col-lg-6 col-md-6">
						<canvas id="network" width="600" height="400"></canvas>
				</div>
			</div>
		</div>
	</section>
	<section id="contact" class="templatemo-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<canvas id="disk" width="600" height="400"></canvas>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="templatemo-content-box templatemo-second-box">
						<h2 class="templatemo-brown">Disk Usage <span class="templatemo-gold">STORAGE</span></h2>
						<p class="margin-top-30">Current storage utilization.  Hard disk space on system.</p> 
					</div>					
				</div>
			</div>
		</div>
	</section>
	<footer class="container margin-top-30">
		<div class="row">
			<div class="col-lg-12">
				<p class="templatemo-copyright-container text-uppercase small templatemo-brown">
					<span class="templatemo-copyright-text">Copyright &copy; 2015 <a href="#" class="templatemo-gold">AWS</a></span>
					<!-- <span class="templatemo-copyright-design">Design: <a href="http://www.templatemo.com" class="templatemo-gold">templatemo</a></span> -->
				</p>
			</div>
		</div>		
	</footer>	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/templatemo_script.js"></script>
        <script>
            // line chart data
            var cpuData = {
                labels : ["One Min","Five Min","Fifteen Min"],
                datasets : [
                {
                    fillColor : "rgba(172,194,132,0.4)",
                    strokeColor : "#ACC26D",
                    pointColor : "#fff",
                    pointStrokeColor : "#9DB86D",
                    data : [0.08,0.03,0.05]
                }
            ]
            }
		var cpu = document.getElementById('cpu').getContext('2d');
		new Chart(cpu).Line(cpuData);
</script>
<script>
var oData = {
    labels: ["CPU", "Disk", "RAM", "Network", "Cache"],
    datasets: [
        {
            label: "first dataset",
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [5, 48, 40, 10, 15]
        }
    ]
};

            // get line chart canvas
            var overview = document.getElementById('overview').getContext('2d');
		new Chart(overview).Radar(oData);
</script>
<script>
            var dohData = [
                {
                    value: 62,
                    color:"#878BB6"
                },
                {
                    value : 98,
                    color : "#4ACAB4"
                }
            ];
            // pie chart options
            var dohOptions = {
                 segmentShowStroke : false,
                 animateScale : true
            }
            // get pie chart canvas
            var memory= document.getElementById("memory").getContext("2d");
            // draw pie chart
            new Chart(memory).Pie(dohData, dohOptions);
</script>
<script>
var netOptions = {
	animateRotate : true,
	scaleShowLabelBackdrop : true
	}
var netData = [
    {
        value: 26,
        color:"#F7464A",
        highlight: "#FF5A5E",
        label: "RxBytes"
    },
    {
        value: 75,
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "TxBytes"
    },
    {
        value: 1,
        color: "#FDB45C",
        highlight: "#FFC870",
        label: "Errors"
    },
    {
        value: 4,
        color: "#949FB1",
        highlight: "#A8B3C5",
        label: "Drops"
    }
];

            // get pie chart canvas
            var network= document.getElementById("network").getContext("2d");
            // draw pie chart
            new Chart(network).PolarArea(netData, netOptions);
</script>
<script>
var diskData = {
    labels: ["Disk Free", "Disk Used" ],
    datasets: [
        {
            label: "Root Disk",
            fillColor: "rgba(220,220,220,0.5)",
            strokeColor: "rgba(220,220,220,0.8)",
            highlightFill: "rgba(220,220,220,0.75)",
            highlightStroke: "rgba(220,220,220,1)",
            data: [6390845440, 3939082240 ]
        }
    ]
};
var diskOptions = {
	scaleBeginAtZero : true
        }
var disk= document.getElementById("disk").getContext("2d");
new Chart(disk).Bar(diskData, diskOptions);

</script>
</body>
</html>
