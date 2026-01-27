ARG rocky=10.1.20251126
FROM aursu/rpmbuild:${rocky}-build

USER root

COPY system/etc/yum.repos.d/bintray-custom-rocky.repo /etc/yum.repos.d/bintray-custom.repo

RUN dnf -y --enablerepo=bintray-custom --enablerepo=bintray-phpcustom install \
        php-cli-8.1.33 \
        php-common-8.1.33 \
        php-devel-8.1.33 \
        php-process-8.1.33 \
        php-xml-8.1.33 \
    && dnf clean all && rm -rf /var/cache/dnf /var/lib/rpm/__db*
