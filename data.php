<?php

class html
{

    public function returnHtml()
    {
        return [
            'block1-text' => [
                'h1' => 'Lorem ipsum dolor sit amet',
                'p' => 'Nunc vel nibh tempor, pharetra lectus congue, luctus orci.'
            ],
            'title' => 'This is title',
            'navbar-nav' => [
                [
                    'text' => 'Home',
                    'url' => '#',
                ],
                [
                    'text' => 'About us',
                    'url' => '#',
                ],
                [
                    'text' => 'Offer',
                    'url' => '#',
                ],
                [
                    'text' => 'Portfolio',
                    'url' => '#',
                ],
                [
                    'text' => 'Contact',
                    'url' => '#',
                ],
            ]
        ];

    }

}

$config = array(
    'h2' => "Best<span>Design</span>",
    'p' => 'Aliquam sagittis neque in lectus semper, nec elementum arcu <br>
                     scelerisque. Curabitur ullamcorper auctor mauris, placerat fermentum
                     <br>lectus vulputate sed. Phasellus vestibulum sit amet dolor eget eleifend.',
    'button' => "Ask for price",
    'h3' => "What we do?",
    'web-1' => array(
        'h4' => "Web design",
        'p' => 'Aliquam sagittis neque in lectus semper, nec elementum arcu <br>
                                 scelerisque. Curabitur ullamcorper auctor mauris, placerat fermentum.'
    )

);
$configOn = array(
    'web-1' => array(
        'h4' => "Digital paiting",
        'p' => 'Aliquam sagittis neque in lectus semper, nec elementum arcu <br>
                                 scelerisque. Curabitur ullamcorper auctor mauris, placerat fermentum.'
    )
);
$configOne = array(
    'web-2' => array(
        'h4' => "Web Applications",
        'p' => 'Aliquam sagittis neque in lectus semper, nec elementum arcu <br>
                                 scelerisque. Curabitur ullamcorper auctor mauris, placerat fermentum.',
    )
);
$configTru = array(
    'h5' => 'Neptune template',
    'p' => 'Aliquam sagittis neque in lectus semper, nec elementum arcu
                                 scelerisque. <br>
                                 Curabitur ullamcorper auctor mauris, placerat fermentum.',
    'pt-4' => array(
        'h4' => "Desktop Applications",
        'p' => 'Aliquam sagittis neque in lectus semper, nec elementum arcu <br>
                                 scelerisque. Curabitur ullamcorper auctor mauris, placerat fermentum.',
    )
);
$container = array(
    'portfolio py-5' => array(
        'h5' => 'About us!',
        'p' => 'Aliquam sagittis neque in lectus semper, nec elementum arcu <br>
                     scelerisque. Curabitur ullamcorper auctor mauris, placerat fermentum.'
    ),
    'col-md-3' => array(
        'h5' => 'John Doe',
        'p' => 'Curabitur ullamcorper auctor<br>
                                 mauris, placerat fermentum.',
        'py-md-4' => 'John Doe',
        'text' => 'Curabitur ullamcorper auctor<br>
                                 mauris, placerat fermentum.',
        'py-md-44' => 'John Doe',
        'text44' => 'Curabitur ullamcorper auctor<br>
                                 mauris, placerat fermentum.',
        'py-md-444' => 'John Doe',
        'text444' => 'Curabitur ullamcorper auctor<br>
                                 mauris, placerat fermentum.',
    ),
    'social' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.<br>
         Try awsome tool for desgners <span><a href="#">symu.co</a></span>',

);
