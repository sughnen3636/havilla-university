<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function showDepts($faculty)
    {
    	if ($faculty === 'computing-and-scienes') {
    		$title = 'Havilla | Faculty of Computing';
    		$faculty = 'Faculty of Computing';
    		return view('computing',compact('title', 'faculty'));
    	}elseif ($faculty === 'management-and-social-sciences') {
    		$title = 'Havilla | Faculty of Management & Social Sciences';
    		$faculty = 'Faculty of Management & Social Sciences';
    		return view('mgt',compact('title','faculty'));
    	}elseif ($faculty === 'natural-and-applied-sciences') {
    		$title = 'Havilla | Faculty of Natural & Applied Sciences';
    		$faculty = 'Faculty of Natural & Applied Sciences';
    		return view('natural', compact('title','faculty'));
    	}

    	$title = 'Havilla | Faculty of Computing';
    	$faculty = 'Faculty of Computing';
    	return view('computing',compact('title', 'faculty'));
    }

    public function singleDept($department)
    {
    	switch ($department) {
    		case 'computer-science':
    			$title = 'Havilla | Department of Computer Science';
    			$dept = 'Department of Computer Science';
    			$img = 'computing-h.jpg';
                $add_img1 = '';
                $add_img2 = '';
                $req = 'Five Credits at SSCE (or its equivalent) including English, Mathematics, Physics plus two other science subjects.<br/>UTME subjects are: English, Mathematics, Physics and one of Biology, Chemistry, Agric Science, Economics and Geography.';
    			$overview = "The computer science department produces cutting-edge research and development, and future IT engineers and developers must be able to comprehend societal and industry patterns as well as imaging devices, processes, and services—as well as the technology needed to make them a reality.
                    Students of the Department of Computer Science gain comprehensive experience as well as a high level of competence."."The department's concept of integrating humanities and sciences gives them the expertise and competencies to be the driving force behind innovative and socially responsible information technology applications, as well as the opportunity to face demands as they pioneer new fields of information science.";

                    $degree = 'B.Sc Computer Sciences <br/><br/><i class="fa fa-graduation-cap"></i> B.Sc Cyber Security <br/><br/><i class="fa fa-graduation-cap"></i> B.Sc Software Engineering';

                    return view('department', compact('overview', 'degree', 'title', 'dept', 'img', 'add_img1', 'add_img2', 'req'));
    			break;

    		case 'cyber-security':
    			$title = 'Havilla | Department of Cyber Security';
    			$dept = 'Department of Cyber Security';
    			$img = 'computing-h.jpg';
                $add_img1 = '';
                $add_img2 = '';
                $req = 'Five Credits at SSCE (or its equivalent) including English, Mathematics, Physics plus two other science subjects.<br/>UTME subjects are: English, Mathematics, Physics and one of Biology, Chemistry, Agric Science, Economics and Geography.';
    			$overview = "The Department of Cyber Security offers a bachelor's degree (BSc) that prepares students for successful jobs and leadership positions in the global service community. <br> The Department's vision is to contribute potential cyber intelligence and security experts who are well-prepared for early success in the public, private, and higher education sectors.<br> The goal of the department is to train students to address the emerging obstacles that companies and government agencies face in recognizing, detecting, evaluating, preventing, reacting to, and recovering from cyber attacks, as well as to strengthen their cyber security posture.";
    			$degree = 'B.Sc Cyber Security';

    			return view('department',compact('overview','dept','title','degree', 'img','add_img1', 'add_img2', 'req'));
    			break;

    		case 'software-engineering':
    			$title = 'Havilla | Department of Software Engineering';
    			$dept = 'Department of Software Engineering';
    			$img = 'computing-h.jpg';
                $add_img1 = '';
                $add_img2 = '';
                $req = 'Five Credits at SSCE (or its equivalent) including English, Mathematics, Physics plus two other science subjects.<br/>UTME subjects are: English, Mathematics, Physics and one of Biology, Chemistry, Agric Science, Economics and Geography.';
    			$overview = "Software Engineering graduates of Havilla University will be able to formulate and solve complicated software engineering issues in a technical or research environment, as well as demonstrate successful teamwork, cooperation, and ongoing learning as ethically and socially responsible software engineers. The Department collaborates with an advisory board that adheres to a set of principles.<br> Since engineering teams build complicated software structures in the real world, our programme emphasizes team-based practices with a focus on teamwork and the design process. Through working closely with faculty and industry, students are mentored to become world-class engineers and perform world-class studies.";
    			$degree = 'B.Sc Software Engineering';

    			return view('department', compact('title', 'overview', 'degree', 'dept', 'img','add_img1', 'add_img2', 'req'));
    			break;

    		case 'accounting':
    			$title = 'Havilla | Department of Accounting';
    			$dept = 'Department of Accounting';
    			$img = 'mgt-h.jpg';
                $add_img1 = '';
                $add_img2 = '';
    			$overview = "At Havilla University, Accounting's key aim is to calculate and convey financial information about profit and non-profit organizations to those who are involved. Accounting practitioners work in a number of environments.<br> Students can learn about taxation, financial management, administrative accounting, auditing, and governmental/not-for-profit accounting through the accounting department's diverse course offerings. The Accounting Program trains students for entry-level career jobs as well as providing prerequisite classes for graduate school enrollment.";
                $req = 'Five Credits at SSCE (or its equivalent) in English, Mathematics, Economics, one Science subject and any other one relevant subject.<br/>UTME subjects are: English, Economics, Mathematics and any Social Science subject.';
    			$degree = 'B.A Accounting';

    			return view('department', compact('title', 'overview', 'degree', 'dept', 'img','add_img1', 'add_img2', 'req'));
    			break;
    		
    		case 'business-admin':
    			$title = 'Havilla | Department of Business Administration';
    			$dept = 'Department of Business Administration';
    			$img = 'mgt-h.jpg';
                $add_img1 = '';
                $add_img2 = '';
    			$overview = "A business degree gives you the principles and knowledge you'll need to excel in business and advance your education. Entrepreneurship and human resource management are among the units covered.<br/> Small classrooms, customized advising, quality faculty, and world-class services are all part of a Havilla Business Administration degree that addresses the demands of the intensely dynamic and ever-changing business world! <br/><br/> The Entrepreneurship specialization assists students in honing their talents in order to start and run profitable businesses. Market plans, the supply chain, sales models, venture capital, technology, new venture expansion, and harvesting the new venture are among the topics explored. <br>At the conclusion of their education, entrepreneurship students will be able to launch their own businesses.<br/><br/>The Management concentration equips students with the experience and expertise they need to succeed in public or private sector organizations. Managerial capabilities are discussed from both a theoretical and practical perspective for both big and small firms.";
                $req = 'Five Credits at SSCE (or its equivalent) in English, Mathematics, Economics, one Science subject plus any one from Accounting, Business Methods, Commerce, Govt., Geography and Statistics.<br/>UTME subjects are: Mathematics, Economics and one other subject.';
    			$degree = 'B.A Entrepreneurship <br/><br/><i class="fa fa-graduation-cap"></i> B.A Human Resource Management ';

    			return view('department', compact('title', 'overview', 'degree', 'dept', 'img','add_img1', 'add_img2', 'req'));
    			break;

    		case 'economics':
    			$title = 'Havilla | Department of Economics';
    			$dept = 'Department of Economics';
    			$img = 'mgt-h.jpg';
                $add_img1 = '';
                $add_img2 = '';
    			$overview = "Our world-class department is built on excellent faculty who are passionate about teaching and science, as well as committed students who take advantage of learning experiences both within and outside the classroom.<br/><br/>Our faculty have been regularly published in leading scholarly journals, have been named as fellows of prominent professional societies, and have received distinctions for the excellence of their teaching.";
                $req = 'Five Credits at SSCE (or its equivalent) in English, Mathematics, Economics, one Science subject plus any one from Accounting, Business Methods, Commerce, Govt., Geography and Statistics.<br/>UTME subjects are: Mathematics, Economics and one other subject.';
    			$degree = 'B.A Economics Development Studies';

    			return view('department', compact('title', 'overview', 'degree', 'dept', 'img','add_img1', 'add_img2', 'req'));
    			break;

    		case 'taxation':
    			$title = 'Havilla | Department of Taxation';
    			$dept = 'Department of Taxation';
    			$img = 'mgt-h.jpg';
                $add_img1 = '';
                $add_img2 = '';
    			$overview = "Our taxation curriculum provides you with the adaptability and realistic knowledge you'll need to succeed in the field of taxation. Our professors are mentors as well as practitioners. You'll extend and improve your comprehension of federal and state tax laws, training you to excel in all facets of the industry. <br/><br/>Students can tailor their education by enrolling in specialization courses such as international taxes, state and local taxation, tax reform, and accounting times and procedures, among others.";
                $req = 'Five Credits at SSCE (or its equivalent) in English, Mathematics, Economics, one Science subject and any other one relevant subject.<br/>UTME subjects are: English, Economics, Mathematics and any Social Science subject.';
    			$degree = 'B.A Taxation';

    			return view('department', compact('title', 'overview', 'degree', 'dept', 'img','add_img1', 'add_img2', 'req'));
    			break;

    		case 'biological-science':
    			$title = 'Havilla | Department of Biological Science';
    			$dept = 'Department of Biological Science';
    			$img = 'natural-h.jpg';
                $add_img1 = '';
                $add_img2 = '';
                $req = 'Five Credits at SSCE (or its equivalent) including English, Mathematics, Physics and Chemistry, Five Credits at SSCE (or its equivalent) in English, Mathematics, Physics, Chemistry and Biology.<br/>UTME subjects are: Biology and two of Physics, Chemistry and Mathematics.';
    			$overview = "Industrial biotechnology's promise for sustainable processing of fuels, additives, fabrics, food, and feed must be realized by innovation. Similarly, developments in environmental biotechnology are needed to allow innovative approaches to water purification and ‘waste-to-product' processes, which will contribute to the circular economy.<br/><br/>For advancement in this area, more basic knowledge of enzymes, microorganisms, and processes is needed. This research area is served by the Department of Biological Sciences, which chooses, develops, and studies new biobased catalysts, microorganisms, and processes based on new insights.";
    			$degree = 'B.Sc Biotechnology';

    			return view('department', compact('title', 'overview', 'degree', 'dept', 'img','add_img1', 'add_img2', 'req'));
    			break;

    		case 'chemical-sciences':
    			$title = 'Havilla | Department of Chemistry';
    			$dept = 'Department of Chemistry';
    			$img = 'natural-h.jpg';
                $add_img1 = 'chem-1.jpg';
                $add_img2 = 'chem-2.png';
    			$overview = "Undergraduate students interested in cutting-edge science can find a variety of opportunities in the Havilla University Department of Chemical Sciences. We provide students with the ability to explore their scientific imaginations while gaining instruction from top chemistry faculty.<br/><br/>The Chemical Sciences Department is dedicated to promoting a respectful work environment. We work hard to create a healthy, welcoming, and equitable atmosphere in which our employees, professors, academics, and students can excel as they pursue new chemical frontiers through study, creativity, partnership, and scholarship.";
                $req = 'Five Credits at SSCE (or its equivalent) in English, Mathematics, Physics, Chemistry and Biology.<br>UTME subjects are: Chemistry and two of Physics, Biology and Mathematics.';
    			$degree = 'B.Sc Industrial Chemistry';

    			return view('department', compact('title', 'overview', 'degree', 'dept', 'img','add_img1', 'add_img2', 'req'));
    			break;

    		case 'mathematics':
    			$title = 'Havilla | Department of Mathematics';
    			$dept = 'Department of Mathematics';
    			$img = 'natural-h.jpg';
                $add_img1 = '';
                $add_img2 = '';
    			$overview = "The Havilla Department of Mathematics' mission is to provide students with visionary and important high-quality programs at the undergraduate and graduate levels, as well as to promote mathematical science for the good of society. The department's faculty and staff have set lofty goals to fulfill this aim.<br/><br/>The department aspires to deliver Cross River State's finest undergraduate mathematics curriculum. We have doctoral and master's degree programs that enable students to seek careers as mathematicians. We further inspire faculty and students at all levels to be dedicated to world-class study in a wide range of fields of mathematics.";
                $req = '';
    			$degree = 'B.Sc Industrial Mathematics';

    			return view('department', compact('title', 'overview', 'degree', 'dept', 'img','add_img1', 'add_img2', 'req'));
    			break;

    			case 'physics':
    			$title = 'Havilla | Department of Physics';
    			$dept = 'Department of Physics';
    			$img = 'natural-h.jpg';
                $add_img1 = '';
                $add_img2 = '';
    			$overview = "The Physics Department offers a four-year B.Sc. in Physics, the first three years in the undergraduate curriculum have basic insight and expand the students' understanding of Physics.<br/><br/>It exposes them to physical study methods and tools, as well as instilling in them a sense of curiosity that encourages them to pursue a field of expertise and face the obstacles that come with it.";
                $req = 'Five Credits at SSCE (or its equivalent) including English, Mathematics, Physics and Chemistry, Five Credits at SSCE (or its equivalent) in English, Mathematics, Physics, Chemistry and Biology.<br/>UTME subjects are: Biology and two of Physics, Chemistry and Mathematics.';
    			$degree = 'B.Sc Physics and Electronics';

    			return view('department', compact('title', 'overview', 'degree', 'dept', 'img','add_img1', 'add_img2', 'req'));
    			break;
    		
    		default:
    			# code...
    			break;
    	}
    }
}
