<?php
/**
 * @var \Cake\ORM\ResultSet $tweets
 * @var \App\View\AppView $this
 */
?>
<div class="row justify-content-md-center">
    <div class="col-md-4">
        <div class="table-responsive">
            <h2 class="text-white">Dash Board</h2>
            <?= $this->Form->create(); ?>
            <div class="my-3">
                <textarea name="body" class="form-control bg-dark text-white" id="exampleFormControlTextarea1"
                          rows="3"></textarea>
            </div>
            <button class="btn btn-dark mb-3 ml-3" type="submit">送信</button>
        </div>
        <?php $this->Form->end(); ?>
    </div>
</div>
<?php // $tweets = array_reverse($tweets->toArray()); ?>
<?php foreach ($tweets as $tweet): ?>
    <div class="row justify-content-md-center">
        <div class="col-md-4">
            <div class="card mb-3 bg-dark">
                <div class="card-title pt-2 text-white">
                    <p class="card-title">
                        <img src="/img/pizza.png" width="100px">
                        <?php
                        echo $this->Html->image('pizza.png');
                        ?>
                    <div class="row">
                        <div class="col-3">
                            <img class="mx-3" src="/img/cook.png" width="100px">
                        </div>
                        <div class="col-9">
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

