<?
/*
	Parte que ira servir de webservice que ira retornar json para a aplicacao
	@franzejr
*/

header("Content-Type: application/json");
 
/* Controle de exibicao: JSON ou Debug */
$exibir_json = (isset($_GET["cat"]) && $_GET["cat"] == "false") ? 0 : 1 ;

if($exibir_json){
	if($_GET["cat"] == "web"){
		$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
	}
	
	else if($_GET["cat"] == "engsoft"){
		$json = 
		'{  
		
		"arquivo":[
            {
                "nome":"Object-oriented software engineering",
                "link":"http://tmv.edu.in/pdf/Diploma%20Syllabus/Computer/TY_fifth_sem/Fifth%20Semester%20Curriculum.pdf"
            },
            {
                "nome":"Software Engineering-A",
                "link":"http://userfs.cec.wustl.edu/~cse528/Boehm-SE-Economics.pdf"
            },
            {
                "nome":"Software engineering economics",
                "link":"http://www.kau.edu.sa/Files/830001/Files/56257_Handbook%20of%20Software%20Reliability%20Engineering%2000%20Content_and_Preface.pdf"
            },
            {
                "nome":"Handbook of software reliability engineering",
                "link":"http://classweb.gmu.edu/kersch/infs770/Semantic_Web_16_2/Semantic%20Web.pdf"
            },
            {
                "nome":"Disciplined Software Engineering",
                "link":"http://sunset.usc.edu/classes/cs665_99/lectures/lecture9/LECT9BW.pdf"
            }
        	]
		}';
	}
	
	echo json_encode($json);
}
?>
