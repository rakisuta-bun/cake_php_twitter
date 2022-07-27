<?php
/**
 * @var \Cake\ORM\ResultSet $tweets
 * @var \App\View\AppView $this
 */
?>

ここはダッシュボードです
<div class="table-responsive">
    <div class="row">
        <?= $this->Form->create(); ?>
        <div class="col-md-4">
            <div class="my-3">
                <textarea name="body" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button class="btn btn-primary mb-3" type="submit">送信</button>
        </div>
        <?php $this->Form->end(); ?>
    </div>
    <?php // $tweets = array_reverse($tweets->toArray()); ?>
    <?php foreach ($tweets as $tweet): ?>
        <div class="card my-3">
            <div class="card-title pt-2 ">
                <p class="card-title">
                <h5><?= h($tweet->user->nickname) ?></h5>
                <?= h($tweet->created) ?>
                <br>
                <?= h($tweet->body) ?>
                </p>
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

    <div class="row">
        <div class="col-12">
            <table>
                <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('body') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($tweets as $tweet): ?>
                    <tr>
                        <td><?= $this->Number->format($tweet->id) ?>
                            <?= $tweet->hoge() ?>
                        </td>
                        <td><?= $tweet->has('user') ? $this->Html->link($tweet->user->id, ['controller' => 'Users', 'action' => 'view', $tweet->user->id]) : '' ?></td>
                        <td><?= h($tweet->body) ?></td>
                        <td><?= h($tweet->created) ?></td>
                        <td><?= h($tweet->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $tweet->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tweet->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tweet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tweet->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
