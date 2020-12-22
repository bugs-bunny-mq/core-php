#!/bin/bash

PROJECT=$PWD
echo $PROJECT
STAGED_FILES_CMD=$(git diff --name-only --diff-filter=ACMR HEAD | grep \\.php)

if [ "$#" -eq 1 ]; then
    oIFS=$IFS
    IFS='
    '
    FILES="$1"
    IFS=$oIFS
fi

FILES=${FILES:-$STAGED_FILES_CMD}
for FILE in $FILES; do
    php -l -d display_errors=0 $PROJECT/$FILE
    # shellcheck disable=SC2181
    if [ $? != 0 ]; then
        exit 1
    fi
    FILES_TO_LINT="$FILES_TO_LINT $PROJECT/$FILE"
done

if [ "$FILES" != "" ]; then
    # shellcheck disable=SC2086
    ./vendor/bin/phpcs --standard=PSR12 --encoding=utf-8 -p --colors --report=code ${FILES_TO_LINT}
fi

exit $?
