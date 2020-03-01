<?php

namespace app\components;

use yii\base\Component;

/**
 * Class StringComponent
 * @package app\components
 */
class StringComponent extends Component
{
    const WORDS_REG = "/[\s,\.]*\\\"([^\\\"]+)\\\"[\s,\.]*|[\s,\.]*'([^']+)'[\s,\.]*|[\s,\.]+/";

    /**
     * @param string $str
     * @return array
     */
    public function fetchWords(string $str): array
    {
        return preg_split(static::WORDS_REG, $str, 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
    }

    /**
     * @param string $str
     * @param bool $byKeys
     * @param bool|bool $ASC
     * @return array
     */
    public function fetchCountValues(string $str, bool $byKeys = true, bool $ASC = true): array
    {
        $words = $this->fetchWords($str);
        $wordsCount = array_count_values($words);

        if ($ASC) {
            if ($byKeys) {
                ksort($wordsCount, SORT_NATURAL);
            } else {
                asort($wordsCount, SORT_NATURAL);
            }
        } else {
            if ($byKeys) {
                krsort($wordsCount, SORT_NATURAL);
            } else {
                arsort($wordsCount, SORT_NATURAL);
            }
        }

        return $wordsCount;
    }
}
