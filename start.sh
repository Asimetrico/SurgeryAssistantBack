#!/usr/bin/env bash
bash startOAUTH.sh &
php -S 0.0.0.0:9875 -t public
