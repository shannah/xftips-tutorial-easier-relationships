<?php
class tables_courses {
	function titleColumn(){
		return "concat(`subject`,' ',`course_number`)";
	}
	
	function getTitle($record){
		return $record->val('subject').' '.$record->val('course_number');
	}
}