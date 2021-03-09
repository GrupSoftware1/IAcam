#!/bin/bash
echo`ps aux | grep " node " | grep -v grep`
echo "ahora debes escribir el comando: kill -9 PID"
