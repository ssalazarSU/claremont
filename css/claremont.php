
/*=====================
   Carousel Mods       
  =====================*/

.carousel{
  margin-top: 50px;
}

.btn-primary {
  color: #ffffff;
  background-color: #770000;
  border-color: #ffffff;
}


.btn-primary:hover,
.btn-primary:focus,
.btn-primary:active,
.btn-primary.active,
.open .dropdown-toggle.btn-primary {
  color: #ffffff;
  background-color: #CE1126;
  border-color: #ffffff;
}

/*=====================
   Navbar Mods         
  =====================*/
.navbar{
  background-color:#ffffff;
}

.navbar-nav{
  margin-top: 40px;
}	
 
/* The navbar becomes detached from the top, so we round the corners */
.navbar-wrapper .navbar {
  border-radius: 0px;
}

.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color: #CE1126;
  background-color: #ffffff;
}

.nav > li > a{
 border-right: 1px solid #000;
 padding-top: 0px;
 padding-bottom: 0px;
}


/*=====================
   Navbar Dropdown Mods         
  =====================*/

.dropdown-toggle > .active > a, 
.dropdown-toggle > .active > a:hover, 
.dropdown-toggle > .active > a:focus {
 color: #ffffff;
 text-decoration: none;
 outline: 0;
 background-color: #eee;
}

.dropdown-menu > .active > a, 
.dropdown-menu > .active > a:hover, 
.dropdown-menu > .active > a:focus {
 color: #333;
 text-decoration: none;
 outline: 0;
 background-color: #eee;
}

/*=====================
   Submenu Mods         
   Uncomment if neccessary, not recommended
  =====================*/
/*
.dropdown-submenu > .dropdown-menu 
{
 top:0;
 left:100%;
 margin-top:-6px;
 margin-left:-1px;
 -webkit-border-radius:0 6px 6px 6px;
 -moz-border-radius:0 6px 6px 6px;
 border-radius:0 6px 6px 6px;}

.dropdown-submenu:hover > .dropdown-menu{
 display:block;
}

.dropdown-submenu > a:after{
 display:block;
 content:" ";
 float:right;
 width:0;
 height:0;
 border-color:transparent;
 border-style:solid;
 border-width:5px 0 5px 5px;
 border-left-color:#cccccc;
 margin-top:5px;margin-right:-10px;}

.dropdown-submenu:hover>a:after{
 border-left-color:#ffffff;
}

.dropdown-submenu.pull-left{
 float:none;
}

.dropdown-submenu.pull-left>.dropdown-menu{
 left:-100%;
 margin-left:10px;
 -webkit-border-radius:6px 0 6px 6px;
 -moz-border-radius:6px 0 6px 6px;
 border-radius:6px 0 6px 6px;
}
*/
/*======================
  Page Featurette Mods 
  ======================*/

.featurette-page-heading {
    margin-top: 170px;
    font-weight: 300;
    line-height: 1;
    letter-spacing: -1px;
  }

@media (min-width: 768px) {
  .featurette-page-heading {
    margin-top: 130px;
    font-size: 40px;
  }
}

@media (min-width: 992px) {
  .featurette-page-heading {
    margin-top: 120px;
  }
  .container {
    width: 1050px;
    } 
}


/*======================
  Page Footer 
  ======================*/
.page-footer > p > small > a{
  color: #777;
}
.page-footer > p > small > a:hover,
.page-footer > p > small > a:focus{
   color: #CE1126; 
}

/*=====================
   Marketing Mods       
  =====================*/

.img-circle { 
 border-radius: 50%;
 width: 140px;
 height: 140px;
}
