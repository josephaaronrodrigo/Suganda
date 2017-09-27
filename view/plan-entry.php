<!DOCTYPE html>  
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
        <title>Elite Admin Template - The Ultimate Multipurpose admin template</title>
        <!-- Bootstrap Core CSS -->
        <link href="themeFiles/eliteadmin-inverse/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Menu CSS -->
        <link href="themeFiles/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
        <!-- Typehead CSS -->
        <link href="themeFiles/plugins/bower_components/typeahead.js-master/dist/typehead-min.css" rel="stylesheet">
        <!-- animation CSS -->
        <link href="themeFiles/eliteadmin-inverse/css/animate.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="themeFiles/eliteadmin-inverse/css/style.css" rel="stylesheet">
        <!-- color CSS -->
        <link href="themeFiles/eliteadmin-inverse/css/colors/default.css" id="theme"  rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>

            @import url(http://fonts.googleapis.com/css?family=Raleway:400,500,700);
            *, *::after, *::before {
                box-sizing: border-box; }

            .toggle-button {
                margin: 0 5px; }

            /*
             * Toggle button styles
             */
            .toggle-button {
                position: relative;
                display: inline-block;
                color: #fff; }
            .toggle-button label {
                display: inline-block;
                text-transform: uppercase;
                cursor: pointer;
                text-align: left; }
            .toggle-button input {
                display: none; }
            .toggle-button__icon {
                cursor: pointer;
                pointer-events: none; }
            .toggle-button__icon:before, .toggle-button__icon:after {
                content: "";
                position: absolute;
                top: 45%;
                left: 35%;
                transition: 0.2s ease-out; }


            .toggle-button--aava label {
                height: 50px;
                line-height: 50px;
                transition: all 0.2s;
                border-radius: 2rem; }
            .toggle-button--aava label:before, .toggle-button--aava label:after {
                position: absolute;
                right: 1.5rem;
                transition: all 0.2s .1s ease-out; }
            .toggle-button--aava label:before {
                content: attr(data-on-text); }
            .toggle-button--aava label:after {
                content: attr(data-off-text); }

            .toggle-button--aava input[type=radio] + label {
                width: 120px;
                background: #F04A45; }
            .toggle-button--aava input[type=radio] + label:before {
                opacity: 0;
                transform: translate(0, 20px); }
            .toggle-button--aava input[type=radio] + label:after {
                opacity: 1;
                transform: translate(0, 0); }

            .toggle-button--aava input[type=radio]:checked ~ label {
                width: 120px;
                background: #3bc293; }
            .toggle-button--aava input[type=radio]:checked ~ label:before {
                opacity: 1;
                transform: translate(0, 0); }
            .toggle-button--aava input[type=radio]:checked ~ label:after {
                opacity: 0;
                transform: translate(0, -20px); }

            .toggle-button--aava input[type=radio]:checked ~ .toggle-button__icon:before {
                transform: translate(-10%, 100%) rotate(45deg);
                width: 16.66667px; }

            .toggle-button--aava input[type=radio]:checked ~ .toggle-button__icon:after {
                transform: translate(30%) rotate(-45deg); }

            .toggle-button--aava .toggle-button__icon {
                position: absolute;
                left: 0;
                top: 0;
                height: 50px;
                width: 50px; }
            .toggle-button--aava .toggle-button__icon:before, .toggle-button--aava .toggle-button__icon:after {
                height: 3px;
                border-radius: 3px;
                background: #fff;
                box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1); }
            .toggle-button--aava .toggle-button__icon:before {
                width: 25px;
                transform: rotate(45deg); }
            .toggle-button--aava .toggle-button__icon:after {
                width: 25px;
                transform: rotate(-45deg); }


        </style>

        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-19175540-9', 'auto');
            ga('send', 'pageview');

        </script>
    </head>
    <body class="fix-sidebar">
        <!-- Preloader -->
        <div class="preloader">
            <div class="cssload-speeding-wheel"></div>
        </div>
        <div id="wrapper">
            <!-- Top Navigation -->
            <nav class="navbar navbar-default navbar-static-top m-b-0">
                <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                    <div class="top-left-part"><a class="logo" href="index.html"><b><!--This is dark logo icon--><img src="themeFiles/plugins/images/eliteadmin-logo.png" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="themeFiles/plugins/images/eliteadmin-logo-dark.png" alt="home" class="light-logo" /></b><span class="hidden-xs"><!--This is dark logo text--><img src="themeFiles//plugins/images/eliteadmin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><img src="themeFiles/plugins/images/eliteadmin-text-dark.png" alt="home" class="light-logo" /></span></a></div>
                    <ul class="nav navbar-top-links navbar-left hidden-xs">
                        <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>        
                    </ul>      
                </div>
            </nav>
            <!-- End Top Navigation -->
            <!-- Left navbar-header -->
            <div class="navbar-default sidebar" role="navigation">    
                <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                    <div class="user-profile">

                    </div>

                    <ul class="nav" id="side-menu">
                        <li> <a href="map-google.html" class="waves-effect"><i data-icon="Q" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu" >Google Map</span></a> </li>
                        <li> <a href="map-vector.html" class="waves-effect"><i data-icon="S" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu" >Vector Map</span></a> </li>
                        <li> <a href="calendar.html" class="waves-effect"><i data-icon="A" class="linea-icon linea-elaborate fa-fw"></i> <span class="hide-menu">Calendar</span></a></li>

                        <li><a href="login.html" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>

                    </ul>
                </div>
            </div>
            <!-- Left navbar-header end -->
            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row bg-title">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h4 class="page-title">Production Plan</h4>
                        </div>

                        <!-- /.col-lg-12 -->
                    </div>
                    <div class="row">                        
                        <script>
                            function loadEntryForm() {
                                var p = document.planEntry.plant_no.value;
                                var m = document.planEntry.month.value;
                                var s = document.planEntry.style.value;
                                var y = document.planEntry.year.value;
                                if (p !== "" && m !== "" && s !== "" && y !== "") {
                                    if (window.XMLHttpRequest) {
                                        // code for IE7+, Firefox, Chrome, Opera, Safari
                                        xmlhttp = new XMLHttpRequest();
                                    } else {
                                        // code for IE6, IE5
                                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                    }
                                    xmlhttp.onreadystatechange = function () {
                                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                            document.getElementById("entryForm").innerHTML = xmlhttp.responseText;
                                        }
                                    };
                                    xmlhttp.open("GET", "Ajax/plan-entry.php?p=" + p + "&m=" + m + "&s=" + s + "&y=" + y, true);
                                    xmlhttp.send();
                                }
                            }
                        </script>

                        <div class="col-lg-12">
                            <div class="white-box">               
                                <form name="planEntry" method="POST" action="../control/plan.php">
                                    <h3 class="text-muted">Style</h3>

                                    <div id="scrollable-dropdown-menu">
                                        <input class="typeahead form-control" type="text" name="style" placeholder="Styles" onchange="loadEntryForm()">
                                    </div>

                                    <br><br>
                                    <h3 class="text-muted">Select Plant</h3>

                                    <div class="toggle-button toggle-button--aava">
                                        <input id="toggleButton" type="radio" name="plant_no" value="1" onchange="loadEntryForm()">
                                        <label for="toggleButton" data-on-text="1" data-off-text="1"></label>
                                        <div class="toggle-button__icon"></div>
                                    </div>
                                    <div class="toggle-button toggle-button--aava">
                                        <input id="toggleButton2" type="radio" name="plant_no" value="2" onchange="loadEntryForm()">
                                        <label for="toggleButton2" data-on-text="2" data-off-text="2"></label>
                                        <div class="toggle-button__icon"></div>
                                    </div>
                                    <div class="toggle-button toggle-button--aava">
                                        <input id="toggleButton3" type="radio" name="plant_no" value="3" onchange="loadEntryForm()">
                                        <label for="toggleButton3" data-on-text="3" data-off-text="3"></label>
                                        <div class="toggle-button__icon"></div>
                                    </div>
                                    <div class="toggle-button toggle-button--aava">
                                        <input id="toggleButton4" type="radio" name="plant_no" value="4" onchange="loadEntryForm()">
                                        <label for="toggleButton4" data-on-text="4" data-off-text="4"></label>
                                        <div class="toggle-button__icon"></div>
                                    </div>
                                    <div class="toggle-button toggle-button--aava">
                                        <input id="toggleButton5" type="radio" name="plant_no" value="5" onchange="loadEntryForm()">
                                        <label for="toggleButton5" data-on-text="5" data-off-text="5"></label>
                                        <div class="toggle-button__icon"></div>
                                    </div>
                                    <div class="toggle-button toggle-button--aava">
                                        <input id="toggleButton6" type="radio" name="plant_no" value="6" onchange="loadEntryForm()">
                                        <label for="toggleButton6" data-on-text="6" data-off-text="6"></label>
                                        <div class="toggle-button__icon"></div>
                                    </div>
                                    <div class="toggle-button toggle-button--aava">
                                        <input id="toggleButton7" type="radio" name="plant_no" value="7" onchange="loadEntryForm()">
                                        <label for="toggleButton7" data-on-text="7" data-off-text="7"></label>
                                        <div class="toggle-button__icon"></div>
                                    </div>
                                    <div class="toggle-button toggle-button--aava">
                                        <input id="toggleButtonall" type="radio" name="plant_no" value="%" onchange="loadEntryForm()">
                                        <label for="toggleButtonall" data-on-text="ALL" data-off-text="ALL"></label>
                                        <div class="toggle-button__icon"></div>
                                    </div>
                                    <br>

                                    <h3 class="text-muted">Select Year</h3>
                                    <?php
                                    $y = date('Y');
                                    $y1 = $y + 1;
                                    ?>
                                    <div class="toggle-button toggle-button--aava">
                                        <input id="toggleButton2017" type="radio" name="year" value="<?php echo $y; ?>" onchange="loadEntryForm()">
                                        <label for="toggleButton2017" data-on-text="<?php echo $y; ?>" data-off-text="<?php echo $y; ?>"></label>
                                        <div class="toggle-button__icon"></div>
                                    </div>
                                    <div class="toggle-button toggle-button--aava">
                                        <input id="toggleButton2018" type="radio" name="year" value="<?php echo $y1; ?>" onchange="loadEntryForm()">
                                        <label for="toggleButton2018" data-on-text="<?php echo $y1; ?>" data-off-text="<?php echo $y1; ?>"></label>
                                        <div class="toggle-button__icon"></div>
                                    </div>
                                    <br>
                                    <h3 class="text-muted">Select Month</h3>

                                    <div class="toggle-button toggle-button--aava">
                                        <input id="toggleButtonjan" type="radio" name="month" value="Jan" onchange="loadEntryForm()">
                                        <label for="toggleButtonjan" data-on-text="JAN" data-off-text="JAN"></label>
                                        <div class="toggle-button__icon"></div>
                                    </div>
                                    <div class="toggle-button toggle-button--aava">
                                        <input id="toggleButtonfeb" type="radio" name="month" value="Feb" onchange="loadEntryForm()">
                                        <label for="toggleButtonfeb" data-on-text="FEB" data-off-text="FEB"></label>
                                        <div class="toggle-button__icon"></div>
                                    </div>
                                    <div class="toggle-button toggle-button--aava">
                                        <input id="toggleButtonmar" type="radio" name="month" value="Mar" onchange="loadEntryForm()">
                                        <label for="toggleButtonmar" data-on-text="MAR" data-off-text="MAR"></label>
                                        <div class="toggle-button__icon"></div>
                                    </div>
                                    <div class="toggle-button toggle-button--aava">
                                        <input id="toggleButtonapr" type="radio" name="month" value="Apr" onchange="loadEntryForm()">
                                        <label for="toggleButtonapr" data-on-text="APR" data-off-text="APR"></label>
                                        <div class="toggle-button__icon"></div>
                                    </div>
                                    <div class="toggle-button toggle-button--aava">
                                        <input id="toggleButtonmay" type="radio" name="month"value="May" onchange="loadEntryForm()">
                                        <label for="toggleButtonmay" data-on-text="MAY" data-off-text="MAY"></label>
                                        <div class="toggle-button__icon"></div>
                                    </div>
                                    <div class="toggle-button toggle-button--aava">
                                        <input id="toggleButtonjun" type="radio" name="month" value="Jun" onchange="loadEntryForm()">
                                        <label for="toggleButtonjun" data-on-text="JUN" data-off-text="JUN"></label>
                                        <div class="toggle-button__icon"></div>
                                    </div><br>
                                    <div class="toggle-button toggle-button--aava">
                                        <input id="toggleButtonjul" type="radio" name="month" value="Jul" onchange="loadEntryForm()">
                                        <label for="toggleButtonjul" data-on-text="JUL" data-off-text="JUL"></label>
                                        <div class="toggle-button__icon"></div>
                                    </div>
                                    <div class="toggle-button toggle-button--aava">
                                        <input id="toggleButtonaug" type="radio" name="month" value="Aug" onchange="loadEntryForm()">
                                        <label for="toggleButtonaug" data-on-text="AUG" data-off-text="AUG"></label>
                                        <div class="toggle-button__icon"></div>
                                    </div>
                                    <div class="toggle-button toggle-button--aava">
                                        <input id="toggleButtonsep" type="radio" name="month" value="Sep" onchange="loadEntryForm()">
                                        <label for="toggleButtonsep" data-on-text="SEP" data-off-text="SEP"></label>
                                        <div class="toggle-button__icon"></div>
                                    </div>
                                    <div class="toggle-button toggle-button--aava">
                                        <input id="toggleButtonoct" type="radio" name="month" value="Oct" onchange="loadEntryForm()">
                                        <label for="toggleButtonoct" data-on-text="OCT" data-off-text="OCT"></label>
                                        <div class="toggle-button__icon"></div>
                                    </div>
                                    <div class="toggle-button toggle-button--aava">
                                        <input id="toggleButtonnov" type="radio" name="month" value="Nov" onchange="loadEntryForm()">
                                        <label for="toggleButtonnov" data-on-text="NOV" data-off-text="NOV"></label>
                                        <div class="toggle-button__icon"></div>
                                    </div>
                                    <div class="toggle-button toggle-button--aava">
                                        <input id="toggleButtondec" type="radio" name="month" value="Dec" onchange="loadEntryForm()">
                                        <label for="toggleButtondec" data-on-text="DEC" data-off-text="DEC"></label>
                                        <div class="toggle-button__icon"></div>
                                    </div>

                                    <br>
                                    <div id="entryForm"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <script>
                        function calcTotalPlan() {
                            var p = document.getElementsByName("p[]");
                            var p_total = document.getElementsByName("p_total[]");
                            var total = 0;
                            for (var i = 0; i < p.length; i++) {
                                if (p[i].value !== "") {
                                    total = Number(total) + Number(p[i].value);
                                    p_total[i].value = total;
                                }
                            }
                        }
                        function calcTotalShip() {
                            var s = document.getElementsByName("s[]");
                            var s_total = document.getElementsByName("s_total[]");
                            var total = 0;
                            for (var i = 0; i < s.length; i++) {
                                if (s[i].value !== "") {
                                    total = Number(total) + Number(s[i].value);
                                    s_total[i].value = total;
                                }
                            }
                        }

                    </script>
                    <script>
                        function calFullTotalPlan() {
                            var p_1 = document.getElementsByName("p_1[]");
                            var p_2 = document.getElementsByName("p_2[]");
                            var p_3 = document.getElementsByName("p_3[]");
                            var p_4 = document.getElementsByName("p_4[]");
                            var p_5 = document.getElementsByName("p_5[]");
                            var p_6 = document.getElementsByName("p_6[]");
                            var p_7 = document.getElementsByName("p_7[]");
                            var p_total = document.getElementsByName("p_total[]");
                            var total = 0;
                            for (var i = 0; i < p_total.length; i++) {
                                if (p_1[i].value != "" || p_2[i].value != "" || p_3[i].value != "" || p_4[i].value != "" || p_5[i].value != "" || p_6[i].value != "" || p_7[i].value != "") {
                                    total = Number(total) + Number(p_1[i].value) + Number(p_2[i].value) + Number(p_3[i].value) + Number(p_4[i].value) + Number(p_5[i].value) + Number(p_6[i].value) + Number(p_7[i].value);
                                    p_total[i].value = total;
                                }
                            }
                        }
                        function calFullTotalShip() {
                            var s_1 = document.getElementsByName("s_1[]");
                            var s_2 = document.getElementsByName("s_2[]");
                            var s_3 = document.getElementsByName("s_3[]");
                            var s_4 = document.getElementsByName("s_4[]");
                            var s_5 = document.getElementsByName("s_5[]");
                            var s_6 = document.getElementsByName("s_6[]");
                            var s_7 = document.getElementsByName("s_7[]");
                            var s_total = document.getElementsByName("s_total[]");
                            var total = 0;
                            for (var i = 0; i < s_total.length; i++) {
                                if (s_1[i].value != "" || s_2[i].value != "" || s_3[i].value != "" || s_4[i].value != "" || s_5[i].value != "" || s_6[i].value != "" || s_7[i].value != "") {
                                    total = Number(total) + Number(s_1[i].value) + Number(s_2[i].value) + Number(s_3[i].value) + Number(s_4[i].value) + Number(s_5[i].value) + Number(s_6[i].value) + Number(s_7[i].value);
                                    s_total[i].value = total;
                                }
                            }
                        }
                    </script>


                </div>
                <!-- /.container-fluid -->
                <footer class="footer text-center"> 2017 &copy; Quoded &trade; </footer>
            </div>
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->
        <!-- jQuery -->
        <script src="themeFiles/plugins/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="themeFiles/eliteadmin-inverse/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Menu Plugin JavaScript -->
        <script src="themeFiles/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
        <!--slimscroll JavaScript -->
        <script src="themeFiles/eliteadmin-inverse/js/jquery.slimscroll.js"></script>
        <!--Wave Effects -->
        <script src="themeFiles/eliteadmin-inverse/js/waves.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="themeFiles/eliteadmin-inverse/js/custom.min.js"></script>

        <!-- Typehead Plugin JavaScript -->
        <script src="themeFiles/plugins/bower_components/typeahead.js-master/dist/typeahead.bundle.min.js"></script>
        <!--<script src="themeFiles/plugins/bower_components/typeahead.js-master/dist/typeahead-init.js"></script>-->
        <script>
                        var substringMatcher = function (strs) {
                            return function findMatches(q, cb) {
                                var matches, substringRegex;

                                // an array that will be populated with substring matches
                                matches = [];

                                // regex used to determine if a string contains the substring `q`
                                substrRegex = new RegExp(q, 'i');

                                // iterate through the pool of strings and for any string that
                                // contains the substring `q`, add it to the `matches` array
                                $.each(strs, function (i, str) {
                                    if (substrRegex.test(str)) {
                                        matches.push(str);
                                    }
                                });

                                cb(matches);
                            };
                        };

                        var states = [
<?php
include '../model/production.php';
$obj1 = new Production();
$res = $obj1->getAllStyles();
while ($row = mysql_fetch_array($res)) {
    echo "\"" . $row['style'] . "\",";
}
?>
                        ];
                        ;


                        $('#the-basics .typeahead').typeahead({
                            hint: true,
                            highlight: true,
                            minLength: 1
                        },
                        {
                            name: 'states',
                            source: substringMatcher(states)
                        });

// ---------- Bloodhound ----------

// constructs the suggestion engine
                        var states = new Bloodhound({
                            datumTokenizer: Bloodhound.tokenizers.whitespace,
                            queryTokenizer: Bloodhound.tokenizers.whitespace,
                            // `states` is an array of state names defined in "The Basics"
                            local: states
                        });

                        $('#bloodhound .typeahead').typeahead({
                            hint: true,
                            highlight: true,
                            minLength: 1
                        },
                        {
                            name: 'states',
                            source: states
                        });


// -------- Prefatch --------

//var countries = new Bloodhound({
//  datumTokenizer: Bloodhound.tokenizers.whitespace,
//  queryTokenizer: Bloodhound.tokenizers.whitespace,
//  // url points to a json file that contains an array of country names, see
//  // https://github.com/twitter/typeahead.js/blob/gh-pages/data/countries.json
////  prefetch: '../plugins/bower_components/typeahead.js-master/countries.json'
//});

// passing in `null` for the `options` arguments will result in the default
// options being used
//$('#prefetch .typeahead').typeahead(null, {
//  name: 'countries',
//  source: countries
//});

// -------- Custom --------

//var nflTeams = new Bloodhound({
//  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('team'),
//  queryTokenizer: Bloodhound.tokenizers.whitespace,
//  identify: function(obj) { return obj.team; },
//  prefetch: '../plugins/bower_components/typeahead.js-master/nfl.json'
//});

                        function nflTeamsWithDefaults(q, sync) {
                            if (q === '') {
                                sync(nflTeams.get('Detroit Lions', 'Green Bay Packers', 'Chicago Bears'));
                            }

                            else {
                                nflTeams.search(q, sync);
                            }
                        }

//$('#default-suggestions .typeahead').typeahead({
//  minLength: 0,
//  highlight: true
//},
//{
//  name: 'nfl-teams',
//  display: 'team',
//  source: nflTeamsWithDefaults
//});

// -------- Multiple --------

                        var nbaTeams = new Bloodhound({
                            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('team'),
                            queryTokenizer: Bloodhound.tokenizers.whitespace,
//  prefetch: '../plugins/bower_components/typeahead.js-master/nba.json'
                        });

                        var nhlTeams = new Bloodhound({
                            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('team'),
                            queryTokenizer: Bloodhound.tokenizers.whitespace,
//  prefetch: '../plugins/bower_components/typeahead.js-master/nhl.json'
                        });

                        $('#multiple-datasets .typeahead').typeahead({
                            highlight: true
                        },
                        {
                            name: 'nba-teams',
                            display: 'team',
                            source: nbaTeams,
                            templates: {
                                header: '<h3 class="league-name">NBA Teams</h3>'
                            }
                        },
                        {
                            name: 'nhl-teams',
                            display: 'team',
                            source: nhlTeams,
                            templates: {
                                header: '<h3 class="league-name">NHL Teams</h3>'
                            }
                        });

// -------- Scrollable --------



                        $('#scrollable-dropdown-menu .typeahead').typeahead(null, {
                            name: 'states',
                            limit: 10,
                            source: states
                        });

        </script>
        <!-- Style Switcher -->
        <script src="themeFiles/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    </body>
</html>