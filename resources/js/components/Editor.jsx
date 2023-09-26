import React from 'react';

// The idea here would be to place this in a collapsable, so up to the lg breakpoint, this can be easily collapsed to hide the editor and show
// the preview pane.

function Editor({ onEdit }) {

    function toggleHeight(e) {
        let card = document.getElementById('editorCard');
        card.classList.toggle('pane');
        e.target.innerHTML = (e.target.innerHTML == '-') ? '+' : '-';
    }

    return (
        <div className="col-xl-6 mb-3">
            <div id="editorCard" className="card pane">
                <div className="card-header d-flex justify-content-between">
                    <span>Editor</span>
                    <button onClick={toggleHeight} id="editorCollapse" className="d-inline-block d-xl-none ps-3 pe-3 bg-transparent" type="button" title="Click to toggle expanded editor view"
                        data-bs-toggle="collapse" data-bs-target="#editor" aria-expanded="true" aria-controls="editor">-</button>
                </div>
                <div className="card-body collapse show" id="editor">
                    <textarea id="editorInput" className="h-100 w-100 border-0" onKeyUpCapture={onEdit}></textarea>
                </div>
            </div>
        </div>
    )
}

export default Editor;
