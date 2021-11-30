ARG centos=7.9.2009
FROM aursu/php81build:${centos}-base

COPY SOURCES ${BUILD_TOPDIR}/SOURCES
COPY SPECS ${BUILD_TOPDIR}/SPECS

RUN chown -R $BUILD_USER ${BUILD_TOPDIR}/{SOURCES,SPECS}

USER $BUILD_USER
ENTRYPOINT ["/usr/bin/rpmbuild", "php81.spec", "--with", "cgi", "--with", "fpm"]
CMD ["-ba"]
