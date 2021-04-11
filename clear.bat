docker system prune \
docker system prune -a \

docker images purge \
docker rmi $(docker images -a -q) \
docker ps -a -f status=exited \
docker rm -v $(docker ps -aq -f status exited) \
docker volume prune

docker images -a


