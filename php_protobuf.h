#ifndef PROTOBUF_PHP_PHP_PROTOBUF_H
#define PROTOBUF_PHP_PHP_PROTOBUF_H

#ifdef HAVE_CONFIG_H
#include "config.h"
#endif

#define PHP_PROTOBUF_VERSION "0.12.3"
#define PHP_PROTOBUF_EXTNAME "protobuf"

extern zend_module_entry protobuf_module_entry;
#define phpext_protobuf_ptr &protobuf_module_entry

#endif /* PROTOBUF_PHP_PHP_PROTOBUF_H */
