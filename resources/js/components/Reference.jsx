import React from 'react';


function Reference() {
    return (
        <div className="offcanvas offcanvas-start" tabIndex="-1" id="reference" aria-labelledby="referenceLabel">
            <div className="offcanvas-header">
                <h3 className="offcanvas-title" id="offcanvasLabel">Quick Reference</h3>
                <button type="button" className="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div className="offcanvas-body">
                <h5>Basic Syntax</h5>
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>Element</th>
                            <th>Markdown Syntax</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Heading</td>
                            <td><code># H1<br />## H2<br />### H3</code></td>
                        </tr>
                        <tr>
                            <td>Bold</td>
                            <td><code>**bold text**</code></td>
                        </tr>
                        <tr>
                            <td>Italic</td>
                            <td><code>*italicized text*</code></td>
                        </tr>
                        <tr>
                            <td>Blockquote</td>
                            <td><code>&gt; blockquote</code></td>
                        </tr>
                        <tr>
                            <td>Ordered List</td>
                            <td><code>1. First item<br />2. Second item<br />3. Third item<br /></code></td>
                        </tr>
                        <tr>
                            <td>Unordered List</td>
                            <td><code>- First item<br />- Second item<br />- Third item<br /></code></td>
                        </tr>
                        <tr>
                            <td>Code</td>
                            <td><code>`code`</code></td>
                        </tr>
                        <tr>
                            <td>Horizontal Rule</td>
                            <td><code>---</code></td>
                        </tr>
                        <tr>
                            <td>Link</td>
                            <td><code>[title](https://www.example.com)</code></td>
                        </tr>
                        <tr>
                            <td>Image</td>
                            <td><code>![alt text](image.jpg)</code></td>
                        </tr>
                    </tbody>
                </table>
                <h5>Extended Syntax</h5>
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>Element</th>
                            <th>Markdown Syntax</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Table</td>
                            <td><code>| Syntax | Description |<br />| ----------- | ----------- |<br />| Header | Title |<br />| Paragraph | Text |</code></td>
                        </tr>
                        <tr>
                            <td>Fenced Code Block</td>
                            <td><code>```<br />{"{"}<br /> {"\"firstName\": \"John\","}<br />{"\"lastName\": \"Smith\","}<br />{"\"age\": 25"}<br />{"}"}<br />```</code></td>
                        </tr>
                        <tr>
                            <td>Footnote</td>
                            <td><code>Here's a sentence with a footnote. [^1]<br /><br />[^1]: This is the footnote.</code></td>
                        </tr>
                        <tr>
                            <td>Heading ID</td>
                            <td><code>### My Great Heading {"{#custom - id}"}</code></td>
                        </tr>
                        <tr>
                            <td>Definition List</td>
                            <td><code>term<br />: definition</code></td>
                        </tr>
                        <tr>
                            <td>Strikethrough</td>
                            <td><code>~~The world is flat.~~</code></td>
                        </tr>
                        <tr>
                            <td>Task List</td>
                            <td><code>- [x] Write the press release<br />- [ ] Update the website<br />- [ ] Contact the media</code></td>
                        </tr>
                        <tr>
                            <td>Emoji</td>
                            <td><code>That is so funny! :joy:</code></td>
                        </tr>
                        <tr>
                            <td>Highlight</td>
                            <td><code>I need to highlight these ==very important words==.</code></td>
                        </tr>
                        <tr>
                            <td>Subscript</td>
                            <td><code>H~2~O</code></td>
                        </tr>
                        <tr>
                            <td>Superscript</td>
                            <td><code>X^2^</code></td>
                        </tr>
                    </tbody>
                </table>
                <div>
                    Courtsey of <a href="https://www.markdownguide.org/cheat-sheet/" target="_blank">markdownguide.org</a>
                </div>
            </div>
        </div>
    );
}

export default Reference;
