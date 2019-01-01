<?php
  function counter()
  {
     connectToDB();
      $query =  mysql_query( "SELECT * FROM massage ORDER BY ID DESC limit 0,1"); 
      $tedad = mysql_result($query,0,'ID');
      return $tedad;
  }
  
  
  function check_massage($matn)
  { 
        if (strpos($matn,"کس ننت")) return '13' ;
        if (strpos($matn,"پدرسگ"))  return '13' ;
        if (strpos($matn,"کسکش")) return '13' ;
        if (strpos($matn," کیری"))  return '13' ;
        if (strpos($matn," کیر "))  return '13' ;
        if (strpos($matn," عمتو "))return '13' ;
        if (strpos($matn," تخم سگ "))  return '13' ;
        if (strpos($matn," کونی "))  return '13' ;
        if (strpos($matn,"جنده")) return '13' ;
        if (strpos($matn,"فحبه"))  return '13' ;
        if (strpos($matn,"قهبه"))  return '13' ;
        if (strpos($matn,"جاکش"))  return '13' ;
        if (strpos($matn,"دیوث"))  return '13' ;
        if (strpos($matn,"گایید"))  return '13' ;
        if (strpos($matn,"گایدم"))  return '13' ;
        if (strpos($matn,"گایدی"))  return '13' ;
        if (strpos($matn,"گوربابا"))  return '13' ;
        if (strpos($matn,"پتیاره"))  return '13' ;
        if (strpos($matn,"احمدی نژاد"))  return '13' ;
        if (strpos($matn,"خامنه ای"))  return '13' ;
        if (strpos($matn,"حروم زاده")) return '13' ;
        if (strpos($matn,"حرام زاده"))  return '13' ;
        if (strpos($matn,"حرومزاده"))  return '13' ;
        if (strpos($matn,"حرامزاده"))  return '13' ;
        if (strpos($matn,"سکس")) return '13' ;
        if (strpos($matn,"sex"))  return '13' ;
        if (strpos($matn,"ass"))  return '13' ;
        if (strpos($matn,"butt ")) return '13' ;
        if (strpos($matn,"fuck"))  return '13' ;
        if (strpos($matn,"suck")) return '13' ;
        if (strpos($matn,"mother fucker")) return '13' ;
        if (strpos($matn,"bitch"))  return '13' ;
        if (strpos($matn,"خارکسه"))  return '13' ;
        if (strpos($matn,"خار کسه"))  return '13' ;
        if (strpos($matn," خواهر کس ده")) return '13' ;
        if (strpos($matn,"خواهر کسده")) return '13' ;
        if (strpos($matn,"خواهرکس ده")) return '13' ;
        if (strpos($matn,"خواهرکسده")) return '13' ;
        if (strpos($matn,"خوار کس ده")) return '13' ;
        if (strpos($matn,"خوار کسده")) return '13' ;
        if (strpos($matn,"خوارکس ده")) return '13' ;
        if (strpos($matn,"خوارکسده")) return '13' ;
        if (strpos($matn,"خار کس ده")) return '13' ;
        if (strpos($matn,"خار کسده")) return '13' ;
        if (strpos($matn,"خارکس ده")) return '13' ;
        if (strpos($matn,"خارکسده")) return '13' ;
        if (strpos($matn,"چوچول")) return '13' ;
        if (strpos($matn,"تخمات")) return '13' ;
        if (strpos($matn,"تخمام")) return '13' ;
        if (strpos($matn,"جندس")) return '13' ;
        if (strpos($matn,"جندست")) return '13' ;
        if (strpos($matn," فاک ")) return '13' ;
        if (strpos($matn,"ننتو")) return '13' ;
        if (strpos($matn," مادرتو ")) return '13' ;
        if (strpos($matn," خواهرتو ")) return '13' ;
        if (strpos($matn," ریدم ")) return '13' ;
        if (strpos($matn," رید ")) return '13' ;
        if (strpos($matn," رید ")) return '13' ;
        if (strpos($matn,"شاشید")) return '13' ;
        if (strpos($matn,"شاشیدم")) return '13' ;
        if (strpos($matn,"شاشیدی")) return '13' ;
        if (strpos($matn," شاش ")) return '13' ;
        if (strpos($matn," گوه ")) return '13' ;
        if (strpos($matn," کس لیس ")) return '13' ;
        if (strpos($matn,"کسلیس")) return '13' ;
        if (strpos($matn,"کسخل")) return '13' ;
        if (strpos($matn,"کس خل")) return '13' ;
        if (strpos($matn,"کس گیج")) return '13' ;
        if (strpos($matn,"کسگیج")) return '13' ;
        if (strpos($matn," کس چرخ")) return '13' ;
        if (strpos($matn,"کسچرخ")) return '13' ;
        if (strpos($matn,"kiram")) return '13' ;
        if (strpos($matn,"tokhmi")) return '13' ;
        if (strpos($matn,"saresho")) return '13' ;
        if (strpos($matn,"kooni")) return '13' ;
        if (strpos($matn,"koskesh")) return '13' ;
        if (strpos($matn,"kirir")) return '13' ;
        if (strpos($matn,"nanato")) return '13' ;
        if (strpos($matn,"gaeedam")) return '13' ;
        if (strpos($matn,"gaiedam")) return '13' ;
        if (strpos($matn,"gayedam")) return '13' ;
        if (strpos($matn,"gaydam")) return '13' ;
        if (strpos($matn,"jende")) return '13' ;
          ;
        
        
  }

function getTopNPosts($count,$halat)
  {
      connectToDB();
      return mysql_query("SELECT * FROM massage WHERE status = $halat ORDER BY ID DESC limit 0,$count"); 
  }
        
   function connectToDB()
  {
     $con = mysql_connect('localhost', 'root', '') ;
     mysql_select_db('sms');
     mysql_query("SET NAMES UTF8");

     if (! $con)
   echo 'The Database is temporary unavalable : ' .mysql_error()."<br/>";
  }
 
  function insert ($number , $massage  )
  {
      connectToDB();
      $ID10 =   mysql_query("SELECT MAX('ID') FROM massage");
      $Num = mysql_query("SELECT * FROM massage WHERE cell_number = '$number' AND massage = '$massage' AND ID > '$ID10' " );
      if (!(mysql_num_rows($Num)>0 ))
      { 
      $operator = substr ($number , 0 , 3);
      $Class = "other";
      switch ($operator)  {
    case "910" : $Class = "hamrah"; break ;
    case "911" : $Class = "hamrah"; break ;
    case "912" : $Class = "hamrah"; break ;
    case "913" : $Class = "hamrah"; break ;
    case "914" : $Class = "hamrah"; break ;
    case "915" : $Class = "hamrah"; break ;
    case "916" : $Class = "hamrah"; break ;
    case "917" : $Class = "hamrah"; break ;
    case "918" : $Class = "hamrah"; break ;
    case "919" : $Class = "hamrah"; break ;
    case "930" : $Class = "irancell";  break ;
    case "935" : $Class = "irancell";  break ;
    case "936" : $Class = "irancell";  break ;
    case "937" : $Class = "irancell";  break ;
    case "938" : $Class = "irancell";  break ;
    case "939" : $Class = "irancell";  break ;
    case "932" : $Class = "talia";    break ;
    case "921" : $Class = "rightel";  break ;
      }
      
      
      $SSTATE = str_split($massage, 1);
      ECHO $SSTATE;
      $status = "0"  ;
      switch ( $SSTATE)
      {
          case "1" :  $status = "1" ; break ;
           case "2" :  $status = "2" ; break ;
            case "3" :  $status = "3" ; break ;
             case "4" :  $status = "4" ; break ;
              case "5" :  $status = "5" ; break ;
               case "6" :  $status = "6" ; break ;
                case "7" :  $status = "7"; break ;
                 case "8" :  $status = "8" ; break ;
                  case "9" :  $status = "9" ; break ;
                
                    
                    
      }
      echo

substr ($massage , 0 , 1);
       $status =check_massage($massage);
      $date = date("Ymdhis",time()) ;
     $query = "INSERT INTO `massage`(`ID`, `cell_number`, `massage`, `status`, `detail`, `Class`, `date`)
                             VALUES ('','$number','$massage','$status','','$Class','$date')" ;
    
    $S = mysql_query($query) ;
    if(! $S)                                   
       echo ' خطا در هنگام بروز کردن دیتابیس : '.mysql_error();

    
      }
  }
  
  function convertdate ($tarikh)
  { 
      $my = substr ($tarikh , 0 , 4);
      $mm = substr ($tarikh , 4,2);
      $md = substr ($tarikh , 6,2);
      $h = substr ($tarikh , 8,2);
      $m = substr ($tarikh , 10,2);
      $s = substr ($tarikh , 12,2);
                        
      $tt = gregorian_to_jalali( $my , $mm , $md ,'/' );
      return $tt ;
  }

  
  function gregorian_to_jalali($g_y,$g_m,$g_d,$mod=''){
 // $g_y=tr_num($g_y); $g_m=tr_num($g_m); $g_d=tr_num($g_d);/* <= :اين سطر ، جزء تابع اصلي نيست */
 $doy_g=0;
 $d_4=$g_y%4;
 $g_a=array(0,0,31,59,90,120,151,181,212,243,273,304,334);
  $doy_g=$g_a[(int)$g_m]+$g_d;
 if($d_4==0 and $g_m>2)$doy_g++;
 $d_33=(int)((($g_y-16)%132)*.0305);
 $a=($d_33==3 or $d_33<($d_4-1) or $d_4==0)?286:287;
 $b=(($d_33==1 or $d_33==2) and ($d_33==$d_4 or $d_4==1))?78:(($d_33==3 and $d_4==0)?80:79);
 if((int)(($g_y-10)/63)==30){$a--;$b++;}
 if($doy_g>$b){
  $jy=$g_y-621; $doy_j=$doy_g-$b;
 }else{
  $jy=$g_y-622; $doy_j=$doy_g+$a;
 }
 if($doy_j<187){
  $jm=(int)(($doy_j-1)/31); $jd=$doy_j-(31*$jm++);
 }else{
  $jm=(int)(($doy_j-187)/30); $jd=$doy_j-186-($jm*30); $jm+=7;
 }
 return($mod=='')?array($jy,$jm,$jd):$jy.$mod.$jm.$mod.$jd;
}
?>
