<?php
function task1($arr, $bool = false)
{
    foreach ($arr as $item) {
        echo "<p>", $item, "</p>";
    }
    if ($bool) {
        return implode(" ", $arr);
    }
}



function task2 (string $action, ...$args)
{
    foreach ($args as  $arg) {
        if (!is_int($arg) && !is_float($arg)) {
            trigger_error ('argument wrong');
            return 'ERROR';
        }
    }
    switch ($action) {
        case '+':
            return array_sum($args);
        case '-':
            return array_shift ($args) - array_sum($args);
        case '/':
            return array_shift ($args);
            foreach($args as $n => $arg) {
                if ($arg == 0) {
                    trigger_error('derive by zero argument');
                    return 'error';
                }
                $result = $result / $arg;
            }
            return $result;
        case '*':
            $result = 1;
            foreach ($args as $arg) {
                $result *= $arg;
            }
            return $result;
    }


}


function task3 (int $a, int $b)
{
    $result = '<table>';
    for ($i = 1; $i <= $a; $i++) {
        $result .='<tr>';
        for ($j = 1; $j <= $b; $j++) {
            $result .= '<td>';
            $result .= $i * $j;
            $result .= '</td>';
        }
        $result .='</tr>';

    }
    $result .='</table>';
    echo $result;

}

function my_file_get_contents (string $filename)
{
    $fp = fopen($filename, 'r');
    if (!$fp) {
        return false;
    }
    $str = '';
    while (!feof($fp)) {
        $str .= fgets($fp, 1024);
    }
    echo $str;
}
