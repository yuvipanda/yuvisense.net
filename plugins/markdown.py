from markdown import Markdown
import os
import yaml

css = '<link rel="stylesheet" type="text/css" href="<base_url>static/codehilite.css" />'

autolinks = {}


def wikilink_transform(label, base, end):
    if ' ' in label:
        key = label.split()[0]
        text = ' '.join(label.split()[1:])
    else:        
        key = text = label
    href = key
    return <a href="%s">%s</a>' % (href, text)

md = Markdown(extensions=['codehilite', 'wikilinks'],
              extension_configs={'wikilinks':[('build_url', wikilink_transform)]})


def transform_markdown(post):
    if 'content-type' in post.meta and post.meta['content-type'] == 'XHTML':
        return post.content
    else:
        if not hasattr(post, 'content_html'):          
            post.content_html = md.convert(post.content)
                                               
        return post.content_html

def main(blog):
    autolinks_path = os.path.join(blog.settings['blog_dir'], 'autolink.yaml')    
    autolinks = yaml.load(open(autolinks_path))
    blog.hooks.add_action('render',transform_markdown)
    blog.hooks.copy_to_static(os.path.join('plugins','codehilite.css'))
    blog.hooks.add_action('html_head', 
            lambda: css.replace("<base_url>", blog.settings['base_url']))
