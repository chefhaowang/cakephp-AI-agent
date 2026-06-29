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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <?= $this->Html->css(['fonts', 'app']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
</head>
<body>
    <div class="app-shell">
        <header class="app-header">
            <div class="app-header__inner">
                <a class="app-brand" href="<?= $this->Url->build('/') ?>">
                    <span class="app-brand__mark" aria-hidden="true">AI</span>
                    <span><?= h($appName) ?></span>
                </a>
                <nav class="app-nav" aria-label="Main">
                    <a href="#start">Start here</a>
                    <a href="#features">Tools</a>
                    <a href="#help">Help</a>
                </nav>
            </div>
        </header>

        <main class="app-main">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </main>

        <footer class="app-footer">
            <div class="app-footer__inner">
                <span>Built with CakePHP <?= h(\Cake\Core\Configure::version()) ?></span>
                <span>AI workspace for focused assistance</span>
            </div>
        </footer>
    </div>
    <?= $this->fetch('script') ?>
</body>
</html>
