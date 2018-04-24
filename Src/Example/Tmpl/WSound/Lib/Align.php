<?
 function Align_Calc(&$List, &$Lens)
 {
   ForEach($List as $Item)
     ForEach($Lens as $Field_Name=>$Len)
     {
       $l=StrLen($Item[$Field_Name]);
       if($Len<$l)
         $Lens[$Field_Name]=$l;
     }
 }
 
 function Align_Do(&$List, &$Lens)
 {
   $Space=str_repeat(' ', 256);
   ForEach($List as $k=>$tmp)
   {
     $Item=&$List[$k];
     ForEach($Lens as $Field_Name=>$Len)
     {
       $Value=&$Item[$Field_Name];
       $l=StrLen($Value);
       if($Len>$l)
         $Value=$Value.SubStr($Space, 0, $Len-$l);
     //echo $Value, "!\n";
       UnSet($Value);
     }
     UnSet($Item);
   }
 }
 
?>