<?php

/*
 * This file is part of the PhpMob package.
 *
 * (c) Ishmael Doss <nukboon@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace PhpMob\Settings\tests;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * @author Ishmael Doss <nukboon@gmail.com>
 */
class FixtureLocal
{
    public static function allSettings()
    {
        return self::onlyGlobalSettings() + self::onlyOwnerSettings();
    }

    public static function onlyGlobalSettings()
    {
        return [
            'section1' => [
                'label' => 'Section 1',
                'description' => 'Section 1 description',
                'owner_aware' => false,
                'enabled' => true,
                'settings' => [
                    'foo' => [
                        'type' => 'string',
                        'label' => 'foo_label',
                        'description' => 'foo_description',
                        'value' => 'foo_value',
                        'enabled' => true,
                        'blueprint' => [
                            'type' => TextType::class,
                        ],
                    ],
                    'bar' => [
                        'type' => 'string',
                        'label' => 'bar_label',
                        'description' => 'bar_description',
                        'value' => 'bar_value',
                        'enabled' => true,
                        'blueprint' => [
                            'type' => TextType::class,
                        ],
                    ],
                ],
            ],
        ];
    }

    public static function onlyOwnerSettings()
    {
        return [
            'section2' => [
                'label' => 'Section 2',
                'description' => 'Section 2 description',
                'owner_aware' => true,
                'enabled' => true,
                'settings' => [
                    'foo' => [
                        'type' => 'string',
                        'label' => 'foo_label',
                        'description' => 'foo_description',
                        'value' => 'foo_value',
                        'enabled' => true,
                        'blueprint' => [
                            'type' => TextType::class,
                            'options' => [],
                            'constraints' => [
                                NotBlank::class => [
                                    'optionX' => 'xoption',
                                    'optionY' => 'yoption',
                                ]
                            ],
                        ],
                    ],
                    'bar' => [
                        'type' => 'string',
                        'label' => 'bar_label',
                        'description' => 'bar_description',
                        'value' => 'bar_value',
                        'enabled' => true,
                        'blueprint' => [
                            'type' => TextType::class,
                        ],
                    ],
                ],
            ],
            'section3' => [
                'label' => 'Section 3',
                'description' => 'Section 3 description',
                'owner_aware' => true,
                'enabled' => true,
                'settings' => [
                    'foo' => [
                        'type' => 'string',
                        'label' => 'foo_label',
                        'description' => 'foo_description',
                        'value' => 'foo_value',
                        'enabled' => true,
                        'blueprint' => [
                            'type' => TextType::class,
                        ],
                    ],
                    'bar' => [
                        'type' => 'string',
                        'label' => 'bar_label',
                        'description' => 'bar_description',
                        'value' => 'bar_value',
                        'enabled' => true,
                        'blueprint' => [
                            'type' => TextType::class,
                        ],
                    ],
                ],
            ],
            'section8' => [
                'label' => 'Section 8',
                'description' => 'Section 8 description',
                'owner_aware' => true,
                'enabled' => true,
                'settings' => [
                    'foo' => [
                        'type' => 'string',
                        'label' => 'foo_label',
                        'description' => 'foo_description',
                        'value' => 'foo_value',
                        'enabled' => true,
                        'blueprint' => [
                            'type' => TextType::class,
                        ],
                    ],
                    'bar' => [
                        'type' => 'string',
                        'label' => 'bar_label',
                        'description' => 'bar_description',
                        'value' => 'bar_value',
                        'enabled' => true,
                        'blueprint' => [
                            'type' => TextType::class,
                        ],
                    ],
                ],
            ],
        ];
    }
}
