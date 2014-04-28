<?php defined( '_JEXEC' ) or die; include_once JPATH_THEMES. '/'.$this->template.'/logic.php'; // load logic.php ?>

<!doctype html>
<!--[if IEMobile]><html class="iemobile" lang="<?php echo $this->language; ?>"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8" lang="<?php echo $this->language; ?>"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="<?php echo $this->language; ?>">
<!--<![endif]-->

<head>
    <jdoc:include type="head" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <link rel="apple-touch-icon-precomposed" href="<?php echo $tpath; ?>/images/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $tpath; ?>/images/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $tpath; ?>/images/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $tpath; ?>/images/apple-touch-icon-144x144-precomposed.png">
    <!--[if lte IE 8]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <?php if ($pie==1) : ?>
      <style> 
        {behavior:url(<?php echo $tpath; ?>/js/PIE.htc);}
      </style>
    <?php endif; ?>
  <![endif]-->
</head>

<body class="<?php echo (($menu->getActive() == $menu->getDefault()) ? ('front') : ('page')).' '.$active->alias.' '.$pageclass; ?>">

    <div id="wrapper">
        <!--Header1-->
        <div id="header1">
            <div class="inner-box">
                <div id="search">
                    <jdoc:include type="modules" name="search" />
                </div>
            </div>
        </div>
        <!-- end of header1 -->

        <div class="clear"></div>

        <!--Header2-->
        <div id="header2">
            <div class="inner-box">
                <div id="person">
                    <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/person.png" alt="logo" />
                </div>
                <div class="clear"></div>
                <div id="logo">
                    <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/logo.png" alt="person" />                
                </div>
                <div class="clear"></div>
                
                <div id="headerPics"></div>
                <div class="clear"></div>
                <div id="topmenu">
                    <jdoc:include type="modules" name="topmenu" style="xhtml" />
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <!-- end of header2 -->

        <div class="clear"></div>

        <div id="container" class="inner-box">
            <div id="breadcrumbs">
                <jdoc:include type="modules" name="breadcrumbs" />
            </div>
            <div id="slideshow">
                <jdoc:include type="modules" name="slideshow" />
            </div>
            <div id="columnRight">
                <div id="rightTop">
                    <jdoc:include type="modules" name="rightTop" style="xhtml" />
                </div>
                <div id="rightMiddle">
                    <jdoc:include type="modules" name="rightMiddle" style="xhtml" />
                </div>
                <div id="rightBottom">
                    <jdoc:include type="modules" name="rightBottom" style="xhtml" />
                </div>
            </div>
            <!-- end of columnRight -->
            <div id="columnLeft">
                <div id="overContent" >
                    <jdoc:include type="modules" name="overContent" style="xhtml"/>
                </div>
                <div id="content">
                    <jdoc:include type="modules" name="content" style="xhtml"/>
                    <jdoc:include type="component" />
                    <jdoc:include type="message" />
                    <jdoc:include type="modules" name="debug" />
                </div>
                <div id="underContent">
                    <jdoc:include type="modules" name="underContent" style="xhtml"/>
                </div>
            </div>
            <!-- end of columnLeft -->
            <div class="clear"></div>
        </div>
        <!-- end of container -->
        <div id="footer" >
            <div class="inner-box">
                <div id="footerLeft">
                    <jdoc:include type="modules" name="footerLeft"/>
                </div>
                
                <div id="footerMiddle">
                    <jdoc:include type="modules" name="footerMiddle" />
                </div>
                
                <div id="footerRight">
                    <jdoc:include type="modules" name="footerRight" />
                </div>
                <div class="clear"></div>
                <div id="copyright">
                    <jdoc:include type="modules" name="copyright" />
                </div>
            </div>
        </div>
        <!-- end of footer -->
        <div class="clear"></div>
    </div>
    <!-- end of wrapper -->
</body>

</html>

