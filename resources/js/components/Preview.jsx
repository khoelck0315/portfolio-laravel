import React from 'react';
import ReactHtmlParser from 'react-html-parser';

function Preview({ renderedPreview }) {
    return (
        <div className="col-xl-6 pane mb-3">
            <div className="card h-100">
                <div className="card-header">Preview</div>
                <div className="card-body">
                    {ReactHtmlParser(renderedPreview)}
                </div>
            </div>
        </div>
    );
}

export default Preview;
