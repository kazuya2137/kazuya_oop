<?php 

//  次の「Kidクラス」を作ってください。

// プロパティ：名前($name)、性別($sex)
// メソッド：showName()
// 男なら「○○くん」、女なら「○○ちゃん」を返す処理を行う
// 名前プロパティの初期値は「Seed」、性別プロパティの初期値は「boy」にすること
// プロパティのゲッター・セッターメソッドを用意し、メソッド経由でプロパティにアクセスできるようにすること
// オブジェクトからプロパティ値を設定し、showNameメソッドを呼び出して出力すること

$name= new Name();
$sex= new Sex();
class Name{

  $name;

  function __construct(){
    $this->name = 'seed';
    $this->sex = 'boy';
  }
  public function showName()
  return $this->
}
