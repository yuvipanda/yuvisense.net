olink = """
<link rel="openid.server" href="<o_server>" />
<link rel="openid.delegate" href="<o_delegate>" />
"""

def main(blog):
    server = blog.settings['openid']['server']
    delegate = blog.settings['openid']['delegate']
    blog.hooks.add_action('html_head',
            lambda: olink.replace('<o_server>', server).replace('<o_delegate>', delegate))
