<?php
define("DEFAULT_TEMPLATE_PATH", '/local/templates/.default');

function debug($data) {
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

/**
 * Обрезает строку до определённого количества символов не разбивая слова.
 * @param string $str строка
 * @param int $length длина, до скольки символов обрезать
 * @param string $postfix постфикс, который добавляется к строке
 * @return string обрезанная строка
 */
function cutStr($str, $length=50, $postfix='...')
{
    if ( strlen($str) <= $length)
        return $str;

    $temp = substr($str, 0, $length);
    return substr($temp, 0, strrpos($temp, ' ') ) . $postfix;
}

/**
 * Обрезает строку до определённого количества символов не разбивая слова.
 * Поддерживает многобайтовые кодировки.
 * @param string $str строка
 * @param int $length длина, до скольки символов обрезать
 * @param string $postfix постфикс, который добавляется к строке
 * @param string $encoding кодировка, по-умолчанию 'UTF-8'
 * @return string обрезанная строка
 */
function mbCutString($str, $length, $postfix='...', $encoding='UTF-8')
{
    if (mb_strlen($str, $encoding) <= $length) {
        return $str;
    }

    $tmp = mb_substr($str, 0, $length, $encoding);
    return mb_substr($tmp, 0, mb_strripos($tmp, ' ', 0, $encoding), $encoding) . $postfix;
}
?>