<?php

// 1. Two Sum

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $length = count($nums);

        for ($i=0; $i<$length;$i++){
            for ($j=$i+1; $j<$length; $j++){
                if($nums[$i] + $nums[$j] == $target ){
                    return[$i, $j];
                }
             }
        }
    }
}

// 3. Longest Substring Without Repeating Characters

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
         $left = 0;
        $maxLength = 0;
        $lastSeen = [];

        $length = strlen($s);

        for ($right = 0; $right < $length; $right++) {
            $char = $s[$right];

            if (isset($lastSeen[$char]) && $lastSeen[$char] >= $left) {
                $left = $lastSeen[$char] + 1;
            }

            $lastSeen[$char] = $right;

            $currentLength = $right - $left + 1;

            $maxLength = max($maxLength, $currentLength);
        }

        return $maxLength;
    }
}


// 4. Median of Two Sorted Arrays

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
         $merged = array_merge($nums1, $nums2);
        sort($merged);

        $length = count($merged);
        $middle = intdiv($length, 2);

        if ($length % 2 == 1) {
            return $merged[$middle];
        }

        return ($merged[$middle - 1] + $merged[$middle]) / 2;
    }
}