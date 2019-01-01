<?php
 

     include 'funcAdd.php';
      if (isset ($_GET["FROM"]))
      {
        insert($_GET["FROM"], $_GET["TEXT"])  ;
      }

      $count = counter();
  echo <<<_END
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" media="all" href="style.css">

<title>Untitled Document</title>
</head>

<body>
<div class="site">
    <div class="header"><a href="http://niazmandisms.ir"><img src="image/logo.png" alt="نیازمندی" /></a></div>
    <div class="menu">
        <ul>
            <li><a href="#">خانه</a></li>
            <li><a href="#">درباره سایت</a></li>
            <li><a href="#">موضوعات</a></li>
            <li style="border: hidden;"><a href="#">تماس با ما</a></li>
        </ul>
    </div>
    <div class="num_sms">
    <table>
            <tr>
                <td>تعداد آگهی:</td>
                <td>5468435138</td>
            </tr>
    </table>
    </div>
    <div class="content">
        <h2>کسب و کار، خدمات و حرفه خود را با ارسال یک پیامک به<span style="font-size:30px; color:#F00;"> 3000538090 </span>در اینترنت به رایگان تبلیغ کنید.</h2>
        <p>کد دسته بندی و متن ارسالی باید به اینصورت باشد: کد دسته بندی+متن.&nbsp;&nbsp;&nbsp;&nbsp; مثال: 2خدمات کامپوتری سپهر</p>
        <p><img src="image/category1.png" alt="category-sms" /></p>
     </div>
        <table>
              <tr>
           
_END;
        // /check do we have a starting page?

connectToDB();

                echo  '   <tr> <td><h4>صنعت و تجارت</h4>
                  <table class="category">
                        <tr>
                            <td class="date_content">تاریخ</td>
                            <td class="rightel">شماره تماس</td>
                            <td class="text">متن</td>
                        </tr>
               
                    ';
    $topPosts = getTopNPosts(20,1);
                for($i=0; $i < mysql_num_rows($topPosts); $i++)
                {
                    if  ( mysql_result($topPosts, $i, 'status') != 00)
                    {$cell_number = mysql_result($topPosts, $i, 'cell_number');
                    $massage  = mysql_result($topPosts, $i, 'massage');
                    $Class  = mysql_result($topPosts, $i, 'Class');
                    $date =  mysql_result($topPosts, $i, 'date');
                    $shdate = convertdate($date);
                    $tclass = "date_content";
                    $ttclass = "text";
                    $catclass = "category";
          
                 
                          echo  "              
     
                   
         
                           <tr>
                            <td class=$tclass>$shdate</td>
                            <td class=$Class>$cell_number</td>
                            <td class=$ttclass>$massage</td>
                        </tr>
                        "
                   ;  
                    }
  
                }                   echo " </table>
                      
                </td>";
                
                
                                echo  '     
                <td><h4>خدمات</h4>
                  <table class="category">
                        <tr>
                            <td class="date_content">تاریخ</td>
                            <td class="rightel">شماره تماس</td>
                            <td class="text">متن</td>
                        </tr>
               
                    ';
    $topPosts = getTopNPosts(20,2);
                for($i=0; $i < mysql_num_rows($topPosts); $i++)
                {
                    if  ( mysql_result($topPosts, $i, 'status') != 00)
                    {$cell_number = mysql_result($topPosts, $i, 'cell_number');
                    $massage  = mysql_result($topPosts, $i, 'massage');
                    $Class  = mysql_result($topPosts, $i, 'Class');
                    $date =  mysql_result($topPosts, $i, 'date');
                    $shdate = convertdate($date);
                    $tclass = "date_content";
                    $ttclass = "text";
                    $catclass = "category";
          
                 
                          echo  "              
     
                   
         
                           <tr>
                            <td class=$tclass>$shdate</td>
                            <td class=$Class>$cell_number</td>
                            <td class=$ttclass>$massage</td>
                        </tr>
                   "
                   ;  
                     }
                 
                }
                  echo " </table>
                            </tr>
                </td>";

                echo  '   <tr> <td><h4>املاک</h4>
                  <table class="category">
                        <tr>
                            <td class="date_content">تاریخ</td>
                            <td class="rightel">شماره تماس</td>
                            <td class="text">متن</td>
                        </tr>
               
                    ';
    $topPosts = getTopNPosts(20,3);
                for($i=0; $i < mysql_num_rows($topPosts); $i++)
                {
                    if  ( mysql_result($topPosts, $i, 'status') != 00)
                    {$cell_number = mysql_result($topPosts, $i, 'cell_number');
                    $massage  = mysql_result($topPosts, $i, 'massage');
                    $Class  = mysql_result($topPosts, $i, 'Class');
                    $date =  mysql_result($topPosts, $i, 'date');
                    $shdate = convertdate($date);
                    $tclass = "date_content";
                    $ttclass = "text";
                    $catclass = "category";
          
                 
                          echo  "              
     
                   
         
                           <tr>
                            <td class=$tclass>$shdate</td>
                            <td class=$Class>$cell_number</td>
                            <td class=$ttclass>$massage</td>
                        </tr>
                        "
                   ;  
                    }
  
                }                   echo " </table>
                      
                </td>";
                
                
                                echo  '     
                <td><h4>وسایل نقلیه</h4>
                  <table class="category">
                        <tr>
                            <td class="date_content">تاریخ</td>
                            <td class="rightel">شماره تماس</td>
                            <td class="text">متن</td>
                        </tr>
               
                    ';
    $topPosts = getTopNPosts(20,4);
                for($i=0; $i < mysql_num_rows($topPosts); $i++)
                {
                    if  ( mysql_result($topPosts, $i, 'status') != 00)
                    {$cell_number = mysql_result($topPosts, $i, 'cell_number');
                    $massage  = mysql_result($topPosts, $i, 'massage');
                    $Class  = mysql_result($topPosts, $i, 'Class');
                    $date =  mysql_result($topPosts, $i, 'date');
                    $shdate = convertdate($date);
                    $tclass = "date_content";
                    $ttclass = "text";
                    $catclass = "category";
          
                 
                          echo  "              
     
                   
         
                           <tr>
                            <td class=$tclass>$shdate</td>
                            <td class=$Class>$cell_number</td>
                            <td class=$ttclass>$massage</td>
                        </tr>
                   "
                   ;  
                     }
                 
                }
                  echo " </table>
                            </tr>
                </td>";   


       
       
       
       
       
               echo  '   <tr> <td><h4>استخدام</h4>
                  <table class="category">
                        <tr>
                            <td class="date_content">تاریخ</td>
                            <td class="rightel">شماره تماس</td>
                            <td class="text">متن</td>
                        </tr>
               
                    ';
    $topPosts = getTopNPosts(20,5);
                for($i=0; $i < mysql_num_rows($topPosts); $i++)
                {
                    if  ( mysql_result($topPosts, $i, 'status') != 00)
                    {$cell_number = mysql_result($topPosts, $i, 'cell_number');
                    $massage  = mysql_result($topPosts, $i, 'massage');
                    $Class  = mysql_result($topPosts, $i, 'Class');
                    $date =  mysql_result($topPosts, $i, 'date');
                    $shdate = convertdate($date);
                    $tclass = "date_content";
                    $ttclass = "text";
                    $catclass = "category";
          
                 
                          echo  "              
     
                   
         
                           <tr>
                            <td class=$tclass>$shdate</td>
                            <td class=$Class>$cell_number</td>
                            <td class=$ttclass>$massage</td>
                        </tr>
                        "
                   ;  
                    }
  
                }                   echo " </table>
                      
                </td>";
                
                
                                echo  '     
                <td><h4>سفر</h4>
                  <table class="category">
                        <tr>
                            <td class="date_content">تاریخ</td>
                            <td class="rightel">شماره تماس</td>
                            <td class="text">متن</td>
                        </tr>
               
                    ';
    $topPosts = getTopNPosts(20,6);
                for($i=0; $i < mysql_num_rows($topPosts); $i++)
                {
                    if  ( mysql_result($topPosts, $i, 'status') != 00)
                    {$cell_number = mysql_result($topPosts, $i, 'cell_number');
                    $massage  = mysql_result($topPosts, $i, 'massage');
                    $Class  = mysql_result($topPosts, $i, 'Class');
                    $date =  mysql_result($topPosts, $i, 'date');
                    $shdate = convertdate($date);
                    $tclass = "date_content";
                    $ttclass = "text";
                    $catclass = "category";
          
                 
                          echo  "              
     
                   
         
                           <tr>
                            <td class=$tclass>$shdate</td>
                            <td class=$Class>$cell_number</td>
                            <td class=$ttclass>$massage</td>
                        </tr>
                   "
                   ;  
                     }
                 
                }
                  echo " </table>
                            </tr>
                </td>";   

       
              
              echo  '   <tr> <td><h4>سلامت و زیبایی</h4>
                  <table class="category">
                        <tr>
                            <td class="date_content">تاریخ</td>
                            <td class="rightel">شماره تماس</td>
                            <td class="text">متن</td>
                        </tr>
               
                    ';
    $topPosts = getTopNPosts(20,7);
                for($i=0; $i < mysql_num_rows($topPosts); $i++)
                {
                    if  ( mysql_result($topPosts, $i, 'status') != 00)
                    {$cell_number = mysql_result($topPosts, $i, 'cell_number');
                    $massage  = mysql_result($topPosts, $i, 'massage');
                    $Class  = mysql_result($topPosts, $i, 'Class');
                    $date =  mysql_result($topPosts, $i, 'date');
                    $shdate = convertdate($date);
                    $tclass = "date_content";
                    $ttclass = "text";
                    $catclass = "category";
          
                 
                          echo  "              
     
                   
         
                           <tr>
                            <td class=$tclass>$shdate</td>
                            <td class=$Class>$cell_number</td>
                            <td class=$ttclass>$massage</td>
                        </tr>
                        "
                   ;  
                    }
  
                }                   echo " </table>
                      
                </td>";
                
                
                                echo  '     
                <td><h4>پوشاک</h4>
                  <table class="category">
                        <tr>
                            <td class="date_content">تاریخ</td>
                            <td class="rightel">شماره تماس</td>
                            <td class="text">متن</td>
                        </tr>
               
                    ';
    $topPosts = getTopNPosts(20,8);
                for($i=0; $i < mysql_num_rows($topPosts); $i++)
                {
                    if  ( mysql_result($topPosts, $i, 'status') != 00)
                    {$cell_number = mysql_result($topPosts, $i, 'cell_number');
                    $massage  = mysql_result($topPosts, $i, 'massage');
                    $Class  = mysql_result($topPosts, $i, 'Class');
                    $date =  mysql_result($topPosts, $i, 'date');
                    $shdate = convertdate($date);
                    $tclass = "date_content";
                    $ttclass = "text";
                    $catclass = "category";
          
                 
                          echo  "              
     
                   
         
                           <tr>
                            <td class=$tclass>$shdate</td>
                            <td class=$Class>$cell_number</td>
                            <td class=$ttclass>$massage</td>
                        </tr>
                   "
                   ;  
                     }
                 
                }
                  echo " </table>
                            </tr>
                </td>";   

              echo  '   <tr> <td><h4>وسایل دست دوم</h4>
                  <table class="category">
                        <tr>
                            <td class="date_content">تاریخ</td>
                            <td class="rightel">شماره تماس</td>
                            <td class="text">متن</td>
                        </tr>
               
                    ';
    $topPosts = getTopNPosts(20,9);
                for($i=0; $i < mysql_num_rows($topPosts); $i++)
                {
                    if  ( mysql_result($topPosts, $i, 'status') != 00)
                    {$cell_number = mysql_result($topPosts, $i, 'cell_number');
                    $massage  = mysql_result($topPosts, $i, 'massage');
                    $Class  = mysql_result($topPosts, $i, 'Class');
                    $date =  mysql_result($topPosts, $i, 'date');
                    $shdate = convertdate($date);
                    $tclass = "date_content";
                    $ttclass = "text";
                    $catclass = "category";
          
                 
                          echo  "              
     
                   
         
                           <tr>
                            <td class=$tclass>$shdate</td>
                            <td class=$Class>$cell_number</td>
                            <td class=$ttclass>$massage</td>
                        </tr>
                        "
                   ;  
                    }
  
                }                   echo " </table>
                      
                </td>";
                
                
                                echo  '     
                <td><h4>متفرقه</h4>
                  <table class="category">
                        <tr>
                            <td class="date_content">تاریخ</td>
                            <td class="rightel">شماره تماس</td>
                            <td class="text">متن</td>
                        </tr>
               
                    ';
    $topPosts = getTopNPosts(20,0);
                for($i=0; $i < mysql_num_rows($topPosts); $i++)
                {
                    if  ( mysql_result($topPosts, $i, 'status') == 00)
                    {$cell_number = mysql_result($topPosts, $i, 'cell_number');
                    $massage  = mysql_result($topPosts, $i, 'massage');
                    $Class  = mysql_result($topPosts, $i, 'Class');
                    $date =  mysql_result($topPosts, $i, 'date');
                    $shdate = convertdate($date);
                    $tclass = "date_content";
                    $ttclass = "text";
                    $catclass = "category";
          
                 
                          echo  "              
     
                   
         
                           <tr>
                            <td class=$tclass>$shdate</td>
                            <td class=$Class>$cell_number</td>
                            <td class=$ttclass>$massage</td>
                        </tr>
                   "
                   ;  
                     }
                 
                }
                  echo " </table>
                            </tr>
                </td>";  
echo <<<_END
           

        
          
        </table>
    <div class="footer">
        <div class="menu_footer">
            <ul>
                <li><a href="#">خانه</a></li>
                <li><a href="#">درباره سایت</a></li>
                <li><a href="#">موضوعات</a></li>
                <li><a href="#">راهنمای استفاده از سایت</a></li>
                <li><a href="#">تبلیغات بنری</a></li>
                <li><a href="#">سوالات متداول</a></li>
                <li><a class="noborder" href="#">تماس با ما</a></li>
            </ul>
        <p>تمامی حقوق این سایت برای هادی و محمد محفوظ میباشد و هرگونه کپی برداری طبق قانون کپی رایت 2013 ممنوع بوده.</p>
        <p>کسب و کارتان را رایگان تبلیغ کنید.</p>
        </div>
    </div>
</div>
</body>
</html>
_END;
     
?>
