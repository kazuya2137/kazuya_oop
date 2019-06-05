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
$kid->setAge(2);

echo $kid->showName();

class Kid{
  private $name;
  private $sex;
  private $age;

  // コンストラクタ
  function __construct(){
    // 初期値の設定
    $this->name = 'Seed';
    $this->sex = 'boy';
    $this->age = 10;
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

   public function getAge(){
    return $this->age;
   }

   public function setAge($nenrei){
    $this->age = $nenrei;
   }

  // 性別によって名前の語尾を判定するメソッド
  public function showName(){
    $suffix = '';
    if ($this->sex == 'boy') {
      if ($this->age >= 20) {
        $suffix ='どん';
        } else{
          $suffix = 'そん';
        }
    } elseif($this->sex == 'girl') {
      if ($this->age >= 20) {
        $suffix='さん';
      } else {
        $suffix = 'ちゃん';
      }
      
    } else {
      return $this->name .'様';
    }
    return $this->name . $suffix;
  }
}
