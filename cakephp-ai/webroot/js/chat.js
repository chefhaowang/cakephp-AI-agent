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

        appendMessage(
            messages,
            'Assistant',
            'I have your message. Connect this chat box to an AI endpoint to generate a live response.',
            'assistant'
        );
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

    const labelElement = document.createElement('span');
    labelElement.className = 'chat-message__label';
    labelElement.textContent = label;

    const body = document.createElement('p');
    body.textContent = text;

    message.append(labelElement, body);
    messages.append(message);
    messages.scrollTop = messages.scrollHeight;
}
