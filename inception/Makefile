all: start_container
	docker compose -f ./srcs/docker-compose.yml up

# create_data:
# 	@mkdir -p /home/mel-amar/data/wordpress
# 	@mkdir -p /home/mel-amar/data/mariadb

down:
	docker compose -f ./srcs/docker-compose.yml down

status:
	@echo "\n~~~ Containers : ~~~"
	@docker ps
	@echo "~~~~~~~~~~~~~~~~~~~~\n"
	@echo "~~~~~ Images : ~~~~~"
	@docker images
	@echo "~~~~~~~~~END~~~~~~~~\n"

clean: down
	@rm -rf /home/mel-amar/data
	@docker stop $(shell docker ps -aq) 2>/dev/null || true
	@docker rm $(shell docker ps -aq) 2>/dev/null || true
	@docker rmi -f $(shell docker images -q) 2>/dev/null || true
	@docker volume rm -f $(shell docker volume ls -q) 2>/dev/null || true
	@docker network rm -f $(shell docker network ls -q) 2>/dev/null || true
	@echo "All Containers, Images, Network and Volumes have been removed."

.PHONY: clean all start_container down status
