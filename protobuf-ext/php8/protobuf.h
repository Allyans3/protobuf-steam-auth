#ifndef PROTOBUF_PHP_PROTOBUF_H
#define PROTOBUF_PHP_PROTOBUF_H

#include <stdint.h>

#define PB_FOREACH(iter, hash) \
	for (zend_hash_internal_pointer_reset_ex((hash), (iter)); zend_hash_has_more_elements_ex((hash), (iter)) == SUCCESS; zend_hash_move_forward_ex((hash), (iter)))

#ifndef convert_to_explicit_type
	#define convert_to_explicit_type(pzv, type)		\
	do {										\
		switch (type) {							\
			case IS_NULL:						\
				convert_to_null(pzv);			\
				break;							\
			case IS_LONG:						\
				convert_to_long(pzv);			\
				break;							\
			case IS_DOUBLE:						\
				convert_to_double(pzv);			\
				break;							\
			case _IS_BOOL:						\
				convert_to_boolean(pzv);		\
				break;							\
			case IS_ARRAY:						\
				convert_to_array(pzv);			\
				break;							\
			case IS_OBJECT:						\
				convert_to_object(pzv);			\
				break;							\
			case IS_STRING:						\
				convert_to_string(pzv);			\
				break;							\
			default:							\
				assert(0);						\
				break;							\
			}										\
		} while (0);
#endif

#if ZEND_MODULE_API_NO >= 20190128
#ifndef TSRMLS_CC
#define TSRMLS_CC
#endif
#ifndef TSRMLS_DC
#define TSRMLS_DC
#endif
#ifndef TSRMLS_FETCH
#define TSRMLS_FETCH()
#endif
#endif

enum
{
	WIRE_TYPE_VARINT = 0,
	WIRE_TYPE_64BIT  = 1,
	WIRE_TYPE_LENGTH_DELIMITED = 2,
	WIRE_TYPE_32BIT = 5
};

typedef union
{
	float f_val;
	int32_t i_val;
	uint32_t u_val;
} fixed32_t;

typedef union
{
	double d_val;
	int64_t i_val;
	uint64_t u_val;
} fixed64_t;

#endif /* PROTOBUF_PHP_PROTOBUF_H */
