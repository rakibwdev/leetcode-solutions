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


// 4. Median of Two Sorted Arrays

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        
    }
}