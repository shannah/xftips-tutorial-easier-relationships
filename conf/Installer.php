<?php
class conf_Installer {
	function update_1(){
		$sql[] = "CREATE TABLE `courses` (
		  `course_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
		  `subject` varchar(10) DEFAULT NULL,
		  `course_number` varchar(10) DEFAULT NULL,
		  `course_title` varchar(45) DEFAULT NULL,
		  PRIMARY KEY (`course_id`)
		)";
		$sql[] = "CREATE TABLE `students` (
		  `student_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
		  `first_name` varchar(64) DEFAULT NULL,
		  `last_name` varchar(64) DEFAULT NULL,
		  PRIMARY KEY (`student_id`)
		)";
		$sql[] = "CREATE TABLE `student_courses` (
		  `student_id` int(10) unsigned NOT NULL,
		  `course_id` int(11) unsigned NOT NULL,
		  PRIMARY KEY (`student_id`,`course_id`)
		)";
		
		df_q($sql);
	}
}