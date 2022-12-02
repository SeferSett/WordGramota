<?php

$arr = [
    [
        'place'=> 1,
        'fio'=> 'Волков Александр Алексеевич',
        'team' =>'спортивный клуб Ахмат',
        'competition'=>'Соревнование по боксу',
        'division'=>'Опытные',
        'age-category'=>'18 и старше',
        'weight_category'=>'до 70 кг',
        'date'=>'10.10.2010'],
    [
        'place'=> 2,
        'fio'=> 'Букетов Артем Алексеевич',
        'team' =>'спортивный клуб Сармат',
        'competition'=>'Соревнование по тайбоксу',
        'division'=>'Опытный',
        'age-category'=>'18 и старше',
        'weight_category'=>'до 70 кг',
        'date'=>'01.11.2010'],
    [
        'place'=> 3,
        'fio'=> 'Джемиличь Джемилев Джимбо',
        'team' =>'спортивный клуб Татар',
        'competition'=>'Соревнование по боксу',
        'division'=>'Опытные',
        'age-category'=>'18 и старше',
        'weight_category'=>'до 70 кг',
        'date'=>'05.05.2010'],
];
$arr1 = [];
foreach ($arr as $elem){
    $arr1[] = $elem;
}
