#!/bin/bash

(cd src && zip "../deploys/blog.zip" . * -r -9 && cd ..) #-x ".git" -x "deploys" -x "scripts" *
