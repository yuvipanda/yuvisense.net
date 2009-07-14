fblink = """<link rel="alternate" type="application/rss+xml" title="RSS Feed" href="<fb_link>" />"""

def main(blog):
    blog.hooks.add_action('html_head',
            lambda: fblink.replace('<fb_link>', blog.settings['feedburner_url']))
