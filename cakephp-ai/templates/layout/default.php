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
    <meta name="description" content="Intelligent agents powered by CakePHP">
    <title><?= $this->fetch('title') ? h($this->fetch('title')) . ' · ' . h($appName) : h($appName) ?></title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['fonts', 'app']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
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
                    <a href="#features">Features</a>
                    <a href="https://book.cakephp.org/5/" target="_blank" rel="noopener">Docs</a>
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
                <span>Ready for your next agent workflow</span>
            </div>
        </footer>
    </div>
</body>
</html>
