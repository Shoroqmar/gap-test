<!--header-->
<div class="header">
    <div class="header-top">
        <div class="container">
                <div class="col-sm-4 logo">
                    <h1><a href="index.php"><span>Zarkasha</span></a></h1>  
                </div>


                <div class="col-sm-4 world">
                    <div class="cart box_1">
                        <a href="checkout.html">
                        <img src="images/one.jpg" alt="Mountain View" style="border-radius: 50%; width: 50px; height: 50px;
                                                                                 border: 1px solid #ccc; border-radius:50%;">
                        </a> 
                    </div>
               </div>



                 <div class="cart box_1">
                 <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
                </div>
            
                <div class="clearfix"> </div>
        </div>
    </div>
        <div class="container">
            <div class="head-top">
            <div class="n-avigation">
            
                <nav class="navbar nav_bottom" role="navigation">
                
                 <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header nav_2">
                      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#"></a>
                   </div> 
                   <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav nav_1">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="setting.php">Setting</a></li>
                            <li><a href="account.html">Weather</a></li>
                        </ul>
                     </div><!-- /.navbar-collapse -->
                  
                </nav>
            </div>
            
                
        <div class="clearfix"> </div>
            <!---pop-up-box---->   
                    <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
                    <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
                    <!---//pop-up-box---->
                <div id="small-dialog" class="mfp-hide">
                <div class="search-top">
                        <div class="login">
                                <input type="submit" value="tt">
                                <input type="text" name="search" value="Search Member..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">                                  
                        </div>
                        <p> Member</p>
                    </div>              
                </div>               

                 <script>
                        $(document).ready(function() {
                        $('.popup-with-zoom-anim').magnificPopup({
                            type: 'inline',
                            fixedContentPos: false,
                            fixedBgPos: true,
                            overflowY: 'auto',
                            closeBtnInside: true,
                            preloader: false,
                            midClick: true,
                            removalDelay: 300,
                            mainClass: 'my-mfp-zoom-in'
                        });
                                                                                        
                        });
                </script>           
    <!---->     
        </div>
    </div>
</div>
<!--//header-->