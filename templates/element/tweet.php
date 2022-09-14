<?php
/**
 * @var Tweet $tweet
 */

use App\Model\Entity\Tweet;

?>
<div class="card mb-3 bg-dark">
    <div class="card-title pt-2 text-white">
        <p class="card-title">
            <?php foreach ($tweet->tweet_images as $tweetImage): ?>
                <img class="card-img " src="/img/upload/tweet_images/<?= $tweetImage->path ?>">
            <?php endforeach; ?>
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
