<?php
    # Write your PHP code from here

    
$input="+56"; //trim(STDIN));
//$st=new SqlStack();
$st = new SplStack();
for($i=strlen($input)-1;$i>=0;$i--)
{
   $item=$input[$i];
   if(isNumber($item)){
        $st->push($item);

   }else{
    $first=$st->pop($item);
     $second=$st->pop($item);
    $res=calculate($first,$second,$item);
    $st->push($res);
   }


}

print $st->top();

function isNumber($item){
    return $item >= "0"  && $item  <= "9";
}

function calculate($first,$second,$op){


          switch ($op) {
                case '+':
                    return  $first + $second;
                    break;
                case '-':
                    return  $first - $second;
                    break;
                case '*':
                    return  $first * $second;
                    break;
                case '/':
                    return  $first / $second;
                    break;
                case '^':
                    return  pow($first, $second);
                    break;
                 
          }
}
      
?>