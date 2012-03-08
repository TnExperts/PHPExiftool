<?php

namespace PHPExiftool\Driver\Tag\IFD0;

class OldSubfileType extends \PHPExiftool\Driver\Tag
{

    protected $Id = 255;

    protected $Name = 'OldSubfileType';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'IFD0';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Old Subfile Type';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Full-resolution image',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Reduced-resolution image',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Single page of multi-page image',
        ),
    );

}