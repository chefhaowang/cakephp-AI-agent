<?php
/**
 * @var \App\View\AppView $this
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->fetch('title') ?: 'Error' ?> · CakePHP AI Agent</title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['fonts', 'app']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <div class="error-page">
        <div class="error-card">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
            <a class="btn btn--ghost" href="javascript:history.back()"><?= __('Back') ?></a>
        </div>
    </div>
</body>
</html>
