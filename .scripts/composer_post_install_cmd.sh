#!/bin/bash

DIR="$PWD/.git/hooks/"
if [ -d "$DIR" ]; then
#    cp ./.scripts/lint.sh .git/hooks/lint.sh
    cp ./.scripts/git_pre_commit.sh .git/hooks/pre-commit
#    chmod +x .git/hooks/lint.sh
    chmod +x .git/hooks/pre-commit
fi
