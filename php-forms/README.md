<h1>PHP Submissions</h1>

<h3><a name="single-project">Single Project</a></h3>
<p>Update the following fields in <a href="https://github.com/csapna/submission-forms/blob/main/php-forms/php/single-project.php" target="_blank">single-project.php</a> to test a submission:</p>
<ul>
<li><code>clientId</code></li>
<li><code>projectId</code></li>
<li><code>apiKey</code> (This is the <b>LassoUID</b> from Lasso)</li>
<li>Any other project-specific fields (e.g., <code>setRating</code>, <code>setSourceType</code>... etc.)</li>
</ul>
<p> Update the URL for <code>window.location</code> and the website tracking code in <a href="https://github.com/csapna/submission-forms/blob/main/php-forms/single-project.html" target="_blank">single-project.html</a> and submit.</p>
<p><b><u>Note</u>:</b> The fields updated in the PHP and HTML files for single project submissions will need to be updated in the respective PHP and HTML files for all submission methods listed below.</p>

<h3><a name="multi-project">Multi-project</a></h3>
<p>Define a required question field with checkbox or multi-select drop-down menu answer options in <a href="https://github.com/csapna/submission-forms/blob/main/php-forms/multi-project.html">multi-project.html</a> and set the following attributes for each answer <code>input</code> tag:
<ul>
<li><code>name="ProjectID[]"</code></li>
<li><code>value="$projectID"</code></li>
</ul>
<p>Request Project ID when constructing a lead in <a href="https://github.com/csapna/submission-forms/blob/main/php-forms/php/multi-project.php" target="_blank">multi-project.php</a> and then create a loop to pass the value of the selected options.</p>

<h3><a name="answer-project">Submit to Projects Based on Answers</a></h3>
<p>Define a required question field with checkbox or multi-select drop-down menu answers in <a href="https://github.com/csapna/submission-forms/blob/main/php-forms/answer-based-projects.html">answer-based-projects.html</a>.</p>
<p>Remove any validation checks for Project ID in <a href="https://github.com/csapna/submission-forms/blob/main/php-forms/php/answer-based-projects.php">answer-based-projects.php</a>. Pass an empty array for projects and then create a loop to map each answer ID for the question to a project ID. Pass <code>$projects[0]</code> when constructing a lead.</p>

<h3><a name="answer-rating">Submit a Rating Based on an Answer</a></h3>
<p>Define a question with radio button or single-select drop-down menu answers in <a href="https://github.com/csapna/submission-forms/blob/main/php-forms/answer-based-rating.html">answer-based-rating.html</a>.</p>
<p>Note that Sales Details (Rating, Source Type, Secondary Source Type... etc) can only have one value so multi-answer questions are not recommended.</p>
<p>Pass the values and assign ratings to the answers in <a href="https://github.com/csapna/submission-forms/blob/main/php-forms/php/answer-based-rating.php">answer-based-rating.php</a>.</p>
<p>This method can also be applied for assigning values for other Sales Details based on answers</p>

<h3><a name="answer-utm">Capture UTM Information as Answers</a></h3>
<p>To capture UTM information from the URL of the form, define hidden input fields for each value in <a href="https://github.com/csapna/submission-forms/blob/main/php-forms/utm-answers.html">utm-answers.html</a>.</p>
<p>A manual input question for each UTM field must exist in Lasso and then each field is to be mapped in <a href="https://github.com/csapna/submission-forms/blob/main/php-forms/php/utm-answers.php">utm-answers.php</a>.</p>

<h4><a name="troubleshooting">Registrant is not in Lasso?</a></h3>
<p>If the submission did not go into Lasso, look at the error console in your browser. More information about the request can be found by uncommenting the lines at the bottom of <a href="https://github.com/csapna/submission-forms/blob/main/php-forms/php/single-project.php" target="_blank">single-project.php</a> (under <i>Troubleshooting examples</i>) and re-trying the submission.</p>

<h3><a name="response-codes">Response Codes</a></h3>
<table>
<tr>
<td><b>Code</b></td>
<td><b>What does it mean?</b></td>
</tr>
<tr>
<td>2xx</td>
<td>Success - the registrant was submitted to Lasso</td>
</tr>
<tr>
<td>3xx</td>
<td>Client status (redirection, caching... etc) - client must take additional action to complete the request</td>
</tr>
<tr>
<td>4xx</td>
<td>Client error - bad syntax; check data in request body or headers</td>
</tr>
<tr>
<td>5xx</td>
<td>Server error - please contact Lasso</td>
</tr>
</table>
