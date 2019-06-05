<!-- //  次の「Kidクラス」を作ってください。

// プロパティ：名前($name)、性別($sex)
// メソッド：showName()
// 男なら「○○くん」、女なら「○○ちゃん」を返す処理を行う
// 名前プロパティの初期値は「Seed」、性別プロパティの初期値は「boy」にすること
// プロパティのゲッター・セッターメソッドを用意し、メソッド経由でプロパティにアクセスできるようにすること
// オブジェクトからプロパティ値を設定し、showNameメソッドを呼び出して出力すること
 -->
<?php 

$kid = new Kid();
$kid->setName('kazuya');
$kid->setSex('boy');

echo $kid->showName();

class Kid{
  private $name;
  private $sex;

  // コンストラクタ
  function __construct(){
    // 初期値の設定
    $this->name = 'Seed';
    $this->sex = 'boy';
  }

  public function getName(){
    return $this->name;
  }

  public function setName($namae){
    $this->name = $namae;
  }

  public function getSex(){
    return $this->sex;
  }

  public function setSex($seibetsu){
     $this->sex = $seibetsu;
   }

  // 性別によって名前の語尾を判定するメソッド
  public function showName(){
    if ($this->sex == 'boy') {
      return $this->name . 'くん';
    } else if($this->sex == 'girl') {
      return $this->name . 'ちゃん';
    } else {
      return $this->name .'様';
    }
  }
}
