/**
 * Client-side chat box behavior.
 *
 * This script documents the current generated UI contract:
 * - data-chat-form marks the form that submits a local chat message.
 * - data-chat-input marks the textarea that contains the user's message.
 * - data-chat-messages marks the transcript where messages are appended.
 *
 * The assistant response is intentionally local placeholder text until a
 * server-side AI endpoint is added.
 */
document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('[data-chat-form]');
    const input = document.querySelector('[data-chat-input]');
    const messages = document.querySelector('[data-chat-messages]');

    if (!form || !input || !messages) {
        return;
    }

    initScrollReveal();

    form.addEventListener('submit', (event) => {
        event.preventDefault();

        const text = input.value.trim();

        if (text === '') {
            input.focus();
            return;
        }

        appendMessage(messages, 'You', text, 'user');
        input.value = '';
        input.focus();

        const typingIndicator = showTypingIndicator(messages);

        window.setTimeout(() => {
            typingIndicator.remove();
            appendMessage(
                messages,
                'System',
                'Prompt payload received by the local UI stub. Connect a server-side AI endpoint to replace this simulated response.',
                'assistant'
            );
        }, 900);
    });
});

/**
 * Adds one message to the transcript and keeps the latest message visible.
 *
 * @param {Element} messages Transcript element that receives new messages.
 * @param {string} label Visible speaker label.
 * @param {string} text Message body copied into textContent for safety.
 * @param {'assistant'|'user'} sender Controls message alignment and color.
 * @returns {void}
 */
function appendMessage(messages, label, text, sender) {
    const message = document.createElement('article');
    message.className = `chat-message chat-message--${sender}`;

    const avatar = document.createElement('span');
    avatar.className = 'chat-message__avatar';
    avatar.setAttribute('aria-hidden', 'true');
    avatar.textContent = sender === 'user' ? 'You' : 'AI';

    const bubble = document.createElement('div');
    bubble.className = 'chat-message__bubble';

    const labelElement = document.createElement('span');
    labelElement.className = 'chat-message__label';
    labelElement.textContent = label;

    const body = document.createElement('p');
    body.textContent = text;

    bubble.append(labelElement, body);
    message.append(avatar, bubble);
    messages.append(message);
    messages.scrollTop = messages.scrollHeight;
}

/**
 * Shows a typing indicator while waiting for the assistant response.
 *
 * @param {Element} messages Transcript element that receives the indicator.
 * @returns {Element} The typing indicator element for later removal.
 */
function showTypingIndicator(messages) {
    const message = document.createElement('article');
    message.className = 'chat-message chat-message--assistant chat-message--typing';

    const avatar = document.createElement('span');
    avatar.className = 'chat-message__avatar';
    avatar.setAttribute('aria-hidden', 'true');
    avatar.textContent = 'AI';

    const bubble = document.createElement('div');
    bubble.className = 'chat-message__bubble';
    bubble.setAttribute('aria-label', 'Assistant is typing');

    for (let i = 0; i < 3; i += 1) {
        const dot = document.createElement('span');
        dot.className = 'typing-dot';
        bubble.append(dot);
    }

    message.append(avatar, bubble);
    messages.append(message);
    messages.scrollTop = messages.scrollHeight;

    return message;
}

/**
 * Fades sections into view as they enter the viewport.
 *
 * @returns {void}
 */
function initScrollReveal() {
    const elements = document.querySelectorAll('.reveal');

    if (elements.length === 0) {
        return;
    }

    if (!('IntersectionObserver' in window)) {
        elements.forEach((element) => element.classList.add('is-visible'));
        return;
    }

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.12, rootMargin: '0px 0px -40px 0px' }
    );

    elements.forEach((element) => observer.observe(element));
}
