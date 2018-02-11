<?php 
include_once("header.php")
?>

	<!----main cotainer---->
	<div id="content" style="background: red">

		<!----navigation bar with bootstrap---->
		<nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Toggle Sidebar</span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
		<!----nav end---->

		<div class="box"></div>
               
               

	</div>
	<!----main cotainer edn---->
<?php
include_once("footer.php")
?>