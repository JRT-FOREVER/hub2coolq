#!/usr/bin/env bash

echo 2333

SOCKET=0.0.0.0:8234
APP_PATH=~/hub2coolq
PID=tmp.pid


pwd

cd $APP_PATH
pwd

if test -e $PID
then
    echo 'Restarting'
    kill `cat $PID`
else
    echo 'Starting'
fi

gunicorn3 hub2coolq:app -p $PID -b $SOCKET -D

