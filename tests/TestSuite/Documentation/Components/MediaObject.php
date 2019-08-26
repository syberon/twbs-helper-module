<?php

// Documentation test config file for "Components / Media object" part
return [
    'title' => 'Media object',
    'url' => '%bootstrap-url%/components/media-object/',
    'tests' => [
        [
            'title' => 'Example',
            'url' => '%bootstrap-url%/components/media-object/#example',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->media([
                    'img' => ['images/demo/responsive.svg', ['alt' => '...', 'class' => 'mr-3']],
                    'title' => 'Media heading',
                    'text' => 'Cras sit amet nibh libero, in gravida nulla. ' .
                        'Nulla vel metus scelerisque ante sollicitudin. ' .
                        'Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. ' .
                        'Fusce condimentum nunc ac nisi vulputate fringilla. ' .
                        'Donec lacinia congue felis in faucibus.',
                ]);
            },
            'expected' => '<div class="media">' . PHP_EOL .
                '    <img alt="..." class="mr-3" src="images&#x2F;demo&#x2F;responsive.svg">' . PHP_EOL .
                '    <div class="media-body">' . PHP_EOL .
                '        <h5 class="mt-0">Media heading</h5>' . PHP_EOL .
                '        <p>Cras sit amet nibh libero, in gravida nulla. ' .
                'Nulla vel metus scelerisque ante sollicitudin. ' .
                'Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. ' .
                'Fusce condimentum nunc ac nisi vulputate fringilla. ' .
                'Donec lacinia congue felis in faucibus.</p>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>',
        ],
        [
            'title' => 'Nesting',
            'url' => '%bootstrap-url%/components/media-object/#nesting',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                echo $oView->media([
                    'img' => ['images/demo-sample.svg', ['alt' => '...', 'class' => 'mr-3']],
                    'title' => 'Media heading',
                    'text' => 'Cras sit amet nibh libero, in gravida nulla. ' .
                        'Nulla vel metus scelerisque ante sollicitudin. ' .
                        'Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. ' .
                        'Fusce condimentum nunc ac nisi vulputate fringilla. ' .
                        'Donec lacinia congue felis in faucibus.',
                    'media' => [
                        'content' => [
                            'img' => ['images/demo-sample.svg', ['alt' => '...', 'class' => 'mr-3']],
                            'title' => 'Media heading',
                            'text' => 'Cras sit amet nibh libero, in gravida nulla. ' .
                                'Nulla vel metus scelerisque ante sollicitudin. ' .
                                'Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. ' .
                                'Fusce condimentum nunc ac nisi vulputate fringilla. ' .
                                'Donec lacinia congue felis in faucibus.',
                        ],
                    ],
                ]);
            },
            'expected' => '<div class="media">' . PHP_EOL .
                '    <img alt="..." class="mr-3" src="images&#x2F;demo-sample.svg">' . PHP_EOL .
                '    <div class="media-body">' . PHP_EOL .
                '        <h5 class="mt-0">Media heading</h5>' . PHP_EOL .
                '        <p>Cras sit amet nibh libero, in gravida nulla. ' .
                'Nulla vel metus scelerisque ante sollicitudin. ' .
                'Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. ' .
                'Fusce condimentum nunc ac nisi vulputate fringilla. ' .
                'Donec lacinia congue felis in faucibus.</p>' . PHP_EOL .
                '        <div class="media">' . PHP_EOL .
                '            <img alt="..." class="mr-3" src="images&#x2F;demo-sample.svg">' . PHP_EOL .
                '            <div class="media-body">' . PHP_EOL .
                '                <h5 class="mt-0">Media heading</h5>' . PHP_EOL .
                '                <p>Cras sit amet nibh libero, in gravida nulla. ' .
                'Nulla vel metus scelerisque ante sollicitudin. ' .
                'Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. ' .
                'Fusce condimentum nunc ac nisi vulputate fringilla. ' .
                'Donec lacinia congue felis in faucibus.</p>' . PHP_EOL .
                '            </div>' . PHP_EOL .
                '        </div>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>',
        ],
        [
            'title' => 'Alignment',
            'url' => '%bootstrap-url%/components/media-object/#alignment',
            'rendering' => function (\Zend\View\Renderer\PhpRenderer $oView) {
                // Top-aligned media
                echo $oView->media([
                    'img' => ['images/demo/responsive.svg', ['alt' => '...', 'class' => 'align-self-start mr-3']],
                    'title' => 'Top-aligned media',
                    'text' => [
                        'Cras sit amet nibh libero, in gravida nulla. ' .
                            'Nulla vel metus scelerisque ante sollicitudin. ' .
                            'Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. ' .
                            'Fusce condimentum nunc ac nisi vulputate fringilla. ' .
                            'Donec lacinia congue felis in faucibus.',
                        'Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. ' .
                            'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
                    ],
                ]) . PHP_EOL;

                // Center-aligned media
                echo $oView->media([
                    'img' => ['images/demo/responsive.svg', ['alt' => '...', 'class' => 'align-self-center mr-3']],
                    'title' => 'Top-aligned media',
                    'text' => [
                        'Cras sit amet nibh libero, in gravida nulla. ' .
                            'Nulla vel metus scelerisque ante sollicitudin. ' .
                            'Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. ' .
                            'Fusce condimentum nunc ac nisi vulputate fringilla. ' .
                            'Donec lacinia congue felis in faucibus.',
                        [
                            'content' => 'Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. ' .
                                'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
                            'attributes' => ['class' => 'mb-0'],
                        ],
                    ],
                ]) . PHP_EOL;

                // Bottom-aligned media
                echo $oView->media([
                    'img' => ['images/demo/responsive.svg', ['alt' => '...', 'class' => 'align-self-end mr-3']],
                    'title' => 'Top-aligned media',
                    'text' => [
                        'Cras sit amet nibh libero, in gravida nulla. ' .
                            'Nulla vel metus scelerisque ante sollicitudin. ' .
                            'Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. ' .
                            'Fusce condimentum nunc ac nisi vulputate fringilla. ' .
                            'Donec lacinia congue felis in faucibus.',
                        [
                            'content' => 'Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. ' .
                                'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
                            'attributes' => ['class' => 'mb-0'],
                        ],
                    ],
                ]);
            },
            'expected' => '<div class="media">' . PHP_EOL .
                '    <img alt="..." class="align-self-start&#x20;mr-3" ' .
                'src="images&#x2F;demo&#x2F;responsive.svg">' . PHP_EOL .
                '    <div class="media-body">' . PHP_EOL .
                '        <h5 class="mt-0">Top-aligned media</h5>' . PHP_EOL .
                '        <p>Cras sit amet nibh libero, in gravida nulla. '.
                'Nulla vel metus scelerisque ante sollicitudin. ' .
                'Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. ' .
                'Fusce condimentum nunc ac nisi vulputate fringilla. ' .
                'Donec lacinia congue felis in faucibus.</p>' . PHP_EOL .
                '        <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. '.
                'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="media">' . PHP_EOL .
                '    <img alt="..." class="align-self-center&#x20;mr-3" ' .
                'src="images&#x2F;demo&#x2F;responsive.svg">' . PHP_EOL .
                '    <div class="media-body">' . PHP_EOL .
                '        <h5 class="mt-0">Top-aligned media</h5>' . PHP_EOL .
                '        <p>Cras sit amet nibh libero, in gravida nulla. '.
                'Nulla vel metus scelerisque ante sollicitudin. ' .
                'Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. ' .
                'Fusce condimentum nunc ac nisi vulputate fringilla. ' .
                'Donec lacinia congue felis in faucibus.</p>' . PHP_EOL .
                '        <p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. '.
                'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="media">' . PHP_EOL .
                '    <img alt="..." class="align-self-end&#x20;mr-3" ' .
                'src="images&#x2F;demo&#x2F;responsive.svg">' . PHP_EOL .
                '    <div class="media-body">' . PHP_EOL .
                '        <h5 class="mt-0">Top-aligned media</h5>' . PHP_EOL .
                '        <p>Cras sit amet nibh libero, in gravida nulla. '.
                'Nulla vel metus scelerisque ante sollicitudin. ' .
                'Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. ' .
                'Fusce condimentum nunc ac nisi vulputate fringilla. ' .
                'Donec lacinia congue felis in faucibus.</p>' . PHP_EOL .
                '        <p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. '.
                'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>' . PHP_EOL .
                '    </div>' . PHP_EOL .
                '</div>',
        ],
    ],
];