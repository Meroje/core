<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */

return array(
    'controller_url'  => 'admin/noviusos_media/media',
    'model' => 'Nos\\Media\\Model_Media',
    'messages' => array(
        'successfully added' => __('Media successfully added.'),
        'successfully saved' => __('Media successfully saved.'),
        'successfully deleted' => __('The media has successfully been deleted!'),
        'item deleted' => __('This media has been deleted.'),
        'not found' => __('Media not found'),
        'delete an item' => __('Delete a media'),
    ),
    'environment_relation' => 'folder',
    'tab' => array(
        'iconUrl' => 'static/apps/noviusos_media/img/media-16.png',
        'labels' => array(
            'insert' => __('Add a media'),
        ),
    ),
    'layout_insert' => array(
        array(
            'view' => 'noviusos_media::admin/media_add',
        ),
    ),
    'layout_update' => array(
        array(
            'view' => 'noviusos_media::admin/media_edit',
        ),
    ),
    'views' => array(
        'delete' => 'noviusos_media::admin/media_delete',
    ),
    'fields' => array(
        'id' => array (
            'label' => 'ID: ',
            'widget' => 'Nos\Widget_Text',
        ),
        'media_folder_id' => array(
            'widget' =>  'Nos\Media\Widget_Folder',
            'form' => array(
                'type'  => 'hidden',
            ),
            'label' => __('Choose a folder where to put your media:'),
        ),
        'media' => array(
            'dont_save' => true,
            'form' => array(
                'type' => 'file',
            ),
            'label' => __('File from your hard drive: '),
        ),
        'media_title' => array(
            'form' => array(
                'type' => 'text',
            ),
            'label' => __('Title: '),
        ),
        'media_file' => array(
            'form' => array(
                'type' => 'text',
            ),
            'label' => __('SEO, Media URL: '),
        ),
        'save' => array(
            'label' => '',
            'form' => array(
                'type' => 'submit',
                'tag' => 'button',
                'value' => 'Save',
                'class' => 'primary',
                'data-icon' => 'check',
            ),
        ),
    ),
);