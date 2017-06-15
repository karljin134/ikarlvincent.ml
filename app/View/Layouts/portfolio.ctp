<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Karl Vincent Lim's personal website.">
    <meta name="author" content="Karl Vincent Lim">
    <?php echo $this->Html->charset(); ?>
    <title>Personal Website | Karl Vincent Lim</title>

   
        <?php 
        $opt = array(
            'nav' => array(
                'home'
            ),
            'css' => array(
                'blogs'
            )
        );
        // echo "<pre>";
        // var_dump($opt['css']);
        // var_dump($this->request->params['controller']);
        // exit();
        echo $this->Html->css('bootstrap');
        // echo $this->Html->css('bootstrapv4');
        echo $this->Html->css('fonts');
        echo $this->Html->css('font-awesome.min');
        echo $this->Html->css('simple-line-icons');
        echo $this->Html->css('dataTables');
        echo $this->Html->css('jquery-ui');
        // Custom css
        echo $this->Html->css('new-age');
        echo $this->Html->css('custom');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
    ?>
</head>
<body id="page-top">
    <?php echo $this->element('navbar'); ?>
    

    <?php echo $this->fetch('content'); ?>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 footerleft ">
                    <div class="logofooter"> <img src="img/mylogo.png" width="100px"></div><br>
                    <p>Karl Vincent is responsible for designing, coding and modifying websites, from layout to function and according to a client's specifications.</p><br>
                    <div class="text-left">
                        <p><i class="fa fa-map-pin">&nbsp;&nbsp;&nbsp;&nbsp;</i> 250-I Gorordo Avenue, Cebu City, Philippines, 6000</p>
                        <p><i class="fa fa-phone">&nbsp;&nbsp;&nbsp;</i> Phone (Phil) : <a href="">+63 9994 092 682</a></p>
                        <p><i class="fa fa-envelope">&nbsp;&nbsp;</i> E-mail : <a href="">work.karllim@gmail.com</a></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 paddingtop-bottom">
                    <h4 class="heading7">GENERAL LINKS</h4>
                    <ul class="footer-ul">
                        <li><a href="#"> Blog</a></li>
                        <li><a href="#"> About</a></li>
                        <li><a href="#"> Career</a></li>
                        <li><a href="#"> Contact</a></li>
                        <li><a href="#"> Resume</a></li>
                        <li><a href="#"> Portfolio</a></li>
                        <li><a href="#"> Terms & Conditions</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 paddingtop-bottom">
                    <h4 class="heading7">LATEST POST</h4>
                    <div class="post">
                        <p>PHP Tutorials <br><span><small>January 3, 2017</small></span></p><br>
                        <p>Trip to Marawi <br><span><small>June 3, 2017</small></span></p><br>
                        <p>Free Token in Resorts World <br><span><small>June 6, 2017</small></span></p><br>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 paddingtop-bottom">
                    <h4 class="heading7">SOCIAL SITES</h4>
                    <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-height="300" data-small-header="false" style="margin-bottom:15px;" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <div class="fb-xfbml-parse-ignore">
                          <!--   <blockquote cite="https://www.facebook.com/karljin134"><a href="https://www.facebook.com/karljin134">Facebook</a></blockquote> -->
                            <ul class="list-inline list-social">
                                <li class="social-twitter">
                                    <a href="#"><i class="fa fa-twitter"></i> </a>
                                </li>
                                <li class="social-facebook">
                                    <a href="#"><i class="fa fa-facebook"></i> </a>
                                </li> 
                                <li class="social-google-plus">
                                    <a href="#"><i class="fa fa-google-plus"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <p>&copy; 2017 Kaaru Rimu. All Rights Reserved.</p>
                </div>
                <div class="col-sm-6">            
                    <ul class="list-inline">
                        <li>
                            <a href="#">Privacy</a>
                        </li>
                        <li>
                            <a href="#">Terms</a>
                        </li>
                        <li>
                            <a href="#">FAQ</a>
                        </li>
                    </ul>
                </div>
            </div>
            

        </div>
    </footer>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <?php 
        echo $this->Html->script('jquery.min'); // Include jQuery library
        echo $this->Html->script('jquery-ui'); // Include jQueryUI library
        echo $this->Html->script('bootstrap'); // Include BOOTSTRAP SCRIPTS
        echo $this->Html->script('jquery.easing.min'); 
        // echo $this->Html->script('tether.min'); 
        // echo $this->Html->script('nslim.min'); 
        echo $this->Html->script('new-age'); 
        echo $this->Html->script('dataTables2'); 
        echo $this->Html->script('dataTables'); 
    ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#dataTable').DataTable( {
                "order": [],
                "columnDefs": [ {
                "targets": 'no-sort',
                "orderable": false,
                } ]
            } );
            $('.skillbar').each(function(){
                $(this).find('.skillbar-bar').animate({
                    width:$(this).attr('data-percent')
                },2000);
            });
        } );
        $('#birthdate').datepicker({ 
            changeYear: true,
            yearRange: "-100:+0",
            showButtonPanel: true,
            changeMonth: true
        });
    </script>
</body>
</html>
