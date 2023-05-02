<?php

namespace SnappMarketPro\Moadian\Services;


class InvoiceIdService
{
    private static array $d = [
        [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
        [1, 2, 3, 4, 0, 6, 7, 8, 9, 5],
        [2, 3, 4, 0, 1, 7, 8, 9, 5, 6],
        [3, 4, 0, 1, 2, 8, 9, 5, 6, 7],
        [4, 0, 1, 2, 3, 9, 5, 6, 7, 8],
        [5, 9, 8, 7, 6, 0, 4, 3, 2, 1],
        [6, 5, 9, 8, 7, 1, 0, 4, 3, 2],
        [7, 6, 5, 9, 8, 2, 1, 0, 4, 3],
        [8, 7, 6, 5, 9, 3, 2, 1, 0, 4],
        [9, 8, 7, 6, 5, 4, 3, 2, 1, 0],
    ];

    private static array $p = [
        [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
        [1, 5, 7, 6, 2, 8, 3, 0, 9, 4],
        [5, 8, 0, 3, 7, 9, 6, 1, 4, 2],
        [8, 9, 1, 6, 0, 4, 3, 5, 2, 7],
        [9, 4, 5, 3, 1, 2, 6, 8, 7, 0],
        [4, 2, 8, 6, 5, 7, 3, 9, 0, 1],
        [2, 7, 9, 3, 8, 0, 6, 4, 1, 5],
        [7, 0, 4, 6, 9, 1, 3, 2, 5, 8],
    ];

    private static array $inv = [0, 4, 3, 2, 1, 5, 6, 7, 8, 9];

    public static function generateTaxId($memoryId, $createDate, $serial): string
    {
        $timeDayRange = (int) ($createDate->getTimestamp() / (3600 * 24));
        $hexTime = dechex($timeDayRange);
        $hexSerial = dechex($serial);

        $taxId = $memoryId . str_pad($hexTime, 5, '0', STR_PAD_LEFT) .
            str_pad($hexSerial, 10, '0', STR_PAD_LEFT);

        $controlText = self::toDecimal($memoryId) . str_pad($timeDayRange, 6, '0', STR_PAD_LEFT)
            . str_pad($serial, 12, '0', STR_PAD_LEFT);
        $taxId .= self::generateVerhoeff($controlText);

        return strtoupper($taxId);
    }

    private static function toDecimal($memoryId): string
    {
        $decimalFormat = '';
        for ($i = 0; $i < strlen($memoryId); $i++) {
            if (is_numeric($memoryId[$i])) {
                $decimalFormat .= $memoryId[$i];
            } else {
                $decimalFormat .= ord($memoryId[$i]);
            }
        }
        return $decimalFormat;
    }

    public static function generateVerhoeff($num): string
    {
        $c = 0;
        $myArray = self::stringToReversedIntArray($num);

        for ($i = 0; $i < count($myArray); $i++) {
            $c = self::$d[$c][self::$p[($i + 1) % 8][$myArray[$i]]];
        }

        return strval(self::$inv[$c]);
    }

    private static function stringToReversedIntArray($num): array
    {
        $myArray = [];
        for ($i = 0; $i < strlen($num); $i++) {
            $myArray[$i] = intval(substr($num, $i, 1));
        }

        return self::reverse($myArray);
    }

    private static function reverse($myArray): array
    {
        $reversed = [];
        for ($i = 0; $i < count($myArray); $i++) {
            $reversed[$i] = $myArray[count($myArray) - ($i + 1)];
        }

        return $reversed;
    }
}
