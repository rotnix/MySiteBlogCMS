<?php

// If it's going to need the database, then it's 
// probably smart to require it before we start.
require_once(LIB_PATH.DS.'database.php');

class Category extends DatabaseObject {
protected static $list_articlecategory_table_name="list_articlecategory";
protected static $article_table_name="article";
protected static $category_table_name="category";
	
protected static $category_fields=array('category');


public $category;
  
  
  // "new" is a reserved word so we use "make" (or "build")
	public static function make_category($category_post="Empty") {
    if(!empty($category_post)) {
		$category = new Category();
		
		$category->category = $category_post;
		//$category->article_id =$article_id;
	   
	    return $category;
		} else {
			return false;
		}
	}
		
	//Many - Many 
	public static function find_category_on_article($article_id=1) {
    global $database;
	
	$sql = "SELECT  article.id, category.id, list_articlecategory.article_id, list_articlecategory.category_id, category.category FROM ". self::$list_articlecategory_table_name;
	$sql .= " INNER JOIN ". self::$article_table_name;
	$sql .= " ON article.id=list_articlecategory.article_id";
	$sql .= " INNER JOIN ". self::$category_table_name;
	$sql .= " ON category.id=list_articlecategory.category_id";
	$sql .= " WHERE list_articlecategory.article_id={$article_id}";
	$sql .= " ORDER BY category";	
//print($sql);
   	return self::find_by_sql($sql);
	}
	
	
	public static function find_article_on_category($category_id=24,$per_page,$paginationoffset) {
    global $database;
	
	$sql = "SELECT  article.id, category.id, list_articlecategory.article_id, list_articlecategory.category_id, category.category FROM ". self::$list_articlecategory_table_name;
	$sql .= " INNER JOIN ". self::$article_table_name;
	$sql .= " ON article.id=list_articlecategory.article_id";
	$sql .= " INNER JOIN ". self::$category_table_name;
	$sql .= " ON category.id=list_articlecategory.category_id";
	$sql .= " WHERE list_articlecategory.category_id={$category_id}";
	//$sql .= " ORDER BY category";
	$sql .= " LIMIT {$per_page}";
	$sql .= " OFFSET {$paginationoffset}";	
	//echo $sql;
  
   	return self::find_by_sql($sql);
  
	}
	
	
	public static function count_by_id($category_id) {
	  global $database;
	  $sql = "SELECT COUNT(*) FROM list_articlecategory";
	  $sql .= " WHERE category_id={$category_id}";
	  //echo $sql;
    $result_set = $database->query($sql);
	  $row = $database->fetch_array($result_set);
    return array_shift($row);
	}
	
	
	public static function find_by_sql($sql="") {
    global $database;
    $result_set = $database->query($sql);       	
    $object_array = array();
    while ($row = $database->fetch_array($result_set)) {
    	//print_r($row);
     $object_array[] = self::instantiate($row);
    }
    return $object_array;
	}
	
	
private static function instantiate($record) {
		// Could check that $record exists and is an array
    $object = new self;
		// Simple, long-form approach:
				
		$object->id						= $record['id'];
		$object->category 				= $record['category'];
		$object->category_id			= $record['category_id'];
		$object->article_id				= $record['article_id'];
		// More dynamic, short-form approach:
		//foreach($record as $attribute=>$value){		
			//print_r($record)."_:_";
		 //if($object->has_attribute($attribute)) {
		   // $object->$attribute = $value;
		 //}
		//}
		//print_r($object);
		return $object;
	}	
	
	private function has_attribute($attribute) {
	  // We don't care about the value, we just want to know if the key exists
	  // Will return true or false
	  return array_key_exists($attribute, $this->attributes());
	}

	protected function attributes() { 
		// return an array of attribute names and their values
	  $attributes = array();
	  foreach(self::$category_fields as $field) {
	  	//echo $field." <br>";
	    if(property_exists($this, $field)) {
	      $attributes[$field] = $this->$field;
		//	echo $this->$field ." ";
	    }
	  } 
	  return $attributes;
	}
	
	

public static function find_all() {
		return self::find_by_sql("SELECT * FROM ".self::$category_table_name);
  }
  
  //public static function list_articlecategory_find_by_id($id) {
    //$result_array = self::find_by_sql("SELECT * FROM ".self::$list_articlecategory_table_name." WHERE category_id={$id} LIMIT 1");
		//return !empty($result_array) ? array_shift($result_array) : false;
  //}
  
	public static function find_category_by_id($id) {
    $result_array = self::find_by_sql("SELECT * FROM ".self::$category_table_name." WHERE id={$id} LIMIT 1");
		//print_r($result_array);
		return !empty($result_array) ? array_shift($result_array) : false;
	}


	protected function sanitized_attributes() {
	  global $database;
	  $clean_attributes = array();
	  
	  // sanitize the values before submitting
	  // Note: does not alter the actual value of each attribute
	  foreach($this->attributes() as $key => $value){
	    $clean_attributes[$key] = $database->escape_value($value);
		  
		  
	  }
	  return $clean_attributes;
	  
	}
	
	public function save() {
	  // A new record won't have an id yet.
	  
	  return isset($this->id) ? $this->update() : $this->create();
	}
	
	public function create() {
		global $database;
		// Don't forget your SQL syntax and good habits:
		// - INSERT INTO table (key, key) VALUES ('value', 'value')
		// - single-quotes around all values
		// - escape all values to prevent SQL injection
		
		$attributes = $this->sanitized_attributes();
		
	  $sql = "INSERT INTO ".self::$category_table_name." (";
		$sql .= join(", ", array_keys($attributes));
	  $sql .= ") VALUES ('";
		$sql .= join("', '", array_values($attributes));
		$sql .= "')";
		//echo $sql;
	  if($database->query($sql)) {
	    $this->id = $database->insert_id();
	    return true;
	  } else {
	    return false;
	  }
	}
	
	
		public function createcategory($x) {
		global $database;
		// Don't forget your SQL syntax and good habits:
		// - INSERT INTO table (key, key) VALUES ('value', 'value')
		// - single-quotes around all values
		// - escape all values to prevent SQL injection
		//$attributes = $this->sanitized_attributes();
	 $sql =	"INSERT INTO " .self::$list_articlecategory_table_name. " (category_id)";
	 $sql .=" VALUES ({$x})";	

		if($database->query($sql)) {
	    //$this->id = $database->insert_id();
	    return true;
	  } else {
	    return false;
	  }
	}
	
	//Post for list_articlecategory
	public function createarticle($x,$y) {
		global $database;
		
	 	$sql =	"INSERT INTO " .self::$list_articlecategory_table_name. " (article_id, category_id)";
		$sql .=" VALUES ({$x},{$y})";	
		if($database->query($sql)) {
	
	    return true;
	  } else {
	    return false;
	  }
	}
	

	public function update() {
	  global $database;
		// Don't forget your SQL syntax and good habits:
		// - UPDATE table SET key='value', key='value' WHERE condition
		// - single-quotes around all values
		// - escape all values to prevent SQL injection
		$attributes = $this->sanitized_attributes();
		
		$attribute_pairs = array();
		foreach($attributes as $key => $value) {
		  $attribute_pairs[] = "{$key}='{$value}'";
		}
		$sql = "UPDATE ".self::$category_table_name." SET ";
		$sql .= join(", ", $attribute_pairs);
		$sql .= " WHERE id=". $database->escape_value($this->id);
		
	  $database->query($sql);
	  return ($database->affected_rows() == 1) ? true : false;
	}

	public function delete_list_ariclecategory() {
		global $database;
		// Don't forget your SQL syntax and good habits:
		// - DELETE FROM table WHERE condition LIMIT 1
		// - escape all values to prevent SQL injection
		// - use LIMIT 1
	  $sql = "DELETE FROM ".self::$list_articlecategory_table_name;
	  $sql .= " WHERE category_id=". $database->escape_value($this->id);
	  $sql .= " LIMIT 1";
	  //echo $sql;
	  $database->query($sql);
	  return ($database->affected_rows() == 1) ? true : false;
	
		// NB: After deleting, the instance of User still 
		// exists, even though the database entry does not.
		// This can be useful, as in:
		//   echo $user->first_name . " was deleted";
		// but, for example, we can't call $user->update() 
		// after calling $user->delete().
	}
	
	
	public function deletecategory() {
		global $database;
		// Don't forget your SQL syntax and good habits:
		// - DELETE FROM table WHERE condition LIMIT 1
		// - escape all values to prevent SQL injection
		// - use LIMIT 1
	  $sql = "DELETE FROM ".self::$category_table_name;
	  $sql .= " WHERE id=". $database->escape_value($this->id);
	  $sql .= " LIMIT 1";
	  //echo $sql;
	  $database->query($sql);
	  return ($database->affected_rows() == 1) ? true : false;
	
		// NB: After deleting, the instance of User still 
		// exists, even though the database entry does not.
		// This can be useful, as in:
		//   echo $user->first_name . " was deleted";
		// but, for example, we can't call $user->update() 
		// after calling $user->delete().
	}


}

?>