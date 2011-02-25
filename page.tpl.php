<?php
global $base_url;

global $theme_path;

// $Id: page.tpl.php,v 1.2.2.15 2009/04/25 06:19:22 hswong3i Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head profile="http://gmpg.org/xfn/11">
  <title><?php print $head_title ?></title>
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
  <!--[if lt IE 7]>
    <?php print phptemplate_get_ie_styles(); ?>
  <![endif]-->
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
</head>

<body class="<?php print $body_classes ?>">
<?php if ($header): ?><div id="header-region" class="clear-block"><?php print $header ?></div><?php endif; ?>
<div id="wrapper"><!-- begin wrapper -->
<div id="container" class="clear-block"><!-- begin container -->
  <div class="shadow1">
    <div class="shadow2">
      <div class="shadow3">
	<div id="header"><!-- begin header -->
  		<div id="logo"><a href="http://islandora.coalliance.org" title="Colorado Alliance"></a>
		<a href="http://islandora.coalliance.org" title="Coalliance"><img src="<?php echo $base_url.'/'.$theme_path.'/images/libraries_trans.gif';?>"/></a>
	  <?php if ($logo): ?><a href="<?php print $front_page ?>" title="<?php print $site_name ?>"><img src="<?php print $logo ?>" alt="<?php print $site_name ?>" /></a><?php endif; ?>
	</div>  
	<div id="slogan-floater"><!-- begin slogan-floater -->
	    <?php if ($site_name): ?><h1 class='site-name'><a href="<?php print $front_page ?>" title="<?php print $site_name ?>"><?php print $site_name ?></a></h1><?php endif; ?>
	    <?php if ($site_slogan): ?><div class='site-slogan'><?php print $site_slogan ?></div><?php endif; ?>
	    
	    <div id="utilityLinks"><a href="http://islandora.coalliance.org/">Colorado Alliance</A></div>
	    <div id="search">
                    <form id="frmSearch" action="http://umanitoba.ca/search/newsearch.php" method="get" name="frmSearch">
   <div id="googleSearch" >
        <input id="kw" type="text" name="q" size="26" maxlength="256" value="" class="srchTxt">
    </div>
   
    <div id="googleButton">
        <input value="Search" alt="Search" name="btnG" type="image" class="srchBtn" src="http://umanitoba.ca/media/search.gif">
        <input value="date:D:L:d1" name="sort" type="hidden">
        <input value="xml_no_dtd" name="output" type="hidden">
        <input value="default_collection" name="site" type="hidden">
        <input value="UTF-8" name="ie" type="hidden">
        <input value="UTF-8" name="oe" type="hidden">
        <input value="default_frontend" name="client" type="hidden">
        <input value="default_frontend" name="proxystylesheet" type="hidden">
        <!-- Optional Parameters -->
        <input type='hidden' name='as_dt' value='i'>
        <input type='hidden' name='as_sitesearch' value='http://umanitoba.ca/'>
    </div>
    <div id ="search_parameters" >
<span class="radio1"><input name="search_type" id="searchTypeBtn" value="local" checked="checked" type="radio" style="float:left;"></span>    <span style="float:left;display:inline;" id="text1">Coalliance</span>
<span class="radio2"><input name="search_type" id="people" value="people" type="radio" style="float:left;"></span><span style="float:left;" id="text2">People</span>
<span class="radio3"> <input name="search_type" id="experts" value="experts" type="radio" style="float:left;"></span><span style="float:left;" id="text3">Research Experts</span>
</div>
    
                                    
</form>
<!-- End Google Search -->                
                </div><!--end search-->    
	    
	  </div><!-- end slogan-floater -->
	</div><!-- end header -->
      </div><!-- end shadow3 -->
    </div><!-- end shadow2 -->
  </div><!-- end shadow1 -->
  <div class="shadow1">
    <div class="shadow2">
      <div class="shadow3">
	<div id="primary-nav">
	  <div class="searchbar">
	    <div class='label'>Keyword Search:</div>	    
	    <?php print drupal_get_form('islandora_solr_simple_search_form');?>
	  </div><!-- end searchbar -->
	  <?php if (isset($primary_links)) : ?><!-- begin primary_links -->
	    <?php print theme('links', $primary_links, array('class' => 'primary-links')) ?>
	  <?php endif; ?><!-- end primary_links -->
	</div><!-- end primary-nav-->
      </div><!-- end shadow3 -->
    </div><!-- end shadow2 -->
  </div><!-- end shadow1 -->	
  <?php if ($breadcrumb): print '<div id="breadcrumb">'.$breadcrumb.'</div>'; endif; ?>
  <?php if ($mission): print '<div id="mission">'. phptemplate_mission() .'</div>'; endif; ?>
  <?php if ($left) { ?>
    <div id="sidebar-left" class="sidebar"><!-- begin sidebar-left -->
      <?php if ($search_box): ?><div class="block block-theme"><?php print $search_box ?></div><?php endif; ?>
      <?php print $left ?>
    </div><!-- end sidebar-left -->
  <?php } ?>
  <div id="center"><div id="squeeze"><!-- begin center -->
	<?php if ($title && !$is_front): print '<h2 class="title'. ($tabs ? ' with-tabs' : '') .'">'. $title .'</h2>'; endif; ?>
		<div class="clear-block">
			<?php print $content ?>
		</div>
	  <br clear="all"/>
    <?php if ($tabs): print '<div class="tabs">'. $tabs .'</div>'; endif; ?>
    <?php if ($show_messages && $messages): print $messages; endif; ?>
    <?php print $help ?>
    <?php print $feed_icons ?>
  </div></div><!-- end center -->
  <?php if ($right) { ?>
    <div id="sidebar-right" class="sidebar"><!-- begin sidebar-right -->
      <?php if (!$left && $search_box): ?><div class="block block-theme"><?php print $search_box ?></div><?php endif; ?>
      <?php print $right ?>
    </div><!-- end sidebar-right -->
  <?php } ?>
  <div id="footer"><!-- start footer -->
    <?php print $footer_message ?>
    <?php print $footer ?>
    <span class="copyright">&copy; <?php print date('Y');?> University of Manitoba </span>
  </div><!-- end footer -->
</div><!-- end wrapper -->
</div><!-- end container -->
<?php print $closure ?>
</body>
</html>
