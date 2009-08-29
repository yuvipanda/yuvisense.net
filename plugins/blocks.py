import os
from hislain.core import Block

def main(blog):
    blog.blocks = []
    blocks_path = os.path.join(blog.settings['blog_dir'],'blocks')
    for block_name in blog.settings['blocks']:
        blog.blocks.append(
            Block(os.path.join(blocks_path,block_name) + '.block', blog, False))
