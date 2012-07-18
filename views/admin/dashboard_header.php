<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8"/>
        <title>The SWG Dashboard Confessional</title>

        <link rel="stylesheet" href="<?php echo URL; ?>views/admin/assets/css/layout.css" type="text/css" media="screen" />
        <!--[if lt IE 9]>
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="<?php echo URL; ?>views/admin/assets/js/jquery-1.5.2.min.js" type="text/javascript"></script>
        <script src="<?php echo URL; ?>views/admin/assets/js/hideshow.js" type="text/javascript"></script>
        <script src="<?php echo URL; ?>js/jquery.tablesorter.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo URL; ?>views/admin/assets/js/jquery.equalHeight.js"></script>
        <script type="text/javascript">
            $(document).ready(function() 
            { 
                $(".tablesorter").tablesorter(); 
            } 
        );
            $(document).ready(function() {

                //When page loads...
                $(".tab_content").hide(); //Hide all content
                $("ul.tabs li:first").addClass("active").show(); //Activate first tab
                $(".tab_content:first").show(); //Show first tab content

                //On Click Event
                $("ul.tabs li").click(function() {

                    $("ul.tabs li").removeClass("active"); //Remove any "active" class
                    $(this).addClass("active"); //Add "active" class to selected tab
                    $(".tab_content").hide(); //Hide all tab content

                    var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
                    $(activeTab).fadeIn(); //Fade in the active ID content
                    return false;
                });

            });
        </script>
        <script type="text/javascript">
            $(function(){
                $('.column').equalHeight();
            });
        </script>

    </head>


    <body>

        <header id="header">
            <hgroup>
                <h1 class="site_title"><a href="<?php echo URL; ?>dashboard"><img src="<?php echo URL; ?>public/images/logo_small.jpg"/></a></h1>
                <h2 class="section_title">Dashboard Confessional</h2><div class="btn_view_site"><a href="http://www.pt-swg.com">View Site</a></div>
            </hgroup>
        </header> <!-- end of header bar -->

        <section id="secondary_bar">
            <div class="user">
                <p>Welcome!, (<a href="<?php echo URL; ?>dashboard/logout">Logout</a>)</p>
                <!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
            </div>

        </section><!-- end of secondary bar -->

        <aside id="sidebar" class="column">

            <hr/>
            <h3>Content</h3>
            <ul class="toggle">
                <li class="icn_new_article"><a href="<?php echo URL; ?>dashboard/newPage">New Article</a></li>
                <li class="icn_categories"><a href="#">Categories</a></li>
                <li class="icn_tags"><a href="#">Tags</a></li>
            </ul>


            <footer>
                <hr />
                <p><strong>Copyright &copy; 2011 Website Admin</strong></p>
                <p><a href="http://www.pt-swg.com">[SWG]</a></p>
            </footer>
        </aside><!-- end of sidebar -->