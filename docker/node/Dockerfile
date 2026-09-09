FROM node:22

RUN apt-get update \
    && apt-get install -y git

RUN git config --global --add safe.directory /app
RUN git config --global user.name "Maxime Audy"
RUN git config --global user.email "maxaudy@bell.net"
