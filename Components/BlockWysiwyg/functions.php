<?php

namespace Flynt\Components\BlockWysiwyg;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'blockWysiwyg',
        'label' => 'Block: Wysiwyg',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Text Alignment', 'flynt'),
                'name' => 'textAlignment',
                'type' => 'button_group',
                'choices' => [
                    'textLeft' => sprintf('<i class="dashicons dashicons-editor-alignleft" title="%1$s"></i>', __('Align text left', 'flynt')),
                    'textCenter' => sprintf('<i class="dashicons dashicons-editor-aligncenter" title="%1$s"></i>', __('Align text center', 'flynt'))
                ]
            ],
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentHtml',
                'type' => 'wysiwyg',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 1,
            ],
            [
                'label' => __('Options', 'flynt'),
                'name' => 'optionsTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => '',
                'name' => 'options',
                'type' => 'group',
                'layout' => 'row',
                'sub_fields' => [
                    FieldVariables\getTheme(),
                    [
                        'label' => __('Size', 'flynt'),
                        'name' => 'size',
                        'type' => 'radio',
                        'other_choice' => 0,
                        'save_other_choice' => 0,
                        'layout' => 'horizontal',
                        'choices' => [
                            'sizeDefault' => __('Default', 'flynt'),
                            'sizeLarge' => __('Large', 'flynt)'),
                            'sizeFull' => __('Full', 'flynt)'),
                        ],
                        'default_value' => 'sizeDefault',
                        'wrapper' =>  [
                            'width' => '100',
                        ],
                    ],
                ]
            ]
        ]
    ];
}
