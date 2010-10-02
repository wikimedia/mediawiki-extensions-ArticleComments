<?php
/**
 * Internationalisation file for ArticleComments extension.
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

$messages['en'] = array(
    'article-comments-title-string' => 'title',
    'article-comments-name-string' => 'Name',
    'article-comments-name-field' => 'Name (required):',
    'article-comments-url-field' => 'Website:',
    'article-comments-url-string' => 'URL',
    'article-comments-comment-string' => 'Comment',
    'article-comments-comment-field' => 'Comment:',
    'article-comments-submit-button' => 'Submit',
    'article-comments-leave-comment-link' => 'Leave a comment ...',
    'article-comments-invalid-field' => 'The $1 provided <nowiki>[$2]</nowiki> is invalid.',
    'article-comments-required-field' => '$1 field is required.',
    'article-comments-submission-failed' => 'Comment Submission Failed',
    'article-comments-failure-reasons' => 'Sorry, your comment submission failed for the following reason(s):',
    'article-comments-no-comments' => 'Sorry, the article &quot;[[$1]]&quot; is not accepting comments at this time.',
    'article-comments-talk-page-starter' => "<noinclude>Comments on [[$1]]\n<comments />\n----- __NOEDITSECTION__</noinclude>\n",
    'article-comments-commenter-said' => '$1 said ...',
    'article-comments-summary' => 'Comment provided by $1 - via ArticleComments extension',
    'article-comments-submission-succeeded' => 'Comment submission succeeded',
    'article-comments-submission-success' => 'You have successfully submitted a comment for [[$1]]',
    'article-comments-submission-view-all' => 'You may view all comments on that article [[$1|here]]',
    'article-comments-prefilled-comment-text' => '',
    'article-comments-user-is-blocked' => 'Your user account is currently blocked from editing [[$1]].',
    'article-comments-new-comment' => "\n== \$1 ==\n\n<div class='commentBlock'>\n\$2\n\n--\$3 \$4\n</div>\n",
    'article-comments-no-spam' => 'At least one of the submitted fields was flagged as spam.',
    'processcomment' => 'Process Article Comment',
);

$messages['qqq'] = array(
	'article-comments-required-field' => 'Shown as a list below article-comments-failure-reasons. With $1 being one of article-comments-*-string messages.',
	'article-comments-submission-failed' => 'Page title when there are errors in the comment submission',
	'article-comments-invalid-field' => 'Shown as a list below article-comments-failure-reasons. With $1 being article-comments-title-string or article-comments-url-string messages, and $2 the wrong value.',
	'article-comments-new-comment' => 'Text to add in the new comment.
* $1 - Expansion of article-comments-commenter-said.
* $2 - Comment text.
* $3 - Commenter name, possibly linking to its web.
* $4 - Datetime.',
);

