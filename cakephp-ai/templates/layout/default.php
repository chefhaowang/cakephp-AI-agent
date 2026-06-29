<?php
/**
 * @var \App\View\AppView $this
 */

$appName = 'CakePHP AI Agent';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="AI assistant workspace powered by CakePHP">
    <meta name="theme-color" content="#0f172a">
    <title><?= $this->fetch('title') ? h($this->fetch('title')) . ' · ' . h($appName) : h($appName) ?></title>
    <?= $this->Html->meta('icon') ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500;600;700&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <?= $this->Html->css(['fonts', 'app']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
</head>
<body>
    <div class="app-bg" aria-hidden="true">
        <div class="app-bg__grid"></div>
        <div class="app-bg__scanline"></div>
    </div>

    <div class="app-shell">
        <header class="app-header">
            <div class="app-header__inner">
                <a class="app-brand" href="<?= $this->Url->build('/') ?>">
                    <span class="app-brand__mark" aria-hidden="true">λ</span>
                    <span>
                        <span class="app-brand__name"><?= h($appName) ?></span>
                        <span class="app-brand__meta">runtime console</span>
                    </span>
                </a>
                <nav class="app-nav" aria-label="Main">
                    <a href="#start">Boot</a>
                    <a href="#features">Modules</a>
                    <a href="#help">Protocol</a>
                </nav>
            </div>
        </header>

        <main class="app-main">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </main>

        <footer class="app-footer">
            <div class="app-footer__inner">
                <span>cakephp@<?= h(\Cake\Core\Configure::version()) ?></span>
                <span>local assistant interface / technical preview</span>
            </div>
        </footer>
    </div>
    <?= $this->fetch('script') ?>
</body>
</html>
