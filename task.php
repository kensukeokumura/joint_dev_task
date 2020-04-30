# 課題の回答は このファイル をご利用下さい。
# 回答の出力を確認される際は，「php task.php」をターミナルから実行して下さい。

print("#####q1#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

  # 以下に回答を記載

<?php

$names = ["田中", "佐藤", "佐々木", "高橋"];
array_push($names,"齊藤");
print_r($names);

?>

echo PHP_EOL;

print("#####q2#####".PHP_EOL);
$array1 = ["dog", "cat", "fish"];
$array2 = ["bird", "bat", "tiger"];

  # 以下に回答を記載

<?php

$array1 = ["dog", "cat", "fish"];
$array2 = ["bird", "bat", "tiger"];

$arrayMerge = array_merge($array1,$array2);
print_r($arrayMerge);

?>

echo PHP_EOL;

print("#####q3#####".PHP_EOL);
$numbers = [1, 5, 8, 10, 2, 3, 2, 3, 3, 1, 4, 5, 9];

  # 以下に回答を記載

<?php

$numbers = [1, 5, 8, 10, 2, 3, 2, 3, 3, 1, 4, 5, 9];

$numberTarget=3;
$count=0;

  foreach($numbers as $value){
    if($value===$numberTarget){
      $count++;
    }
  }

print $numberTarget.'は$numbersの配列に'.$count."個あります";

?>

echo PHP_EOL;

print("#####q4#####".PHP_EOL);
$sports = ["サッカー", "フットサル", null, "野球", "バスケ", null, "バレー"];

  # 以下に回答を記載

<?php

$sports = ["サッカー", "フットサル", null, "野球", "バスケ", null, "バレー"];

print_r(array_diff($sports,[null]));

?>

echo PHP_EOL;

print("#####q5#####".PHP_EOL);
$array1 = [];
$array2 = [1, 5, 8, 10];

  # 以下に回答を記載

<?php

$array1 = [];
$array2 = [1, 5, 8, 10];


if(empty($array1)){
  print "true";
} else {
  print "false";
}


if(empty($array2)){
  print "true";
} else {
  print "false";
}

?>

echo PHP_EOL;

print("#####q6#####".PHP_EOL);
$numbers1 = [1, 2, 3, 4, 5];

  # 以下に回答を記載

<?php

$numbers1 = [1, 2, 3, 4, 5];

foreach($numbers1 as $value){
  $result=$value*10;
  $numbers2[]=$result;
}

print_r($numbers2);

?>

echo PHP_EOL;

print("#####q7#####".PHP_EOL);
$array = ["1", "2", "3", "4", "5"];

  # 以下に回答を記載

<?php

$array = ["1", "2", "3", "4", "5"];

$result = array_map("intval", $array);

// 確認用
var_dump ($result);

// 結果
print_r($result);

echo PHP_EOL;

?>

print("#####q8#####".PHP_EOL);
$programming_languages = ["php","ruby","python","javascript"];

  # 以下に回答を記載

<?php

$programming_languages = ["php","ruby","python","javascript"];

# コードを追加
// 頭文字大文字
$programming_languages=array_flip(array_map('ucfirst', $programming_languages));
$programming_languages=array_flip($programming_languages);

// 全部大文字
$upper_case_programming_languages=array_flip(array_map('strtoupper', $programming_languages));
$upper_case_programming_languages=array_flip($upper_case_programming_languages);


  # 以下は変更しないで下さい
print_r($programming_languages);
echo PHP_EOL;
print_r($upper_case_programming_languages);

echo PHP_EOL;

?>

print("#####q9#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

  # 以下に回答を記載

<?php

$names = ["田中", "佐藤", "佐々木", "高橋"];

$id = ["会員No.1","会員No.2","会員No.3","会員No.4"];

$result = [];
foreach($names as $key => $name){
    $id = $key + 1;
    $id_name = "会員No.".$id." ".$name;
    array_push($result,$id_name);
}
print_r($result);



echo PHP_EOL;

?>

print("#####q10#####".PHP_EOL);
$foods = ["いか","たこ","うに","しゃけ","うにぎり","うに軍艦","うに丼"];

  # 以下に回答を記載

<?php

$foods = ["いか","たこ","うに","しゃけ","うにぎり","うに軍艦","うに丼"];

foreach ($foods as $food){

  print $food."は、";
  
  if (preg_match("/うに/", $food)){
    print "好物です。<br>";
  } else {
    print "まぁまぁ好きです。<br>";
  }
}

?>



print("#####q11#####".PHP_EOL);
$sports = ["サッカー", "バスケ", "野球", ["フットサル", "野球"], "水泳", "ハンドボール", ["卓球", "サッカー", "ボルダリング"]];

  # 以下に回答を記載

<?php

$sports = ["サッカー", "バスケ", "野球", ["フットサル", "野球"], "水泳", "ハンドボール", ["卓球", "サッカー", "ボルダリング"]];

  foreach ($sports as $sport){
  if (array_key_exists(1,(array)$sport)){
    foreach ($sport as $multiarraySport){
      $A[]=$multiarraySport;
    }
  } else {
    $A[]=$sport;
  } 
}

$result=array_values(array_unique($A));

print "ユーザーの趣味一覧<br>";
foreach($result as $key => $val){
  print "No".($key+1)." ".$val."<br>";
}


echo PHP_EOL;

?>

print("#####q12#####".PHP_EOL);
$data = [ "user" => [ "name" => "satou", "age" => 33 ] ];

  # 以下に回答を記載

<?php

$data = [ "user" => [ "name" => "satou", "age" => 33 ] ];

print $data["user"]["name"];


echo PHP_EOL;

?>

print("#####q13#####".PHP_EOL);
$user_data = [ "name" => "神里", "age" => 31, "address" => "埼玉"];
$update_data = [ "age" => 32, "address" => "沖縄" ];

  # 以下に回答を記載

<?php

$user_data = [ "name" => "神里", "age" => 31, "address" => "埼玉"];
$update_data = [ "age" => 32, "address" => "沖縄" ];

$user_data = array_replace($user_data,$update_data);

print_r($user_data);

echo PHP_EOL;

?>

print("#####q14#####".PHP_EOL);
$data = [ "name" => "satou", "age" => 33, "address" => "saitama", "hobby" => "soccer", "email" => "hoge@fuga.com" ];

  # 以下に回答を記載

<?php

$data = [ "name" => "satou", "age" => 33, "address" => "saitama", "hobby" => "soccer", "email" => "hoge@fuga.com" ];

foreach ($data as $subscData){
  $result[]=$subscData;
}

print_r ($result);

echo PHP_EOL;

?>

print("#####q15#####".PHP_EOL);
$data1 = [ "name" => "saitou", "hobby" => "soccer", "age" => 33, "role" => "admin" ];
$data2 = [ "name" => "yamada", "hobby" => "baseball", "role" => "normal" ];

  # 以下に回答を記載

<?php

$data1 = [ "name" => "saitou", "hobby" => "soccer", "age" => 33, "role" => "admin" ];

$data2 = [ "name" => "yamada", "hobby" => "baseball", "role" => "normal" ];

$targetKey="age";

if (array_key_exists($targetKey,$data1)){
  print "OK<br>";
} else {
  print "NG<br>";
}

if (array_key_exists($targetKey,$data2)){
  print "ok<br>";
} else {
  print "NG<br>";
}

echo PHP_EOL;

?>

print("#####q16#####".PHP_EOL);
$users = [
  [ "name" => "satou", "age" => 22 ],
  [ "name" => "yamada", "age" => 12 ],
  [ "name" => "takahashi", "age" => 32 ],
  [ "name" => "nakamura", "age" => 41 ]
];

  # 以下に回答を記載

<?php

$users = [
  [ "name" => "satou", "age" => 22 ],
  [ "name" => "yamada", "age" => 12 ],
  [ "name" => "takahashi", "age" => 32 ],
  [ "name" => "nakamura", "age" => 41 ]
];

foreach($users as $info){
  print "私の名前は".$info["name"]."です。年齢は".$info["age"]."歳です。<br>";
}

echo PHP_EOL;

?>

print("#####q17#####".PHP_EOL);
class User
{

  # コードを追加

}

$user1 = new User("神里",32,"男");
$user2 = new User("あじー",32,"男");

$user1->info();
print("-------------".PHP_EOL);
$user2->info();

echo PHP_EOL;

print("#####q18#####".PHP_EOL);

  # コードを追加

$man1 = new Man("あじー",32);
$man2 = new Man("ゆたぼん",10);

$man1->introduce();
$man2->introduce();

echo PHP_EOL;

print("#####q19#####".PHP_EOL);
class Item{
  # 以下を修正して下さい

  protected $name;

  function __construct($book_name){
    $this->name = $book_name;
  }
}
  # 以下は変更しないで下さい

$book = new Item("ゼロ秒思考");
print($book->name.PHP_EOL);

echo PHP_EOL;

print("#####q20#####".PHP_EOL);
class Human
{

  # コードを追加

}

class Zoo
{
    
  # コードを追加
    
}

$zoo = new Zoo("旭山動物園",[ "infant" => 0, "children" => 400, "adult" => 800, "senior" => 500]);

$human1 = new Human("たま",3);
$human2 = new Human("ゆたぼん",10);
$human3 = new Human("あじー",32);
$human4 = new Human("ぎん",108);

$humans = [ $human1, $human2, $human3, $human4 ];

foreach($humans as $human){
  $zoo->info_entry_fee($human);
}

echo PHP_EOL;
