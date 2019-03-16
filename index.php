//字符串去重复值   “a,s,c,d,a,a,s,c” 
public function unique($str){
      $arr = explode(',',$str);
      $arr = array_unique($arr);
      $data = implode(',',$arr);
      $data = trim($data,',');
      return $data;
 }
 var_dump(unique('a,s,c,d,a,a,s,c'));// 输出 "a,s,c,d"
