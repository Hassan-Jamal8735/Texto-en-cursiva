document.addEventListener('DOMContentLoaded', function () {
    const textInput = document.getElementById('textInput');
    const eraseButton = document.getElementById('eraseButton');
    const boldButton = document.getElementById('boldButton');
    const boldItalicButton = document.getElementById('boldItalicButton');
    const boldButton2 = document.getElementById('boldButton2');
    const italicButton = document.getElementById('italicButton');
    const copyButton = document.getElementById('copyButton');
    const pasteButton = document.getElementById('pasteText');
    const wordCount = document.getElementById('wordCount');
    const frameWrapper2 = document.getElementById('frame-wrapper2');

    let clipboardText = ''; 

    if (textInput && frameWrapper2) {
        textInput.addEventListener('input', function() {
            frameWrapper2.style.visibility = 'hidden';
            textInput.rows = 8; 
        });
    }

    eraseButton.addEventListener('click', function () {
        if (textInput) {
            textInput.value = '';
            clearTextStyles();
        } else {
            alert('No text input found');
        }
    });

    boldButton.addEventListener('click', function () {
        toggleTextStyle('bold');
    });

    boldItalicButton.addEventListener('click', function () {
        toggleTextStyle('boldItalic');
    });

    boldButton2.addEventListener('click', function () {
        toggleTextStyle('bold');
    });

    italicButton.addEventListener('click', function () {
        toggleTextStyle('italic');
    });

    copyButton.addEventListener('click', function () {
        if (textInput) {
            const textToCopy = textInput.value.trim();
            if (textToCopy) {
                navigator.clipboard.writeText(textToCopy)
                    .then(() => {
                        clipboardText = textToCopy; // Store copied text
                        // alert('Copied to clipboard!');
                    })
                    .catch(err => {
                        console.error('Failed to copy: ', err);
                    });
            } else {
                alert('Textarea is empty. Nothing to copy.');
            }
        } else {
            alert('Textarea not found.');
        }
    });

    pasteButton.addEventListener('click', function () {
        if (textInput) {
            // Check if there's text in the clipboard to paste
            if (clipboardText) {
                textInput.value += clipboardText; // Append clipboard text
            }

            // Paste text from clipboard (if any)
            navigator.clipboard.readText()
                .then(clipboardText => {
                    if (clipboardText) {
                        textInput.value += clipboardText; // Append clipboard text
                    }
                })
                .catch(err => {
                    console.error('Failed to paste: ', err);
                });
        } else {
            alert('Textarea not found.');
        }
    });

    // Function to toggle text styles
    function toggleTextStyle(style) {
        clearTextStyles(); // Clear all styles first

        switch (style) {
            case 'bold':
                if (!isTextStyleApplied('bold')) {
                    textInput.style.fontWeight = 'bold'; // Apply bold
                }
                break;
            case 'boldItalic':
                if (!isTextStyleApplied('boldItalic')) {
                    textInput.style.fontWeight = 'bold';
                    textInput.style.fontStyle = 'italic'; // Apply bold and italic
                }
                break;
            case 'italic':
                if (!isTextStyleApplied('italic')) {
                    textInput.style.fontStyle = 'italic'; // Apply italic
                }
                break;
            default:
                break;
        }
    }

    // Function to clear all text styles
    function clearTextStyles() {
        textInput.style.fontWeight = 'normal';
        textInput.style.fontStyle = 'normal';
    }

    // Function to check if a specific text style is applied
    function isTextStyleApplied(style) {
        switch (style) {
            case 'bold':
                return textInput.style.fontWeight === 'bold';
            case 'boldItalic':
                return textInput.style.fontWeight === 'bold' && textInput.style.fontStyle === 'italic';
            case 'italic':
                return textInput.style.fontStyle === 'italic';
            default:
                return false;
        }
    }
});