<article class="docs-article" id="introduction">
				    <header class="docs-header">
					    <h1 class="docs-heading">Introduction <span class="docs-time">Last updated: 2019-06-01</span></h1>
                        <section class="docs-intro">
                                <p>Chat app is non-profit app which provides chat functionality with friends and family. This Chat Api can be used to integrate your chat app in your desired website easy and fast.</p>
                        </section><!--//docs-intro-->
						
				    </header>
				    <section class="docs-section" id="callapijs">
						<h2 class="section-heading">API with using Vanilla JS:</h2>
                        <div class="row">
                            <div class="col-6">
                            <h5 >GET:</h5>
                        <div class="docs-code-block card mb-3"> 
<pre>
    const data = { username: 'example' };
    
    var requestOptions = {
        method: 'GET',
        body: JSON.stringify(data),
    };

    fetch("https://your-request-api-link", requestOptions)
    .then(response => response.text())
    .then(result => {
        console.log(result)
        //your code here
    })
    .catch(error => console.log('error', error)); </pre>
                        </div>

                            </div>
                            <div class="col-6">
                                
                        <h5 >POST:</h5>
                        <div class="docs-code-block card mb-3"> 
<pre>
    const data = { username: 'example' };

    fetch('https://your-request-api-link', {
    method: 'POST',
    body: JSON.stringify(data),
    })
    .then((response) => response.json())
    .then((data) => {
        console.log('Success:', data);
            //your code here
    })

    .catch((error) => {
        console.error('Error:', error);
    }); </pre>
                        </div>
                            </div>
                        </div>
						

					</section>
                    <section class="docs-section" id="callapisquery">
						<h2 class="section-heading">API fetch Code Example using jQuery:</h2>
                        <div class="row">
                            <div class="col-6">
                            <h5 >GET:</h5>
                        <div class="docs-code-block card mb-3"> 
<pre>
    $.ajax(
        "url": "https://your-request-api-link",
        "method": "GET",
        "data" : { username : 'example' }
        ).done(function (response) {
        console.log(response);
        //your code here
    });
</pre>
                               
                        </div>
                            </div>
                            <div class="col-6">
                                
                        <h5 >POST:</h5>
                        <div class="docs-code-block card mb-3"> 
<pre>
    $.ajax(
        "url": "https://your-request-api-link",
        "method": "POST",
        "data" : { username : 'example' }
        ).done(function (response) {
        console.log(response);
        //your code here
    });
</pre>
                            </div>
                        </div>
						
                        <p>Add this link above your script : <br><code>&#x3C;script src=&#x22;//https://code.jquery.com/jquery-3.6.1.min.js&#x22;&#x3E; &#x3C;/script&#x3E;</code></p>
                               
                        </div>
					</section>
                    <section class="docs-section" id="response">
						<h2 class="section-heading">Response Example:</h2>
                            <div class="docs-code-block" >
                                <pre class="shadow-lg rounded"><code class="json hljs">
[
    {
        <span class="hljs-attr">"title"</span>: <span class="hljs-string">"apples"</span>,
        <span class="hljs-attr">"count"</span>: [<span class="hljs-number">12000</span>, <span class="hljs-number">20000</span>],
        <span class="hljs-attr">"description"</span>: {<span class="hljs-attr">"text"</span>: <span class="hljs-string">"..."</span>, <span class="hljs-attr">"sensitive"</span>: <span class="hljs-literal">false</span>}
    },
    {
        <span class="hljs-attr">"title"</span>: <span class="hljs-string">"oranges"</span>,
        <span class="hljs-attr">"count"</span>: [<span class="hljs-number">17500</span>, <span class="hljs-literal">null</span>],
        <span class="hljs-attr">"description"</span>: {<span class="hljs-attr">"text"</span>: <span class="hljs-string">"..."</span>, <span class="hljs-attr">"sensitive"</span>: <span class="hljs-literal">false</span>}
    }
]
</code></pre>
                            </div>
					</section>

	
			    </article>