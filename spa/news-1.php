<?php session_start();?>
<!DOCTYPE html>
<html>
<head lang="en">
    <?php include_once "includes/headA.php";?>
</head>

<body>
    <!--Import the scripts><!-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/teninedialog1.0.0.js"></script>
    <script src="js/metro.min.js"></script>
    <script src="js/SilveradoMain.js"></script>
    <!--Import the scripts><!-->

    <!--Main container here ↓ ↓><!-->
    <div class="container">
        <div id="big_Head" class="page-header fix_cloudsColor">
            <div class="container">
				<div class="left">
				<a href= "index.html"><h1><img src="imgs/logo.png" width="150" height="150"></a>
                    Silverado&nbsp;&nbsp;&nbsp;
                    <small>The best experience for film</small>
                </h1>
				</div>
            </div>
        </div>
        <!--Navigation area><!-->
        <?php include_once "includes/snav.php";?>
        <!-- ~~~~Navigation area><!-->


        <!--big_1><!-->
        <div id="bigRect" class="tile tile-super-x tile-large-y fixBigRect">
            <div class="tile-content">
                <div class="carousel" data-role="carousel">
                    <div class="slide">
                        <img src="imgs/bigRectRollingImgs/NEWS_1.png">
                    </div>
                </div>
            </div>
        </div>


		
        <!--move1text><!-->
      <div class="movie-info-text" class="tile tile-large-x">
										<br>                                    
                                     <div class="each-col f-right">
									 <b><h1>New Cinema details</h1></b>
                                                                         	<div class="each-row">
                                        	<div class="col-1">Seats Information:</div>
                                            <div class="col-2">40 Normal seats (Full, Concession and Child under 12 pricing options)</br></br>
															   12 First Class seats (Full and Child pricing options)</br></br>
															   13 Bean Bag seats that can accommodate 2 adults, 1 adult + 1 child OR 3 children (under 12)</div>
                                        </div>
                                            <div class="each-row">
                                        	<div class="col-1">New Equipments:</div>
                                            <div class="col-2">New 3D projection facilities</br>
															   New Dolby lighting and sound.</div>
                                        </div>
                                                                                                                  
                                    </div>
                                    <div class="each-col f-left">
                                       <div class="each-row">
                                        	<div class="col-1">Open time:</div>
                                            <div class="col-2">11/09/2015</div>
                                        </div>
										<div class="each-row">
											<a href='newsList.html#new cinema'><button type="button" class="btn btn-primary">Back to News List</button></a>
										</div>
																	</div>
																</div>
																</div>
																</br>
																</br>
																</br>
																</br>



        <!--footer -->
<?php include_once "includes/footer.php";?>
    <!--Main container end  ↑ ↑><!-->        
</body>


</html>