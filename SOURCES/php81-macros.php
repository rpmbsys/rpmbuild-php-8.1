#
# Interface versions exposed by PHP:
#
%php_core_api @PHP_APIVER@
%php_zend_api @PHP_ZENDVER@
%php_pdo_api  @PHP_PDOVER@
%php_version  @PHP_VERSION@

%php_extdir    %{_libdir}/php81/modules

%php_inidir    %{_sysconfdir}/php81/php.d

%php_incldir    %{_includedir}/php81

%__php         %{_bindir}/php81

%__phpize      %{_bindir}/phpize81

%__phpconfig    %{_bindir}/php81-config

%pecl_xmldir   %{_sharedstatedir}/php81/peclxml
