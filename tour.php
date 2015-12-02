<?php include 'header.php';?>
		<h1>Campus Tour</h1>
		<p>This satellite imagery, provided by Google Maps, shows the different locations on campus and provides color-coding based on
		 where the points are located. Some buildings have a scenic picture of the outside to give a general feel for what it would be like
		  to be on the campus. There are also some locations that have a panoramic view of the inside to show what Students normally see 
		  while living on campus.</p>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
//The following information in the array will be inside of the infowindow.
//Title is what building or section of a building the marker is in.
//lat and lng are the coordinates for each marker
//The description holds the content for the infowindow. This has a bold title, description, images, and hyperlinks
//type clarifies which building the marker will be in

var markers = [
		//Admissions Markers Start --Red
		{
			"title": 'Admissions',
			"lat": '43.939820',
			"lng": '-72.604525',
			"description": '<table><tr><td><IMG BORDER="0" ALIGN="Left" height="400px" width="500px" src="images/admin.jpg"><td><td><b>Admissions Building: </b>The Admissions build of Vermont Tech is where student can find out various inforamation about their account, courses, and financial aid.</td></tr></table>',
			"type": 'Admissions'
		},
			{
				"title": 'Public Safety',
				"lat": '43.939598',
				"lng": '-72.604045',
				"description": '<b>Public Safety Office: </b>Security of physical and personal assets, health and personal safety are priority concerns at Vermont Tech. The Public Safety Office serves the entire College community and guests by being available to provide services and by enforcing College rules and regulations to ensure a safe environment 24 hours per day, seven days per week. The Public Safety Office on the Randolph Center campus is located in Administrative Center 122 and is open for student service or friendly conversation. Suggestions are always welcome and members of the college community are encouraged to report health and safety hazards or suspicious activity. Campus crime reports are available through the Public Safety office.<br><a href="http://www.vtc.edu/my-vermont-tech/my-vtc-home/health-safety/public-safety" title="Vermont Tech Public Safety">Vermont Tech Public Safety</a>',
				"type": 'Admissions'
			},
		{
			"title": 'Registrar',
			"lat": '43.939671',
			"lng": '-72.604413',
			"description": '<b>Registrar&#39;s Office: </b>The Registrar&#39;s Office, Admin 111, registrar@vtc.edu, 802.728.1302, Fax 802.728.1597, is responsible for all student registrations, maintains all student academic records, transfer credit information, class schedules, academic standings, verifications of enrollment and graduation degree audits and issues transcripts.  Registrar forms are available online at are available on-line at http://www.vtc.edu/scheduling and at the office for pre-registration, registration, add/drop, withdrawal, verification of enrollment, changing programs, changing location of program, changing of advisor, grade forgiveness, transcript requests, grade requests and graduation application.<br><a href="http://www.vtc.edu/my-vermont-tech/my-vtc-home/registrar" title="Vermont Tech Registrar Page">Vermont Tech Registrar Page</a>',
			"type": 'Admissions'
		},
        {
            "title": 'Financial Aid',
            "lat": '43.939527',
            "lng": '-72.604517',
            "description": '<b>Financial Aid: </b>Financial aid information and counseling are available at the Financial Aid Office, Administrative Center 110. The staff is ready to assist you and your family with questions concerning the application process, types of aid available, scholarship criteria and college work study opportunities, as well as other general concerns. Stop by the Financial Aid Job Fair table during fall registration to learn about work study positions, from office jobs to positions with maintenance, Public Safety, or the farm. The Financial Aid Office may also help you find a community service position at a nonprofit agency or an America Reads position at a local elementary school. If you or your family&#39;s financial situation has recently been affected by extenuating circumstances such as unemployment, a death in the family, divorce, or excessive medical expenses not covered by insurance, you may write to the Financial Aid Office about your situation. Your file will be reviewed, and adjustments may be made depending on the circumstances.<br><a href="http://www.vtc.edu/admissions-aid/financial-aid" title="Financial Aid Information">Financial Aid Information</a><br/><a href="http://www.vtc.edu/admissions-aid/tuition-fees-2014-2015" title="Tuition and Fees">Vermont Tech 2014-2015 Tutition and Fees</a><br><a href="http://www.vtc.edu/admissions-aid/financial-aid/scholarships" title="Vermont Tech Scholarships">Vermont Tech Scholarships</a>',
            "type": 'Admissions'
        },
        {
            "title": 'Head Of Admissions',
            "lat": '43.939683',
            "lng": '-72.604450',
            "description": '<b>Head of Admissions: </b>Head of Admissions office is in charge of setting up tours/meetings for future students. Here future students can get a better understanding of the different programs/ and what Vermont Tech has to offer. To set up an appointment please email admissions@vtc.edu<br><a href="http://www.vtc.edu/admissions-aid/apply" title="Vermont Tech Admissions">Vermont Tech Admissions</a> ',
            "type": 'Admissions'
        },
		{
            "title": 'Student Accounts',
            "lat": '43.939579',
            "lng": '-72.604620',
            "description": '<b>Student Accounts: </b>The Student Accounts Office is responsible for student billing accounts, the payment of all bills and the cashing of checks (up to $25 for personal check, no 3rd party checks). The Student Accounts Office is located in room 107 in the lobby of the Administrative Center. Counter service is available Monday through Friday, 9:00 a.m. to 4:30 p.m. Summer counter hours are 9:00 a.m. to 4:00 p.m. Monday thru Friday.<br><a href="http://www.vtc.edu/my-vermont-tech/my-vtc-home/student-accounts" title="Vermont Tech Student Accounts">Student Accounts Information Page</a>',
            "type": 'Admissions'
        },
		{
            "title": 'Institutional Advancement',
            "lat": '43.939588',
            "lng": '-72.604794',
            "description": '<b>Institutional Advancement: </b>The Associate Dean of Institutional Advancement is responsible for all news releases, publications, and public relations. News releases reporting on College events and student accomplishments, from sports scores to scholarship and honors announcements, to graduation lists will be sent to hometown newspapers and other media outlets. This office also prints Tech Talk and creates and prints publications for the various programs and divisions of the College.<br><a href="http://www.vtc.edu/marketing-institutional-advancement" title="Institutional Advancement">Institutional Advancement</a>',
            "type": 'Admissions'
        },
		//Admissions Markers End --Red
		
		//Green Hall Markers Start --Green
		{
            "title": 'Green Hall',
            "lat": '43.939070',
            "lng": '-72.603680',
            "description": '<table><tr><td><IMG BORDER="0" ALIGN="Left" height="400px" width="500px" src="images/green.jpg"></td><td><b>Green Hall: </b>Green Hall is one of the classroom buildings at the Randolph campus. There is also falculty offices on both floors. The green house, horticulture lab, civil engineering lab, and electrical engineering lab are located in this building.<br><a href="panos/greenclassroom.php">Green Classroom</a></td></tr></table>',
            "type": 'Green'
        },
		{
            "title": 'Horticulture Lab "Green House"',
            "lat": '43.938903',
            "lng": '-72.603852',
            "description": '<table><tr><td><IMG BORDER="0" ALIGN="Left" height="400px" width="500px" src="images/greenhouse.jpg"></td><td><b>Green House: </b>The Green House and Horticulture lab are both used for landscaping majors to get a hands-on experience.</td></tr></table>',
            "type": 'Green'
        },
		{
            "title": 'Computer Engineering Lab',
            "lat": '43.938895',
            "lng": '-72.603517',
            "description": '<b>Computer Engineering Lab: </b>The Electrical Engineering Lab allows student&#39;s to get hands-on experience in their field.<br><a href="panos/computerengineeringlab.php">Computer Engineering Lab</a>',
            "type": 'Green'
        },
		{
            "title": 'Academic Dean&#39;s Office',
            "lat": '43.938966',
            "lng": '-72.6035816',
            "description": '<b>Academic Dean&#39;s Office: </b>The Office of the Academic Dean, located on the second floor of Green Hall in room 215, is responsible for all issues related to academic programs, courses, classes, class scheduling, academic departments, faculty assignment and evaluations, student advising, grading, academic standings, graduation requirements and graduation standards.  The Academic Dean is responsible for overseeing the delivery of all courses offered for credit by Vermont Technical College, whether they are offered on or off-campus.<br><a href="http://www.vtc.edu/staff/philip-w-petty" title="Phil Petty&#39;s Page">Phil Petty&#39;s Page</a>',
            "type": 'Green'
        },
		//Green Hall Markers End --Green
		
		//Morrill/Clarke Markers Start --Blue
		{
            "title": 'Morrill Hall',
            "lat": '43.939001',
            "lng": '-72.605093',
            "description": '<table><tr><td><IMG BORDER="0" ALIGN="Left" height="400px" width="500px" src="images/morrill.jpg"></td><td><b>Morrill Hall: </b>Morrill Hall is a lab and lecture hall. Morrill also has the Vermont Interactive Technologies (VIT), Architectural Drafring Lab, Mechanical Engineering Lab, Vetinary Technologies Lab, Physics Lab, Chemistry Lab, Information Technology (IT) Department, and a computer lab.</td></tr></table>',
            "type": 'Morrill/Clarke'
        },
		{
            "title": 'Physics Lab',
            "lat": '43.938952',
            "lng": '-72.604984',
            "description": '<b>Physics Lab: </b>The physics lab is used for either general physics, physics 1, or physics 2 lab depending on the course taken.',
            "type": 'Morrill/Clarke'
        },
		{
            "title": 'Vermont Interactive Technologies(VIT)',
            "lat": '43.938939',
            "lng": '-72.605164',
            "description": '<b>Vermont Interactive Technologies: </b><br><a href="http://www.vtc.edu/vermont-interactive-technologies" title"VIT Page>VIT Page</a>',
            "type": 'Morrill/Clarke'
        },
		{
            "title": 'Chemistry Lab',
            "lat": '43.938901',
            "lng": '-72.604674',
            "description": '<b>Chemistry Lab: </b>The chemistry lab is where the students perform experiments based on what they have learned in class.',
            "type": 'Morrill/Clarke'
        },
		{
            "title": 'Vet Tech Lab',
            "lat": '43.939051',
            "lng": '-72.605225',
            "description": '<b>Veterinary Technologies Lab: </b><br><a href="http://www.vtc.edu/academics/program/veterinary-technology" title="Vermont Tech Vet Tech">Vet Tech Major page</a>',
            "type": 'Morrill/Clarke'
        },
		{
            "title": 'Mechanical Engineering Lab',
            "lat": '43.938794',
            "lng": '-72.604818',
            "description": '<b>Mechanical Engineering Lab: </b>The mechanical engineering lab gives student&#39;s experience working with machinery and building their own items.',
            "type": 'Morrill/Clarke'
        },
		{
            "title": 'IT Department/Helpdesk',
            "lat": '43.938454',
            "lng": '-72.604596',
            "description": '<b>Information Technology Department/Helpdesk: </b>The IT department and helpdesk is in charge of maintaining the network, tech support for students and staff, and in office for questions.<br><a href="http://www.vtc.edu/my-vermont-tech/my-vtc-home/information-technology" title="IT Department">IT Department</a>',
            "type": 'Morrill/Clarke'
        },
		{
            "title": 'Achitecture Drafting Lab',
            "lat": '43.939056',
            "lng": '-72.605019',
            "description": '<b>Drafting Lab: </b>The Architectrual Drafting Lab gives the student&#39;s the hands-on experience of drawing site plans.',
            "type": 'Morrill/Clarke'
        },
		{
            "title": 'Vermont Tech Computer Lab',
            "lat": '43.938130',
            "lng": '-72.604596',
            "description": '<b>Vermont Tech Computer Lab: </b>There are several computer labs throughout Vermont Tech and they are available for students to use. Every computerlab has software for each major on the campus. If a student does not have a computer they can use a computer lab to do their homework.<br><a href="panos/computerlab.php" title="Morrill Hall Computer Lab">Morrill Hall Computer Lab</a>',
            "type": 'Morrill/Clarke'
        },
		{
            "title": 'Civil Engineering Lab',
            "lat": '43.938048',
            "lng": '-72.604541',
            "description": '<b>Civil Engineering Lab: </b>The Civil Engineering Lab gives student&#39;s hands on experience within their major.',
            "type": 'Morrill/Clarke'
        },
		{
            "title": '24 Hour All Night Lab',
            "lat": '43.938167',
            "lng": '-72.604491',
            "description": '<b>24 Hour Lab: </b>The 24 hour lab is available for any student who is in need of a computer to use and is available every day of the week. This lab is equipped with all of the software for each major. ',
            "type": 'Morrill/Clarke'
        },
		{
            "title": 'Nursing Lab',
            "lat": '43.937916',
            "lng": '-72.604513',
            "description": '<b>Nursing Lab: </b>The nursing lab give crucial hands-on experience working within their field. Simulation dolls and dummy dolls are used to give the hands-on experience for their major.',
            "type": 'Morrill/Clarke'
        },
		{
            "title": 'Biology Lab',
            "lat": '43.938041',
            "lng": '-72.604574',
            "description": '<b>Biology Lab: </b>Things where biology happens.',
            "type": 'Morrill/Clarke'
        },
		{
            "title": 'Clarke Hall',
            "lat": '43.938067',
            "lng": '-72.604419',
            "description": '<table><tr><td><IMG BORDER="0" ALIGN="Left" height="400px" width="500px" src="images/clarke.jpg"></td><td><b>Clarke Hall: </b>Clarke Hall is one of the lecture hall/lab building. The first floor is conected to Morrill Hall, and this building houses the 24 hour lab, Nursing lab, Biology lab, and Civil Engineering Lab.</td></tr></table>',
            "type": 'Morrill/Clarke'
        },
		//Morrill/Clarke Markers End --Blue
		
		//Conant Markers Start --Yellow
		{
            "title": 'Conant Hall',
            "lat": '43.939671',
            "lng": '-72.605187',
            "description": '<table><tr><td><IMG BORDER="0" ALIGN="Left" height="400px" width="500px" src="images/conant.jpg"></td><td><b>Conant Hall: </b>Conant Hall is a lab and lecture hall on the Randolph Campus. This buildings houses the pit, Computer Information Technology department lab, Career Services, computer labs, and the Center for Academic Success.</td></tr></table>',
            "type": 'Conant'
        },
		{
            "title": 'Conant 102',
            "lat": '43.939739',
            "lng": '-72.605094',
            "description": '<b>Conant 102: </b>Conant 102, also known as "The Pit" is a large lecture hall that can seat more students than the normal lecture hall at Vermont Tech. The Pit is used for lectures along with extra curricular activities.<br><a href="panos/conant102.php">Conant 102 - The Pit</a>',
            "type": 'Conant'
        },
		{
            "title": 'Networking Computer Lab',
            "lat": '43.939712',
            "lng": '-72.605357',
            "description": '<b>Networking Computer Lab: </b>The Networking Computer Lab is the Computer Information Technology department lab. This lab is used by Information Technology (IT) and Software Engineering (SE) Majors. This lab is used for system administration, computer networking, and databases courses.<br><a href="panos/cisnetworkinglab.php">CIS Networking Lab</a>',
            "type": 'Conant'
        },
		{
            "title": 'Career Services',
            "lat": '43.939625',
            "lng": '-72.605012',
            "description": '<b>Career Services: </b>The Career Development Center in Conant 200 is set up to help students get the skills they need to succeed in a dynamic, competitive, and changing job market. The Center provides one-stop shopping for students seeking career and educational direction and opportunity, from summer jobs and internships to building a career. Services provided by career services include resume/cover letter review, resume referral, and interviewing skills assistance.<br><a href="http://www.vtc.edu/meet-vermont-tech/career-development" title="Career Services">Career Services</a>',
            "type": 'Conant'
        },
		{
            "title": 'Center for Academic Success',
            "lat": '43.939578',
            "lng": '-72.605372',
            "description": '<b>Center for Academic Success: </b>The Center for Academic Success offers tutoring services, counseling, one on one meetings, and TRIO services. Students eligible for TRIO services are able to get exclusive scholarships and additional help.<br><a href="http://www.vtc.edu/my-vermont-tech/my-vtc-home/center-academic-success" title="Center for Academic Success">Center For Academic Success</a>',
            "type": 'Conant'
        },
		//Conant Markers End --Yellow
		
		//Judd/Shape Markers Start --Pink
		{
            "title": 'Judd Gym',
            "lat": '43.939312',
            "lng": '-72.605370',
            "description": '<table><tr><td><IMG BORDER="0" ALIGN="Left" height="400px" width="500px" src="images/judd.jpg"></td><td><b>Judd Gym: </b>Judd Gym is another recreational facility on our campus that is used by students and is used for conferences.</td></tr></table>',
            "type": 'Judd/Shape'
        },
		{
            "title": 'Vermont Tech Bookstore',
            "lat": '43.939324',
            "lng": '-72.604853',
            "description": '<table><tr><td><IMG BORDER="0" ALIGN="Left" height="400px" width="500px" src="images/bookstore.jpg"></td><td><b>Vermont Tech Bookstore: </b>The Vermont Tech Bookstore, located in Judd Hall, is operated by Follett Higher Education Group. Available to students are textbooks, course-related and general supplies, reference books, software, Vermont Tech imprinted clothing and gifts, health and beauty aids, snacks, and beverages. We also have Gift Cards available. Gift wrapping is available upon request. Major credit cards are welcome. Vermont Tech Bookstore also handles all parcel shipping for the college. During the academic year hours are Monday through Friday, 8:30 a.m. to 4:30 p.m., however, hours may vary. Please see the Bookstore for current hours.<br><a href="http://www.bkstr.com/vermonttechnicalstore/home/en?cm_mmc=Redirect-_-VanityURL-_-vermonttechshop.com-_-10233" title="Vermont Tech Bookstore">Vermont Tech Bookstore</a></td></tr></table>',
            "type": 'Judd/Shape'
        },
		{
            "title": 'Shape',
            "lat": '43.938598',
            "lng": '-72.602554',
            "description": '<table><tr><td><IMG BORDER="0" ALIGN="Left" height="400px" width="500px" src="images/shape.jpg"></td><td><b>Shape: </b>SHAPE has a six-lane, 25-yard heated indoor swimming pool, gymnasium with two basketball courts, two racquetball/squash courts, climbing wall, free weight room and exercise facility with a variety of strength and cardiovascular equipment and locker rooms for men and women. While all SHAPE programs are free of charge to Vermont Tech students with a current Vermont Tech ID, students are required to show their valid ID to the front desk attendant to gain access to SHAPE.<br><a href="http://www.vtc.edu/meet-vtc/student-life/randolph-center/shape-center/shape" title="Vermont Tech Shape">Vermont Tech Shape</a><br><a href="http://athletics.vtc.edu/shape/info" title="Shape information">Vermont Tech Shape Information</a></td></tr></table>',
            "type": 'Judd/Shape'
        },
		{
            "title": 'Sodexo Snack Bar & Student Lounge',
            "lat": '43.938343',
            "lng": '-72.602393',
            "description": '<table><tr><td><IMG BORDER="0" ALIGN="Left" height="400px" width="500px" src="images/campuscenter.jpg"></td><td><b>Sodexo Snack Bar & Student Lounge: </b>The Sodexo Snack bar offers a variety of breakfast, lunch, and dinner options throughout the day for students and the public. If a student has a meal plan they will have points that they can use for the snack bar. The student lounge area is available for students and the public and they offer couches, tables, TVs for anyone who is looking for a comfortable place to study or kick back and relax.<br><a href="panos/shapelounge.php" title="Shape/Community Center Lounge">Shape/Community Center Student Lounge</a><br><a href="panos/snackbar.php">Snack Bar</a></td></tr></table>',
            "type": 'Judd/Shape'
        },
		{
            "title": 'Basketball Gym',
            "lat": '43.938766',
            "lng": '-72.602700',
            "description": '<b>Basketball Gym: </b>The basketball gym is available for students and the public to use when there are no classes or games in session. Intramural sports are offered in the gym for students and the facility is free to use for them.',
            "type": 'Judd/Shape'
        },
		{
            "title": 'Swimming Pool',
            "lat": '43.938881',
            "lng": '-72.602423',
            "description": '<b>Swimming Pool: </b>The swimming pool in Shape is a 25 yard long pool with three lanes available for lap swimming. Water Aerobics are also offered and are free for students.',
            "type": 'Judd/Shape'
        },
		{
            "title": 'Fitness Center',
            "lat": '43.938494',
            "lng": '-72.602299',
            "description": '<b>Fitness Center: </b>The Fitness Center is a workout facility that is equipped with tredmills, olipticals, stationary bicycles, weight machines, and free weights. Students are allowed to use this facility for free during open hours, and if they have any questions they can stop by the front desk for any additional information.<br><a href="panos/fitnessgym.php">Fitness Gym</a>',
            "type": 'Judd/Shape'
        },
		//Judd/Shape Markers End --Pink
		
		//Hartness Markers Start --Orange
		{
            "title": 'Hartness Library',
            "lat": '43.938266',
            "lng": '-72.603581',
            "description": '<table><tr><td><IMG BORDER="0" ALIGN="Left" height="400px" width="500px" src="images/hartness.jpg"></td><td><b>Hartness Library: </b>The Hartness Library gives the students access to course material along with books in the library. If the library does not have a book you are looking for they can borrow it from another college for free.<br><a href="http://hartness.vsc.edu/vtc" title="Vermont Tech Hartness Library">Vermont Tech Hartness Library</a><br><a href="panos/hartness.php">Hartness Interior</a></td></tr></table>',
            "type": 'Hartness'
        },
		//Hartness Markers End --Orange
		
		//Dorm Markers Start --Purple
		{
            "title": 'Keenan Hall',
            "lat": '43.936617',
            "lng": '-72.602929',
            "description": '<table><tr><td><IMG BORDER="0" ALIGN="Left" height="400px" width="500px" src="images/keenan.jpg"></td><td><b>Keenan Hall: </b>Keenan Hall is one of the dormatory buildings that houses the students. This dorm is equipped with laundry services, a full kitchen, lounging area with a pool table and TV, and full bathroom facilities. This dorm is housed by upperclassmen or anyone over the age of 21.<br><a href="panos/keenanlounge.php">Keenan Lounge</a></td></tr></table>',
            "type": 'Dorm'
        },{
            "title": 'Nutting Hall',
            "lat": '43.939479',
            "lng": '-72.603026',
            "description": '<table><tr><td><IMG BORDER="0" ALIGN="Left" height="400px" width="500px" src="images/nutting.jpg"></td><td><b>Nutting Hall: </b>Nutting Hall is one of the dormatory buildings that is housed by incoming freshman at Vermont Tech. Students will be paired with a roommate with similar interests and hobbies. This dorm is equipped with laundry services, a full kitchen, lounging area with a pool table and TV, and full bathroom facilities.<br><a href="panos/nuttinglounge.php" title="Nutting Dorm Lounge">Nutting Dorm Lounge</a><br><a href="panos/nuttingroom.php">Nutting Room</a></td></tr></table>',
            "type": 'Dorm'
        },{
            "title": 'Morey Hall',
            "lat": '43.936930',
            "lng": '-72.603552',
            "description": '<table><tr><td><IMG BORDER="0" ALIGN="Left" height="400px" width="500px" src="images/morey.jpg"></td><td><b>Morey Hall: </b>Morey Hall is one of the dormatory buildings that houses the students. This dorm is equipped with laundry services, a full kitchen, lounging area with a pool table and TV, and full bathroom facilities. This dorm is housed by upperclassmen or anyone over the age of 21.<br><a href="panos/moreylounge.php">Morey 2nd Floor Lounge</a><br><a href="panos/moreythirdfloorlounge.php">Morey 3rd Floor Lounge</a></td></tr></table>',
            "type": 'Dorm'
        },
		{
            "title": 'WVTC Radio Station',
            "lat": '43.936844',
            "lng": '-72.603372',
            "description": '<b>WVTC Radio Station: </b>The WVTC Radio Station is a public radio station run by the students. Students can sign up and host a radio show if they are interested.<br><a href="http://wvtc.net/" title="Vermont Tech WVTC Radio Station">WVTC Radio Station</a>',
            "type": 'Dorm'
        },
		{
            "title": 'Sodexo Dining Hall',
            "lat": '43.937026',
            "lng": '-72.603544',
            "description": '<b>Sodexo Dining Hall: </b>The Sodexo Dining Hall is inside of the Morey Hall dorm. The dining hall offers breakfast, lunch and dinner to students as well as the public. The dining hall is open all day and gives students a place to relax and do their homework.<br><a href="http://www.vtc.edu/my-vermont-tech/my-vtc-home/meal-plans" title="Vermont Tech Sodexo Meal Plans">Vermont Tech Sodexo Meal Plans</a><br><a href="panos/sodexodininghall.php">Sodexo Dining Hall</a><br><a href="http://www.vermonttechdining.com/index.html" title"Vermont Tech Sodexo Webpage">Vermont Tech Dining</a>',
            "type": 'Dorm'
        },
		{
            "title": 'Student Affairs',
            "lat": '43.937172',
            "lng": '-72.603726',
            "description": '<b>Student Affairs: </b>The Student Affairs office is located in Morey and offers services for students when it comes to resident life, resident hall living, room and board contracts, and student life staff is located here.<br><a href="panos/studentaffairs.php" title="Student Affairs">Student Affairs Office</a><br><a href="http://www.vtc.edu/my-vermont-tech/my-vtc-home/course-catalog/academic-affairs" title="Vermont Tech Academic Affairs">Vermont Tech Academic Affairs</a><br><a href="http://www.vtc.edu/student-affairs" title="Vermont Tech Student Affairs">Vermont Tech Student Affairs</a>',
            "type": 'Dorm'
        },
		{
            "title": 'Old Dorm Hall',
            "lat": '43.93992231',
            "lng": '-72.60598451',
            "description": '<table><tr><td><IMG BORDER="0" ALIGN="Left" height="400px" width="500px" src="images/olddorm.jpg"></td><td><b>Old Dorm Hall: </b>Old Dorm Hall is the oldest dormatory building on campus that houses upperclassmen. This dorm is equipped with laundry services, a full kitchen, lounging area with a pool table and TV, and full bathroom facilities.</td></tr></table>',
            "type": 'Dorm'
        },
		//Dorm Markers End --Purple
		
		//Extra Markers Start --Grey
		{
            "title": 'Soccer Field',
            "lat": '43.941062',
            "lng": '-72.605201',
            "description": '<b>Soccer Field: </b>The soccer field is used by the students and athletes. Some majors use this field as a lab environment when not in use by the athletics program.',
            "type": 'Misc'
        },
		{
            "title": 'Tennis Court',
            "lat": '43.938478',
            "lng": '-72.605101',
            "description": '<b>Tennis Court: </b>The tennis court is used by clubs and various students who wish to play outside on a full court.',
            "type": 'Misc'
        },
		{
            "title": 'Outside Basketball Court',
            "lat": '43.937398',
            "lng": '-72.602908',
            "description": '<b>Outside Basketball Court: </b>The outside basketball courts are available for students to use. Equipment can be rented from the Shape facility.',
            "type": 'Misc'
        },
		{
            "title": 'Outside Volleyball Court',
            "lat": '43.937209',
            "lng": '-72.602790',
            "description": '<b>Outside Volleyball Court: </b>The outside volleyball court is available for students and equipment can be rented from Shape.',
            "type": 'Misc'
        },
		{
            "title": 'Vermont Tech Apple Orchard',
            "lat": '43.93386908',
            "lng": '-72.60040686',
            "description": '<b>Vermont Tech Appl Orchard: </b>The Vermont Tech Apple Orchard is run by the college and during the fall open for applepicking. Students get a discounted rate when purchasing apples with their photo ID.<br><a href="http://www.vtc.edu/meet-vtc/orchard" title="Vermont Tech Apple Orchard">Vermont Tech Apple Orchard</a>',
            "type": 'Misc'
        },
		{
            "title": 'Construction Management Lab',
            "lat": '43.939579',
            "lng": '-72.602146',
            "description": '<b>Construction Management Lab: </b>The Construction Management Lab is used by the students to get hands-on experience within their major.',
            "type": 'Misc'
        },
		{
            "title": 'Facilities',
            "lat": '43.940255',
            "lng": '-72.602820',
            "description": '<b>Facilities: </b>The Facilities building is in charge of any repairs across campus, campus maintainability, and custodial services.<br><a href="http://www.vtc.edu/facilities" title="Vermont Tech Facilities">Vermont Tech Facilitie</a>',
            "type": 'Misc'
        },
		{
            "title": 'Big Bertha',
            "lat": '43.940765',
            "lng": '-72.602012',
            "description": '<b>Big Bertha: </b>Big Bertha is Vermont Tech&#39;s biodigester which is used to regenerate waste and create energy for the campus...IDK<br><a href="http://digester.vtc.edu/" title="Vermont Tech Big Bertha">Vermont Tech Big Bertha</a>',
            "type": 'Misc'
        },
		{
            "title": 'Red School House',
            "lat": '43.93732069',
            "lng": '-72.60575518',
            "description": '<table><tr><td><IMG BORDER="0" ALIGN="Left" height="400px" width="500px" src="images/redschoolhouse.jpg"></td><td><b>Red School House: </b>The Red School House is used as a classroom building for larger lectures. There is more seating in this building making it easier to fit a large lecture in one place.<br><a href="http://www.vtc.edu/catering-facilities" title="Vermont Tech Catering and Facilities">Vermont Tech Catering and Facilities</a></td></tr></table>',
            "type": 'Misc'
        },
		{
            "title": 'Vermont Tech Farm',
            "lat": '43.939441',
            "lng": '-72.611867',
            "description": '<b>Vermont Tech Farm: </b>The Vermont Tech Farm is run by the college and its students. Some majors have lectures, labs, or chores at the farm to get personal hands-on experience within their major.',
            "type": 'Misc'
        }
		//End Extra Markers --Grey
    ];
window.onload = function () {
 
    var mapOptions = {
        center:  new google.maps.LatLng(43.9384929,-72.6037678), //Center of the map when it loads.
        zoom: 17,												 //Zoom level when the map loads
        mapTypeId: google.maps.MapTypeId.SATELLITE				 //Map displayed
    };
    var infoWindow = new google.maps.InfoWindow();
    var latlngbounds = new google.maps.LatLngBounds();
    var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
    var i = 0;
    var interval = setInterval(function () {
        var data = markers[i]
        var myLatlng = new google.maps.LatLng(data.lat, data.lng);
        var icon = "";
		switch (data.type) {
            case "Admissions":
                icon = "red-dot";
                break;
            case "Green":
                icon = "green-dot";
                break;
            case "Morrill/Clarke":
                icon = "blue-dot";
                break;
            case "Conant":
                icon = "yellow-dot";
                break;
			case "Judd/Shape":
                icon = "pink-dot";
                break;
			case "Hartness":
                icon = "orange-dot";
                break;
			case "Dorm":
                icon = "purple-dot";
                break;
			case "Misc":
                icon = "grey";
                break;
        }
        icon = "http://maps.google.com/mapfiles/ms/icons/" + icon + ".png";
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: data.title,
            animation: google.maps.Animation.DROP,
            icon: new google.maps.MarkerImage(icon),
	    optimized: false
        });
        (function (marker, data) {
            google.maps.event.addListener(marker, "click", function (e) {
                infoWindow.setContent(data.description);
                infoWindow.open(map, marker);
            });
        })(marker, data);
        latlngbounds.extend(marker.position);
        i++;
        
    }, 35);//this changes the rate at which the markers drop on the page
}
</script>
<table><!--This table is a legend used for the map. It clarifies what each color marker is corresponding too. -->
<tr>
    <td>
        <div id="dvMap" style="border-radius:25px;width:1380px;height:800px;margin-right:15px;box-shadow:10px 10px 10px #888888"><h3>Map is unavailable at this time, please check again later.<br>
		If you are using Internet Explorer, please switch to either Google Chrome or Firefox.</h3>
        </div>
    </td>
    <td  id="legend" valign="top">
        <u><b>Legend:</b></u><br />
        <img alt="" src="http://maps.google.com/mapfiles/ms/icons/red-dot.png" />
        Admissions<br />
        <img alt="" src="http://maps.google.com/mapfiles/ms/icons/green-dot.png" />
        Green Hall<br />
        <img alt="" src="http://maps.google.com/mapfiles/ms/icons/blue-dot.png" />
        Morrill/Clarke<br />
        <img alt="" src="http://maps.google.com/mapfiles/ms/icons/yellow-dot.png" />
        Conant<br />
		<img alt="" src="http://maps.google.com/mapfiles/ms/icons/pink-dot.png" />
        Judd/Shape<br />
		<img alt="" src="http://maps.google.com/mapfiles/ms/icons/orange-dot.png" />
        Hartness<br />
		<img alt="" src="http://maps.google.com/mapfiles/ms/icons/purple-dot.png" />
        Dorm Buildings<br />
		<img alt="" src="http://maps.google.com/mapfiles/ms/icons/grey.png" />
        Misc
    </td>
</tr>
</table>

<?php include 'footer.php'; ?>
