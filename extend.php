<?php

/*
 * A Flarum extension template for BBCode created by Billy Wilcosky.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * For instructions, please view the README file.
 */

use Flarum\Extend;
use Flarum\Frontend\Document;
use s9e\TextFormatter\Configurator;

return [

/*
 *   (new Extend\Frontend('forum'))
 *       ->content(function (Document $document) {
 *           $document->head[] = '<link rel="stylesheet" type="text/css" href="/assets/extensions/YOURUSERNAME-nameofextension/styles.css">';
 *       }),
 */
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[video]{URL}[/video]',
                '<video controls><source src="{URL}" /></video>'
            );	
			
            $config->BBCodes->addCustom(
                '[audio]{URL}[/audio]',
                '<audio controls><source src="{URL}" /></audio>'
            );				


			
			
        })
];
