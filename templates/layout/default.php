<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <!--     Bootstrap の CSS-->
    <?= $this->Html->css('bootstrap.min.css') ?>
    <!--     jQuery-->
    <?= $this->Html->script('jquery-3.3.1.min.js') ?>
    <!--     Bootstrap の JS-->
    <?= $this->Html->script('bootstrap.min.js') ?>
    <?= $this->Html->script('default.css') ?>

</head>
<body class="bg-secondary">
<div class="container">
    <div class="row">
        <div class="col-12">
            <!--            <nav class="top-nav">-->
            <div class="top-nav-title">
                <a href="<?= $this->Url->build('/') ?>"><span>Cake</span>PHP</a>
                <a target="_blank" rel="noopener" href="https://book.cakephp.org/4/">Documentation</a>
                <a target="_blank" rel="noopener" href="https://api.cakephp.org/">API</a>
            </div>
            <!--                <div class="top-nav-links">-->
            <?php if ($this->Identity->isLoggedIn()): ?>
                ようこそ<?= $this->Identity->get('nickname') ?>さん！
            <?php else: ?>
                ようこそゲストさん！
            <?php endif; ?>

            <a href="/users/logout/">ログアウト</a>
            <!--                </div>-->
            <!--            </nav>-->
            <main class="main">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
            </main>
        </div>
        <footer>
        </footer>
    </div>
</div>
</body>
</html>
