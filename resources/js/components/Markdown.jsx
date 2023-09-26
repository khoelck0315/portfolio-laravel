import React from 'react';
import ReactDOM from 'react-dom/client';
import { useState, useEffect } from 'react';
import { marked } from 'marked';

import Editor from './Editor';
import Preview from './Preview';
import Reference from './Reference';
import UpdateMode from './UpdateMode';

import reactLogoLarge from '../public/react-logo-large.png';

function Markdown() {
    const [preview, updatePreview] = useState('');
    const [updateMode, setUpdateMode] = useState('live')

    useEffect(() => {
        manualUpdate();
    }, [updateMode]);

    function handleTyping(e) {
        if (updateMode == 'live') {
            let input = e.target.value;
            let html = marked.parse(input)
            updatePreview(html);
        }
    }

    function manualUpdate() {
        let input = document.getElementById('editorInput');
        let html = marked.parse(input.value);
        updatePreview(html);
    }

    return (
        <div className="container">
            <div className="row mt-4">
                <div className="col-md-6 d-flex align-items-center">
                    <a className="link-underline-opacity-0 link-dark" data-bs-toggle="offcanvas" href="#reference" role="button" aria-controls="reference">
                        <i className="fa-solid fa-book" style={{ color: '#000000' }}></i>
                        <span className="ms-2 h5">Markdown Quick Reference</span>
                    </a>
                </div>
                <UpdateMode mode={updateMode} onModeChange={setUpdateMode} onManualUpdate={manualUpdate} />
            </div>
            <div className="row mt-3 mb-3">
                <Editor onEdit={handleTyping} />
                <Preview renderedPreview={preview} />
                <Reference />
            </div>
            <div className="row mb-3 justify-content-center">
                <div className="col-lg-4">
                    <div className="d-flex flex-row align-items-center justify-content-center bg-info-subtle p-2">
                        <h5 className="fa-2x me-2 text-body-tertiary">Powered By</h5>
                        <img src={reactLogoLarge} alt="React Logo" style={{ height: '96px', width: '96px' }} />
                    </div>
                </div>
            </div>

        </div>
    );
}

export default Markdown;

if (document.getElementById('markdownapp-root')) {
    const Index = ReactDOM.createRoot(document.getElementById("markdownapp-root"));

    Index.render(
        <React.StrictMode>
            <Markdown />
        </React.StrictMode>
    )
}
