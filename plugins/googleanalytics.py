ga_script = u"""
  <script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("<ga_id>");
pageTracker._trackPageview();
} catch(err) {}</script>
"""
def main(blog):
    blog.hooks.add_action('html_head',
            lambda: ga_script.replace('<ga_id>', blog.settings['ga_id']))
