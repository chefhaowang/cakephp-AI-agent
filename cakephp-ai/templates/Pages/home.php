<?php
/**
 * @var \App\View\AppView $this
 */

$this->assign('title', 'AI Workspace');
$this->Html->script('chat', ['block' => true]);
?>

<section class="hero">
    <div class="hero__content">
        <p class="hero__eyebrow">AI workspace</p>
        <h1>Get from question to usable output faster.</h1>
        <p class="hero__lead">
            Ask questions, prepare drafts, and turn rough input into structured work
            from one focused interface.
        </p>
        <div class="hero__actions">
            <a class="btn btn--primary" href="#chat-box">Start a conversation</a>
            <a class="btn btn--ghost" href="#features">View capabilities</a>
        </div>
    </div>

    <aside id="start" class="quick-start" aria-label="Quick start guide">
        <h2>Common workflows</h2>
        <div class="quick-start__steps">
            <a class="quick-start__step" href="#chat-box">
                <span class="quick-start__number">1</span>
                <span>
                    <strong>Clarify a question</strong>
                    Get a direct answer or a set of next steps.
                </span>
            </a>
            <a class="quick-start__step" href="#tasks">
                <span class="quick-start__number">2</span>
                <span>
                    <strong>Prepare work</strong>
                    Draft, summarize, rewrite, or check content.
                </span>
            </a>
            <a class="quick-start__step" href="#help">
                <span class="quick-start__number">3</span>
                <span>
                    <strong>Choose a path</strong>
                    Use guidance when the right request is unclear.
                </span>
            </a>
        </div>
    </aside>
</section>

<?php // Generated chat interface: provides the visible message transcript and input controls. ?>
<section id="chat-box" class="chat-panel" aria-labelledby="chat-heading">
    <div class="chat-panel__header">
        <div>
            <p class="chat-panel__eyebrow">Assistant chat</p>
            <h2 id="chat-heading">Start with a message</h2>
        </div>
        <span class="chat-panel__status" aria-label="Assistant status">Available</span>
    </div>

    <div class="chat-panel__messages" data-chat-messages aria-live="polite" aria-label="Chat messages">
        <article class="chat-message chat-message--assistant">
            <span class="chat-message__label">Assistant</span>
            <p>Ask a question or describe the work you want prepared.</p>
        </article>
    </div>

    <form class="chat-panel__form" data-chat-form>
        <label class="chat-panel__label" for="chat-message">Message</label>
        <textarea
            id="chat-message"
            name="message"
            rows="3"
            data-chat-input
            placeholder="Ask about a topic, paste text to improve, or describe a task"
            required
        ></textarea>
        <button class="btn btn--primary chat-panel__send" type="submit">Send</button>
    </form>
</section>

<section id="features">
    <h2 class="section-heading">Capabilities</h2>
    <p class="section-subtitle">Focused entry points for the most common assistant workflows.</p>

    <div class="feature-grid">
        <a id="chat-tool" class="feature-card" href="#chat-box">
            <div class="feature-card__icon" aria-hidden="true">Q</div>
            <h3>Question answering</h3>
            <p>Get concise answers, explanations, and practical next steps.</p>
            <span class="feature-card__action">Open chat</span>
        </a>
        <a id="tasks" class="feature-card" href="#tasks">
            <div class="feature-card__icon" aria-hidden="true">D</div>
            <h3>Drafting support</h3>
            <p>Create, refine, summarize, or review written material.</p>
            <span class="feature-card__action">Prepare work</span>
        </a>
        <a class="feature-card" href="#help">
            <div class="feature-card__icon" aria-hidden="true">G</div>
            <h3>Guided requests</h3>
            <p>Find the right starting prompt when a task needs more structure.</p>
            <span class="feature-card__action">Get guidance</span>
        </a>
    </div>
</section>

<section id="help" class="help-panel" aria-labelledby="help-heading">
    <h2 id="help-heading">How to get better results</h2>
    <p>Include the outcome you want, any source material, and the tone or format you prefer. For example: “Summarize this in three bullets for a project update.”</p>
    <a class="btn btn--primary" href="#chat-box">Ask the assistant</a>
</section>
