<?php
header('Content-Type: application/json; charset=utf-8');

$sary = isset($_GET['sary']) ? trim(htmlspecialchars($_GET['sary'])) : '';


$kinds = [
    [
        "id" => 1,
        "name" => "التطوير الذاتي",
        "desc" => "كتب تساعدك على فهم نفسك وتطوير شخصيتك"
    ],
    [
        "id" => 2,
        "name" => "المشاعر والحياة  ",
        "desc" => "كتب تتحدث عن المشاعر وتجارب الحياة والعلاقات الإنسانية"
    ],
    [
        "id" => 3,
        "name" => "روحانيات وإلهام  ",
        "desc" => "كتب تقدم أفكارًا ملهمة وتأملات ذات معنى"
    ]
];

$result = [];


if (!empty($sary)) {
    foreach ($kinds as $item) {
        if (mb_strpos((string)$item['id'], $sary) !== false ||
            mb_strpos($item['name'], $sary) !== false ||
            mb_strpos($item['desc'], $sary) !== false) {
            
            $result[] = $item;            
        }
    }
    echo json_encode($result, JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode($kinds, JSON_UNESCAPED_UNICODE);
}
?>