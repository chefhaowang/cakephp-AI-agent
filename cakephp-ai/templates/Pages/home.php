<?php
/**
 * @var \App\View\AppView $this
 */

$this->assign('title', 'AI Runtime Console');
$this->Html->script('chat', ['block' => true]);
?>

<section class="hero reveal">
    <div class="hero__content">
        <p class="hero__eyebrow">CakePHP AI Agent / console</p>
        <h1>Operate prompts, context, and outputs from one technical workspace.</h1>
        <p class="hero__lead">
            A structured interface for testing assistant requests, preparing system-ready drafts,
            and documenting the response path before server-side model integration is connected.
        </p>
        <div class="hero__actions">
            <a class="btn btn--primary" href="#chat-box">Open runtime chat</a>
            <a class="btn btn--ghost" href="#features">Inspect modules</a>
        </div>
        <dl class="hero__stats" aria-label="Workspace status">
            <div class="hero__stat">
                <dt class="hero__stat-label">Mode</dt>
                <dd class="hero__stat-value">Local</dd>
            </div>
            <div class="hero__stat">
                <dt class="hero__stat-label">Endpoint</dt>
                <dd class="hero__stat-value">Stub</dd>
            </div>
            <div class="hero__stat">
                <dt class="hero__stat-label">UI build</dt>
                <dd class="hero__stat-value">v0.2</dd>
            </div>
        </dl>
    </div>

    <aside id="start" class="quick-start reveal reveal-delay-1" aria-label="Runtime boot sequence">
        <h2>Boot sequence</h2>
        <div class="quick-start__steps">
            <a class="quick-start__step" href="#chat-box">
                <span class="quick-start__number">01</span>
                <span>
                    <strong>Load prompt</strong>
                    Enter a request, sample task, or context payload.
                </span>
            </a>
            <a class="quick-start__step" href="#tasks">
                <span class="quick-start__number">02</span>
                <span>
                    <strong>Select module</strong>
                    Route work through answer, draft, or request-shaping flows.
                </span>
            </a>
            <a class="quick-start__step" href="#help">
                <span class="quick-start__number">03</span>
                <span>
                    <strong>Define constraints</strong>
                    Add output format, tone, source boundaries, and acceptance criteria.
                </span>
            </a>
            <a class="quick-start__step" href="#help">
                <span class="quick-start__number">04</span>
                <span>
                    <strong>Review response</strong>
                    Validate the generated structure before connecting a live model endpoint.
                </span>
            </a>
        </div>
    </aside>
</section>

<?php // Generated chat interface: provides the visible message transcript and input controls. ?>
<section id="chat-box" class="chat-panel reveal reveal-delay-2" aria-labelledby="chat-heading">
    <div class="chat-panel__header">
        <div>
            <p class="chat-panel__eyebrow">runtime channel</p>
            <h2 id="chat-heading">Prompt console</h2>
        </div>
        <span class="chat-panel__status" aria-label="Assistant status">local stub online</span>
    </div>

    <div class="chat-panel__messages" data-chat-messages aria-live="polite" aria-label="Chat messages">
        <article class="chat-message chat-message--assistant">
            <span class="chat-message__avatar" aria-hidden="true">AI</span>
            <div class="chat-message__bubble">
                <span class="chat-message__label">System</span>
                <p>Console ready. Submit a prompt payload to test the local interaction shell.</p>
            </div>
        </article>
    </div>

    <form class="chat-panel__form" data-chat-form>
        <div class="chat-panel__input-wrap">
            <label class="chat-panel__label" for="chat-message">Message</label>
            <textarea
                id="chat-message"
                name="message"
                rows="3"
                data-chat-input
                placeholder="Example: Draft a deployment checklist for the CakePHP AI endpoint"
                required
            ></textarea>
        </div>
        <button class="btn btn--primary chat-panel__send" type="submit">
            <svg class="btn__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                <line x1="22" y1="2" x2="11" y2="13"/>
                <polygon points="22 2 15 22 11 13 2 9 22 2"/>
            </svg>
            Send
        </button>
    </form>
</section>

<section id="features" class="reveal">
    <h2 class="section-heading">Operational modules</h2>
    <p class="section-subtitle">Focused entry points for validating assistant behavior before production integration.</p>

    <div class="feature-grid">
        <a id="chat-tool" class="feature-card reveal reveal-delay-1" href="#chat-box">
            <div class="feature-card__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="10"/>
                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/>
                    <line x1="12" y1="17" x2="12.01" y2="17"/>
                </svg>
            </div>
            <p class="feature-card__kicker">module.answer</p>
            <h3>Reasoning probe</h3>
            <p>Run direct questions through a controlled interface and inspect the response contract.</p>
            <span class="feature-card__action">
                Open console
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </span>
        </a>
        <a id="tasks" class="feature-card reveal reveal-delay-2" href="#tasks">
            <div class="feature-card__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                    <polyline points="14 2 14 8 20 8"/>
                    <line x1="16" y1="13" x2="8" y2="13"/>
                    <line x1="16" y1="17" x2="8" y2="17"/>
                </svg>
            </div>
            <p class="feature-card__kicker">module.compose</p>
            <h3>Artifact builder</h3>
            <p>Prepare drafts, summaries, reviews, and structured outputs for downstream use.</p>
            <span class="feature-card__action">
                Prepare artifact
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </span>
        </a>
        <a class="feature-card reveal reveal-delay-3" href="#help">
            <div class="feature-card__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                </svg>
            </div>
            <p class="feature-card__kicker">module.spec</p>
            <h3>Prompt spec</h3>
            <p>Shape ambiguous requests into explicit instructions, inputs, and output constraints.</p>
            <span class="feature-card__action">
                Define protocol
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </span>
        </a>
    </div>
</section>

<section id="help" class="help-panel reveal" aria-labelledby="help-heading">
    <p class="chat-panel__eyebrow">request protocol</p>
    <h2 id="help-heading">Compose prompts as executable specifications</h2>
    <p>Include goal, source material, constraints, output schema, and review criteria. Example: "Summarize this incident log as five remediation actions with owner, priority, and evidence."</p>
    <a class="btn btn--primary" href="#chat-box">
        <svg class="btn__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
        </svg>
        Send a prompt
    </a>
</section>
