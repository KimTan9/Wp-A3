<?php session_start();?>
<?php session_start();?>
<!DOCTYPE html>
<html>
<head lang="en">
    <?php include_once "includes/headA.php";?>

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
       <?php include_once "includes/nav.php"?>
        <!-- ~~~~Navigation area><!-->

        <!--Masthead area><!--
        <div id="big_Head" class="page-header fix_cloudsColor">
            <div class="container">
                <h1><img src="imgs/logo.png">
                    Silverado&nbsp;&nbsp;&nbsp;
                    <small>The best experience for film</small>
                </h1>
            </div>
        </div>
        <!-- ~~~↑ ↑Masthead area><!-->

        <!--big_1><!-->
        <div id="bigRect" class="tile tile-super-x tile-large-y fixBigRect">
            <div class="tile-content">
                <div class="carousel" data-role="carousel">
                    <div class="slide">
                        <a href='movieList.html#Blood Diamond' target="_blank"><img src="imgs/bigRectRollingImgs/BRRI_4.png"></a>
                    </div>
                </div>
                <span class="tile-label tileLabelFixed_L">Blood Diamond</span>
            </div>
        </div>


		
        <!--move1text><!-->
      <div class="movie-info-text" class="tile tile-large-x">
										<br>                                    
                                     <div class="each-col f-right">
									 <b><h1>movie details</h1></b><br>
                                                                         	<div class="each-row">
                                        	<div class="col-1">Director:</div>
                                            <div class="col-2">Edward Zwick</div>
                                        </div>
                                                                            <div class="each-row">
                                        	<div class="col-1">Cast:</div>
                                            <div class="col-2"><p><span>Leonardo DiCaprio</span>,&nbsp;<span>Leonardo DiCaprio</span>,&nbsp;<span>Jennifer Connelly</p></div>
                                        </div>
                                                                                                                  
                                    </div>
                                    <div class="each-col f-left">
                                                                         	<div class="each-row">
                                        	<div class="col-1">Release:</div>
                                            <div class="col-2">03/09/2015</div>
                                        </div>
                                                                                                                  <div class="each-row">
                                        	<div class="col-1">Length:</div>
                                            <div class="col-2">143 Mins</div>
                                        </div>
                                                                             
                                        <div class="each-row">
                                        	<div class="col-1">Genre:</div>
                                            <div class="col-2">Adventure, Drama, Thriller</div>
                                        </div>
                                                                                                                  <div class="each-row">
                                        	<div class="col-1">Distributor:</div>
                                            <div class="col-2">Steven Spielberg </div>
                                        </div>
                                                                                                                  <div class="each-row">
                                        	<div class="col-1">Rating:</div>
                                            <div class="col-2 movie_rating">
                                                                                            <img src="imgs/rate/MA.png" alt="" width="20" align="absmiddle" title="" class="tooltip-sw"/>
                                            											<div> (MA15+ – Mature Accompanied)</div>
																				</div>
																			</div>
                                                                                                                  <div class="each-row">
											<a href='movieList.html#Blood Diamond'><button type="button" class="btn btn-primary">Back to Select Movie</button></a>																			
																		</div>
																		</div>
																	</div>





        <!--footer -->
       <?php include_once "includes/footer.php";?>
    <!--Main container end  ↑ ↑><!-->
</body>


</html>