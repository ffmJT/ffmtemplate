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
                <div id="search">search
                    <jdoc:include type="modules" name="search" />
                </div>
            </div>
        </div>
        <!-- end of header1 -->

        <div class="clear"></div>

        <!--Header2-->
        <div id="header2">
            <div class="inner-box">
                <div id="logo"></div>
                <div class="clear"></div>
                <div id="person"></div>
                <div class="clear"></div>
                <div id="header_text"></div>
                <div class="clear"></div>
                <div id="topmenu">
                    <jdoc:include type="modules" name="topmenu" />
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
            <div id="slideshow">slideshow
                <jdoc:include type="modules" name="slideshow" />
            </div>
            <div id="columnRight">
                <div id="rightTop">right top
                    <jdoc:include type="modules" name="rightTop" />
                </div>
                <div id="rightMiddle">right middle
                    <jdoc:include type="modules" name="rightMiddle" />
                </div>
                <div id="rightBottom">right bottom
                    <jdoc:include type="modules" name="rightBottom" />
                </div>
            </div>
            <!-- end of columnRight -->
            <div id="columnLeft">
                <div id="overContent">over content
                    <jdoc:include type="modules" name="overContent" />
                </div>
                <div id="content">content
                    <jdoc:include type="modules" name="content" />
                    <jdoc:include type="component" />
                    <jdoc:include type="message" />
                    <jdoc:include type="modules" name="debug" />
                </div>
                <div id="underContent">under content
                    <jdoc:include type="modules" name="underContent" />
                </div>
            </div>
            <!-- end of columnLeft -->
            <div class="clear"></div>
        </div>
        <!-- end of container -->
        <div id="footer">
            <div id="footerLeft">box 1
                <jdoc:include type="modules" name="footerLeft" />
            </div>
            <div id="footerMiddle">box 2
                <jdoc:include type="modules" name="footerMiddle" />
            </div>
            <div id="footerRight">box 3
                <jdoc:include type="modules" name="footerRight" />
            </div>
        </div>
        <!-- end of footer -->
        <div class="clear"></div>
    </div>
    <!-- end of wrapper -->
    <jdoc:include type="modules" name="debug" />
</body>

</html>

