PARAMS=$(filter-out run $@,$(MAKECMDGOALS))

PHP_CONTAINER=php
DCE=@docker-compose exec
DCRRM=@docker-compose run --rm

.PHONY: exec

exec:
	@$(DCRRM) $(PHP_CONTAINER) php $(PARAMS)

%: # If command not found
	@: # Do nothing, silently
