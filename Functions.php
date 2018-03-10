<?php
/**
 * 関数クラス
 */
class Functions
{
    /**
     * 2つの日付の差分を取得
     * @param string $date1
     * @param string $date2
     */
    public static function dateDiff($date1, $date2)
    {
        // date(Array) idx:0 Y-m-d, idx:1 H:i:s
        $date1 = explode(" ", $date1);
        $date2 = explode(" ", $date2);
        // Y-m-d
        $ymd1 = strtotime($date1[0]);
        $ymd2 = strtotime($date2[0]);
        $ymd_diff = ($ymd2 - $ymd1) / (60 * 60 * 24);
        var_dump($ymd_diff);
        // H:i:s
        $his1 = strtotime($date1[1]);
        $his2 = strtotime($date2[1]);
        $diff_his = date("H:i:s", ($his2 - $his1));
        var_dump($diff_his);
    }
}
