<?
include "connect.php";

if (isset($_POST['class']) && isset($_POST['rank_select'])){
	$class = $_POST['class']; 
	$rank_select = $_POST['rank_select']; 
	
		if ($class && $rank_select) {
		
		$ids = array(); 
		$matches = array(); 
		
		$subject_query = "SELECT * FROM `meta` WHERE `user_id` = '$userid'";
		$result2 = mysql_query($subject_query) or die (mysql_error());
		$info2 = mysql_fetch_assoc($result2);
		
		$julie_gichuru = "SELECT * FROM `classes` 
		INNER JOIN `meta` 
		ON `classes`.`name` = '".$class."'
		AND `classes`.`".$rank_select."` = 'yes' 
		AND `meta`.`user_id` = `classes`.`userid`";


		$result = mysql_query($julie_gichuru) or die (mysql_error());
		$num_rows = mysql_num_rows($result);
		$index = 0; 
		
		while ($info = mysql_fetch_assoc($result)){
		$id = $info['user_id'];
		
		array_push($ids, $id);
		$matches[$index] = 1;

		$study_time = $info['study_time'];
		
		if ($info['study_time'] == $info2['study_time']){
			$matches[$index] = $matches[$index] + 1; 
		}
		
		$study_place = $info['study_place'];
		if ($info['study_place'] == $info2['study_place']){
			$matches[$index] = $matches[$index] + 1; 
		}
		
		$major_type = $info['major_type'];
		if ($info['major_type'] == $info2['major_type']){
			$matches[$index] = $matches[$index] + 1; 
		}
		
		$timeline = $info['timeline'];
		if ($info['timeline'] == $info2['timeline']){
			$matches[$index] = $matches[$index] + 1; 
		}

		$class_year = $info['class_year'];
		if ($info['class_year'] == $info2['class_year']){
			$matches[$index] = $matches[$index] + 1; 
		}		
		
		$index = $index + 1; 
		
		echo "--$id--$study_time--$study_place--$major_type--$timeline--$class_year-- </br>"; 
	
		}
		echo "Ids........:";print_r($ids);
		echo "</br>";
		
		echo "Matches:";print_r($matches);
		echo "</br>";
		
		
		$ids = implode(",", $ids); 
		$atts = implode(",", $matches); 

		$ids = "'".$ids."'";
		$atts = "'".$atts."'";

		$cmd = $ids.",".$atts; 

		echo "in class array: ";
		echo "ids: $ids --- atts: $atts";
		echo "<br>";
		$command = "matlab -sd -nodesktop -nojvm -nosplash -r silly($cmd)";
		$last_line = system($command, $result);
	
	}
	else
	{
		echo "Nothing selected </br>";
	}	
}
else
{
	echo "Nothing selected </br>";
}
?>