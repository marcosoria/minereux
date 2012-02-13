<?php 
/** 
* @author  :  MA Razzaque Rupom <rupom_315@yahoo.com>, <rupom.bd@gmail.com> 
*             Moderator, phpResource (http://groups.yahoo.com/group/phpresource/) 
*             URL: http://www.rupom.info  
* @version :  1.0* Version : 1.0 
* Date     :  20 May, 2006 
* Purpose  : Importing valid SQL dump to DB 
* Release  : Released under GNU Public License 
*/ 

class ParseSql 
{ 
   var $file; 
    
   function ParseSql($file) 
   {      
      $this->setFile($file); 
        $this->startParsing(); 
   } 
    
   /** 
   * @purpose : Sets filename to be parsed 
   * @params $file 
   * @return none 
   */ 
   function setFile($file) 
   { 
      $this->file = $file; 
   } 

   /** 
   * @purpose : Gets filename to be parsed 
   * @params none 
   * @return filename 
   */ 
    
   function getFile() 
   { 
      return $this->file; 
   } 
    
   /** 
   * @purpose : Parses SQL file 
   * @params none 
   * @return none 
   */ 

   function startParsing() 
   { 

      $file = $this->getFile();      
        // Getting the SQL file content        
        $content = file_get_contents($file); 
                
        // Processing the SQL file content              
        $file_content = explode("\n",$content);            
      
      
        $query = ""; 
        
          // Parsing the SQL file content              
          foreach($file_content as $sql_line) 
          {        
             if(trim($sql_line) != "" && strpos($sql_line, "--") === false) 
             {              
                $query .= $sql_line; 
                  // Checking whether the line is a valid statement 
                  if(preg_match("/(.*);/", $sql_line)) 
                  { 
                     $query = substr($query, 0, strlen($query)-1);                        
                       //Executing the parsed string, returns the error code in failure 
                       $result = mysql_query($query)or die(mysql_error()); 
                       $query = ""; 
                  } 
             } 
          } //End of foreach 
        
        return true; 
   } //End of function 
    
} //End of class 

?>