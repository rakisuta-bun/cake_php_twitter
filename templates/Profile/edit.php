<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $user
 */
?>
<?= $this->Form->create(null, ['type' => 'file']); ?>
<input type="file" name="file">
<button type="submit">
    アップロード
</button>
<!--                            ここに仕込んだusersテーブルのavatarを表示すればよいのでは？-->
<?= $this->Form->end(); ?>
<?php //echo $user->avatar ?>
<img src="/img/upload/<?php echo $user->avatar ?>">
<!-- jpg画像の場合 -->
