
all: image

image:
	docker build -t egergo/daheim-wordpress:latest .

push: image
	docker push egergo/daheim-wordpress:latest

.PHONY: all image
