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
        <?php include_once "includes/nav.php";?>
        <!-- ~~~~Navigation area><!-->


        <!--big_1><!-->
        <div id="bigRect" class="tile tile-super-x tile-large-y fixBigRect">
            <div class="tile-content">
                <div class="carousel" data-role="carousel">
                    <div class="slide">
                        <img src="imgs/bigRectRollingImgs/membership.jpg">
                    </div>
                </div>
            </div>
        </div>


		
        <!--move1text><!-->
      <div class="movie-info-text" class="tile tile-large-x">
										<br>                                    
                                     <div class="each-col f-right">
									 <b><h1>Membership details</h1></b>
                                                                         	<div class="each-row">
                                        	<div class="col-1">Golden:</div>
                                            <div class="col-2">Family Tickets 50% discount</br>
															   Couple Tickets 40% discount</br>
															   Single Tickets 40% discount</div>
                                        </div></br></br>
                                            <div class="each-row">
                                        	<div class="col-1">Silver:</div>
                                            <div class="col-2">Family Tickets 40% discount</br>
															   Couple Tickets 30% discount</br>
															   Single Tickets 30% discount</div>
                                        </div></br>
                                                                                                                  
                                    </div>
                                    <div class="each-col f-left">
                                       <div class="each-row">
                                        	<div class="col-1">Student:</div>
                                            <div class="col-2">Couple Tickets 40% discount</br>
															   Single Tickets 40% discount</div>
                                        </div>
																				</div>
																			</div>
										<div class="each-row">
											<a href='newsList.html#membership'><button type="button" class="btn btn-primary">Back to News List</button></a>
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
