<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class Z1001 extends Element implements ElementInterface
{
    const REG = '1001';
    const LEVEL = 1;
    const PARENT = '';

    protected $parameters = [
        'IND_MOV' => [
            'type'     => 'integer',
            'regex'    => '^[0|1]$',
            'required' => true,
            'info'     => 'Indicador de movimento: '
            .'0- Bloco com dados informados; '
            .'1- Bloco sem dados informados',
            'format'   => ''
        ]
    ];

    /**
     * Constructor
     * @param \stdClass $std
     */
    public function __construct(\stdClass $std)
    {
        parent::__construct(self::REG);
        $this->std = $this->standarize($std);
    }
}
