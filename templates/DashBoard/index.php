<?php
/**
 * @var \Cake\ORM\ResultSet $tweets
 * @var \Cake\ORM\ResultSet $user
 * @var \App\View\AppView $this
 *
 */
//$test = ["hoge", "piyo", "fuga",];
//array_unshift($test, "add");
//$a = array_pop($test);
//dd($a);


class Hoge
{
    public $result = '';

    public function chain($text)
    {

    }

    public function sum($one, $two, $three)
    {
        $answer = $one + $two + $three;
        return $answer;
    }
//文字列2つを引数に取り、その文字を結合した上で、
//最後尾に💕マークのついた文字列を返すメソッドを
//作成せよ　メソッド名はlove

    public function love($odisan, $play)
    {
        $heart = '💕';
        $kimoi = $odisan . $play . $heart;
        return $kimoi;
    }

    public function love2()
    {
        $emoji1 = "🐟";
        return $emoji1;
    }
}

//実行例
//引数1が "おぢさんと"
//引数2が "遊ぼう"の場合、出力は
//"おぢさんと遊ぼう💕"となる

//要件を満たした上で、機能追加の実装をすること

//!を❗に自動置換する
$kimoitext = new Hoge();
$text1 = "おぢさんと";
//$emojis = array('💖', '💦', '🏨', '😁💕', '❗');
//$randemoji = array_rand($emojis);
$fish = "🐟";
$text2 = "遊ぼう";
//$kimoitexts = $kimoitext->love($text1, $emojis[$randemoji], $text2);
$kimoitexts = $kimoitext->love($text1, $text2);
dd($kimoitexts);
//ステップアップ問題　結合する引数1、引数2の間にきもい顔文字を入れよ


//$view = new Hoge();
//$rand0 = rand(0, 10);
//$rand1 = rand(0, 10);
//$rand2 = rand(0, 10);
//$views = $view->sum($rand0, $rand1, $rand2);
//echo $rand0;
//echo '<br>';
//echo $rand1;
//echo '<br>';
//echo $rand2;
//dd($views);

?>
<div class="row justify-content-md-center">
    <div class="col-md-4">
        <?php foreach ($tweets as $tweet): ?>
            <?= $this->element('tweet', ["tweet" => $tweet]) ?>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->element('form'); ?>
