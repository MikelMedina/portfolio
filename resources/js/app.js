addEventListener('DOMContentLoaded', function() {
    const textarea = document.querySelector('#message');
    const textCount = document.querySelector('#message-count');

    if(!textarea || !textCount) return;

    const textareaMaxLength = textarea.getAttribute('maxLength') ?? 'NaN';
    
    textarea.addEventListener('input', function(e) {
        textCount.textContent = e.target.value.length + "/" + textareaMaxLength
    });
});