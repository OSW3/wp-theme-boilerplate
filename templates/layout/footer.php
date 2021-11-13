<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * More info at https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/#footer-php
 * 
 * Template Type: Partial
 * Author: OSW3
 * Author URI: http://osw3.net
 * Version: 1.0.0
 */ if (!defined( 'ABSPATH' )) exit;
?>
    </div><!-- End .main-content -->

    <!-- Footer Newsletter -->
    <?php wptb__render_component("newsletter/banner/01") ?>


    <!-- Main Footer -->
    <footer class="main-footer">
    <?php wptb__render_component("footer/01") ?>
    </footer>
    
    <!-- </div> --><!-- End .wrapper -->

    <?php wp_footer(); ?>






    <!-- https://bootstrap-menu.com/detail-multilevel.html -->

    <style>
        @media all and (min-width: 992px) {
	.dropdown-menu li{ position: relative; 	}
	.nav-item .submenu{ 
		display: none;
		position: absolute;
		left:100%; top:-7px;
	}
	.nav-item .submenu-left{ 
		right:100%; left:auto;
	}
	.dropdown-menu > li:hover{ background-color: #f1f1f1 }
	.dropdown-menu > li:hover > .submenu{ display: block; }
}	
/* ============ desktop view .end// ============ */

/* ============ small devices ============ */
@media (max-width: 991px) {
  .dropdown-menu .dropdown-menu{
      margin-left:0.7rem; margin-right:0.7rem; margin-bottom: .5rem;
  }
}
    </style>
    <script>
// document.addEventListener("DOMContentLoaded", function(){
// // make it as accordion for smaller screens
// if (window.innerWidth < 992) {

//   // close all inner dropdowns when parent is closed
//   document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
//     everydropdown.addEventListener('hidden.bs.dropdown', function () {
//       // after dropdown is hidden, then find all submenus
//         this.querySelectorAll('.submenu').forEach(function(everysubmenu){
//           // hide every submenu as well
//           everysubmenu.style.display = 'none';
//         });
//     })
//   });

//   document.querySelectorAll('.dropdown-menu a').forEach(function(element){
//     element.addEventListener('click', function (e) {
//         let nextEl = this.nextElementSibling;
//         if(nextEl && nextEl.classList.contains('submenu')) {	
//           // prevent opening link if link needs to open dropdown
//           e.preventDefault();
//           if(nextEl.style.display == 'block'){
//             nextEl.style.display = 'none';
//           } else {
//             nextEl.style.display = 'block';
//           }

//         }
//     });
//   })
// }
// // end if innerWidth
// }); 
    </script>
</body>
</html>