<?php
global $arr;
$COLOR_GREEN = "\033[0;32m";
$COLOR_WHITE = "\033[0m";
$COLOR_RED = "\033[0;31m";
$startTime = new \DateTimeImmutable();
$microTime = 'i:s.v';
$testsCount = 1;
function pass(): bool
{
    global $testsCount, $COLOR_GREEN, $startTime;
    echo "$COLOR_GREEN($testsCount) test passed successfully" . PHP_EOL;
    $testsCount++;
    $d = new \DateTime();
    [$i, $s] = [$startTime->diff($d)->i, $startTime->diff($d)->s];
    return $i < 1 || $s < 30;
}

function complete()
{
    global $startTime, $COLOR_GREEN, $COLOR_WHITE, $microTime;
    $diff = $startTime->diff(new \DateTime());
    $milliseconds = intval($diff->format('%F') / 1000);
    $diffStr = $diff->format('%I:%S.') . sprintf('%03d', $milliseconds);
    echo "Time elapsed: $COLOR_GREEN $diffStr $COLOR_WHITE" . PHP_EOL;
}

function fail()
{
    global $COLOR_RED, $COLOR_WHITE;
    complete();
    echo "$COLOR_RED ASSERT FAILED $COLOR_WHITE" . PHP_EOL;
    die;
}

function customAssert($assertion, $description = ''): bool
{
    global $COLOR_WHITE, $COLOR_RED;
    if ($assertion) {
        return true;
    }

    echo "$COLOR_RED>>>$COLOR_WHITE$description\n";
    return false;
}

echo "Started at (mm:ss.mil): $COLOR_RED {$startTime->format($microTime)} $COLOR_WHITE" . PHP_EOL;

customAssert(calcMaxInConsecutiveItems($arr, 1) === 99999, 'First test failed, find max in array') && pass() || fail();
customAssert(calcMaxInConsecutiveItems($arr, 2) === 199667, 'Second test failed, for two items') && pass() || fail();
customAssert(calcMaxInConsecutiveItems($arr, 1000) === 7416696, 'Third test failed, 1000 size sum') && pass() || fail();
customAssert(calcMaxInConsecutiveItems($arr, 2000) === 11196628, '4th test failed, 2000 size sum') && pass() || fail();
customAssert(calcMaxInConsecutiveItems($arr, 3000) === 12322374, '5th test failed, 3000 size sum') && pass() || fail();
customAssert(calcMaxInConsecutiveItems($arr, 4000) === 11538693, '6th test failed, 4000 size sum') && pass() || fail();
customAssert(calcMaxInConsecutiveItems($arr, 5000) === 12322436, '7th test failed, 5000 size sum') && pass() || fail();
customAssert(calcMaxInConsecutiveItems($arr, 6000) === 13128366, '8th test failed, 6000 size sum') && pass() || fail();
customAssert(calcMaxInConsecutiveItems($arr, 7000) === 14037925, '9th test failed, 7000 size sum') && pass() || fail();
customAssert(calcMaxInConsecutiveItems($arr, 8000) === 15009687, '10th test failed, 8000 size sum') && pass() || fail();
customAssert(calcMaxInConsecutiveItems($arr, 9000) === 17096580, '11th test failed, 9000 size sum') && pass() || fail();
customAssert(calcMaxInConsecutiveItems($arr, 25000) === 26170245, '12th test failed, 25000 size sum') && pass() || fail();
customAssert(calcMaxInConsecutiveItems($arr, 50000) === 28812363, '13th test failed, 50000 size sum') && pass() || fail();
customAssert(calcMaxInConsecutiveItems($arr, 99999) === 28184281, '14th test failed, 99999 size sum') && pass() || fail();
customAssert(calcMaxInConsecutiveItems($arr, 499999) === 13687753, '15th test failed, 499999 size sum') && pass() || fail();
customAssert(calcMaxInConsecutiveItems($arr, 999999) === -42156958, '16th test failed, 99999 (the max) size sum') && pass() || fail();
$newDate = new \DateTime();
echo "End at (mm:ss.mil): $COLOR_GREEN {$newDate->format($microTime)} $COLOR_WHITE" . PHP_EOL;
complete();
