<?php
  echo <<<_END
      
         <form  action="index.php" method="GET">
                <fieldset>
                <legend> SMS </legend>
              <pre> 
     shomareh :  <input type="text" name="FROM" size = 13>
    
                           
   matn  :
    <textarea name="TEXT" cols="60 rows="9">   I am ...</textarea>
               
        
                                     </pre>           
                 </pre>                                 
                 </fieldset>
                         
                              <pre>
          <input type="button" value="  Return  " onClick="history.go(-1)">  <input type="reset" value="  Reset  ">  <input type= "button" value="   Show  ">  <input type= "submit" value="  Send  ">
                  </pre>
         </form>
      
_END;

?>            
