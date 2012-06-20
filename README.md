Extended User Info
==================

Habari plugin that extends user information with links for social media and a bio blurb.

Author: [Michael Bishop](http://miklb.com)

License: [Apache Software License 2.0](http://www.apache.org/licenses/LICENSE-2.0.html)

Version: 0.1

### Usage ###

Currently the plugin extends for a Twitter URL, Facebook URL &amp; a bio blurb. Since this plugin is extending the author info, simply using `$post->author->info->` for the three options. 

* twitterurl
* facebookurl
* bioblurb

So to output the Twitter URL, `<?php echo $post->author->info->twitterurl; ?>`. You can extend that to check to make sure the option is set first using something like 

```php
<?php if ( isset ( $post->author->info->twitterurl ) ) { ?><a href="<?php echo $post->author->info->twitterurl; ?>" title="<?php echo $post->author->displayname; ?>"> Follow On Twitter </a> <?php } ?>
```