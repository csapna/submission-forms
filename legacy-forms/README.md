<h1>Legacy Submissions</h1>

<p>Please note that the methods listed here are not recommended as they are outdated and increase the chances of getting spam submissions. One of the current methods of using <a href="https://github.com/csapna/submission-forms/tree/main/php-forms" target="_blank">PHP</a> or <a href="https://platform.lassocrm.com/#/api" target="_blank">JSON</a> are recommended instead.</p>

<h3><a name="html">HTML</a></h3>
<p>For posting to <code>http://www.mylasso.com/registrant_signup.php</code> see the example <a href="https://github.com/csapna/submission-forms/blob/main/legacy-forms/mylasso-signup-php.html" target="_blank">mylasso-signup-php.html</a>.</p>
<p>For posting to <code>https://app.lassocrm.com/registrant_signup.php</code> see the example <a href="https://github.com/csapna/submission-forms/blob/main/legacy-forms/app-signup-php.html" target="_blank">app-signup-php.html</a>.</p>
<p>For posting to <code>https://app.lassocrm.com/registrant_signup/</code> see the example <a href="https://github.com/csapna/submission-forms/blob/main/legacy-forms/app-signup.html" target="_blank">app-signup.html</a>.</p>

<h3><a name="json">JSON</a></h3>
<p>If you're using the <b>Lasso UID</b>, you must use the syntax in <a href="https://github.com/csapna/submission-forms/blob/main/legacy-forms/lead.json" target="_blank">lead.json</a> to submit. You can use our <a href="http://app.lassocrm.com/registrant_signup/help" target="_blank">Legacy Form Generator</a> to generate the code.</p>
<p>In your <code>POST</code> request, you will need to include a custom header:</p>
<pre>X-Lasso-Auth: Token={apiKey},Version=1.0</pre>
<p>Once the JSON is formatted, submit leads to <code>https://api.lassocrm.com/registrants</code></p>

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
