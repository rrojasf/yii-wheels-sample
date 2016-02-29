

    <div class="wrapper">
        <div class="right-content no-print">

    <div class="box white">
        <a class="button gray update-status" href="#update-status">Change Status</a>
    </div>

    <div class="box white">
                <div class="right">
            <img src="images/demobugify.png" title="Demo User" class="gravatar" height="32" width="32">        </div>
        
        <h1>Issue Details</h1>

        <table>
            <tbody><tr>
                <td class="issue-overview-title">Issue</td>
                <td class="issue-overview-data"><span class="hash">#</span>3</td>
            </tr>
            <tr>
                <td class="issue-overview-title">Priority</td>
                <td class="issue-overview-data">Normal</td>
            </tr>
            <tr>
                <td class="issue-overview-title">Project</td>
                <td class="issue-overview-data">
                                            <a href="http://demo.bugify.com/projects/gonzo" title="Gonzo">Gonzo</a>
                                    </td>
            </tr>
            <tr>
                <td class="issue-overview-title">Category</td>
                <td class="issue-overview-data">None</td>
            </tr>
            <tr>
                <td class="issue-overview-title">Status</td>
                <td class="issue-overview-data">Open</td>
            </tr>

            
            <tr>
                <td class="issue-overview-title">Assigned to</td>
                <td class="issue-overview-data"><a href="http://demo.bugify.com/users/demo/issues">Demo User</a></td>
            </tr>

                    </tbody></table>

        <input id="issueId" value="3" type="hidden">
        <a class="button gray update-button" href="#update-issue">Update Details</a>
    </div>

    <div class="box white">
        
        <a class="button gray manage-labels-button" href="#add-labels">Update Labels</a>
    </div>

    <div class="box white">
                <h1>Attachments</h1>

        <div class="overview-attachments">
            <ul>
                            <li>
                    <a href="http://demo.bugify.com/assets/attachment/3/cb28a5647cf400b86e78838c7cb1fa5e" title="grav2.png" rel="tipsyup">grav2.png</a>
                    <div class="right">
                        1.75 KB                        <a href="#delete-attachment" class="issue-overview-attachment-delete" title="Delete Attachment" rel="tipsyleft" onclick="deleteAttachment('cb28a5647cf400b86e78838c7cb1fa5e'); return false;"></a>
                    </div>
                </li>
                            <li>
                    <a href="http://demo.bugify.com/assets/attachment/3/7a68374a19d196e72a50f9da423b58cf" title="manual-de-convivencia-conjunto-residencial-bariloche-i-etapa.doc" rel="tipsyup">manual-de-conviven...pa.doc</a>
                    <div class="right">
                        111.00 KB                        <a href="#delete-attachment" class="issue-overview-attachment-delete" title="Delete Attachment" rel="tipsyleft" onclick="deleteAttachment('7a68374a19d196e72a50f9da423b58cf'); return false;"></a>
                    </div>
                </li>
                        </ul>
        </div>
        
        <a class="button gray attach-button" href="#upload-attachment">Add Attachments</a>
    </div>

    <div class="box blue issue-overview-meta">
        <div class="right"><img src="images/demobugify.png" title="Demo User" class="gravatar" height="32" width="32"></div>

        <p>
            Added <a class="date" title="2013-12-12T12:00:15+00:00" rel="tipsydown">27 minutes ago</a> by <a href="http://demo.bugify.com/users/demo/issues">Demo User</a>.            Last updated <a title="2013-12-12T12:26:19+00:00" rel="tipsydown">less than a minute ago</a>.
        
        </p>
        <div class="clear"></div>
    </div>

    <div class="box white issue-overview-related-issues-box" style="display: none;">
        <h1>Related Issues</h1>

        <div class="issue-overview-related-issues">
        </div>
    </div>

    <div class="box white semi">
        <button class="button gray show-history-button" style="width: 100%;" onclick="showHistory('3'); return false;">Show History</button>
    </div>

        <div class="box red semi">
        <button class="button red delete-issue-button" style="width: 100%;">Delete Issue</button>
    </div>

</div>

<div class="left-column">
    <div class="content shadow">
        <h1 class="title">
            <div class="right">
                <div class="follow"><a href="#follow-issue" onclick="followIssue('3'); return false;" class="follow-icon" title="Follow Issue" rel="tipsyleft">&nbsp;</a></div>            </div>
            Sample issue 3        </h1>

        <div class="print-only">
            <table>
                <tbody><tr>
                    <td class="issue-overview-title">Issue</td>
                    <td class="issue-overview-data"><span class="hash">#</span>3</td>
                </tr>
                <tr>
                    <td class="issue-overview-title">Priority</td>
                    <td class="issue-overview-data">Normal</td>
                </tr>
                <tr>
                    <td class="issue-overview-title">Project</td>
                    <td class="issue-overview-data">
                                                    Gonzo                                            </td>
                </tr>
                <tr>
                    <td class="issue-overview-title">Category</td>
                    <td class="issue-overview-data">None</td>
                </tr>
                <tr>
                    <td class="issue-overview-title">Status</td>
                    <td class="issue-overview-data">Open</td>
                </tr>

                
                <tr>
                    <td class="issue-overview-title">Assigned to</td>
                    <td class="issue-overview-data">Demo User</td>
                </tr>

                            </tbody></table>
        </div>

        <div class="overview-description">
                            <p>Sample issue description</p>                    </div>
    </div>

    <div class="content add-comment-holder">
        <div id="commentsListContainer">
                    </div>

        <form method="post" action="" enctype="multipart/form-data">
            <div class="issue-attach-hidden" style="display: none;">
                <input name="attachment[]" class="hidden-attach-input" multiple="multiple" type="file">
                <script type="text/javascript">
                    //Max upload size is used in the "issue.js" drag/drop scripts
                    var maxUploadSize = '6291456';
                </script>
            </div>
            <div class="comment-toolbox">
                <div class="issue-attach-details"></div>
                <a class="add-comment-attach launch-attach-button" href="#add-attachment" title="Add Attachment" rel="tipsyup"></a>
            </div>
            <h2 class="comment-write">Have something to say?</h2>

            <div class="box">
                <div class="comment-attach-dropbox" style="display: none;"><p>Drop files here</p></div>

                <div id="wmd-button-bar-comment" class="comment-write-pagedown-toolbar" style="display: none;"><ul class="wmd-button-row" id="wmd-button-row-comment"><li title="Strong &lt;strong&gt; Ctrl+B" id="wmd-bold-button-comment" style="left: 0px;" class="wmd-button"><span style="background-position: 0px 0px;"></span></li><li title="Emphasis &lt;em&gt; Ctrl+I" id="wmd-italic-button-comment" style="left: 25px;" class="wmd-button"><span style="background-position: -20px 0px;"></span></li><li id="wmd-spacer1-comment" class="wmd-spacer wmd-spacer1"></li><li title="Hyperlink &lt;a&gt; Ctrl+L" id="wmd-link-button-comment" style="left: 75px;" class="wmd-button"><span style="background-position: -40px 0px;"></span></li><li title="Blockquote &lt;blockquote&gt; Ctrl+Q" id="wmd-quote-button-comment" style="left: 100px;" class="wmd-button"><span style="background-position: -60px 0px;"></span></li><li title="Code Sample &lt;pre&gt;&lt;code&gt; Ctrl+K" id="wmd-code-button-comment" style="left: 125px;" class="wmd-button"><span style="background-position: -80px 0px;"></span></li><li id="wmd-spacer2-comment" class="wmd-spacer wmd-spacer2"></li><li title="Numbered List &lt;ol&gt; Ctrl+O" id="wmd-olist-button-comment" style="left: 175px;" class="wmd-button"><span style="background-position: -120px 0px;"></span></li><li title="Bulleted List &lt;ul&gt; Ctrl+U" id="wmd-ulist-button-comment" style="left: 200px;" class="wmd-button"><span style="background-position: -140px 0px;"></span></li><li title="Heading &lt;h1&gt;/&lt;h2&gt; Ctrl+H" id="wmd-heading-button-comment" style="left: 225px;" class="wmd-button"><span style="background-position: -160px 0px;"></span></li><li title="Horizontal Rule &lt;hr&gt; Ctrl+R" id="wmd-hr-button-comment" style="left: 250px;" class="wmd-button"><span style="background-position: -180px 0px;"></span></li><li id="wmd-spacer3-comment" class="wmd-spacer wmd-spacer3"></li><li title="Undo - Ctrl+Z" id="wmd-undo-button-comment" style="left: 300px;" class="wmd-button"><span style="background-position: -200px -20px;"></span></li><li title="Redo - Ctrl+Y" id="wmd-redo-button-comment" style="left: 325px;" class="wmd-button"><span style="background-position: -220px -20px;"></span></li></ul></div>

                <textarea tabindex="-1" style="resize: none; overflow-y: hidden; position: absolute; top: 0px; left: -9999px; height: 38.1667px; width: 835.167px; line-height: 16.5px; text-decoration: none; letter-spacing: normal;" class="comment-write-box wmd-input" placeholder="Add a comment"></textarea><textarea style="resize: none; overflow-y: hidden;" class="comment-write-box wmd-input" id="wmd-input-comment" name="comment" placeholder="Add a comment"></textarea><div class="suggestions-list-container" id="suggestions-list-container-0" style="display: none;"></div>
            </div>

            <div class="comment-write-box-helper" style="display: none;">
                <div class="form-field hint">
                    Hint: Use <a href="http://daringfireball.net/projects/markdown/" target="_blank">Markdown</a> formatting.  Link to issues by typing # followed by the issue number. Mention users by typing @username.
                                        <div class="right">
                        <a href="#showPreview" onclick="$('.issue-comment-preview').slideToggle(200);return false;">Toggle Preview</a>
                    </div>

                    <div id="wmd-preview-comment" class="wmd-preview issue-comment-preview" style="display: none;"></div>
                                    </div>

                <input class="button gray comment-write-submit" value="Save Comment" type="submit">
            </div>
        </form>
    </div>

    <div class="content issue-history-holder" style="display: none;">
        <div class="throbber issue-history-throbber"></div>
        <div class="issue-history" style="display: none;"></div>
        <div class="clear"></div>
    </div>
</div>


<div id="edit-comment-box" class="md-modal">
    <div class="md-content" style="width: 750px;">
        <h2>Edit Comment</h2>

        <form id="edit-comment" method="post" action="">
            <div id="wmd-button-bar-editcomment" class="comment-write-pagedown-toolbar"><ul class="wmd-button-row" id="wmd-button-row-editcomment"><li title="Strong &lt;strong&gt; Ctrl+B" id="wmd-bold-button-editcomment" style="left: 0px;" class="wmd-button"><span style="background-position: 0px 0px;"></span></li><li title="Emphasis &lt;em&gt; Ctrl+I" id="wmd-italic-button-editcomment" style="left: 25px;" class="wmd-button"><span style="background-position: -20px 0px;"></span></li><li id="wmd-spacer1-editcomment" class="wmd-spacer wmd-spacer1"></li><li title="Hyperlink &lt;a&gt; Ctrl+L" id="wmd-link-button-editcomment" style="left: 75px;" class="wmd-button"><span style="background-position: -40px 0px;"></span></li><li title="Blockquote &lt;blockquote&gt; Ctrl+Q" id="wmd-quote-button-editcomment" style="left: 100px;" class="wmd-button"><span style="background-position: -60px 0px;"></span></li><li title="Code Sample &lt;pre&gt;&lt;code&gt; Ctrl+K" id="wmd-code-button-editcomment" style="left: 125px;" class="wmd-button"><span style="background-position: -80px 0px;"></span></li><li id="wmd-spacer2-editcomment" class="wmd-spacer wmd-spacer2"></li><li title="Numbered List &lt;ol&gt; Ctrl+O" id="wmd-olist-button-editcomment" style="left: 175px;" class="wmd-button"><span style="background-position: -120px 0px;"></span></li><li title="Bulleted List &lt;ul&gt; Ctrl+U" id="wmd-ulist-button-editcomment" style="left: 200px;" class="wmd-button"><span style="background-position: -140px 0px;"></span></li><li title="Heading &lt;h1&gt;/&lt;h2&gt; Ctrl+H" id="wmd-heading-button-editcomment" style="left: 225px;" class="wmd-button"><span style="background-position: -160px 0px;"></span></li><li title="Horizontal Rule &lt;hr&gt; Ctrl+R" id="wmd-hr-button-editcomment" style="left: 250px;" class="wmd-button"><span style="background-position: -180px 0px;"></span></li><li id="wmd-spacer3-editcomment" class="wmd-spacer wmd-spacer3"></li><li title="Undo - Ctrl+Z" id="wmd-undo-button-editcomment" style="left: 300px;" class="wmd-button"><span style="background-position: -200px -20px;"></span></li><li title="Redo - Ctrl+Y" id="wmd-redo-button-editcomment" style="left: 325px;" class="wmd-button"><span style="background-position: -220px -20px;"></span></li></ul></div>

            <textarea class="edit-comment-content tall wmd-input" id="wmd-input-editcomment" name="editcomment[comment]" placeholder="Add a comment"></textarea><div class="suggestions-list-container" id="suggestions-list-container-1" style="display: none;"></div>

            <div class="form-field hint">
                Hint: Use <a href="http://daringfireball.net/projects/markdown/" target="_blank">Markdown</a> formatting.  Link to issues by typing # followed by the issue number. Mention users by typing @username.
                                <div class="right">
                    <a href="#showPreview" onclick="$('.issue-editcomment-preview').slideToggle(200);return false;">Toggle Preview</a>
                </div>

                <div id="wmd-preview-editcomment" class="wmd-preview issue-editcomment-preview" style="display: none;"></div>
                            </div>

            <input name="editcomment[id]" id="edit-comment-id" value="" type="hidden">

            <div class="form-buttons">
                <input value="Save Changes" class="button green" type="submit"> <a href="#cancel" onclick="cancelConfirm(); return false;">cancel and go back</a>
            </div>
        </form>
    </div>
</div>

<div id="delete-comment-box" class="md-modal">
    <div class="md-content">
        <h2>Delete Comment</h2>
        <p>Warning - you will not be able to recover this comment.</p>

        <form id="delete-comment" method="post" action="">
            <input name="deletecomment[id]" id="delete-comment-id" value="" type="hidden">

            <div class="form-buttons">
                <input value="Delete Comment" class="button red" type="submit"> <a href="#cancel" onclick="cancelConfirm(); return false;">cancel and go back</a>
            </div>
        </form>
    </div>
</div>

<div id="delete-attachment-box" class="md-modal">
    <div class="md-content">
        <h2>Delete Attachment</h2>
        <p>Warning - you will not be able to recover this attachment.</p>

        <form id="delete-attachment" method="post" action="">
            <input name="deleteattachment[filename]" id="delete-attachment-filename" value="" type="hidden">

            <div class="form-buttons">
                <input value="Delete Attachment" class="button red" type="submit"> <a href="#cancel" onclick="cancelConfirm(); return false;">cancel and go back</a>
            </div>
        </form>
    </div>
</div>

<div id="attach-box" class="md-modal">
    <div class="md-content" style="width: 500px;">
        <h2>Upload Attachments</h2>
        <p>Select the files you would like to upload.  Maximum upload size is 6 MB.</p>

        <form id="attach-file" method="post" action="" enctype="multipart/form-data">
            <div class="upload-holder">
                <input name="attachment[]" multiple="multiple" type="file">
                <input name="attach" type="hidden">
            </div>

            <div class="throbber-holder" style="display: none;"><div class="throbber" style="float: left;"></div><div style="float: left; line-height: 32px; margin-left: 10px;">Uploading...</div><div class="clear"></div></div>

            <div class="form-buttons">
                <input value="Add Attachments" class="button green" type="submit"> <a href="#cancel" onclick="cancelConfirm(); return false;">cancel and go back</a>
            </div>
        </form>
    </div>
</div>

<div id="update-status" class="md-modal">
    <div class="md-content" style="width: 500px;">
        <h2>Change Status</h2>
        <p></p>

        <form id="update-status" method="post" action="">

            <label><input name="status[state]" value="0" checked="checked" type="radio"> Open</label><span class="arrow-right"></span><label><input name="status[state]" value="1" type="radio"> In Progress</label><span class="arrow-right"></span><label><input name="status[state]" value="2" type="radio"> Resolved</label><span class="arrow-right"></span><label><input name="status[state]" value="3" type="radio"> Closed</label>            <div class="clear"></div>
            <p>&nbsp;</p>

            <div class="form-row">
                <div class="issue-new-column">
                    <div class="form-label">Assign to</div>
                    <div class="form-field">
                        <select name="status[assignee]">
                            <option value="">Nobody</option>
                                                        <option value="1" selected="selected">Demo User</option>
                                                    </select>
                    </div>
                </div>
                <div class="issue-new-column">
                    <div class="form-label">Percent complete</div>
                    <div class="form-field">
                        <select name="status[percentage]">
                                                        <option value="0" selected="selected">0 %</option>
                                                        <option value="10">10 %</option>
                                                        <option value="20">20 %</option>
                                                        <option value="30">30 %</option>
                                                        <option value="40">40 %</option>
                                                        <option value="50">50 %</option>
                                                        <option value="60">60 %</option>
                                                        <option value="70">70 %</option>
                                                        <option value="80">80 %</option>
                                                        <option value="90">90 %</option>
                                                        <option value="100">100 %</option>
                                                    </select>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <p>&nbsp;</p>

            <div class="form-row">
                <div class="form-label">Comment</div>
                <div class="form-field">
                    <div id="wmd-button-bar-status"><ul class="wmd-button-row" id="wmd-button-row-status"><li title="Strong &lt;strong&gt; Ctrl+B" id="wmd-bold-button-status" style="left: 0px;" class="wmd-button"><span style="background-position: 0px 0px;"></span></li><li title="Emphasis &lt;em&gt; Ctrl+I" id="wmd-italic-button-status" style="left: 25px;" class="wmd-button"><span style="background-position: -20px 0px;"></span></li><li id="wmd-spacer1-status" class="wmd-spacer wmd-spacer1"></li><li title="Hyperlink &lt;a&gt; Ctrl+L" id="wmd-link-button-status" style="left: 75px;" class="wmd-button"><span style="background-position: -40px 0px;"></span></li><li title="Blockquote &lt;blockquote&gt; Ctrl+Q" id="wmd-quote-button-status" style="left: 100px;" class="wmd-button"><span style="background-position: -60px 0px;"></span></li><li title="Code Sample &lt;pre&gt;&lt;code&gt; Ctrl+K" id="wmd-code-button-status" style="left: 125px;" class="wmd-button"><span style="background-position: -80px 0px;"></span></li><li id="wmd-spacer2-status" class="wmd-spacer wmd-spacer2"></li><li title="Numbered List &lt;ol&gt; Ctrl+O" id="wmd-olist-button-status" style="left: 175px;" class="wmd-button"><span style="background-position: -120px 0px;"></span></li><li title="Bulleted List &lt;ul&gt; Ctrl+U" id="wmd-ulist-button-status" style="left: 200px;" class="wmd-button"><span style="background-position: -140px 0px;"></span></li><li title="Heading &lt;h1&gt;/&lt;h2&gt; Ctrl+H" id="wmd-heading-button-status" style="left: 225px;" class="wmd-button"><span style="background-position: -160px 0px;"></span></li><li title="Horizontal Rule &lt;hr&gt; Ctrl+R" id="wmd-hr-button-status" style="left: 250px;" class="wmd-button"><span style="background-position: -180px 0px;"></span></li><li id="wmd-spacer3-status" class="wmd-spacer wmd-spacer3"></li><li title="Undo - Ctrl+Z" id="wmd-undo-button-status" style="left: 300px;" class="wmd-button"><span style="background-position: -200px -20px;"></span></li><li title="Redo - Ctrl+Y" id="wmd-redo-button-status" style="left: 325px;" class="wmd-button"><span style="background-position: -220px -20px;"></span></li></ul></div>
                    <textarea name="status[comment]" placeholder="Optional - write the reason for the status change" class="wmd-input issues-status-comment" id="wmd-input-status"></textarea><div class="suggestions-list-container" id="suggestions-list-container-2" style="display: none;"></div>
                </div>
                <div class="form-field hint">
                    Note: Adding a comment here is optional.
                                        <div class="right">
                        <a href="#showPreview" onclick="$('.issues-status-preview').slideToggle(200);return false;">Toggle Preview</a>
                    </div>
                                    </div>

                <div id="wmd-preview-status" class="wmd-preview issues-status-preview" style="display: none;"></div>
            </div>

            <div class="form-buttons">
                <input value="Save Changes" class="button green" type="submit"> <a href="#cancel" onclick="cancelConfirm(); return false;">cancel and go back</a>
            </div>
        </form>
    </div>
</div>


<div id="update-box" class="md-modal">
    <div class="md-content" style="width: 750px;">
        <h2>Update Issue</h2>
        <p></p>

        <form id="update-issue" method="post" action="">
            <div class="form-row">
                <div class="form-label">Subject</div>
                <div class="form-field"><input name="issue[subject]" value="Sample issue 3" placeholder="Quick summary of the issue" type="text"></div>
            </div>
            <div class="form-row">
                <div class="form-field">
                    <div id="wmd-button-bar-update"><ul class="wmd-button-row" id="wmd-button-row-update"><li title="Strong &lt;strong&gt; Ctrl+B" id="wmd-bold-button-update" style="left: 0px;" class="wmd-button"><span style="background-position: 0px 0px;"></span></li><li title="Emphasis &lt;em&gt; Ctrl+I" id="wmd-italic-button-update" style="left: 25px;" class="wmd-button"><span style="background-position: -20px 0px;"></span></li><li id="wmd-spacer1-update" class="wmd-spacer wmd-spacer1"></li><li title="Hyperlink &lt;a&gt; Ctrl+L" id="wmd-link-button-update" style="left: 75px;" class="wmd-button"><span style="background-position: -40px 0px;"></span></li><li title="Blockquote &lt;blockquote&gt; Ctrl+Q" id="wmd-quote-button-update" style="left: 100px;" class="wmd-button"><span style="background-position: -60px 0px;"></span></li><li title="Code Sample &lt;pre&gt;&lt;code&gt; Ctrl+K" id="wmd-code-button-update" style="left: 125px;" class="wmd-button"><span style="background-position: -80px 0px;"></span></li><li id="wmd-spacer2-update" class="wmd-spacer wmd-spacer2"></li><li title="Numbered List &lt;ol&gt; Ctrl+O" id="wmd-olist-button-update" style="left: 175px;" class="wmd-button"><span style="background-position: -120px 0px;"></span></li><li title="Bulleted List &lt;ul&gt; Ctrl+U" id="wmd-ulist-button-update" style="left: 200px;" class="wmd-button"><span style="background-position: -140px 0px;"></span></li><li title="Heading &lt;h1&gt;/&lt;h2&gt; Ctrl+H" id="wmd-heading-button-update" style="left: 225px;" class="wmd-button"><span style="background-position: -160px 0px;"></span></li><li title="Horizontal Rule &lt;hr&gt; Ctrl+R" id="wmd-hr-button-update" style="left: 250px;" class="wmd-button"><span style="background-position: -180px 0px;"></span></li><li id="wmd-spacer3-update" class="wmd-spacer wmd-spacer3"></li><li title="Undo - Ctrl+Z" id="wmd-undo-button-update" style="left: 300px;" class="wmd-button"><span style="background-position: -200px -20px;"></span></li><li title="Redo - Ctrl+Y" id="wmd-redo-button-update" style="left: 325px;" class="wmd-button"><span style="background-position: -220px -20px;"></span></li></ul></div>
                    <textarea name="issue[description]" placeholder="Describe the issue here" class="wmd-input tall issues-update-description" id="wmd-input-update">Sample issue description</textarea><div class="suggestions-list-container" id="suggestions-list-container-3" style="display: none;"></div>
                </div>
                <div class="form-field hint">
                    You can use <a href="http://daringfireball.net/projects/markdown/" target="_blank">Markdown</a> formatting.
                                        <div class="right">
                        <a href="#showPreview" onclick="$('.issues-update-preview').slideToggle(200);return false;">Toggle Preview</a>
                    </div>
                                    </div>

                <div id="wmd-preview-update" class="wmd-preview issues-update-preview" style="display: none;"><p>Sample issue description</p></div>
            </div>

            <div class="form-row">
                <div class="issue-new-column">
                    <div class="form-label">Project</div>
                    <div class="form-field">
                        <select name="issue[project]" id="project" onchange="updateCategoriesFromModalBox();">
                            <option value="">None</option>
                                                        <option value="1">Blackbird</option>
                                                        <option value="2" selected="selected">Gonzo</option>
                                                        <option value="3">Twiggy</option>
                                                    </select>
                    </div>
                </div>
                <div class="issue-new-column categories-holder">
                    <div class="form-label">Category</div>
                    <div class="form-field">
                        <select name="issue[category]" id="category" class="categories">
                            <option selected="selected" value="">None</option>
                                                        <option value="5">Bugs</option>
                                                        <option value="6">Features</option>
                                                        <option value="7">Ideas</option>
                                                        <option value="8">To Do</option>
                                                    </select>
                    </div>
                </div>
                <div class="issue-new-column">
                    <div class="form-label">Milestone</div>
                    <div class="form-field">
                        <select name="issue[milestone]">
                            <option selected="selected" value="">None</option>
                                                        <option value="1">Blackbird v1</option>
                                                        <option value="2">Gonzo Major Upgrade</option>
                                                    </select>
                    </div>
                </div>
                <div class="issue-new-column">
                    <div class="form-label">Priority</div>
                    <div class="form-field">
                        <select name="issue[priority]">
                                                        <option value="0">Low</option>
                                                        <option value="1" selected="selected">Normal</option>
                                                        <option value="2">High</option>
                                                    </select>
                    </div>
                </div>
                <div class="issue-new-column">
                    <div class="form-label">Assign to</div>
                    <div class="form-field">
                        <select name="issue[assignee]">
                            <option value="">Nobody</option>
                                                        <option value="1" selected="selected">Demo User</option>
                                                    </select>
                    </div>
                </div>
                <div class="issue-new-column">
                    <div class="form-label">Percent complete</div>
                    <div class="form-field">
                        <select name="issue[percentage]">
                                                        <option value="0" selected="selected">0 %</option>
                                                        <option value="10">10 %</option>
                                                        <option value="20">20 %</option>
                                                        <option value="30">30 %</option>
                                                        <option value="40">40 %</option>
                                                        <option value="50">50 %</option>
                                                        <option value="60">60 %</option>
                                                        <option value="70">70 %</option>
                                                        <option value="80">80 %</option>
                                                        <option value="90">90 %</option>
                                                        <option value="100">100 %</option>
                                                    </select>
                    </div>
                </div>
            </div>
            <div class="clear"></div>

            <div class="form-buttons">
                <div class="issue-new-column category-throbber" style="display: none; float: right;">
                    <div class="throbber"></div>
                </div>

                <input value="Save Changes" class="button green" type="submit"> <a href="#cancel" onclick="cancelConfirm(); return false;">cancel and go back</a>
            </div>
        </form>
    </div>
</div>

<div id="delete-box" class="md-modal">
    <div class="md-content">
        <h2>Delete Issue</h2>
        <p>Warning - you will not be able to recover this issue.</p>

        <form id="delete-comment" method="post" action="">
            <input name="deleteissue" value="" type="hidden">

            <div class="form-buttons">
                <input value="Delete Issue" class="button red" type="submit"> <a href="#cancel" onclick="cancelConfirm(); return false;">cancel and go back</a>
            </div>
        </form>
    </div>
</div>


<div id="labels-box" class="md-modal">
    <div class="md-content" style="width: 432px;">
        <h2>Labels</h2>
        <p>Select labels that apply to this issue.</p>

        <form id="manage-labels" method="post" action="">
            <input name="managelabels" value="" type="hidden">
            <input name="filterLabels" class="filter-labels-box" onkeyup="filterLabelsList()" placeholder="Filter labels" type="text">

            <div class="issue-overview-labels-manage">
                <div id="issue-labels-list"></div>
                <p class="no-items-message">No Labels Found</p>
            </div>

                            <div class="issue-overview-labels-new">
                    <h3>New Label</h3>

                    <input name="newLabel[label]" class="new-label-box" onfocus="showLabelColours();" placeholder="Label name" type="text">

                    <div class="new-label-colours" style="display: none;">
                        <div class="label-colours"><ul class="label-colours-palette"><li><span class="colour" style="background-color: #FFE64A;" data-hex="#FFE64A"></span></li><li><span class="colour" style="background-color: #F1731F;" data-hex="#F1731F"></span></li><li><span class="colour" style="background-color: #D71A21;" data-hex="#D71A21"></span></li><li><span class="colour" style="background-color: #DB617A;" data-hex="#DB617A"></span></li><li><span class="colour" style="background-color: #F5A09B;" data-hex="#F5A09B"></span></li><li><span class="colour" style="background-color: #842857;" data-hex="#842857"></span></li><li><span class="colour" style="background-color: #985C8F;" data-hex="#985C8F"></span></li><li><span class="colour" style="background-color: #B2E2F8;" data-hex="#B2E2F8"></span></li><li><span class="colour" style="background-color: #005C9B;" data-hex="#005C9B"></span></li><li><span class="colour" style="background-color: #40A4D8;" data-hex="#40A4D8"></span></li><li><span class="colour" style="background-color: #33BEB8;" data-hex="#33BEB8"></span></li><li><span class="colour" style="background-color: #AED143;" data-hex="#AED143"></span></li><li><span class="colour" style="background-color: #61AE48;" data-hex="#61AE48"></span></li><li><span class="colour" style="background-color: #7E8B8C;" data-hex="#7E8B8C"></span></li><li><span class="colour" style="background-color: #DDCFAC;" data-hex="#DDCFAC"></span></li><li><span class="colour" style="background-color: #E5E3D4;" data-hex="#E5E3D4"></span></li></ul></div>
                        <div class="issue-overview-labels-new-inputs">
                                                        <input name="newLabel[colour]" class="new-label-colour" value="#FFE64A" style="border-color: #FFE64A;" maxlength="7" type="text">
                            <input value="Save Label" class="new-label-button button gray" type="button">
                        </div>
                    </div>
                </div>
            
            <div class="form-buttons">
                <input value="Save Changes" class="button green" type="submit"> <a href="#cancel" onclick="cancelConfirm(); return false;">cancel and go back</a>
            </div>
        </form>
    </div>
</div>
    </div>
    <div class="clear"></div>

    <div id="shortcuts" class="md-modal">
        <div class="md-content keyboard-shortcuts-info" style="width: 500px;">
            <h2>Keyboard Shortcuts</h2>
            <div class="column">
                <h3>All pages</h3>
                <ul>
                    <li><span>h</span> Show this help</li>
                    <li><span>s</span> Search</li>
                    <li><span>n</span> New issue</li>
                </ul>
            </div>
            <div class="column">
                <h3>Navigation</h3>
                <ul>
                    <li><span>o</span> Overview</li>
                    <li><span>i</span> My issues</li>
                    <li><span>p</span> Projects</li>
                    <li><span>m</span> Milestones</li>
                </ul>
            </div>
            <div class="column">
                <h3>While viewing an issue</h3>
                <ul>
                    <li><span>a</span> Change status</li>
                    <li><span>e</span> Update issue</li>
                    <li><span>w</span> Write comment</li>
                    <li><span>ctrl+u</span> Upload attachment</li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <div class="full-overlay" style="display: none;">
        <div class="overlay-content"></div>
    </div>

    </body>
</html>