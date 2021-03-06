<?php
/**
 * test russian calendar 2015-2016
 * @var dps\workday\Workday $this
 */
return array(
    'weekend' => array(0, 6),
    'holidays' => $this->getDayNumberTimeStamp(
        array(
            '2015-01-01',
            1420185600, // '2015-01-02',
            new DateTime( '2015-01-05' ),
            '2015-01-06',
            '2015-01-07',
            '2015-01-08',
            '2015-01-09',
            '2015-02-23',
            '2015-03-09',
            '2015-05-01',
            '2015-05-04',
            '2015-05-11',
            '2015-06-12',
            '2015-11-04',
            '2016-01-01',
            '2016-01-01',
            '2016-01-04',
            '2016-01-05',
            '2016-01-06',
            '2016-01-07',
            '2016-01-08',
            '2016-02-22',
            '2016-02-23',
            '2016-03-07',
            '2016-03-08',
            '2016-05-02',
            '2016-05-03',
            '2016-05-09',
            '2016-06-13',
            '2016-11-04',
        )
    ),
    'shiftHolidays' => $this->getDayNumberTimeStamp(
        array(
            '2016-02-20'
        )
    )
);
