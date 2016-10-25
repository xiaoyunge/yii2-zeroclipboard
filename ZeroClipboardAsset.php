<?php
/**
 * @link 0
 * @copyright 0
 * @license 0
 */

namespace yangshihe\zeroclipboard;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Twitter fontAwesome 4.6 css and fonts files.
 *
 * @author DNA <yangshihe@qq.com>
 * @since 1.0
 */

/**

 =====code====

 var client = new ZeroClipboard(document.getElementById('copy-button'));

  client.on('ready', function(readyEvent) {

    //console.log('ZeroClipboard SWF is ready!');

    client.on('aftercopy', function(event) {

      alert('复制成功!');

    });

  });

 =====end code====
 */



class ZeroClipboardAsset extends AssetBundle
{
    public $js = [
        'ZeroClipboard.js',
    ];

    public function init()
    {
        parent::init();
        $this->sourcePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'dist';
    }

}
