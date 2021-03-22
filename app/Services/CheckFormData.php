<?php

namespace App\Services;

class CheckFormData
{
  public static function checkSize($data){
    if($data->size === 1){$size = 'フラット〜スネ';}
    if($data->size === 2){$size = 'スネ〜ヒザ';}
    if($data->size === 3){$size = 'ヒザ〜モモ';}
    if($data->size === 4){$size = 'モモ〜コシ';}
    if($data->size === 5){$size = 'コシ〜ハラ';}
    if($data->size === 6){$size = 'ハラ〜ムネ';}
    if($data->size === 7){$size = 'ムネ〜カタ';}
    if($data->size === 8){$size = 'カタ〜アタマ';}
    if($data->size === 9){$size = 'アタマ〜アタマ半';}
    if($data->size === 10){$size = 'アタマ半〜ダブル';}

    var_dump($size);
    
    return $size;
  }

  public static function checkW_condition($data){
    if($data->w_condition === 1){$w_condition = '面ツル';}
    if($data->w_condition === 2){$w_condition = 'ザワついている';}
    if($data->w_condition === 3){$w_condition = 'ジャンク';}
    if($data->w_condition === 4){$w_condition = 'クローズアウト';}

    return $w_condition;
  }

  public static function checkNumber($data){
    if($data->number === 1){$number = '少ない';}
    if($data->number === 2){$number = '少な目';}
    if($data->number === 3){$number = '普通';}
    if($data->number === 4){$number = '多め';}
    if($data->number === 5){$number = '多い';}     
    
    return $number;
  }

  public static function checkState($data){
    if($data->state === 1){$state = '切れた波';}
    if($data->state === 2){$state = '速い波';}
    if($data->state === 3){$state = 'つながった波';}
    if($data->state === 4){$state = 'ワイドな波';}
    if($data->state === 5){$state = 'ダンパー';}
    if($data->state === 6){$state = 'トロい波';}
    if($data->state === 7){$state = 'トロ速い波';}
    if($data->state === 8){$state = 'トロダンパー';}
    if($data->state === 9){$state = 'ホレた波';}
    if($data->state === 10){$state = '厚い波';}
    if($data->state === 11){$state = 'トロ厚い波';}
    if($data->state === 12){$state = '厚速い波';}
    if($data->state === 13){$state = '三角波';}
    if($data->state === 14){$state = 'チューブ';}
    if($data->state === 15){$state = 'ショアブレイク';}
    if($data->state === 16){$state = '風波';}
    if($data->state === 17){$state = 'フラット';}

    return $state;
  }

  public static function checkDirection($data){
    if($data->direction === 1){$direction = '北';}
    if($data->direction === 2){$direction = '北東';}
    if($data->direction === 3){$direction = '東';}
    if($data->direction === 4){$direction = '南東';}
    if($data->direction === 5){$direction = '南';}
    if($data->direction === 6){$direction = '南西';}
    if($data->direction === 7){$direction = '西';}
    if($data->direction === 8){$direction = '北西';}

    return $direction;
  }

  public static function checkPeople($data){
    if($data->people === 1){$people = '0人';}
    if($data->people === 2){$people = '1~5人';}
    if($data->people === 3){$people = '5~15人';}
    if($data->people === 4){$people = '16〜30人';}
    if($data->people === 5){$people = '31〜50人';}
    if($data->people === 6){$people = '51人〜';}

    return $people;
  }
}