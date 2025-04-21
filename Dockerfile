FROM hyperf/hyperf:8.3-alpine-v3.19-swoole-v6

# Set workdir
WORKDIR /data/project

# Set default entrypoint to /bin/sh (bisa di override dari docker-compose)
ENTRYPOINT ["/bin/sh"]
