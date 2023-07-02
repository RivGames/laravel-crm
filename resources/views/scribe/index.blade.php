<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>LaravelCRM Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost:8000";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.22.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.22.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-client-management" class="tocify-header">
                <li class="tocify-item level-1" data-unique="client-management">
                    <a href="#client-management">Client management</a>
                </li>
                                    <ul id="tocify-subheader-client-management" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="client-management-GETapi-v1-clients">
                                <a href="#client-management-GETapi-v1-clients">Display a listing of the clients.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="client-management-POSTapi-v1-clients">
                                <a href="#client-management-POSTapi-v1-clients">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="client-management-GETapi-v1-clients--id-">
                                <a href="#client-management-GETapi-v1-clients--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="client-management-PUTapi-v1-clients--id-">
                                <a href="#client-management-PUTapi-v1-clients--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="client-management-DELETEapi-v1-clients--id-">
                                <a href="#client-management-DELETEapi-v1-clients--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-status">
                                <a href="#endpoints-GETapi-status">HealthCheck</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-register">
                                <a href="#endpoints-POSTapi-register">POST api/register</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-login">
                                <a href="#endpoints-POSTapi-login">POST api/login</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-logout">
                                <a href="#endpoints-POSTapi-logout">POST api/logout</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-project-management" class="tocify-header">
                <li class="tocify-item level-1" data-unique="project-management">
                    <a href="#project-management">Project management</a>
                </li>
                                    <ul id="tocify-subheader-project-management" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="project-management-GETapi-v1-projects">
                                <a href="#project-management-GETapi-v1-projects">Display a listing of the projects.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="project-management-POSTapi-v1-projects">
                                <a href="#project-management-POSTapi-v1-projects">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="project-management-GETapi-v1-projects--id-">
                                <a href="#project-management-GETapi-v1-projects--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="project-management-PUTapi-v1-projects--id-">
                                <a href="#project-management-PUTapi-v1-projects--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="project-management-DELETEapi-v1-projects--id-">
                                <a href="#project-management-DELETEapi-v1-projects--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-task-management" class="tocify-header">
                <li class="tocify-item level-1" data-unique="task-management">
                    <a href="#task-management">Task management</a>
                </li>
                                    <ul id="tocify-subheader-task-management" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="task-management-GETapi-v1-tasks">
                                <a href="#task-management-GETapi-v1-tasks">Display a listing of the tasks.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="task-management-POSTapi-v1-tasks">
                                <a href="#task-management-POSTapi-v1-tasks">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="task-management-GETapi-v1-tasks--id-">
                                <a href="#task-management-GETapi-v1-tasks--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="task-management-PUTapi-v1-tasks--id-">
                                <a href="#task-management-PUTapi-v1-tasks--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="task-management-DELETEapi-v1-tasks--id-">
                                <a href="#task-management-DELETEapi-v1-tasks--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-user-management" class="tocify-header">
                <li class="tocify-item level-1" data-unique="user-management">
                    <a href="#user-management">User management</a>
                </li>
                                    <ul id="tocify-subheader-user-management" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="user-management-GETapi-v1-users">
                                <a href="#user-management-GETapi-v1-users">Display a listing of the users.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-management-POSTapi-v1-users">
                                <a href="#user-management-POSTapi-v1-users">Store a newly created user.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-management-GETapi-v1-users--id-">
                                <a href="#user-management-GETapi-v1-users--id-">Display the user.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-management-PUTapi-v1-users--id-">
                                <a href="#user-management-PUTapi-v1-users--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-management-DELETEapi-v1-users--id-">
                                <a href="#user-management-DELETEapi-v1-users--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: July 2, 2023</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>The documentation about our API and how to use it</p>
<aside>
    <strong>Base URL</strong>: <code>http://laravel-crm-1.loc/api/</code>
</aside>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>To authenticate requests, include an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>You can retrieve your token by visiting your dashboard and clicking <b>Generate API token</b>.</p>

        <h1 id="client-management">Client management</h1>

    <p>APIs for managing clients</p>

                                <h2 id="client-management-GETapi-v1-clients">Display a listing of the clients.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-clients">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://laravel-crm-1.loc/api/api/v1/clients" \
    --header "Authorization: Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laravel-crm-1.loc/api/api/v1/clients"
);

const headers = {
    "Authorization": "Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-clients">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 49
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;company_name&quot;: &quot;Aut&quot;,
        &quot;company_vat&quot;: 4862,
        &quot;address&quot;: &quot;73146 Tillmanport larson.francisca@hotmail.com 352-292-5068 169 Fletcher Ranch\nNew Norbert, ME 03500&quot;
    },
    {
        &quot;company_name&quot;: &quot;Occaecati&quot;,
        &quot;company_vat&quot;: 7960,
        &quot;address&quot;: &quot;42046 Port Shakirastad nigel38@hotmail.com 1-234-574-3193 60985 Kozey Plains Apt. 951\nNew Althea, OR 57233&quot;
    },
    {
        &quot;company_name&quot;: &quot;Voluptatibus&quot;,
        &quot;company_vat&quot;: 6729,
        &quot;address&quot;: &quot;32347 Kaylaberg konopelski.roslyn@hilpert.com 912-365-4753 464 Khalil Inlet Apt. 784\nWaelchiborough, SC 25746&quot;
    },
    {
        &quot;company_name&quot;: &quot;Fuga&quot;,
        &quot;company_vat&quot;: 749,
        &quot;address&quot;: &quot;99631 Kaseytown prosacco.jesus@yahoo.com +1.316.389.4321 229 Andres Cliffs\nNew Hester, NM 73787-2951&quot;
    },
    {
        &quot;company_name&quot;: &quot;Placeat&quot;,
        &quot;company_vat&quot;: 3196,
        &quot;address&quot;: &quot;69120 Jerdemouth travon36@yahoo.com 1-320-453-0355 340 Nichole Loaf\nLake Marcbury, ND 22612-4877&quot;
    },
    {
        &quot;company_name&quot;: &quot;Praesentium&quot;,
        &quot;company_vat&quot;: 9244,
        &quot;address&quot;: &quot;76453 Jerdeland kylee24@yahoo.com 1-408-716-2705 23914 Terry Mill\nTerrenceborough, NE 63620&quot;
    },
    {
        &quot;company_name&quot;: &quot;Quo&quot;,
        &quot;company_vat&quot;: 367,
        &quot;address&quot;: &quot;75906 Wunschfurt neil92@satterfield.biz 1-445-324-0508 2886 Collins Radial Apt. 796\nSouth Eleazar, OH 46669&quot;
    },
    {
        &quot;company_name&quot;: &quot;Nihil&quot;,
        &quot;company_vat&quot;: 6340,
        &quot;address&quot;: &quot;46533 Wilmerside srath@schmitt.com +1-986-919-5820 32748 Jayda Ferry Suite 431\nBarrowshaven, OH 05511-9175&quot;
    },
    {
        &quot;company_name&quot;: &quot;Accusantium&quot;,
        &quot;company_vat&quot;: 7068,
        &quot;address&quot;: &quot;55424 Mrazberg ybartell@pfeffer.com +18484730707 2110 Lee Mountain\nPort Daronchester, PA 38976&quot;
    },
    {
        &quot;company_name&quot;: &quot;Velit&quot;,
        &quot;company_vat&quot;: 2099,
        &quot;address&quot;: &quot;86229 East Camilafurt tpacocha@harris.com 1-334-562-7722 1825 Taya Villages\nClaudieshire, MO 62776-5269&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-clients" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-clients"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-clients"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-clients" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-clients">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-clients" data-method="GET"
      data-path="api/v1/clients"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-clients', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-clients"
                    onclick="tryItOut('GETapi-v1-clients');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-clients"
                    onclick="cancelTryOut('GETapi-v1-clients');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-clients"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/clients</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-clients"
               value="Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I"
               data-component="header">
    <br>
<p>Example: <code>Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-clients"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-clients"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="client-management-POSTapi-v1-clients">Store a newly created resource in storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-clients">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://laravel-crm-1.loc/api/api/v1/clients" \
    --header "Authorization: Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"contact_name\": \"vevaycwwn\",
    \"contact_email\": \"lockman.lurline@example.net\",
    \"contact_phone_number\": \"dscgip\",
    \"company_name\": \"vrxhxpijqfknxmswhnypfebj\",
    \"company_address\": \"ksbbkvtgdpacejxmnfaf\",
    \"company_city\": \"ytnoplmui\",
    \"company_zip\": 4,
    \"company_vat\": 7
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laravel-crm-1.loc/api/api/v1/clients"
);

const headers = {
    "Authorization": "Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "contact_name": "vevaycwwn",
    "contact_email": "lockman.lurline@example.net",
    "contact_phone_number": "dscgip",
    "company_name": "vrxhxpijqfknxmswhnypfebj",
    "company_address": "ksbbkvtgdpacejxmnfaf",
    "company_city": "ytnoplmui",
    "company_zip": 4,
    "company_vat": 7
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-clients">
</span>
<span id="execution-results-POSTapi-v1-clients" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-clients"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-clients"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-clients" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-clients">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-clients" data-method="POST"
      data-path="api/v1/clients"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-clients', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-clients"
                    onclick="tryItOut('POSTapi-v1-clients');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-clients"
                    onclick="cancelTryOut('POSTapi-v1-clients');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-clients"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/clients</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-clients"
               value="Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I"
               data-component="header">
    <br>
<p>Example: <code>Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-clients"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-clients"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>contact_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="contact_name"                data-endpoint="POSTapi-v1-clients"
               value="vevaycwwn"
               data-component="body">
    <br>
<p>Must not be greater than 20 characters. Example: <code>vevaycwwn</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>contact_email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="contact_email"                data-endpoint="POSTapi-v1-clients"
               value="lockman.lurline@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>lockman.lurline@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>contact_phone_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="contact_phone_number"                data-endpoint="POSTapi-v1-clients"
               value="dscgip"
               data-component="body">
    <br>
<p>Must not be greater than 15 characters. Example: <code>dscgip</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>company_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="company_name"                data-endpoint="POSTapi-v1-clients"
               value="vrxhxpijqfknxmswhnypfebj"
               data-component="body">
    <br>
<p>Must not be greater than 25 characters. Example: <code>vrxhxpijqfknxmswhnypfebj</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>company_address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="company_address"                data-endpoint="POSTapi-v1-clients"
               value="ksbbkvtgdpacejxmnfaf"
               data-component="body">
    <br>
<p>Must not be greater than 100 characters. Example: <code>ksbbkvtgdpacejxmnfaf</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>company_city</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="company_city"                data-endpoint="POSTapi-v1-clients"
               value="ytnoplmui"
               data-component="body">
    <br>
<p>Must not be greater than 25 characters. Example: <code>ytnoplmui</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>company_zip</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="company_zip"                data-endpoint="POSTapi-v1-clients"
               value="4"
               data-component="body">
    <br>
<p>Example: <code>4</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>company_vat</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="company_vat"                data-endpoint="POSTapi-v1-clients"
               value="7"
               data-component="body">
    <br>
<p>Example: <code>7</code></p>
        </div>
        </form>

                    <h2 id="client-management-GETapi-v1-clients--id-">Display the specified resource.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-clients--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://laravel-crm-1.loc/api/api/v1/clients/1" \
    --header "Authorization: Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laravel-crm-1.loc/api/api/v1/clients/1"
);

const headers = {
    "Authorization": "Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-clients--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 48
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;company_name&quot;: &quot;Aut&quot;,
    &quot;company_vat&quot;: 4862,
    &quot;address&quot;: &quot;73146 Tillmanport larson.francisca@hotmail.com 352-292-5068 169 Fletcher Ranch\nNew Norbert, ME 03500&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-clients--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-clients--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-clients--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-clients--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-clients--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-clients--id-" data-method="GET"
      data-path="api/v1/clients/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-clients--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-clients--id-"
                    onclick="tryItOut('GETapi-v1-clients--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-clients--id-"
                    onclick="cancelTryOut('GETapi-v1-clients--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-clients--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/clients/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-clients--id-"
               value="Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I"
               data-component="header">
    <br>
<p>Example: <code>Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-clients--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-clients--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-v1-clients--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the client. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="client-management-PUTapi-v1-clients--id-">Update the specified resource in storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-v1-clients--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://laravel-crm-1.loc/api/api/v1/clients/1" \
    --header "Authorization: Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"contact_name\": \"gzdvyerydcsbsmrrenoj\",
    \"contact_email\": \"lwatsica@example.com\",
    \"contact_phone_number\": \"dxlpmwwcp\",
    \"company_name\": \"fhecqrogmpjzznhn\",
    \"company_address\": \"iyddbkwampcpmviyduk\",
    \"company_city\": \"sdkdfwfhnwrqfwutbfej\",
    \"company_zip\": 6,
    \"company_vat\": 18
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laravel-crm-1.loc/api/api/v1/clients/1"
);

const headers = {
    "Authorization": "Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "contact_name": "gzdvyerydcsbsmrrenoj",
    "contact_email": "lwatsica@example.com",
    "contact_phone_number": "dxlpmwwcp",
    "company_name": "fhecqrogmpjzznhn",
    "company_address": "iyddbkwampcpmviyduk",
    "company_city": "sdkdfwfhnwrqfwutbfej",
    "company_zip": 6,
    "company_vat": 18
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-clients--id-">
</span>
<span id="execution-results-PUTapi-v1-clients--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-clients--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-clients--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-clients--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-clients--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-clients--id-" data-method="PUT"
      data-path="api/v1/clients/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-clients--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-clients--id-"
                    onclick="tryItOut('PUTapi-v1-clients--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-clients--id-"
                    onclick="cancelTryOut('PUTapi-v1-clients--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-clients--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/clients/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/clients/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PUTapi-v1-clients--id-"
               value="Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I"
               data-component="header">
    <br>
<p>Example: <code>Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-clients--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-clients--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-v1-clients--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the client. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>contact_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="contact_name"                data-endpoint="PUTapi-v1-clients--id-"
               value="gzdvyerydcsbsmrrenoj"
               data-component="body">
    <br>
<p>Must not be greater than 20 characters. Example: <code>gzdvyerydcsbsmrrenoj</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>contact_email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="contact_email"                data-endpoint="PUTapi-v1-clients--id-"
               value="lwatsica@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>lwatsica@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>contact_phone_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="contact_phone_number"                data-endpoint="PUTapi-v1-clients--id-"
               value="dxlpmwwcp"
               data-component="body">
    <br>
<p>Must not be greater than 15 characters. Example: <code>dxlpmwwcp</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>company_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="company_name"                data-endpoint="PUTapi-v1-clients--id-"
               value="fhecqrogmpjzznhn"
               data-component="body">
    <br>
<p>Must not be greater than 25 characters. Example: <code>fhecqrogmpjzznhn</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>company_address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="company_address"                data-endpoint="PUTapi-v1-clients--id-"
               value="iyddbkwampcpmviyduk"
               data-component="body">
    <br>
<p>Must not be greater than 100 characters. Example: <code>iyddbkwampcpmviyduk</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>company_city</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="company_city"                data-endpoint="PUTapi-v1-clients--id-"
               value="sdkdfwfhnwrqfwutbfej"
               data-component="body">
    <br>
<p>Must not be greater than 25 characters. Example: <code>sdkdfwfhnwrqfwutbfej</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>company_zip</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="company_zip"                data-endpoint="PUTapi-v1-clients--id-"
               value="6"
               data-component="body">
    <br>
<p>Example: <code>6</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>company_vat</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="company_vat"                data-endpoint="PUTapi-v1-clients--id-"
               value="18"
               data-component="body">
    <br>
<p>Example: <code>18</code></p>
        </div>
        </form>

                    <h2 id="client-management-DELETEapi-v1-clients--id-">Remove the specified resource from storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-clients--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://laravel-crm-1.loc/api/api/v1/clients/1" \
    --header "Authorization: Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laravel-crm-1.loc/api/api/v1/clients/1"
);

const headers = {
    "Authorization": "Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-clients--id-">
</span>
<span id="execution-results-DELETEapi-v1-clients--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-clients--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-clients--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-clients--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-clients--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-clients--id-" data-method="DELETE"
      data-path="api/v1/clients/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-clients--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-clients--id-"
                    onclick="tryItOut('DELETEapi-v1-clients--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-clients--id-"
                    onclick="cancelTryOut('DELETEapi-v1-clients--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-clients--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/clients/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-v1-clients--id-"
               value="Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I"
               data-component="header">
    <br>
<p>Example: <code>Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-clients--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-clients--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-v1-clients--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the client. Example: <code>1</code></p>
            </div>
                    </form>

                <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-status">HealthCheck</h2>

<p>
</p>



<span id="example-requests-GETapi-status">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://laravel-crm-1.loc/api/api/status" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laravel-crm-1.loc/api/api/status"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-status">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Everything is going to be OK&quot;,
    &quot;status&quot;: &quot;OK&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-status" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-status"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-status"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-status" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-status">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-status" data-method="GET"
      data-path="api/status"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-status', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-status"
                    onclick="tryItOut('GETapi-status');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-status"
                    onclick="cancelTryOut('GETapi-status');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-status"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/status</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-register">POST api/register</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://laravel-crm-1.loc/api/api/register" \
    --header "Authorization: Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"nqzkryfutykqonivydm\",
    \"email\": \"sunt\",
    \"password\": \"Q!uPN&amp;\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laravel-crm-1.loc/api/api/register"
);

const headers = {
    "Authorization": "Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "nqzkryfutykqonivydm",
    "email": "sunt",
    "password": "Q!uPN&amp;"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-register">
</span>
<span id="execution-results-POSTapi-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-register" data-method="POST"
      data-path="api/register"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-register"
                    onclick="tryItOut('POSTapi-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-register"
                    onclick="cancelTryOut('POSTapi-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-register"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-register"
               value="Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I"
               data-component="header">
    <br>
<p>Example: <code>Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-register"
               value="nqzkryfutykqonivydm"
               data-component="body">
    <br>
<p>Must be at least 5 characters. Must not be greater than 20 characters. Example: <code>nqzkryfutykqonivydm</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-register"
               value="sunt"
               data-component="body">
    <br>
<p>Example: <code>sunt</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-register"
               value="Q!uPN&"
               data-component="body">
    <br>
<p>Must be at least 8 characters. Must not be greater than 64 characters. Example: <code>Q!uPN&amp;</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-login">POST api/login</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://laravel-crm-1.loc/api/api/login" \
    --header "Authorization: Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"ut\",
    \"password\": \"est\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laravel-crm-1.loc/api/api/login"
);

const headers = {
    "Authorization": "Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "ut",
    "password": "est"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-login">
</span>
<span id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-login" data-method="POST"
      data-path="api/login"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-login"
                    onclick="tryItOut('POSTapi-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-login"
                    onclick="cancelTryOut('POSTapi-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-login"
               value="Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I"
               data-component="header">
    <br>
<p>Example: <code>Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-login"
               value="ut"
               data-component="body">
    <br>
<p>Example: <code>ut</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-login"
               value="est"
               data-component="body">
    <br>
<p>Example: <code>est</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-logout">POST api/logout</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://laravel-crm-1.loc/api/api/logout" \
    --header "Authorization: Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laravel-crm-1.loc/api/api/logout"
);

const headers = {
    "Authorization": "Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-logout">
</span>
<span id="execution-results-POSTapi-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-logout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-logout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-logout" data-method="POST"
      data-path="api/logout"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-logout"
                    onclick="tryItOut('POSTapi-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-logout"
                    onclick="cancelTryOut('POSTapi-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-logout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-logout"
               value="Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I"
               data-component="header">
    <br>
<p>Example: <code>Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                <h1 id="project-management">Project management</h1>

    <p>APIs for managing projects</p>

                                <h2 id="project-management-GETapi-v1-projects">Display a listing of the projects.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-projects">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://laravel-crm-1.loc/api/api/v1/projects" \
    --header "Authorization: Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laravel-crm-1.loc/api/api/v1/projects"
);

const headers = {
    "Authorization": "Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-projects">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 47
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;title&quot;: &quot;repellat&quot;,
        &quot;description&quot;: &quot;aliquid nihil provident et alias velit tenetur sapiente deserunt eveniet&quot;,
        &quot;user_id&quot;: 2,
        &quot;client_id&quot;: 3,
        &quot;deadline&quot;: &quot;05/26/1998&quot;,
        &quot;status&quot;: &quot;Closed&quot;
    },
    {
        &quot;title&quot;: &quot;blanditiis&quot;,
        &quot;description&quot;: &quot;dicta adipisci aut repudiandae ut perspiciatis voluptate totam voluptatum ea&quot;,
        &quot;user_id&quot;: 5,
        &quot;client_id&quot;: 1,
        &quot;deadline&quot;: &quot;10/20/2013&quot;,
        &quot;status&quot;: &quot;Open&quot;
    },
    {
        &quot;title&quot;: &quot;quam&quot;,
        &quot;description&quot;: &quot;laboriosam accusamus ducimus non in aut repudiandae error est magnam&quot;,
        &quot;user_id&quot;: 9,
        &quot;client_id&quot;: 7,
        &quot;deadline&quot;: &quot;08/27/1980&quot;,
        &quot;status&quot;: &quot;Open&quot;
    },
    {
        &quot;title&quot;: &quot;voluptas&quot;,
        &quot;description&quot;: &quot;sit quam sunt ducimus sed ut ut consectetur pariatur vel&quot;,
        &quot;user_id&quot;: 9,
        &quot;client_id&quot;: 2,
        &quot;deadline&quot;: &quot;10/07/2006&quot;,
        &quot;status&quot;: &quot;Open&quot;
    },
    {
        &quot;title&quot;: &quot;laudantium&quot;,
        &quot;description&quot;: &quot;non et et illum culpa quidem excepturi sint harum tempora&quot;,
        &quot;user_id&quot;: 6,
        &quot;client_id&quot;: 3,
        &quot;deadline&quot;: &quot;06/19/1975&quot;,
        &quot;status&quot;: &quot;In Progress&quot;
    },
    {
        &quot;title&quot;: &quot;aut&quot;,
        &quot;description&quot;: &quot;molestias placeat et labore praesentium amet quas voluptas dignissimos neque&quot;,
        &quot;user_id&quot;: 8,
        &quot;client_id&quot;: 9,
        &quot;deadline&quot;: &quot;04/18/1976&quot;,
        &quot;status&quot;: &quot;In Progress&quot;
    },
    {
        &quot;title&quot;: &quot;adipisci&quot;,
        &quot;description&quot;: &quot;nam autem rerum facere voluptatem adipisci et id eius quia&quot;,
        &quot;user_id&quot;: 1,
        &quot;client_id&quot;: 1,
        &quot;deadline&quot;: &quot;03/24/2004&quot;,
        &quot;status&quot;: &quot;In Progress&quot;
    },
    {
        &quot;title&quot;: &quot;sint&quot;,
        &quot;description&quot;: &quot;iusto consequatur ipsum nam optio ut dolorum quas dolore quo&quot;,
        &quot;user_id&quot;: 8,
        &quot;client_id&quot;: 2,
        &quot;deadline&quot;: &quot;01/05/1982&quot;,
        &quot;status&quot;: &quot;In Progress&quot;
    },
    {
        &quot;title&quot;: &quot;velit&quot;,
        &quot;description&quot;: &quot;dolor animi atque dignissimos soluta commodi ea voluptatem quaerat numquam&quot;,
        &quot;user_id&quot;: 2,
        &quot;client_id&quot;: 1,
        &quot;deadline&quot;: &quot;05/27/1991&quot;,
        &quot;status&quot;: &quot;Closed&quot;
    },
    {
        &quot;title&quot;: &quot;culpa&quot;,
        &quot;description&quot;: &quot;cumque voluptatum libero est est culpa voluptatem eaque adipisci pariatur&quot;,
        &quot;user_id&quot;: 7,
        &quot;client_id&quot;: 7,
        &quot;deadline&quot;: &quot;08/12/2021&quot;,
        &quot;status&quot;: &quot;In Progress&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-projects" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-projects"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-projects"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-projects" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-projects">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-projects" data-method="GET"
      data-path="api/v1/projects"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-projects', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-projects"
                    onclick="tryItOut('GETapi-v1-projects');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-projects"
                    onclick="cancelTryOut('GETapi-v1-projects');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-projects"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/projects</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-projects"
               value="Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I"
               data-component="header">
    <br>
<p>Example: <code>Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-projects"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-projects"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="project-management-POSTapi-v1-projects">Store a newly created resource in storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-projects">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://laravel-crm-1.loc/api/api/v1/projects" \
    --header "Authorization: Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"nijscafmdvxjxlpwkgsfsbsg\",
    \"description\": \"Enim aut est quia laborum aut maxime ea.\",
    \"user_id\": 3,
    \"client_id\": 3,
    \"deadline\": \"2023-07-02T17:31:14\",
    \"status\": \"ab\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laravel-crm-1.loc/api/api/v1/projects"
);

const headers = {
    "Authorization": "Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "nijscafmdvxjxlpwkgsfsbsg",
    "description": "Enim aut est quia laborum aut maxime ea.",
    "user_id": 3,
    "client_id": 3,
    "deadline": "2023-07-02T17:31:14",
    "status": "ab"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-projects">
</span>
<span id="execution-results-POSTapi-v1-projects" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-projects"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-projects"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-projects" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-projects">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-projects" data-method="POST"
      data-path="api/v1/projects"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-projects', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-projects"
                    onclick="tryItOut('POSTapi-v1-projects');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-projects"
                    onclick="cancelTryOut('POSTapi-v1-projects');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-projects"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/projects</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-projects"
               value="Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I"
               data-component="header">
    <br>
<p>Example: <code>Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-projects"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-projects"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-v1-projects"
               value="nijscafmdvxjxlpwkgsfsbsg"
               data-component="body">
    <br>
<p>Must be at least 5 characters. Must not be greater than 25 characters. Example: <code>nijscafmdvxjxlpwkgsfsbsg</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-v1-projects"
               value="Enim aut est quia laborum aut maxime ea."
               data-component="body">
    <br>
<p>Must be at least 10 characters. Must not be greater than 50 characters. Example: <code>Enim aut est quia laborum aut maxime ea.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="user_id"                data-endpoint="POSTapi-v1-projects"
               value="3"
               data-component="body">
    <br>
<p>Example: <code>3</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>client_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="client_id"                data-endpoint="POSTapi-v1-projects"
               value="3"
               data-component="body">
    <br>
<p>Example: <code>3</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>deadline</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="deadline"                data-endpoint="POSTapi-v1-projects"
               value="2023-07-02T17:31:14"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2023-07-02T17:31:14</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-v1-projects"
               value="ab"
               data-component="body">
    <br>
<p>Example: <code>ab</code></p>
        </div>
        </form>

                    <h2 id="project-management-GETapi-v1-projects--id-">Display the specified resource.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-projects--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://laravel-crm-1.loc/api/api/v1/projects/1" \
    --header "Authorization: Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laravel-crm-1.loc/api/api/v1/projects/1"
);

const headers = {
    "Authorization": "Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-projects--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 46
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;title&quot;: &quot;repellat&quot;,
    &quot;description&quot;: &quot;aliquid nihil provident et alias velit tenetur sapiente deserunt eveniet&quot;,
    &quot;user_id&quot;: 2,
    &quot;client_id&quot;: 3,
    &quot;deadline&quot;: &quot;05/26/1998&quot;,
    &quot;status&quot;: &quot;Closed&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-projects--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-projects--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-projects--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-projects--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-projects--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-projects--id-" data-method="GET"
      data-path="api/v1/projects/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-projects--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-projects--id-"
                    onclick="tryItOut('GETapi-v1-projects--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-projects--id-"
                    onclick="cancelTryOut('GETapi-v1-projects--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-projects--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/projects/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-projects--id-"
               value="Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I"
               data-component="header">
    <br>
<p>Example: <code>Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-projects--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-projects--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-v1-projects--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the project. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="project-management-PUTapi-v1-projects--id-">Update the specified resource in storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-v1-projects--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://laravel-crm-1.loc/api/api/v1/projects/1" \
    --header "Authorization: Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"nvnyejb\",
    \"description\": \"Voluptatem dolor fugiat quo ducimus odio deleniti.\",
    \"user_id\": 3,
    \"client_id\": 19,
    \"deadline\": \"2023-07-02T17:31:14\",
    \"status\": \"sed\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laravel-crm-1.loc/api/api/v1/projects/1"
);

const headers = {
    "Authorization": "Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "nvnyejb",
    "description": "Voluptatem dolor fugiat quo ducimus odio deleniti.",
    "user_id": 3,
    "client_id": 19,
    "deadline": "2023-07-02T17:31:14",
    "status": "sed"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-projects--id-">
</span>
<span id="execution-results-PUTapi-v1-projects--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-projects--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-projects--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-projects--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-projects--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-projects--id-" data-method="PUT"
      data-path="api/v1/projects/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-projects--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-projects--id-"
                    onclick="tryItOut('PUTapi-v1-projects--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-projects--id-"
                    onclick="cancelTryOut('PUTapi-v1-projects--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-projects--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/projects/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/projects/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PUTapi-v1-projects--id-"
               value="Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I"
               data-component="header">
    <br>
<p>Example: <code>Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-projects--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-projects--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-v1-projects--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the project. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="PUTapi-v1-projects--id-"
               value="nvnyejb"
               data-component="body">
    <br>
<p>Must be at least 5 characters. Must not be greater than 25 characters. Example: <code>nvnyejb</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-v1-projects--id-"
               value="Voluptatem dolor fugiat quo ducimus odio deleniti."
               data-component="body">
    <br>
<p>Must be at least 10 characters. Must not be greater than 50 characters. Example: <code>Voluptatem dolor fugiat quo ducimus odio deleniti.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="user_id"                data-endpoint="PUTapi-v1-projects--id-"
               value="3"
               data-component="body">
    <br>
<p>Example: <code>3</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>client_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="client_id"                data-endpoint="PUTapi-v1-projects--id-"
               value="19"
               data-component="body">
    <br>
<p>Example: <code>19</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>deadline</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="deadline"                data-endpoint="PUTapi-v1-projects--id-"
               value="2023-07-02T17:31:14"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2023-07-02T17:31:14</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-v1-projects--id-"
               value="sed"
               data-component="body">
    <br>
<p>Example: <code>sed</code></p>
        </div>
        </form>

                    <h2 id="project-management-DELETEapi-v1-projects--id-">Remove the specified resource from storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-projects--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://laravel-crm-1.loc/api/api/v1/projects/1" \
    --header "Authorization: Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laravel-crm-1.loc/api/api/v1/projects/1"
);

const headers = {
    "Authorization": "Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-projects--id-">
</span>
<span id="execution-results-DELETEapi-v1-projects--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-projects--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-projects--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-projects--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-projects--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-projects--id-" data-method="DELETE"
      data-path="api/v1/projects/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-projects--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-projects--id-"
                    onclick="tryItOut('DELETEapi-v1-projects--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-projects--id-"
                    onclick="cancelTryOut('DELETEapi-v1-projects--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-projects--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/projects/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-v1-projects--id-"
               value="Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I"
               data-component="header">
    <br>
<p>Example: <code>Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-projects--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-projects--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-v1-projects--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the project. Example: <code>1</code></p>
            </div>
                    </form>

                <h1 id="task-management">Task management</h1>

    <p>APIs for managing tasks</p>

                                <h2 id="task-management-GETapi-v1-tasks">Display a listing of the tasks.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-tasks">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://laravel-crm-1.loc/api/api/v1/tasks" \
    --header "Authorization: Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laravel-crm-1.loc/api/api/v1/tasks"
);

const headers = {
    "Authorization": "Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-tasks">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 45
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;title&quot;: &quot;Ua0pD&quot;,
        &quot;description&quot;: &quot;tNBBCFB6udvjcpqJfU3wCV3mwkcc45FJrI6aLkQF3qpeiKHQCB6qxEWaTKspnCVHIDecQb7gBONTCVmi&quot;,
        &quot;user_id&quot;: 3,
        &quot;client_id&quot;: 8,
        &quot;project_id&quot;: 5,
        &quot;deadline&quot;: &quot;05/07/1978&quot;,
        &quot;status&quot;: &quot;In Progress&quot;
    },
    {
        &quot;title&quot;: &quot;VAe6RFhKBbr0uE4K&quot;,
        &quot;description&quot;: &quot;KoedAz3qcl6Kcsm6HfcPqmYqxDxfxEX&quot;,
        &quot;user_id&quot;: 5,
        &quot;client_id&quot;: 7,
        &quot;project_id&quot;: 10,
        &quot;deadline&quot;: &quot;01/15/1988&quot;,
        &quot;status&quot;: &quot;Closed&quot;
    },
    {
        &quot;title&quot;: &quot;nMFeG&quot;,
        &quot;description&quot;: &quot;aAeAproIRFPTghiMn2h92Kgz64SdK7Koe5W4tdqzvtRI9NEiLI5InmiMuB9Gildll3vZnaC0b2Fm&quot;,
        &quot;user_id&quot;: 3,
        &quot;client_id&quot;: 9,
        &quot;project_id&quot;: 2,
        &quot;deadline&quot;: &quot;09/28/1983&quot;,
        &quot;status&quot;: &quot;Closed&quot;
    },
    {
        &quot;title&quot;: &quot;QAddwixzC&quot;,
        &quot;description&quot;: &quot;vfZxbiCWIKMBONkvYicULYmhMoovJZA8t4yoDZfMwsW5hISQUcBymK4&quot;,
        &quot;user_id&quot;: 7,
        &quot;client_id&quot;: 3,
        &quot;project_id&quot;: 10,
        &quot;deadline&quot;: &quot;03/16/1993&quot;,
        &quot;status&quot;: &quot;Closed&quot;
    },
    {
        &quot;title&quot;: &quot;8rqPQVlN&quot;,
        &quot;description&quot;: &quot;4qmqzKoY5c7aWnunr1DAf2GRsLWUHWPfXEWsOuKyV4ZbOJaxYb8HWjo4BRD7b0pjT8t&quot;,
        &quot;user_id&quot;: 7,
        &quot;client_id&quot;: 7,
        &quot;project_id&quot;: 10,
        &quot;deadline&quot;: &quot;06/23/1992&quot;,
        &quot;status&quot;: &quot;Closed&quot;
    },
    {
        &quot;title&quot;: &quot;uEGLSUTlf&quot;,
        &quot;description&quot;: &quot;YKlakXV2Mnn8GlZWQkUflSyWFdiRkIe287yxbYziZrpruDukrpb9NyigsJJiccTwW4BFFc2pxN397OrdItpqPOA3HoU08Y6MiehtklojuSUvXbX&quot;,
        &quot;user_id&quot;: 8,
        &quot;client_id&quot;: 9,
        &quot;project_id&quot;: 10,
        &quot;deadline&quot;: &quot;01/08/2022&quot;,
        &quot;status&quot;: &quot;Closed&quot;
    },
    {
        &quot;title&quot;: &quot;P9ej4dWrWdGMZbReLM&quot;,
        &quot;description&quot;: &quot;tcQ6l30mrfBTfDCUTkJlJjxEMmnGlI9UNthgJ1K4&quot;,
        &quot;user_id&quot;: 7,
        &quot;client_id&quot;: 9,
        &quot;project_id&quot;: 6,
        &quot;deadline&quot;: &quot;10/21/2014&quot;,
        &quot;status&quot;: &quot;Closed&quot;
    },
    {
        &quot;title&quot;: &quot;QqdDkARAo&quot;,
        &quot;description&quot;: &quot;fbYNX8xWkjl8fimOjz62AviG6NgGbWlA7M12SOuJpz0avakavNwPpZpNhmFAoBvuviqnATiF78AWZgtKIqZxvEk1EsnQHGUEWz43aA7SQzZx4vrF3jG0z5&quot;,
        &quot;user_id&quot;: 9,
        &quot;client_id&quot;: 10,
        &quot;project_id&quot;: 9,
        &quot;deadline&quot;: &quot;05/08/1971&quot;,
        &quot;status&quot;: &quot;Open&quot;
    },
    {
        &quot;title&quot;: &quot;ZqsY4jesUHjaVKg8Il&quot;,
        &quot;description&quot;: &quot;UzQLdf1eTOrypjy7PdVx4a4wyK9ehAkCdyIbT3MoGDZhgpuB8do4&quot;,
        &quot;user_id&quot;: 2,
        &quot;client_id&quot;: 8,
        &quot;project_id&quot;: 9,
        &quot;deadline&quot;: &quot;02/21/1981&quot;,
        &quot;status&quot;: &quot;In Progress&quot;
    },
    {
        &quot;title&quot;: &quot;XdMxGr2HcNLOSZZodRTMTF&quot;,
        &quot;description&quot;: &quot;YVW2eXXvR6Wl06jO6bs1hVcOFO6pBC1cCS5ZczsH9fVuKNMTHRcwNpvoLnBryc7lQlCFx635j&quot;,
        &quot;user_id&quot;: 3,
        &quot;client_id&quot;: 3,
        &quot;project_id&quot;: 4,
        &quot;deadline&quot;: &quot;11/17/1985&quot;,
        &quot;status&quot;: &quot;Closed&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-tasks" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-tasks"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-tasks"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-tasks" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-tasks">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-tasks" data-method="GET"
      data-path="api/v1/tasks"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-tasks', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-tasks"
                    onclick="tryItOut('GETapi-v1-tasks');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-tasks"
                    onclick="cancelTryOut('GETapi-v1-tasks');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-tasks"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/tasks</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-tasks"
               value="Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I"
               data-component="header">
    <br>
<p>Example: <code>Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-tasks"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-tasks"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="task-management-POSTapi-v1-tasks">Store a newly created resource in storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-tasks">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://laravel-crm-1.loc/api/api/v1/tasks" \
    --header "Authorization: Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"mzwkhgctyvfggzow\",
    \"description\": \"Mollitia unde quod ut ut et.\",
    \"user_id\": 10,
    \"client_id\": 8,
    \"project_id\": 2,
    \"deadline\": \"2023-07-02T17:31:14\",
    \"status\": \"explicabo\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laravel-crm-1.loc/api/api/v1/tasks"
);

const headers = {
    "Authorization": "Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "mzwkhgctyvfggzow",
    "description": "Mollitia unde quod ut ut et.",
    "user_id": 10,
    "client_id": 8,
    "project_id": 2,
    "deadline": "2023-07-02T17:31:14",
    "status": "explicabo"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-tasks">
</span>
<span id="execution-results-POSTapi-v1-tasks" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-tasks"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-tasks"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-tasks" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-tasks">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-tasks" data-method="POST"
      data-path="api/v1/tasks"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-tasks', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-tasks"
                    onclick="tryItOut('POSTapi-v1-tasks');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-tasks"
                    onclick="cancelTryOut('POSTapi-v1-tasks');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-tasks"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/tasks</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-tasks"
               value="Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I"
               data-component="header">
    <br>
<p>Example: <code>Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-tasks"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-tasks"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-v1-tasks"
               value="mzwkhgctyvfggzow"
               data-component="body">
    <br>
<p>Must be at least 5 characters. Must not be greater than 25 characters. Example: <code>mzwkhgctyvfggzow</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-v1-tasks"
               value="Mollitia unde quod ut ut et."
               data-component="body">
    <br>
<p>Must be at least 25 characters. Must not be greater than 125 characters. Example: <code>Mollitia unde quod ut ut et.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="user_id"                data-endpoint="POSTapi-v1-tasks"
               value="10"
               data-component="body">
    <br>
<p>Example: <code>10</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>client_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="client_id"                data-endpoint="POSTapi-v1-tasks"
               value="8"
               data-component="body">
    <br>
<p>Example: <code>8</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>project_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="project_id"                data-endpoint="POSTapi-v1-tasks"
               value="2"
               data-component="body">
    <br>
<p>Example: <code>2</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>deadline</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="deadline"                data-endpoint="POSTapi-v1-tasks"
               value="2023-07-02T17:31:14"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2023-07-02T17:31:14</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-v1-tasks"
               value="explicabo"
               data-component="body">
    <br>
<p>Example: <code>explicabo</code></p>
        </div>
        </form>

                    <h2 id="task-management-GETapi-v1-tasks--id-">Display the specified resource.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-tasks--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://laravel-crm-1.loc/api/api/v1/tasks/1" \
    --header "Authorization: Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laravel-crm-1.loc/api/api/v1/tasks/1"
);

const headers = {
    "Authorization": "Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-tasks--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 44
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;title&quot;: &quot;Ua0pD&quot;,
    &quot;description&quot;: &quot;tNBBCFB6udvjcpqJfU3wCV3mwkcc45FJrI6aLkQF3qpeiKHQCB6qxEWaTKspnCVHIDecQb7gBONTCVmi&quot;,
    &quot;user_id&quot;: 3,
    &quot;client_id&quot;: 8,
    &quot;project_id&quot;: 5,
    &quot;deadline&quot;: &quot;05/07/1978&quot;,
    &quot;status&quot;: &quot;In Progress&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-tasks--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-tasks--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-tasks--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-tasks--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-tasks--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-tasks--id-" data-method="GET"
      data-path="api/v1/tasks/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-tasks--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-tasks--id-"
                    onclick="tryItOut('GETapi-v1-tasks--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-tasks--id-"
                    onclick="cancelTryOut('GETapi-v1-tasks--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-tasks--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/tasks/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-tasks--id-"
               value="Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I"
               data-component="header">
    <br>
<p>Example: <code>Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-tasks--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-tasks--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-v1-tasks--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the task. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="task-management-PUTapi-v1-tasks--id-">Update the specified resource in storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-v1-tasks--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://laravel-crm-1.loc/api/api/v1/tasks/1" \
    --header "Authorization: Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"wjuk\",
    \"description\": \"Itaque laboriosam tenetur vel dolor et quo nemo.\",
    \"user_id\": 18,
    \"client_id\": 16,
    \"project_id\": 10,
    \"deadline\": \"2023-07-02T17:31:14\",
    \"status\": \"dolores\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laravel-crm-1.loc/api/api/v1/tasks/1"
);

const headers = {
    "Authorization": "Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "wjuk",
    "description": "Itaque laboriosam tenetur vel dolor et quo nemo.",
    "user_id": 18,
    "client_id": 16,
    "project_id": 10,
    "deadline": "2023-07-02T17:31:14",
    "status": "dolores"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-tasks--id-">
</span>
<span id="execution-results-PUTapi-v1-tasks--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-tasks--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-tasks--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-tasks--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-tasks--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-tasks--id-" data-method="PUT"
      data-path="api/v1/tasks/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-tasks--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-tasks--id-"
                    onclick="tryItOut('PUTapi-v1-tasks--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-tasks--id-"
                    onclick="cancelTryOut('PUTapi-v1-tasks--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-tasks--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/tasks/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/tasks/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PUTapi-v1-tasks--id-"
               value="Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I"
               data-component="header">
    <br>
<p>Example: <code>Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-tasks--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-tasks--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-v1-tasks--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the task. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="PUTapi-v1-tasks--id-"
               value="wjuk"
               data-component="body">
    <br>
<p>Must be at least 5 characters. Must not be greater than 25 characters. Example: <code>wjuk</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-v1-tasks--id-"
               value="Itaque laboriosam tenetur vel dolor et quo nemo."
               data-component="body">
    <br>
<p>Must be at least 25 characters. Must not be greater than 125 characters. Example: <code>Itaque laboriosam tenetur vel dolor et quo nemo.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="user_id"                data-endpoint="PUTapi-v1-tasks--id-"
               value="18"
               data-component="body">
    <br>
<p>Example: <code>18</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>client_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="client_id"                data-endpoint="PUTapi-v1-tasks--id-"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>project_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="project_id"                data-endpoint="PUTapi-v1-tasks--id-"
               value="10"
               data-component="body">
    <br>
<p>Example: <code>10</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>deadline</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="deadline"                data-endpoint="PUTapi-v1-tasks--id-"
               value="2023-07-02T17:31:14"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2023-07-02T17:31:14</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-v1-tasks--id-"
               value="dolores"
               data-component="body">
    <br>
<p>Example: <code>dolores</code></p>
        </div>
        </form>

                    <h2 id="task-management-DELETEapi-v1-tasks--id-">Remove the specified resource from storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-tasks--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://laravel-crm-1.loc/api/api/v1/tasks/1" \
    --header "Authorization: Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laravel-crm-1.loc/api/api/v1/tasks/1"
);

const headers = {
    "Authorization": "Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-tasks--id-">
</span>
<span id="execution-results-DELETEapi-v1-tasks--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-tasks--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-tasks--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-tasks--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-tasks--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-tasks--id-" data-method="DELETE"
      data-path="api/v1/tasks/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-tasks--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-tasks--id-"
                    onclick="tryItOut('DELETEapi-v1-tasks--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-tasks--id-"
                    onclick="cancelTryOut('DELETEapi-v1-tasks--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-tasks--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/tasks/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-v1-tasks--id-"
               value="Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I"
               data-component="header">
    <br>
<p>Example: <code>Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-tasks--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-tasks--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-v1-tasks--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the task. Example: <code>1</code></p>
            </div>
                    </form>

                <h1 id="user-management">User management</h1>

    <p>APIs for managing users</p>

                                <h2 id="user-management-GETapi-v1-users">Display a listing of the users.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-users">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://laravel-crm-1.loc/api/api/v1/users" \
    --header "Authorization: Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laravel-crm-1.loc/api/api/v1/users"
);

const headers = {
    "Authorization": "Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-users">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 51
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;tests&quot;,
        &quot;email&quot;: &quot;dallin84@example.net&quot;
    },
    {
        &quot;id&quot;: 2,
        &quot;name&quot;: &quot;Cortney Hodkiewicz&quot;,
        &quot;email&quot;: &quot;nils70@example.org&quot;
    },
    {
        &quot;id&quot;: 3,
        &quot;name&quot;: &quot;Leanna Ryan DVM&quot;,
        &quot;email&quot;: &quot;kiehn.lavada@example.org&quot;
    },
    {
        &quot;id&quot;: 4,
        &quot;name&quot;: &quot;Dr. Deonte Murray&quot;,
        &quot;email&quot;: &quot;beahan.shayna@example.org&quot;
    },
    {
        &quot;id&quot;: 5,
        &quot;name&quot;: &quot;Gay Klocko&quot;,
        &quot;email&quot;: &quot;darrion21@example.com&quot;
    },
    {
        &quot;id&quot;: 6,
        &quot;name&quot;: &quot;Perry Huel&quot;,
        &quot;email&quot;: &quot;bauch.josefina@example.org&quot;
    },
    {
        &quot;id&quot;: 7,
        &quot;name&quot;: &quot;Neal Gusikowski&quot;,
        &quot;email&quot;: &quot;wayne.hackett@example.com&quot;
    },
    {
        &quot;id&quot;: 8,
        &quot;name&quot;: &quot;Ms. Pearl Kautzer II&quot;,
        &quot;email&quot;: &quot;evelyn.keeling@example.org&quot;
    },
    {
        &quot;id&quot;: 9,
        &quot;name&quot;: &quot;Garrison Collier II&quot;,
        &quot;email&quot;: &quot;cecil.mills@example.com&quot;
    },
    {
        &quot;id&quot;: 10,
        &quot;name&quot;: &quot;Retta Kihn IV&quot;,
        &quot;email&quot;: &quot;willa.hammes@example.net&quot;
    },
    {
        &quot;id&quot;: 11,
        &quot;name&quot;: &quot;Tests&quot;,
        &quot;email&quot;: &quot;hes2l3l2s2o22@fdfsa.com122&quot;
    },
    {
        &quot;id&quot;: 13,
        &quot;name&quot;: &quot;Tests&quot;,
        &quot;email&quot;: &quot;hes2l32so22@fdfsa.com122&quot;
    },
    {
        &quot;id&quot;: 14,
        &quot;name&quot;: &quot;Tests&quot;,
        &quot;email&quot;: &quot;hes2l3so22@fdfsa.com122&quot;
    },
    {
        &quot;id&quot;: 15,
        &quot;name&quot;: &quot;Tests&quot;,
        &quot;email&quot;: &quot;hes2l3o22@fdfsa.com122&quot;
    },
    {
        &quot;id&quot;: 16,
        &quot;name&quot;: &quot;Tests&quot;,
        &quot;email&quot;: &quot;hes2lo22@fdfsa.com122&quot;
    },
    {
        &quot;id&quot;: 17,
        &quot;name&quot;: &quot;Tests&quot;,
        &quot;email&quot;: &quot;hes2lo2@fdfsa.com122&quot;
    },
    {
        &quot;id&quot;: 18,
        &quot;name&quot;: &quot;Tests&quot;,
        &quot;email&quot;: &quot;test1@fdfsa.com122&quot;
    },
    {
        &quot;id&quot;: 19,
        &quot;name&quot;: &quot;Tests&quot;,
        &quot;email&quot;: &quot;test12@fdfsa.com122&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-users" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-users"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-users"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-users">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-users" data-method="GET"
      data-path="api/v1/users"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-users', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-users"
                    onclick="tryItOut('GETapi-v1-users');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-users"
                    onclick="cancelTryOut('GETapi-v1-users');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-users"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/users</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-users"
               value="Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I"
               data-component="header">
    <br>
<p>Example: <code>Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="user-management-POSTapi-v1-users">Store a newly created user.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-users">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://laravel-crm-1.loc/api/api/v1/users" \
    --header "Authorization: Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"Alexandro\",
    \"email\": \"greta.kris@example.net\",
    \"password\": \"FS*w=j\",
    \"role_id\": \"3\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laravel-crm-1.loc/api/api/v1/users"
);

const headers = {
    "Authorization": "Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "Alexandro",
    "email": "greta.kris@example.net",
    "password": "FS*w=j",
    "role_id": "3"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-users">
</span>
<span id="execution-results-POSTapi-v1-users" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-users"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-users"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-users">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-users" data-method="POST"
      data-path="api/v1/users"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-users', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-users"
                    onclick="tryItOut('POSTapi-v1-users');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-users"
                    onclick="cancelTryOut('POSTapi-v1-users');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-users"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/users</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-users"
               value="Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I"
               data-component="header">
    <br>
<p>Example: <code>Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>The</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-v1-users"
               value="Alexandro"
               data-component="body">
    <br>
<p>name of user. Example: <code>Alexandro</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-v1-users"
               value="greta.kris@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>greta.kris@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-v1-users"
               value="FS*w=j"
               data-component="body">
    <br>
<p>Must be at least 8 characters. Must not be greater than 64 characters. Example: <code>FS*w=j</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>role_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="role_id"                data-endpoint="POSTapi-v1-users"
               value="3"
               data-component="body">
    <br>
<p>Must be one of <code>1</code>, <code>2</code>, or <code>3</code>. Example: <code>3</code></p>
        </div>
        </form>

                    <h2 id="user-management-GETapi-v1-users--id-">Display the user.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://laravel-crm-1.loc/api/api/v1/users/1" \
    --header "Authorization: Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laravel-crm-1.loc/api/api/v1/users/1"
);

const headers = {
    "Authorization": "Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-users--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 50
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;name&quot;: &quot;tests&quot;,
    &quot;email&quot;: &quot;dallin84@example.net&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, User not found):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unable to locate the user you requested.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-users--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-users--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-users--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-users--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-users--id-" data-method="GET"
      data-path="api/v1/users/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-users--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-users--id-"
                    onclick="tryItOut('GETapi-v1-users--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-users--id-"
                    onclick="cancelTryOut('GETapi-v1-users--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-users--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/users/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-users--id-"
               value="Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I"
               data-component="header">
    <br>
<p>Example: <code>Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-v1-users--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="user-management-PUTapi-v1-users--id-">Update the specified resource in storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-v1-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://laravel-crm-1.loc/api/api/v1/users/1" \
    --header "Authorization: Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"pyughpvbaaktswtnjsjgsn\",
    \"email\": \"windler.daphnee@example.com\",
    \"role_id\": \"3\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laravel-crm-1.loc/api/api/v1/users/1"
);

const headers = {
    "Authorization": "Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "pyughpvbaaktswtnjsjgsn",
    "email": "windler.daphnee@example.com",
    "role_id": "3"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-users--id-">
</span>
<span id="execution-results-PUTapi-v1-users--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-users--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-users--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-users--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-users--id-" data-method="PUT"
      data-path="api/v1/users/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-users--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-users--id-"
                    onclick="tryItOut('PUTapi-v1-users--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-users--id-"
                    onclick="cancelTryOut('PUTapi-v1-users--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-users--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/users/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/users/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PUTapi-v1-users--id-"
               value="Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I"
               data-component="header">
    <br>
<p>Example: <code>Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-v1-users--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-v1-users--id-"
               value="pyughpvbaaktswtnjsjgsn"
               data-component="body">
    <br>
<p>Must be at least 5 characters. Must not be greater than 25 characters. Example: <code>pyughpvbaaktswtnjsjgsn</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="PUTapi-v1-users--id-"
               value="windler.daphnee@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>windler.daphnee@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>role_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="role_id"                data-endpoint="PUTapi-v1-users--id-"
               value="3"
               data-component="body">
    <br>
<p>Must be one of <code>1</code>, <code>2</code>, or <code>3</code>. Example: <code>3</code></p>
        </div>
        </form>

                    <h2 id="user-management-DELETEapi-v1-users--id-">Remove the specified resource from storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://laravel-crm-1.loc/api/api/v1/users/1" \
    --header "Authorization: Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laravel-crm-1.loc/api/api/v1/users/1"
);

const headers = {
    "Authorization": "Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-users--id-">
</span>
<span id="execution-results-DELETEapi-v1-users--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-users--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-users--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-users--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-users--id-" data-method="DELETE"
      data-path="api/v1/users/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-users--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-users--id-"
                    onclick="tryItOut('DELETEapi-v1-users--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-users--id-"
                    onclick="cancelTryOut('DELETEapi-v1-users--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-users--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/users/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-v1-users--id-"
               value="Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I"
               data-component="header">
    <br>
<p>Example: <code>Bearer 1|rVijT8wYDYz8bpfdFfwbH3GQbdrSk3J5liQm8W7I</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-v1-users--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>1</code></p>
            </div>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
