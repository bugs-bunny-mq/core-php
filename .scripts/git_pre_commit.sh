#!/bin/bash

docker-compose up -d && docker-compose exec -T env bash -c 'bash .scripts/lint.sh'
