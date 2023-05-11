import {Editor} from '@tiptap/core';
import StarterKit from '@tiptap/starter-kit';
import Alpine from 'alpinejs';

document.addEventListener('alpine:init', () => {
    Alpine.data('setupEditor', (content) => {
        let editor;
        return {
            editor: null,
            content: content,
            updatedAt: Date.now(),
            isActive(type, opts = {}) {
                return editor.isActive(type, opts);
            },
            setParagraph() {
                editor.chain().focus().setParagraph().run();
            },
            toggleBold() {
                editor.chain().toggleBold().focus().run();
            },
            toggleItalic() {
                editor.chain().focus().toggleItalic().run();
            },
            init(element) {
                editor = new Editor({
                    element: element,
                    content: this.content,
                    extensions: [
                        StarterKit,
                    ],
                    editorProps: {
                        attributes: {
                            class: 'focus:outline-none',
                        },
                    },
                    onUpdate: ({editor}) => {
                        this.content = editor.getHTML()
                    },
                    onTransaction: () => {
                        this.updatedAt = Date.now()
                    },
                    onSelectionUpdate: ({ editor}) => {
                        this.updatedAt = Date.now()
                    },
                });
            },
        };
    });
});
