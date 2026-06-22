<?php
/**
 * @var \App\View\AppView $this
 */

$this->assign('title', 'Home');
?>

<section class="hero">
    <div class="hero__content">
        <p class="hero__eyebrow">Start here</p>
        <h1>Find the AI tool you need</h1>
        <p class="hero__lead">
            Choose one clear option below. Each tool says what it does in plain words,
            so you do not need to know any technical terms.
        </p>
        <div class="hero__actions">
            <a class="btn btn--primary" href="#features">Show me the tools</a>
            <a class="btn btn--ghost" href="#help">I need help</a>
        </div>
    </div>

    <aside id="start" class="quick-start" aria-label="Quick start guide">
        <h2>What do you want to do?</h2>
        <div class="quick-start__steps">
            <a class="quick-start__step" href="#chat">
                <span class="quick-start__number">1</span>
                <span>
                    <strong>Ask a question</strong>
                    Get a simple answer from the assistant.
                </span>
            </a>
            <a class="quick-start__step" href="#tasks">
                <span class="quick-start__number">2</span>
                <span>
                    <strong>Get a task done</strong>
                    Let the assistant prepare work for you.
                </span>
            </a>
            <a class="quick-start__step" href="#help">
                <span class="quick-start__number">3</span>
                <span>
                    <strong>Get help</strong>
                    See where to go when you are unsure.
                </span>
            </a>
        </div>
    </aside>
</section>

<section id="features">
    <h2 class="section-heading">Choose a tool</h2>
    <p class="section-subtitle">Large buttons and simple names make each feature easier to find.</p>

    <div class="feature-grid">
        <a id="chat" class="feature-card" href="#chat">
            <div class="feature-card__icon" aria-hidden="true">?</div>
            <h3>Ask the assistant</h3>
            <p>Type a question and get a clear answer.</p>
            <span class="feature-card__action">Open this tool</span>
        </a>
        <a id="tasks" class="feature-card" href="#tasks">
            <div class="feature-card__icon" aria-hidden="true">✓</div>
            <h3>Prepare my work</h3>
            <p>Ask the assistant to draft, summarize, or check something.</p>
            <span class="feature-card__action">Open this tool</span>
        </a>
        <a class="feature-card" href="#help">
            <div class="feature-card__icon" aria-hidden="true">i</div>
            <h3>Help and guidance</h3>
            <p>Find simple instructions when you are not sure what to choose.</p>
            <span class="feature-card__action">Open help</span>
        </a>
    </div>
</section>

<section id="help" class="help-panel" aria-labelledby="help-heading">
    <h2 id="help-heading">Need help choosing?</h2>
    <p>If you want an answer, choose <strong>Ask the assistant</strong>. If you want the assistant to make or check something, choose <strong>Prepare my work</strong>.</p>
    <a class="btn btn--primary" href="#features">Back to tools</a>
</section>
