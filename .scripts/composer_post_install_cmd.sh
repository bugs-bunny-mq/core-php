#!/bin/sh

DIR="$PWD/.git/hooks/"
if [ -d "$DIR" ]; then
    cp ./.scripts/git_pre_commit.sh .git/hooks/pre-commit
    chmod +x .git/hooks/pre-commit
fi
