<?php

$content='Talk about your understanding of closures

Using closures designed primarily to private methods and variables. Closure advantage of global variables are avoided contamination, the disadvantage is the closure will be permanent memory, the memory usage increases, improper use is likely to cause a memory leak.

Closures have three characteristics:

1. Function 2. The internal function nested function can refer to external parameters and variables 3. The parameters and variables will not be garbage collection mechanism Recycling
You talk about the shortcomings of Cookie

cookie Although persistent client data to provide a convenient, sharing the burden of server storage, but there are still many limitations. Generates up to 20 under each specific domain: the first cookie

1.IE6 or earlier up to 20 cookie 
2.IE7 later version and last may have 50 cookie. 
3.Firefox up to 50 cookie 
4.chrome and Safari does not do hard limit
IE and Opera will clean up the least recently used cookie , Firefox will randomly to clean cookie .

cookie maximum of approximately 4096 bytes, for compatibility, generally can not exceed 4095 bytes.

IE can provide a way to store persistent user data, called UserData , from IE5.0 has supported. Each data up to 128K, under each domain up to 1M. The persistent data in the cache, if not cleaned the cache, it will always exist.

Advantages: high scalability and availability

1. Good programming, control the size of the session cookie stored in the object. 
2. encryption and secure transmission technology (SSL), to reduce the possibility of cookie to crack. 
3. Only non-sensitive data is stored in a cookie, even if stolen will not have significant losses. 
4. Control cookie lifetime, so it will not always be effective. Theft are likely to get an expired cookie.
Disadvantages:

1.`Cookie` limit the number and length. Each domain can have a maximum of 20 cookie, each cookie length can not exceed 4KB, otherwise it will be truncated. 

2. The security issues. If the cookie is intercepted, that person can get all the session information. Even if encryption is also unhelpful, because Interceptor does not need to know the meaning of the cookie, cookie forwarding as long as he can achieve their goals. 

3. Some state can not be stored in the client. For example, in order to prevent duplicate submission form, we need to save a counter on the server side. If we put this counter is stored in the client, then it will not achieve any effect.
Browser local storage

In later versions of the browser, JS provides sessionStorage and globalStorage . In HTML5 provides in localStorage to replace globalStorage .

html5 The Web Storage includes two storage methods: sessionStorage and localStorage .

sessionStorage data stored locally for a session (session) in which the data only in the same session of the page to access data, and when the end of the session also will be destroyed. So sessionStorage not a persistent local storage, just session-level storage.

And localStorage for persistent local storage, unless the initiative to remove the data, or the data is never out of date.

the difference between web storage and a cookie

Web Storage concept and cookie similar, except that it is designed for higher-capacity storage. Cookie size is limited, and every time you request a new page when the Cookie will be sent in the past, so that virtually waste bandwidth, another cookie also need to specify the scope, not cross-domain calls.

In addition, Web Storage has setItem, getItem, removeItem, clear methods, unlike the cookie front-end developers need their own package setCookie, getCookie .

But the cookie is not indispensable: cookie 's role is to interact with the server as HTTP part of the specification exists, and Web Storage simply to the local "store" raw data

Browser support in addition to IE7 and below are not supported, other standard browsers fully support (ie and FF need to run a web server in), it is worth mentioning that IE always good things, such as IE7, IE6 in the userData fact is javascript local storage solutions. By simple code package can be unified to all the browsers support Web storage .

localStorage and sessionStorage have the same method of operation, for example setItem, getItem and removeItem etc.

cookie and session distinction:

1, cookie data is stored on the customer's browser, session data on the server. 
 2, cookie is not very safe, others can be analyzed at a local store and COOKIE COOKIE cheat 
    should be used taking into account the security session. 
 3, session will be within a certain time saved on the server. When accessing the increase, it would be more occupy the performance of your server 
     consider to reduce server performance, you should use COOKIE. 
 4, the data stored in a single cookie can not exceed 4K, many browsers are limited to a maximum of one site to save 20 cookie. 
 5, so personal recommendations: 
    the login information and other important information is stored as SESSION 
    additional information, if necessary, it can be placed in COOKIE
CSS-related issues

display: none and visibility: hidden difference?

display: none to hide the corresponding elements in the document layout is no longer space allocated to it, it is the element of each side will be closed, 
on when he never existed. 

visibility: hidden hides the corresponding elements, but still retain the original layout of the space in the document.
The difference in the link andimport CSS is?

(1) link belong to HTML tags, and CSSimport is provided; 
(2) the page is loaded, link will also be loaded, but referencesimport CSS will wait until the page is finished loading reloading; 
(3) Import only to recognize in IE5 or more, while link is HTML tag, no compatibility issues; 
style right (4) linkimport way of weight above the weight of heavy.
Similarities and Differences between absolute and float attributes: position

A: common: 
inline element set `float` and` absolute` property allows elements from the document flow, and can set its width and height. 

B: Different point: 
float will still occupy the position, position overrides other elements in the document flow.
Introduce the box-sizing property?

box-sizing property is primarily used to control element analytical model box model. The default value is content-Box .

content-Box : Let element to maintain the standard W3C box model. Width / height of the element / height is determined by the border + padding + content width, set width / height attribute refers to the content portion of the width / height

border-Box : Let element to maintain the traditional box model IE (IE6 and IE6 ~ 7 the following versions of quirks mode). Set width / height attribute refers to the border + padding + content

Under standard browser, according to W3C box model specification analysis, once the border or modify the elements within distance, it will affect the size of the box element, you have to recalculate the box the size of the elements, thus affecting the layout of the entire page.

CSS selectors are there? Which attributes can be inherited? Priority algorithm calculated? Added CSS3 pseudo-classes are those?

1.id selector (# myid) 
2. Class selector (.myclassname) 
3. Tag selectors (div, h1, P) 
4. adjacent selector (h1 + P) 
5. child selector (ul> li ) 
6. descendant selectors (li a) 
7. wildcard selector (*) 
8. attribute selector (a [rel = "external"]) 
9. pseudo-class selectors (a: hover, li: nth-child)
Inheritable style: font-size font-family color, text-indent;

Non Inherited Styles: border padding margin width height;

Priority under the principle of proximity, with weights whichever the case recently defined style;

Loading last loaded positioning styles to prevail;

Priority:
! Important> ID> class> tag   

Important priority higher than inline, inline but higher than the id
Added CSS3 pseudo-class examples:
p: first-of-type select each <p> element belongs to the first element of its parent <p> element. 
p: last-of-type select each <p> element belongs to its parent last <p> element. 
p: only-of-type select each <p> element belongs to its parent element only <p> elements. 
p: only-child selects each <p> element belongs to its parent element only child element. 
p: nth-child (2) Select each <p> element belongs to the parent element of the second sub-element. 
: Enabled: disabled control form control disabled. 
: Checked radio button or checkbox is selected.
position values, relative and absolute are positioned with respect to whom?

absolute 
        generate absolute element positioned relative to the recent level is not static positioned parent element to be positioned. 

fixed (old IE does not support) 
    to generate absolute element positioned relative to the browser window positioning. 

relative 
    generating element relative positioning, relative to its position in the general stream positioning. 

static default. No positioning element occurs in the normal stream
CSS3 What's new?

CSS3 rounded corners (border-radius), shadow (box-shadow), 
add special effects to the text (text-shadow,), a linear gradient (gradient), rotation (transform) 
transform: Rotate (9deg) Scale (0.85,0.90) translate (0px, -30px) skew (-9deg, 0deg); // rotation, scaling, positioning, tilt 
adds more CSS selectors more background rgba 
unique introduced in CSS3 pseudo-elements :: selection. 
Media queries , multi-column layout 
border-image
XML and JSON difference?

(1) The data volume terms. 
XML JSON relative terms, the volume of data is small, the speed of delivery faster. 
(2) aspects of data exchange. 
JSON and JavaScript interaction more convenient and easier to parse processing, better data interaction. 
(3) The data described aspects. 
JSON description of data than XML poor. 
(4) The transmission speed. 
JSON's speed is much faster than XML.
BFC norms of understanding?

      BFC, block-level formatting context, a BFC created a new box is an independent layout, style, child elements inside the box will not affect the outside elements. In the same BFC two adjoining block-level box in the vertical direction (the direction of a relationship and layout) of margin will collapse from happening. 
    (A concept W3C CSS 2.1 specification, which determines how the elements in the layout of its contents, and its relationship with other elements and interactions.)
Under explain CSS sprites, and how you want to use it in a page or site.

CSS Sprites in fact, the number of pages in the background image into an image file, and then use the CSS "background-image", "background- repeat", "background-position" a combination of background positioning, background-position can be used Digital can accurately locate the position of the background image. This can reduce the cost of many pictures request because the request takes a relatively long; although requests can be complicated, but there are limits, are six general browser. For the future, there is no need to do so, and because of `http2`.
html part

Talk about your understanding of the semantic?

1, removed or lost when allowing page style showing clear structure 
2, is conducive to SEO: search engines and to establish good communication helps crawlers to crawl more useful information: reptiles rely on labels to determine the context and the individual right keyword weight; 
3, easy to resolve other devices (such as a screen reader, blind readers, mobile devices) in meaningful ways to render web pages; 
4, easy to team development and maintenance, more readable semantic, is under Important Trends step right of the page, follow the W3C standards team follow this standard, the difference can be reduced.
Doctype role? Strict mode and mixed mode how to distinguish? They mean?

(1), <! DOCTYPE> declaration in the document in the front, in the <html> tag before. Tells the browser to render the document in which mode. 

(2) strict mode layout and JS mode of operation is based on the highest standards of the browser supports running. 

(3), in promiscuous mode, page backward compatible with liberal display. Simulate the behavior of older browsers do not work to prevent the site. 

(4), DOCTYPE does not exist or incorrectly formatted document will lead to promiscuous mode rendering.   
Do you know how many document types Doctype?

The label can be declared DTD three types, respectively strict version, interim version and an HTML-based documentation framework. 
 HTML 4.01 specifies three document types: Strict, Transitional, and Frameset. 
 XHTML 1.0 specifies three XML document types: Strict, Transitional, and Frameset. 
Standards (standard) mode (that is, in strict rendering mode) complies with the latest standards for rendering Web pages, while Quirks 
 (inclusive) mode (that is, loose rendering mode or compatibility mode) is used to render conventional web browser designed.
HTML and XHTML-- What is the difference between the two

Difference: 
1. All tags must have a corresponding end tag 
element and attribute names 2. All tags must be lowercase 
3. All the XML tags must be properly nested 
4. All attributes must be quoted. " "enclosed 
5. Put all the <and & special symbols with the coded representation 
6. assign a value to all of the properties 
in the comment 7. Do not manipulation "-" 
8. The image must have caption
Common compatibility problems?

* Png24 bit image appears on iE6 browser background, the solution is made ​​PNG8. It can refer to a script processing. 

* The browser's default margin and padding. The solution is to add a global * {margin: 0; padding: 0;} to unify. 

* IE6 bilateral Distance bug: After the block attribute labels float, there are rampant margin circumstances, in ie6 show larger margin than the settings. 

* Double ie generated from the float (IE6 bilateral distance problem: In IE6, if the element is set to float, while setting the margin-left or margin-right, margin value will double.) 
  #box {float: left; width: 10px; margin: 0 0 0 100px;} 

 Under such circumstances IE will produce 20px distance, the solution is to add --_ display in the label style float control: inline; be converted to inline property. (_ This symbol identifies only ie6) 

* gradual recognition of the way from the local population gradually excluded. 

  First, the clever use of "\ 9" This marks the IE's browser separated out from all the circumstances. 
  Then, again using the "+" to IE8 and IE7, IE6 separated, so that IE8 has been independently identified. 

  CSS 
      .bb { 
       background-color: # f1ee18; / * All identification * / 
      .background-color: # 00deff \ 9; / * IE6,7,8 identification * / 
      + background-color: # a200ff; / * IE6, 7 Identification * / 
      _background-color: # 1e0bd1; / * IE6 recognition * / 
      } 

* under IE, you can use the method to get the general properties for custom properties, 
   you can also use getAttribute () Gets the custom attributes; 
   under Firefox, only Use getAttribute () Gets custom attributes. 
   Workaround: Uniform for custom properties through getAttribute (). 

* Under IE, event object has x, y attributes, but no pageX, pageY property; 
  under Firefox, event object has pageX, pageY property, but there is no x, y properties. 

* Solution :( conditional comments) drawback is that in IE browser may add additional HTTP requests. 

* Under Chrome Chinese interface will be smaller than default to force the 12px 12px text display, 
  by the addition of CSS properties -webkit-text-size-adjust: none; resolved. 

* After hover style is not accessible by hyperlink is clicked appears visited The Hyperlink style does not have hover and active the solution is to change the order of CSS properties: 
LVHA: a: link {} a: visited {} a: hover {} a: Active {} 

* weird modalities: Leakage write DTD statement, Firefox will still be in accordance with the standard model to resolve the page, but IE will trigger quirks mode. To avoid quirks mode gives us unnecessary trouble, it is best to develop the good habit of writing DTD declaration. You can now use [html5] (http://www.w3.org/TR/html5/single-page.html) recommended notation: `<DOCTYPE html>` 

* top and bottom margin overlap problem 
ie and ff are present, adjacent both margin-left and margin-right does not coincide div, but margin-top and margin-bottom but it will coincide occur. 
Solution, to develop good coding habits, while using margin-top or while using margin-bottom. 
* Ie6 png image format support is not good for (quote a script processing)
Floating and explain how it works? Clear float tips

Floating elements from the document flow, does not occupy space. Floats across the border to stay its borders contain or floating elements. 

1. Clear float with an empty label. 
   This method is to add an empty label definition css clear in all floating behind the label: both the disadvantages is to increase the meaningless labels. 
2. Use the overflow. 
   To a parent tag contains floating elements add css property overflow: auto; zoom: 1; zoom: 1 for compatibility with IE6. 
3. Use after pseudo remove floating objects. 
   This method applies only to non-IE browsers. Specific wording may refer to the following examples. Use should pay attention to the following points. First, the method must be set to clear the height of the floating element's pseudo-objects: 0, otherwise the element will be much higher than the actual number of pixels;
Problems caused by floating elements and solutions?

Problems caused by the floating elements: 

(1) height of the parent element can not be softened, peer influence and elements of the parent element 
(2) and non-floating elements floating element siblings (inline elements) will follow thereafter 
(3) if not the first element of float, then that element is also required before the float, otherwise it will affect the structure of the page displayed
Workaround: use CSS in Clear: Both ; attribute to clear floating elements 2,3 resolve the problem, the problem 1, add the following styles to parent element Add clearfix style:

.clearfix: after {content:; display ".": Block; height: 0; Clear: Both; visibility: hidden;} 
.clearfix {display: inline-Block;} / * for IE / Mac * /
Clear float several ways:

1, additional labeling, <div style = "clear: both;"> </ div> (disadvantage: But this approach would cause additional HTML tag structure looks simple enough) 
2, use after pseudo-class 

#parent: after { 
    content:; "." 
    height: 0; 
    visibility: hidden; 
    display: Block; 
    Clear: Both; 
    } 

3, floating external element 
4, is set to `hidden`` overflow` or auto
IE 8 the following versions of the browser box model What is the difference

The following box model IE8 browser's width and height defined elements does not include padding and border
DOM manipulation - how to add, remove, move, copy, create, and find nodes.

(1) Create a new node 

      createDocumentFragment () // Create a DOM fragment 

      createElement () // create a specific element 

      createTextNode () // Create a text node 

(2) to add, remove, replace, insert 

      appendChild () 

      removeChild ( ) 

      replaceChild () 

      insertBefore () // before the existing child node into a new child node 

(3) Find 

      getElementsByTagName () // by tag name 

      getElementsByName () // by the value of the Name property of the element (IE fault tolerance Strong, will be an array, including name id equal value) 

      getElementById () // by elemental Id, uniqueness
What's new html5, removing those elements? How to deal with a new label HTML5 browser compatibility problems? How to distinguish between HTML and HTML5?

* HTML5 now is not a subset of SGML, mainly to increase with respect to the image, location, storage, multi-tasking and other features. 

* Drag release (Drag and drop) API 
  semantic content better label (header, nav, footer, aside, article, section) 
  audio, video, API (audio, video) 
  canvas (Canvas) API 
  geography (Geolocation) API 
  Local localStorage offline storage for long term storage of data, the browser is closed after data is not lost; 
  sessionStorage of data after the browser is closed automatically delete 

  form controls, calendar, date, time, email, url, search   
  WebWorker new technologies, websocket, Geolocation 

* Remove The elements of 

the element of pure performance: basefont, big, center, font, s, strike, tt, u; 

adversely affect the availability of the elements of: frame, frameset, noframes; 

support HTML5 new label: 

* IE8 / IE7 / IE6 support through document.createElement method of producing labels, 
  can use this feature to allow these browsers support HTML5 new label, 

  after the browser to support the new label, you also need to add tags default style: 

* Of course, the best way is the direct use of mature framework, use the most is html5shim framework 
   <-! [if lt IE 9]> 
   <Script> src = "http://html5shim.googlecode.com/svn/trunk/html5.js" </ Script> 
   <[ENDIF]! -> 
How to distinguish: DOCTYPE declaration \ new structural elements \ functional elements
iframe advantages and disadvantages?

: 1.` <iframe> `merit 

    solve slow to load third-party content such as icons and advertisements of loading problems 
    Security sandbox 
    parallel load script 

shortcomings 2.` <iframe> `are: 


    * iframes clog Onload event of the main page; 

    * Instant content is empty, it takes time to load 
    * no semantics
How to communicate within the browser between multiple tabs?

Call localstorge, cookies and other local storage
The difference between threads and processes

A program has at least one process, a process has at least one thread. 
divided scale smaller than the thread process, making multi-threaded program concurrency high. 
In addition, the process has a separate memory unit in the implementation process, and multiple threads shared memory, thereby greatly enhancing the operational efficiency of the program. 
Threads in the implementation process and the process is still a difference. Each has a separate thread running entry, exit sequence and procedure execution order. But the thread is not able to perform independent, it must exist according to the application, providing multiple threads of execution is controlled by the application. 
From a logical point of view, the significance of a multi-threaded application, there are a plurality of the operative part can execute simultaneously. But the operating system is not seen as multiple threads multiple independent applications to achieve scheduling and management and resource allocation process. This is an important distinction between processes and threads.
How do you document and optimize resource site?

Expect solutions include: 
 file merge 
 file Minimize / file compression 
 using CDN hosted 
 cache usage (multiple domain names to provide caching) 
 Other
Please name three reduce page load time.

1. Optimize image 
 2. Select the image format (GIF: color offered fewer colors used in some of the less demanding areas) 
 3. Optimize CSS (compression merge css, such as margin-top, margin-left ... ) 
 4. slash site (eg www.campr.com/ directory, will determine the "directory what file type or directory.) 
 5. indicate the height and width (if the browser does not find these two parameters, It needs to calculate the size of one side while downloading pictures, if the picture a lot, browsers need to constantly adjust the page. This will not only affect the speed, but also affect browsing experience. 
When the browser know the height and width parameters, even if the picture is temporarily unable to display the page will make pictures of space, and then continue to load the contents back thus loading time faster browsing experience is better.) 

6. To reduce http requests (merge files, merge pictures).
Which tools you use to test the performance of the code?

Profiler, JSPerf (http://jsperf.com/nexttick-vs-setzerotimeout-vs-settimeout), Dromaeo
What is FOUC (free style content flicker)? How do you avoid FOUC?

FOUC - Flash Of Unstyled Content document style flashing 
 <style type = "text / css" media = "all"> @ import "../ fouc.css"; </ style> 
import CSS file and references that is causing the problem the culprit. IE will first load the DOM entire HTML document, and then go to import external CSS files, so the page DOM has finished loading content into CSS import is completed there will be a time in the middle on the page is not the style, the length of this period of time with network speed, computer speed have a relationship. 
 Workaround surprisingly simple, as long as between the <head> add a <link> or <script> element on it.
null and undefined difference?

null is a "no," the object representation when converted to a value of 0; undefined is a indicating "no," the original value when converted value NaN .

When the variable declaration has not been initialized, the default variable is undefined . null object has not been used to indicate the presence, used to represent the function attempts to return an object that does not exist.

undefined means "missing value", that is where it should have a value, but not yet defined. Typical usage is:

(1) variable is declared, but no assignment, it means undefined. 

(2) When you call the function, the parameters should be provided not provided, this parameter is equal to undefined. 

(3) The object has no assignment of property, which is undefined. 

(4) function does not return a value, the default returns undefined.
null means "no object", ie where there should be no value. Typical usage is:

(1) as a function of the parameters, it indicates that the function of the parameter is not an object. 

(2) as the end point of the object's prototype chain.
What specific new operator did it?

   1. Create an empty object, and this variable refers to the object, but also inherited the prototype of the function. 
   2, attributes and methods are added to this reference object. 
   3, the newly created object referenced by this, and the last implicit return this. 

var obj = {}; 
obj .__ proto__ = Base.prototype; 
Base.call (obj);
js lazy loading options?

defer and async, dynamically created DOM mode (create script, is inserted into the DOM, after loading is completed callBack), asynchronous load demand js
How to solve cross-border issues?

    jsonp, document.domain + iframe, window.name, window.postMessage proxy server settings on the page, 

JSONP principle is dynamically inserted script tag
For details, see: Detailed js cross-border issues

and innerHTML of difference documen.write

document.write only redraw the entire page 

innerHTML can redraw part of a page
.call () and .apply () and the difference between the role?

Role: dynamically changing operating environment of a method of a class. See the difference: JavaScript study summary (iv) function function section

What action will cause a memory leak?

A memory leak means any object is no longer owned or persists after you need it. 
Garbage collector periodically scans the object, and calculate the number of references to other objects of each object. If an object reference number is 0 (no references to other objects through the object), or only a reference to the object is circular, then the object's memory can be recovered. 

The first parameter setTimeout function using strings instead of words, can cause a memory leak. 
Closures, console log, cycling (at two object references to each other and each other to retain, it will generate a cycle)
See: Detailed js variables, scopes and memory

JavaScript variable declarations in scope and upgrade?

See: Detailed JavaScript function mode

How to determine the current script to run in the browser or node environment?

Global objects by judging whether the window, if not for the window, the current script is not running in the browser
Other questions?

Have you ever had more difficult technical problem? How did you solve it?

Lists and other browsers are not the same characteristics IE?

What is graceful degradation and progressive enhancement?

Graceful degradation: Web sites can work in all modern browsers, if you are using an older browser, the code checks to confirm whether they can work properly. Due to the unique IE box model layout issues, for different versions of the IE hack practiced graceful degradation, and increase candidate solutions for those who can not support the browser, so that the legacy browser to experience some form but not downgrade completely ineffective. 

Progressive enhancement: from the basic functions are supported by all browsers start, gradually add that only a modern browser supported features, additional styles to the page on the basis of sound and features of the browser. When the browser support, they will be presented automatically and play a role.
See: CSS study summarized (a)

WEB application from the server to the client Data initiative to push those ways?

Javascript data push

Commet: HTTP long connection based server push technology

Push program based WebSocket

SSE (Server-Send Event): new ways to push data server
Front-end interface for this post is how engineers understood? It is the prospect of what would happen?

The front is the most close to the user's programmers are closer than the back-end database, product manager, operations, safety. 
    1, to achieve interactive interface 
    2, to enhance the user experience 
    3, with Node.js, the front end can achieve some of the things the service side of 


the front end is closest to the user's programmers, the ability of the front end is to make the product evolved from 90 points to 100 points, even better 

 involved in the project, to complete the implementation of high-quality renderings fast, accurate to 1px; 

 , UI design, product manager of communication with team members; 

 good page structure, page reconstruction and user experience; 

 processing hack, compatible, write beautiful code format; 

 optimized for the server, embracing the latest front-end technology.
What are your ways to optimize performance?

( For more details, please see Yahoo 14 performance optimization principle ).

  (1) reduce the number of requests http: CSS Sprites, JS, CSS source code compression, image size control is appropriate; page Gzip, CDN hosting, data caching, image server. 

  (2) front-end template JS + data, reduce wasted bandwidth due HTML tags caused the front end with a variable holds AJAX request, before each operation a local variable, not a request to reduce the number of requests 

  (3) instead of using innerHTML DOM operations, reducing the number of operations DOM and optimize javascript performance. 

  (4) When the style you want to set a lot of time to set className instead of directly operating style. 

  (5) less global variables, DOM node cache lookup results. Reducing the IO read operations. 

  (6) avoid the use of CSS Expression (css expression), also known as Dynamic properties (dynamic properties). 

  (7) Pictures preloaded style sheet on top, plus a timestamp at the bottom of the script.
Details: http://segmentfault.com/blog/trigkit4/1190000000691919

A page is loaded from the URL to the page display input is completed, the process what happened?

    Divided into four steps: 
    (1) when sending a URL request, regardless of whether the URL is the URL of each resource on the Web page URL, or Web page, the browser will open a thread to handle the request, while in remote DNS Start a DNS query on the server. This enables the browser to get requests the corresponding IP address. 
    (2), the browser and the remote Web server through TCP three-way handshake negotiation to establish a TCP / IP connection. The handshake includes a synchronous packet, one sync - reply message and a reply message, these three packets transmitted between the browser and the server. The handshake first attempts by the client to establish communication, then the server response and to accept the request of the client, the last issue of the request has been accepted by the client packets. 
    (3) Once the TCP / IP connection is established, the browser sends an HTTP GET request to a remote server over the connection. Remote server to find the resources and the use of HTTP response back to the resource, HTTP response status value of 200 represents a correct response. 
    (4) In this case, Web servers provide resources and services, the client begins to download resources. 

After the request returns, they entered the front-end module of our attention 
simply, the browser will parse the HTML generated DOM Tree, secondly generated according to CSS CSS Rule Tree, and javascript and can manipulate DOM DOM API
Details: What happened to the process from entering the URL in the browser receives?

Usually how to manage your project?

Advance team must determine a good global style (globe.css), coding mode (utf-8) and the like; 

        coding habits must be consistent (for example, are based on the inherited type of writing, all written in a single line style); 

        to prepare people dimension styles, each module They are promptly labeled (labeled key style local calls); 

        annotate pages (page modules such as start and end); 

        CSS with HTML parallel sub-folder storage, had named Unity (such as style.css); 

        JS points in folders named JS function subject to the English translation. 

        Images.png png8 format pictures with an integrated use of integrated and easy to use as possible future management
Most popular talk recently something, right? Which sites frequented?

Node.js, Mongodb, npm, MVVM, MEAN, three.js, React. 
Website: w3cfuns, sf, hacknews, CSDN, Mu classes, blog garden, InfoQ, w3cplus etc.
Several ways to create a javascript object

1, factory mode 
2, the constructor mode 
3, the prototype mode 
4, mixing the constructor and prototype mode 
5, the dynamic prototype model 
6, the parasitic constructor mode 
7, sound constructor mode
6 ways inherited javascript

1, the prototype inheritance chain 
2, to borrow the constructor inherited 
3, a combination of inheritance (Prototype + loan structure) 
4, prototype inherited, 
5, Parasitic succession 
6, parasitic combined inheritance
Details: Detailed JavaScript inheritance

ajax process

(1) create XMLHttpRequest object, the object is to create an asynchronous call. 

(2) create a new HTTP request, and specify the method of the HTTP request, URL and authentication information. 

(3) Set the response function HTTP request status changes. 

(4) sends an HTTP request. 

(5) to obtain the asynchronous call returns the data. 

(6) using JavaScript and DOM implementations partial refresh.
Details: JavaScript study summary (vii) Ajax and Http Status Word

Asynchronous loading and delayed loading

1. asynchronous loading of programs: dynamically inserted script tag 
2. js code to get through ajax, then performed by eval 
adding defer the 3.script tag or async attribute 
4. Create and insert the iframe, it asynchronous execution JS 
5. delay loading : Some js code is not initialized when the page immediately need, and only later in certain circumstances require.
Front-end security issues?

sql injection principle

It is through the SQL commands into Web form submit or enter the domain name or page request query string, and ultimately achieve deceive server to execute malicious SQL commands.

In general the following points:

1. Never trust user input, to check for user input, you can use regular expressions, or limit the length of the single and double "-" in conversion. 
2. Never use dynamic assembly SQL, you can use parameterized SQL or stored procedures directly access data query. 
3. Never use administrator privileges database connection, use limited individual permissions for each application database connection. 
4. Do not put the confidential information stored in clear text, please encryption or hash out passwords and sensitive information.
XSS principle and Prevention

Xss (cross-site scripting) attack means that an attacker to insert malicious Web page in html tags or javascript code. For example: the attacker in the forums to put a seemingly secure link, the user clicks cheat, steal private information in the cookie; or attacker in the forum, adding a malicious form, when the user submits the form, yet the information transfer to the attacker's server, rather than trust the site that the user originally thought.

XSS prevention methods

1. Code in the right place and the user input variables need to be carefully check the length and "<", ">", ";", "'" and other characters do filter; followed before any of the contents must be written pages encode , Avoid accidentally html tag to get out. This is a good level, at least you can block more than half of XSS attacks. 
2. Avoid direct cookie disclosure of user privacy, such as Email , password, and so on. 3. By cookie and systems ip binding to reduce cookie dangerous leak after. Thus the attacker obtained cookie no practical value, it is impossible brought replay. 
4. Try to use GET rather than POST submission form

XSS and CSRF What's the difference?

XSS is to obtain information, other users do not need to know in advance the code page and the data packet. CSRF is to replace the user completes a specified action, you need to know the code page to other users and data packets.

To complete a CSRF attack, the victim must be followed by the completion of two steps:

　　1. Log trusted site A, and generates Cookie locally. 2. Under no circumstances logout A visiting dangerous sites B.

CSRF defense

1. The service side of the CSRF ways like a lot, but the general idea is the same, that is, an increase in the Clients page pseudo-random numbers. 2. Use the verification code

ie chrome versions and how many resources can be downloaded in parallel

IE6 two concurrent, six concurrent iE7 after the upgrade version is also after 6 

Firefox, chrome is 6
javascript how to achieve inside the inheritance, how to avoid the prototype chain above object sharing

With mixed mode constructor and prototype chain to achieve inheritance, avoid sharing objects can refer to the classic extend () function, and many have a front frame of the package, it is to use an empty function as an intermediate variable
grunt, YUI compressor and google clojure used for code compression usage.

YUI Compressor is a tool compress JS and CSS files used, the use of Java development. 

Usage: 

// compress JS 
Java -jar YUICompressor-2.4.2.jar --type JS --charset UTF-8 -v src.js> packed.js 
// compress CSS 
Java -jar YUICompressor-2.4.2.jar --type css --charset utf-8 -v src.css> packed.css
For more information: you need to master the front-end code performance optimization tools

Flash, Ajax respective advantages and disadvantages, in use how to choose?

1, Flash ajax contrast 
Flash for handling multimedia, vector graphics, to access the machine; on the CSS, inadequate handling text, not easy to be searched. 
Ajax for CSS, text support is very good, support search; multimedia, vector graphics, inadequate machine access. 
Common: with no server refresh deliver the message, the user is offline and online, manipulate DOM
Please explain the JavaScript same origin policy.

Concept: homologous strategy is client-side script (especially Javascript ) important safety metrics. It first from Netscape Navigator2.0 , its purpose is to prevent a document or script loaded from several different sources.

Here's same-origin policy refers to: protocol name, the same port, same origin policy is a security protocol. Refers to a script read-only attribute window and documents from the same source.

Why have homologous limit?

We illustrate: For example, a hacker program, he used Iframe the real bank login page insert to his page, when you use a real user name, password, he can page through Javascript read your form the input in the content, so the user name, password easily at hand.

What is a "use strict";? Advantages and disadvantages of using it are what?

ECMAscript 5 added a second operating modes: "strict mode" (strict mode). As the name suggests, this model allows Javascript to run under more stringent conditions.

The purpose of the "strict mode", mainly in the following:

- Eliminate some unreasonable Javascript syntax, not rigorous place, reducing the number of bizarre behavior; 
- eliminate some code running unsafe place to ensure the safety of code to run; 
- improve compiler efficiency, increase the operating speed; 
- for the future of new Javascript version pave the way.
NOTE: After testing IE6,7,8,9 strict mode is not supported.

Cons: Now site JS will compress files with the strict mode, while others do not. Then these documents could have been strict mode is merge after the string on to the middle of the file, not only does not indicate strict mode, but a waste of bytes after compression.

The difference between GET and POST, and when to use POST?

    GET: generally used for information access, use URL parameters to pass on information to send the numbers are limited, in the 2000 general character 
    POST: Usually used to modify resources on the server, there is no restriction on the transmitted information. 

    GET requires the use of Request.QueryString to get the value of a variable, while the POST method to get the value of a variable through Request.Form, 
    ie Get through the address bar to traditional values, while Post by submitting the form to traditional values. 

However, in the following cases, please use the POST request: 
You can not use a cache file (a file or database on the update server) 
to send large amounts of data (POST does not limit the amount of data) to the server 
when a user sends an unknown character input, POST than GET more stable and more reliable
Where there will be css obstruction, where there will be js blocked?

js of blocking characteristic: all browsers to download JS time, will stop all other activities, such as downloading other resources, presentation content and so on. Until JS download, parse, after finished resumes parallel downloading other resources and render content. In order to improve the user experience, a new generation of browsers support concurrent download JS , but JS download still blocking other resources to download (such as Image, css files, etc.).

Because the browser in order to prevent JS modify DOM tree, you need to rebuild the DOM tree of the case, so it will block other downloads and rendering.

Embed JS will block all content presentation, and external JS will only clog the subsequent content display, 2 ways to download later resources will be blocked. That style does not block external loading external script, but will block the implementation of an external script.

CSS how can clog loaded? CSS could have been downloaded in parallel, in what circumstances would appear blocked loaded (in the test observation, IE6 under CSS are blocking load)

When CSS followed by embedding JS when the CSS will block behind resources situation. When to embed JS into CSS front, it does not appear the case of obstruction.

Fundamental reason: because the browser will remain html in css and js order, the stylesheet must be loaded before the embedding of JS execution, analytical end. The embedding of JS can block behind resource loading, it will appear above the CSS case blocking the download.

Embed JS should be placed on what position?

   1, on the bottom, although still on the bottom will block all presented, but will not block resources. 

   2, if the embedded JS on the head, please send embed CSS JS on the head. 

   3. Use defer (only supports IE) 

   4, do not call a function of time in the long run embedded JS, if must use, can be used to call `setTimeout`
Javascript blocking load specific ways

The script at the bottom. <Link> or on the head , and to ensure js before loading, to load the page properly displayed. <Script> tag on the </ body> ago.
A set of scripts : Because each <script> tag download blocking page resolution process, so limiting the page <script> total can also improve performance. Suitable for inline scripts and external scripts.

Non-blocking script : such as the page finishes loading, reloading js code. That is, in window.onload issued after the event to start the download code. (1) defer attributes: support IE4 and fierfox3.5 later browser (2) dynamic script elements: Document Object Model (DOM) allows you to use js dynamically create HTML almost the entire contents of the document. Code is as follows:



<Script> 
var Script = document.createElement ("Script"); 
script.type = "text / JavaScript"; 
script.src = "file.js"; 
document.getElementsByTagName ("head") [0] .appendChild (Script ); 
</ Script>
This technique focuses on: Wherever start downloading, file downloading and running the amount will not block other page processing. Even in the head inside (except http link for downloading the file).

Closure-related issues?

For more information: Detailed js Closures

js event handler problem?

For details, see: JavaScript study summary (ix) event Comments

eval is doing what?

Its function is to parse the string corresponding to the JS code and run; 
you should avoid using eval, unsafe, very time consuming properties (2 times, once parsed into js statement, once executed).
JavaScript prototype, the prototype chain? What are the characteristics?

* Prototype object is an ordinary object is an object that comes with implicit __proto__ property, prototypes may also have its own prototype, if the prototype of a prototype object is not null, then we call the prototype chain. 
* Prototype chain used by some inheritance and shared properties of objects of the (limited) object chain.
Event mechanism event, IE and Firefox What is the difference? How to stop the bubble?

1. We operate in a web page (some operations corresponding to multiple events). For example: When we click on a button will generate an event. JavaScript can be detected behavior.  
 2. Event handling mechanism: IE is the event bubbling, firefox supports both event model, that is: type of event capture and bubbling type events. ; 
 3. ev.stopPropagation (); Note that the old method ie ev.cancelBubble = true;
ajax What is? ajax interaction model? synchronous and asynchronous difference? How to solve cross-border issues?

For details, see: JavaScript study summary (vii) Ajax and Http Status Word

1. Adoption of the asynchronous model to enhance the user experience 

  2. Optimize the transmission between the browser and the server, reducing unnecessary data back and forth, reducing the bandwidth 

  portion 3. Ajax running on the client, undertaken originally borne by the server work, reducing the server load large amount of users under. 

  What is the biggest characteristic 2. Ajax is. 

  Ajax enables dynamic does not refresh (partial refresh) 
  readyState property state can have five values: 0 = uninitialized 1 = Start 2 = send, 3 = reception, 4 = complete 

ajax shortcomings 

  1, ajax do not support the browser back button. 

  2, AJAX security issues exposed the details of the server to interact with. 

  3, support for the search engines is relatively weak. 

  4, undermining the exception mechanism of the program. 

  5, it is not easy to debug. 

Cross-domain: Setting proxy page on jsonp, iframe, window.name, window.postMessage, server
Depth cloning js object

  function clone (Obj) {    
        var buf;    
        if (Obj instanceof Array) {    
            buf = []; // create an empty array 
            var i = Obj.length;    
            while (I -) {    
                buf [i] = clone (Obj [i]);    
            }    
            return buf;    
        } else if (Obj instanceof Object) {    
            buf = {}; // create an empty object 
            for (var k in Obj) {// add a new property to the object 
                buf [k] = clone (Obj [k]);    
            }    
            return buf;    
        } else {    
            return Obj;    
        }    
    }  
The difference between AMD and CMD norms?

For more information: Detailed JavaScript Modular Development

Site reconstruction of understanding?

Reconstruction Site: without changing the external behavior of the premise, to simplify the structure, add readability, while the front end of the site to maintain consistent behavior. That is in the UI does not change the situation, to optimize the site, in the expansion while maintaining a consistent UI. 

Reconstruction of the traditional web sites is usually: 

table (table) layout to DIV + CSS 
front end to make the site compatible with modern browsers (for irregularities in the CSS, such as IE6 valid) 
for the mobile platform optimized 
for ships SEO optimized 
site reconstruction deeper aspects that should be considered 

to reduce the coupling between codes 
allow the code to maintain flexibility 
in strict accordance with specification code 
extensible API designed 
to replace the old framework, language (eg VB) 
enhance the user experience 
generally speaking for optimized for speed is also included in the reconstruction of the 

compressed JS, CSS, image and other front-end resources (usually be resolved by the server) 
performance optimization program (such as data read and write) 
using CDN to accelerate resource loading 
for JS DOM optimized 
HTTP server File Cache
How to obtain the UA?

<Script> 
    whatBrowser function () {   
        document.Browser.Name.value = navigator.appName;   
        document.Browser.Version.value = navigator.appVersion;   
        document.Browser.Code.value = navigator.appCodeName;   
        document.Browser.Agent. value = navigator.userAgent;   
    }   
</ Script>
js array to weight

The following are three ways to go heavy array:

Array.prototype.unique1 = function () { 
  var N = []; // a new temporary array 
  for (var i = 0; i <this.length; i ++) // traverse the current array 
  { 
    // If the current array first i have saved into a temporary array, skip, 
    // otherwise the current term push to the temporary array inside 
    if (n.indexOf (this [i]) == -1) n.push (this [i]); 
  } 
  return N; 
} 

Array.prototype.unique2 = function () 
{ 
    var N = {}, r = []; // N is a hash table, r is a temporary array 
    for (var i = 0; i <this.length; i ++) // traverse the current array 
    { 
        if (N [this [i]]) // If the hash table does not have the current item! 
        { 
            N [this [i]] = true; // stored in the hash table 
            r.push (this [i]); // the current term push the current array to a temporary array inside 
        } 
    } 
    return r; 
} 

Array.prototype.unique3 = function () 
{ 
    var N = [this [0]]; // results array 
    for ( var i = 1; i <this.length; i ++) // iterate from the start of the second term 
    { 
        // if the current array of item i in the current array position is not the first occurrence of i, 
        it represents the i // entries are repeated, ignored. Otherwise, the result is stored in the array 
        if (this.indexOf (this [i]) == i) n.push (this [i]); 
    } 
    return N; 
}
HTTP status code

After 100 Continue to continue, generally when sending post request, sent the http header the server will return this message, to confirm, specific parameter information after sending 
200 OK normal return information 
201 Created request was successful and the server created a new resource 
202 Accepted The server has accepted the request, but not yet processed 
301 Moved Permanently The requested page has been permanently moved to a new location. 
302 Found temporary redirect. 
303 See Other temporary redirection, and always use a GET request a new URI. 
304 Not Modified since the last request, the requested page has not been modified. 

Format 400 Bad Request Server can not understand the request, the client should not attempt to use the same content again initiated the request. 
401 Unauthorized Unauthorized request. 
403 Forbidden Forbidden. 
404 Not Found can not find how to match resources with URI. 

500 Internal Server Error The most common server-side error. 
503 Service Unavailable server is temporarily unable to process the request (may be overloaded or maintenance).
js operations to get and set cookie

// Create the cookie 
function setCookie (name, value, expires, path, domain, secure) { 
    var cookieText = encodeURIComponent (name) + '=' + encodeURIComponent (value); 
    if (expires instanceof Date) { 
        cookieText + = '; expires = '+ expires; 
    } 
    if (path) { 
        cookieText + = '; expires =' + expires; 
    } 
    if (domain) { 
        cookieText + = '; domain =' + domain; 
    } 
    if (secure) { 
        cookieText + = '; secure '; 
    } 
    document.cookie = cookieText; 
} 

// get the cookie 
function getCookie (name) { 
    var cookieName = encodeURIComponent (name) + '='; 
    var cookieStart = document.cookie.indexOf (cookieName); 
    var CookieValue = null; 
    if (cookieStart> -1) { 
        var cookieEnd = document.cookie.indexOf (';', cookieStart); 
        if (cookieEnd == -1) { 
            cookieEnd = document.cookie.length; 
        } 
        CookieValue = decodeURIComponent (document.cookie. substring (cookieStart + cookieName.length, cookieEnd)); 
    } 
    return CookieValue; 
} 

// delete the cookie 
function unsetCookie (name) { 
    document.cookie = name + "=; expires =" + new Date (0); 
}
Talk about the three-way handshake TCP transport policy

In order to reach the target accurately at the data, TCP uses a three-way handshake protocol strategy. After using the TCP protocol to send out packets, TCP will not ignore the situation after transfer, it will be delivered to the other party to confirm the success. Handshake using TCP flags: SYN and ACK. 
Data with the sender first sends a SYN packet to the other flag. After the receiver receives, SYN / ACK packet backhaul flags to show communicate with a confirmation message. Packet, representing the last, the sender return pass with ACK flag "handshake" End 
If at some stage during the handshake inexplicably interrupted, TCP protocol will be in the same order to send the same packet again.
Talk about your understanding of the Promise

In accordance with Promise / A + defined, Promise has four states:

pending: the initial state, the non-fulfilled or rejected. 
Fulfilled: the success of the operation. 
rejected: the failed operation. 
settled: Promise has been fulfilled or rejected, and not pending
In addition, Fulfilled and rejected together collectively settled .

Promise objects used for delayed (deferred) and asynchronous (asynchronous) calculations.

Promise of constructor
Construct a Promise , the most basic usage is as follows:

var = new Promise Promise (function (resolve, reject) { 
    if (...) {// Succeed 
        resolve (result); 
    } else {// fails 
        reject (Error (errMessage)); 
    } 
});
Promise instance has then method (with a then object method, commonly referred to thenable ). Its use is as follows:

promise.then (onFulfilled, onRejected)
Receives two function as an argument, one fulfilled is called when one rejected when they were called, received parameter is the future, onFulfilled correspond resolve , onRejected correspond to reject .

Javascript garbage collection method

Clear mark (mark and sweep)

This is the JavaScript garbage collection the most common way, when the variable into the execution environment, such as a function to declare a variable, the garbage collector will be marked as "into the environment", when leaving the environment variables (ending function execution) to labeled "leave the environment."

Garbage collector to run when all variables are stored in memory plus mark, and then remove the environment variables and variables (closures) is referenced by an environment variable, there are still marked after this is done is to delete variables

Reference count (reference counting)

In the low version IE memory leaks occur frequently, many times, because it uses reference counting for garbage collection. Policy reference count is the number used by the track record of each value, when you declare a variable number of citations and a reference type assigned to the variable when this value is increased by one, if the value of the variable into another is worth quoting this number by 1, when citations this value becomes zero, no variables described in use, this value can not be accessed, so its footprint can be recovered, so the garbage collector in Running time to clean out the reference number of the space occupied by a value of 0.

In IE though JavaScript objects marked clearing the way for garbage collection, but the BOM and DOM objects is through reference counting garbage, that is as far as BOM and DOM circular reference problem occurs.

Talk about performance optimization problem

Code level: Avoid using css expression, avoid the use of advanced selectors, wildcard selector. Cache use: Cache Ajax, use CDN, use external js and css file to the cache, add the Expires header, the server configuration Etag, reducing the number of requests and other DNS lookup: merge styles and scripts, using css image sprites, beyond the initial first screen Image resource demand loading, lazy loading static resources. Request Bandwidth: compressed file, open GZIP,

Mobile end performance optimization

Try to use css3 animation, open hardware acceleration. Appropriate use of touch event instead of click event. Avoid using css3 gradient shading effects. Use as few box-shadow and Gradients . box-shadow and gradients are often performance killer page
What is Etag?

Browser download components when they will be stored in the browser cache. If you need to get the same components, the browser cache time again check the components, if already expired, the browser sends a conditional GET request to the server, the server determines the cache still valid, it sends a 304 response, telling the browser can be reused cache component.

Then the server is based on what the judge cache is still valid? The answer is, there are two ways, one is ETag mentioned earlier, another is based on the Last-Modified

Expires and Cache-Control

Expires requires the client and server strict clock synchronization. HTTP1.1 introduction of Cache-Control to overcome the limitations of Expires header. If the max-age and Expires simultaneously, the max-age have a higher priority.

Cache-Control: no-cache, Private, max-age = 0 
ETag: abcde 
Expires: Thu, 15 Apr 2014 20:00:00 GMT 
Pragma: Private 
Last-Modified: // now $ RFC1123 format
The difference between stacks and queues?

Stack insert and delete operations are carried out at one end, and queue operation is carried out at both ends. 
FIFO queue, stack advanced out after. 
Stack only allowed in the tail end of the insert and delete, and queue only allowed in the tail end of the insert, delete the header end
The difference between stack and heap?

Stack area (stack) - assigned automatically by the compiler release, storage function parameters, local variables and so on. 
Heap (heap) - general distribution release by the programmer, if the programmer does not release, may be recovered by the OS when the program ends. 
Heap (data structures): heap can be seen as a tree, such as: heap sort; 
stack (data structures): An advanced after the data structure.
How much do you know about Http 2.0?

HTTP / 2 introduced a "server push (serverpush)" concept, which allows the server before the client needs the data to take the initiative to send data to the client cache, thereby improving performance. HTTP / 2 encryption to provide more support for HTTP / 2 using a multiplexing technology that allows multiple messages simultaneously on a cross connection. It adds header compression (header compression), so even very small requests, which request and response header will only occupy a small percentage of bandwidth.
Status API Training Shop Blog About Pricing
© 2015 GitHub , Inc. Terms Privacy Security Contact Help';
?>
