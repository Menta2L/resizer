FROM golang:1.17-buster as builder
LABEL stage=builder

ENV REPO=thoas/picfit

RUN GO111MODULE=off go get github.com/${REPO}
WORKDIR /go/src/github.com/${REPO}
RUN make docker-build-static && mv bin/picfit /picfit

###

FROM debian:buster-slim

RUN apt-get update && apt-get install -y ca-certificates

COPY --from=builder /picfit /picfit

CMD ["/picfit"]
