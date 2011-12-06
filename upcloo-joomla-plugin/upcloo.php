<?php
/**
 * @version		$Id: upcloo.php 1 20/11/2011 walter.dalmut@gmail.com $
 * @package		Joomla
 * @subpackage	Content
 * @copyright	Copyright (C) 2011 Walter Dal Mut, Gabriele Mittica. All rights reserved.
 * @license		MIT license,
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.plugin.plugin' );

class plgContentUpcloo extends JPlugin 
{
    const FRONT_END_POINT = 'http://%s.update.upcloo.com';
    const REPOSITORY_END_POINT = 'http://repository.upcloo.com/%s';

    public function __construct(&$subject, $config)
    {
        parent::__construct($subject, $config);
        
//         die(var_dump($config));
        
        $lang = JFactory::getLanguage();
        $ret = $lang->load('plg_content_upcloo');
        die(var_dump($ret));
    }
    
    public function onContentBeforeDisplay($context, &$article, &$params, $page=0)    
    {
        $id = $article->id;
        
//         die(var_dump($article));
        
        $article->text .= '<h2>'.JText::_( 'PLG_CONTENT_UPCLOO_RESULT' ).'</h2>';
        
        $this->_publishToUpCloo($article);
    }
    
    /**
     * Check if this content is to send to UpCloo.
     * 
     * @param object $article
     */
    private function _publishToUpCloo($article)
    {
        if ($article->published == '1') {
            //Check if you have to send to UpCloo
        }
    }
}