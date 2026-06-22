<?php
/**
 * @var \App\View\AppView $this
 */

$this->assign('title', 'Home');
?>

<section class="hero">
    <div class="hero__content">
        <div class="hero__eyebrow">
            <span class="hero__eyebrow-dot" aria-hidden="true"></span>
            Agent platform
        </div>
        <h1>Build intelligent agents with <span>CakePHP</span></h1>
        <p class="hero__lead">
            A modern starting point for AI-powered applications — chat interfaces,
            tool orchestration, and agent workflows on a solid PHP foundation.
        </p>
        <div class="hero__actions">
            <a class="btn btn--primary" href="#features">Explore features</a>
            <a class="btn btn--ghost" href="https://book.cakephp.org/5/" target="_blank" rel="noopener">CakePHP docs</a>
        </div>
    </div>

    <aside class="chat-preview" aria-label="Agent chat preview">
        <div class="chat-preview__header">
            <div class="chat-preview__title">
                <span class="chat-preview__status" aria-hidden="true"></span>
                Agent session
            </div>
            <div class="chat-preview__dots" aria-hidden="true">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="chat-preview__body">
            <div class="chat-bubble chat-bubble--user">
                Summarize the latest orders and flag anything overdue.
            </div>
            <div class="chat-bubble chat-bubble--agent">
                Found <strong>12 orders</strong> from the last 7 days. Two are overdue —
                I'll draft follow-up emails and queue them for review.
            </div>
            <div class="chat-bubble chat-bubble--agent">
                Running tool: <code>OrdersTable::findOverdue()</code>
            </div>
        </div>
        <div class="chat-preview__input">
            <div class="chat-preview__input-field">Ask your agent anything…</div>
            <button class="chat-preview__send" type="button" aria-label="Send message" disabled>↑</button>
        </div>
    </aside>
</section>

<section id="features">
    <h2 class="section-heading">Everything you need to start</h2>
    <p class="section-subtitle">Extend this scaffold with models, tools, and your preferred LLM provider.</p>

    <div class="feature-grid">
        <article class="feature-card">
            <div class="feature-card__icon" aria-hidden="true">💬</div>
            <h3>Conversational UI</h3>
            <p>Drop in a real chat component and wire it to your agent backend with minimal changes.</p>
        </article>
        <article class="feature-card">
            <div class="feature-card__icon" aria-hidden="true">🔧</div>
            <h3>Tool orchestration</h3>
            <p>Connect CakePHP models, services, and external APIs as agent-callable tools.</p>
        </article>
        <article class="feature-card">
            <div class="feature-card__icon" aria-hidden="true">⚡</div>
            <h3>Production ready</h3>
            <p>Built on CakePHP 5 with routing, middleware, and testing already in place.</p>
        </article>
    </div>
</section>
