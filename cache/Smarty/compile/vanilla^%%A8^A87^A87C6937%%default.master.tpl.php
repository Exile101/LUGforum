<?php /* Smarty version 2.6.25, created on 2014-12-29 11:24:27
         compiled from C:%5Cxampp%5Chtdocs%5Cvanilla/themes/VanillaPress2010/views/default.master.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'asset', 'C:\\xampp\\htdocs\\vanilla/themes/VanillaPress2010/views/default.master.tpl', 4, false),array('function', 'link', 'C:\\xampp\\htdocs\\vanilla/themes/VanillaPress2010/views/default.master.tpl', 19, false),array('function', 'logo', 'C:\\xampp\\htdocs\\vanilla/themes/VanillaPress2010/views/default.master.tpl', 19, false),array('function', 'text', 'C:\\xampp\\htdocs\\vanilla/themes/VanillaPress2010/views/default.master.tpl', 25, false),array('function', 'dashboard_link', 'C:\\xampp\\htdocs\\vanilla/themes/VanillaPress2010/views/default.master.tpl', 59, false),array('function', 'discussions_link', 'C:\\xampp\\htdocs\\vanilla/themes/VanillaPress2010/views/default.master.tpl', 60, false),array('function', 'activity_link', 'C:\\xampp\\htdocs\\vanilla/themes/VanillaPress2010/views/default.master.tpl', 61, false),array('function', 'inbox_link', 'C:\\xampp\\htdocs\\vanilla/themes/VanillaPress2010/views/default.master.tpl', 62, false),array('function', 'profile_link', 'C:\\xampp\\htdocs\\vanilla/themes/VanillaPress2010/views/default.master.tpl', 63, false),array('function', 'custom_menu', 'C:\\xampp\\htdocs\\vanilla/themes/VanillaPress2010/views/default.master.tpl', 64, false),array('function', 'signinout_link', 'C:\\xampp\\htdocs\\vanilla/themes/VanillaPress2010/views/default.master.tpl', 65, false),array('function', 'vanillaurl', 'C:\\xampp\\htdocs\\vanilla/themes/VanillaPress2010/views/default.master.tpl', 86, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-ca">
<head>
  <?php echo smarty_function_asset(array('name' => 'Head'), $this);?>


</head>

<body id="<?php echo $this->_tpl_vars['BodyID']; ?>
" class="<?php echo $this->_tpl_vars['BodyClass']; ?>
">

<div id="Frame">

<div id="wrapper" class="hfeed">

	<div id="header">
		<div id="masthead">
			<div id="branding" role="banner">
								<h1 id="site-title">
					<span>
						<a href="<?php echo smarty_function_link(array('path' => "/"), $this);?>
" rel="home"><?php echo smarty_function_logo(array(), $this);?>
</a>
					</span>
				</h1>

				<div id="site-description">Just another Vanilla Forum</div>
					<?php ob_start(); ?><img src="<?php echo smarty_function_link(array('path' => "/themes/VanillaPress2010/design/vanilla_offices.png",'withdomain' => 'true'), $this);?>
" /><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('BannerDefault', ob_get_contents());ob_end_clean(); ?>
										<?php echo smarty_function_text(array('code' => 'Banner','default' => $this->_tpl_vars['BannerDefault']), $this);?>

								</div><!-- #branding -->

			<div id="access" role="navigation">
			  				
								<!-- Add your own links here -->
								<div class="menu">
                                <ul>
                                <li><a href="" title="Home">Home</a></li>
                                <li><a href="" title="About">About</a></li>
                                <li><a href="" title="blog">blog</a></li>
                                <li class="current_page_item"><a href="" title="forum">forum</a></li>
                                <li><a href="" title="Contact Us">Contact Us</a></li>
                                
                                </ul>
            </div>

			</div><!-- #access -->
		</div><!-- #masthead -->
	</div><!-- #header -->


  <div id="Body">
    <div id="Content">
      <?php echo smarty_function_asset(array('name' => 'Content'), $this);?>

    </div>
    <div id="Panel">

    
    <?php echo smarty_function_asset(array('name' => 'Panel'), $this);?>

    
  	    <div class="Box">
         <ul id="Bookmark_List" class="PanelInfo PanelDiscussions">
    
             <?php echo smarty_function_dashboard_link(array(), $this);?>

             <?php echo smarty_function_discussions_link(array(), $this);?>

             <?php echo smarty_function_activity_link(array(), $this);?>

             <?php echo smarty_function_inbox_link(array(), $this);?>

             <?php echo smarty_function_profile_link(array(), $this);?>

             <?php echo smarty_function_custom_menu(array(), $this);?>

             <?php echo smarty_function_signinout_link(array(), $this);?>

          </ul>
          </div>  
  
    
    </div>
  </div>
	<div id="footer" role="contentinfo">
  
  
  <div id="colophon">



			<div id="site-info">
				<span>
						<a href="<?php echo smarty_function_link(array('path' => "/"), $this);?>
" rel="home"><?php echo smarty_function_logo(array(), $this);?>
</a>
					</span>
			</div><!-- #site-info -->

			<div id="site-generator">
								<a href="<?php echo smarty_function_vanillaurl(array(), $this);?>
">
					Powered by Vanilla				</a>
			</div><!-- #site-generator -->

		</div><!-- #colophon -->

  
    
    <?php echo smarty_function_asset(array('name' => 'Foot'), $this);?>

 </div>
</div>

</div>

</body>
</html>