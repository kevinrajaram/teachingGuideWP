<?php
/**
 * @package Teaching_Guide
 */

?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="description" content="New York City College of Technology - The college of technology of The City University of New York - The Work Matters - A Guide for New Faculty Teaching at City Tech">
<meta name="keywords" content="New York City College of Technology, New York City Technical College, CUNY, City Tech, City University of New York, technology, tech, New York City, college, universities, colleges, technical, New York Colleges and Universities, faculty, the work matters, categories, helping students succeed, getting oriented, orientation, teaching, planning, course, assignments, design, supporting, students">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="all" />
<meta name="robots" content="index, follow" />
<meta name="GOOGLEBOT" content="INDEX, FOLLOW" />
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
    <script>
      WebFont.load({
        custom: {
          families: ['Proxima Nova:n3,n4,n6,n7'],
          urls: ['<?php echo get_template_directory_uri(); ?>/css/fonts.css']
        }
      });
    </script>
</head>

<body <?php body_class(); ?>>
	<div class="ct_header">
        <div class="ct__topbar row">
            <div class="container">
                <nav>
                    <ul>
                        <li><a href="http://www.citytech.cuny.edu/prospective">Prospective Students</a></li>
                        <li><a href="http://www.citytech.cuny.edu/current-student">Current Students</a></li>
                        <li><a href="http://www.citytech.cuny.edu/faculty-staff">Faculty &amp; Staff</a></li>
                        <li><a href="http://www.citytech.cuny.edu/alumni">Alumni &amp; Friends</a></li>
                        <li><a href="http://www.citytech.cuny.edu/foundation">Donate</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="ct__navbar row">
            <div class="container">

                <div class="ct_logo">
                    <a href="http://www.citytech.cuny.edu/" title="City Tech"><img src="<?php echo get_template_directory_uri(); ?>/img/citytech-logo.png" alt="City Tech"></a>
                </div>

                <nav class="ct_nav">
                    <ul>
                        <li><a href="http://www.citytech.cuny.edu/about-us">About Us</a>
                            <ul class="dropdown-menu">
                              <li><a href="http://www.citytech.cuny.edu/about-us/facts.aspx" target="_blank">College Facts</a></li>
                              <li><a href="http://www.citytech.cuny.edu/about-us/leadership.aspx">College Leadership</a></li>
                              <li><a href="http://www.citytech.cuny.edu/news">City Tech News</a></li>
                              <li><a href="http://www.citytech.cuny.edu/about-us/partnerships.aspx">Partnerships</a></li>
                              <li><a href="http://www.citytech.cuny.edu/about-us/directions.aspx" target="_blank">Directions &amp; Map</a></li>
                              <li><a href="http://www.citytech.cuny.edu/public-safety/emergency.aspx" target="_blank" style="color: red;">Emergency Preparedness</a></li>
                            </ul>
                        </li>
                        <li><a href="http://www.citytech.cuny.edu/admissions/">Admissions</a>
                        		<ul class="dropdown-menu">
	                        		<li><a href="http://www.citytech.cuny.edu/admissions/index.aspx#how-to-apply">Apply</a></li>
															<li><a href="http://www.citytech.cuny.edu/admissions/tuition-general.aspx">Tuition &amp; Fees</a></li>
															<li><a href="http://www.citytech.cuny.edu/financial-aid">Financial Aid</a></li>
															<li><a href="http://www.citytech.cuny.edu/admissions/dates-deadlines.aspx">Dates &amp; Deadlines</a></li>
															<li><a href="https://cunycitytech.askadmissions.net/emtinterestpage.aspx?ip=prospect">Request Information</a></li>
                        		</ul>
                        </li>
                        <li><a href="http://www.citytech.cuny.edu/academics/">Academics</a>
                        		<ul class="dropdown-menu">
	                        		<li><a href="http://www.citytech.cuny.edu/academics/areas-of-study.aspx">Degrees &amp; Areas of Study</a></li>
															<li><a href="https://home.cunyfirst.cuny.edu/psp/cnyepprd/GUEST/HRMS/c/COMMUNITY_ACCESS.CLASS_SEARCH.GBL" target="_blank">Schedule of Classes</a></li>
															<li><a href="http://www.citytech.cuny.edu/registrar/academic-calendar.aspx">Academic Calendar</a></li>
															<li><a href="http://www.citytech.cuny.edu/academics/academic-departments.aspx">Academic Departments</a></li>
															<li><a href="http://www.citytech.cuny.edu/continuinged/">Continuing Education</a></li>
															<li><a href="https://library.citytech.cuny.edu">Library</a></li>
															<li><a href="http://websupport1.citytech.cuny.edu/citytechonline.html">City Tech Online</a></li>
													</ul>
                        </li>
                        <li><a href="http://www.citytech.cuny.edu/campus-life">Campus Life</a>
                        		<ul class="dropdown-menu">
                              <li><a href="http://www.citytech.cuny.edu/nsc/">New Student Center</a></li>
															<li><a href="http://www.citytech.cuny.edu/student-services/">Student Services</a></li>
															<li><a href="http://www.citytech.cuny.edu/counseling/">Counseling</a></li>
															<li><a href="http://www.citytech.cuny.edu/student-life/">Student Life</a></li>
															<li><a href="http://www.citytech.cuny.edu/sga">Student Government</a></li>
															<li><a href="http://www.citytech.cuny.edu/campus-life/index.aspx#safety">Campus Safety</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:;">QuickLinks</a>
                            <ul class="dropdown-menu mega">
                              <li class="grid-4">
                                <ul>
                                  <li><h3>Logins</h3></li>
                                  <li><a href="https://home.cunyfirst.cuny.edu/oam/Portal_Login1.html" target="_blank">CUNYfirst</a></li>
                                  <li><a href="https://webmail.citytech.cuny.edu">Faculty/Staff Email</a></li>
                                  <li><a href="https://email1.old.citytech.cuny.edu">Faculty/Staff GroupWise Email</a></li>
                                  <li><a href="https://login.microsoftonline.com/login.srf?wa=wsignin1.0&amp;rpsnv=4&amp;ct=1458047477&amp;rver=6.6.6556.0&amp;wp=MBI_SSL&amp;wreply=https%3a%2f%2foutlook.office365.com%2fowa%2f%3frealm%3dmail.citytech.cuny.edu&amp;id=260563&amp;whr=mail.citytech.cuny.edu&amp;CBCXT=out&amp;msafed=0">Student Email</a></li>
                                  <li><a href="https://support.citytech.cuny.edu/ehelpdesk/login.glml" target="_blank">GroupLink Request System</a></li>
                                  <li><a href="https://cunyportal.cuny.edu/cpr/authenticate/portal_login.jsp" target="_blank">CUNY Portal</a></li>
                                  <li><a href="https://bbhosted.cuny.edu/webapps/login/noportal" target="_blank">Blackboard</a></li>
                                  <li><a href="https://cisapps.citytech.cuny.edu/afm_citytech/" target="_blank">B&amp;G System</a></li>
                                  <li><a href="https://cisapps.citytech.cuny.edu/ewaste/" target="_blank">E-Waste Management System</a></li>
                                </ul>
                              </li>
                              <li class="grid-4">
                                <ul>
                                  <li><h3>Helpful Links</h3></li>
                                  <li><a href="http://www.citytech.cuny.edu/registrar/academic-calendar.aspx">Academic Calendar</a></li>
                                  <li><a href="http://www.citytech.cuny.edu/academics/academic-catalog.aspx">College Catalog</a></li>
                                  <li><a href="https://library.citytech.cuny.edu/" target="_blank">Library</a></li>
                                  <li><a href="https://openlab.citytech.cuny.edu/" target="_blank">OpenLab</a></li>
                                  <li><a href="http://websupport1.citytech.cuny.edu/" target="_blank">WebSupport1</a></li>
                                  <li><a href="http://facultycommons.citytech.cuny.edu/" target="_blank">Faculty Commons</a></li>
                                  <li><a href="http://www.citytech.cuny.edu/citytechonline/">Online Courses</a></li>
                                  <li><a href="https://home.cunyfirst.cuny.edu/psp/cnyepprd/GUEST/HRMS/c/COMMUNITY_ACCESS.CLASS_SEARCH.GBL" target="_blank">Schedule of Classes</a></li>
                                  <li><a href="http://www.citytech.cuny.edu/public-safety/emergency.aspx">Emergency Preparedness</a></li>
                                </ul>
                              </li>
                              <li class="grid-4">
                                <ul>
                                  <li><h3>Information For</h3></li>
                                  <li><a href="http://www.citytech.cuny.edu/prospective">Prospective Students</a></li>
                                  <li><a href="http://www.citytech.cuny.edu/current-student">Current Students</a></li>
                                  <li><a href="http://www.citytech.cuny.edu/faculty-staff">Faculty &amp; Staff</a></li>
                                  <li><a href="http://www.citytech.cuny.edu/alumni">Alumni &amp; Friends</a></li>
                                </ul>
                              </li>
                              <li class="grid-4">
                                <ul>
                                  <li><h3>About Us</h3></li>
                                  <li><a href="http://www.citytech.cuny.edu/offices-services/">Offices &amp; Services</a></li>
                                  <li><a href="https://openlab.citytech.cuny.edu/collegecouncil/">College Council</a></li>
                                  <li><a href="http://www.citytech.cuny.edu/directory/">Directory</a></li>
                                  <li><a href="http://www.citytech.cuny.edu/about-us/directions.aspx">Directions &amp; Map</a></li>
                                  <li><a href="http://www.citytech.cuny.edu/about-us/directions.aspx"><img alt="Directions and Map" src="<?php echo get_template_directory_uri(); ?>/img/new_building.jpg" style="max-width:100%;width:250px;"></a></li>
                                </ul>
                              </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div class="row hero">
      <div>
        <h1><a href="<?php echo get_home_url(); ?>" style="color: white;"><?php bloginfo( 'name' ); ?></a></h1>
        <h2><?php bloginfo( 'description' ); ?></h2>

        <?php get_search_form(); ?>
      </div>
    </div>
