<h1>NewPlugin</h1>
<p>Create WordPress plugin from scratch</p>
<h3>Plugin load order</h3>
<ol>
    <li>Configuration file is loaded</li>
    <li>Functions and Classes loaded</li>
    <li>Plugins are loaded</li>
    <li>Process add code requests</li>
    <li>Load Translations</li>
    <li>Load Theme</li>
    <li>Load Page Content</li>
</ol>
<p>Also before start coding set WP_DEBUG as true in wp-config.php file.</p>
<h3>Creating a Plugin File Header</h3>
<p>The next step is to create a PHP file with a name derived from your chosen Plugin name or index.php file name. Plugins directory in their installation – usually wp-content/plugins/ – so no two Plugins in that directory can have the same PHP file name.</p>
<h3>Activating Our Plugin</h3>
<p>For activation plugin use function for wordpress version control during activation.</p>
<h3>Trick to Secure a Plugin</h3>
<p>One what you can do to secure plugin is prevent users to calling the plugin in directly. Because frequently, hackers tried visit the file directly instead wordpress loaded.</p>
<h3>Creating a Custom Post Type</h3>
<p>Register post by function register_post_type() that should be invoked through the 'init' action. The parameters is described on codex page.</p> 
<h3>Metadata and Metaboxes</h3>
<p>The Metadata API is a simple and standarized way for retrieving and manipulating metadata of various WordPress object types. it's like box for custom field.</p>
<h3>Enqueueing Files</h3>
<p>Just add all external assets in plugin folder and include there in script/style enqueue.</p>
<h3>Working with Meta Data</h3>
<p>Create input field in Item metabox, but didn't make form wrapper. And action to save post and fields. To this step will need:</p>
<ol>
    <li><b>save_post</b>is an action triggered whenever a post or page is created or updated, which could be from an import, post/page edit form, xmlrpc, or post by email. </li>
    <li><b>The function update_post_meta()</b> updates the value of an existing meta key (custom field) for the specified post.</li>
    <li>The <b>Metadata API</b> is a simple and standarized way for retrieving and manipulating metadata of various WordPress object types.</li>
    <li><b>Meta-data</b> is ability to allow post authors to assign custom fields(extra information) to a post.</li>
    <li><b>add_meta_boxes()</b> — hook allows meta box registration for any post type and passes two parameters: $post_type and $post. <b>add_meta_boxes_{post_type}</b> — hook will only run when editing a specific post type. This will only receive 1 parameter - $post.</li>
</ol>
<h3>Filter Hooks for Post Content</h3>
<p>Modify content for custom post through filter hook. It easy way to include metadata in html template. To more clearly code, separate post template across file item-template.php and include them in filter function through file_get_contents();.</p>
<h3>Making our Strings Translatable</h3>
<p>Use str_replace() function to make post template translatable.</p>
<h3>Creating Database Tables</h3>
<p>During activation use dbDelta(SQL query) function. The simple way take SQL query is copy from phpMyAdmin export table file. Just create table, export table and drop table.</p>
<h3>Including the jQuery Rating Plugin</h3>
<p>Use wordpress enqueue scripts action to add style and scripts to front pages. Add Rating plugin for jQuery for stars rating.</p>
<h3>Sending AJAX Requests from the Front End</h3>
<p>This step is add custom action hook ajax in index.php file. Also use wp_localize_script() for localized translations of any strings used in your script. In np.main.scripts.js file realize ajax script. And in rate-item.php will be function accepting request.</p>
<h3>Handling AJAX Requests and Inserting Data into the Database</h3>
<p>To hendling request I get ID and Rating from sended AJAX request. Also take user IP from php server data. Then we insert this data in database which create by plugin activation. Now sending status=2. But user still able set reating many time. We check: if this user set rating then don't write in database(status=1) or if user didn't set rating then write his rating to database(status=2).</p>
<h3>Averaging and Displaying the Rating</h3>
<p>Change filter-content.php file to show item rating or not allow will set rating for users who set it before. In rate-item.php update rating after user evaluate. Now every user be able only set rating for one item.</p>