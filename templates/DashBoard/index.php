<?php
/**
 * @var \Cake\ORM\ResultSet $tweets
 * @var \Cake\ORM\ResultSet $user
 * @var \App\View\AppView $this
 *
 */
?>
<div class="row justify-content-md-center">
    <div class="col-md-4">
        <?= $this->Form->create(null, ['type' => 'file']); ?>
        <div class="table-responsive">
            <h2 class="text-white">Dash Board</h2>
            <div class="my-3">
                <textarea name="body" class="form-control bg-dark text-white" id="exampleFormControlTextarea1"
                          rows="3"></textarea>
            </div>
            <button class="btn btn-dark mb-3 ml-3" type="submit">送信</button>
        </div>
        <input type="file" name="file">
        <?= $this->Form->end(); ?>
    </div>
</div>
<?php // $tweets = array_reverse($tweets->toArray()); ?>
<?php foreach ($tweets as $tweet): ?>
    <div class="row justify-content-md-center">
        <div class="col-md-4">
            <div class="card mb-3 bg-dark">
                <div class="card-title pt-2 text-white">
                    <p class="card-title">
                        <?= $this->Html->image('pizza.png'); ?>
                    <div class="row">
                        <div class="col-md-4">
                            <img class="img-fluid mx-3" src="/img/upload/avatar/<?= $user->avatar ?>">
                            <!--                            ここに仕込んだusersテーブルのavatarを表示すればよいのでは？-->
                        </div>
                        <div class="col-md-8">
                            <h4 class="mx-3"><?= h($tweet->body) ?></h4>
                            <p class="mx-3"><?= h($tweet->user->nickname) ?></p>
                            <p class="mx-3"><?= h($tweet->created) ?></p>
                        </div>
                    </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!--                    // $array = array([$tweet->body]);-->
<!--                    // h($tweet->body);-->
<!--                    // var_dump($array);-->
<?php
//    $tweet = ($tweet->body);
//    $tweet = array($tweet->body);
//    $tweet = h($tweet->body);
//    $tweet = array_reverse(h($tweet->body));
//    $body_array = array_column(h($tweet->body), 'body');
//    foreach ($tweets as $tweet):
////            rsort(&array())
//        echo array_reverse(h($tweet->body));
//    endforeach;
//    $tweets = array_reverse($tweets->toArray());
?>

