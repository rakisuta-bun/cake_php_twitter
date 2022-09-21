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

?>
<div class="row justify-content-md-center">
    <div class="col-md-4">
        <?php foreach ($tweets as $tweet): ?>
            <?= $this->element('tweet', ["tweet" => $tweet]) ?>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->element('form'); ?>
