<?php

namespace Drupal\custom_ckeditor_plugin\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "emojione" plugin.
 *
 * NOTE: The plugin ID ('id' key) corresponds to the CKEditor plugin name.
 * It is the first argument of the CKEDITOR.plugins.add() function in the plugin.js file.
 *
 * @CKEditorPlugin(
 *   id = "emojione",
 *   label = @Translation("Emojione ckeditor button")
 * )
 */
class EmojioneCKEditorPlugin extends CKEditorPluginBase {


    /**
     * {@inheritdoc}
     */
    public function getButtons() {
        $path = $this->getLibraryPath();
        return [
            'Emojione' => [
                'label' => t('Emojione ckeditor button'),
                'image' => $path . '/icons/emojione.png',
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getFile() {
        $path = $this->getLibraryPath();
        return $path . '/plugin.js';
    }

    /**
     * {@inheritdoc}
     */
    public function getConfig(Editor $editor) {
        return [];
    }

    /**
     * @return string
     */
    protected function getLibraryPath() {
        return 'libraries/emojione';
    }


}
