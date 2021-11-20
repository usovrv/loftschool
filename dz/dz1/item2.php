<?php
$totalDrawings = 80;
$drawingMarkers = 23;
$drawingPencils = 40;
$byPaints = $totalDrawings - $drawingMarkers - $drawingPencils;
$drawingPaints = $totalDrawings - $drawingMarkers - $drawingPencils;
echo '<b>Задача:</b><br>';
echo "На школьной выставке $totalDrawings рисунков. $drawingMarkers из них выполнены фломастерами, $drawingPencils карандашами, а остальные - красками.<br>";
echo 'Сколько рисунков, выполненных красками, на школьной выставке?<br>';
echo '<b>Решение:</b><br>';
echo 'Количество рисунков красками =<br>';
echo "Общее количество рисунков ($totalDrawings) - количество рисунков фломастерами ($drawingMarkers) - количество рисунков карандашами ($drawingPencils)<br>";
echo "<b>Ответ:</b> $drawingPaints";