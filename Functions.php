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
     * @return array $diffDate
     */
    public static function diffDate($date1, $date2)
    {
        $diffDate = array();
        // date(Array) idx:0 Y-m-d, idx:1 H:i
        $date1 = explode(" ", $date1);
        $date2 = explode(" ", $date2);
        // Y-m-d
        $ymd1 = strtotime($date1[0]);
        $ymd2 = strtotime($date2[0]);
        $ymd_diff = ($ymd2 - $ymd1) / (60 * 60 * 24);
        $diffDate["ymd"] = $ymd_diff;  // int
        // H:i
        $his1 = strtotime($date1[1]);
        $his2 = strtotime($date2[1]);
        $diff_his = date("H:i", ($his2 - $his1));
        $diff_h = date("H", ($his2 - $his1));
        $diff_i = date("i", ($his2 - $his1));
        $diffDate["hi"] = $diff_his;  // string
        $diffDate["h"] = $diff_h;  // string
        $diffDate["i"] = $diff_i;  // string
        return $diffDate;
    }

    /**
     * 日数を時間に変換し、加算する
     * @param array $date
     * @return string $time
     */
    public static function convertTime($date)
    {
        // 1日以上経過している場合
        if ($date["ymd"] != 0) {
            $hour = 24 * $date["ymd"];  // 1日を時間に変換
            $hour = ($date["h"] - 0) + $hour;
            $time = (string)$hour . ":" . $date["i"];
            return $time;
        }
        return $date["hi"];
    }
}
