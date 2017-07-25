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