<?php

// original from website: https://www.debuggex.com/r/13FPAozgWFhJa_k3
// $regex = '/(?:(?m)^P(?:([\\d\\.,]{0,})Y){0,}(?:([\\d\\.,]{0,})M){0,}(?:([\\d\\.,]{0,})D){0,}(?:T(?:([\\d\\.,]{0,})H){0,}(?:([\\d\\.,]{0,})M){0,}(?:([\\d\\.,]{0,})S){0,}){0,}$)/';

// changed some "{0,}" to "*", others to "{0,1}"
// $regex = '/(?:(?m)^P(?:([\\d\\.,]*)Y){0,1}(?:([\\d\\.,]*)M){0,1}(?:([\\d\\.,]*)D){0,1}(?:T(?:([\\d\\.,]*)H){0,1}(?:([\\d\\.,]*)M){0,1}(?:([\\d\\.,]*)S){0,1}){0,1}$)/';

// changed number matching to: "\\d+[\\.,]{0,1}\\d*"
// Requires at least one digit and at most one decimal point
$regex = '/(?:(?m)^P(?:(\\d+[\\.,]{0,1}\\d*)Y){0,1}(?:(\\d+[\\.,]{0,1}\\d*)M){0,1}(?:(\\d+[\\.,]{0,1}\\d*)D){0,1}(?:T(?:(\\d+[\\.,]{0,1}\\d*)H){0,1}(?:(\\d+[\\.,]{0,1}\\d*)M){0,1}(?:(\\d+[\\.,]{0,1}\\d*)S){0,1}){0,1}$)/';

$testString = 'P5Y6MT1.2H34.5M6.7S';

preg_match($regex, $testString, $matches);

print_r($matches);

// TODO: When decoding ISO 8601 period strings, make sure the only segment containing a fraction is the last one.
